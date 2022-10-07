@extends('master')
@section('content')

<div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div>

<!-- Design Overlay Modal Centered with wide buttons -->

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
                    <div  id="blank-space" class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

                        <div class="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
                            <div>
                                <!-- SVG -->
                                <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-[color:rgba(var(--ni-greengray-100))]">
                                    <svg class="h-6 w-6 text-[color:rgba(var(--ni-greengray-600))]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </div>

                                <!-- contents -->
                                <div class="mt-3 text-center sm:mt-5">
                                    <h3 class="text-lg font-medium leading-6 text-[color:rgba(var(--ni-gray-900))]" id="modal-title">Payment successful</h3>
                                    <div class="mt-2">
                                        <p class="text-sm text-[color:rgba(var(--ni-gray-500))]">Thanks for opting-in for our automatic payment reminders! Every time your bill is due, we'll send you a reminder three days in advance.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- buttons -->
                            <div class="mt-5 sm:mt-6 sm:grid sm:grid-flow-row-dense sm:grid-cols-2 sm:gap-3">
                                <button type="button" class="inline-flex w-full justify-center rounded-md border border-transparent bg-[color:rgba(var(--ni-primary-600))] px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-[color:rgba(var(--ni-primary-700))] focus:outline-none focus:ring-2 focus:ring-[color:rgba(var(--ni-primary-500))] focus:ring-offset-2 sm:col-start-2 sm:text-sm">Deactivate</button>
                                <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md border border-[color:rgba(var(--ni-gray-300))] bg-white px-4 py-2 text-base font-medium text-[color:rgba(var(--ni-gray-700))] shadow-sm hover:bg-[color:rgba(var(--ni-gray-50))] focus:outline-none focus:ring-2 focus:ring-[color:rgba(var(--ni-primary-500))] focus:ring-offset-2 sm:col-start-1 sm:mt-0 sm:text-sm" id="cancel">Cancel</button>
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

    // Design Overlay Modal Centered with wide buttons function
    const overlayModalCenteredWithWideButtons  = () => {

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
    overlayModalCenteredWithWideButtons();

</script>

@endsection
