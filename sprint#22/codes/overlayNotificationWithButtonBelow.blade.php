@extends('master')
@section('content')

<div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div>

<!-- Design Overlay Notification with button bellow -->

<!-- main -->
<div class="mainCard">
    <!-- main card -->
    <ul class="cardContainer grid-cols-1">

        <li class="eachCard px-0 pt-0 col-span-2 md:col-span-1">
            <div class="relative flex h-screen overflow-hidden">
                <!-- click space -->
                <div id="overlayNotification" class="w-full h-screen bg-[color:rgba(var(--ni-gray-100))] border border-[color:rgba(var(--ni-gray-200))] rounded-l-lg"></div>

                <!-- notification content -->
                <div id="notificationContent" class="w-5/6 sm:w-5/6 md:w-2/6 lg:w-2/6 xl:w-2/6 2xl:w-2/6 p-5 top-10 right-0 sm:right-0 md:right-10 lg:right-10 xl:right-10 bg-white border border-[color:rgba(var(--ni-gray-200))] shadow-lg absolute rounded-lg">
                    <div class="flex pl-4 w-full my-auto">
                        
                        <!-- inbox svg icon -->
                        <div class="flex-shrink-0">
                            <svg class="h-6 w-6 text-[color:rgba(var(--ni-gray-400))]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H6.911a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661z" />
                            </svg>
                        </div>

                        <!-- content -->
                        <div class="ml-3 w-0 flex-1 pt-0.5">
                            <p class="font-medium text-[color:rgba(var(--ni-gray-900))]">Discussion moved</p>
                            <p class="mt-1 text-sm text-[color:rgba(var(--ni-gray-500))]">You have a meeting this week. Do not miss this special event! Please set your reminder now.</p>
                            <!-- undo & dismiss button --> 
                            <div class="mt-3 flex space-x-7">
                                <button type="button" class="rounded-md bg-white text-sm font-medium text-[color:rgba(var(--ni-primary-600))] hover:text-[color:rgba(var(--ni-primary-500))] focus:outline-none focus:ring-2 focus:ring-[color:rgba(var(--ni-primary-500))] focus:ring-offset-2">Undo</button>
                                <button type="button" class="rounded-md bg-white text-sm font-medium text-[color:rgba(var(--ni-gray-700))] hover:text-[color:rgba(var(--ni-gray-500))] focus:outline-none focus:ring-2 focus:ring-[color:rgba(var(--ni-primary-500))] focus:ring-offset-2">Dismiss</button>
                            </div>
                        </div>

                        <!-- close x button -->
                        <div class="ml-4 flex flex-shrink-0">
                            <button id="btnOverlay" type="button" class="inline-flex rounded-md bg-white text-[color:rgba(var(--ni-gray-400))] hover:text-[color:rgba(var(--ni-gray-500))]">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                                </svg>
                            </button>
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

    // Design Overlay Notification with button below function
    const overlayNotificationWithButtonBelow = () => {

        const overlayNotification = $("#overlayNotification");
        const notificationContent = $("#notificationContent");
        const btnOverlay          = $("#btnOverlay");

        $(document).ready(() => {
            // click event
            overlayNotification.click(() => {
                notificationContent.css({
                    "transition"  : "1s",
                    "right"       : "-555px"
                });
            });

            // double click event
            overlayNotification.dblclick(() => {
                notificationContent.css({
                    "transition"  : "1s",
                    "right"       : "40px"
                });
            });

            // close button
            btnOverlay.click(() => {
                notificationContent.css({
                    "right"       : "-555px",
                    "transition"  : "1s"
                });
            });
        });
    }

    // call function
    overlayNotificationWithButtonBelow();

</script>

@endsection
