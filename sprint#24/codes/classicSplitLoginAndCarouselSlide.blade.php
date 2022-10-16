@extends('master')
@section('internalCss')
<link rel="stylesheet" type="text/css" href="{{ asset('css/evoCalendar.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>

@endsection
@section('content')

{{-- <div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div> --}}

<!-- Design Classic Split Login and Carousel Slide -->

<!-- main -->
<div class="mainCard">
    
    <!-- container -->
    <div class="cardContainer bg-white border border-[color:rgba(var(--ni-gray-200))] p-4 rounded-xl sm:rounded-l-xl">
        <div class="h-auto min-h-screen flex flex-row justify-center p-4 lg:p-0 select-none bg-[color:rgba(var(--ni-primary-100))]">

            <!-- carousels: left side -->
            <div class="lg:w-[50%] rounded-xl bg-gradient-to-br from-[color:rgba(var(--ni-primary-300))] pb-0 lg:pb-0 xl:pb-40 to-[color:rgba(var(--ni-primary-600))] hidden md:hidden lg:block">
                <div class="relative h-full" data-carousel="static">

                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-[99%]">

                        <!-- item 1 -->
                        <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20" data-carousel-item="active">
                            <div class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-80 left-1/2">
                                <div class="rounded-xl bg-white w-4/5 mx-auto mt-36 shadow-md divide-y divide-[color:rgba(var(--ni-gray-200))]">

                                    <!-- divide: item 1 (up) -->
                                    <div class="px-5 pt-5 pb-3">
                                       <!-- item 1: title -->
                                        <div class="flex font-medium">
                                            <div class="text-xl text-[color:rgba(var(--ni-gray-800))]">Redesign</div>
                                            <div class="ml-3 px-2 py-0.5 mr-auto text-md text-[color:rgba(var(--ni-primary-500))] bg-[color:rgba(var(--ni-primary-200))] rounded-lg">Active</div>
                                            <button>
                                                <svg class="w-5 h-5 text-[color:rgba(var(--ni-gray-600))] my-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                            </button>
                                        </div>

                                        <!-- item 1: post details -->
                                        <div class="flex my-3">
                                            <div class="w-9 h-9 flex-none">
                                                <img class="rounded-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQnDVLvpYHYEkteOUkWNPpHZVhNIAMIz3YWze1IkSm9Q&s" alt="">
                                            </div>
                                            <div class="ml-3">
                                                <div class="flex lg:flex-col xl:flex-row">
                                                    <div class="font-semibold text-[color:rgba(var(--ni-gray-800))]">Amanda Smith</div>
                                                    <div class="mx-3 text-[color:rgba(var(--ni-gray-400))] lg:hidden xl:block">&#8226;</div>
                                                    <div class="text-sm text-[color:rgba(var(--ni-gray-400))] my-auto">Today 11:11am</div>
                                                </div>
                                                <div class="mt-2 text-[color:rgba(var(--ni-gray-600))]">Hey! Just wanted to check in on the status of the redesign concepts for the new internal ticket management system</div>
                                            </div>
                                        </div>

                                        <!-- item 1: buttons -->
                                        <div class="flex lg:flex-col xl:flex-row lg:space-x-0 lg:space-y-2 xl:space-x-2 xl:space-y-0 my-5">
                                            <button class="w-full p-2 border border-[color:rgba(var(--ni-gray-300))] hover:bg-[color:rgba(var(--ni-gray-500))] hover:text-white rounded-lg duration-300">Cancel</button>
                                            <button class="w-full p-2 bg-[color:rgba(var(--ni-primary-500))] hover:bg-[rgba(var(--ni-primary-600))] text-white rounded-lg duration-300">Reply</button>
                                        </div>
                                    </div>

                                    <!-- divide: item 1 (center) -->
                                    <div class="px-5 pt-3">
                                        <!-- item 1: reply details -->
                                        <div class="flex my-3">
                                            <div class="w-9 h-9 flex-none">
                                                <img class="rounded-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQnDVLvpYHYEkteOUkWNPpHZVhNIAMIz3YWze1IkSm9Q&s" alt="">
                                            </div>
                                            <div class="ml-3">
                                                <div class="flex lg:flex-col xl:flex-row">
                                                    <div class="font-semibold text-[color:rgba(var(--ni-gray-800))]">You</div>
                                                    <div class="mx-3 text-[color:rgba(var(--ni-gray-400))] lg:hidden xl:block">&#8226;</div>
                                                    <div class="text-sm text-[color:rgba(var(--ni-gray-400))] my-auto">Today 11:13am</div>
                                                </div>
                                                <div class="mt-2">
                                                    <div class="text-[color:rgba(var(--ni-gray-600))]">Hey, no problem. I' m nealy done with the first drafts and I will send them over in a second. Here is it!</div>
                                                </div>

                                                <!-- files -->
                                                <div class="flex my-3">
                                                    <div class="p-1 border border-[color:rgba(var(--ni-gray-300))] rounded-md">
                                                        <svg class="w-3 h-3" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" transform="translate(4)"> <circle cx="12" cy="12" r="4" fill="#19BCFE"/> <path fill="#09CF83" d="M4,24 C6.209139,24 8,22.209139 8,20 C8,19.3969461 8,18.0636128 8,16 C6.20303877,16 4.86970543,16 4,16 C1.790861,16 0,17.790861 0,20 C0,22.209139 1.790861,24 4,24 Z"/>
                                                            <path fill="#A259FF" d="M4,16 C4.73637967,16 6.069713,16 8,16 L8,8 C6.069713,8 4.73637967,8 4,8 C1.790861,8 0,9.790861 0,12 C0,14.209139 1.790861,16 4,16 Z"/><path fill="#F24E1E" d="M4,8 C4.73637967,8 6.069713,8 8,8 L8,0 C6.069713,0 4.73637967,0 4,0 C1.790861,0 0,1.790861 0,4 C0,6.209139 1.790861,8 4,8 Z"/><path fill="#FF7262" d="M12,8 L8,8 L8,8 L8,0 L12,0 L12,0 C14.209139,0 16,1.790861 16,4 C16,6.209139 14.209139,8 12,8 Z"/></g>
                                                        </svg>
                                                    </div>
                                                    <div class="ml-2 font-medium text-sm text-[color:rgba(var(--ni-gray-700))] hover:text-[color:rgba(var(--ni-primary-500))]">management_system.fig</div>
                                                </div>
                                                <div class="flex my-3">
                                                    <div class="p-1 border border-[color:rgba(var(--ni-gray-300))] rounded-md">
                                                        <svg class="w-3 h-3" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" transform="translate(4)"> <circle cx="12" cy="12" r="4" fill="#19BCFE"/> <path fill="#09CF83" d="M4,24 C6.209139,24 8,22.209139 8,20 C8,19.3969461 8,18.0636128 8,16 C6.20303877,16 4.86970543,16 4,16 C1.790861,16 0,17.790861 0,20 C0,22.209139 1.790861,24 4,24 Z"/>
                                                            <path fill="#A259FF" d="M4,16 C4.73637967,16 6.069713,16 8,16 L8,8 C6.069713,8 4.73637967,8 4,8 C1.790861,8 0,9.790861 0,12 C0,14.209139 1.790861,16 4,16 Z"/><path fill="#F24E1E" d="M4,8 C4.73637967,8 6.069713,8 8,8 L8,0 C6.069713,0 4.73637967,0 4,0 C1.790861,0 0,1.790861 0,4 C0,6.209139 1.790861,8 4,8 Z"/><path fill="#FF7262" d="M12,8 L8,8 L8,8 L8,0 L12,0 L12,0 C14.209139,0 16,1.790861 16,4 C16,6.209139 14.209139,8 12,8 Z"/></g>
                                                        </svg>
                                                    </div>
                                                    <div class="ml-2 font-medium text-sm text-[color:rgba(var(--ni-gray-700))] hover:text-[color:rgba(var(--ni-primary-500))]">ai_system.fig</div>
                                                </div>
                                            </div>
                                        </div>      
                                    </div>

                                    <!-- divide: item 1 (message box) -->
                                    <div class="px-5 pt-3 pb-5">
                                        <div class="flex">
                                            <div class="w-9 h-9 flex-none">
                                                <img class="rounded-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQnDVLvpYHYEkteOUkWNPpHZVhNIAMIz3YWze1IkSm9Q&s" alt="">
                                            </div>
                                            <div class="ml-5 flex w-full">

                                                <!-- input message -->
                                                <input type="text" class="outline-none text-sm mr-auto px-5 w-full bg-[color:rgba(var(--ni-primary-100))] border border-[color:rgba(var(--ni-primary-200))] rounded-l-lg" placeholder="Type here...">

                                                <!-- send text button -->
                                                <button class="outline outline-1 outline-[color:rgba(var(--ni-primary-200))] px-5 py-2 bg-[color:rgba(var(--ni-gray-400))] hover:bg-[color:rgba(var(--ni-gray-500))] fill-white rounded-r-lg duration-300">
                                                    <svg class="w-5 h-5" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="_x32_5_attachment"/><g id="_x32_4_office"/><g id="_x32_3_pin"/><g id="_x32_2_business_card"/><g id="_x32_1_form"/><g id="_x32_0_headset"/><g id="_x31_9_video_call"/><g id="_x31_8_letter_box"/><g id="_x31_7_papperplane"><g><g>
                                                        <path d="M62.9891,2.5618c-0.0765-0.5779-0.6611-0.9805-1.2299-0.8401L7.4043,15.2065c-0.3535,0.0879-0.6318,0.3608-0.7256,0.7129     s0.0112,0.7275,0.2744,0.9795l13.9343,13.3583l-2.7649,17.1495c-0.1079,0.6712,0.4969,1.2576,1.1582,1.1445l18.0805-3.1324     l17.1832,9.6988c0.1523,0.0859,0.3218,0.1289,0.4917,0.1289c0.1523,0,0.3047-0.0347,0.4453-0.1045     c0.2969-0.1475,0.5015-0.4331,0.5459-0.7617l6.9639-51.5542C63.0031,2.7372,63.0007,2.6487,62.9891,2.5618z M9.647,16.7109     L56.8914,4.9902L22.2545,28.7978L9.647,16.7109z M36.9146,43.4663l-16.5942,2.875l2.4995-15.5054L58.8633,6.0615L36.9146,43.4663     z M54.2427,52.6504l-15.3231-8.6492l21.4231-36.509L54.2427,52.6504z"/><path d="M14.4438,51.6099l-4.6948,5.209c-0.3701,0.4102-0.3369,1.0425,0.0732,1.4121c0.1909,0.1724,0.4307,0.2573,0.6689,0.2573     c0.2734,0,0.5459-0.1113,0.7432-0.3306l4.6948-5.209c0.3701-0.4102,0.3369-1.0425-0.0732-1.4121     C15.4463,51.1675,14.8135,51.2002,14.4438,51.6099z"/><path d="M5.9478,29.0562l-4.6909,5.2085c-0.3696,0.4106-0.3364,1.043,0.0742,1.4126c0.1909,0.1719,0.4302,0.2568,0.6685,0.2568     c0.2739,0,0.5459-0.1113,0.7437-0.3311l4.6909-5.2085c0.3696-0.4106,0.3364-1.043-0.0742-1.4126     C6.9487,28.6128,6.3179,28.6455,5.9478,29.0562z"/><path d="M40.8164,55.4331l-4.6909,5.2051c-0.3701,0.4102-0.3369,1.0425,0.0732,1.4121c0.1909,0.1724,0.4307,0.2573,0.6689,0.2573     c0.2734,0,0.5459-0.1113,0.7432-0.3306l4.6909-5.2051c0.3701-0.4102,0.3369-1.0425-0.0732-1.4121     C41.8188,54.9907,41.186,55.0234,40.8164,55.4331z"/></g></g></g><g id="_x31_6_laptop"/><g id="_x31_5_connection"/><g id="_x31_4_phonebook"/><g id="_x31_3_classic_telephone"/><g id="_x31_2_sending_mail"/><g id="_x31_1_man_talking"/><g id="_x31_0_date"/><g id="_x30_9_review"/><g id="_x30_8_email"/><g id="_x30_7_information"/><g id="_x30_6_phone_talking"/><g id="_x30_5_women_talking"/><g id="_x30_4_calling"/><g id="_x30_3_women"/><g id="_x30_2_writing"/><g id="_x30_1_chatting"/>
                                                    </svg>                                                    
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- item 1: outside content -->
                                <div class="lg:hidden xl:flex flex-col justify-center items-center mx-auto my-10 w-4/5 text-white">
                                    <div class="text-xl font-medium mb-3">Catchy title here</div>
                                    <div class="text-center">Figma is loaded with great features, so I'm sure there are a bunch of other useful tips out there. Got a lesser-known tip? Add a response to this story!</div>
                                </div>
                            </div>
                        </div>

                        <!-- item 2 -->
                        <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full z-10" data-carousel-item="">
                            <div class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-80 left-1/2">
                                <div class="rounded-xl bg-white w-4/5 mx-auto mt-36 shadow-md divide-y divide-[color:rgba(var(--ni-gray-200))]">

                                    <!-- divide: item 2 (up) -->
                                    <div class="px-5 pt-5 pb-3">
                                       <!-- item 2: title -->
                                        <div class="flex font-medium">
                                            <div class="text-xl text-[color:rgba(var(--ni-gray-800))]">Redesign</div>
                                            <div class="ml-3 px-2 py-0.5 mr-auto text-md text-[color:rgba(var(--ni-primary-500))] bg-[color:rgba(var(--ni-primary-200))] rounded-lg">Active</div>
                                            <button>
                                                <svg class="w-5 h-5 text-[color:rgba(var(--ni-gray-600))] my-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                            </button>
                                        </div>

                                        <!-- item 2: post details -->
                                        <div class="flex my-3">
                                            <div class="w-9 h-9 flex-none">
                                                <img class="rounded-full" src="https://yt3.ggpht.com/g3j3iOUOPhNxBCNAArBqiYGzHzCBIzr_Al8mdvtBJeZMGFDblnU5rlVUt6GY01AUwm7Cp70J=s900-c-k-c0x00ffffff-no-rj" alt="">
                                            </div>
                                            <div class="ml-3">
                                                <div class="flex lg:flex-col xl:flex-row">
                                                    <div class="font-semibold text-[color:rgba(var(--ni-gray-800))]">Annabelle Doll</div>
                                                    <div class="mx-3 text-[color:rgba(var(--ni-gray-400))] lg:hidden xl:block">&#8226;</div>
                                                    <div class="text-sm text-[color:rgba(var(--ni-gray-400))] my-auto">Today 11:11am</div>
                                                </div>
                                                <div class="mt-2 text-[color:rgba(var(--ni-gray-600))]">Hey! Just wanted to check in on the status of the redesign concepts for the new internal ticket management system</div>
                                            </div>
                                        </div>

                                        <!-- item 2: buttons -->
                                        <div class="flex lg:flex-col xl:flex-row lg:space-x-0 lg:space-y-2 xl:space-x-2 xl:space-y-0 my-5">
                                            <button class="w-full p-2 border border-[color:rgba(var(--ni-gray-300))] hover:bg-[color:rgba(var(--ni-gray-500))] hover:text-white rounded-lg duration-300">Cancel</button>
                                            <button class="w-full p-2 bg-[color:rgba(var(--ni-primary-500))] hover:bg-[rgba(var(--ni-primary-600))] text-white rounded-lg duration-300">Reply</button>
                                        </div>
                                    </div>

                                    <!-- divide: item 2 (center) -->
                                    <div class="px-5 pt-3">
                                        <!-- item 2: reply details -->
                                        <div class="flex my-3">
                                            <div class="w-9 h-9 flex-none">
                                                <img class="rounded-full" src="https://yt3.ggpht.com/g3j3iOUOPhNxBCNAArBqiYGzHzCBIzr_Al8mdvtBJeZMGFDblnU5rlVUt6GY01AUwm7Cp70J=s900-c-k-c0x00ffffff-no-rj" alt="">
                                            </div>
                                            <div class="ml-3">
                                                <div class="flex lg:flex-col xl:flex-row">
                                                    <div class="font-semibold text-[color:rgba(var(--ni-gray-800))]">You</div>
                                                    <div class="mx-3 text-[color:rgba(var(--ni-gray-400))] lg:hidden xl:block">&#8226;</div>
                                                    <div class="text-sm text-[color:rgba(var(--ni-gray-400))] my-auto">Today 11:13am</div>
                                                </div>
                                                <div class="mt-2">
                                                    <div class="text-[color:rgba(var(--ni-gray-600))]">Hey, no problem. I' m nealy done with the first drafts and I will send them over in a second. Here is it!</div>
                                                </div>

                                                <!-- files -->
                                                <div class="flex my-3">
                                                    <div class="p-1 border border-[color:rgba(var(--ni-gray-300))] rounded-md">
                                                        <svg class="w-3 h-3" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" transform="translate(4)"> <circle cx="12" cy="12" r="4" fill="#19BCFE"/> <path fill="#09CF83" d="M4,24 C6.209139,24 8,22.209139 8,20 C8,19.3969461 8,18.0636128 8,16 C6.20303877,16 4.86970543,16 4,16 C1.790861,16 0,17.790861 0,20 C0,22.209139 1.790861,24 4,24 Z"/>
                                                            <path fill="#A259FF" d="M4,16 C4.73637967,16 6.069713,16 8,16 L8,8 C6.069713,8 4.73637967,8 4,8 C1.790861,8 0,9.790861 0,12 C0,14.209139 1.790861,16 4,16 Z"/><path fill="#F24E1E" d="M4,8 C4.73637967,8 6.069713,8 8,8 L8,0 C6.069713,0 4.73637967,0 4,0 C1.790861,0 0,1.790861 0,4 C0,6.209139 1.790861,8 4,8 Z"/><path fill="#FF7262" d="M12,8 L8,8 L8,8 L8,0 L12,0 L12,0 C14.209139,0 16,1.790861 16,4 C16,6.209139 14.209139,8 12,8 Z"/></g>
                                                        </svg>
                                                    </div>
                                                    <div class="ml-2 font-medium text-sm text-[color:rgba(var(--ni-gray-700))] hover:text-[color:rgba(var(--ni-primary-500))]">management_system.fig</div>
                                                </div>
                                                <div class="flex my-3">
                                                    <div class="p-1 border border-[color:rgba(var(--ni-gray-300))] rounded-md">
                                                        <svg class="w-3 h-3" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" transform="translate(4)"> <circle cx="12" cy="12" r="4" fill="#19BCFE"/> <path fill="#09CF83" d="M4,24 C6.209139,24 8,22.209139 8,20 C8,19.3969461 8,18.0636128 8,16 C6.20303877,16 4.86970543,16 4,16 C1.790861,16 0,17.790861 0,20 C0,22.209139 1.790861,24 4,24 Z"/>
                                                            <path fill="#A259FF" d="M4,16 C4.73637967,16 6.069713,16 8,16 L8,8 C6.069713,8 4.73637967,8 4,8 C1.790861,8 0,9.790861 0,12 C0,14.209139 1.790861,16 4,16 Z"/><path fill="#F24E1E" d="M4,8 C4.73637967,8 6.069713,8 8,8 L8,0 C6.069713,0 4.73637967,0 4,0 C1.790861,0 0,1.790861 0,4 C0,6.209139 1.790861,8 4,8 Z"/><path fill="#FF7262" d="M12,8 L8,8 L8,8 L8,0 L12,0 L12,0 C14.209139,0 16,1.790861 16,4 C16,6.209139 14.209139,8 12,8 Z"/></g>
                                                        </svg>
                                                    </div>
                                                    <div class="ml-2 font-medium text-sm text-[color:rgba(var(--ni-gray-700))] hover:text-[color:rgba(var(--ni-primary-500))]">ai_system.fig</div>
                                                </div>
                                            </div>
                                        </div>      
                                    </div>

                                    <!-- divide: item 2 (message box) -->
                                    <div class="px-5 pt-3 pb-5">
                                        <div class="flex">
                                            <div class="w-9 h-9 flex-none">
                                                <img class="rounded-full" src="https://yt3.ggpht.com/g3j3iOUOPhNxBCNAArBqiYGzHzCBIzr_Al8mdvtBJeZMGFDblnU5rlVUt6GY01AUwm7Cp70J=s900-c-k-c0x00ffffff-no-rj" alt="">
                                            </div>
                                            <div class="ml-5 flex w-full">

                                                <!-- input message -->
                                                <input type="text" class="outline-none text-sm mr-auto px-5 w-full bg-[color:rgba(var(--ni-primary-100))] border border-[color:rgba(var(--ni-primary-200))] rounded-l-lg" placeholder="Type here...">

                                                <!-- send text button -->
                                                <button class="outline outline-1 outline-[color:rgba(var(--ni-primary-200))] px-5 py-2 bg-[color:rgba(var(--ni-gray-400))] hover:bg-[color:rgba(var(--ni-gray-500))] fill-white rounded-r-lg duration-300">
                                                    <svg class="w-5 h-5" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="_x32_5_attachment"/><g id="_x32_4_office"/><g id="_x32_3_pin"/><g id="_x32_2_business_card"/><g id="_x32_1_form"/><g id="_x32_0_headset"/><g id="_x31_9_video_call"/><g id="_x31_8_letter_box"/><g id="_x31_7_papperplane"><g><g>
                                                        <path d="M62.9891,2.5618c-0.0765-0.5779-0.6611-0.9805-1.2299-0.8401L7.4043,15.2065c-0.3535,0.0879-0.6318,0.3608-0.7256,0.7129     s0.0112,0.7275,0.2744,0.9795l13.9343,13.3583l-2.7649,17.1495c-0.1079,0.6712,0.4969,1.2576,1.1582,1.1445l18.0805-3.1324     l17.1832,9.6988c0.1523,0.0859,0.3218,0.1289,0.4917,0.1289c0.1523,0,0.3047-0.0347,0.4453-0.1045     c0.2969-0.1475,0.5015-0.4331,0.5459-0.7617l6.9639-51.5542C63.0031,2.7372,63.0007,2.6487,62.9891,2.5618z M9.647,16.7109     L56.8914,4.9902L22.2545,28.7978L9.647,16.7109z M36.9146,43.4663l-16.5942,2.875l2.4995-15.5054L58.8633,6.0615L36.9146,43.4663     z M54.2427,52.6504l-15.3231-8.6492l21.4231-36.509L54.2427,52.6504z"/><path d="M14.4438,51.6099l-4.6948,5.209c-0.3701,0.4102-0.3369,1.0425,0.0732,1.4121c0.1909,0.1724,0.4307,0.2573,0.6689,0.2573     c0.2734,0,0.5459-0.1113,0.7432-0.3306l4.6948-5.209c0.3701-0.4102,0.3369-1.0425-0.0732-1.4121     C15.4463,51.1675,14.8135,51.2002,14.4438,51.6099z"/><path d="M5.9478,29.0562l-4.6909,5.2085c-0.3696,0.4106-0.3364,1.043,0.0742,1.4126c0.1909,0.1719,0.4302,0.2568,0.6685,0.2568     c0.2739,0,0.5459-0.1113,0.7437-0.3311l4.6909-5.2085c0.3696-0.4106,0.3364-1.043-0.0742-1.4126     C6.9487,28.6128,6.3179,28.6455,5.9478,29.0562z"/><path d="M40.8164,55.4331l-4.6909,5.2051c-0.3701,0.4102-0.3369,1.0425,0.0732,1.4121c0.1909,0.1724,0.4307,0.2573,0.6689,0.2573     c0.2734,0,0.5459-0.1113,0.7432-0.3306l4.6909-5.2051c0.3701-0.4102,0.3369-1.0425-0.0732-1.4121     C41.8188,54.9907,41.186,55.0234,40.8164,55.4331z"/></g></g></g><g id="_x31_6_laptop"/><g id="_x31_5_connection"/><g id="_x31_4_phonebook"/><g id="_x31_3_classic_telephone"/><g id="_x31_2_sending_mail"/><g id="_x31_1_man_talking"/><g id="_x31_0_date"/><g id="_x30_9_review"/><g id="_x30_8_email"/><g id="_x30_7_information"/><g id="_x30_6_phone_talking"/><g id="_x30_5_women_talking"/><g id="_x30_4_calling"/><g id="_x30_3_women"/><g id="_x30_2_writing"/><g id="_x30_1_chatting"/>
                                                    </svg>                                                    
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- item 2: outside content -->
                                <div class="lg:hidden xl:flex flex-col justify-center items-center mx-auto my-10 w-4/5 text-white">
                                    <div class="text-xl font-medium mb-3">Catchy title here</div>
                                    <div class="text-center">Figma is loaded with great features, so I'm sure there are a bunch of other useful tips out there. Got a lesser-known tip? Add a response to this story!</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- item 3 -->
                        <div class="hidden duration-700 ease-in-out absolute inset-0 transition-all transform" data-carousel-item="">
                            <div class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-80 left-1/2">
                                <div class="rounded-xl bg-white w-4/5 mx-auto mt-36 shadow-md divide-y divide-[color:rgba(var(--ni-gray-200))]">

                                    <!-- divide: item 3 (up) -->
                                    <div class="px-5 pt-5 pb-3">
                                       <!-- item 3: title -->
                                        <div class="flex font-medium">
                                            <div class="text-xl text-[color:rgba(var(--ni-gray-800))]">Redesign</div>
                                            <div class="ml-3 px-2 py-0.5 mr-auto text-md text-[color:rgba(var(--ni-primary-500))] bg-[color:rgba(var(--ni-primary-200))] rounded-lg">Active</div>
                                            <button>
                                                <svg class="w-5 h-5 text-[color:rgba(var(--ni-gray-600))] my-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                            </button>
                                        </div>

                                        <!-- item 3: post details -->
                                        <div class="flex my-3">
                                            <div class="w-9 h-9 flex-none">
                                                <img class="rounded-full" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                            </div>
                                            <div class="ml-3">
                                                <div class="flex lg:flex-col xl:flex-row">
                                                    <div class="font-semibold text-[color:rgba(var(--ni-gray-800))]">Anna Roberts</div>
                                                    <div class="mx-3 text-[color:rgba(var(--ni-gray-400))] lg:hidden xl:block">&#8226;</div>
                                                    <div class="text-sm text-[color:rgba(var(--ni-gray-400))] my-auto">Today 11:11am</div>
                                                </div>
                                                <div class="mt-2 text-[color:rgba(var(--ni-gray-600))]">Hey! Just wanted to check in on the status of the redesign concepts for the new internal ticket management system</div>
                                            </div>
                                        </div>

                                        <!-- item 3: buttons -->
                                        <div class="flex lg:flex-col xl:flex-row lg:space-x-0 lg:space-y-2 xl:space-x-2 xl:space-y-0 my-5">
                                            <button class="w-full p-2 border border-[color:rgba(var(--ni-gray-300))] hover:bg-[color:rgba(var(--ni-gray-500))] hover:text-white rounded-lg duration-300">Cancel</button>
                                            <button class="w-full p-2 bg-[color:rgba(var(--ni-primary-500))] hover:bg-[rgba(var(--ni-primary-600))] text-white rounded-lg duration-300">Reply</button>
                                        </div>
                                    </div>

                                    <!-- divide: item 3 (center) -->
                                    <div class="px-5 pt-3">
                                        <!-- item 3: reply details -->
                                        <div class="flex my-3">
                                            <div class="w-9 h-9 flex-none">
                                                <img class="rounded-full" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                            </div>
                                            <div class="ml-3">
                                                <div class="flex lg:flex-col xl:flex-row">
                                                    <div class="font-semibold text-[color:rgba(var(--ni-gray-800))]">You</div>
                                                    <div class="mx-3 text-[color:rgba(var(--ni-gray-400))] lg:hidden xl:block">&#8226;</div>
                                                    <div class="text-sm text-[color:rgba(var(--ni-gray-400))] my-auto">Today 11:13am</div>
                                                </div>
                                                <div class="mt-2">
                                                    <div class="text-[color:rgba(var(--ni-gray-600))]">Hey, no problem. I' m nealy done with the first drafts and I will send them over in a second. Here is it!</div>
                                                </div>

                                                <!-- files -->
                                                <div class="flex my-3">
                                                    <div class="p-1 border border-[color:rgba(var(--ni-gray-300))] rounded-md">
                                                        <svg class="w-3 h-3" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" transform="translate(4)"> <circle cx="12" cy="12" r="4" fill="#19BCFE"/> <path fill="#09CF83" d="M4,24 C6.209139,24 8,22.209139 8,20 C8,19.3969461 8,18.0636128 8,16 C6.20303877,16 4.86970543,16 4,16 C1.790861,16 0,17.790861 0,20 C0,22.209139 1.790861,24 4,24 Z"/>
                                                            <path fill="#A259FF" d="M4,16 C4.73637967,16 6.069713,16 8,16 L8,8 C6.069713,8 4.73637967,8 4,8 C1.790861,8 0,9.790861 0,12 C0,14.209139 1.790861,16 4,16 Z"/><path fill="#F24E1E" d="M4,8 C4.73637967,8 6.069713,8 8,8 L8,0 C6.069713,0 4.73637967,0 4,0 C1.790861,0 0,1.790861 0,4 C0,6.209139 1.790861,8 4,8 Z"/><path fill="#FF7262" d="M12,8 L8,8 L8,8 L8,0 L12,0 L12,0 C14.209139,0 16,1.790861 16,4 C16,6.209139 14.209139,8 12,8 Z"/></g>
                                                        </svg>
                                                    </div>
                                                    <div class="ml-2 font-medium text-sm text-[color:rgba(var(--ni-gray-700))] hover:text-[color:rgba(var(--ni-primary-500))]">management_system.fig</div>
                                                </div>
                                                <div class="flex my-3">
                                                    <div class="p-1 border border-[color:rgba(var(--ni-gray-300))] rounded-md">
                                                        <svg class="w-3 h-3" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" transform="translate(4)"> <circle cx="12" cy="12" r="4" fill="#19BCFE"/> <path fill="#09CF83" d="M4,24 C6.209139,24 8,22.209139 8,20 C8,19.3969461 8,18.0636128 8,16 C6.20303877,16 4.86970543,16 4,16 C1.790861,16 0,17.790861 0,20 C0,22.209139 1.790861,24 4,24 Z"/>
                                                            <path fill="#A259FF" d="M4,16 C4.73637967,16 6.069713,16 8,16 L8,8 C6.069713,8 4.73637967,8 4,8 C1.790861,8 0,9.790861 0,12 C0,14.209139 1.790861,16 4,16 Z"/><path fill="#F24E1E" d="M4,8 C4.73637967,8 6.069713,8 8,8 L8,0 C6.069713,0 4.73637967,0 4,0 C1.790861,0 0,1.790861 0,4 C0,6.209139 1.790861,8 4,8 Z"/><path fill="#FF7262" d="M12,8 L8,8 L8,8 L8,0 L12,0 L12,0 C14.209139,0 16,1.790861 16,4 C16,6.209139 14.209139,8 12,8 Z"/></g>
                                                        </svg>
                                                    </div>
                                                    <div class="ml-2 font-medium text-sm text-[color:rgba(var(--ni-gray-700))] hover:text-[color:rgba(var(--ni-primary-500))]">ai_system.fig</div>
                                                </div>
                                            </div>
                                        </div>      
                                    </div>

                                    <!-- divide: item 3 (message box) -->
                                    <div class="px-5 pt-3 pb-5">
                                        <div class="flex">
                                            <div class="w-9 h-9 flex-none">
                                                <img class="rounded-full" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                            </div>
                                            <div class="ml-5 flex w-full">

                                                <!-- input message -->
                                                <input type="text" class="outline-none text-sm mr-auto px-5 w-full bg-[color:rgba(var(--ni-primary-100))] border border-[color:rgba(var(--ni-primary-200))] rounded-l-lg" placeholder="Type here...">

                                                <!-- send text button -->
                                                <button class="outline outline-1 outline-[color:rgba(var(--ni-primary-200))] px-5 py-2 bg-[color:rgba(var(--ni-gray-400))] hover:bg-[color:rgba(var(--ni-gray-500))] fill-white rounded-r-lg duration-300">
                                                    <svg class="w-5 h-5" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="_x32_5_attachment"/><g id="_x32_4_office"/><g id="_x32_3_pin"/><g id="_x32_2_business_card"/><g id="_x32_1_form"/><g id="_x32_0_headset"/><g id="_x31_9_video_call"/><g id="_x31_8_letter_box"/><g id="_x31_7_papperplane"><g><g>
                                                        <path d="M62.9891,2.5618c-0.0765-0.5779-0.6611-0.9805-1.2299-0.8401L7.4043,15.2065c-0.3535,0.0879-0.6318,0.3608-0.7256,0.7129     s0.0112,0.7275,0.2744,0.9795l13.9343,13.3583l-2.7649,17.1495c-0.1079,0.6712,0.4969,1.2576,1.1582,1.1445l18.0805-3.1324     l17.1832,9.6988c0.1523,0.0859,0.3218,0.1289,0.4917,0.1289c0.1523,0,0.3047-0.0347,0.4453-0.1045     c0.2969-0.1475,0.5015-0.4331,0.5459-0.7617l6.9639-51.5542C63.0031,2.7372,63.0007,2.6487,62.9891,2.5618z M9.647,16.7109     L56.8914,4.9902L22.2545,28.7978L9.647,16.7109z M36.9146,43.4663l-16.5942,2.875l2.4995-15.5054L58.8633,6.0615L36.9146,43.4663     z M54.2427,52.6504l-15.3231-8.6492l21.4231-36.509L54.2427,52.6504z"/><path d="M14.4438,51.6099l-4.6948,5.209c-0.3701,0.4102-0.3369,1.0425,0.0732,1.4121c0.1909,0.1724,0.4307,0.2573,0.6689,0.2573     c0.2734,0,0.5459-0.1113,0.7432-0.3306l4.6948-5.209c0.3701-0.4102,0.3369-1.0425-0.0732-1.4121     C15.4463,51.1675,14.8135,51.2002,14.4438,51.6099z"/><path d="M5.9478,29.0562l-4.6909,5.2085c-0.3696,0.4106-0.3364,1.043,0.0742,1.4126c0.1909,0.1719,0.4302,0.2568,0.6685,0.2568     c0.2739,0,0.5459-0.1113,0.7437-0.3311l4.6909-5.2085c0.3696-0.4106,0.3364-1.043-0.0742-1.4126     C6.9487,28.6128,6.3179,28.6455,5.9478,29.0562z"/><path d="M40.8164,55.4331l-4.6909,5.2051c-0.3701,0.4102-0.3369,1.0425,0.0732,1.4121c0.1909,0.1724,0.4307,0.2573,0.6689,0.2573     c0.2734,0,0.5459-0.1113,0.7432-0.3306l4.6909-5.2051c0.3701-0.4102,0.3369-1.0425-0.0732-1.4121     C41.8188,54.9907,41.186,55.0234,40.8164,55.4331z"/></g></g></g><g id="_x31_6_laptop"/><g id="_x31_5_connection"/><g id="_x31_4_phonebook"/><g id="_x31_3_classic_telephone"/><g id="_x31_2_sending_mail"/><g id="_x31_1_man_talking"/><g id="_x31_0_date"/><g id="_x30_9_review"/><g id="_x30_8_email"/><g id="_x30_7_information"/><g id="_x30_6_phone_talking"/><g id="_x30_5_women_talking"/><g id="_x30_4_calling"/><g id="_x30_3_women"/><g id="_x30_2_writing"/><g id="_x30_1_chatting"/>
                                                    </svg>                                                    
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- item 3: outside content -->
                                <div class="lg:hidden xl:flex flex-col justify-center items-center mx-auto my-10 w-4/5 text-white">
                                    <div class="text-xl font-medium mb-3">Catchy title here</div>
                                    <div class="text-center">Figma is loaded with great features, so I'm sure there are a bunch of other useful tips out there. Got a lesser-known tip? Add a response to this story!</div>
                                </div>
                            </div>
                        </div>

                        <!-- item 4 -->
                        <div class="hidden duration-700 ease-in-out absolute inset-0 transition-all transform" data-carousel-item="">
                            <div class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-80 left-1/2">
                                <div class="rounded-xl bg-white w-4/5 mx-auto mt-36 shadow-md divide-y divide-[color:rgba(var(--ni-gray-200))]">

                                    <!-- divide: item 4 (up) -->
                                    <div class="px-5 pt-5 pb-3">
                                       <!-- item 4: title -->
                                        <div class="flex font-medium">
                                            <div class="text-xl text-[color:rgba(var(--ni-gray-800))]">Redesign</div>
                                            <div class="ml-3 px-2 py-0.5 mr-auto text-md text-[color:rgba(var(--ni-primary-500))] bg-[color:rgba(var(--ni-primary-200))] rounded-lg">Active</div>
                                            <button>
                                                <svg class="w-5 h-5 text-[color:rgba(var(--ni-gray-600))] my-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                            </button>
                                        </div>

                                        <!-- item 4: post details -->
                                        <div class="flex my-3">
                                            <div class="w-9 h-9 flex-none">
                                                <img class="rounded-full" src="https://images.unsplash.com/photo-1504703395950-b89145a5425b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                            </div>
                                            <div class="ml-3">
                                                <div class="flex lg:flex-col xl:flex-row">
                                                    <div class="font-semibold text-[color:rgba(var(--ni-gray-800))]">Jillian Steward</div>
                                                    <div class="mx-3 text-[color:rgba(var(--ni-gray-400))] lg:hidden xl:block">&#8226;</div>
                                                    <div class="text-sm text-[color:rgba(var(--ni-gray-400))] my-auto">Today 11:11am</div>
                                                </div>
                                                <div class="mt-2 text-[color:rgba(var(--ni-gray-600))]">Hey! Just wanted to check in on the status of the redesign concepts for the new internal ticket management system</div>
                                            </div>
                                        </div>

                                        <!-- item 4: buttons -->
                                        <div class="flex lg:flex-col xl:flex-row lg:space-x-0 lg:space-y-2 xl:space-x-2 xl:space-y-0 my-5">
                                            <button class="w-full p-2 border border-[color:rgba(var(--ni-gray-300))] hover:bg-[color:rgba(var(--ni-gray-500))] hover:text-white rounded-lg duration-300">Cancel</button>
                                            <button class="w-full p-2 bg-[color:rgba(var(--ni-primary-500))] hover:bg-[rgba(var(--ni-primary-600))] text-white rounded-lg duration-300">Reply</button>
                                        </div>
                                    </div>

                                    <!-- divide: item 4 (center) -->
                                    <div class="px-5 pt-3">
                                        <!-- item 4: reply details -->
                                        <div class="flex my-3">
                                            <div class="w-9 h-9 flex-none">
                                                <img class="rounded-full" src="https://images.unsplash.com/photo-1504703395950-b89145a5425b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                            </div>
                                            <div class="ml-3">
                                                <div class="flex lg:flex-col xl:flex-row">
                                                    <div class="font-semibold text-[color:rgba(var(--ni-gray-800))]">You</div>
                                                    <div class="mx-3 text-[color:rgba(var(--ni-gray-400))] lg:hidden xl:block">&#8226;</div>
                                                    <div class="text-sm text-[color:rgba(var(--ni-gray-400))] my-auto">Today 11:13am</div>
                                                </div>
                                                <div class="mt-2">
                                                    <div class="text-[color:rgba(var(--ni-gray-600))]">Hey, no problem. I' m nealy done with the first drafts and I will send them over in a second. Here is it!</div>
                                                </div>

                                                <!-- files -->
                                                <div class="flex my-3">
                                                    <div class="p-1 border border-[color:rgba(var(--ni-gray-300))] rounded-md">
                                                        <svg class="w-3 h-3" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" transform="translate(4)"> <circle cx="12" cy="12" r="4" fill="#19BCFE"/> <path fill="#09CF83" d="M4,24 C6.209139,24 8,22.209139 8,20 C8,19.3969461 8,18.0636128 8,16 C6.20303877,16 4.86970543,16 4,16 C1.790861,16 0,17.790861 0,20 C0,22.209139 1.790861,24 4,24 Z"/>
                                                            <path fill="#A259FF" d="M4,16 C4.73637967,16 6.069713,16 8,16 L8,8 C6.069713,8 4.73637967,8 4,8 C1.790861,8 0,9.790861 0,12 C0,14.209139 1.790861,16 4,16 Z"/><path fill="#F24E1E" d="M4,8 C4.73637967,8 6.069713,8 8,8 L8,0 C6.069713,0 4.73637967,0 4,0 C1.790861,0 0,1.790861 0,4 C0,6.209139 1.790861,8 4,8 Z"/><path fill="#FF7262" d="M12,8 L8,8 L8,8 L8,0 L12,0 L12,0 C14.209139,0 16,1.790861 16,4 C16,6.209139 14.209139,8 12,8 Z"/></g>
                                                        </svg>
                                                    </div>
                                                    <div class="ml-2 font-medium text-sm text-[color:rgba(var(--ni-gray-700))] hover:text-[color:rgba(var(--ni-primary-500))]">management_system.fig</div>
                                                </div>
                                                <div class="flex my-3">
                                                    <div class="p-1 border border-[color:rgba(var(--ni-gray-300))] rounded-md">
                                                        <svg class="w-3 h-3" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" transform="translate(4)"> <circle cx="12" cy="12" r="4" fill="#19BCFE"/> <path fill="#09CF83" d="M4,24 C6.209139,24 8,22.209139 8,20 C8,19.3969461 8,18.0636128 8,16 C6.20303877,16 4.86970543,16 4,16 C1.790861,16 0,17.790861 0,20 C0,22.209139 1.790861,24 4,24 Z"/>
                                                            <path fill="#A259FF" d="M4,16 C4.73637967,16 6.069713,16 8,16 L8,8 C6.069713,8 4.73637967,8 4,8 C1.790861,8 0,9.790861 0,12 C0,14.209139 1.790861,16 4,16 Z"/><path fill="#F24E1E" d="M4,8 C4.73637967,8 6.069713,8 8,8 L8,0 C6.069713,0 4.73637967,0 4,0 C1.790861,0 0,1.790861 0,4 C0,6.209139 1.790861,8 4,8 Z"/><path fill="#FF7262" d="M12,8 L8,8 L8,8 L8,0 L12,0 L12,0 C14.209139,0 16,1.790861 16,4 C16,6.209139 14.209139,8 12,8 Z"/></g>
                                                        </svg>
                                                    </div>
                                                    <div class="ml-2 font-medium text-sm text-[color:rgba(var(--ni-gray-700))] hover:text-[color:rgba(var(--ni-primary-500))]">ai_system.fig</div>
                                                </div>
                                            </div>
                                        </div>      
                                    </div>

                                    <!-- divide: item 4 (message box) -->
                                    <div class="px-5 pt-3 pb-5">
                                        <div class="flex">
                                            <div class="w-9 h-9 flex-none">
                                                <img class="rounded-full" src="https://images.unsplash.com/photo-1504703395950-b89145a5425b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                            </div>
                                            <div class="ml-5 flex w-full">

                                                <!-- input message -->
                                                <input type="text" class="outline-none text-sm mr-auto px-5 w-full bg-[color:rgba(var(--ni-primary-100))] border border-[color:rgba(var(--ni-primary-200))] rounded-l-lg" placeholder="Type here...">

                                                <!-- send text button -->
                                                <button class="outline outline-1 outline-[color:rgba(var(--ni-primary-200))] px-5 py-2 bg-[color:rgba(var(--ni-gray-400))] hover:bg-[color:rgba(var(--ni-gray-500))] fill-white rounded-r-lg duration-300">
                                                    <svg class="w-5 h-5" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="_x32_5_attachment"/><g id="_x32_4_office"/><g id="_x32_3_pin"/><g id="_x32_2_business_card"/><g id="_x32_1_form"/><g id="_x32_0_headset"/><g id="_x31_9_video_call"/><g id="_x31_8_letter_box"/><g id="_x31_7_papperplane"><g><g>
                                                        <path d="M62.9891,2.5618c-0.0765-0.5779-0.6611-0.9805-1.2299-0.8401L7.4043,15.2065c-0.3535,0.0879-0.6318,0.3608-0.7256,0.7129     s0.0112,0.7275,0.2744,0.9795l13.9343,13.3583l-2.7649,17.1495c-0.1079,0.6712,0.4969,1.2576,1.1582,1.1445l18.0805-3.1324     l17.1832,9.6988c0.1523,0.0859,0.3218,0.1289,0.4917,0.1289c0.1523,0,0.3047-0.0347,0.4453-0.1045     c0.2969-0.1475,0.5015-0.4331,0.5459-0.7617l6.9639-51.5542C63.0031,2.7372,63.0007,2.6487,62.9891,2.5618z M9.647,16.7109     L56.8914,4.9902L22.2545,28.7978L9.647,16.7109z M36.9146,43.4663l-16.5942,2.875l2.4995-15.5054L58.8633,6.0615L36.9146,43.4663     z M54.2427,52.6504l-15.3231-8.6492l21.4231-36.509L54.2427,52.6504z"/><path d="M14.4438,51.6099l-4.6948,5.209c-0.3701,0.4102-0.3369,1.0425,0.0732,1.4121c0.1909,0.1724,0.4307,0.2573,0.6689,0.2573     c0.2734,0,0.5459-0.1113,0.7432-0.3306l4.6948-5.209c0.3701-0.4102,0.3369-1.0425-0.0732-1.4121     C15.4463,51.1675,14.8135,51.2002,14.4438,51.6099z"/><path d="M5.9478,29.0562l-4.6909,5.2085c-0.3696,0.4106-0.3364,1.043,0.0742,1.4126c0.1909,0.1719,0.4302,0.2568,0.6685,0.2568     c0.2739,0,0.5459-0.1113,0.7437-0.3311l4.6909-5.2085c0.3696-0.4106,0.3364-1.043-0.0742-1.4126     C6.9487,28.6128,6.3179,28.6455,5.9478,29.0562z"/><path d="M40.8164,55.4331l-4.6909,5.2051c-0.3701,0.4102-0.3369,1.0425,0.0732,1.4121c0.1909,0.1724,0.4307,0.2573,0.6689,0.2573     c0.2734,0,0.5459-0.1113,0.7432-0.3306l4.6909-5.2051c0.3701-0.4102,0.3369-1.0425-0.0732-1.4121     C41.8188,54.9907,41.186,55.0234,40.8164,55.4331z"/></g></g></g><g id="_x31_6_laptop"/><g id="_x31_5_connection"/><g id="_x31_4_phonebook"/><g id="_x31_3_classic_telephone"/><g id="_x31_2_sending_mail"/><g id="_x31_1_man_talking"/><g id="_x31_0_date"/><g id="_x30_9_review"/><g id="_x30_8_email"/><g id="_x30_7_information"/><g id="_x30_6_phone_talking"/><g id="_x30_5_women_talking"/><g id="_x30_4_calling"/><g id="_x30_3_women"/><g id="_x30_2_writing"/><g id="_x30_1_chatting"/>
                                                    </svg>                                                    
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- item 4: outside content -->
                                <div class="lg:hidden xl:flex flex-col justify-center items-center mx-auto my-10 w-4/5 text-white">
                                    <div class="text-xl font-medium mb-3">Catchy title here</div>
                                    <div class="text-center">Figma is loaded with great features, so I'm sure there are a bunch of other useful tips out there. Got a lesser-known tip? Add a response to this story!</div>
                                </div>
                            </div>
                        </div>

                        <!-- item 5 -->
                        <div class="duration-700 ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10" data-carousel-item="">
                            <div class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-80 left-1/2">
                                <div class="rounded-xl bg-white w-4/5 mx-auto mt-36 shadow-md divide-y divide-[color:rgba(var(--ni-gray-200))]">

                                    <!-- divide: item 5 (up) -->
                                    <div class="px-5 pt-5 pb-3">
                                       <!-- item 5: title -->
                                        <div class="flex font-medium">
                                            <div class="text-xl text-[color:rgba(var(--ni-gray-800))]">Redesign</div>
                                            <div class="ml-3 px-2 py-0.5 mr-auto text-md text-[color:rgba(var(--ni-primary-500))] bg-[color:rgba(var(--ni-primary-200))] rounded-lg">Active</div>
                                            <button>
                                                <svg class="w-5 h-5 text-[color:rgba(var(--ni-gray-600))] my-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                            </button>
                                        </div>

                                        <!-- item 5: post details -->
                                        <div class="flex my-3">
                                            <div class="w-9 h-9 flex-none">
                                                <img class="rounded-full" src="https://images.unsplash.com/photo-1506980595904-70325b7fdd90?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                            </div>
                                            <div class="ml-3">
                                                <div class="flex lg:flex-col xl:flex-row">
                                                    <div class="font-semibold text-[color:rgba(var(--ni-gray-800))]">Yvette Armstrong</div>
                                                    <div class="mx-3 text-[color:rgba(var(--ni-gray-400))] lg:hidden xl:block">&#8226;</div>
                                                    <div class="text-sm text-[color:rgba(var(--ni-gray-400))] my-auto">Today 11:11am</div>
                                                </div>
                                                <div class="mt-2 text-[color:rgba(var(--ni-gray-600))]">Hey! Just wanted to check in on the status of the redesign concepts for the new internal ticket management system</div>
                                            </div>
                                        </div>

                                        <!-- item 5: buttons -->
                                        <div class="flex lg:flex-col xl:flex-row lg:space-x-0 lg:space-y-2 xl:space-x-2 xl:space-y-0 my-5">
                                            <button class="w-full p-2 border border-[color:rgba(var(--ni-gray-300))] hover:bg-[color:rgba(var(--ni-gray-500))] hover:text-white rounded-lg duration-300">Cancel</button>
                                            <button class="w-full p-2 bg-[color:rgba(var(--ni-primary-500))] hover:bg-[rgba(var(--ni-primary-600))] text-white rounded-lg duration-300">Reply</button>
                                        </div>
                                    </div>

                                    <!-- divide: item 5 (center) -->
                                    <div class="px-5 pt-3">
                                        <!-- item 5: reply details -->
                                        <div class="flex my-3">
                                            <div class="w-9 h-9 flex-none">
                                                <img class="rounded-full" src="https://images.unsplash.com/photo-1506980595904-70325b7fdd90?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                            </div>
                                            <div class="ml-3">
                                                <div class="flex lg:flex-col xl:flex-row">
                                                    <div class="font-semibold text-[color:rgba(var(--ni-gray-800))]">You</div>
                                                    <div class="mx-3 text-[color:rgba(var(--ni-gray-400))] lg:hidden xl:block">&#8226;</div>
                                                    <div class="text-sm text-[color:rgba(var(--ni-gray-400))] my-auto">Today 11:13am</div>
                                                </div>
                                                <div class="mt-2">
                                                    <div class="text-[color:rgba(var(--ni-gray-600))]">Hey, no problem. I' m nealy done with the first drafts and I will send them over in a second. Here is it!</div>
                                                </div>

                                                <!-- files -->
                                                <div class="flex my-3">
                                                    <div class="p-1 border border-[color:rgba(var(--ni-gray-300))] rounded-md">
                                                        <svg class="w-3 h-3" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" transform="translate(4)"> <circle cx="12" cy="12" r="4" fill="#19BCFE"/> <path fill="#09CF83" d="M4,24 C6.209139,24 8,22.209139 8,20 C8,19.3969461 8,18.0636128 8,16 C6.20303877,16 4.86970543,16 4,16 C1.790861,16 0,17.790861 0,20 C0,22.209139 1.790861,24 4,24 Z"/>
                                                            <path fill="#A259FF" d="M4,16 C4.73637967,16 6.069713,16 8,16 L8,8 C6.069713,8 4.73637967,8 4,8 C1.790861,8 0,9.790861 0,12 C0,14.209139 1.790861,16 4,16 Z"/><path fill="#F24E1E" d="M4,8 C4.73637967,8 6.069713,8 8,8 L8,0 C6.069713,0 4.73637967,0 4,0 C1.790861,0 0,1.790861 0,4 C0,6.209139 1.790861,8 4,8 Z"/><path fill="#FF7262" d="M12,8 L8,8 L8,8 L8,0 L12,0 L12,0 C14.209139,0 16,1.790861 16,4 C16,6.209139 14.209139,8 12,8 Z"/></g>
                                                        </svg>
                                                    </div>
                                                    <div class="ml-2 font-medium text-sm text-[color:rgba(var(--ni-gray-700))] hover:text-[color:rgba(var(--ni-primary-500))]">management_system.fig</div>
                                                </div>
                                                <div class="flex my-3">
                                                    <div class="p-1 border border-[color:rgba(var(--ni-gray-300))] rounded-md">
                                                        <svg class="w-3 h-3" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" transform="translate(4)"> <circle cx="12" cy="12" r="4" fill="#19BCFE"/> <path fill="#09CF83" d="M4,24 C6.209139,24 8,22.209139 8,20 C8,19.3969461 8,18.0636128 8,16 C6.20303877,16 4.86970543,16 4,16 C1.790861,16 0,17.790861 0,20 C0,22.209139 1.790861,24 4,24 Z"/>
                                                            <path fill="#A259FF" d="M4,16 C4.73637967,16 6.069713,16 8,16 L8,8 C6.069713,8 4.73637967,8 4,8 C1.790861,8 0,9.790861 0,12 C0,14.209139 1.790861,16 4,16 Z"/><path fill="#F24E1E" d="M4,8 C4.73637967,8 6.069713,8 8,8 L8,0 C6.069713,0 4.73637967,0 4,0 C1.790861,0 0,1.790861 0,4 C0,6.209139 1.790861,8 4,8 Z"/><path fill="#FF7262" d="M12,8 L8,8 L8,8 L8,0 L12,0 L12,0 C14.209139,0 16,1.790861 16,4 C16,6.209139 14.209139,8 12,8 Z"/></g>
                                                        </svg>
                                                    </div>
                                                    <div class="ml-2 font-medium text-sm text-[color:rgba(var(--ni-gray-700))] hover:text-[color:rgba(var(--ni-primary-500))]">ai_system.fig</div>
                                                </div>
                                            </div>
                                        </div>      
                                    </div>

                                    <!-- divide: item 5 (message box) -->
                                    <div class="px-5 pt-3 pb-5">
                                        <div class="flex">
                                            <div class="w-9 h-9 flex-none">
                                                <img class="rounded-full" src="https://images.unsplash.com/photo-1506980595904-70325b7fdd90?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                            </div>
                                            <div class="ml-5 flex w-full">

                                                <!-- input message -->
                                                <input type="text" class="outline-none text-sm mr-auto px-5 w-full bg-[color:rgba(var(--ni-primary-100))] border border-[color:rgba(var(--ni-primary-200))] rounded-l-lg" placeholder="Type here...">

                                                <!-- send text button -->
                                                <button class="outline outline-1 outline-[color:rgba(var(--ni-primary-200))] px-5 py-2 bg-[color:rgba(var(--ni-gray-400))] hover:bg-[color:rgba(var(--ni-gray-500))] fill-white rounded-r-lg duration-300">
                                                    <svg class="w-5 h-5" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="_x32_5_attachment"/><g id="_x32_4_office"/><g id="_x32_3_pin"/><g id="_x32_2_business_card"/><g id="_x32_1_form"/><g id="_x32_0_headset"/><g id="_x31_9_video_call"/><g id="_x31_8_letter_box"/><g id="_x31_7_papperplane"><g><g>
                                                        <path d="M62.9891,2.5618c-0.0765-0.5779-0.6611-0.9805-1.2299-0.8401L7.4043,15.2065c-0.3535,0.0879-0.6318,0.3608-0.7256,0.7129     s0.0112,0.7275,0.2744,0.9795l13.9343,13.3583l-2.7649,17.1495c-0.1079,0.6712,0.4969,1.2576,1.1582,1.1445l18.0805-3.1324     l17.1832,9.6988c0.1523,0.0859,0.3218,0.1289,0.4917,0.1289c0.1523,0,0.3047-0.0347,0.4453-0.1045     c0.2969-0.1475,0.5015-0.4331,0.5459-0.7617l6.9639-51.5542C63.0031,2.7372,63.0007,2.6487,62.9891,2.5618z M9.647,16.7109     L56.8914,4.9902L22.2545,28.7978L9.647,16.7109z M36.9146,43.4663l-16.5942,2.875l2.4995-15.5054L58.8633,6.0615L36.9146,43.4663     z M54.2427,52.6504l-15.3231-8.6492l21.4231-36.509L54.2427,52.6504z"/><path d="M14.4438,51.6099l-4.6948,5.209c-0.3701,0.4102-0.3369,1.0425,0.0732,1.4121c0.1909,0.1724,0.4307,0.2573,0.6689,0.2573     c0.2734,0,0.5459-0.1113,0.7432-0.3306l4.6948-5.209c0.3701-0.4102,0.3369-1.0425-0.0732-1.4121     C15.4463,51.1675,14.8135,51.2002,14.4438,51.6099z"/><path d="M5.9478,29.0562l-4.6909,5.2085c-0.3696,0.4106-0.3364,1.043,0.0742,1.4126c0.1909,0.1719,0.4302,0.2568,0.6685,0.2568     c0.2739,0,0.5459-0.1113,0.7437-0.3311l4.6909-5.2085c0.3696-0.4106,0.3364-1.043-0.0742-1.4126     C6.9487,28.6128,6.3179,28.6455,5.9478,29.0562z"/><path d="M40.8164,55.4331l-4.6909,5.2051c-0.3701,0.4102-0.3369,1.0425,0.0732,1.4121c0.1909,0.1724,0.4307,0.2573,0.6689,0.2573     c0.2734,0,0.5459-0.1113,0.7432-0.3306l4.6909-5.2051c0.3701-0.4102,0.3369-1.0425-0.0732-1.4121     C41.8188,54.9907,41.186,55.0234,40.8164,55.4331z"/></g></g></g><g id="_x31_6_laptop"/><g id="_x31_5_connection"/><g id="_x31_4_phonebook"/><g id="_x31_3_classic_telephone"/><g id="_x31_2_sending_mail"/><g id="_x31_1_man_talking"/><g id="_x31_0_date"/><g id="_x30_9_review"/><g id="_x30_8_email"/><g id="_x30_7_information"/><g id="_x30_6_phone_talking"/><g id="_x30_5_women_talking"/><g id="_x30_4_calling"/><g id="_x30_3_women"/><g id="_x30_2_writing"/><g id="_x30_1_chatting"/>
                                                    </svg>                                                    
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- item 5: outside content -->
                                <div class="lg:hidden xl:flex flex-col justify-center items-center mx-auto my-10 w-4/5 text-white">
                                    <div class="text-xl font-medium mb-3">Catchy title here</div>
                                    <div class="text-center">Figma is loaded with great features, so I'm sure there are a bunch of other useful tips out there. Got a lesser-known tip? Add a response to this story!</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="h-[1%] md:hidden lg:block">
                        <!-- slider indicators -->
                        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 lg:bottom-20 xl:bottom-0 left-1/2">
                            <button type="button" class="w-3 h-3 rounded-full bg-white" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full bg-white/50 hover:bg-white" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full bg-white/50 hover:bg-white" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            <button type="button" class="w-3 h-3 rounded-full bg-white/50 hover:bg-white" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                            <button type="button" class="w-3 h-3 rounded-full bg-white/50 hover:bg-white" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                        </div>
                        <!-- slider controls -->
                        <button type="button" class="absolute lg:mt-[32rem] xl:mt-96 lg:top-80 xl:top-96 lg:left-10 xl:left-20 z-30 flex items-center justify-center px-4 cursor-pointer group focus:outline-none" data-carousel-prev="">
                            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button" class="absolute lg:mt-[32rem] xl:mt-96 lg:top-80 xl:top-96 lg:right-10 xl:right-20 z-30 flex items-center justify-center px-4 cursor-pointer group focus:outline-none" data-carousel-next="">
                            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- login form: right side -->
            <div class="h-full w-full md:w-[90%] lg:w-[50%] max-w-md lg:max-w-full lg:items-center overflow-auto bg-white sm:border lg:border-none sm:border-[color:rgba(var(--ni-primary-200))] p-10 lg:p-0 rounded-xl">
                <div class="p-0 md:p-0 lg:p-10">
                    <div class="flex flex-col space-y-4 max-w-lg mx-auto">

                        <!-- logo -->
                        <div class="flex flex-row space-x-0 justify-center items-center font-bold text-md lg:text-xl mt-5">
                            <span class="text-[color:rgba(var(--ni-danger-500))]">TURBO</span>
                            <span class="text-[color:rgba(var(--ni-primary-500))]">TECH</span>
                        </div>

                        <!-- title & description -->
                        <div class="flex flex-col space-y-4 justify-center items-center">
                            <div class="text-xl lg:text-2xl xl:text-3xl font-semibold">Create your account</div>
                            <div class="text-xs sm:text-sm text-[color:rgba(var(--ni-gray-400))]">Enter the fields below to get started</div>
                        </div>

                        <!-- sign in with google button -->
                        <div class="flex justify-center items-center">
                            <button class="w-full flex justify-center items-center border border-[color:rgba(var(--ni-primary-200))] hover:bg-[color:rgba(var(--ni-primary-100))] py-2 rounded-md duration-300">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" id="_24x24_On_Light_Google" data-name="24x24/On Light/Google" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><clipPath id="clip-path">
                                    <path id="a" d="M17.791,7.364H9.209v3.477h4.94c-.46,2.209-2.386,3.477-4.94,3.477A5.37,5.37,0,0,1,3.767,9,5.442,5.442,0,0,1,12.6,4.868L15.279,2.25A9.29,9.29,0,0,0,9.209,0,9.08,9.08,0,0,0,0,9a9.08,9.08,0,0,0,9.209,9A8.586,8.586,0,0,0,18,9,7.306,7.306,0,0,0,17.791,7.364Z" fill="none"/></clipPath></defs><rect id="view-box" width="24" height="24" fill="none"/><g id="Logo" transform="translate(3 3)"><g id="Clipped"><path id="a-5" data-name="a" d="M17.791,7.364H9.209v3.477h4.94c-.46,2.209-2.386,3.477-4.94,3.477A5.37,5.37,0,0,1,3.767,9,5.442,5.442,0,0,1,12.6,4.868L15.279,2.25A9.29,9.29,0,0,0,9.209,0,9.08,9.08,0,0,0,0,9a9.08,9.08,0,0,0,9.209,9A8.586,8.586,0,0,0,18,9,7.306,7.306,0,0,0,17.791,7.364Z" fill="none"/><g id="Clipped-2" data-name="Clipped" clip-path="url(#clip-path)"><path id="Path" d="M0,10.636V0L7.116,5.318Z" transform="translate(-0.837 3.682)" fill="#fbbc05"/></g></g><g id="Clipped-3" data-name="Clipped"><path id="a-6" data-name="a" d="M17.791,7.364H9.209v3.477h4.94c-.46,2.209-2.386,3.477-4.94,3.477A5.37,5.37,0,0,1,3.767,9,5.442,5.442,0,0,1,12.6,4.868L15.279,2.25A9.29,9.29,0,0,0,9.209,0,9.08,9.08,0,0,0,0,9a9.08,9.08,0,0,0,9.209,9A8.586,8.586,0,0,0,18,9,7.306,7.306,0,0,0,17.791,7.364Z" fill="none"/><g id="Clipped-4" data-name="Clipped" clip-path="url(#clip-path)"><path id="Path-2" data-name="Path" d="M0,4.5,7.116,9.818l2.93-2.5,10.047-1.6V0H0Z" transform="translate(-0.837 -0.818)" fill="#ea4335"/></g></g><g id="Clipped-5" data-name="Clipped"><path id="a-7" data-name="a" d="M17.791,7.364H9.209v3.477h4.94c-.46,2.209-2.386,3.477-4.94,3.477A5.37,5.37,0,0,1,3.767,9,5.442,5.442,0,0,1,12.6,4.868L15.279,2.25A9.29,9.29,0,0,0,9.209,0,9.08,9.08,0,0,0,0,9a9.08,9.08,0,0,0,9.209,9A8.586,8.586,0,0,0,18,9,7.306,7.306,0,0,0,17.791,7.364Z" fill="none"/><g id="Clipped-6" data-name="Clipped" clip-path="url(#clip-path)"><path id="Path-3" data-name="Path" d="M0,15.136,12.558,5.727l3.307.409L20.093,0V19.636H0Z" transform="translate(-0.837 -0.818)" fill="#34a853"/></g></g><g id="Clipped-7" data-name="Clipped"><path id="a-8" data-name="a" d="M17.791,7.364H9.209v3.477h4.94c-.46,2.209-2.386,3.477-4.94,3.477A5.37,5.37,0,0,1,3.767,9,5.442,5.442,0,0,1,12.6,4.868L15.279,2.25A9.29,9.29,0,0,0,9.209,0,9.08,9.08,0,0,0,0,9a9.08,9.08,0,0,0,9.209,9A8.586,8.586,0,0,0,18,9,7.306,7.306,0,0,0,17.791,7.364Z" fill="none"/><g id="Clipped-8" data-name="Clipped" clip-path="url(#clip-path)"><path id="Path-4" data-name="Path" d="M14.651,15.136,1.674,5.318,0,4.091,14.651,0Z" transform="translate(4.605 3.682)" fill="#4285f4"/></g></g></g>
                                </svg>
                                <div class="ml-2 font-semibold text-sm text-[color:rgba(var(--ni-gray-600))]">Sign in with Google</div>
                            </button>
                        </div>

                        <!-- or -->
                        <div class="flex justify-center items-center">
                            <div class="w-full border-b border-[color:rgba(var(--ni-primary-200))]"></div>
                            <div class="text-[color:rgba(var(--ni-gray-400))] mx-4">or</div>
                            <div class="w-full border-b border-[color:rgba(var(--ni-primary-200))]"></div>
                        </div>

                        <form id="split-login-and-carousel" class="flex flex-col justify-center items-center space-y-5 mt-10">

                            <!-- input name -->
                            <div class="flex flex-col space-y-0 w-full">
                                <label class="flex text-sm mb-2" for="name">
                                    <span class="text-[color:rgba(var(--ni-gray-900))]">Full name</span>
                                    <span class="text-[color:rgba(var(--ni-danger-500))]">*</span>
                                </label>
                                <input class="outline-none px-4 py-2 border border-[color:rgba(var(--ni-primary-200))] rounded-md" type="text" name="name" placeholder="Enter name">
                            </div>
    
                            <!-- input email address -->
                            <div class="flex flex-col space-y-0 w-full">
                                <label class="flex text-sm mb-2" for="email">
                                    <span class="text-[color:rgba(var(--ni-gray-900))]">Email address</span>
                                    <span class="text-[color:rgba(var(--ni-danger-500))]">*</span>
                                </label>
                                <input class="outline-none px-4 py-2 border border-[color:rgba(var(--ni-primary-200))] rounded-md" type="email" name="email" placeholder="Enter email">
                            </div>
    
                            <!-- input password -->
                            <div class="flex flex-col space-y-0 w-full">
                                <label class="flex text-sm mb-2" for="password">
                                    <span class="text-[color:rgba(var(--ni-gray-900))]">Password</span>
                                    <span class="text-[color:rgba(var(--ni-danger-500))]">*</span>
                                </label>
                                <input id="password" class="outline-none px-4 py-2 border border-[color:rgba(var(--ni-primary-200))] rounded-md" type="password" name="password" placeholder="Create a password">
                            </div>

                            <!-- required password -->
                            <div id="required-password" class="grid lg:grid-cols-1 xl:grid-cols-2 w-full">
                                <div class="flex">
                                    <svg class="w-6 h-6 text-white fill-[color:rgba(var(--ni-gray-300))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <div class="ml-1 text-sm text-[color:rgba(var(--ni-gray-400))] my-auto">One lowercase character</div>
                                    <span class="text-[color:rgba(var(--ni-danger-500))] my-auto">*</span>
                                </div>
                                <div class="flex">
                                    <svg class="w-6 h-6 text-white fill-[color:rgba(var(--ni-gray-300))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <div class="ml-1 text-sm text-[color:rgba(var(--ni-gray-400))] my-auto">One special character</div>
                                </div>
                                <div class="flex">
                                    <svg class="w-6 h-6 text-white fill-[color:rgba(var(--ni-gray-300))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <div class="ml-1 text-sm text-[color:rgba(var(--ni-gray-400))] my-auto">One uppercase character</div>
                                </div>
                                <div class="flex">
                                    <svg class="w-6 h-6 text-white fill-[color:rgba(var(--ni-gray-300))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <div class="ml-1 text-sm text-[color:rgba(var(--ni-gray-400))] my-auto">8 character minimum</div>
                                    <span class="text-[color:rgba(var(--ni-danger-500))] my-auto">*</span>
                                </div>
                                <div class="flex">
                                    <svg class="w-6 h-6 text-white fill-[color:rgba(var(--ni-gray-300))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <div class="ml-1 text-sm text-[color:rgba(var(--ni-gray-400))] my-auto">One number</div>
                                </div>
                            </div>
    
                            <!-- create account button -->
                            <div class="flex flex-col w-full">
                                <button class="bg-[color:rgba(var(--ni-primary-500))] hover:bg-[color:rgba(var(--ni-primary-600))] font-semibold text-white mt-5 px-4 py-2 rounded-md duration-300" type="submit">Create account</button>
                            </div>

                            <!-- log in question -->
                            <div class="text-sm sm:text-md flex">
                                <div class="text-[color:rgba(var(--ni-gray-400))]">Already have an account?</div>
                                <div class="ml-2 font-semibold text-[color:rgba(var(--ni-primary-500))] hover:text-[color:rgba(var(--ni-primary-600))]">
                                    <a href="#">Log in</a>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- form footer -->
                    <div class="w-full font-medium text-md text-[color:rgba(var(--ni-gray-400))] flex mt-20 lg:mt-40">
                        <a href="#" class="hover:text-[color:rgba(var(--ni-primary-500))]">@2022 Stratis</a>
                        <a href="#" class="ml-auto hover:text-[color:rgba(var(--ni-primary-500))]">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>

@endsection

@section('internalScript')

<!-- jQuery validation CDN -->
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<script>

    // call function
    classicSplitLoginAndCarouselSlide();

</script>
@endsection