@extends('master')
@section('internalCss')
<link rel="stylesheet" type="text/css" href="{{ asset('css/evoCalendar.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>

@endsection
@section('content')

{{-- <div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div> --}}

<!-- Design POS Pricing Order -->

<!-- main -->
<div class="mainCard">
    <div class="cardContainer">
        <div class="mx-auto select-none">

            <!-- contents -->
            <div class="bg-[color:rgba(var(--ni-gray-100))] w-full border border-[color:rgba(var(--ni-gray-200))] rounded-[3rem] shadow-lg">
                <div class="flex flex-col xl:flex-col 2xl:flex-row space-y-10 2xl:space-y-0 mt-10 px-3 lg:px-10">

                    <!-- brand & search bar -->
                    <div class="flex flex-col sm:flex-col space-y-5 sm:space-y-5 md:space-y-0 md:flex-row w-full">
                        <!-- brand -->
                        <div class="text-3xl text-center font-mono my-auto hidden sm:block">
                            <div class="font-bold text-[color:rgba(var(--ni-gray-700))] hover:text-[color:rgba(var(--ni-warning-800))] duration-150">Coffee</div>
                        </div>
        
                        <!-- brand image -->
                        <div class="flex justify-center items-center sm:hidden">
                            <svg class="w-10 h-10" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 340 340" style="enable-background:new 0 0 340 340;" xml:space="preserve"><g id="XMLID_18_"><polygon id="XMLID_138_" style="fill:#DEDDE0;" points="76.429,290 80,340 170,340 170,290 	"/><polygon id="XMLID_169_" style="fill:#DEDDE0;" points="170,80 61.429,80 65,130 170,130 	"/><polygon id="XMLID_197_" style="fill:#ACABB1;" points="170,290 170,340 260,340 263.571,290 	"/><polygon id="XMLID_221_" style="fill:#ACABB1;" points="170,80 170,130 275,130 278.571,80 	"/><path id="XMLID_222_" style="fill:#FFDA44;" d="M170,260c-22.091,0-40-22.386-40-50s17.909-50,40-50v-30H65H50l10,160h16.429H170 V260z"/>
                                <path id="XMLID_33_" style="fill:#FF9811;" d="M170,130v30c22.091,0,40,22.386,40,50s-17.909,50-40,50v30h93.571H280l10-160h-15 H170z"/><path id="XMLID_223_" style="fill:#50412E;" d="M210,210c0-27.614-17.909-50-40-50v100C192.091,260,210,237.614,210,210z"/><path id="XMLID_224_" style="fill:#786145;" d="M130,210c0,27.614,17.909,50,40,50V160C147.909,160,130,182.386,130,210z"/><polygon id="XMLID_225_" style="fill:#50412E;" points="278.571,80 300,80 300,40 260,40 260,0 80,0 80,40 40,40 40,80 61.429,80 170,80 	"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                            </svg> 
                        </div>
        
                        <!-- search bar -->
                        <div class="ml-0 sm:ml-0 md:ml-10 mr-0 lg:mr-5 xl:mr-20 2xl:mr-32 my-auto w-full relative border-b border-[color:rgba(var(--ni-gray-100))]">
                            <svg class="pointer-events-none absolute top-3.5 left-4 h-5 w-5 text-[color:rgba(var(--ni-gray-400))]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                            </svg>
                            <input class="outline-none px-12 py-5 bg-white border border-[color:rgba(var(--ni-gray-100))] shadow-md rounded-2xl h-12 w-full pl-11 pr-4 text-[color:rgba(var(--ni-gray-800))] focus:ring-0 sm:text-sm" type="search" placeholder="Search for coffee, food etc" data-search>
                        </div>
                    </div>
                    
                    <!-- profile & settings -->
                    <div class="flex space-x-2 md:space-x-5 justify-center items-center">
                        
                        <!-- ticket -->
                        <div class="p-3 bg-white text-[color:rgba(var(--ni-gray-500))] border-b border-[color:rgba(var(--ni-gray-100))] shadow-lg rounded-full hover:outline hover:outline-2 hover:outline-[color:rgba(var(--ni-warning-300))]">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"></path></svg>
                        </div>
    
                        <!-- stats -->
                        <div class="p-3 bg-white fill-[color:rgba(var(--ni-gray-500))] border-b border-[color:rgba(var(--ni-gray-100))] shadow-lg rounded-full hover:outline hover:outline-2 hover:outline-[color:rgba(var(--ni-warning-300))]">
                            <svg class="w-6 h-6" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 512 512"><g><g>
                                <path d="m80.1,405.6c3.5,2.4 17,9.1 28.4-5.3l77.2-112.8 81.7,78.8c4.3,4.1 10.2,6.3 16.2,5.6 5.9-0.6 11.3-3.7 14.8-8.6l135.5-194.3 4.9,65c1.2,16.5 16.7,19.2 21.9,18.8 11.2-0.9 19.7-10.6 18.8-21.9l-8.6-114.3c-0.8-11.2-10.6-19.7-21.9-18.8l-114.3,8.6c-11.2,0.8-19.7,10.6-18.8,21.9 0.8,11.2 10.5,19.6 21.9,18.8l65-4.9-124.2,178-81.9-79c-4.3-4.2-10.3-6.3-16.2-5.6-6,0.6-11.4,3.8-14.8,8.8l-90.9,132.8c-6.4,9.3-4,22 5.3,28.4z"/><path d="M480.6,460.2H51.8V31.4c0-11.3-9.1-20.4-20.4-20.4S11,20.1,11,31.4v449.2c0,11.3,9.1,20.4,20.4,20.4h449.2    c11.3,0,20.4-9.1,20.4-20.4C501,469.3,491.9,460.2,480.6,460.2z"/></g></g>
                            </svg>
                        </div>
    
                        <!-- settings -->
                        <div class="p-3 bg-white text-[color:rgba(var(--ni-gray-500))] border-b border-[color:rgba(var(--ni-gray-100))] shadow-lg rounded-full hover:outline hover:outline-2 hover:outline-[color:rgba(var(--ni-warning-300))]">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
    
                        <!-- profile -->
                        <div class="w-12 h-12 flex-none my-auto rounded-full outline outline-2 outline-[color:rgba(var(--ni-warning-300))]">
                            <img class="rounded-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQnDVLvpYHYEkteOUkWNPpHZVhNIAMIz3YWze1IkSm9Q&s" alt="">
                        </div>
    
                        <!-- cashier dropdown -->
                        <div class="my-auto">
                            <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="text-[color:rgba(var(--ni-gray-400))] flex font-medium rounded-lg text-sm" type="button">Cashier 
                                <svg class="ml-2 w-4 h-4 my-auto" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 10px);">
                                <ul class="py-1 text-sm text-[color:rgba(var(--ni-gray-800))]" aria-labelledby="dropdownDefault">
                                    <li>
                                        <a href="#" class="block py-2 px-4 hover:bg-[color:rgba(var(--ni-gray-100))]">Roungridh Him</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block py-2 px-4 hover:bg-[color:rgba(var(--ni-gray-100))]">Roungridh Him</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block py-2 px-4 hover:bg-[color:rgba(var(--ni-gray-100))]">Roungridh Him</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block py-2 px-4 hover:bg-[color:rgba(var(--ni-gray-100))]">Roungridh Him</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col lg:flex-col xl:flex-row my-auto">

                    <!-- left side -->
                    <div class="w-full xl:w-[70%]">
                        <div class="mx-auto py-10 px-3 sm:px-5 md:px-10 space-y-10">

                            <!-- nav coffe types -->
                            <nav class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 text-center font-bold p-3 xl:p-0 bg-white xl:bg-[color:rgba(var(--ni-gray-100))] shadow-lg xl:shadow-none rounded-xl xl:rounded-none">
                                <div class="p-2 hover:bg-[color:rgba(var(--ni-gray-800))] text-[color:rgba(var(--ni-gray-400))] hover:text-white rounded-xl duration-150">
                                    <a href="#">All</a>
                                </div>
                                <div class="p-2 hover:bg-[color:rgba(var(--ni-gray-800))] text-[color:rgba(var(--ni-gray-400))] hover:text-white rounded-xl duration-150">
                                    <a href="#">Espresso</a>
                                </div>
                                <div class="p-2 hover:bg-[color:rgba(var(--ni-gray-800))] text-[color:rgba(var(--ni-gray-400))] hover:text-white rounded-xl duration-150">
                                    <a href="#">Cappuccino</a>
                                </div>
                                <div class="p-2 hover:bg-[color:rgba(var(--ni-gray-800))] text-[color:rgba(var(--ni-gray-400))] hover:text-white rounded-xl duration-150">
                                    <a href="#">Latte</a>
                                </div>
                                <div class="p-2 hover:bg-[color:rgba(var(--ni-gray-800))] text-[color:rgba(var(--ni-gray-400))] hover:text-white rounded-xl duration-150">
                                    <a href="#">Mocha</a>
                                </div>
                                <div class="p-2 hover:bg-[color:rgba(var(--ni-gray-800))] text-[color:rgba(var(--ni-gray-400))] hover:text-white rounded-xl duration-150">
                                    <a href="#">Macchiato</a>
                                </div>
                            </nav>

                            <!-- coffee items -->
                            <div class="cardContainer grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-2 2xl:grid-cols-3">

                                <!-- item 1 -->
                                <div class="flex flex-col space-y-4 p-4 bg-white shadow-lg rounded-3xl hover:scale-105 duration-150 relative"> <!-- add class "relative" : shopping cart always show & stay on top -->

                                    <!-- item 1: image -->
                                    <div class="shadow-xl rounded-3xl">
                                        <img class="w-full rounded-3xl object-contain" src="https://c0.wallpaperflare.com/preview/374/328/921/cafe-caffe-latte-cappuccino-coffee.jpg" alt="Espresso">
                                        <svg class="pointer-events-none absolute rounded-full top-2 right-2 w-10 h-10" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 297 297" style="enable-background:new 0 0 297 297;" xml:space="preserve"><g><g><circle style="fill:#FFCD02;" cx="148.5" cy="148.5" r="148.5"/></g><g>
                                            <path style="fill:#D3AC0B;" d="M248.97,101.018l-140.82,87.107l96.9,97.717c53.133-21.902,90.769-73.73,91.913-134.494 L248.97,101.018z"/></g><g><path style="fill:#D75E29;" d="M76.592,101.018l27.089,91.401h116.898c15.68,0,28.391-12.711,28.391-28.391v-63.01 C248.97,101.018,76.592,101.018,76.592,101.018z"/></g><g><g><path style="fill:#C63C22;" d="M230.837,218.429H114.342c-1.91,0-3.611-1.205-4.245-3.007L58.951,69.983H49.5 c-2.485,0-4.5-2.015-4.5-4.5s2.015-4.5,4.5-4.5h12.639c1.91,0,3.611,1.205,4.245,3.007l51.146,145.438h113.308 c2.485,0,4.5,2.015,4.5,4.5S233.322,218.429,230.837,218.429z"/></g></g><g><path style="fill:#32373B;" d="M194.373,237.472c-3.9-12.515,8.39-23.766,20.999-17.881c2.707,1.264,4.91,3.466,6.174,6.174 c5.885,12.61-5.365,24.9-17.881,20.999C199.205,245.375,195.762,241.932,194.373,237.472z"/></g><g><circle style="fill:#32373B;" cx="129.379" cy="232.742" r="14.758"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                        </svg>
                                    </div>  

                                    <!-- item 1: name & price -->
                                    <div class="flex">
                                        <div class="text-xl font-bold w-full">Espresso</div>
                                        <div class="text-xl font-bold">$2.6</div>
                                    </div>

                                    <!-- item 1: add milk -->
                                    <div class="flex text-[color:rgba(var(--ni-gray-400))]">
                                        <div class="text-sm w-full my-auto">Add plant milk</div>
                                        <button class="text-xl">
                                            <svg class="w-6 h-6 fill-[color:rgba(var(--ni-gray-400))] hover:fill-[color:rgba(var(--ni-primary-400))]" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490.2 490.2" style="enable-background:new 0 0 490.2 490.2;" xml:space="preserve"><g><g>
                                                <path d="M418.5,418.5c95.6-95.6,95.6-251.2,0-346.8s-251.2-95.6-346.8,0s-95.6,251.2,0,346.8S322.9,514.1,418.5,418.5z M89,89 c86.1-86.1,226.1-86.1,312.2,0s86.1,226.1,0,312.2s-226.1,86.1-312.2,0S3,175.1,89,89z"/><path d="M245.1,336.9c3.4,0,6.4-1.4,8.7-3.6c2.2-2.2,3.6-5.3,3.6-8.7v-67.3h67.3c3.4,0,6.4-1.4,8.7-3.6c2.2-2.2,3.6-5.3,3.6-8.7 c0-6.8-5.5-12.3-12.2-12.2h-67.3v-67.3c0-6.8-5.5-12.3-12.2-12.2c-6.8,0-12.3,5.5-12.2,12.2v67.3h-67.3c-6.8,0-12.3,5.5-12.2,12.2 c0,6.8,5.5,12.3,12.2,12.2h67.3v67.3C232.8,331.4,238.3,336.9,245.1,336.9z"/></g></g><g></g><g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                            </svg>
                                        </button>
                                    </div>

                                    <!-- choose size of coffee -->
                                    <div class="grid grid-cols-4 pb-5 justify-items-center items-center">

                                        <!-- tall -->
                                        <div class="space-y-1 text-center">
                                            <div class="p-3 hover:bg-[color:rgba(var(--ni-warning-100))] rounded-full">
                                                <svg class="w-7 h-7" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g>
                                                    <path style="fill:#5C546A;" d="M405.859,66.555C404.351,64.93,402.226,64,400,64H96c-2.227,0-4.352,0.93-5.859,2.555 c-1.516,1.633-2.281,3.82-2.117,6.039l30.883,417.211C119.852,502.25,130.359,512,142.836,512h210.328 c12.477,0,22.984-9.75,23.93-22.203l30.883-417.203C408.14,70.375,407.375,68.187,405.859,66.555z"/></g><g><path style="fill:#8B8996;" d="M400,64H248v448h105.164c12.477,0,22.984-9.75,23.93-22.203l30.883-417.203 c0.164-2.219-0.602-4.406-2.117-6.039C404.351,64.93,402.226,64,400,64z"/></g><g><polygon style="fill:#C27B58;" points="114.035,424 381.964,424 402.098,152 93.901,152 		"/></g><g><polygon style="fill:#9F6459;" points="248,152 93.901,152 114.035,424 248,424 		"/></g><g><path style="fill:#D8DCE1;" d="M88,56l25.009-44.348C117.346,4.423,125.158,0,133.589,0h228.823c8.43,0,16.242,4.423,20.58,11.652 L408,56"/></g><g><circle style="fill:#FFD200;" cx="248" cy="288" r="72"/></g><g><path style="fill:#FF9600;" d="M176,288c0,39.764,32.235,72,72,72V216C208.235,216,176,248.235,176,288z"/></g><g><path style="fill:#B9BBC1;" d="M248,0H133.588c-8.43,0-16.242,4.423-20.58,11.652L88,56h160V0z"/></g><g><path style="fill:#8B8996;" d="M424,80H88c-8.837,0-16-7.163-16-16v0c0-8.837,7.163-16,16-16h336c8.837,0,16,7.163,16,16v0 C440,72.837,432.836,80,424,80z"/></g><g><path style="fill:#B9BBC1;" d="M424,48H248v32h176c8.836,0,16-7.164,16-16C440,55.163,432.836,48,424,48z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                </svg>
                                            </div>
                                            <div class="font-medium text-sm text-[color:rgba(var(--ni-gray-400))]">Tall</div>
                                        </div>

                                        <!-- grande -->
                                        <div class="space-y-1 text-center">
                                            <div class="p-3 hover:bg-[color:rgba(var(--ni-warning-100))] rounded-full">
                                                <svg class="w-7 h-7" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 130.739 130.739" style="enable-background:new 0 0 130.739 130.739;" xml:space="preserve"><g><g>
                                                    <polygon style="fill:#FFAC38;" points="108.055,39.5 22.694,39.5 27.265,19.25 28.294,14.68 31.614,0 99.135,0 102.444,14.68 103.475,19.25 		"/><polygon style="fill:#084057;" points="107.935,39.5 107.124,44.069 91.805,130.739 38.935,130.739 23.624,44.069 22.814,39.5 		"/><rect x="11.185" y="19.25" style="fill:#FFAC38;" width="108.37" height="20.25"/><circle style="fill:#FFAC38;" cx="65.373" cy="79.242" r="17.282"/></g><polygon style="opacity:0.5;fill:#084057;" points="107.935,39.5 107.124,44.069 23.624,44.069 22.814,39.5 	"/><polygon style="fill:#FFCE87;" points="103.475,19.25 27.265,19.25 28.294,14.68 102.444,14.68 	"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                </svg>
                                            </div>
                                            <div class="font-medium text-sm text-[color:rgba(var(--ni-gray-400))]">Grande</div>
                                        </div>

                                        <!-- venti -->
                                        <div class="space-y-1 text-center">
                                            <div class="p-3 hover:bg-[color:rgba(var(--ni-warning-100))] rounded-full">
                                                <svg class="w-7 h-7" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 340 340" style="enable-background:new 0 0 340 340;" xml:space="preserve"><g id="XMLID_18_"><polygon id="XMLID_138_" style="fill:#DEDDE0;" points="76.429,290 80,340 170,340 170,290 	"/><polygon id="XMLID_169_" style="fill:#DEDDE0;" points="170,80 61.429,80 65,130 170,130 	"/><polygon id="XMLID_197_" style="fill:#ACABB1;" points="170,290 170,340 260,340 263.571,290 	"/><polygon id="XMLID_221_" style="fill:#ACABB1;" points="170,80 170,130 275,130 278.571,80 	"/><path id="XMLID_222_" style="fill:#FFDA44;" d="M170,260c-22.091,0-40-22.386-40-50s17.909-50,40-50v-30H65H50l10,160h16.429H170 V260z"/>
                                                    <path id="XMLID_33_" style="fill:#FF9811;" d="M170,130v30c22.091,0,40,22.386,40,50s-17.909,50-40,50v30h93.571H280l10-160h-15 H170z"/><path id="XMLID_223_" style="fill:#50412E;" d="M210,210c0-27.614-17.909-50-40-50v100C192.091,260,210,237.614,210,210z"/><path id="XMLID_224_" style="fill:#786145;" d="M130,210c0,27.614,17.909,50,40,50V160C147.909,160,130,182.386,130,210z"/><polygon id="XMLID_225_" style="fill:#50412E;" points="278.571,80 300,80 300,40 260,40 260,0 80,0 80,40 40,40 40,80 61.429,80 170,80 	"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                </svg> 
                                            </div>
                                            <div class="font-medium text-sm text-[color:rgba(var(--ni-gray-400))]">Venti</div>
                                        </div>

                                        <!-- trenta -->
                                        <div class="space-y-1 text-center">
                                            <div class="p-3 hover:bg-[color:rgba(var(--ni-warning-100))] rounded-full">
                                                <svg class="w-7 h-7" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 501.551 501.551" style="enable-background:new 0 0 501.551 501.551;" xml:space="preserve">
                                                    <path style="fill:#F1543F;" d="M444.082,34.482H57.469c-16.718,0-29.257,13.584-29.257,29.257s13.584,30.302,29.257,30.302h386.612 c16.718,0,29.257-13.584,29.257-29.257S459.755,34.482,444.082,34.482z"/><polygon style="fill:#FF7058;" points="360.49,0 141.061,0 109.714,34.482 391.837,34.482 "/><path style="fill:#E2E2E2;" d="M444.082,94.041H57.469c-1.045,0-1.045,0-2.09,0l3.135,15.673l22.988,131.657l21.943,120.163 l21.943,123.298c2.09,10.449,10.449,16.718,20.898,16.718H356.31c10.449,0,18.808-7.314,20.898-16.718l21.943-123.298 l20.898-120.163l22.988-131.657l3.135-15.673C445.126,94.041,444.082,94.041,444.082,94.041z"/><path style="fill:#CDD6E0;" d="M446.171,94.041l-3.135,15.673H58.514L55.38,94.041c1.045,0,1.045,0,2.09,0h386.612 C444.082,94.041,445.126,94.041,446.171,94.041z"/><path style="fill:#FFD15C;" d="M419.004,240.327h-85.682c-16.718-36.571-47.02-61.649-82.547-61.649s-66.873,25.078-82.547,61.649 H82.547L104.49,360.49h64.784c16.718,36.571,47.02,61.649,82.547,61.649s66.873-25.078,82.547-61.649h64.784L419.004,240.327z"/><g><path style="fill:#40596B;" d="M252.865,373.029c14.629-20.898,12.539-49.11-6.269-67.918 c-11.494-11.494-18.808-27.167-18.808-43.886c0-9.404,2.09-18.808,6.269-27.167c-19.853,9.404-33.437,36.571-33.437,67.918 c0,39.706,21.943,71.053,49.11,71.053C251.82,373.029,252.865,373.029,252.865,373.029z"/><path style="fill:#40596B;" d="M250.775,229.878c-1.045,0-2.09,0-2.09,0c-6.269,8.359-9.404,19.853-9.404,30.302 c0,14.629,5.225,27.167,15.673,37.616c18.808,18.808,22.988,48.065,12.539,71.053c19.853-9.404,33.437-36.571,33.437-67.918 C299.886,262.269,277.943,229.878,250.775,229.878z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                </svg>
                                            </div>
                                            <div class="font-medium text-sm text-[color:rgba(var(--ni-gray-400))]">Trenta</div>
                                        </div>
                                    </div>
                                </div>   
                                
                                <!-- item 2 -->
                                <div class="flex flex-col space-y-4 p-4 bg-white shadow-lg rounded-3xl hover:scale-105 duration-150 relative"> <!-- add class "relative" : shopping cart always show & stay on top -->

                                    <!-- item 2: image -->
                                    <div class="shadow-xl rounded-3xl">
                                        <img class="w-full rounded-3xl object-contain" src="https://static01.nyt.com/images/2016/05/24/dining/24COOKING-COLD-BREWED-ICE-COFFEE2/24COOKING-COLD-BREWED-ICE-COFFEE2-articleLarge.jpg" alt="Cold Brew">
                                        <svg class="pointer-events-none absolute rounded-full top-2 right-2 w-10 h-10" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 297 297" style="enable-background:new 0 0 297 297;" xml:space="preserve"><g><g><circle style="fill:#FFCD02;" cx="148.5" cy="148.5" r="148.5"/></g><g>
                                            <path style="fill:#D3AC0B;" d="M248.97,101.018l-140.82,87.107l96.9,97.717c53.133-21.902,90.769-73.73,91.913-134.494 L248.97,101.018z"/></g><g><path style="fill:#D75E29;" d="M76.592,101.018l27.089,91.401h116.898c15.68,0,28.391-12.711,28.391-28.391v-63.01 C248.97,101.018,76.592,101.018,76.592,101.018z"/></g><g><g><path style="fill:#C63C22;" d="M230.837,218.429H114.342c-1.91,0-3.611-1.205-4.245-3.007L58.951,69.983H49.5 c-2.485,0-4.5-2.015-4.5-4.5s2.015-4.5,4.5-4.5h12.639c1.91,0,3.611,1.205,4.245,3.007l51.146,145.438h113.308 c2.485,0,4.5,2.015,4.5,4.5S233.322,218.429,230.837,218.429z"/></g></g><g><path style="fill:#32373B;" d="M194.373,237.472c-3.9-12.515,8.39-23.766,20.999-17.881c2.707,1.264,4.91,3.466,6.174,6.174 c5.885,12.61-5.365,24.9-17.881,20.999C199.205,245.375,195.762,241.932,194.373,237.472z"/></g><g><circle style="fill:#32373B;" cx="129.379" cy="232.742" r="14.758"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                        </svg>
                                    </div>

                                    <!-- item 2: name & price -->
                                    <div class="flex">
                                        <div class="text-xl font-bold w-full">Cold Brew</div>
                                        <div class="text-xl font-bold">$2.9</div>
                                    </div>

                                    <!-- item 2: add milk -->
                                    <div class="flex text-[color:rgba(var(--ni-gray-400))]">
                                        <div class="text-sm w-full my-auto">Add plant milk</div>
                                        <button class="text-xl">
                                            <svg class="w-6 h-6 fill-[color:rgba(var(--ni-gray-400))] hover:fill-[color:rgba(var(--ni-primary-400))]" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490.2 490.2" style="enable-background:new 0 0 490.2 490.2;" xml:space="preserve"><g><g>
                                                <path d="M418.5,418.5c95.6-95.6,95.6-251.2,0-346.8s-251.2-95.6-346.8,0s-95.6,251.2,0,346.8S322.9,514.1,418.5,418.5z M89,89 c86.1-86.1,226.1-86.1,312.2,0s86.1,226.1,0,312.2s-226.1,86.1-312.2,0S3,175.1,89,89z"/><path d="M245.1,336.9c3.4,0,6.4-1.4,8.7-3.6c2.2-2.2,3.6-5.3,3.6-8.7v-67.3h67.3c3.4,0,6.4-1.4,8.7-3.6c2.2-2.2,3.6-5.3,3.6-8.7 c0-6.8-5.5-12.3-12.2-12.2h-67.3v-67.3c0-6.8-5.5-12.3-12.2-12.2c-6.8,0-12.3,5.5-12.2,12.2v67.3h-67.3c-6.8,0-12.3,5.5-12.2,12.2 c0,6.8,5.5,12.3,12.2,12.2h67.3v67.3C232.8,331.4,238.3,336.9,245.1,336.9z"/></g></g><g></g><g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                            </svg>
                                        </button>
                                    </div>

                                    <!-- choose size of coffee -->
                                    <div class="grid grid-cols-4 pb-5 justify-items-center items-center">

                                        <!-- tall -->
                                        <div class="space-y-1 text-center">
                                            <div class="p-3 hover:bg-[color:rgba(var(--ni-warning-100))] rounded-full">
                                                <svg class="w-7 h-7" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g>
                                                    <path style="fill:#5C546A;" d="M405.859,66.555C404.351,64.93,402.226,64,400,64H96c-2.227,0-4.352,0.93-5.859,2.555 c-1.516,1.633-2.281,3.82-2.117,6.039l30.883,417.211C119.852,502.25,130.359,512,142.836,512h210.328 c12.477,0,22.984-9.75,23.93-22.203l30.883-417.203C408.14,70.375,407.375,68.187,405.859,66.555z"/></g><g><path style="fill:#8B8996;" d="M400,64H248v448h105.164c12.477,0,22.984-9.75,23.93-22.203l30.883-417.203 c0.164-2.219-0.602-4.406-2.117-6.039C404.351,64.93,402.226,64,400,64z"/></g><g><polygon style="fill:#C27B58;" points="114.035,424 381.964,424 402.098,152 93.901,152 		"/></g><g><polygon style="fill:#9F6459;" points="248,152 93.901,152 114.035,424 248,424 		"/></g><g><path style="fill:#D8DCE1;" d="M88,56l25.009-44.348C117.346,4.423,125.158,0,133.589,0h228.823c8.43,0,16.242,4.423,20.58,11.652 L408,56"/></g><g><circle style="fill:#FFD200;" cx="248" cy="288" r="72"/></g><g><path style="fill:#FF9600;" d="M176,288c0,39.764,32.235,72,72,72V216C208.235,216,176,248.235,176,288z"/></g><g><path style="fill:#B9BBC1;" d="M248,0H133.588c-8.43,0-16.242,4.423-20.58,11.652L88,56h160V0z"/></g><g><path style="fill:#8B8996;" d="M424,80H88c-8.837,0-16-7.163-16-16v0c0-8.837,7.163-16,16-16h336c8.837,0,16,7.163,16,16v0 C440,72.837,432.836,80,424,80z"/></g><g><path style="fill:#B9BBC1;" d="M424,48H248v32h176c8.836,0,16-7.164,16-16C440,55.163,432.836,48,424,48z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                </svg>
                                            </div>
                                            <div class="font-medium text-sm text-[color:rgba(var(--ni-gray-400))]">Tall</div>
                                        </div>

                                        <!-- grande -->
                                        <div class="space-y-1 text-center">
                                            <div class="p-3 hover:bg-[color:rgba(var(--ni-warning-100))] rounded-full">
                                                <svg class="w-7 h-7" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 130.739 130.739" style="enable-background:new 0 0 130.739 130.739;" xml:space="preserve"><g><g>
                                                    <polygon style="fill:#FFAC38;" points="108.055,39.5 22.694,39.5 27.265,19.25 28.294,14.68 31.614,0 99.135,0 102.444,14.68 103.475,19.25 		"/><polygon style="fill:#084057;" points="107.935,39.5 107.124,44.069 91.805,130.739 38.935,130.739 23.624,44.069 22.814,39.5 		"/><rect x="11.185" y="19.25" style="fill:#FFAC38;" width="108.37" height="20.25"/><circle style="fill:#FFAC38;" cx="65.373" cy="79.242" r="17.282"/></g><polygon style="opacity:0.5;fill:#084057;" points="107.935,39.5 107.124,44.069 23.624,44.069 22.814,39.5 	"/><polygon style="fill:#FFCE87;" points="103.475,19.25 27.265,19.25 28.294,14.68 102.444,14.68 	"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                </svg>
                                            </div>
                                            <div class="font-medium text-sm text-[color:rgba(var(--ni-gray-400))]">Grande</div>
                                        </div>

                                        <!-- venti -->
                                        <div class="space-y-1 text-center">
                                            <div class="p-3 hover:bg-[color:rgba(var(--ni-warning-100))] rounded-full">
                                                <svg class="w-7 h-7" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 340 340" style="enable-background:new 0 0 340 340;" xml:space="preserve"><g id="XMLID_18_"><polygon id="XMLID_138_" style="fill:#DEDDE0;" points="76.429,290 80,340 170,340 170,290 	"/><polygon id="XMLID_169_" style="fill:#DEDDE0;" points="170,80 61.429,80 65,130 170,130 	"/><polygon id="XMLID_197_" style="fill:#ACABB1;" points="170,290 170,340 260,340 263.571,290 	"/><polygon id="XMLID_221_" style="fill:#ACABB1;" points="170,80 170,130 275,130 278.571,80 	"/><path id="XMLID_222_" style="fill:#FFDA44;" d="M170,260c-22.091,0-40-22.386-40-50s17.909-50,40-50v-30H65H50l10,160h16.429H170 V260z"/>
                                                    <path id="XMLID_33_" style="fill:#FF9811;" d="M170,130v30c22.091,0,40,22.386,40,50s-17.909,50-40,50v30h93.571H280l10-160h-15 H170z"/><path id="XMLID_223_" style="fill:#50412E;" d="M210,210c0-27.614-17.909-50-40-50v100C192.091,260,210,237.614,210,210z"/><path id="XMLID_224_" style="fill:#786145;" d="M130,210c0,27.614,17.909,50,40,50V160C147.909,160,130,182.386,130,210z"/><polygon id="XMLID_225_" style="fill:#50412E;" points="278.571,80 300,80 300,40 260,40 260,0 80,0 80,40 40,40 40,80 61.429,80 170,80 	"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                </svg> 
                                            </div>
                                            <div class="font-medium text-sm text-[color:rgba(var(--ni-gray-400))]">Venti</div>
                                        </div>

                                        <!-- trenta -->
                                        <div class="space-y-1 text-center">
                                            <div class="p-3 hover:bg-[color:rgba(var(--ni-warning-100))] rounded-full">
                                                <svg class="w-7 h-7" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 501.551 501.551" style="enable-background:new 0 0 501.551 501.551;" xml:space="preserve">
                                                    <path style="fill:#F1543F;" d="M444.082,34.482H57.469c-16.718,0-29.257,13.584-29.257,29.257s13.584,30.302,29.257,30.302h386.612 c16.718,0,29.257-13.584,29.257-29.257S459.755,34.482,444.082,34.482z"/><polygon style="fill:#FF7058;" points="360.49,0 141.061,0 109.714,34.482 391.837,34.482 "/><path style="fill:#E2E2E2;" d="M444.082,94.041H57.469c-1.045,0-1.045,0-2.09,0l3.135,15.673l22.988,131.657l21.943,120.163 l21.943,123.298c2.09,10.449,10.449,16.718,20.898,16.718H356.31c10.449,0,18.808-7.314,20.898-16.718l21.943-123.298 l20.898-120.163l22.988-131.657l3.135-15.673C445.126,94.041,444.082,94.041,444.082,94.041z"/><path style="fill:#CDD6E0;" d="M446.171,94.041l-3.135,15.673H58.514L55.38,94.041c1.045,0,1.045,0,2.09,0h386.612 C444.082,94.041,445.126,94.041,446.171,94.041z"/><path style="fill:#FFD15C;" d="M419.004,240.327h-85.682c-16.718-36.571-47.02-61.649-82.547-61.649s-66.873,25.078-82.547,61.649 H82.547L104.49,360.49h64.784c16.718,36.571,47.02,61.649,82.547,61.649s66.873-25.078,82.547-61.649h64.784L419.004,240.327z"/><g><path style="fill:#40596B;" d="M252.865,373.029c14.629-20.898,12.539-49.11-6.269-67.918 c-11.494-11.494-18.808-27.167-18.808-43.886c0-9.404,2.09-18.808,6.269-27.167c-19.853,9.404-33.437,36.571-33.437,67.918 c0,39.706,21.943,71.053,49.11,71.053C251.82,373.029,252.865,373.029,252.865,373.029z"/><path style="fill:#40596B;" d="M250.775,229.878c-1.045,0-2.09,0-2.09,0c-6.269,8.359-9.404,19.853-9.404,30.302 c0,14.629,5.225,27.167,15.673,37.616c18.808,18.808,22.988,48.065,12.539,71.053c19.853-9.404,33.437-36.571,33.437-67.918 C299.886,262.269,277.943,229.878,250.775,229.878z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                </svg>
                                            </div>
                                            <div class="font-medium text-sm text-[color:rgba(var(--ni-gray-400))]">Trenta</div>
                                        </div>
                                    </div>
                                </div> 

                                <!-- item 3 -->
                                <div class="flex flex-col space-y-4 p-4 bg-white shadow-lg rounded-3xl hover:scale-105 duration-150 relative"> <!-- add class "relative" : shopping cart always show & stay on top -->

                                    <!-- item 3: image -->
                                    <div class="shadow-xl rounded-3xl">
                                        <img class="w-full rounded-3xl object-contain" src="https://us.123rf.com/450wm/nd3000/nd30001811/nd3000181100175/111437400-cup-with-hot-tasty-coffee-on-wooden-table-in-cafe-close-up.jpg?ver=6" alt="Cinnamon Latte">
                                        <svg class="pointer-events-none absolute rounded-full top-2 right-2 w-10 h-10" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 297 297" style="enable-background:new 0 0 297 297;" xml:space="preserve"><g><g><circle style="fill:#FFCD02;" cx="148.5" cy="148.5" r="148.5"/></g><g>
                                            <path style="fill:#D3AC0B;" d="M248.97,101.018l-140.82,87.107l96.9,97.717c53.133-21.902,90.769-73.73,91.913-134.494 L248.97,101.018z"/></g><g><path style="fill:#D75E29;" d="M76.592,101.018l27.089,91.401h116.898c15.68,0,28.391-12.711,28.391-28.391v-63.01 C248.97,101.018,76.592,101.018,76.592,101.018z"/></g><g><g><path style="fill:#C63C22;" d="M230.837,218.429H114.342c-1.91,0-3.611-1.205-4.245-3.007L58.951,69.983H49.5 c-2.485,0-4.5-2.015-4.5-4.5s2.015-4.5,4.5-4.5h12.639c1.91,0,3.611,1.205,4.245,3.007l51.146,145.438h113.308 c2.485,0,4.5,2.015,4.5,4.5S233.322,218.429,230.837,218.429z"/></g></g><g><path style="fill:#32373B;" d="M194.373,237.472c-3.9-12.515,8.39-23.766,20.999-17.881c2.707,1.264,4.91,3.466,6.174,6.174 c5.885,12.61-5.365,24.9-17.881,20.999C199.205,245.375,195.762,241.932,194.373,237.472z"/></g><g><circle style="fill:#32373B;" cx="129.379" cy="232.742" r="14.758"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                        </svg>
                                    </div>

                                    <!-- item 3: name & price -->
                                    <div class="flex">
                                        <div class="text-xl font-bold w-full">Cinnamon Latte</div>
                                        <div class="text-xl font-bold">$3.7</div>
                                    </div>

                                    <!-- item 3: add milk -->
                                    <div class="flex text-[color:rgba(var(--ni-gray-400))]">
                                        <div class="text-sm w-full my-auto">Add plant milk</div>
                                        <button class="text-xl">
                                            <svg class="w-6 h-6 fill-[color:rgba(var(--ni-gray-400))] hover:fill-[color:rgba(var(--ni-primary-400))]" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490.2 490.2" style="enable-background:new 0 0 490.2 490.2;" xml:space="preserve"><g><g>
                                                <path d="M418.5,418.5c95.6-95.6,95.6-251.2,0-346.8s-251.2-95.6-346.8,0s-95.6,251.2,0,346.8S322.9,514.1,418.5,418.5z M89,89 c86.1-86.1,226.1-86.1,312.2,0s86.1,226.1,0,312.2s-226.1,86.1-312.2,0S3,175.1,89,89z"/><path d="M245.1,336.9c3.4,0,6.4-1.4,8.7-3.6c2.2-2.2,3.6-5.3,3.6-8.7v-67.3h67.3c3.4,0,6.4-1.4,8.7-3.6c2.2-2.2,3.6-5.3,3.6-8.7 c0-6.8-5.5-12.3-12.2-12.2h-67.3v-67.3c0-6.8-5.5-12.3-12.2-12.2c-6.8,0-12.3,5.5-12.2,12.2v67.3h-67.3c-6.8,0-12.3,5.5-12.2,12.2 c0,6.8,5.5,12.3,12.2,12.2h67.3v67.3C232.8,331.4,238.3,336.9,245.1,336.9z"/></g></g><g></g><g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                            </svg>
                                        </button>
                                    </div>

                                    <!-- choose size of coffee -->
                                    <div class="grid grid-cols-4 pb-5 justify-items-center items-center">

                                        <!-- tall -->
                                        <div class="space-y-1 text-center">
                                            <div class="p-3 hover:bg-[color:rgba(var(--ni-warning-100))] rounded-full">
                                                <svg class="w-7 h-7" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g>
                                                    <path style="fill:#5C546A;" d="M405.859,66.555C404.351,64.93,402.226,64,400,64H96c-2.227,0-4.352,0.93-5.859,2.555 c-1.516,1.633-2.281,3.82-2.117,6.039l30.883,417.211C119.852,502.25,130.359,512,142.836,512h210.328 c12.477,0,22.984-9.75,23.93-22.203l30.883-417.203C408.14,70.375,407.375,68.187,405.859,66.555z"/></g><g><path style="fill:#8B8996;" d="M400,64H248v448h105.164c12.477,0,22.984-9.75,23.93-22.203l30.883-417.203 c0.164-2.219-0.602-4.406-2.117-6.039C404.351,64.93,402.226,64,400,64z"/></g><g><polygon style="fill:#C27B58;" points="114.035,424 381.964,424 402.098,152 93.901,152 		"/></g><g><polygon style="fill:#9F6459;" points="248,152 93.901,152 114.035,424 248,424 		"/></g><g><path style="fill:#D8DCE1;" d="M88,56l25.009-44.348C117.346,4.423,125.158,0,133.589,0h228.823c8.43,0,16.242,4.423,20.58,11.652 L408,56"/></g><g><circle style="fill:#FFD200;" cx="248" cy="288" r="72"/></g><g><path style="fill:#FF9600;" d="M176,288c0,39.764,32.235,72,72,72V216C208.235,216,176,248.235,176,288z"/></g><g><path style="fill:#B9BBC1;" d="M248,0H133.588c-8.43,0-16.242,4.423-20.58,11.652L88,56h160V0z"/></g><g><path style="fill:#8B8996;" d="M424,80H88c-8.837,0-16-7.163-16-16v0c0-8.837,7.163-16,16-16h336c8.837,0,16,7.163,16,16v0 C440,72.837,432.836,80,424,80z"/></g><g><path style="fill:#B9BBC1;" d="M424,48H248v32h176c8.836,0,16-7.164,16-16C440,55.163,432.836,48,424,48z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                </svg>
                                            </div>
                                            <div class="font-medium text-sm text-[color:rgba(var(--ni-gray-400))]">Tall</div>
                                        </div>

                                        <!-- grande -->
                                        <div class="space-y-1 text-center">
                                            <div class="p-3 hover:bg-[color:rgba(var(--ni-warning-100))] rounded-full">
                                                <svg class="w-7 h-7" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 130.739 130.739" style="enable-background:new 0 0 130.739 130.739;" xml:space="preserve"><g><g>
                                                    <polygon style="fill:#FFAC38;" points="108.055,39.5 22.694,39.5 27.265,19.25 28.294,14.68 31.614,0 99.135,0 102.444,14.68 103.475,19.25 		"/><polygon style="fill:#084057;" points="107.935,39.5 107.124,44.069 91.805,130.739 38.935,130.739 23.624,44.069 22.814,39.5 		"/><rect x="11.185" y="19.25" style="fill:#FFAC38;" width="108.37" height="20.25"/><circle style="fill:#FFAC38;" cx="65.373" cy="79.242" r="17.282"/></g><polygon style="opacity:0.5;fill:#084057;" points="107.935,39.5 107.124,44.069 23.624,44.069 22.814,39.5 	"/><polygon style="fill:#FFCE87;" points="103.475,19.25 27.265,19.25 28.294,14.68 102.444,14.68 	"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                </svg>
                                            </div>
                                            <div class="font-medium text-sm text-[color:rgba(var(--ni-gray-400))]">Grande</div>
                                        </div>

                                        <!-- venti -->
                                        <div class="space-y-1 text-center">
                                            <div class="p-3 hover:bg-[color:rgba(var(--ni-warning-100))] rounded-full">
                                                <svg class="w-7 h-7" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 340 340" style="enable-background:new 0 0 340 340;" xml:space="preserve"><g id="XMLID_18_"><polygon id="XMLID_138_" style="fill:#DEDDE0;" points="76.429,290 80,340 170,340 170,290 	"/><polygon id="XMLID_169_" style="fill:#DEDDE0;" points="170,80 61.429,80 65,130 170,130 	"/><polygon id="XMLID_197_" style="fill:#ACABB1;" points="170,290 170,340 260,340 263.571,290 	"/><polygon id="XMLID_221_" style="fill:#ACABB1;" points="170,80 170,130 275,130 278.571,80 	"/><path id="XMLID_222_" style="fill:#FFDA44;" d="M170,260c-22.091,0-40-22.386-40-50s17.909-50,40-50v-30H65H50l10,160h16.429H170 V260z"/>
                                                    <path id="XMLID_33_" style="fill:#FF9811;" d="M170,130v30c22.091,0,40,22.386,40,50s-17.909,50-40,50v30h93.571H280l10-160h-15 H170z"/><path id="XMLID_223_" style="fill:#50412E;" d="M210,210c0-27.614-17.909-50-40-50v100C192.091,260,210,237.614,210,210z"/><path id="XMLID_224_" style="fill:#786145;" d="M130,210c0,27.614,17.909,50,40,50V160C147.909,160,130,182.386,130,210z"/><polygon id="XMLID_225_" style="fill:#50412E;" points="278.571,80 300,80 300,40 260,40 260,0 80,0 80,40 40,40 40,80 61.429,80 170,80 	"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                </svg> 
                                            </div>
                                            <div class="font-medium text-sm text-[color:rgba(var(--ni-gray-400))]">Venti</div>
                                        </div>

                                        <!-- trenta -->
                                        <div class="space-y-1 text-center">
                                            <div class="p-3 hover:bg-[color:rgba(var(--ni-warning-100))] rounded-full">
                                                <svg class="w-7 h-7" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 501.551 501.551" style="enable-background:new 0 0 501.551 501.551;" xml:space="preserve">
                                                    <path style="fill:#F1543F;" d="M444.082,34.482H57.469c-16.718,0-29.257,13.584-29.257,29.257s13.584,30.302,29.257,30.302h386.612 c16.718,0,29.257-13.584,29.257-29.257S459.755,34.482,444.082,34.482z"/><polygon style="fill:#FF7058;" points="360.49,0 141.061,0 109.714,34.482 391.837,34.482 "/><path style="fill:#E2E2E2;" d="M444.082,94.041H57.469c-1.045,0-1.045,0-2.09,0l3.135,15.673l22.988,131.657l21.943,120.163 l21.943,123.298c2.09,10.449,10.449,16.718,20.898,16.718H356.31c10.449,0,18.808-7.314,20.898-16.718l21.943-123.298 l20.898-120.163l22.988-131.657l3.135-15.673C445.126,94.041,444.082,94.041,444.082,94.041z"/><path style="fill:#CDD6E0;" d="M446.171,94.041l-3.135,15.673H58.514L55.38,94.041c1.045,0,1.045,0,2.09,0h386.612 C444.082,94.041,445.126,94.041,446.171,94.041z"/><path style="fill:#FFD15C;" d="M419.004,240.327h-85.682c-16.718-36.571-47.02-61.649-82.547-61.649s-66.873,25.078-82.547,61.649 H82.547L104.49,360.49h64.784c16.718,36.571,47.02,61.649,82.547,61.649s66.873-25.078,82.547-61.649h64.784L419.004,240.327z"/><g><path style="fill:#40596B;" d="M252.865,373.029c14.629-20.898,12.539-49.11-6.269-67.918 c-11.494-11.494-18.808-27.167-18.808-43.886c0-9.404,2.09-18.808,6.269-27.167c-19.853,9.404-33.437,36.571-33.437,67.918 c0,39.706,21.943,71.053,49.11,71.053C251.82,373.029,252.865,373.029,252.865,373.029z"/><path style="fill:#40596B;" d="M250.775,229.878c-1.045,0-2.09,0-2.09,0c-6.269,8.359-9.404,19.853-9.404,30.302 c0,14.629,5.225,27.167,15.673,37.616c18.808,18.808,22.988,48.065,12.539,71.053c19.853-9.404,33.437-36.571,33.437-67.918 C299.886,262.269,277.943,229.878,250.775,229.878z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                </svg>
                                            </div>
                                            <div class="font-medium text-sm text-[color:rgba(var(--ni-gray-400))]">Trenta</div>
                                        </div>
                                    </div>
                                </div> 

                                <!-- item 4 -->
                                <div class="flex flex-col space-y-4 p-4 bg-white shadow-lg rounded-3xl hover:scale-105 duration-150 relative"> <!-- add class "relative" : shopping cart always show & stay on top -->

                                    <!-- item 4: image -->
                                    <div class="shadow-xl rounded-3xl">
                                        <img class="w-full rounded-3xl object-contain" src="https://coffeeaffection.com/wp-content/uploads/2021/12/a-cup-of-cappuccino-on-wooden-table.jpg" alt="Capuchino">
                                        <svg class="pointer-events-none absolute rounded-full top-2 right-2 w-10 h-10" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 297 297" style="enable-background:new 0 0 297 297;" xml:space="preserve"><g><g><circle style="fill:#FFCD02;" cx="148.5" cy="148.5" r="148.5"/></g><g>
                                            <path style="fill:#D3AC0B;" d="M248.97,101.018l-140.82,87.107l96.9,97.717c53.133-21.902,90.769-73.73,91.913-134.494 L248.97,101.018z"/></g><g><path style="fill:#D75E29;" d="M76.592,101.018l27.089,91.401h116.898c15.68,0,28.391-12.711,28.391-28.391v-63.01 C248.97,101.018,76.592,101.018,76.592,101.018z"/></g><g><g><path style="fill:#C63C22;" d="M230.837,218.429H114.342c-1.91,0-3.611-1.205-4.245-3.007L58.951,69.983H49.5 c-2.485,0-4.5-2.015-4.5-4.5s2.015-4.5,4.5-4.5h12.639c1.91,0,3.611,1.205,4.245,3.007l51.146,145.438h113.308 c2.485,0,4.5,2.015,4.5,4.5S233.322,218.429,230.837,218.429z"/></g></g><g><path style="fill:#32373B;" d="M194.373,237.472c-3.9-12.515,8.39-23.766,20.999-17.881c2.707,1.264,4.91,3.466,6.174,6.174 c5.885,12.61-5.365,24.9-17.881,20.999C199.205,245.375,195.762,241.932,194.373,237.472z"/></g><g><circle style="fill:#32373B;" cx="129.379" cy="232.742" r="14.758"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                        </svg>
                                    </div>

                                    <!-- item 4: name & price -->
                                    <div class="flex">
                                        <div class="text-xl font-bold w-full">Capuchino</div>
                                        <div class="text-xl font-bold">$2.7</div>
                                    </div>

                                    <!-- item 4: add milk -->
                                    <div class="flex text-[color:rgba(var(--ni-gray-400))]">
                                        <div class="text-sm w-full my-auto">Add plant milk</div>
                                        <button class="text-xl">
                                            <svg class="w-6 h-6 fill-[color:rgba(var(--ni-gray-400))] hover:fill-[color:rgba(var(--ni-primary-400))]" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490.2 490.2" style="enable-background:new 0 0 490.2 490.2;" xml:space="preserve"><g><g>
                                                <path d="M418.5,418.5c95.6-95.6,95.6-251.2,0-346.8s-251.2-95.6-346.8,0s-95.6,251.2,0,346.8S322.9,514.1,418.5,418.5z M89,89 c86.1-86.1,226.1-86.1,312.2,0s86.1,226.1,0,312.2s-226.1,86.1-312.2,0S3,175.1,89,89z"/><path d="M245.1,336.9c3.4,0,6.4-1.4,8.7-3.6c2.2-2.2,3.6-5.3,3.6-8.7v-67.3h67.3c3.4,0,6.4-1.4,8.7-3.6c2.2-2.2,3.6-5.3,3.6-8.7 c0-6.8-5.5-12.3-12.2-12.2h-67.3v-67.3c0-6.8-5.5-12.3-12.2-12.2c-6.8,0-12.3,5.5-12.2,12.2v67.3h-67.3c-6.8,0-12.3,5.5-12.2,12.2 c0,6.8,5.5,12.3,12.2,12.2h67.3v67.3C232.8,331.4,238.3,336.9,245.1,336.9z"/></g></g><g></g><g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                            </svg>
                                        </button>
                                    </div>

                                    <!-- choose size of coffee -->
                                    <div class="grid grid-cols-4 pb-5 justify-items-center items-center">

                                        <!-- tall -->
                                        <div class="space-y-1 text-center">
                                            <div class="p-3 hover:bg-[color:rgba(var(--ni-warning-100))] rounded-full">
                                                <svg class="w-7 h-7" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g>
                                                    <path style="fill:#5C546A;" d="M405.859,66.555C404.351,64.93,402.226,64,400,64H96c-2.227,0-4.352,0.93-5.859,2.555 c-1.516,1.633-2.281,3.82-2.117,6.039l30.883,417.211C119.852,502.25,130.359,512,142.836,512h210.328 c12.477,0,22.984-9.75,23.93-22.203l30.883-417.203C408.14,70.375,407.375,68.187,405.859,66.555z"/></g><g><path style="fill:#8B8996;" d="M400,64H248v448h105.164c12.477,0,22.984-9.75,23.93-22.203l30.883-417.203 c0.164-2.219-0.602-4.406-2.117-6.039C404.351,64.93,402.226,64,400,64z"/></g><g><polygon style="fill:#C27B58;" points="114.035,424 381.964,424 402.098,152 93.901,152 		"/></g><g><polygon style="fill:#9F6459;" points="248,152 93.901,152 114.035,424 248,424 		"/></g><g><path style="fill:#D8DCE1;" d="M88,56l25.009-44.348C117.346,4.423,125.158,0,133.589,0h228.823c8.43,0,16.242,4.423,20.58,11.652 L408,56"/></g><g><circle style="fill:#FFD200;" cx="248" cy="288" r="72"/></g><g><path style="fill:#FF9600;" d="M176,288c0,39.764,32.235,72,72,72V216C208.235,216,176,248.235,176,288z"/></g><g><path style="fill:#B9BBC1;" d="M248,0H133.588c-8.43,0-16.242,4.423-20.58,11.652L88,56h160V0z"/></g><g><path style="fill:#8B8996;" d="M424,80H88c-8.837,0-16-7.163-16-16v0c0-8.837,7.163-16,16-16h336c8.837,0,16,7.163,16,16v0 C440,72.837,432.836,80,424,80z"/></g><g><path style="fill:#B9BBC1;" d="M424,48H248v32h176c8.836,0,16-7.164,16-16C440,55.163,432.836,48,424,48z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                </svg>
                                            </div>
                                            <div class="font-medium text-sm text-[color:rgba(var(--ni-gray-400))]">Tall</div>
                                        </div>

                                        <!-- grande -->
                                        <div class="space-y-1 text-center">
                                            <div class="p-3 hover:bg-[color:rgba(var(--ni-warning-100))] rounded-full">
                                                <svg class="w-7 h-7" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 130.739 130.739" style="enable-background:new 0 0 130.739 130.739;" xml:space="preserve"><g><g>
                                                    <polygon style="fill:#FFAC38;" points="108.055,39.5 22.694,39.5 27.265,19.25 28.294,14.68 31.614,0 99.135,0 102.444,14.68 103.475,19.25 		"/><polygon style="fill:#084057;" points="107.935,39.5 107.124,44.069 91.805,130.739 38.935,130.739 23.624,44.069 22.814,39.5 		"/><rect x="11.185" y="19.25" style="fill:#FFAC38;" width="108.37" height="20.25"/><circle style="fill:#FFAC38;" cx="65.373" cy="79.242" r="17.282"/></g><polygon style="opacity:0.5;fill:#084057;" points="107.935,39.5 107.124,44.069 23.624,44.069 22.814,39.5 	"/><polygon style="fill:#FFCE87;" points="103.475,19.25 27.265,19.25 28.294,14.68 102.444,14.68 	"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                </svg>
                                            </div>
                                            <div class="font-medium text-sm text-[color:rgba(var(--ni-gray-400))]">Grande</div>
                                        </div>

                                        <!-- venti -->
                                        <div class="space-y-1 text-center">
                                            <div class="p-3 hover:bg-[color:rgba(var(--ni-warning-100))] rounded-full">
                                                <svg class="w-7 h-7" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 340 340" style="enable-background:new 0 0 340 340;" xml:space="preserve"><g id="XMLID_18_"><polygon id="XMLID_138_" style="fill:#DEDDE0;" points="76.429,290 80,340 170,340 170,290 	"/><polygon id="XMLID_169_" style="fill:#DEDDE0;" points="170,80 61.429,80 65,130 170,130 	"/><polygon id="XMLID_197_" style="fill:#ACABB1;" points="170,290 170,340 260,340 263.571,290 	"/><polygon id="XMLID_221_" style="fill:#ACABB1;" points="170,80 170,130 275,130 278.571,80 	"/><path id="XMLID_222_" style="fill:#FFDA44;" d="M170,260c-22.091,0-40-22.386-40-50s17.909-50,40-50v-30H65H50l10,160h16.429H170 V260z"/>
                                                    <path id="XMLID_33_" style="fill:#FF9811;" d="M170,130v30c22.091,0,40,22.386,40,50s-17.909,50-40,50v30h93.571H280l10-160h-15 H170z"/><path id="XMLID_223_" style="fill:#50412E;" d="M210,210c0-27.614-17.909-50-40-50v100C192.091,260,210,237.614,210,210z"/><path id="XMLID_224_" style="fill:#786145;" d="M130,210c0,27.614,17.909,50,40,50V160C147.909,160,130,182.386,130,210z"/><polygon id="XMLID_225_" style="fill:#50412E;" points="278.571,80 300,80 300,40 260,40 260,0 80,0 80,40 40,40 40,80 61.429,80 170,80 	"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                </svg> 
                                            </div>
                                            <div class="font-medium text-sm text-[color:rgba(var(--ni-gray-400))]">Venti</div>
                                        </div>

                                        <!-- trenta -->
                                        <div class="space-y-1 text-center">
                                            <div class="p-3 hover:bg-[color:rgba(var(--ni-warning-100))] rounded-full">
                                                <svg class="w-7 h-7" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 501.551 501.551" style="enable-background:new 0 0 501.551 501.551;" xml:space="preserve">
                                                    <path style="fill:#F1543F;" d="M444.082,34.482H57.469c-16.718,0-29.257,13.584-29.257,29.257s13.584,30.302,29.257,30.302h386.612 c16.718,0,29.257-13.584,29.257-29.257S459.755,34.482,444.082,34.482z"/><polygon style="fill:#FF7058;" points="360.49,0 141.061,0 109.714,34.482 391.837,34.482 "/><path style="fill:#E2E2E2;" d="M444.082,94.041H57.469c-1.045,0-1.045,0-2.09,0l3.135,15.673l22.988,131.657l21.943,120.163 l21.943,123.298c2.09,10.449,10.449,16.718,20.898,16.718H356.31c10.449,0,18.808-7.314,20.898-16.718l21.943-123.298 l20.898-120.163l22.988-131.657l3.135-15.673C445.126,94.041,444.082,94.041,444.082,94.041z"/><path style="fill:#CDD6E0;" d="M446.171,94.041l-3.135,15.673H58.514L55.38,94.041c1.045,0,1.045,0,2.09,0h386.612 C444.082,94.041,445.126,94.041,446.171,94.041z"/><path style="fill:#FFD15C;" d="M419.004,240.327h-85.682c-16.718-36.571-47.02-61.649-82.547-61.649s-66.873,25.078-82.547,61.649 H82.547L104.49,360.49h64.784c16.718,36.571,47.02,61.649,82.547,61.649s66.873-25.078,82.547-61.649h64.784L419.004,240.327z"/><g><path style="fill:#40596B;" d="M252.865,373.029c14.629-20.898,12.539-49.11-6.269-67.918 c-11.494-11.494-18.808-27.167-18.808-43.886c0-9.404,2.09-18.808,6.269-27.167c-19.853,9.404-33.437,36.571-33.437,67.918 c0,39.706,21.943,71.053,49.11,71.053C251.82,373.029,252.865,373.029,252.865,373.029z"/><path style="fill:#40596B;" d="M250.775,229.878c-1.045,0-2.09,0-2.09,0c-6.269,8.359-9.404,19.853-9.404,30.302 c0,14.629,5.225,27.167,15.673,37.616c18.808,18.808,22.988,48.065,12.539,71.053c19.853-9.404,33.437-36.571,33.437-67.918 C299.886,262.269,277.943,229.878,250.775,229.878z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                </svg>
                                            </div>
                                            <div class="font-medium text-sm text-[color:rgba(var(--ni-gray-400))]">Trenta</div>
                                        </div>
                                    </div>
                                </div>   
                                
                                <!-- item 5 -->
                                <div class="flex flex-col space-y-4 p-4 bg-white shadow-lg rounded-3xl hover:scale-105 duration-150 relative"> <!-- add class "relative" : shopping cart always show & stay on top -->

                                    <!-- item 5: image -->
                                    <div class="shadow-xl rounded-3xl">
                                        <img class="w-full rounded-3xl object-contain" src="https://www.homegrounds.co/wp-content/uploads/2022/04/Toasted-White-Chocolate-Mocha-9.jpeg" alt="White Mocha">
                                        <svg class="pointer-events-none absolute rounded-full top-2 right-2 w-10 h-10" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 297 297" style="enable-background:new 0 0 297 297;" xml:space="preserve"><g><g><circle style="fill:#FFCD02;" cx="148.5" cy="148.5" r="148.5"/></g><g>
                                            <path style="fill:#D3AC0B;" d="M248.97,101.018l-140.82,87.107l96.9,97.717c53.133-21.902,90.769-73.73,91.913-134.494 L248.97,101.018z"/></g><g><path style="fill:#D75E29;" d="M76.592,101.018l27.089,91.401h116.898c15.68,0,28.391-12.711,28.391-28.391v-63.01 C248.97,101.018,76.592,101.018,76.592,101.018z"/></g><g><g><path style="fill:#C63C22;" d="M230.837,218.429H114.342c-1.91,0-3.611-1.205-4.245-3.007L58.951,69.983H49.5 c-2.485,0-4.5-2.015-4.5-4.5s2.015-4.5,4.5-4.5h12.639c1.91,0,3.611,1.205,4.245,3.007l51.146,145.438h113.308 c2.485,0,4.5,2.015,4.5,4.5S233.322,218.429,230.837,218.429z"/></g></g><g><path style="fill:#32373B;" d="M194.373,237.472c-3.9-12.515,8.39-23.766,20.999-17.881c2.707,1.264,4.91,3.466,6.174,6.174 c5.885,12.61-5.365,24.9-17.881,20.999C199.205,245.375,195.762,241.932,194.373,237.472z"/></g><g><circle style="fill:#32373B;" cx="129.379" cy="232.742" r="14.758"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                        </svg>
                                    </div>

                                    <!-- item 5: name & price -->
                                    <div class="flex">
                                        <div class="text-xl font-bold w-full">White Mocha</div>
                                        <div class="text-xl font-bold">$4.3</div>
                                    </div>

                                    <!-- item 5: add milk -->
                                    <div class="flex text-[color:rgba(var(--ni-gray-400))]">
                                        <div class="text-sm w-full my-auto">Add plant milk</div>
                                        <button class="text-xl">
                                            <svg class="w-6 h-6 fill-[color:rgba(var(--ni-gray-400))] hover:fill-[color:rgba(var(--ni-primary-400))]" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490.2 490.2" style="enable-background:new 0 0 490.2 490.2;" xml:space="preserve"><g><g>
                                                <path d="M418.5,418.5c95.6-95.6,95.6-251.2,0-346.8s-251.2-95.6-346.8,0s-95.6,251.2,0,346.8S322.9,514.1,418.5,418.5z M89,89 c86.1-86.1,226.1-86.1,312.2,0s86.1,226.1,0,312.2s-226.1,86.1-312.2,0S3,175.1,89,89z"/><path d="M245.1,336.9c3.4,0,6.4-1.4,8.7-3.6c2.2-2.2,3.6-5.3,3.6-8.7v-67.3h67.3c3.4,0,6.4-1.4,8.7-3.6c2.2-2.2,3.6-5.3,3.6-8.7 c0-6.8-5.5-12.3-12.2-12.2h-67.3v-67.3c0-6.8-5.5-12.3-12.2-12.2c-6.8,0-12.3,5.5-12.2,12.2v67.3h-67.3c-6.8,0-12.3,5.5-12.2,12.2 c0,6.8,5.5,12.3,12.2,12.2h67.3v67.3C232.8,331.4,238.3,336.9,245.1,336.9z"/></g></g><g></g><g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                            </svg>
                                        </button>
                                    </div>

                                    <!-- choose size of coffee -->
                                    <div class="grid grid-cols-4 pb-5 justify-items-center items-center">

                                        <!-- tall -->
                                        <div class="space-y-1 text-center">
                                            <div class="p-3 hover:bg-[color:rgba(var(--ni-warning-100))] rounded-full">
                                                <svg class="w-7 h-7" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g>
                                                    <path style="fill:#5C546A;" d="M405.859,66.555C404.351,64.93,402.226,64,400,64H96c-2.227,0-4.352,0.93-5.859,2.555 c-1.516,1.633-2.281,3.82-2.117,6.039l30.883,417.211C119.852,502.25,130.359,512,142.836,512h210.328 c12.477,0,22.984-9.75,23.93-22.203l30.883-417.203C408.14,70.375,407.375,68.187,405.859,66.555z"/></g><g><path style="fill:#8B8996;" d="M400,64H248v448h105.164c12.477,0,22.984-9.75,23.93-22.203l30.883-417.203 c0.164-2.219-0.602-4.406-2.117-6.039C404.351,64.93,402.226,64,400,64z"/></g><g><polygon style="fill:#C27B58;" points="114.035,424 381.964,424 402.098,152 93.901,152 		"/></g><g><polygon style="fill:#9F6459;" points="248,152 93.901,152 114.035,424 248,424 		"/></g><g><path style="fill:#D8DCE1;" d="M88,56l25.009-44.348C117.346,4.423,125.158,0,133.589,0h228.823c8.43,0,16.242,4.423,20.58,11.652 L408,56"/></g><g><circle style="fill:#FFD200;" cx="248" cy="288" r="72"/></g><g><path style="fill:#FF9600;" d="M176,288c0,39.764,32.235,72,72,72V216C208.235,216,176,248.235,176,288z"/></g><g><path style="fill:#B9BBC1;" d="M248,0H133.588c-8.43,0-16.242,4.423-20.58,11.652L88,56h160V0z"/></g><g><path style="fill:#8B8996;" d="M424,80H88c-8.837,0-16-7.163-16-16v0c0-8.837,7.163-16,16-16h336c8.837,0,16,7.163,16,16v0 C440,72.837,432.836,80,424,80z"/></g><g><path style="fill:#B9BBC1;" d="M424,48H248v32h176c8.836,0,16-7.164,16-16C440,55.163,432.836,48,424,48z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                </svg>
                                            </div>
                                            <div class="font-medium text-sm text-[color:rgba(var(--ni-gray-400))]">Tall</div>
                                        </div>

                                        <!-- grande -->
                                        <div class="space-y-1 text-center">
                                            <div class="p-3 hover:bg-[color:rgba(var(--ni-warning-100))] rounded-full">
                                                <svg class="w-7 h-7" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 130.739 130.739" style="enable-background:new 0 0 130.739 130.739;" xml:space="preserve"><g><g>
                                                    <polygon style="fill:#FFAC38;" points="108.055,39.5 22.694,39.5 27.265,19.25 28.294,14.68 31.614,0 99.135,0 102.444,14.68 103.475,19.25 		"/><polygon style="fill:#084057;" points="107.935,39.5 107.124,44.069 91.805,130.739 38.935,130.739 23.624,44.069 22.814,39.5 		"/><rect x="11.185" y="19.25" style="fill:#FFAC38;" width="108.37" height="20.25"/><circle style="fill:#FFAC38;" cx="65.373" cy="79.242" r="17.282"/></g><polygon style="opacity:0.5;fill:#084057;" points="107.935,39.5 107.124,44.069 23.624,44.069 22.814,39.5 	"/><polygon style="fill:#FFCE87;" points="103.475,19.25 27.265,19.25 28.294,14.68 102.444,14.68 	"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                </svg>
                                            </div>
                                            <div class="font-medium text-sm text-[color:rgba(var(--ni-gray-400))]">Grande</div>
                                        </div>

                                        <!-- venti -->
                                        <div class="space-y-1 text-center">
                                            <div class="p-3 hover:bg-[color:rgba(var(--ni-warning-100))] rounded-full">
                                                <svg class="w-7 h-7" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 340 340" style="enable-background:new 0 0 340 340;" xml:space="preserve"><g id="XMLID_18_"><polygon id="XMLID_138_" style="fill:#DEDDE0;" points="76.429,290 80,340 170,340 170,290 	"/><polygon id="XMLID_169_" style="fill:#DEDDE0;" points="170,80 61.429,80 65,130 170,130 	"/><polygon id="XMLID_197_" style="fill:#ACABB1;" points="170,290 170,340 260,340 263.571,290 	"/><polygon id="XMLID_221_" style="fill:#ACABB1;" points="170,80 170,130 275,130 278.571,80 	"/><path id="XMLID_222_" style="fill:#FFDA44;" d="M170,260c-22.091,0-40-22.386-40-50s17.909-50,40-50v-30H65H50l10,160h16.429H170 V260z"/>
                                                    <path id="XMLID_33_" style="fill:#FF9811;" d="M170,130v30c22.091,0,40,22.386,40,50s-17.909,50-40,50v30h93.571H280l10-160h-15 H170z"/><path id="XMLID_223_" style="fill:#50412E;" d="M210,210c0-27.614-17.909-50-40-50v100C192.091,260,210,237.614,210,210z"/><path id="XMLID_224_" style="fill:#786145;" d="M130,210c0,27.614,17.909,50,40,50V160C147.909,160,130,182.386,130,210z"/><polygon id="XMLID_225_" style="fill:#50412E;" points="278.571,80 300,80 300,40 260,40 260,0 80,0 80,40 40,40 40,80 61.429,80 170,80 	"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                </svg> 
                                            </div>
                                            <div class="font-medium text-sm text-[color:rgba(var(--ni-gray-400))]">Venti</div>
                                        </div>

                                        <!-- trenta -->
                                        <div class="space-y-1 text-center">
                                            <div class="p-3 hover:bg-[color:rgba(var(--ni-warning-100))] rounded-full">
                                                <svg class="w-7 h-7" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 501.551 501.551" style="enable-background:new 0 0 501.551 501.551;" xml:space="preserve">
                                                    <path style="fill:#F1543F;" d="M444.082,34.482H57.469c-16.718,0-29.257,13.584-29.257,29.257s13.584,30.302,29.257,30.302h386.612 c16.718,0,29.257-13.584,29.257-29.257S459.755,34.482,444.082,34.482z"/><polygon style="fill:#FF7058;" points="360.49,0 141.061,0 109.714,34.482 391.837,34.482 "/><path style="fill:#E2E2E2;" d="M444.082,94.041H57.469c-1.045,0-1.045,0-2.09,0l3.135,15.673l22.988,131.657l21.943,120.163 l21.943,123.298c2.09,10.449,10.449,16.718,20.898,16.718H356.31c10.449,0,18.808-7.314,20.898-16.718l21.943-123.298 l20.898-120.163l22.988-131.657l3.135-15.673C445.126,94.041,444.082,94.041,444.082,94.041z"/><path style="fill:#CDD6E0;" d="M446.171,94.041l-3.135,15.673H58.514L55.38,94.041c1.045,0,1.045,0,2.09,0h386.612 C444.082,94.041,445.126,94.041,446.171,94.041z"/><path style="fill:#FFD15C;" d="M419.004,240.327h-85.682c-16.718-36.571-47.02-61.649-82.547-61.649s-66.873,25.078-82.547,61.649 H82.547L104.49,360.49h64.784c16.718,36.571,47.02,61.649,82.547,61.649s66.873-25.078,82.547-61.649h64.784L419.004,240.327z"/><g><path style="fill:#40596B;" d="M252.865,373.029c14.629-20.898,12.539-49.11-6.269-67.918 c-11.494-11.494-18.808-27.167-18.808-43.886c0-9.404,2.09-18.808,6.269-27.167c-19.853,9.404-33.437,36.571-33.437,67.918 c0,39.706,21.943,71.053,49.11,71.053C251.82,373.029,252.865,373.029,252.865,373.029z"/><path style="fill:#40596B;" d="M250.775,229.878c-1.045,0-2.09,0-2.09,0c-6.269,8.359-9.404,19.853-9.404,30.302 c0,14.629,5.225,27.167,15.673,37.616c18.808,18.808,22.988,48.065,12.539,71.053c19.853-9.404,33.437-36.571,33.437-67.918 C299.886,262.269,277.943,229.878,250.775,229.878z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                </svg>
                                            </div>
                                            <div class="font-medium text-sm text-[color:rgba(var(--ni-gray-400))]">Trenta</div>
                                        </div>
                                    </div>
                                </div> 

                                <!-- item 6 -->
                                <div class="flex flex-col space-y-4 p-4 bg-white shadow-lg rounded-3xl hover:scale-105 duration-150 relative"> <!-- add class "relative" : shopping cart always show & stay on top -->

                                    <!-- item 6: image -->
                                    <div class="shadow-xl rounded-3xl">
                                        <img class="w-full rounded-3xl object-contain" src="https://thumbs.dreamstime.com/b/homemade-hazelnut-coffee-latte-cappuccino-rustic-wooden-background-hazelnuts-three-cups-copy-space-136832145.jpg" alt="Hazelnut Latte">
                                        <svg class="pointer-events-none absolute rounded-full top-2 right-2 w-10 h-10" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 297 297" style="enable-background:new 0 0 297 297;" xml:space="preserve"><g><g><circle style="fill:#FFCD02;" cx="148.5" cy="148.5" r="148.5"/></g><g>
                                            <path style="fill:#D3AC0B;" d="M248.97,101.018l-140.82,87.107l96.9,97.717c53.133-21.902,90.769-73.73,91.913-134.494 L248.97,101.018z"/></g><g><path style="fill:#D75E29;" d="M76.592,101.018l27.089,91.401h116.898c15.68,0,28.391-12.711,28.391-28.391v-63.01 C248.97,101.018,76.592,101.018,76.592,101.018z"/></g><g><g><path style="fill:#C63C22;" d="M230.837,218.429H114.342c-1.91,0-3.611-1.205-4.245-3.007L58.951,69.983H49.5 c-2.485,0-4.5-2.015-4.5-4.5s2.015-4.5,4.5-4.5h12.639c1.91,0,3.611,1.205,4.245,3.007l51.146,145.438h113.308 c2.485,0,4.5,2.015,4.5,4.5S233.322,218.429,230.837,218.429z"/></g></g><g><path style="fill:#32373B;" d="M194.373,237.472c-3.9-12.515,8.39-23.766,20.999-17.881c2.707,1.264,4.91,3.466,6.174,6.174 c5.885,12.61-5.365,24.9-17.881,20.999C199.205,245.375,195.762,241.932,194.373,237.472z"/></g><g><circle style="fill:#32373B;" cx="129.379" cy="232.742" r="14.758"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                        </svg>
                                    </div>

                                    <!-- item 6: name & price -->
                                    <div class="flex">
                                        <div class="text-xl font-bold w-full">Hazelnut Latte</div>
                                        <div class="text-xl font-bold">$5.3</div>
                                    </div>

                                    <!-- item 6: add milk -->
                                    <div class="flex text-[color:rgba(var(--ni-gray-400))]">
                                        <div class="text-sm w-full my-auto">Add plant milk</div>
                                        <button class="text-xl">
                                            <svg class="w-6 h-6 fill-[color:rgba(var(--ni-gray-400))] hover:fill-[color:rgba(var(--ni-primary-400))]" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490.2 490.2" style="enable-background:new 0 0 490.2 490.2;" xml:space="preserve"><g><g>
                                                <path d="M418.5,418.5c95.6-95.6,95.6-251.2,0-346.8s-251.2-95.6-346.8,0s-95.6,251.2,0,346.8S322.9,514.1,418.5,418.5z M89,89 c86.1-86.1,226.1-86.1,312.2,0s86.1,226.1,0,312.2s-226.1,86.1-312.2,0S3,175.1,89,89z"/><path d="M245.1,336.9c3.4,0,6.4-1.4,8.7-3.6c2.2-2.2,3.6-5.3,3.6-8.7v-67.3h67.3c3.4,0,6.4-1.4,8.7-3.6c2.2-2.2,3.6-5.3,3.6-8.7 c0-6.8-5.5-12.3-12.2-12.2h-67.3v-67.3c0-6.8-5.5-12.3-12.2-12.2c-6.8,0-12.3,5.5-12.2,12.2v67.3h-67.3c-6.8,0-12.3,5.5-12.2,12.2 c0,6.8,5.5,12.3,12.2,12.2h67.3v67.3C232.8,331.4,238.3,336.9,245.1,336.9z"/></g></g><g></g><g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                            </svg>
                                        </button>
                                    </div>

                                    <!-- choose size of coffee -->
                                    <div class="grid grid-cols-4 pb-5 justify-items-center items-center">

                                        <!-- tall -->
                                        <div class="space-y-1 text-center">
                                            <div class="p-3 hover:bg-[color:rgba(var(--ni-warning-100))] rounded-full">
                                                <svg class="w-7 h-7" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g>
                                                    <path style="fill:#5C546A;" d="M405.859,66.555C404.351,64.93,402.226,64,400,64H96c-2.227,0-4.352,0.93-5.859,2.555 c-1.516,1.633-2.281,3.82-2.117,6.039l30.883,417.211C119.852,502.25,130.359,512,142.836,512h210.328 c12.477,0,22.984-9.75,23.93-22.203l30.883-417.203C408.14,70.375,407.375,68.187,405.859,66.555z"/></g><g><path style="fill:#8B8996;" d="M400,64H248v448h105.164c12.477,0,22.984-9.75,23.93-22.203l30.883-417.203 c0.164-2.219-0.602-4.406-2.117-6.039C404.351,64.93,402.226,64,400,64z"/></g><g><polygon style="fill:#C27B58;" points="114.035,424 381.964,424 402.098,152 93.901,152 		"/></g><g><polygon style="fill:#9F6459;" points="248,152 93.901,152 114.035,424 248,424 		"/></g><g><path style="fill:#D8DCE1;" d="M88,56l25.009-44.348C117.346,4.423,125.158,0,133.589,0h228.823c8.43,0,16.242,4.423,20.58,11.652 L408,56"/></g><g><circle style="fill:#FFD200;" cx="248" cy="288" r="72"/></g><g><path style="fill:#FF9600;" d="M176,288c0,39.764,32.235,72,72,72V216C208.235,216,176,248.235,176,288z"/></g><g><path style="fill:#B9BBC1;" d="M248,0H133.588c-8.43,0-16.242,4.423-20.58,11.652L88,56h160V0z"/></g><g><path style="fill:#8B8996;" d="M424,80H88c-8.837,0-16-7.163-16-16v0c0-8.837,7.163-16,16-16h336c8.837,0,16,7.163,16,16v0 C440,72.837,432.836,80,424,80z"/></g><g><path style="fill:#B9BBC1;" d="M424,48H248v32h176c8.836,0,16-7.164,16-16C440,55.163,432.836,48,424,48z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                </svg>
                                            </div>
                                            <div class="font-medium text-sm text-[color:rgba(var(--ni-gray-400))]">Tall</div>
                                        </div>

                                        <!-- grande -->
                                        <div class="space-y-1 text-center">
                                            <div class="p-3 hover:bg-[color:rgba(var(--ni-warning-100))] rounded-full">
                                                <svg class="w-7 h-7" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 130.739 130.739" style="enable-background:new 0 0 130.739 130.739;" xml:space="preserve"><g><g>
                                                    <polygon style="fill:#FFAC38;" points="108.055,39.5 22.694,39.5 27.265,19.25 28.294,14.68 31.614,0 99.135,0 102.444,14.68 103.475,19.25 		"/><polygon style="fill:#084057;" points="107.935,39.5 107.124,44.069 91.805,130.739 38.935,130.739 23.624,44.069 22.814,39.5 		"/><rect x="11.185" y="19.25" style="fill:#FFAC38;" width="108.37" height="20.25"/><circle style="fill:#FFAC38;" cx="65.373" cy="79.242" r="17.282"/></g><polygon style="opacity:0.5;fill:#084057;" points="107.935,39.5 107.124,44.069 23.624,44.069 22.814,39.5 	"/><polygon style="fill:#FFCE87;" points="103.475,19.25 27.265,19.25 28.294,14.68 102.444,14.68 	"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                </svg>
                                            </div>
                                            <div class="font-medium text-sm text-[color:rgba(var(--ni-gray-400))]">Grande</div>
                                        </div>

                                        <!-- venti -->
                                        <div class="space-y-1 text-center">
                                            <div class="p-3 hover:bg-[color:rgba(var(--ni-warning-100))] rounded-full">
                                                <svg class="w-7 h-7" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 340 340" style="enable-background:new 0 0 340 340;" xml:space="preserve"><g id="XMLID_18_"><polygon id="XMLID_138_" style="fill:#DEDDE0;" points="76.429,290 80,340 170,340 170,290 	"/><polygon id="XMLID_169_" style="fill:#DEDDE0;" points="170,80 61.429,80 65,130 170,130 	"/><polygon id="XMLID_197_" style="fill:#ACABB1;" points="170,290 170,340 260,340 263.571,290 	"/><polygon id="XMLID_221_" style="fill:#ACABB1;" points="170,80 170,130 275,130 278.571,80 	"/><path id="XMLID_222_" style="fill:#FFDA44;" d="M170,260c-22.091,0-40-22.386-40-50s17.909-50,40-50v-30H65H50l10,160h16.429H170 V260z"/>
                                                    <path id="XMLID_33_" style="fill:#FF9811;" d="M170,130v30c22.091,0,40,22.386,40,50s-17.909,50-40,50v30h93.571H280l10-160h-15 H170z"/><path id="XMLID_223_" style="fill:#50412E;" d="M210,210c0-27.614-17.909-50-40-50v100C192.091,260,210,237.614,210,210z"/><path id="XMLID_224_" style="fill:#786145;" d="M130,210c0,27.614,17.909,50,40,50V160C147.909,160,130,182.386,130,210z"/><polygon id="XMLID_225_" style="fill:#50412E;" points="278.571,80 300,80 300,40 260,40 260,0 80,0 80,40 40,40 40,80 61.429,80 170,80 	"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                </svg> 
                                            </div>
                                            <div class="font-medium text-sm text-[color:rgba(var(--ni-gray-400))]">Venti</div>
                                        </div>

                                        <!-- trenta -->
                                        <div class="space-y-1 text-center">
                                            <div class="p-3 hover:bg-[color:rgba(var(--ni-warning-100))] rounded-full">
                                                <svg class="w-7 h-7" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 501.551 501.551" style="enable-background:new 0 0 501.551 501.551;" xml:space="preserve">
                                                    <path style="fill:#F1543F;" d="M444.082,34.482H57.469c-16.718,0-29.257,13.584-29.257,29.257s13.584,30.302,29.257,30.302h386.612 c16.718,0,29.257-13.584,29.257-29.257S459.755,34.482,444.082,34.482z"/><polygon style="fill:#FF7058;" points="360.49,0 141.061,0 109.714,34.482 391.837,34.482 "/><path style="fill:#E2E2E2;" d="M444.082,94.041H57.469c-1.045,0-1.045,0-2.09,0l3.135,15.673l22.988,131.657l21.943,120.163 l21.943,123.298c2.09,10.449,10.449,16.718,20.898,16.718H356.31c10.449,0,18.808-7.314,20.898-16.718l21.943-123.298 l20.898-120.163l22.988-131.657l3.135-15.673C445.126,94.041,444.082,94.041,444.082,94.041z"/><path style="fill:#CDD6E0;" d="M446.171,94.041l-3.135,15.673H58.514L55.38,94.041c1.045,0,1.045,0,2.09,0h386.612 C444.082,94.041,445.126,94.041,446.171,94.041z"/><path style="fill:#FFD15C;" d="M419.004,240.327h-85.682c-16.718-36.571-47.02-61.649-82.547-61.649s-66.873,25.078-82.547,61.649 H82.547L104.49,360.49h64.784c16.718,36.571,47.02,61.649,82.547,61.649s66.873-25.078,82.547-61.649h64.784L419.004,240.327z"/><g><path style="fill:#40596B;" d="M252.865,373.029c14.629-20.898,12.539-49.11-6.269-67.918 c-11.494-11.494-18.808-27.167-18.808-43.886c0-9.404,2.09-18.808,6.269-27.167c-19.853,9.404-33.437,36.571-33.437,67.918 c0,39.706,21.943,71.053,49.11,71.053C251.82,373.029,252.865,373.029,252.865,373.029z"/><path style="fill:#40596B;" d="M250.775,229.878c-1.045,0-2.09,0-2.09,0c-6.269,8.359-9.404,19.853-9.404,30.302 c0,14.629,5.225,27.167,15.673,37.616c18.808,18.808,22.988,48.065,12.539,71.053c19.853-9.404,33.437-36.571,33.437-67.918 C299.886,262.269,277.943,229.878,250.775,229.878z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                </svg>
                                            </div>
                                            <div class="font-medium text-sm text-[color:rgba(var(--ni-gray-400))]">Trenta</div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>

                    <!-- right side -->
                    <div class="flex flex-col space-y-10 w-full xl:w-[30%] mr-5 py-10 px-3 sm:px-5 md:px-10 xl:px-0">

                        <!-- order & total -->
                        <div class="p-5 space-y-7 bg-white shadow-lg rounded-3xl mr-0 xl:mr-5 sticky top-0">

                            <!-- order -->
                            <div class="flex">
                                <div class="font-bold text-xl text-[color:rgba(var(--ni-gray-800))]">Order #2156</div>
                                <div class="text-sm text-[color:rgba(var(--ni-gray-400))] my-auto ml-auto">Clear All</div>
                            </div>
                            <div class="flex flex-col space-y-3">

                                <!-- order 1 -->
                                <div class="flex">
                                    <div class="flex-none rounded-lg">
                                        <img class="w-12 h-12 object-cover rounded-lg" src="https://c0.wallpaperflare.com/preview/374/328/921/cafe-caffe-latte-cappuccino-coffee.jpg" alt="Espresso">
                                    </div>
                                    <div class="w-full ml-2">
                                        <div class="text-sm text-[color:rgba(var(--ni-gray-500))]">Espresso</div>
                                        <div class="font-bold">$2.6</div>
                                    </div>
                                    <div class="flex space-x-4 my-auto">
                                        <svg class="w-8 h-8 text-[color:rgba(var(--ni-warning-300))]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <div class="my-auto">1</div>
                                        <svg class="w-8 h-8 text-[color:rgba(var(--ni-warning-300))]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>   
                                    </div>
                                </div>

                                <!-- order 2 -->
                                <div class="flex">
                                    <div class="flex-none rounded-lg">
                                        <img class="w-12 h-12 object-cover rounded-lg" src="https://images.milkandmore.co.uk/image/upload/w_iw/f_auto/w_392,d_back_up_image.jpg,c_scale/v1/products/2004521_1.jpg" alt="Plant Milk">
                                    </div>
                                    <div class="w-full ml-2">
                                        <div class="text-sm text-[color:rgba(var(--ni-gray-500))]">Plant Milk</div>
                                        <div class="font-bold">$1</div>
                                    </div>
                                    <div class="flex space-x-4 my-auto">
                                        <svg class="w-8 h-8 text-[color:rgba(var(--ni-warning-300))]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <div class="my-auto">2</div>
                                        <svg class="w-8 h-8 text-[color:rgba(var(--ni-warning-300))]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>   
                                    </div>
                                </div>

                                <!-- order 3 -->
                                <div class="flex">
                                    <div class="flex-none rounded-lg">
                                        <img class="w-12 h-12 object-cover rounded-lg" src="https://static01.nyt.com/images/2016/05/24/dining/24COOKING-COLD-BREWED-ICE-COFFEE2/24COOKING-COLD-BREWED-ICE-COFFEE2-articleLarge.jpg" alt="Cold Brew">
                                    </div>
                                    <div class="w-full ml-2">
                                        <div class="text-sm text-[color:rgba(var(--ni-gray-500))]">Cold Brew</div>
                                        <div class="font-bold">$2.9</div>
                                    </div>
                                    <div class="flex space-x-4 my-auto">
                                        <svg class="w-8 h-8 text-[color:rgba(var(--ni-warning-300))]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <div class="my-auto">1</div>
                                        <svg class="w-8 h-8 text-[color:rgba(var(--ni-warning-300))]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>   
                                    </div>
                                </div>

                                <!-- order 4 -->
                                <div class="flex">
                                    <div class="flex-none rounded-lg">
                                        <img class="w-12 h-12 object-cover rounded-lg" src="https://www.homegrounds.co/wp-content/uploads/2022/04/Toasted-White-Chocolate-Mocha-9.jpeg" alt="White Mocha">
                                    </div>
                                    <div class="w-full ml-2">
                                        <div class="text-sm text-[color:rgba(var(--ni-gray-500))]">White Mocha</div>
                                        <div class="font-bold">$4.3</div>
                                    </div>
                                    <div class="flex space-x-4 my-auto">
                                        <svg class="w-8 h-8 text-[color:rgba(var(--ni-warning-300))]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <div class="my-auto">1</div>
                                        <svg class="w-8 h-8 text-[color:rgba(var(--ni-warning-300))]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>   
                                    </div>
                                </div>

                                <!-- order 5 -->
                                <div class="flex">
                                    <div class="flex-none rounded-lg">
                                        <img class="w-12 h-12 object-cover rounded-lg" src="https://thumbs.dreamstime.com/b/homemade-hazelnut-coffee-latte-cappuccino-rustic-wooden-background-hazelnuts-three-cups-copy-space-136832145.jpgg" alt="Hazelnut Latte">
                                    </div>
                                    <div class="w-full ml-2">
                                        <div class="text-sm text-[color:rgba(var(--ni-gray-500))]">Hazelnut Latte</div>
                                        <div class="font-bold">$5.3</div>
                                    </div>
                                    <div class="flex space-x-4 my-auto">
                                        <svg class="w-8 h-8 text-[color:rgba(var(--ni-warning-300))]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <div class="my-auto">1</div>
                                        <svg class="w-8 h-8 text-[color:rgba(var(--ni-warning-300))]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>   
                                    </div>
                                </div>
                            </div>

                            <!-- total -->
                            <div class="">
                                <!-- subtotal -->
                                <div class="p-5 space-y-1 bg-[color:rgba(var(--ni-gray-50))] border border-[color:rgba(var(--ni-gray-100))] rounded-3xl">
                                    <div class="flex font-semibold text-sm text-[color:rgba(var(--ni-gray-600))]">
                                        <div class="">Subtotal</div>
                                        <div class="ml-auto">$16.1</div>
                                    </div>
                                    <div class="flex font-medium text-sm text-[color:rgba(var(--ni-gray-400))]">
                                        <div class="">Discount sales</div>
                                        <div class="ml-auto">$0</div>
                                    </div>
                                    <div class="flex font-medium text-sm text-[color:rgba(var(--ni-gray-400))]">
                                        <div class="">Tax</div>
                                        <div class="ml-auto">$4.99</div>
                                    </div>
                                </div>

                                <!-- dashed line -->
                                <div class="border-b-2 border-dashed border-[color:rgba(var(--ni-gray-300))] mx-5"></div>

                                <!-- total price -->
                                <div class="p-5 bg-[color:rgba(var(--ni-gray-50))] border border-[color:rgba(var(--ni-gray-100))] rounded-3xl">
                                    <div class="flex font-bold text-md text-[color:rgba(var(--ni-gray-800))]">
                                        <div class="">Total</div>
                                        <div class="ml-auto">$21.09</div>
                                    </div>
                                </div>
                            </div>

                            <!-- print bills button -->
                            <div class="">
                                <button class="w-full text-white py-3 bg-[color:rgba(var(--ni-gray-800))] hover:bg-[color:rgba(var(--ni-gray-700))] rounded-xl duration-300">Print bills</button>
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