@extends('master')
@section('content')

<div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div>

<!-- Design Overlay Notification with actions -->

<!-- main -->
<div class="mainCard">
    <!-- main card -->
    <ul class="cardContainer grid-cols-1">

        <li class="eachCard px-0 pt-0 col-span-2 md:col-span-1">
            <div class="relative flex h-screen overflow-hidden">
                <!-- click space -->
                <div id="overlayNotification" class="w-full h-screen bg-[color:rgba(var(--ni-gray-100))] border border-[color:rgba(var(--ni-gray-200))] rounded-l-lg"></div>

                <!-- notification content -->
                <div id="notificationContent" class="h-screen w-5/6 sm:w-5/6 md:w-96 lg:w-96 xl:w-96 2xl:w-96 p-5 bg-white border border-[color:rgba(var(--ni-gray-200))] shadow-lg absolute top-0 right-0">
                    <div class="flex max-w-md">
                        <h1 class="text-xl w-full">Panel title</h1>
                        <button id="btnOverlay" type="cancel">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </button>
                    </div>
                    <div class="my-5 h-80 border-2 border-dashed border-[color:rgba(var(--ni-gray-200))]"></div>
                </div>
            </div>
        </li>
    </ul>
</div>  

@endsection

@section('internalScript')

<script>

    // Design Overlay Notification with actions function
    const overlayNotificationWithActions = () => {

        const overlayNotification = $("#overlayNotification");
        const notificationContent = $("#notificationContent");
        const btnOverlay          = $("#btnOverlay");

        $(document).ready(() => {
            // click event
            overlayNotification.click(function(){
                notificationContent.css({
                    "right"       : "-400px",
                    "transition"  : "1s"
                });
            });

            // double click event
            overlayNotification.dblclick(() => {
                notificationContent.css({
                    "right"       : "0px",
                    "transition"  : "1s"
                });
            });

            // close button
            btnOverlay.click(() => {
                notificationContent.css({
                    "right"       : "-400px",
                    "transition"  : "1s"
                });
            });
        });
    }

    // call function
    overlayNotificationWithActions();

</script>

@endsection
