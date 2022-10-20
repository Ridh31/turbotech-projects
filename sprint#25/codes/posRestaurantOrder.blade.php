@extends('master')
@section('internalCss')
<link rel="stylesheet" type="text/css" href="{{ asset('css/evoCalendar.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>

@endsection
@section('content')

{{-- <div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div> --}}

<!-- Design POS Restaurant Order -->

<!-- main -->
<div class="mainCard">
    <div class="cardContainer bg-[color:rgba(var(--ni-gray-100))]">
        <div class="flex flex-col lg:flex-row select-none">

            <!-- left side -->
            <div id="left-side" class="w-full lg:w-[65%] p-5 space-y-8">

                <div class="bg-white p-5 space-y-10 rounded-xl">

                    <!-- header -->
                    <header class="flex 2xl:flex-row mx-0 sm:mx-0">

                        <!-- welcome -->
                        <div class="flex flex-col sm:flex-row text-start sm:text-center 2xl:text-start">
                            <div class="text-xl font-semibold">Choose Category</div>
                            <div class="font-medium ml-0 sm:ml-2 text-[color:rgba(var(--ni-danger-400))] mt-1">42+ Category</div>
                        </div>

                        <!-- view all -->
                        <div class="ml-auto mt-2">
                            <div class="cursor-pointer font-medium text-sm hover:underline hover:text-[color:rgba(var(--ni-danger-400))]">View All</div>
                        </div>
                    </header>

                    <!--nav-->
                    <nav class="cardContainer grid grid-cols-2 md:grid-cols-3 2xl:grid-cols-6">
                        
                        <!-- all items -->
                        <div class="rounded-3xl hover:outline hover:outline-2 hover:outline-[color:rgba(var(--ni-danger-400))]">
                            <div class="cursor-pointer flex justify-center items-center m-1 py-1 bg-[color:rgba(var(--ni-gray-100))] shadow-md rounded-3xl">
                                <div class="border-8 border-white rounded-full">
                                    <svg class="w-6 h-6" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.988 511.988" style="enable-background:new 0 0 511.988 511.988;" xml:space="preserve">
                                        <path style="fill:#FFCE54;" d="M426.662,255.997c0,94.254-76.42,170.659-170.668,170.659s-170.66-76.404-170.66-170.659 c0-94.256,76.412-170.66,170.66-170.66S426.662,161.742,426.662,255.997z"/><g style="opacity:0.2;"><path style="fill:#FFFFFF;" d="M255.994,85.337c-3.578,0-7.133,0.117-10.664,0.336c89.287,5.508,160.004,79.654,160.004,170.324 c0,90.662-70.717,164.816-160.004,170.315c3.531,0.219,7.086,0.344,10.664,0.344c94.248,0,170.668-76.404,170.668-170.659 S350.242,85.337,255.994,85.337z"/></g><g><path style="fill:#CCD1D9;" d="M32.007,96.001v319.984l0,0c0,5.891,4.773,10.671,10.664,10.671s10.664-4.78,10.664-10.671l0,0 V96.001H32.007z"/><path style="fill:#CCD1D9;" d="M447.989,152.445v263.54c0,5.891,4.781,10.671,10.672,10.671c5.89,0,10.671-4.78,10.671-10.671l0,0 v-263.54L447.989,152.445L447.989,152.445z"/></g><path style="fill:#E6E9ED;" d="M85.334,96.001c0-2.727-1.039-5.461-3.125-7.547c-4.164-4.164-10.914-4.164-15.086,0 c-2.078,2.086-3.125,4.82-3.117,7.555v53.327H53.335V96.001l0,0c0-2.727-1.039-5.461-3.125-7.539 c-4.164-4.172-10.914-4.172-15.086,0c-2.078,2.078-3.125,4.812-3.117,7.547v53.327H21.335V96.001l0,0 c0-2.727-1.039-5.461-3.124-7.539c-4.164-4.172-10.914-4.172-15.086,0c-2.078,2.078-3.117,4.812-3.117,7.539H0v53.334h0.008v47.999 c0,0,21.327,16,42.663,16c21.335,0,42.663-16,42.663-16v-47.999l0,0V96.001L85.334,96.001z"/><path style="fill:#F6BB42;" d="M362.664,255.997c0,58.897-47.766,106.661-106.67,106.661c-58.905,0-106.662-47.764-106.662-106.661 c0-58.905,47.757-106.662,106.662-106.662C314.898,149.336,362.664,197.092,362.664,255.997z"/><g style="opacity:0.1;"><path d="M255.994,149.336c-3.594,0-7.156,0.18-10.664,0.523c53.913,5.359,96.006,50.827,96.006,106.138 c0,55.303-42.093,100.77-96.006,106.129c3.508,0.344,7.07,0.531,10.664,0.531c58.904,0,106.67-47.764,106.67-106.661 C362.664,197.092,314.898,149.336,255.994,149.336z"/></g><path style="fill:#E6E9ED;" d="M511.988,298.66h-63.999V85.337c0,0,63.999,26,63.999,106.662 C511.988,272.66,511.988,298.66,511.988,298.66z"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                    </svg>
                                </div>
                                <div class="ml-1 font-medium">All Items</div>
                            </div>
                        </div>

                        <!-- pizza -->
                        <div class="rounded-3xl hover:outline hover:outline-2 hover:outline-[color:rgba(var(--ni-danger-400))]">
                            <div class="cursor-pointer flex justify-center items-center m-1 py-1 bg-[color:rgba(var(--ni-gray-100))] shadow-md rounded-3xl">
                                <div class="border-8 border-white rounded-full">
                                    <svg class="w-6 h-6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g id="Guides_For_Artboard"></g><g id="Artwork"></g><g id="Layer_3"><g><circle style="fill:#E6A52E;" cx="255.094" cy="259.639" r="245"/><g>
                                        <path style="fill:#D46A56;" d="M238.437,268.643c0-29.867-24.211-54.077-54.078-54.077c-20.47,0-38.281,11.376-47.463,28.15 l50.97,79.879C216.096,320.786,238.437,297.33,238.437,268.643z"/><path style="fill:#F6E0C2;" d="M253.24,161.534c-80.738,0-138.278,41.895-138.849,42.318c-0.521,0.391-1.054,0.756-1.595,1.097 l24.099,37.767c9.182-16.774,26.993-28.15,47.463-28.15c29.867,0,54.078,24.21,54.078,54.077 c0,28.687-22.341,52.143-50.571,53.952l45.835,71.83c4.281,6.371,11.401,10.253,19.073,10.405 c0.156,0.003,0.313,0.004,0.469,0.004c7.5,0,14.564-3.577,19.004-9.646l61.193-88.233l49.549-71.442l19.537-28.171 c-2.174-0.715-4.28-1.761-6.246-3.152C395.719,203.797,334.408,161.534,253.24,161.534z M270.188,348.137 c-12.974,0-23.488-10.516-23.488-23.488c0-12.973,10.515-23.489,23.488-23.489c12.971,0,23.486,10.517,23.486,23.489 C293.674,337.621,283.158,348.137,270.188,348.137z M303.773,262.675c-20.456,0-37.04-16.583-37.04-37.039 c0-20.457,16.584-37.04,37.04-37.04c20.455,0,37.037,16.583,37.037,37.04C340.811,246.092,324.229,262.675,303.773,262.675z"/><path style="fill:#F6E0C2;" d="M206.691,118.243c11.76-1.918,24.186-3.216,37.19-3.643 C230.648,115.027,218.228,116.333,206.691,118.243z"/><circle style="fill:#D46A56;" cx="303.773" cy="225.636" r="37.039"/><circle style="fill:#D46A56;" cx="270.188" cy="324.648" r="23.489"/><path style="fill:#735542;" d="M423.483,165.751c-2.917-2.064-71.563-49.88-166.033-51.274c-1.398-0.021-2.801-0.033-4.21-0.033 c-1.475,0-2.94,0.012-4.4,0.035c-0.258,0.004-0.512,0.012-0.769,0.016c-1.24,0.022-2.478,0.05-3.707,0.088 c-0.161,0.005-0.321,0.012-0.482,0.017c-13.005,0.427-25.431,1.725-37.19,3.643c-71.362,11.637-118.152,46.137-120.492,47.89 c-10.403,7.8-12.544,22.58-4.74,32.984c4.629,6.175,11.698,9.437,18.856,9.437c4.298,0,8.628-1.177,12.481-3.604 c0.541-0.341,1.073-0.706,1.595-1.097c0.57-0.423,58.11-42.318,138.849-42.318c81.168,0,142.479,42.264,143.039,42.656 c1.966,1.391,4.072,2.437,6.246,3.152c9.566,3.148,20.453-0.122,26.574-8.769C436.611,187.958,434.097,173.264,423.483,165.751z"/></g></g></g>
                                    </svg>
                                </div>
                                <div class="ml-1 font-medium">Pizza</div>
                            </div>
                        </div>

                        <!-- burger -->
                        <div class="rounded-3xl hover:outline hover:outline-2 hover:outline-[color:rgba(var(--ni-danger-400))]">
                            <div class="cursor-pointer flex justify-center items-center m-1 py-1 bg-[color:rgba(var(--ni-gray-100))] shadow-md rounded-3xl">
                                <div class="border-8 border-white rounded-full">
                                    <svg class="w-6 h-6" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                        <path style="fill:#FFDA79;" d="M375.174,472.812H136.825c-24.227,0-43.867-19.64-43.867-43.867v-64.402h326.084v64.402 C419.042,453.17,399.401,472.812,375.174,472.812z"/><path style="fill:#FFC72D;" d="M255.999,364.541v108.27h119.174c24.227,0,43.867-19.64,43.867-43.867v-64.403L255.999,364.541 L255.999,364.541z"/><path style="fill:#FFDA79;" d="M255.999,39.188c-90.046,0-163.042,72.997-163.042,163.042v13.693h326.084V202.23 C419.042,112.185,346.046,39.188,255.999,39.188z"/><path style="fill:#FFC72D;" d="M419.042,202.23c0-90.045-72.997-163.042-163.042-163.042v176.735h163.042V202.23z"/><path style="fill:#DBBE93;" d="M441.028,364.541H70.972c-7.038,0-12.742-5.705-12.742-12.742v-55.671 c0-7.038,5.705-12.742,12.742-12.742h370.056c7.038,0,12.743,5.705,12.743,12.742v55.671 C453.771,358.836,448.066,364.541,441.028,364.541z"/><path style="fill:#23B898;" d="M492.886,383.655H19.114C8.558,383.655,0,375.097,0,364.541s8.558-19.114,19.114-19.114h473.772 c10.556,0,19.114,8.558,19.114,19.114S503.442,383.655,492.886,383.655z"/><g><circle style="fill:#DBAC67;" cx="255.997" cy="131.655" r="10.941"/><circle style="fill:#DBAC67;" cx="195.89" cy="131.655" r="10.941"/></g><polygon style="fill:#FFEDBE;" points="98.807,269.692 98.807,283.385 255.999,364.541 413.192,283.385 413.192,269.692 "/><path style="fill:#FF5E5B;" d="M413.192,283.385H98.807c-22.41,0-40.577-18.167-40.577-40.577l0,0 c0-22.41,18.167-40.577,40.577-40.577h314.385c22.41,0,40.577,18.167,40.577,40.577l0,0 C453.771,265.219,435.604,283.385,413.192,283.385z"/><path style="fill:#DBAC67;" d="M441.028,283.385H255.999v81.156h185.029c7.038,0,12.742-5.705,12.742-12.742v-55.671 C453.771,289.09,448.066,283.385,441.028,283.385z"/><path style="fill:#1DA49C;" d="M492.886,345.427H255.999v38.227h236.886c10.556,0,19.114-8.558,19.114-19.114 C512,353.985,503.442,345.427,492.886,345.427z"/><polygon style="fill:#FFE49C;" points="255.999,269.692 255.999,364.541 413.192,283.385 413.192,269.692 "/><path style="fill:#ED3E3C;" d="M413.192,202.23H255.999v81.156h157.193c22.41,0,40.577-18.167,40.577-40.577l0,0 C453.771,220.397,435.604,202.23,413.192,202.23z"/><g><path style="fill:#CC9C56;" d="M255.999,120.708v21.883c6.042,0,10.941-4.898,10.941-10.941 C266.941,125.608,262.042,120.708,255.999,120.708z"/><circle style="fill:#CC9C56;" cx="316.103" cy="131.655" r="10.941"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                    </svg>
                                </div>
                                <div class="ml-1 font-medium">Burger</div>
                            </div>
                        </div>

                        <!-- rice -->
                        <div class="rounded-3xl hover:outline hover:outline-2 hover:outline-[color:rgba(var(--ni-danger-400))]">
                            <div class="cursor-pointer flex justify-center items-center m-1 py-1 bg-[color:rgba(var(--ni-gray-100))] shadow-md rounded-3xl">
                                <div class="border-8 border-white rounded-full">                                
                                    <svg class="w-6 h-6" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                        <path style="fill:#F2F2F2;" d="M374.771,186.442c8.41,4.395,14.338,12.878,15.185,22.807c3.504-1.533,7.359-2.409,11.432-2.409 c15.725,0,28.472,12.747,28.472,28.472c0,0.891-0.058,1.767-0.131,2.643c0.759-0.073,1.533-0.117,2.322-0.117 c15.725,0,28.472,12.747,28.472,28.472l-207.435,46.665L51.477,266.309c0-15.725,12.747-28.472,28.472-28.472 c0.788,0,1.562,0.044,2.322,0.117c-0.073-0.876-0.131-1.752-0.131-2.643c0-15.725,12.747-28.472,28.472-28.472 c4.074,0,7.943,0.876,11.447,2.409c1.226-14.586,13.433-26.033,28.34-26.033c5.417,0,10.454,1.533,14.762,4.161 c3.694-11.447,14.426-19.74,27.099-19.74c7.038,0,13.477,2.57,18.441,6.804c4.702-9.228,14.28-15.565,25.362-15.565 c7.768,0,14.805,3.125,19.945,8.162c5.14-5.037,12.163-8.162,19.945-8.162c11.068,0,20.646,6.337,25.347,15.565 c4.979-4.234,11.403-6.804,18.456-6.804c4.658,0,9.053,1.124,12.922,3.095c6.687,3.417,11.841,9.403,14.163,16.645 c4.307-2.628,9.359-4.161,14.762-4.161C366.346,183.215,370.828,184.383,374.771,186.442z"/><path style="fill:#2BA5F7;" d="M460.522,266.309h20.383c0,83.065-45.044,155.631-112.047,194.572l-114.311,28.764l-111.39-28.764 C76.138,421.94,31.094,349.374,31.094,266.309h20.383L460.522,266.309L460.522,266.309z"/><g><path style="fill:#E6E6E6;" d="M182.881,237.837c0.788,0,1.562,0.044,2.322,0.117c-0.073-0.876-0.131-1.752-0.131-2.643 c0-15.725,12.747-28.472,28.472-28.472c4.074,0,7.943,0.876,11.447,2.409c1.226-14.586,13.433-26.033,28.34-26.033 c5.417,0,10.454,1.533,14.762,4.161c3.694-11.447,14.426-19.74,27.099-19.74c0.441,0,0.873,0.039,1.31,0.06 c-5.176-5.426-12.459-8.82-20.548-8.82c-7.782,0-14.805,3.125-19.945,8.162c-5.14-5.037-12.177-8.162-19.945-8.162 c-11.082,0-20.66,6.337-25.362,15.565c-4.964-4.234-11.403-6.804-18.441-6.804c-12.674,0-23.405,8.293-27.099,19.74 c-4.307-2.628-9.345-4.161-14.762-4.161c-14.908,0-27.114,11.447-28.34,26.033c-3.504-1.533-7.373-2.409-11.447-2.409 c-15.725,0-28.472,12.747-28.472,28.472c0,0.891,0.058,1.767,0.131,2.643c-0.759-0.073-1.533-0.117-2.322-0.117 c-15.725,0-28.472,12.747-28.472,28.472h102.931C154.409,250.584,167.156,237.837,182.881,237.837z"/><path style="fill:#E6E6E6;" d="M445.118,460.881v3.125c0,26.501-21.478,47.993-47.993,47.993h-282.25 c-26.515,0-47.993-21.493-47.993-47.993v-3.125h76.275h225.701H445.118z"/></g><path style="fill:#CCCCCC;" d="M151.566,464.006v-3.125h-8.41H66.881v3.125c0,26.501,21.493,47.993,47.993,47.993h84.685 C173.059,511.999,151.566,490.506,151.566,464.006z"/><path style="fill:#2197D8;" d="M144.976,266.309H51.477H31.094c0,83.065,45.044,155.631,112.062,194.572h113.881 C190.019,421.94,144.976,349.374,144.976,266.309z"/><g><path style="fill:#666666;" d="M314.202,224.378c-1.451,0-2.926-0.291-4.342-0.904c-5.551-2.402-8.105-8.848-5.703-14.398 L391.763,6.606c2.402-5.551,8.847-8.105,14.398-5.702c5.551,2.402,8.103,8.848,5.7,14.399l-87.604,202.469 C322.469,221.906,318.436,224.378,314.202,224.378z"/><path style="fill:#666666;" d="M345.091,241.475c-2.103,0-4.228-0.604-6.105-1.867c-5.018-3.377-6.349-10.181-2.97-15.2 L459.189,41.387c3.377-5.018,10.181-6.347,15.2-2.971c5.018,3.377,6.348,10.181,2.971,15.2L354.185,236.637 C352.07,239.778,348.613,241.475,345.091,241.475z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                    </svg>
                                </div>
                                <div class="ml-1 font-medium">Rice</div>
                            </div>
                        </div>

                        <!-- dessert -->
                        <div class="rounded-3xl hover:outline hover:outline-2 hover:outline-[color:rgba(var(--ni-danger-400))]">
                            <div class="cursor-pointer flex justify-center items-center m-1 py-1 bg-[color:rgba(var(--ni-gray-100))] shadow-md rounded-3xl">
                                <div class="border-8 border-white rounded-full">                                
                                    <svg class="w-6 h-6" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                        <path style="fill:#FFC033;" d="M376.215,234.076H135.78c-9.032,1.848-14.859,10.674-13.01,19.706l50.087,244.87 c1.587,7.771,8.423,13.348,16.358,13.348H322.78c7.935,0,14.771-5.576,16.358-13.348l50.087-244.87 C391.073,244.75,385.247,235.924,376.215,234.076z"/><path style="fill:#F9A926;" d="M376.215,234.076H255.997V512h66.783c7.935,0,14.771-5.576,16.358-13.348l50.087-244.87 C391.073,244.75,385.247,235.924,376.215,234.076z"/><path style="fill:#D7EBFF;" d="M428.269,185.315c-6.293-7.652-14.533-13.174-23.696-16.055c5.152-40.097-5.38-79.859-29.989-111.37 C346.28,21.641,301.954,0,255.997,0c-46.631,0-89.848,21.087-118.555,57.858c-24.619,31.533-35.163,71.305-30.022,111.402 c-9.163,2.881-17.402,8.402-23.696,16.055c-9.554,11.641-13.348,26.837-10.391,41.717c4.62,23.229,25.88,40.099,50.566,40.099 h65.316c9.206,0,16.696,7.49,16.696,16.696c0,15.022,6.696,29.131,18.359,38.706c9.055,7.435,20.25,11.381,31.783,11.381 c3.293,0,6.619-0.326,9.935-0.99c23.228-4.619,40.097-25.88,40.097-50.566c0-8.402,6.826-15.229,15.229-15.229h66.783 c24.685,0,45.945-16.869,50.566-40.097c0.011-0.011,0.011-0.011,0.011-0.011C441.616,212.152,437.823,196.956,428.269,185.315z"/><path style="fill:#BDDEFF;" d="M256.052,333.913c3.293,0,6.619-0.326,9.935-0.99c23.228-4.619,40.097-25.88,40.097-50.566 c0-8.402,6.826-15.229,15.229-15.229h66.783c24.685,0,45.945-16.869,50.566-40.097c0.011-0.011,0.011-0.011,0.011-0.011 c2.945-14.869-0.848-30.066-10.402-41.707c-6.293-7.652-14.533-13.174-23.696-16.055c5.152-40.097-5.38-79.859-29.989-111.37 C346.28,21.641,301.954,0,255.997,0v333.909C256.016,333.909,256.032,333.913,256.052,333.913z"/><circle style="fill:#36D9D9;" cx="222.608" cy="150.261" r="16.696"/><g><circle style="fill:#43BFBF;" cx="289.391" cy="183.652" r="16.696"/><circle style="fill:#43BFBF;" cx="322.782" cy="116.87" r="16.696"/></g><circle style="fill:#36D9D9;" cx="256" cy="83.478" r="16.696"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                    </svg>
                                </div>
                                <div class="ml-1 font-medium">Dessert</div>
                            </div>
                        </div>

                        <!-- drinks -->
                        <div class="rounded-3xl hover:outline hover:outline-2 hover:outline-[color:rgba(var(--ni-danger-400))]">
                            <div class="cursor-pointer flex justify-center items-center m-1 py-1 bg-[color:rgba(var(--ni-gray-100))] shadow-md rounded-3xl">
                                <div class="border-8 border-white rounded-full">                                
                                    <svg class="w-6 h-6" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                        <path style="fill:#F7EEDF;" d="M265.361,172.659c0,8.267-6.68,14.969-14.919,14.969H63.441c-8.239,0-14.92-6.702-14.92-14.969 v-19.962c0-8.269,6.682-14.971,14.92-14.971h187.001c8.24,0,14.919,6.702,14.919,14.971V172.659z"/><path style="fill:#9B8B73;" d="M229.553,153.643h-8.951c-4.396,0-7.958-3.562-7.958-7.958s3.562-7.958,7.958-7.958h8.951 c4.396,0,7.959,3.562,7.959,7.958S233.947,153.643,229.553,153.643z"/><path style="fill:#EF645E;" d="M85.324,512c-7.708,0-14.091-5.805-14.848-13.5L40.637,195.089c-0.414-4.198,0.968-8.398,3.79-11.523 c2.823-3.126,6.852-4.918,11.057-4.918h202.914c4.205,0,8.235,1.792,11.057,4.918c2.822,3.125,4.205,7.326,3.791,11.523 L243.405,498.5c-0.757,7.695-7.14,13.5-14.848,13.5H85.324z"/><path style="fill:#C14616;" d="M67.233,465.506l3.243,32.994c0.757,7.695,7.14,13.5,14.848,13.5h143.233 c7.708,0,14.091-5.805,14.848-13.5l3.245-32.994H67.233z"/><path style="opacity:0.1;enable-background:new    ;" d="M103.764,498.5l-29.84-303.411c-0.413-4.198,0.968-8.398,3.791-11.523 c2.822-3.126,6.851-4.918,11.057-4.918H55.484c-4.205,0-8.234,1.792-11.057,4.918c-2.822,3.125-4.204,7.326-3.79,11.523 L70.476,498.5c0.757,7.695,7.14,13.5,14.848,13.5h33.286C110.904,512,104.52,506.195,103.764,498.5z"/><polygon style="fill:#C69C6D;" points="47.871,390.237 265.361,390.237 272.9,299.325 40.983,299.325 "/><g><path style="fill:#8C6239;" d="M58.947,299.925l6.844,90.312h15.933c-0.001-0.2,0-0.4-0.016-0.602l-6.844-90.311H58.931 C58.932,299.523,58.931,299.724,58.947,299.925z"/><path style="fill:#8C6239;" d="M237.096,299.325l-6.843,90.311c-0.016,0.202-0.015,0.402-0.016,0.602h15.933l6.843-90.312 c0.016-0.202,0.016-0.402,0.016-0.601L237.096,299.325L237.096,299.325z"/></g><path style="opacity:0.1;enable-background:new    ;" d="M81.807,172.659v-19.962c0-8.269,6.682-14.971,14.92-14.971H63.441 c-8.239,0-14.92,6.702-14.92,14.971v19.962c0,8.267,6.682,14.969,14.92,14.969h33.286C88.489,187.628,81.807,180.926,81.807,172.659 z"/><g><path style="fill:#F2D8A0;" d="M164.189,75.821h-23.713c-20.848,0-37.81-17.007-37.81-37.91C102.668,17.006,119.628,0,140.476,0 h20.595c4.396,0,7.959,3.563,7.959,7.958c0,4.396-3.563,7.959-7.959,7.959h-20.595c-12.072,0-21.892,9.866-21.892,21.993 c0,12.126,9.82,21.994,21.892,21.994h23.712c4.396,0,7.958,3.562,7.958,7.958S168.585,75.821,164.189,75.821z"/><path style="fill:#F2D8A0;" d="M224.725,117.214c-4.396,0-7.958-3.562-7.958-7.958V92.959c0-9.451-7.651-17.138-17.055-17.138 h-38.975c-4.396,0-7.958-3.562-7.958-7.958s3.562-7.958,7.958-7.958h38.975c18.179,0,32.972,14.828,32.972,33.055v16.296 C232.684,113.651,229.121,117.214,224.725,117.214z"/></g><path style="fill:#FCE9C3;" d="M196.326,47.506h-25.554c-4.396,0-7.959-3.562-7.959-7.958s3.563-7.958,7.959-7.958h25.554 c4.322,0,7.836-3.515,7.836-7.837c0-4.321-3.514-7.836-7.836-7.836h-11.758c-4.395,0-7.958-3.563-7.958-7.959 c0-4.395,3.563-7.958,7.958-7.958h11.758c13.097,0,23.753,10.656,23.753,23.753C220.079,36.851,209.423,47.506,196.326,47.506z"/><ellipse style="fill:#FFFFFF;" cx="156.944" cy="339.299" rx="63.628" ry="63.843"/><path style="fill:#F7EEDF;" d="M296.197,198.608c0,8.268-6.68,14.971-14.92,14.971H32.605c-8.238,0-14.92-6.703-14.92-14.971 v-11.976c0-8.269,6.682-14.972,14.92-14.972h248.671c8.241,0,14.92,6.703,14.92,14.972v11.976H296.197z"/><path style="opacity:0.1;enable-background:new    ;" d="M50.972,198.608v-11.976c0-8.269,6.682-14.972,14.919-14.972H32.605 c-8.238,0-14.92,6.703-14.92,14.972v11.976c0,8.268,6.682,14.971,14.92,14.971h33.286C57.654,213.579,50.972,206.876,50.972,198.608 z"/><path style="fill:#C14616;" d="M156.941,381.163c-23.018,0-41.745-18.779-41.745-41.862c0-23.082,18.727-41.86,41.745-41.86 c23.019,0,41.747,18.778,41.747,41.86c0,4.396-3.562,7.959-7.958,7.959s-7.958-3.563-7.958-7.959 c0-14.304-11.588-25.943-25.831-25.943c-14.241,0-25.828,11.639-25.828,25.943c0,14.305,11.587,25.944,25.828,25.944 c4.396,0,7.959,3.562,7.959,7.958C164.9,377.6,161.336,381.163,156.941,381.163z"/><path style="fill:#79A85B;" d="M440.01,440.215h-26.093c-4.396,0-7.959-3.562-7.959-7.958s3.563-7.959,7.959-7.959h26.093 c21.168,0,38.387-17.22,38.387-38.386c0-21.168-17.22-38.387-38.387-38.387h-35.726c-4.396,0-7.958-3.562-7.958-7.958 c0-4.396,3.562-7.959,7.958-7.959h35.726c29.944,0,54.305,24.362,54.305,54.305C494.315,415.857,469.954,440.215,440.01,440.215z"/><path style="fill:#A5D289;" d="M405.138,331.606H220.176c-5.747,0-10.449,4.702-10.449,10.449v85.053 c0,36.336,29.455,65.792,65.791,65.792h74.28c36.335,0,65.791-29.455,65.791-65.792v-85.053 C415.587,336.308,410.885,331.606,405.138,331.606z"/><path style="opacity:0.1;enable-background:new    ;" d="M242.869,427.108v-95.502h-22.693c-5.747,0-10.449,4.702-10.449,10.449 v85.053c0,36.336,29.455,65.792,65.791,65.792h33.142C272.323,492.9,242.869,463.445,242.869,427.108z"/><g><path style="fill:#79A85B;" d="M415.587,346.462H376.19c-4.396,0-7.958,3.562-7.958,7.958c0,4.396,3.562,7.959,7.958,7.959h39.397 V346.462z"/><path style="fill:#79A85B;" d="M415.587,371.929h-28.504c-4.396,0-7.958,3.562-7.958,7.958c0,4.396,3.562,7.959,7.958,7.959h28.504 V371.929z"/></g><path style="fill:#78B591;" d="M215.489,512c-11.707,0-21.232-9.524-21.232-21.232c0-3.086,2.5-5.586,5.588-5.586h224.613 c3.088,0,5.588,2.5,5.588,5.586c0,11.708-9.523,21.232-21.231,21.232H215.489z"/><path style="opacity:0.1;enable-background:new    ;" d="M238.225,490.768c0-3.086,2.503-5.586,5.588-5.586h-43.968 c-3.087,0-5.588,2.5-5.588,5.586c0,11.708,9.525,21.232,21.232,21.232h43.969C247.751,512,238.225,502.476,238.225,490.768z"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                    </svg>
                                </div>
                                <div class="ml-1 font-medium">Drinks</div>
                            </div>
                        </div>
                    </nav>
                </div>
                
                <!-- foods -->
                <section>

                    <!-- foods container -->
                    <ul id="food-items" class="cardContainer grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5">

                        <!-- food 1 -->
                        <li class="p-5 bg-white space-y-5 shadow-md rounded-2xl relative hover:scale-105 duration-150" data-value="food 1">

                            <!-- food 1: image -->
                            <div class="flex justify-center items-center rounded-full">
                                <img class="object-contain w-44 h-44 rounded-full" src="https://us2guntur.com/images//10024img/FarmHouse_B_260216.jpg" alt="Farm Villa">
                            </div>

                            <!-- food 1: title & price -->
                            <div class="text-center space-y-4">
                                <!-- food 1: title -->
                                <div class="font-bold text-xl">Farm Villa</div>

                                <!-- food 1: price -->
                                <div class="font-medium text-md">$8.00</div>
                            </div>

                            <!-- food 1: sizes -->
                            <div class="flex justify-center items-center space-x-3">
                                <div class="grid grid-cols-3 w-[50%] font-medium text-center bg-[color:rgba(var(--ni-gray-100))] text-[color:rgba(var(--ni-gray-400))] rounded-xl">
                                    <div class="p-3 hover:bg-[color:rgba(var(--ni-danger-400))] hover:text-white rounded-l-xl duration-150">S</div>
                                    <div class="p-3 hover:bg-[color:rgba(var(--ni-danger-400))] hover:text-white duration-150">M</div>
                                    <div class="p-3 hover:bg-[color:rgba(var(--ni-danger-400))] hover:text-white rounded-r-xl duration-150">L</div>
                                </div>
                                <div class="add-food cursor-pointer w-[50%] font-medium text-center p-3 border border-[color:rgba(var(--ni-danger-400))] hover:bg-[color:rgba(var(--ni-danger-400))] text-[color:rgba(var(--ni-danger-400))] hover:text-white rounded-xl duration-150">Add</div>
                            </div>
                        </li>

                        <!-- food 2 -->
                        <li class="p-5 bg-white space-y-5 shadow-md rounded-2xl relative hover:scale-105 duration-150" data-value="food 2">

                            <!-- food 2: image -->
                            <div class="flex justify-center items-center rounded-full">
                                <img class="object-contain w-44 h-44 rounded-full" src="https://us2guntur.com/images//10024img/peppypaneer_B_260216.jpg" alt="Tandoori Paneer">
                            </div>

                            <!-- food 2: title & price -->
                            <div class="text-center space-y-4">
                                <!-- food 2: title -->
                                <div class="font-bold text-xl">Tandoori Paneer</div>

                                <!-- food 2: price -->
                                <div class="font-medium text-md">$10.00</div>
                            </div>

                            <!-- food 2: sizes -->
                            <div class="flex justify-center items-center space-x-3">
                                <div class="grid grid-cols-3 w-[50%] font-medium text-center bg-[color:rgba(var(--ni-gray-100))] text-[color:rgba(var(--ni-gray-400))] rounded-xl">
                                    <div class="p-3 hover:bg-[color:rgba(var(--ni-danger-400))] hover:text-white rounded-l-xl duration-150">S</div>
                                    <div class="p-3 hover:bg-[color:rgba(var(--ni-danger-400))] hover:text-white duration-150">M</div>
                                    <div class="p-3 hover:bg-[color:rgba(var(--ni-danger-400))] hover:text-white rounded-r-xl duration-150">L</div>
                                </div>
                                <div class="add-food cursor-pointer w-[50%] font-medium text-center p-3 border border-[color:rgba(var(--ni-danger-400))] hover:bg-[color:rgba(var(--ni-danger-400))] text-[color:rgba(var(--ni-danger-400))] hover:text-white rounded-xl duration-150">Add</div>
                            </div>
                        </li>

                        <!-- food 3 -->
                        <li class="p-5 bg-white space-y-5 shadow-md rounded-2xl relative hover:scale-105 duration-150" data-value="food 3">

                            <!-- food 3: image -->
                            <div class="flex justify-center items-center rounded-full">
                                <img class="object-contain w-44 h-44 rounded-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1IpYtha5WhQqkbC28i0tPhBQZQ8s86sIEYhcCYffjoe8_1T5Ysqi7GcaJtiumm1Xl3kU&usqp=CAU" alt="Cheezy - 7">
                            </div>

                            <!-- food 3: title & price -->
                            <div class="text-center space-y-4">
                                <!-- food 3: title -->
                                <div class="font-bold text-xl">Cheezy - 7</div>

                                <!-- food 3: price -->
                                <div class="font-medium text-md">$19.00</div>
                            </div>

                            <!-- food 3: sizes -->
                            <div class="flex justify-center items-center space-x-3">
                                <div class="grid grid-cols-3 w-[50%] font-medium text-center bg-[color:rgba(var(--ni-gray-100))] text-[color:rgba(var(--ni-gray-400))] rounded-xl">
                                    <div class="p-3 hover:bg-[color:rgba(var(--ni-danger-400))] hover:text-white rounded-l-xl duration-150">S</div>
                                    <div class="p-3 hover:bg-[color:rgba(var(--ni-danger-400))] hover:text-white duration-150">M</div>
                                    <div class="p-3 hover:bg-[color:rgba(var(--ni-danger-400))] hover:text-white rounded-r-xl duration-150">L</div>
                                </div>
                                <div class="add-food cursor-pointer w-[50%] font-medium text-center p-3 border border-[color:rgba(var(--ni-danger-400))] hover:bg-[color:rgba(var(--ni-danger-400))] text-[color:rgba(var(--ni-danger-400))] hover:text-white rounded-xl duration-150">Add</div>
                            </div>
                        </li>

                        <!-- food 4 -->
                        <li class="p-5 bg-white space-y-5 shadow-md rounded-2xl relative hover:scale-105 duration-150" data-value="food 4">

                            <!-- food 4: image -->
                            <div class="flex justify-center items-center rounded-full">
                                <img class="object-contain w-44 h-44 rounded-full" src="https://us.123rf.com/450wm/alexanderbaluev/alexanderbaluev1907/alexanderbaluev190700004/129688281-pizza-margarita-top-view-pizza-with-cheese-isolated-on-white-background-.jpg?ver=6" alt="Margherita">
                            </div>

                            <!-- food 4: title & price -->
                            <div class="text-center space-y-4">
                                <!-- food 4: title -->
                                <div class="font-bold text-xl">Margherita</div>

                                <!-- food 4: price -->
                                <div class="font-medium text-md">$12.00</div>
                            </div>

                            <!-- food 4: sizes -->
                            <div class="flex justify-center items-center space-x-3">
                                <div class="grid grid-cols-3 w-[50%] font-medium text-center bg-[color:rgba(var(--ni-gray-100))] text-[color:rgba(var(--ni-gray-400))] rounded-xl">
                                    <div class="p-3 hover:bg-[color:rgba(var(--ni-danger-400))] hover:text-white rounded-l-xl duration-150">S</div>
                                    <div class="p-3 hover:bg-[color:rgba(var(--ni-danger-400))] hover:text-white duration-150">M</div>
                                    <div class="p-3 hover:bg-[color:rgba(var(--ni-danger-400))] hover:text-white rounded-r-xl duration-150">L</div>
                                </div>
                                <div class="add-food cursor-pointer w-[50%] font-medium text-center p-3 border border-[color:rgba(var(--ni-danger-400))] hover:bg-[color:rgba(var(--ni-danger-400))] text-[color:rgba(var(--ni-danger-400))] hover:text-white rounded-xl duration-150">Add</div>
                            </div>
                        </li>

                        <!-- food 5 -->
                        <li class="p-5 bg-white space-y-5 shadow-md rounded-2xl relative hover:scale-105 duration-150" data-value="food 5">

                            <!-- food 5: image -->
                            <div class="flex justify-center items-center rounded-full">
                                <img class="object-contain w-44 h-44 rounded-full" src="https://bizrise.s3.ap-south-1.amazonaws.com/store/img/9409111/product/corn-onion-pizzamedium-8inch/corn-onion-pizzamedium-8inch-1636182171349_1.jpg" alt="Sweet Corn">
                            </div>

                            <!-- food 5: title & price -->
                            <div class="text-center space-y-4">
                                <!-- food 5: title -->
                                <div class="font-bold text-xl">Sweet Corn</div>

                                <!-- food 5: price -->
                                <div class="font-medium text-md">$13.00</div>
                            </div>

                            <!-- food 5: sizes -->
                            <div class="flex justify-center items-center space-x-3">
                                <div class="grid grid-cols-3 w-[50%] font-medium text-center bg-[color:rgba(var(--ni-gray-100))] text-[color:rgba(var(--ni-gray-400))] rounded-xl">
                                    <div class="p-3 hover:bg-[color:rgba(var(--ni-danger-400))] hover:text-white rounded-l-xl duration-150">S</div>
                                    <div class="p-3 hover:bg-[color:rgba(var(--ni-danger-400))] hover:text-white duration-150">M</div>
                                    <div class="p-3 hover:bg-[color:rgba(var(--ni-danger-400))] hover:text-white rounded-r-xl duration-150">L</div>
                                </div>
                                <div class="add-food cursor-pointer w-[50%] font-medium text-center p-3 border border-[color:rgba(var(--ni-danger-400))] hover:bg-[color:rgba(var(--ni-danger-400))] text-[color:rgba(var(--ni-danger-400))] hover:text-white rounded-xl duration-150">Add</div>
                            </div>
                        </li>

                        <!-- food 6 -->
                        <li class="p-5 bg-white space-y-5 shadow-md rounded-2xl relative hover:scale-105 duration-150" data-value="food 6">

                            <!-- food 6: image -->
                            <div class="flex justify-center items-center rounded-full">
                                <img class="object-contain w-44 h-44 rounded-full" src="https://www.kapruka.com/cdn-cgi/image/width=700,quality=93,f=auto/shops/specialGifts/productImages/1542352270399_TandooriChickenM.jpg" alt="Chicken Pizza">
                            </div>

                            <!-- food 6: title & price -->
                            <div class="text-center space-y-4">
                                <!-- food 6: title -->
                                <div class="font-bold text-xl">Chicken Pizza</div>

                                <!-- food 6: price -->
                                <div class="font-medium text-md">$22.00</div>
                            </div>

                            <!-- food 6: sizes -->
                            <div class="flex justify-center items-center space-x-3">
                                <div class="grid grid-cols-3 w-[50%] font-medium text-center bg-[color:rgba(var(--ni-gray-100))] text-[color:rgba(var(--ni-gray-400))] rounded-xl">
                                    <div class="p-3 hover:bg-[color:rgba(var(--ni-danger-400))] hover:text-white rounded-l-xl duration-150">S</div>
                                    <div class="p-3 hover:bg-[color:rgba(var(--ni-danger-400))] hover:text-white duration-150">M</div>
                                    <div class="p-3 hover:bg-[color:rgba(var(--ni-danger-400))] hover:text-white rounded-r-xl duration-150">L</div>
                                </div>
                                <div class="add-food cursor-pointer w-[50%] font-medium text-center p-3 border border-[color:rgba(var(--ni-danger-400))] hover:bg-[color:rgba(var(--ni-danger-400))] text-[color:rgba(var(--ni-danger-400))] hover:text-white rounded-xl duration-150">Add</div>
                            </div>
                        </li>
                    </ul>
                </section>
            </div>

            <!-- right side -->
            <div id="right-side" class="w-full lg:w-[35%] bg-white shadow-md rounded-md sticky top-0 hidden">

                <!-- x -->
                <div id="cancel-order" class="flex p-5 border-b border-[color:rgba(var(--ni-gray-200))]">
                    <div class="font-medium text-xl">New Order Bill</div>
                    <button class="ml-auto hover:text-[color:rgba(var(--ni-danger-500))] duration-150">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>

                <!-- order lists -->
                <ul id="order-items" class="flex flex-col p-5 space-y-3"></ul>

                <!-- total -->
                <div class="">
                    <!-- subtotal -->
                    <div class="p-5 space-y-1 rounded-3xl">
                        <div class="flex text-sm">
                            <div class="font-medium text-[color:rgba(var(--ni-gray-500))]">Subtotal</div>
                            <div class="ml-auto font-bold text-xl text-[color:rgba(var(--ni-gray-900))]">$50.00</div>
                        </div>
                        <div class="flex text-sm">
                            <div class="font-medium text-[color:rgba(var(--ni-gray-500))]">Discount sales</div>
                            <div class="ml-auto font-bold text-xl text-[color:rgba(var(--ni-gray-900))]">$0.00</div>
                        </div>
                        <div class="flex text-sm">
                            <div class="font-medium text-[color:rgba(var(--ni-gray-500))]">Tax 10% (VAT Included)</div>
                            <div class="ml-auto font-bold text-xl text-[color:rgba(var(--ni-gray-900))]">$5.00</div>
                        </div>
                    </div>

                    <!-- dashed line -->
                    <div class="border-b-2 border-dashed border-[color:rgba(var(--ni-gray-300))] mx-5"></div>

                    <!-- total price -->
                    <div class="p-5 rounded-3xl">
                        <div class="flex font-bold text-xl text-[color:rgba(var(--ni-gray-800))]">
                            <div class="text-[color:rgba(var(--ni-danger-400))]">Total</div>
                            <div class="ml-auto text-[color:rgba(var(--ni-greengray-400))]">$55.00</div>
                        </div>
                    </div>
                </div>

                <!-- payment method -->
                <div class="p-5 border-t border-[color:rgba(var(--ni-gray-200))]">

                    <div class="font-bold text-[color:rgba(var(--ni-gray-800))]">Payment Method</div>

                    <div id="payment-methods" class="grid grid-cols-2 xl:grid-cols-2 2xl:grid-cols-3 mt-5 mb-10 gap-2 2xl:gap-4">

                        <!-- cash -->
                        <div class="">
                            <div class="payment cursor-pointer p-5 border border-[color:rgba(var(--ni-gray-200))] hover:bg-[color:rgba(var(--ni-gray-200))] rounded-xl duration-150">
                                <svg class="w-10 xl:w-10 2xl:w-20 h-10 xl:h-10 2xl:h-20 mx-auto" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.002 512.002" style="enable-background:new 0 0 512.002 512.002;" xml:space="preserve"><rect x="12.39" y="160.644" transform="matrix(-0.9921 0.1251 -0.1251 -0.9921 495.4694 515.7625)" style="fill:#20A088;" width="438.301" height="225.59"/><rect x="73.682" y="99.237" style="fill:#32BEA6;" width="438.32" height="225.6"/>
                                    <path style="fill:#FFFFFF;" d="M285.81,254.277v-37.472c-11.696-3.344-20.256-8.384-25.712-15.152s-8.176-14.976-8.176-24.64 c0-9.776,3.088-17.984,9.248-24.64c6.176-6.64,14.384-10.48,24.64-11.488v-8.864h12.976v8.848 c9.472,1.136,17.024,4.368,22.624,9.712c5.6,5.344,9.184,12.48,10.736,21.424l-22.624,2.96c-1.376-7.04-4.944-11.808-10.736-14.304 v34.976c14.304,3.872,24.064,8.896,29.248,15.072c5.184,6.16,7.776,14.08,7.776,23.744c0,10.784-3.264,19.888-9.792,27.28 c-6.528,7.392-15.6,11.92-27.232,13.6v16.72H285.81v-16.272c-10.32-1.248-18.688-5.104-25.136-11.536s-10.56-15.52-12.352-27.28 l23.344-2.512c0.944,4.768,2.736,8.88,5.36,12.352C279.666,250.213,282.594,252.725,285.81,254.277z M285.81,160.357 c-3.52,1.184-6.32,3.216-8.416,6.08c-2.096,2.864-3.136,6.016-3.136,9.472c0,3.152,0.944,6.096,2.864,8.816 c1.904,2.72,4.8,4.912,8.672,6.576v-30.944H285.81z M298.786,255.525c4.464-0.832,8.112-2.912,10.912-6.224s4.208-7.2,4.208-11.68 c0-4-1.184-7.44-3.536-10.336c-2.352-2.896-6.208-5.104-11.584-6.656V255.525z"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                </svg>
                            </div>
                            <div class="font-medium text-center">Cash</div>
                        </div>

                        <!-- debit card -->
                        <div class="">
                            <div class="payment cursor-pointer p-5 border border-[color:rgba(var(--ni-gray-200))] hover:bg-[color:rgba(var(--ni-gray-200))] rounded-xl duration-150">
                                <svg class="w-10 xl:w-10 2xl:w-20 h-10 xl:h-10 2xl:h-20 mx-auto" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path style="fill:#EDF0F2;" d="M461.913,72.348H50.087C22.468,72.348,0,94.816,0,122.435v50.087h512v-50.087 C512,94.816,489.532,72.348,461.913,72.348z"/><path style="fill:#DAE1E6;" d="M461.913,72.348H256v100.174h256v-50.087C512,94.816,489.532,72.348,461.913,72.348z"/><path style="fill:#3ABBE6;" d="M0,139.13v100.174h512V139.13H0z"/><rect x="256" y="139.13" style="fill:#33A6CC;" width="256" height="100.174"/><path style="fill:#EDF0F2;" d="M0,205.913v183.652c0,27.619,22.468,50.087,50.087,50.087h411.826 c27.619,0,50.087-22.468,50.087-50.087V205.913H0z"/><path style="fill:#DAE1E6;" d="M256,439.652h205.913c27.619,0,50.087-22.468,50.087-50.087V205.913H256V439.652z"/><path style="fill:#C9D2D9;" d="M217.043,372.87H83.478c-9.217,0-16.696-7.473-16.696-16.696v-66.783 c0-9.223,7.479-16.696,16.696-16.696h133.565c9.217,0,16.696,7.473,16.696,16.696v66.783 C233.739,365.397,226.261,372.87,217.043,372.87z"/><path style="fill:#E6563A;" d="M345.141,372.832c-13.195,0-25.956-5.098-35.5-14.641c-13.402-13.402-18.044-33.136-12.12-51.511 c4.804-14.875,16.543-26.614,31.423-31.413c18.315-5.908,38.098-1.293,51.5,12.109s18.044,33.136,12.12,51.511 c-4.804,14.875-16.543,26.614-31.423,31.413C355.87,372,350.467,372.832,345.141,372.832z"/><path style="fill:#FFCC33;" d="M395.228,372.832c-13.195,0-25.956-5.098-35.501-14.641c-13.402-13.402-18.044-33.136-12.12-51.511 c4.804-14.875,16.543-26.614,31.423-31.413c18.315-5.908,38.098-1.293,51.501,12.109c13.402,13.402,18.044,33.136,12.12,51.511 c-4.804,14.875-16.543,26.614-31.423,31.413C405.957,372,400.554,372.832,395.228,372.832z"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                </svg>
                            </div>
                            <div class="font-medium text-center">Debit Card</div>
                        </div>

                        <!-- e-wallet -->
                        <div class="">
                            <div class="payment cursor-pointer p-5 border border-[color:rgba(var(--ni-gray-200))] hover:bg-[color:rgba(var(--ni-gray-200))] rounded-xl duration-150">
                                <svg class="w-10 xl:w-10 2xl:w-20 h-10 xl:h-10 2xl:h-20 mx-auto" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><circle style="fill:#C2D5D8;" cx="256" cy="256" r="256"/>
                                    <path style="fill:#805026;" d="M106.736,160c0-8.8,8.464-16,17.264-16h124h124c8.8,0,14.736,7.2,14.736,16v40h-280 C106.736,200,106.736,160,106.736,160z"/><rect x="124.043" y="127.983" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -67.1026 229.9644)" style="fill:#238C7C;" width="239.994" height="135.999"/><path style="fill:#A3CCC5;" d="M270.444,84.704L132.708,222.44c3.108,6.52,3.108,14.136,0,20.656l64.196,64.196 c6.52-3.108,14.136-3.108,20.656,0l137.736-137.736c-3.108-6.52-3.108-14.136,0-20.656L291.1,84.704 C284.58,87.816,276.964,87.816,270.444,84.704z"/><g><circle style="fill:#238C7C;" cx="187.436" cy="252.56" r="12"/><circle style="fill:#238C7C;" cx="300.56" cy="139.432" r="12"/><circle style="fill:#238C7C;" cx="244" cy="196" r="40"/></g><path style="fill:#B37035;" d="M106.736,160c0,8.8,8.464,16,17.264,16h208h60c8.8,0,14.736,7.2,14.736,16v184 c0,8.8-5.928,16-14.736,16H124c-8.8,0-17.264-7.2-17.264-16V160z"/><path style="fill:#A66831;" d="M406.736,184c0-4.416-3.584-8-8-8l0,0c-4.416,0-8,3.584-8,8v200c0,4.416,3.584,8,8,8l0,0 c4.416,0,8-3.584,8-8V184z"/><path style="fill:#D9C182;" d="M408,248h-52c-22.092,0-40,17.908-40,40s17.908,40,40,40h52c2.212,0,2.736-1.792,2.736-4v-72 C410.736,249.792,410.212,248,408,248z"/><path style="fill:#B37035;" d="M352,252h-0.632c-18,1.992-31.684,17.472-31.684,36s13.528,34.008,31.528,36H352h54.736v-72H352z"/><circle style="fill:#263740;" cx="352" cy="288" r="16"/><g><rect x="122.736" y="200" style="fill:#D9C182;" width="16" height="4"/><rect x="162.736" y="200" style="fill:#D9C182;" width="16" height="4"/><rect x="202.736" y="200" style="fill:#D9C182;" width="16" height="4"/><rect x="242.736" y="200" style="fill:#D9C182;" width="16" height="4"/><rect x="282.72" y="200" style="fill:#D9C182;" width="16" height="4"/><rect x="322.72" y="200" style="fill:#D9C182;" width="16" height="4"/><rect x="362.72" y="200" style="fill:#D9C182;" width="16" height="4"/><rect x="122.736" y="372" style="fill:#D9C182;" width="16" height="4"/><rect x="162.736" y="372" style="fill:#D9C182;" width="16" height="4"/><rect x="202.736" y="372" style="fill:#D9C182;" width="16" height="4"/><rect x="242.736" y="372" style="fill:#D9C182;" width="16" height="4"/><rect x="282.72" y="372" style="fill:#D9C182;" width="16" height="4"/><rect x="322.72" y="372" style="fill:#D9C182;" width="16" height="4"/><rect x="362.72" y="372" style="fill:#D9C182;" width="16" height="4"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                </svg>
                            </div>
                            <div class="font-medium text-center">E-Wallet</div>
                        </div>
                    </div>
                    <button class="w-full text-white py-3 bg-[color:rgba(var(--ni-danger-400))] hover:bg-[color:rgba(var(--ni-danger-500))] shadow-lg rounded-xl duration-300">Place Order</button>
                </div>
            </div>
        </div>
    </div> 
</div>

@endsection

@section('internalScript')

<script>

    // POS Restaurant Order function -->
    const posRestaurantOrder = () => {

        const leftSide  = $("#left-side");
        const rightSide = $("#right-side");
        
        const foodItems = $("#food-items");
        const foodOrders = $("#order-items");

        const girdsFoodItemsDefault    = ("lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5");
        const gridsFoodItemsResponsive = ("lg:grid-cols-2 xl:grid-cols-2 2xl:grid-cols-3");
        
        // left side & right function
        const sidesPopUp = () => {

            if ( rightSide.hasClass("hidden") ) {

                leftSide.removeClass("lg:w-[65%]");

                foodItems.removeClass(girdsFoodItemsDefault);
                foodItems.addClass(girdsFoodItemsDefault);

            } else {

                leftSide.addClass("lg:w-[65%]");

                foodItems.removeClass(girdsFoodItemsDefault);    
                foodItems.addClass(gridsFoodItemsResponsive);

            }

        }

        // onclick food items
        const foodItemsOrder = () => {

            const addFoods   = $("#food-items li div:last-child .add-food");
            const eachSizes  = $("#food-items li div:last-child div:first-child div");
            const active     = ("bg-[color:rgba(var(--ni-danger-400))] text-white");
            const added      = ("Added");
            const closeOrder = $("#right-side #cancel-order button");

            const foods = {
                firstFood  : (`
                                <!-- food order 1 -->
                                <li class="flex p-5 bg-[color:rgba(var(--ni-gray-50))] rounded-xl" data-food="1">
                                    <div class="flex-none rounded-full my-auto">
                                        <img class="w-20 h-20 object-cover rounded-full" src="https://us2guntur.com/images//10024img/FarmHouse_B_260216.jpg" alt="Farm Villa">
                                    </div>
                                    <div class="w-full space-y-3 ml-2 my-auto">
                                        <div class="flex">
                                            <div class="font-medium text-sm 2xl:text-lg">Farm Villa</div>
                                            <div class="flex space-x-2 xl:space-x-3 2xl:space-4 ml-auto my-auto p-1 bg-white rounded-xl">
                                                <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-yellow-400))] text-white rounded-full duration-150">–</button>
                                                <input type="text" class="font-medium text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                                <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-yellow-400))] text-white rounded-full duration-150">+</button>
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <div class="font-medium text-[color:rgba(var(--ni-danger-500))]">$8.00</div>
                                            <div id="remove-food" class="cursor-pointer ml-auto text-sm text-[color:rgba(var(--ni-danger-400))] hover:text-[color:rgba(var(--ni-danger-500))]">Remove</div>
                                        </div>
                                    </div>
                                </li>
                            `),

                secondFood : (`
                                <!-- food order 2 -->
                                <li class="flex p-5 bg-[color:rgba(var(--ni-gray-50))] rounded-xl" data-food="2">
                                    <div class="flex-none rounded-full my-auto">
                                        <img class="w-20 h-20 object-cover rounded-full" src="https://us2guntur.com/images//10024img/peppypaneer_B_260216.jpg" alt="Tandoori Paneer">
                                    </div>
                                    <div class="w-full space-y-3 ml-2 my-auto">
                                        <div class="flex">
                                            <div class="font-medium text-sm 2xl:text-lg">Tandoori Paneer</div>
                                            <div class="flex space-x-2 xl:space-x-3 2xl:space-4 ml-auto my-auto p-1 bg-white rounded-xl">
                                                <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-yellow-400))] text-white rounded-full duration-150">–</button>
                                                <input type="text" class="font-medium text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                                <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-yellow-400))] text-white rounded-full duration-150">+</button>
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <div class="font-medium text-[color:rgba(var(--ni-danger-500))]">$10.00</div>
                                            <div id="remove-food" class="cursor-pointer ml-auto text-sm text-[color:rgba(var(--ni-danger-400))] hover:text-[color:rgba(var(--ni-danger-500))]">Remove</div>
                                        </div>
                                    </div>
                                </li>
                            `),

                thirdFood  : (`
                                <!-- food order 2 -->
                                <li class="flex p-5 bg-[color:rgba(var(--ni-gray-50))] rounded-xl" data-food="2">
                                    <div class="flex-none rounded-full my-auto">
                                        <img class="w-20 h-20 object-cover rounded-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1IpYtha5WhQqkbC28i0tPhBQZQ8s86sIEYhcCYffjoe8_1T5Ysqi7GcaJtiumm1Xl3kU&usqp=CAU" alt="Cheezy - 7">
                                    </div>
                                    <div class="w-full space-y-3 ml-2 my-auto">
                                        <div class="flex">
                                            <div class="font-medium text-sm 2xl:text-lg">Cheezy - 7</div>
                                            <div class="flex space-x-2 xl:space-x-3 2xl:space-4 ml-auto my-auto p-1 bg-white rounded-xl">
                                                <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-yellow-400))] text-white rounded-full duration-150">–</button>
                                                <input type="text" class="font-medium text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                                <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-yellow-400))] text-white rounded-full duration-150">+</button>
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <div class="font-medium text-[color:rgba(var(--ni-danger-500))]">$19.00</div>
                                            <div id="remove-food" class="cursor-pointer ml-auto text-sm text-[color:rgba(var(--ni-danger-400))] hover:text-[color:rgba(var(--ni-danger-500))]">Remove</div>
                                        </div>
                                    </div>
                                </li>
                            `),

                fouthFood  : (`
                                <!-- food order 2 -->
                                <li class="flex p-5 bg-[color:rgba(var(--ni-gray-50))] rounded-xl" data-food="2">
                                    <div class="flex-none rounded-full my-auto">
                                        <img class="w-20 h-20 object-cover rounded-full" src="https://us.123rf.com/450wm/alexanderbaluev/alexanderbaluev1907/alexanderbaluev190700004/129688281-pizza-margarita-top-view-pizza-with-cheese-isolated-on-white-background-.jpg?ver=6" alt="Margherita">
                                    </div>
                                    <div class="w-full space-y-3 ml-2 my-auto">
                                        <div class="flex">
                                            <div class="font-medium text-sm 2xl:text-lg">Margherita</div>
                                            <div class="flex space-x-2 xl:space-x-3 2xl:space-4 ml-auto my-auto p-1 bg-white rounded-xl">
                                                <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-yellow-400))] text-white rounded-full duration-150">–</button>
                                                <input type="text" class="font-medium text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                                <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-yellow-400))] text-white rounded-full duration-150">+</button>
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <div class="font-medium text-[color:rgba(var(--ni-danger-500))]">$12.00</div>
                                            <div id="remove-food" class="cursor-pointer ml-auto text-sm text-[color:rgba(var(--ni-danger-400))] hover:text-[color:rgba(var(--ni-danger-500))]">Remove</div>
                                        </div>
                                    </div>
                                </li>
                            `),

                fifthFood  : (`
                                <!-- food order 2 -->
                                <li class="flex p-5 bg-[color:rgba(var(--ni-gray-50))] rounded-xl" data-food="2">
                                    <div class="flex-none rounded-full my-auto">
                                        <img class="w-20 h-20 object-cover rounded-full" src="https://bizrise.s3.ap-south-1.amazonaws.com/store/img/9409111/product/corn-onion-pizzamedium-8inch/corn-onion-pizzamedium-8inch-1636182171349_1.jpg" alt="Sweet Corn">
                                    </div>
                                    <div class="w-full space-y-3 ml-2 my-auto">
                                        <div class="flex">
                                            <div class="font-medium text-sm 2xl:text-lg">Sweet Corn</div>
                                            <div class="flex space-x-2 xl:space-x-3 2xl:space-4 ml-auto my-auto p-1 bg-white rounded-xl">
                                                <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-yellow-400))] text-white rounded-full duration-150">–</button>
                                                <input type="text" class="font-medium text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                                <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-yellow-400))] text-white rounded-full duration-150">+</button>
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <div class="font-medium text-[color:rgba(var(--ni-danger-500))]">$13.00</div>
                                            <div id="remove-food" class="cursor-pointer ml-auto text-sm text-[color:rgba(var(--ni-danger-400))] hover:text-[color:rgba(var(--ni-danger-500))]">Remove</div>
                                        </div>
                                    </div>
                                </li>
                            `),

                sixthFood  : (`
                                <!-- food order 2 -->
                                <li class="flex p-5 bg-[color:rgba(var(--ni-gray-50))] rounded-xl" data-food="2">
                                    <div class="flex-none rounded-full my-auto">
                                        <img class="w-20 h-20 object-cover rounded-full" src="https://www.kapruka.com/cdn-cgi/image/width=700,quality=93,f=auto/shops/specialGifts/productImages/1542352270399_TandooriChickenM.jpg" alt="Chicken Pizza">
                                    </div>
                                    <div class="w-full space-y-3 ml-2 my-auto">
                                        <div class="flex">
                                            <div class="font-medium text-sm 2xl:text-lg">Chicken Pizza</div>
                                            <div class="flex space-x-2 xl:space-x-3 2xl:space-4 ml-auto my-auto p-1 bg-white rounded-xl">
                                                <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-yellow-400))] text-white rounded-full duration-150">–</button>
                                                <input type="text" class="font-medium text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                                <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-yellow-400))] text-white rounded-full duration-150">+</button>
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <div class="font-medium text-[color:rgba(var(--ni-danger-500))]">$22.00</div>
                                            <div id="remove-food" class="cursor-pointer ml-auto text-sm text-[color:rgba(var(--ni-danger-400))] hover:text-[color:rgba(var(--ni-danger-500))]">Remove</div>
                                        </div>
                                    </div>
                                </li>
                            `)
            }

            // each food onclick
            addFoods.each(function(i, element) {

                $(this).click(function() {

                    // change text button
                    $(this).html(added);

                    rightSide.removeClass("hidden");

                    leftSide.addClass("lg:w-[65%]");

                    foodItems.removeClass(girdsFoodItemsDefault);
                    foodItems.addClass(gridsFoodItemsResponsive);

                    // append food to order lists
                    if ( i == 0 ) {
                        foodOrders.append(foods.firstFood);
                    }
                    
                    if ( i == 1 ) {
                        foodOrders.append(foods.secondFood);
                    }

                    if ( i == 2 ) {
                        foodOrders.append(foods.thirdFood);
                    }

                    if ( i == 3 ) {
                        foodOrders.append(foods.fouthFood);
                    }

                    if ( i == 4 ) {
                        foodOrders.append(foods.fifthFood);
                    }

                    if ( i == 5 ) {
                        foodOrders.append(foods.sixthFood);
                    }

                });
            });

            // onclick active food sizes
            eachSizes.each(function(i, element) {
                $(this).click(function() {
                    eachSizes.removeClass(active);
                    $(this).addClass(active);
                });
            });

            // x button to cancel order
            closeOrder.click(function() {

                rightSide.addClass("hidden");

                leftSide.removeClass("lg:w-[65%]");

                foodItems.removeClass(gridsFoodItemsResponsive);
                foodItems.addClass(girdsFoodItemsDefault);
                
            });

        }

        // onclick add active to payment methods
        const payments = () => {

            const paymentMethods = $("#payment-methods div .payment");

            paymentMethods.each(function(i, element) {
                $(this).click(function() {
                    paymentMethods.removeClass("bg-[color:rgba(var(--ni-gray-200))]");
                    $(this).addClass("bg-[color:rgba(var(--ni-gray-200))]");
                });
            });
        }

        // add & sub quantity function
        const addSubQuantity = () => {

            const add = $(".add");
            const sub = $(".sub");

            // add quantity
            add.click(function() {
                if ($(this).prev().val() < 12) {
                    $(this).prev().val(+$(this).prev().val() + 1);
                }
            });

            // sub quantity
            sub.click(function() {
                if ($(this).next().val() > 1) {
                    if ($(this).next().val() > 1) {
                        $(this).next().val(+$(this).next().val() - 1);
                    }
                }
            });

        }

        // call functions
        sidesPopUp();
        foodItemsOrder();
        payments();
        addSubQuantity();

    }

    // call function
    posRestaurantOrder();

</script>

@endsection