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
                <form action="#" class="relative">
                    <div class="overflow-hidden shadow-sm rounded-lg">
                        <label for="comment" class="sr-only">Write a comment&hellip;</label>
                        <textarea rows="5" name="comment" id="comment" class="block w-full resize-none border-0 px-5 py-3 text-[color:rgba(var(--ni-gray-500))] focus:outline-none focus:ring-0 sm:text-sm duration-300" placeholder="Write a comment&hellip;" /></textarea>
                    </div>

                    <!-- filename -->
                    <div class="absolute inset-x-0 bottom-11 flex justify-between py-2 pl-3 pr-2">
                        <div id="filename" class="overflow-y-auto pb-2 flex gap-2"></div>
                    </div>

                    <!-- save button -->
                    <div class="absolute inset-x-0 bottom-0 flex justify-between py-2 pl-3 pr-2">
                        <div class="flex-shrink-0">
                            <button type="button" class="inline-flex items-center border border-transparent bg-[color:rgba(var(--ni-primary-500))] px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-[color:rgba(var(--ni-primary-600))] focus:outline-none rounded-md duration-300">Save</button>
                        </div>
                    </div>

                    <!-- attachments -->
                    <div class="absolute inset-x-0 left-auto bottom-0 flex justify-between py-2 pl-3 pr-2">
                        <div class="flex-shrink-0">
                            <input type="file" name="file[]" id="file-upload" class="hidden" multiple>
                            <div id="attach-file" class="cursor-pointer p-2 hover:bg-[color:rgba(var(--ni-gray-200))] text-[color:rgba(var(--ni-gray-400))] hover:text-[color:rgba(var(--ni-gray-500))] rounded-md duration-300" title="Attach file">
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

    const attachmentUploadInComment = () => {

        const dropFile   = $("#drop-file");
        const fileUpload = $("#file-upload");
        const attactFile = $("#attach-file");
        const filename   = $("#filename");

        // hidden filename by default
        filename.addClass("hidden");

        // append filename function
        const appendAndRemoveFilenames = (file) => {

            // append filename
            filename.append(`
                <div class="select-none flex gap-1 px-3 py-1 bg-[color:rgba(var(--ni-gray-400))] text-xs text-white rounded-xl">
                    <span class="my-auto">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg>
                    </span>
                    <span class="my-auto">${file.name}</span>
                    <span class="cursor-pointer my-auto hover:text-[color:rgba(var(--ni-danger-500))] duration-300">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </span>
                </div>
            `);
            
            // get x icons
            const removeFile = $("#filename div span:last-child");
            
            // onclick x remove each filename
            removeFile.each(function() {
                $(this).click(function() {

                    const parent = this.parentNode;
                    parent.remove();
                });
            });
        }

        // upload or drop file
        const dropAndUploadFiles = () => {

            // drag files
            dropFile.on("drop", function(ev) {

                ev.preventDefault();
                ev.stopPropagation();

                if ( ev.originalEvent.dataTransfer ) {
                    if ( ev.originalEvent.dataTransfer.files.length ) {

                        const droppedFiles = ev.originalEvent.dataTransfer.files;

                        $.each(droppedFiles, function(i, file) {
                            
                            filename.removeClass("hidden");

                            // display each filenames after drop
                            appendAndRemoveFilenames(file);
                        });
                    }
                }
                return false;
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

                // display each filenames after upload
                $.each(uploadFile, function(i, file) {

                    appendAndRemoveFilenames(file);
                });

                // reset value after upload if it has already been upload & remove
                $(this).val("");
            });
        }

        // call sub functions
        dropAndUploadFiles();
    }

    // call function
    attachmentUploadInComment();

</script>

@endsection