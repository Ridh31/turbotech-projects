@extends('master')
@section('content')

{{-- <div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div> --}}

<!-- Design Attachment Upload in comment -->

<!-- main -->
<div class="mainCard">
    
    <div class="cardContainer bg-[color:rgba(var(--ni-gray-200))] p-2 sm:p-5">
        
        <div id="drop-file" class="flex justify-center gap-2 h-screen">

            <!-- profile picture -->
            <div class="select-none flex-shrink-0 rounded-full">
                <img src="https://cdn.icon-icons.com/icons2/2643/PNG/512/male_boy_person_people_avatar_icon_159358.png" 
                    class="w-10 h-10 object-contain rounded-full"
                    alt="Profile Picture"
                    id="image"
                >
            </div>

            <!-- textarea & button -->
            <div class="min-w-0 flex-1">
                <form action="#" class="relative shadow-sm rounded-lg">
                    <div class="overflow-hidden rounded-lg">
                        <div class="pl-5 pr-2 py-3 bg-white">
                            <label for="comment" class="sr-only">Write a comment&hellip;</label>
                            <textarea rows="3" name="comment" id="comment" class="block w-full resize-none border-0 text-[color:rgba(var(--ni-gray-500))] focus:outline-0 focus:ring-0 sm:text-sm duration-300" placeholder="Write a comment&hellip;" /></textarea>
                        </div>
                        <div class="h-20 bg-white"></div>
                    </div>

                    <!-- filename -->
                    <div class="absolute inset-x-0 bottom-9 flex justify-between py-2 pl-3 pr-2">
                        <div id="filename" class="cursor-grab overflow-y-auto pb-2 flex gap-2"></div>
                    </div>

                    <!-- save button -->
                    <div class="absolute inset-x-0 bottom-0 flex justify-between py-2 pl-3 pr-2">
                        <div class="flex-shrink-0">
                            <button type="button" class="inline-flex items-center button -primary text-sm py-1 waves-effect">Save</button>
                        </div>
                    </div>

                    <!-- attachments -->
                    <div class="absolute inset-x-0 left-auto bottom-0 flex justify-between py-2 pl-3 pr-2">
                        <div class="flex-shrink-0">
                            <input type="file" name="file" id="file-upload" class="hidden" multiple>
                            <div id="attach-file" class="cursor-pointer p-1 hover:bg-[color:rgba(var(--ni-gray-200))] text-[color:rgba(var(--ni-gray-400))] hover:text-[color:rgba(var(--ni-gray-500))] rounded-md duration-300 waves-effect" title="Attach file">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path></svg>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('internalScript')

<script>

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

            // call send data function after updated files
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

</script>

@endsection