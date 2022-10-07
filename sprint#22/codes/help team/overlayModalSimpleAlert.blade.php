@extends('master')
@section('content')

<div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div>

<!-- Design Overlay Modal Simple alert -->

<!-- main -->
<div class="mainCard">
    <!-- main card -->
    <ul class="cardContainer grid-cols-1">
        <li class="eachCard px-0 pt-0 col-span-2 md:col-span-1 h-screen bg-[color:rgba(var(--ni-gray-100))]">

            <!-- open modal button -->
            <div class="text-center my-5">
                <button class="rounded-lg px-4 py-2 bg-[color:rgba(var(--ni-primary-500))] hover:bg-[color:rgba(var(--ni-primary-600))] border border-[color:rgba(var(--ni-primary-500))] text-white transition duration-150 shadow-lg" id="open-modal" type="button" >Open Modal</button>
            </div>

            <!-- modal -->
            <div id="modal" class="relative z-10 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">

                <!-- dark background -->
                <div class="fixed inset-0 bg-[color:rgba(var(--ni-gray-500),0.7)] bg-opacity-75 transition-opacity"></div>
            
                <div class="fixed inset-0 z-10 overflow-y-auto">
                    <div id="blank-space" class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

                        <div class="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
                            <div class="sm:flex sm:items-start">

                                <!-- SVG -->
                                <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-[color:rgba(var(--ni-red-100))] sm:mx-0 sm:h-10 sm:w-10">
                                    <svg class="h-6 w-6 text-[color:rgba(var(--ni-red-600))]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 10.5v3.75m-9.303 3.376C1.83 19.126 2.914 21 4.645 21h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 4.88c-.866-1.501-3.032-1.501-3.898 0L2.697 17.626zM12 17.25h.007v.008H12v-.008z" />
                                    </svg>
                                </div>

                                <!-- contents -->
                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <h3 class="text-lg font-medium leading-6 text-[color:rgba(var(--ni-gray-900))]" id="modal-title">Deactivate account</h3>
                                    <div class="mt-2">
                                        <p class="text-sm text-[color:rgba(var(--ni-gray-500))]">Are you sure you want to deactivate your account? All of your data will be permanently removed from our servers forever. This action cannot be undone.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- buttons -->
                            <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                                <button type="button" class="inline-flex w-full justify-center rounded-md border border-transparent bg-[color:rgba(var(--ni-red-600))] px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-[color:rgba(var(--ni-red-700))] focus:outline-none focus:ring-2 focus:ring-[color:rgba(var(--ni-red-500))] focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm">Deactivate</button>
                                <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md border border-[color:rgba(var(--ni-gray-300))] bg-white px-4 py-2 text-base font-medium text-[color:rgba(var(--ni-gray-700))] shadow-sm hover:bg-[color:rgba(var(--ni-gray-50))] focus:outline-none focus:ring-2 focus:ring-[color:rgba(var(--ni-primary-500))]focus:ring-offset-2 sm:mt-0 sm:w-auto sm:text-sm" id="cancel">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>

@endsection

@section('internalScript')

<script>

    // Design Overlay Modal Simple alert function
    const overlayModalSimpleAlert  = () => {

        const openModal  = $("#open-modal");
        const modal      = $("#modal");
        const cancelBtn  = $("#cancel");
        const blankSpace = $("#blank-space");

        $(document).ready(() => {

            // open modal button
            openModal.click(() => {
                modal.removeClass("hidden");
            });

            // cancel button
            cancelBtn.click(() => {
                modal.addClass("hidden");
            });

            // blank space click
            blankSpace.click(() => {
                modal.addClass("hidden");
            });

        });
    }
    
    // call function
    overlayModalSimpleAlert();

</script>

@endsection