@extends('master')
@section('content')

{{-- <div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div> --}}

<!-- Design Simple Chat Box and Comment -->

<!-- main -->
<div class="mainCard">
    
    <div class="cardContainer bg-[color:rgba(var(--ni-gray-200))] p-0 sm:p-5">
        <div class="divide-y divide-[color:rgba(var(--ni-gray-300))] flex flex-col items-center p-3 h-screen">

            <!-- chat box -->
            <div class="space-y-5 p-5">

                <!-- title -->
                <div class="flex justify-center items-center">
                    <div class="select-none text-center text-sm sm:text-md px-5 py-1 bg-gradient-to-r from-[color:rgba(var(--ni-primary-400))] to-[color:rgba(var(--ni-primary-300))] text-white shadow-md rounded-xl">Chat Box</div>
                </div>

                <!-- chat box -->
                <div class="flex gap-2">

                    <!-- profile picture -->
                    <div class="select-none flex-shrink-0 rounded-full">
                        <img src="https://cdn.icon-icons.com/icons2/2643/PNG/512/male_boy_person_people_avatar_icon_159358.png" 
                            class="w-10 h-10 object-contain rounded-full"
                            alt="Profile Picture"
                            id="image"
                        >
                    </div>

                    <!-- username & messages... etc -->
                    <div class="space-y-1">
                        <div class="flex gap-2 items-center">

                            <!-- username -->
                            <div id="username" class="font-medium text-sm sm:text-md text-[color:rgba(var(--ni-primary-400))]">Ridh</div>

                            <!-- sent date -->
                            <div id="date" class="text-xs sm:text-sm text-[color:rgba(var(--ni-gray-400))] flex items-end">Nov 29, 2022 at 12:00 PM</div>
                        </div>

                        <!-- comment box -->
                        <div class="flex justify-start items-start">
                            <div id="messages" class="px-5 py-3 bg-white text-[color:rgba(var(--ni-gray-500))] shadow-md rounded-3xl">Hi, welcome to SimpleComment! Go ahead and send me a comment. 😄</div>
                        </div>

                        <div class="relative flex gap-2">
                            <div class="absolute bottom-7 -right-3">
                                <svg class="w-6 h-6" viewBox="0 0 162 136" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.8799 0.933105L0.728375 85.3758C44.1561 163.863 125.894 132.218 161.334 106.585C77.5863 117.231 26.803 40.586 11.8799 0.933105Z" fill="white" stroke="white"/>
                                </svg>   
                            </div>
                            
                            <!-- reply -->
                            <div class="select-none">
                                <button class="underline text-sm sm:text-md text-[color:rgba(var(--ni-primary-400))] hover:text-[color:rgba(var(--ni-primary-500))] duration-300">Reply</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- comment -->
            <div class="space-y-5 p-5">

                <!-- title -->
                <div class="flex justify-center items-center">
                    <div class="select-none text-center text-sm sm:text-md px-5 py-1 bg-gradient-to-r from-[color:rgba(var(--ni-primary-400))] to-[color:rgba(var(--ni-primary-300))] text-white shadow-md rounded-xl">Comment</div>
                </div>

                <!-- comment -->
                <div class="flex gap-2">

                    <!-- profile picture -->
                    <div class="select-none flex-shrink-0 rounded-full">
                        <img src="https://cdn.icon-icons.com/icons2/2643/PNG/512/male_boy_person_people_avatar_icon_159358.png" 
                            class="w-10 h-10 object-contain rounded-full"
                            alt="Profile Picture"
                            id="image"
                        >
                    </div>
    
                    <!-- username & messages... etc -->
                    <div class="space-y-1">
                        <div class="flex gap-2 items-center">
    
                            <!-- username -->
                            <div id="username" class="font-medium text-sm sm:text-md text-[color:rgba(var(--ni-primary-400))]">Ridh</div>
    
                            <!-- sent date -->
                            <div id="date" class="text-xs sm:text-sm text-[color:rgba(var(--ni-gray-400))] flex items-end">Nov 29, 2022 at 12:00 PM</div>
                        </div>
    
                        <!-- comment box -->
                        <div class="flex justify-start items-start">
                            <div id="messages" class="p-3 bg-white text-[color:rgba(var(--ni-gray-500))] shadow-md rounded-md">Hi, welcome to SimpleComment! Go ahead and send me a comment. 😄</div>
                        </div>
    
                        <!-- reply -->
                        <div class="flex gap-2">
                            <div class="select-none">
                                <button class="underline text-sm sm:text-md text-[color:rgba(var(--ni-primary-400))] hover:text-[color:rgba(var(--ni-primary-500))] duration-300">Reply</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('internalScript')

@endsection