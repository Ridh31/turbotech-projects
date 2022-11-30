@extends('master')
@section('content')

{{-- <div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div> --}}

<!-- Design Comment with Reply -->

<!-- main -->
<div class="mainCard">
    
    <div class="cardContainer bg-[color:rgba(var(--ni-gray-200))] p-2 sm:p-5">
        <div class="divide-y divide-[color:rgba(var(--ni-gray-300))] flex flex-col items-center p-3 h-screen">

            <!-- comment with reply details -->
            <div class="space-y-5 pb-10 sm:pb-20">

                <!-- title -->
                <div class="flex justify-center items-center">
                    <div class="select-none text-center text-sm sm:text-md px-5 py-1 bg-gradient-to-r from-[color:rgba(var(--ni-primary-400))] to-[color:rgba(var(--ni-primary-300))] text-white shadow-md rounded-xl">Comment with Reply Details</div>
                </div>

                <!-- comment with reply details -->
                <div class="flex flex-col space-y-5">
                
                    <!-- comment -->
                    <div class="relative flex gap-2">
    
                        <!-- profile picture -->
                        <div class="select-none flex-shrink-0 rounded-full">
                            <img src="https://cdn.icon-icons.com/icons2/2643/PNG/512/male_boy_person_people_avatar_icon_159358.png" 
                                class="w-10 h-10 object-contain rounded-full"
                                alt="Profile Picture"
                                id="comment-profile"
                            >
                        </div>
            
                        <!-- username & messages... etc -->
                        <div class="space-y-1">
                            <div class="flex gap-2 items-center">
            
                                <!-- username -->
                                <div id="username" class="font-medium text-sm sm:text-md text-[color:rgba(var(--ni-primary-400))]">Ridh</div>
            
                                <!-- sent date -->
                                <div id="date" class="text-xs sm:text-sm text-[color:rgba(var(--ni-gray-400))] flex items-end">Nov 30, 2022 at 12:00 PM</div>
                            </div>
            
                            <!-- message box -->
                            <div class="flex w-full p-3 bg-white shadow-md rounded-md">
                                <div id="messages" class="text-[color:rgba(var(--ni-gray-500))]">Hi, welcome to SimpleComment! Go ahead and send me a comment. 😄</div>
                            </div>
                        </div>
                        
                        <!-- line separator -->
                        <div class="absolute left-5 top-11 ml-auto p-[1px] bg-[color:rgba(var(--ni-gray-300))] h-full"></div>
                    </div>
            
                    <!-- reply -->
                    <div class="ml-12 flex gap-2">
    
                        <!-- image -->
                        <div class="select-none flex-shrink-0 rounded-full">
                            <img src="https://cdn.iconscout.com/icon/free/png-256/avatar-370-456322.png" 
                                class="w-7 h-7 object-contain rounded-full"
                                alt="Profile Picture"
                                id="reply-profile"
                            >
                        </div>
    
                        <!-- reply: input & button -->
                        <form class="flex">
    
                            <!-- reply: input -->
                            <input type="text" placeholder="Reply comment&hellip;" class="w-full sm:w-60 px-3 py-1 bg-white text-sm text-[color:rgba(var(--ni-gray-500))] focus:outline-none shadow-md rounded-l-md">
    
                            <!-- reply: button -->
                            <button type="button" class="px-1 bg-[color:rgba(var(--ni-primary-500))] hover:bg-[color:rgba(var(--ni-primary-600))] shadow-md rounded-r-md duration-300">
                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.75778 6.14799C6.84443 5.77187 6.0833 5.45843 5.49196 5.30702C4.91915 5.16036 4.18085 5.07761 3.63766 5.62862C3.09447 6.17962 3.18776 6.91666 3.34259 7.48732C3.50242 8.07644 3.8267 8.83302 4.21583 9.7409L4.86259 11.25H10C10.4142 11.25 10.75 11.5858 10.75 12C10.75 12.4142 10.4142 12.75 10 12.75H4.8626L4.21583 14.2591C3.8267 15.167 3.50242 15.9236 3.34259 16.5127C3.18776 17.0833 3.09447 17.8204 3.63766 18.3714C4.18085 18.9224 4.91915 18.8396 5.49196 18.693C6.0833 18.5416 6.84443 18.2281 7.75777 17.852L19.1997 13.1406C19.4053 13.0561 19.6279 12.9645 19.7941 12.867C19.944 12.779 20.3434 12.5192 20.3434 12C20.3434 11.4808 19.944 11.221 19.7941 11.133C19.6279 11.0355 19.4053 10.9439 19.1997 10.8594L7.75778 6.14799Z" fill="white"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- comment with onclick reply -->
            <div class="space-y-5 py-10 sm:py-20">

                <!-- title -->
                <div class="flex justify-center items-center">
                    <div class="select-none text-center text-sm sm:text-md px-5 py-1 bg-gradient-to-r from-[color:rgba(var(--ni-primary-400))] to-[color:rgba(var(--ni-primary-300))] text-white shadow-md rounded-xl">Comment with "Reply button"</div>
                </div>

                <!-- comment with onclick reply -->
                <div class="flex flex-col space-y-5">
                
                    <!-- comment -->
                    <div class="relative flex gap-2">
    
                        <!-- profile picture -->
                        <div class="select-none flex-shrink-0 rounded-full">
                            <img src="https://cdn.icon-icons.com/icons2/2643/PNG/512/male_boy_person_people_avatar_icon_159358.png" 
                                class="w-10 h-10 object-contain rounded-full"
                                alt="Profile Picture"
                                id="comment-profile"
                            >
                        </div>
            
                        <!-- username & messages... etc -->
                        <div class="space-y-1">
                            <div class="flex gap-2 items-center">
            
                                <!-- username -->
                                <div id="username" class="font-medium text-sm sm:text-md text-[color:rgba(var(--ni-primary-400))]">Ridh</div>
            
                                <!-- sent date -->
                                <div id="date" class="text-xs sm:text-sm text-[color:rgba(var(--ni-gray-400))] flex items-end">Nov 30, 2022 at 12:00 PM</div>
                            </div>
            
                            <!-- message box -->
                            <div class="flex w-full p-3 bg-white shadow-md rounded-md">
                                <div id="messages" class="text-[color:rgba(var(--ni-gray-500))]">Hi, welcome to SimpleComment! Go ahead and send me a comment. 😄</div>
                            </div>

                            <!-- reply -->
                            <div id="reply-button" class="select-none">
                                <button class="underline text-sm sm:text-md text-[color:rgba(var(--ni-primary-400))] hover:text-[color:rgba(var(--ni-primary-500))] duration-300">Reply</button>
                            </div>
                        </div>
                        
                        <!-- line separator -->
                        <div id="line-separator" class="absolute left-5 top-11 ml-auto p-[1px] bg-[color:rgba(var(--ni-gray-300))] h-full hidden"></div>
                    </div>
            
                    <!-- reply -->
                    <div id="reply-details" class="ml-12 flex gap-2">
    
                        <!-- image -->
                        <div class="select-none flex-shrink-0 rounded-full">
                            <img src="https://cdn.iconscout.com/icon/free/png-256/avatar-370-456322.png" 
                                class="w-7 h-7 object-contain rounded-full"
                                alt="Profile Picture"
                                id="reply-profile"
                            >
                        </div>
    
                        <!-- reply: input & button -->
                        <form class="flex">
    
                            <!-- reply: input -->
                            <input type="text" placeholder="Reply comment&hellip;" class="w-full sm:w-60 px-3 py-1 bg-white text-sm text-[color:rgba(var(--ni-gray-500))] focus:outline-none shadow-md rounded-l-md">
    
                            <!-- reply: button -->
                            <button type="button" class="px-1 bg-[color:rgba(var(--ni-primary-500))] hover:bg-[color:rgba(var(--ni-primary-600))] shadow-md rounded-r-md duration-300">
                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.75778 6.14799C6.84443 5.77187 6.0833 5.45843 5.49196 5.30702C4.91915 5.16036 4.18085 5.07761 3.63766 5.62862C3.09447 6.17962 3.18776 6.91666 3.34259 7.48732C3.50242 8.07644 3.8267 8.83302 4.21583 9.7409L4.86259 11.25H10C10.4142 11.25 10.75 11.5858 10.75 12C10.75 12.4142 10.4142 12.75 10 12.75H4.8626L4.21583 14.2591C3.8267 15.167 3.50242 15.9236 3.34259 16.5127C3.18776 17.0833 3.09447 17.8204 3.63766 18.3714C4.18085 18.9224 4.91915 18.8396 5.49196 18.693C6.0833 18.5416 6.84443 18.2281 7.75777 17.852L19.1997 13.1406C19.4053 13.0561 19.6279 12.9645 19.7941 12.867C19.944 12.779 20.3434 12.5192 20.3434 12C20.3434 11.4808 19.944 11.221 19.7941 11.133C19.6279 11.0355 19.4053 10.9439 19.1997 10.8594L7.75778 6.14799Z" fill="white"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('internalScript')

<script>

    const commentWithOnclickReply = () => {

        const replyBtn      = $("#reply-button");
        const lineSeparator = $("#line-separator");
        const replyDetails  = $("#reply-details");

        // hidden reply details by default
        replyDetails.addClass("hidden");

        $(function() {

            // show reply details onclick
            replyBtn.click(function() {

                // hidden reply button
                setTimeout(() => {
                    $(this).addClass("hidden");
                }, 100);

                // show reply contents
                setTimeout(() => {

                    lineSeparator.removeClass("hidden");
                    replyDetails.removeClass("hidden");

                }, 200);
            });
        });
        
    }

    // call function
    commentWithOnclickReply();

</script>

@endsection