/*
*--------------------------------------------------------------------------
* upload attachments (main function)
*--------------------------------------------------------------------------
*/
const attachmentUploadInComment = () => {

    const dropFile   = $("#drop-file");
    const fileUpload = $("#file-upload");
    const attactFile = $("#attach-file");
    const filename   = $("#filename");

    // hidden filename by default
    filename.addClass("hidden");

    let attachment_index = -1;

    /*
    *--------------------------------------------------------------------------
    * append attachment names to UI after upload function
    *--------------------------------------------------------------------------
    */
    const appendFilenames = (fileLists, defaultFiles, fileLength) => {

        // append filename to UI
        $.each(defaultFiles, function(fileLength, file) {

            // increase index
            attachment_index++;

            filename.append(`
                <div class="select-none flex gap-1 px-3 py-1 bg-[color:rgba(var(--ni-gray-400))] text-xs text-white rounded-xl">
                    <span class="my-auto">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg>
                    </span>
                    <span class="my-auto whitespace-nowrap" data-name-id="${attachment_index}">${file.name}</span>
                    <span class="cursor-pointer my-auto hover:text-[color:rgba(var(--ni-danger-500))] duration-300" data-atttachment-id="${attachment_index}">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </span>
                </div>
            `);
        });

        const filenameAfterAppend = filename.find("span:nth-child(2)");

        var duplicate = {};

        // avoid duplicate fileupload
        filenameAfterAppend.each(function() {
            
            var name = $(this).text();

            // if name is already append
            if ( duplicate[name] ) {

                // remove duplicate append files
                $(this).parent().remove();

                // set duplicated files to ""
                const duplicateFileIndex = $(this).data("name-id");
                fileLists[duplicateFileIndex] = null;

            } else {
                duplicate[name] = true;
            }
        });
    }

    /*
    *--------------------------------------------------------------------------
    * remove attachment names and attachment files function
    *--------------------------------------------------------------------------
    */
    const removeAttachments = (files, filesLength) => {

        const removeIcons = ("span:last-child");
        var remainFiles   = [];

        filename.on("click", removeIcons, function() {

            const fileIndex   = $(this).data("atttachment-id");
            const parent      = $(this).parent();

            // remove attachment names from UI
            parent.remove();

            // set removed files to ""
            files[fileIndex] = null;
        });
        
        // get remain files after remove
        remainFiles = files;

        // call send date function after updated files
        sendData(remainFiles);
    }

    /*
    *--------------------------------------------------------------------------
    * drag and drop or upload files function
    *--------------------------------------------------------------------------
    */
    const dropAndUploadFiles = () => {

        var fileLists = [];

        // drag files
        dropFile.on("drop", function(ev) {

            ev.preventDefault();
            ev.stopPropagation();

            if ( ev.originalEvent.dataTransfer ) {
                if ( ev.originalEvent.dataTransfer.files.length ) {

                    const droppedFiles = ev.originalEvent.dataTransfer.files;
                    const droppedFilesLength = ev.originalEvent.dataTransfer.files.length;

                    filename.removeClass("hidden");

                    // push each files to file lists after dropped
                    $.each(droppedFiles, function(i, file) {
                        fileLists.push(file);
                    });

                    // display each filenames after dropped files
                    appendFilenames(fileLists, droppedFiles, droppedFilesLength);
                }
            }
        });

        dropFile.on("dragover", function(ev) {
            ev.preventDefault();
        });

        // attach files
        attactFile.click(function() {
            fileUpload.trigger("click");
        });

        fileUpload.change(function() {

            const uploadFile       = this.files;
            const uploadFileLength = this.files.length;

            filename.removeClass("hidden");

            // push each files to file lists after upload
            $.each(uploadFile, function(i, file) {
                fileLists.push(file);
            });

            // display each filenames after uploaded files
            appendFilenames(fileLists, uploadFile, uploadFileLength);
        });

        // get last updated files for remove
        removeAttachments(fileLists, fileLists.length);
    }

    /*
    *--------------------------------------------------------------------------
    * redundant files
    *--------------------------------------------------------------------------
    */
    function redundantFiles(element){
        return (element != null && element !== false && element !== "");
    }

    /*
    *--------------------------------------------------------------------------
    * save button => onclick get last updated files from users
    *--------------------------------------------------------------------------
    */
    const sendData = (lastUpdatedFiles) => {

        const saveButton = $("button");

        // onclick save button
        saveButton.click(function() {

            // remove redundant files
            var attachments = lastUpdatedFiles.filter(redundantFiles);
            console.log(attachments);
        });
    }

    // call drop and upload files functions
    dropAndUploadFiles();

}

// call main function
attachmentUploadInComment();

/*
*--------------------------------------------------------------------------
* make attachments able to scroll
*--------------------------------------------------------------------------
*/
// slider item
const attachments = document.querySelector("#filename");

// slider attachments function
const slider = (sliderItem, sliderSpeed) => {

    let isDown = false;
    let startX;
    let scrollLeft;

    sliderItem.addEventListener("mousedown", (e) => {

        isDown = true;
        sliderItem.classList.add("active");
        startX = e.pageX - sliderItem.offsetLeft;
        scrollLeft = sliderItem.scrollLeft;
    });

    sliderItem.addEventListener("mouseleave", () => {
        isDown = false;
        sliderItem.classList.remove("active");
    });

    sliderItem.addEventListener("mouseup", () => {
        isDown = false;
        sliderItem.classList.remove("active");
    });

    sliderItem.addEventListener("mousemove", (e) => {

        if(!isDown) return;
        e.preventDefault();
        const x = e.pageX - sliderItem.offsetLeft;
        const walk = (x - startX) * sliderSpeed;
        sliderItem.scrollLeft = scrollLeft - walk;
    });
}

// call slider function
slider(attachments, 1);