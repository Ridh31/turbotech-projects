@extends('master')
@section('content')

<div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div>

<!-- Design Overlay Notification with avatar -->

<!-- main -->
<div class="mainCard">
    <!-- main card -->
    <ul class="cardContainer grid-cols-1">

        <li class="eachCard px-0 pt-0 col-span-2 md:col-span-1">
            <div class="relative flex h-screen overflow-hidden">
                <!-- click space -->
                <div id="overlayNotification" class="w-full h-screen bg-[color:rgba(var(--ni-gray-100))] border border-[color:rgba(var(--ni-gray-200))] rounded-l-lg"></div>

                <!-- notification content -->
                <div id="notificationContent" class="h-20 w-auto sm:flex-none flex pl-5 top-10 right-0 sm:right-0 md:right-10 lg:right-10 xl:right-10 bg-white border border-[color:rgba(var(--ni-gray-200))] shadow-lg absolute rounded-lg">
                    <div class="my-auto">
                        <img class="w-16 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80" alt="">
                    </div>
                    <div class="pl-4 pr-0 sm:pr-0 md:pr-20 lg:pr-20 xl:pr-20 w-full my-auto">
                        <p>Emilia Gates</p>
                        <p class="mt-1 text-sm text-[color:rgba(var(--ni-gray-500))]">Sure! 8:30pm works great!</p>
                    </div>
                    <div class="flex border-l border-[color:rgba(var(--ni-gray-200))]">
                        <button type="button" class="flex w-full items-center justify-center rounded-none rounded-r-lg border border-transparent p-4 text-sm font-medium text-[color:rgba(var(--ni-primary-600))] hover:text-[color:rgba(var(--ni-primary-500))] focus:outline-none focus:ring-2 focus:ring-[color:rgba(var(--ni-primary-500))]">Reply</button>
                    </div>
                </div>
            </div>   
        </li>
    </ul>
</div>  

@endsection

@section('internalScript')

<script>

    // Design Overlay Notification with avatar function
    const overlayNotificationWithAvatar = () => {

        const overlayNotification = $("#overlayNotification");
        const notificationContent = $("#notificationContent");

        $(document).ready(() => {
            // click event
            overlayNotification.click(() => {
                notificationContent.css({
                    "transition"  : "1s",
                    "right"       : "-450px"
                });
            });

            // double click event
            overlayNotification.dblclick(() => {
                notificationContent.css({
                    "transition"  : "1s",
                    "right"       : "40px"
                });
            });
        });
    }

    // call function
    overlayNotificationWithAvatar();

</script>

@endsection
