@extends('master')
@section('internalCss')
<link rel="stylesheet" type="text/css" href="{{ asset('css/evoCalendar.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>

@endsection
@section('content')

{{-- <div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div> --}}

<!-- Design POS Food Order with outline -->

<!-- main -->
<div class="mainCard">
    <div class="cardContainer bg-[color:rgba(var(--ni-gray-100))]">
        <div class="flex flex-col lg:flex-row select-none">

            <!-- left side -->
            <div id="left-side" class="w-full lg:w-[65%] p-5 space-y-6">

                <!-- header -->
                <header id="header" class="flex flex-col 2xl:flex-row mx-0 sm:mx-0">

                    <!-- welcome -->
                    <div class="w-full text-center 2xl:text-start">
                        <div class="text-2xl font-medium">Welcome, Ridh</div>
                        <div class="text-[color:rgba(var(--ni-gray-400))] mt-2">Discover whatever you need easily</div>
                    </div>

                    <!-- search bar & filter -->
                    <div class="flex justify-center items-center mt-5 2xl:mt-0">

                        <!-- search bar -->
                        <div class="relative bg-white my-auto shadow-md rounded-md">
                            <svg class="pointer-events-none absolute top-3.5 left-4 h-5 w-5 text-[color:rgba(var(--ni-gray-400))]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                            </svg>
                            <input class="h-12 w-full sm:w-80 md:w-96 2xl:w-96 border-0 bg-transparent pl-11 pr-4 outline-none text-[color:rgba(var(--ni-gray-800))] placeholder-[color:rgba(var(--ni-gray-500))] focus:ring-0 sm:text-sm rounded-md" type="search" placeholder="Search product..." data-search>
                        </div>

                        <!-- filter -->
                        <div class="bg-white ml-5 p-3 rounded-md shadow-md my-auto">
                            <svg class="w-6 h-6" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g>
                                <path style="fill:#B2F3FF;" d="M480,0H32C18.766,0,8,10.766,8,24v38.578c0,8.109,3.039,15.844,8.555,21.773l187.172,210.188c2.758,2.969,4.273,6.828,4.273,10.883v130.086c0,10.43,5.102,20.227,13.648,26.211l69.766,48.836 c1.367,0.961,2.977,1.445,4.586,1.445c1.266,0,2.531-0.297,3.695-0.906c2.648-1.375,4.305-4.109,4.305-7.094V305.422 c0-4.055,1.516-7.914,4.273-10.883L495.445,84.352c5.516-5.93,8.555-13.664,8.555-21.773V24C504,10.766,493.234,0,480,0z"/></g><g><path style="fill:#51DBFF;" d="M8.133,64c0.337,7.581,3.233,14.774,8.421,20.352l187.172,210.188 c0.423,0.455,0.759,0.966,1.123,1.461h102.302c0.363-0.495,0.7-1.006,1.123-1.461L495.445,84.352c5.188-5.578,8.084-12.771,8.421-20.352H8.133z"/></g><g><path style="fill:#51DBFF;" d="M256,0H32C18.766,0,8,10.766,8,24v38.578c0,8.109,3.039,15.844,8.555,21.773l187.172,210.188 c2.758,2.969,4.273,6.828,4.273,10.883v130.086c0,10.43,5.102,20.227,13.648,26.211L256,485.765V0z"/></g><g><path style="fill:#45BDF0;" d="M256,296V64H8.133c0.167,3.772,0.974,7.446,2.375,10.875c0.116,0.279,0.285,0.533,0.409,0.809 c0.625,1.412,1.304,2.803,2.134,4.114c1.028,1.604,2.185,3.137,3.503,4.554l187.172,210.188c0.423,0.455,0.759,0.966,1.123,1.461 H256z"/></g><g><path style="fill:#527991;" d="M256,24H12C5.373,24,0,18.627,0,12v0C0,5.373,5.373,0,12,0l244,0V24z"/></g><g><path style="fill:#45BDF0;" d="M500,24H256V0l244,0c6.627,0,12,5.373,12,12v0C512,18.627,506.627,24,500,24z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                            </svg>
                        </div>
                    </div>
                </header>

                <!--nav-->
                <nav class="cardContainer grid grid-cols-2 md:grid-cols-3 2xl:grid-cols-5">
                    
                    <!-- signature -->
                    <div class="cursor-pointer flex justify-center items-center py-2 bg-white shadow-md rounded-lg translate-y-2 hover:translate-y-0 duration-150">
                        <div class="p-2 bg-white rounded-full">
                            <svg class="w-6 h-6" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 310.551 310.551" style="enable-background:new 0 0 310.551 310.551;" xml:space="preserve"><g>
                                <path style="fill:#A4A9AD;" d="M308.122,127.396c-0.728-4.297-4.796-7.012-9.042-6.039l-26.584,6.08 c-3.03-12.809-8.108-24.824-14.864-35.686l23.063-14.576c3.681-2.322,4.619-7.131,2.09-10.676c0,0-3.964-7.273-17.711-21.018 c-13.745-13.748-21.433-17.998-21.433-17.998c-3.554-2.521-8.35-1.564-10.665,2.125l-14.504,23.107 c-10.884-6.719-22.914-11.76-35.734-14.748l5.997-26.598c0.959-4.248-1.771-8.311-6.067-9.029c0,0-7.947-2.34-27.389-2.34 s-27.883,2.432-27.883,2.432c-4.293,0.729-7.012,4.797-6.039,9.043l6.082,26.586c-12.808,3.029-24.822,8.105-35.685,14.861 L77.179,29.859c-2.326-3.68-7.131-4.621-10.676-2.094c0,0-7.274,3.967-21.022,17.713C31.735,59.225,27.484,66.914,27.484,66.914 c-2.521,3.551-1.565,8.352,2.124,10.666l23.108,14.502c-6.719,10.885-11.759,22.914-14.748,35.734l-26.599-5.998 c-4.247-0.957-8.31,1.773-9.028,6.068c0,0-2.34,7.947-2.34,27.391c0,19.439,2.431,27.881,2.431,27.881 c0.729,4.293,4.798,7.012,9.044,6.039l26.585-6.082c3.029,12.809,8.106,24.822,14.862,35.686L29.86,233.375 c-3.681,2.326-4.621,7.131-2.092,10.678c0,0,3.964,7.271,17.712,21.021c13.745,13.744,21.434,17.994,21.434,17.994 c3.552,2.522,8.351,1.566,10.666-2.123l14.503-23.107c10.883,6.721,22.913,11.76,35.733,14.75l-5.997,26.596 c-0.959,4.248,1.773,8.311,6.069,9.027c0,0,7.945,2.342,27.389,2.34c19.439,0,27.881-2.43,27.881-2.43 c4.294-0.728,7.012-4.797,6.039-9.043l-6.082-26.584c12.809-3.029,24.824-8.108,35.686-14.861l14.575,23.059 c2.324,3.684,7.13,4.621,10.676,2.092c0,0,7.272-3.963,21.02-17.711c13.745-13.746,17.996-21.434,17.996-21.434 c2.521-3.553,1.566-8.348-2.123-10.664l-23.107-14.504c6.72-10.883,11.76-22.914,14.749-35.734l26.598,5.996 c4.246,0.961,8.309-1.773,9.026-6.068c0,0,2.34-7.945,2.34-27.387C310.554,135.838,308.122,127.396,308.122,127.396z  M155.278,191.256c-19.871,0-35.979-16.107-35.979-35.979c0-19.871,16.107-35.979,35.979-35.979s35.98,16.107,35.98,35.979 C191.258,175.148,175.15,191.256,155.278,191.256z"/><path style="fill:#333E48;" d="M155.278,96.115c-32.674,0-59.161,26.488-59.161,59.162s26.487,59.162,59.161,59.162 s59.162-26.488,59.162-59.162C214.441,122.604,187.952,96.115,155.278,96.115z M155.278,191.256 c-19.871,0-35.979-16.107-35.979-35.979c0-19.871,16.107-35.979,35.979-35.979s35.98,16.107,35.98,35.979 C191.258,175.148,175.15,191.256,155.278,191.256z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                            </svg>
                        </div>
                        <div class="ml-1 font-medium">Sigature</div>
                    </div>

                    <!-- croissant -->
                    <div class="cursor-pointer flex justify-center items-center py-2 bg-white shadow-md rounded-lg translate-y-2 hover:translate-y-0 duration-150">
                        <div class="p-2 bg-white rounded-full">
                            <svg class="w-6 h-6" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                <path style="fill:#FFB74D;" d="M161.535,338.55l-21.279,7.015c-3.895,1.662-16.187,12.292-25.174,20.055 c-6.259,5.408-12.694,10.966-19.186,16.31c-21.213,17.44-43.108,32.544-61.921,32.544c-3.737,0-7.351-0.598-10.807-1.887 c-11.854-4.4-19.131-15.31-21.652-32.414c-4.502-30.638,1.644-59.941,10.425-83.78v-0.009 c12.022-32.656,28.967-55.074,30.181-56.653l9.817-12.787L161.535,338.55z"/><path style="fill:#FF9A00;" d="M161.535,338.55l-21.279,7.015c-3.895,1.662-16.187,12.292-25.174,20.055 c-6.259,5.408-12.694,10.966-19.186,16.31l-83.957-85.536v-0.009c12.022-32.656,28.967-55.074,30.181-56.653l9.817-12.787 L161.535,338.55z"/><path style="fill:#FFB74D;" d="M214.245,320.971l-33.076,20.083l-6.688,4.064l-28.658,17.393L22.027,236.444l5.119-9.164 c1.14-2.046,19.653-34.524,55.766-60.501c18.653-13.423,42.016-25.109,70.104-29.957l6.81-1.177l10.313,9.518L214.245,320.971z"/><path style="fill:#FF9A00;" d="M214.245,320.971l-33.076,20.083l-6.688,4.064L82.91,166.779 c18.653-13.423,42.016-25.109,70.104-29.957l6.81-1.177l10.313,9.518L214.245,320.971z"/><g><path style="fill:#FFB74D;" d="M510.486,379.604c-2.522,17.113-9.799,28.023-21.652,32.423c-3.457,1.289-7.071,1.887-10.807,1.887 c-19.542,0-42.399-16.291-64.378-34.59c-5.66-4.699-11.265-9.537-16.73-14.264c-8.986-7.772-21.279-18.392-25.174-20.055 l-21.279-7.015l109.598-111.606l9.817,12.788c1.271,1.653,19.672,25.996,31.722,60.997 C509.533,323.185,514.718,350.806,510.486,379.604z"/><path style="fill:#FFB74D;" d="M489.46,236.444L365.655,362.511l-29.751-18.065l-38.662-23.474l44.108-175.808l10.312-9.518 l6.8,1.177c28.089,4.848,51.451,16.533,70.113,29.957c36.103,25.977,54.617,58.456,55.766,60.501L489.46,236.444z"/><path style="fill:#FFB74D;" d="M371.502,140.101L320.63,342.885H190.837l-50.88-202.784l5.091-5.558 c13.88-15.17,36.926-26.005,68.498-32.198c22.475-4.408,41.147-4.801,41.932-4.82H256c0.915,0.019,19.532,0.429,41.922,4.82 c31.573,6.193,54.617,17.029,68.498,32.198L371.502,140.101z"/></g><g><path style="fill:#FF9A00;" d="M371.502,140.101L320.63,342.885h-64.631V97.525c0.915,0.019,19.532,0.429,41.922,4.82 c31.573,6.193,54.617,17.029,68.498,32.198L371.502,140.101z"/><path style="fill:#FF9A00;" d="M489.46,236.444L365.655,362.511l-29.751-18.065l92.673-177.665 c36.103,25.977,54.617,58.456,55.766,60.501L489.46,236.444z"/><path style="fill:#FF9A00;" d="M510.486,379.604c-2.522,17.113-9.799,28.023-21.652,32.423c-3.457,1.289-7.071,1.887-10.807,1.887 c-19.542,0-42.399-16.291-64.378-34.59l87.955-79.156C509.533,323.185,514.718,350.806,510.486,379.604z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                            </svg>
                        </div>
                        <div class="ml-1 font-medium">Croissant</div>
                    </div>

                    <!-- waffle -->
                    <div class="cursor-pointer flex justify-center items-center py-2 bg-white shadow-md rounded-lg translate-y-2 hover:translate-y-0 duration-150">
                        <div class="p-2 bg-white rounded-full">
                            <svg class="w-6 h-6" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet"><ellipse fill="#939598" cx="18" cy="26" rx="18" ry="10"></ellipse><ellipse fill="#CCD6DD" cx="18" cy="24" rx="18" ry="10"></ellipse><path fill="#F4900C" d="M15.714 32.54L2.575 24.857c-1.262-.738-.929-3.558-.929-4.785l14.069-6.657c1.262-.738 3.308-.738 4.57 0L34.37 20.26c0 1.689.316 3.859-.947 4.597L20.285 32.54c-1.262.738-3.309.738-4.571 0z"></path><path fill="#FFAC33" d="M15.714 29.279L2.575 21.596c-1.262-.738-1.262-1.934 0-2.672l13.139-7.683c1.262-.738 3.308-.738 4.57 0l13.139 7.683c1.262.738 1.262 1.934 0 2.672l-13.139 7.683c-1.261.738-3.308.738-4.57 0z"></path><path d="M17.463 14.416l-1.61-.942c-.296-.173-.296-.454 0-.628l1.61-.942c.296-.173.777-.173 1.074 0l1.61.942c.296.173.296.454 0 .628l-1.61.942c-.297.174-.778.174-1.074 0zm3.757 2.197l-1.61-.942c-.296-.173-.296-.454 0-.628l1.61-.942c.296-.173.777-.173 1.074 0l1.61.942c.296.173.296.454 0 .628l-1.61.942c-.297.174-.777.174-1.074 0zm3.757 2.197l-1.61-.942c-.296-.173-.296-.454 0-.628l1.61-.942c.296-.173.777-.173 1.074 0l1.61.942c.296.173.296.454 0 .628l-1.61.942c-.297.174-.777.174-1.074 0zm3.758 2.198l-1.61-.942c-.296-.173-.296-.454 0-.628l1.61-.942c.296-.173.777-.173 1.074 0l1.61.942c.296.173.296.454 0 .628l-1.61.942c-.297.173-.778.173-1.074 0zm-15.03-4.395l-1.61-.942c-.296-.173-.296-.454 0-.628l1.61-.942c.296-.173.777-.173 1.074 0l1.61.942c.296.173.296.454 0 .628l-1.61.942c-.297.174-.777.174-1.074 0zm3.758 2.197l-1.61-.942c-.296-.173-.296-.454 0-.628l1.61-.942c.296-.173.777-.173 1.074 0l1.61.942c.296.173.296.454 0 .628l-1.61.942c-.297.174-.778.174-1.074 0zm3.757 2.198l-1.61-.942c-.296-.173-.296-.454 0-.628l1.61-.942c.296-.173.777-.173 1.074 0l1.61.942c.296.173.296.454 0 .628l-1.61.942c-.297.173-.777.173-1.074 0zm3.757 2.197l-1.61-.942c-.296-.173-.296-.454 0-.628l1.61-.942c.296-.173.777-.173 1.074 0l1.61.942c.296.173.296.454 0 .628l-1.61.942c-.297.173-.777.173-1.074 0zM9.948 18.81l-1.61-.942c-.296-.173-.296-.454 0-.628l1.61-.942c.296-.173.777-.173 1.074 0l1.61.942c.296.173.296.454 0 .628l-1.61.942c-.297.174-.778.174-1.074 0zm3.757 2.198l-1.61-.942c-.296-.173-.296-.454 0-.628l1.61-.942c.296-.173.777-.173 1.074 0l1.61.942c.296.173.296.454 0 .628l-1.61.942c-.297.173-.777.173-1.074 0zm3.758 2.197l-1.61-.942c-.296-.173-.296-.454 0-.628l1.61-.942c.296-.173.777-.173 1.074 0l1.61.942c.296.173.296.454 0 .628l-1.61.942c-.297.173-.778.173-1.074 0zm3.757 2.197l-1.61-.942c-.296-.173-.296-.454 0-.628l1.61-.942c.296-.173.777-.173 1.074 0l1.61.942c.296.173.296.454 0 .628l-1.61.942c-.297.173-.777.173-1.074 0zM6.191 21.008l-1.61-.942c-.296-.173-.296-.454 0-.628l1.61-.942c.296-.173.777-.173 1.074 0l1.61.942c.296.173.296.454 0 .628l-1.61.942c-.297.173-.778.173-1.074 0zm3.757 2.197l-1.61-.942c-.296-.173-.296-.454 0-.628l1.61-.942c.296-.173.777-.173 1.074 0l1.61.942c.296.173.296.454 0 .628l-1.61.942c-.297.173-.778.173-1.074 0zm3.757 2.197l-1.61-.942c-.296-.173-.296-.454 0-.628l1.61-.942c.296-.173.777-.173 1.074 0l1.61.942c.296.173.296.454 0 .628l-1.61.942c-.297.173-.777.173-1.074 0zm3.758 2.197l-1.61-.942c-.296-.173-.296-.454 0-.628l1.61-.942c.296-.173.777-.173 1.074 0l1.61.942c.296.173.296.454 0 .628l-1.61.942c-.297.173-.778.173-1.074 0z" fill="#F4900C"></path><path fill="#D3790D" d="M15.72 16.354c-3.406-1.039-4.841-.515-4.618 2.165c.058.693-.895 1.847-1.847 2.511c-2.215 1.544-1.263 4.124 2.54 2.222c1.905-.952 4.682-.887 8.052.144c2.828.866 4.589 2.05 4.82 3.32c1.122-.367 1.732-.847 2.28-1.309c-.233-.526-1.27-2.04-2.915-2.761c-3.112-1.365-.106-3.331 2.222-3.81c2.107-.433.029-2.02-3.175-1.963c-3.202.058-2.397.995-7.359-.519z"></path><path opacity=".5" fill="#D3790D" d="M24.668 26.542c0 .456.058.468.058 1.387c0 1.789 2.194 1.472 2.194-1.501c0-.346.029-1.021.029-1.021l-2.281 1.135z"></path><path fill="#FFAC33" d="M22.16 17.651c.46.262.461 1.863 0 2.125l-3.328 1.897c-.46.262-1.204.262-1.664 0l-3.329-1.897c-.46-.262-.46-1.863 0-2.125l3.329-.721c.46-.262 1.204-.262 1.664 0l3.328.721z"></path><path fill="#FFD983" d="M22.16 17.651c.46.262.461.686 0 .948l-3.328 1.897c-.46.262-1.204.262-1.664 0l-3.329-1.897c-.46-.262-.46-.686 0-.948l3.329-1.897c.46-.262 1.204-.262 1.664 0l3.328 1.897z"></path></svg>
                        </div>
                        <div class="ml-1 font-medium">Waffle</div>
                    </div>

                    <!-- coffee -->
                    <div class="cursor-pointer flex justify-center items-center py-2 bg-white shadow-md rounded-lg translate-y-2 hover:translate-y-0 duration-150">
                        <div class="p-2 bg-white rounded-full">
                            <svg class="w-6 h-6" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 340 340" style="enable-background:new 0 0 340 340;" xml:space="preserve"><g id="XMLID_18_"><polygon id="XMLID_138_" style="fill:#DEDDE0;" points="76.429,290 80,340 170,340 170,290 	"/><polygon id="XMLID_169_" style="fill:#DEDDE0;" points="170,80 61.429,80 65,130 170,130 	"/><polygon id="XMLID_197_" style="fill:#ACABB1;" points="170,290 170,340 260,340 263.571,290 	"/><polygon id="XMLID_221_" style="fill:#ACABB1;" points="170,80 170,130 275,130 278.571,80 	"/><path id="XMLID_222_" style="fill:#FFDA44;" d="M170,260c-22.091,0-40-22.386-40-50s17.909-50,40-50v-30H65H50l10,160h16.429H170 V260z"/>
                                <path id="XMLID_33_" style="fill:#FF9811;" d="M170,130v30c22.091,0,40,22.386,40,50s-17.909,50-40,50v30h93.571H280l10-160h-15 H170z"/><path id="XMLID_223_" style="fill:#50412E;" d="M210,210c0-27.614-17.909-50-40-50v100C192.091,260,210,237.614,210,210z"/><path id="XMLID_224_" style="fill:#786145;" d="M130,210c0,27.614,17.909,50,40,50V160C147.909,160,130,182.386,130,210z"/><polygon id="XMLID_225_" style="fill:#50412E;" points="278.571,80 300,80 300,40 260,40 260,0 80,0 80,40 40,40 40,80 61.429,80 170,80 	"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                            </svg>
                        </div>
                        <div class="ml-1 font-medium">Coffee</div>
                    </div>

                    <!-- ice cream -->
                    <div class="cursor-pointer flex justify-center items-center py-2 bg-white shadow-md rounded-lg translate-y-2 hover:translate-y-0 duration-150">
                        <div class="p-2 bg-white rounded-full">
                            <svg class="w-6 h-6" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 421.41 421.41" style="enable-background:new 0 0 421.41 421.41;" xml:space="preserve"><g>
                                <path style="fill:#FCEDCA;" d="M323.55,163.25c0,11.54-4.93,21.93-12.79,29.19c-7.08,6.52-16.52,10.5-26.9,10.5H137.55 c-10.38,0-19.82-3.98-26.89-10.5c-0.4-0.36-0.79-0.74-1.17-1.12c-7.19-7.19-11.63-17.11-11.63-28.07 c0-18.66,12.88-34.31,30.23-38.55c3.03-0.75,6.2-1.14,9.46-1.14h146.31c3.26,0,6.42,0.39,9.45,1.14 c7.17,1.74,13.57,5.43,18.62,10.48C319.11,142.37,323.55,152.29,323.55,163.25z"/><path style="fill:#FCEDCA;" d="M307.4,94.37c0,12.16-5.47,23.04-14.09,30.33c-6.91,5.84-15.84,9.36-25.6,9.36H153.7 c-9.76,0-18.69-3.52-25.61-9.36c-0.85-0.72-1.67-1.47-2.46-2.26c-7.18-7.19-11.62-17.11-11.62-28.07 c0-21.92,17.77-39.69,39.69-39.69h114.01c10.96,0,20.88,4.44,28.06,11.62C302.96,73.49,307.4,83.41,307.4,94.37z"/><path style="fill:#FCEDCA;" d="M263.09,54.68c0,12.71-4.34,24.41-11.62,33.7c-10,12.78-25.58,20.99-43.07,20.99 c-30.21,0-54.7-24.48-54.7-54.69h18.41v-0.02c21.84-0.42,39.42-18.24,39.42-40.18c0-5.11-0.96-9.99-2.7-14.48 C238.83,0.23,263.09,24.62,263.09,54.68z"/><polygon style="fill:#FFD41D;" points="308.542,193.807 302.97,284.05 282.29,301.74 139.13,301.74 118.44,284.05 113.3,230.74  111.76,214.74 114.083,193.099 	"/><path style="fill:#DDC89F;" d="M311.93,135.18c-5.05-5.05-11.45-8.74-18.62-10.48c8.62-7.29,14.09-18.17,14.09-30.33 c0-10.96-4.44-20.88-11.63-28.07c-7.18-7.18-17.1-11.62-28.06-11.62h-4.62c0-30.06-24.26-54.45-54.26-54.68 c22.944,17.769,20.671,32.849,14.29,42.643c-8.377,12.858-12.41,28.067-12.41,43.413V202.94h72.449 c21.994,0,40.551-17.994,40.39-39.987C323.47,152.111,319.045,142.305,311.93,135.18z"/><polygon style="fill:#FFA91F;" points="311.8,196.224 302.97,284.05 282.29,301.74 210.71,301.74 210.71,192.44 	"/><path style="fill:#FFD41D;" d="M284.8,284.05l-14.64,118.84c-1.31,10.58-10.29,18.52-20.94,18.52H172.2 c-10.66,0-19.64-7.94-20.94-18.52l-14.64-118.84H284.8z"/><polygon style="fill:#FFA91F;" points="302.97,284.05 282.29,301.74 139.13,301.74 118.44,284.05 	"/><path style="fill:#FFA91F;" d="M284.8,284.05l-14.64,118.84c-1.31,10.58-10.29,18.52-20.94,18.52h-38.51V284.05H284.8z"/><path style="fill:#DDC89F;" d="M307.4,94.37c0,12.16-5.47,23.04-14.09,30.33H128.09c-0.85-0.72-1.67-1.47-2.46-2.26 c-7.18-7.19-11.62-17.11-11.62-28.07H307.4z"/><path style="fill:#DDC89F;" d="M323.55,163.25c0,11.54-4.93,21.93-12.79,29.19l-198.496,1.399c-0.4-0.36-2.394-2.139-2.774-2.519 c-7.19-7.19-11.63-17.11-11.63-28.07H323.55z"/><path style="fill:#FFD41D;" d="M317.32,205.92v8.82H104.1v-8.82c0-8.06,6.53-14.6,14.59-14.6h184.03 C310.78,191.32,317.32,197.86,317.32,205.92z"/><path style="fill:#FFA91F;" d="M317.32,205.92v8.82H210.71v-23.42h92.01C310.78,191.32,317.32,197.86,317.32,205.92z"/><polygon style="fill:#FFA91F;" points="243.71,214.74 243.71,230.74 113.3,230.74 111.76,214.74 	"/><path style="fill:#FFFFFF;" d="M192.043,145.06h-13.334c-3.038,0-5.5-2.462-5.5-5.5s2.462-5.5,5.5-5.5h13.334 c3.038,0,5.5,2.462,5.5,5.5S195.081,145.06,192.043,145.06z"/><path style="fill:#FFFFFF;" d="M117.759,155.682c-1.039,0-2.089-0.294-3.022-0.908c-2.536-1.672-3.237-5.083-1.565-7.619 c4.053-6.149,10.236-10.502,17.411-12.255c2.247-0.556,4.596-0.84,6.967-0.84h20.66c3.038,0,5.5,2.462,5.5,5.5s-2.462,5.5-5.5,5.5 h-20.66c-1.482,0-2.942,0.176-4.341,0.521c-4.483,1.096-8.332,3.803-10.853,7.627C121.299,154.812,119.546,155.682,117.759,155.682 z"/><path style="fill:#FFFFFF;" d="M133.981,86.747c-1.05,0-2.111-0.3-3.05-0.927c-2.526-1.687-3.206-5.103-1.519-7.628 c5.441-8.147,14.521-13.011,24.288-13.011h28.342c3.038,0,5.5,2.462,5.5,5.5c0,3.038-2.462,5.5-5.5,5.5H153.7 c-6.084,0-11.745,3.036-15.141,8.121C137.499,85.888,135.756,86.747,133.981,86.747z"/><path style="fill:#FFA91F;" d="M210.71,402.89v18.52H172.2c-10.66,0-19.64-7.94-20.94-18.52H210.71z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                            </svg>
                        </div>
                        <div class="ml-1 font-medium">Ice Cream</div>
                    </div>
                </nav>

                <!-- foods -->
                <section>

                    <!-- foods container -->
                    <div id="food-items" class="cardContainer grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-12">

                        <!-- food 1 -->
                        <div class="cursor-pointer p-4 bg-white space-y-4 shadow-md rounded-xl outline outline-2 outline-[color:rgba(var(--ni-gray-400))] relative hover:scale-105 duration-150" data-value="food 1">

                            <!-- food 1: image -->
                            <div class="rounded-lg">
                                <img class="object-contain rounded-lg" src="https://i1.wp.com/www.bakingwithdan.com/wp-content/uploads/2021/03/almondcroissant.2-scaled.jpg" alt="Almond Brown Sugar Croissant">
                                <div class="pointer-events-none p-2 bg-white bg-opacity-75 absolute rounded-lg top-6 right-6">
                                    <svg class="w-6 h-6 text-[color:rgba(var(--ni-warning-500))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                </div>
                            </div>

                            <!-- food 1: title -->
                            <div class="font-medium text-xl">Almond Brown Sugar Croissant</div>

                            <!-- food 1: description -->
                            <div class="text-sm text-[color:rgba(var(--ni-gray-400))]">Sweet croissant with topping almonds and brown sugar</div>

                            <!-- food 1: price -->
                            <div class="font-medium">
                                <span class="text-2xl text-[color:rgba(var(--ni-danger-500))]">$12.98</span>
                                <span class="text-md text-[color:rgba(var(--ni-gray-400))]">/ 3 pcs</span>
                            </div>
                        </div>

                        <!-- food 2 -->
                        <div class="cursor-pointer p-4 bg-white space-y-4 shadow-md rounded-xl outline outline-2 outline-[color:rgba(var(--ni-gray-400))] relative hover:scale-105 duration-150" data-value="food 2">

                            <!-- food 2: image -->
                            <div class="rounded-lg">
                                <img class="object-contain rounded-lg" src="https://www.smoking-meat.com/image-files/smoked-pork-tenderloin-sliders-1000.jpg" alt="Smoke Tenderloin Slide Croissant">
                                <div class="pointer-events-none p-2 bg-white bg-opacity-75 absolute rounded-lg top-6 right-6">
                                    <svg class="w-6 h-6 text-[color:rgba(var(--ni-warning-500))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                </div>
                            </div>

                            <!-- food 2: title -->
                            <div class="font-medium text-xl">Smoke Tenderloin Slide Croissant</div>

                            <!-- food 2: description -->
                            <div class="text-sm text-[color:rgba(var(--ni-gray-400))]">Plain croissant witn smoke tenderloin beef slided with vegetable</div>

                            <!-- food 2: price -->
                            <div class="font-medium">
                                <span class="text-2xl text-[color:rgba(var(--ni-danger-500))]">$10.01</span>
                                <span class="text-md text-[color:rgba(var(--ni-gray-400))]">/ 2 pcs</span>
                            </div>
                        </div>

                        <!-- food 3 -->
                        <div class="cursor-pointer p-4 bg-white space-y-4 shadow-md rounded-xl outline outline-2 outline-[color:rgba(var(--ni-gray-400))] relative hover:scale-105 duration-150" data-value="food 3">

                            <!-- food 3: image -->
                            <div class="rounded-lg">
                                <img class="object-contain rounded-lg" src="https://www.thekitchenwhisperer.net/wp-content/uploads/2014/02/Croissant-Love1.jpg" alt="Berry Whipped Cream Croissant">
                                <div class="pointer-events-none p-2 bg-white bg-opacity-75 absolute rounded-lg top-6 right-6">
                                    <svg class="w-6 h-6 text-[color:rgba(var(--ni-warning-500))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                </div>
                            </div>

                            <!-- food 3: title -->
                            <div class="font-medium text-xl">Berry Whipped Cream Croissant</div>

                            <!-- food 3: description -->
                            <div class="text-sm text-[color:rgba(var(--ni-gray-400))]">Sweet croissant with blueberries and strawberries inside</div>

                            <!-- food 3: price -->
                            <div class="font-medium">
                                <span class="text-2xl text-[color:rgba(var(--ni-danger-500))]">$8.92</span>
                                <span class="text-md text-[color:rgba(var(--ni-gray-400))]">/ 3 pcs</span>
                            </div>
                        </div>

                        <!-- food 4 -->
                        <div class="cursor-pointer p-4 bg-white space-y-4 shadow-md rounded-xl outline outline-2 outline-[color:rgba(var(--ni-gray-400))] relative hover:scale-105 duration-150" data-value="food 4">

                            <!-- food 4: image -->
                            <div class="rounded-lg">
                                <img class="object-contain rounded-lg" src="https://www.washingtonpost.com/rf/image_1484w/2010-2019/WashingtonPost/2018/07/11/Food/Images/fd-studio17.JPG?t=20170517" alt="Sweet Granulated Sugar Croissant">
                                <div class="pointer-events-none p-2 bg-white bg-opacity-75 absolute rounded-lg top-6 right-6">
                                    <svg class="w-6 h-6 text-[color:rgba(var(--ni-warning-500))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                </div>
                            </div>

                            <!-- food 4: title -->
                            <div class="font-medium text-xl">Sweet Granulated Sugar Croissant</div>

                            <!-- food 4: description -->
                            <div class="text-sm text-[color:rgba(var(--ni-gray-400))]">Sweet croissant with granulated and brown sugar inside</div>

                            <!-- food 4: price -->
                            <div class="font-medium">
                                <span class="text-2xl text-[color:rgba(var(--ni-danger-500))]">$8.92</span>
                                <span class="text-md text-[color:rgba(var(--ni-gray-400))]">/ 3 pcs</span>
                            </div>
                        </div>

                        <!-- food 5 -->
                        <div class="cursor-pointer p-4 bg-white space-y-4 shadow-md rounded-xl outline outline-2 outline-[color:rgba(var(--ni-gray-400))] relative hover:scale-105 duration-150" data-value="food 5">

                            <!-- food 5: image -->
                            <div class="rounded-lg">
                                <img class="object-contain rounded-lg" src="https://www.365daysofbakingandmore.com/wp-content/uploads/2017/01/Chocolate-Croissant-Baked-French-Toast-TOP-2.jpg" alt="Sweet Chocolate Chocochips Croissant">
                                <div class="pointer-events-none p-2 bg-white bg-opacity-75 absolute rounded-lg top-6 right-6">
                                    <svg class="w-6 h-6 text-[color:rgba(var(--ni-warning-500))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                </div>
                            </div>

                            <!-- food 5: title -->
                            <div class="font-medium text-xl">Sweet Chocolate Chocochips Croissant</div>

                            <!-- food 5: description -->
                            <div class="text-sm text-[color:rgba(var(--ni-gray-400))]">Sweet croissant with Chocolate and Chocochips inside</div>

                            <!-- food 5: price -->
                            <div class="font-medium">
                                <span class="text-2xl text-[color:rgba(var(--ni-danger-500))]">$8.92</span>
                                <span class="text-md text-[color:rgba(var(--ni-gray-400))]">/ 3 pcs</span>
                            </div>
                        </div>

                        <!-- food 6 -->
                        <div class="cursor-pointer p-4 bg-white space-y-4 shadow-md rounded-xl outline outline-2 outline-[color:rgba(var(--ni-gray-400))] relative hover:scale-105 duration-150" data-value="food 6">

                            <!-- food 6: image -->
                            <div class="rounded-lg">
                                <img class="object-contain rounded-lg" src="https://img.delicious.com.au/RzgR3kXD/w1200/del/2015/12/cornetti-italian-croissants-24713-1.jpg" alt="Basic Croissant La Ta Dhore">
                                <div class="pointer-events-none p-2 bg-white bg-opacity-75 absolute rounded-lg top-6 right-6">
                                    <svg class="w-6 h-6 text-[color:rgba(var(--ni-warning-500))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                </div>
                            </div>

                            <!-- food 6: title -->
                            <div class="font-medium text-xl">Basic Croissant La Ta Dhore Croissant</div>

                            <!-- food 6: description -->
                            <div class="text-sm text-[color:rgba(var(--ni-gray-400))]">Sweet croissant with blueberries and strawberries inside</div>

                            <!-- food 6: price -->
                            <div class="font-medium">
                                <span class="text-2xl text-[color:rgba(var(--ni-danger-500))]">$8.92</span>
                                <span class="text-md text-[color:rgba(var(--ni-gray-400))]">/ 3 pcs</span>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- right side -->
            <div id="right-side" class="w-full lg:w-[35%] p-5 space-y-10 bg-white shadow-md rounded-md sticky top-0 hidden">

                <!-- x -->
                <div id="cancel-order" class="flex">
                    <div class="font-medium text-2xl">Current Order</div>
                    <button class="ml-auto hover:text-[color:rgba(var(--ni-danger-500))] duration-150">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>

                <!-- order lists -->
                <ul id="order-items" class="flex flex-col space-y-3"></ul>

                <!-- total -->
                <div class="">
                    <!-- subtotal -->
                    <div class="p-5 space-y-1 bg-[color:rgba(var(--ni-gray-50))] border border-[color:rgba(var(--ni-gray-100))] rounded-3xl">
                        <div class="flex text-sm">
                            <div class="font-medium text-[color:rgba(var(--ni-gray-400))]">Subtotal</div>
                            <div class="ml-auto font-bold text-[color:rgba(var(--ni-gray-800))]">$50.00</div>
                        </div>
                        <div class="flex text-sm">
                            <div class="font-medium text-[color:rgba(var(--ni-gray-400))]">Discount sales</div>
                            <div class="ml-auto font-bold text-[color:rgba(var(--ni-gray-800))]">$45.00</div>
                        </div>
                        <div class="flex text-sm">
                            <div class="font-medium text-[color:rgba(var(--ni-gray-400))]">Total sales tax</div>
                            <div class="ml-auto font-bold text-[color:rgba(var(--ni-gray-800))]">$5.00</div>
                        </div>
                    </div>

                    <!-- dashed line -->
                    <div class="border-b-2 border-dashed border-[color:rgba(var(--ni-gray-300))] mx-5"></div>

                    <!-- total price -->
                    <div class="p-5 bg-[color:rgba(var(--ni-gray-50))] border border-[color:rgba(var(--ni-gray-100))] rounded-3xl">
                        <div class="flex font-bold text-xl text-[color:rgba(var(--ni-gray-800))]">
                            <div class="">Total</div>
                            <div class="ml-auto">$100.00</div>
                        </div>
                    </div>
                </div>

                <!-- print bills button -->
                <div class="">
                    <button class="w-full text-white py-3 bg-[color:rgba(var(--ni-danger-500))] hover:bg-[color:rgba(var(--ni-danger-300))] rounded-xl duration-300">Continue to Payment</button>
                </div>

            </div>
        </div>
    </div> 
</div>

@endsection

@section('internalScript')

<script>

    // POS Food Order with outline function
    const posFoodOrderWithOutline = () => {

        const leftSide  = $("#left-side");
        const rightSide = $("#right-side");
        
        const header    = $("#header");
        const foodItems = $("#food-items");
        const foodOrders = $("#order-items");

        const girdsFoodItemsDefault    = ("lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5");
        const gridsFoodItemsResponsive = ("md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3");
        
        // left side & right function
        const sidesPopUp = () => {

            if ( rightSide.hasClass("hidden") ) {

                leftSide.removeClass("lg:w-[65%]");
                header.addClass("md:mx-40");

                foodItems.removeClass(gridsFoodItemsResponsive);
                foodItems.addClass(girdsFoodItemsDefault);

            } else {

                leftSide.addClass("lg:w-[65%]");
                header.removeClass("md:mx-40");

                foodItems.removeClass(gridsFoodItemsResponsive);    
                foodItems.addClass(girdsFoodItemsDefault);

            }

        }

        // onclick food items
        const foodItemsOrder = () => {

            const eachFoods  = $("#food-items div");
            const closeOrder = $("#right-side #cancel-order button");
            const eachFoodOrders = $("#order-items div");

            const foods = {
                firstFood  : (`
                                <!-- food order 1 -->
                                <li class="flex" data-food="1">
                                    <div class="flex-none rounded-md">
                                        <img class="w-20 h-20 object-cover rounded-md" src="https://i1.wp.com/www.bakingwithdan.com/wp-content/uploads/2021/03/almondcroissant.2-scaled.jpg" alt="Almond Brown Sugar Croissant">
                                    </div>

                                    <div class="w-full space-y-3 ml-2 my-auto">
                                        <div class="flex">
                                            <div class="font-medium text-sm 2xl:text-lg">Almond Brown Sugar Croissant</div>
                                            <div class="cursor-pointer ml-auto p-1 hover:bg-[color:rgba(var(--ni-gray-200))] rounded-full duration-150">
                                                <svg class="w-5 h-5" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                    <path style="fill:#78B9EB;" d="M331.636,110.545H180.364V0h151.273V110.545z M215.273,75.636h81.455V34.909h-81.455V75.636z"/><rect x="87.273" y="162.909" style="fill:#C9E3F7;" width="337.455" height="349.091"/><rect x="256" y="162.909" style="fill:#78B9EB;" width="168.727" height="349.091"/><rect x="52.364" y="69.818" style="fill:#FFC170;" width="407.273" height="128"/><rect x="256" y="69.818" style="fill:#FF9811;" width="203.636" height="128"/><g><rect x="168.727" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/><rect x="308.364" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/><rect x="238.545" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                </svg>
                                            </div>
                                        </div>

                                        <div class="flex">
                                            <div class="font-medium text-[color:rgba(var(--ni-danger-500))]">$12.98</div>
                                            <div class="flex space-x-2 xl:space-x-3 2xl:space-4 ml-auto my-auto">
                                                <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-danger-500))] hover:bg-[color:rgba(var(--ni-danger-300))] text-white rounded-md duration-150">-</button>
                                                <input type="text" class="text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                                <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-danger-500))] hover:bg-[color:rgba(var(--ni-danger-300))] text-white rounded-md duration-150">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            `),

                secondFood : (`
                                <!-- food order 2 -->
                                <li class="flex" data-food="2"> 
                                    <div class="flex-none rounded-md">
                                        <img class="w-20 h-20 object-cover rounded-md" src="https://www.smoking-meat.com/image-files/smoked-pork-tenderloin-sliders-1000.jpg" alt="Smoke Tenderloin Slide Croissant">
                                    </div>

                                    <div class="w-full space-y-3 ml-2 my-auto">
                                        <div class="flex">
                                            <div class="font-medium text-sm 2xl:text-lg">Almond Brown Sugar Croissant</div>
                                            <div class="cursor-pointer ml-auto p-1 hover:bg-[color:rgba(var(--ni-gray-200))] rounded-full duration-150">
                                                <svg class="w-5 h-5" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                    <path style="fill:#78B9EB;" d="M331.636,110.545H180.364V0h151.273V110.545z M215.273,75.636h81.455V34.909h-81.455V75.636z"/><rect x="87.273" y="162.909" style="fill:#C9E3F7;" width="337.455" height="349.091"/><rect x="256" y="162.909" style="fill:#78B9EB;" width="168.727" height="349.091"/><rect x="52.364" y="69.818" style="fill:#FFC170;" width="407.273" height="128"/><rect x="256" y="69.818" style="fill:#FF9811;" width="203.636" height="128"/><g><rect x="168.727" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/><rect x="308.364" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/><rect x="238.545" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                </svg>
                                            </div>
                                        </div>
                                        
                                        <div class="flex">
                                            <div class="font-medium text-[color:rgba(var(--ni-danger-500))]">$12.98</div>
                                            <div class="flex space-x-2 xl:space-x-3 2xl:space-4 ml-auto my-auto">
                                                <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-danger-500))] hover:bg-[color:rgba(var(--ni-danger-300))] text-white rounded-md duration-150">-</button>
                                                <input type="text" class="text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                                <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-danger-500))] hover:bg-[color:rgba(var(--ni-danger-300))] text-white rounded-md duration-150">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            `),

                thirdFood  : (`
                                <!-- food order 2 -->
                                <li class="flex" data-food="3">
                                    <div class="flex-none rounded-md">
                                        <img class="w-20 h-20 object-cover rounded-md" src="https://www.thekitchenwhisperer.net/wp-content/uploads/2014/02/Croissant-Love1.jpg" alt="Berry Whipped Cream Croissant">
                                    </div>

                                    <div class="w-full space-y-3 ml-2 my-auto">
                                        <div class="flex">
                                            <div class="font-medium text-sm 2xl:text-lg">Berry Whipped Cream Croissant</div>
                                            <div class="cursor-pointer ml-auto p-1 hover:bg-[color:rgba(var(--ni-gray-200))] rounded-full duration-150">
                                                <svg class="w-5 h-5" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                    <path style="fill:#78B9EB;" d="M331.636,110.545H180.364V0h151.273V110.545z M215.273,75.636h81.455V34.909h-81.455V75.636z"/><rect x="87.273" y="162.909" style="fill:#C9E3F7;" width="337.455" height="349.091"/><rect x="256" y="162.909" style="fill:#78B9EB;" width="168.727" height="349.091"/><rect x="52.364" y="69.818" style="fill:#FFC170;" width="407.273" height="128"/><rect x="256" y="69.818" style="fill:#FF9811;" width="203.636" height="128"/><g><rect x="168.727" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/><rect x="308.364" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/><rect x="238.545" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                </svg>
                                            </div>
                                        </div>
                                        
                                        <div class="flex">
                                            <div class="font-medium text-[color:rgba(var(--ni-danger-500))]">$8.92</div>
                                            <div class="flex space-x-2 xl:space-x-3 2xl:space-4 ml-auto my-auto">
                                                <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-danger-500))] hover:bg-[color:rgba(var(--ni-danger-300))] text-white rounded-md duration-150">-</button>
                                                <input type="text" class="text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                                <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-danger-500))] hover:bg-[color:rgba(var(--ni-danger-300))] text-white rounded-md duration-150">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            `),

                fouthFood  : (`
                                <!-- food order 2 -->
                                <li class="flex" data-food="4">
                                    <div class="flex-none rounded-md">
                                        <img class="w-20 h-20 object-cover rounded-md" src="https://www.washingtonpost.com/rf/image_1484w/2010-2019/WashingtonPost/2018/07/11/Food/Images/fd-studio17.JPG?t=20170517" alt="Sweet Granulated Sugar Croissant">
                                    </div>

                                    <div class="w-full space-y-3 ml-2 my-auto">
                                        <div class="flex">
                                            <div class="font-medium text-sm 2xl:text-lg">Sweet Granulated Sugar Croissant</div>
                                            <div class="cursor-pointer ml-auto p-1 hover:bg-[color:rgba(var(--ni-gray-200))] rounded-full duration-150">
                                                <svg class="w-5 h-5" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                    <path style="fill:#78B9EB;" d="M331.636,110.545H180.364V0h151.273V110.545z M215.273,75.636h81.455V34.909h-81.455V75.636z"/><rect x="87.273" y="162.909" style="fill:#C9E3F7;" width="337.455" height="349.091"/><rect x="256" y="162.909" style="fill:#78B9EB;" width="168.727" height="349.091"/><rect x="52.364" y="69.818" style="fill:#FFC170;" width="407.273" height="128"/><rect x="256" y="69.818" style="fill:#FF9811;" width="203.636" height="128"/><g><rect x="168.727" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/><rect x="308.364" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/><rect x="238.545" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                </svg>
                                            </div>
                                        </div>
                                        
                                        <div class="flex">
                                            <div class="font-medium text-[color:rgba(var(--ni-danger-500))]">$8.92</div>
                                            <div class="flex space-x-2 xl:space-x-3 2xl:space-4 ml-auto my-auto">
                                                <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-danger-500))] hover:bg-[color:rgba(var(--ni-danger-300))] text-white rounded-md duration-150">-</button>
                                                <input type="text" class="text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                                <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-danger-500))] hover:bg-[color:rgba(var(--ni-danger-300))] text-white rounded-md duration-150">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            `),

                fifthFood  : (`
                                <!-- food order 2 -->
                                <li class="flex" data-food="5">
                                    <div class="flex-none rounded-md">
                                        <img class="w-20 h-20 object-cover rounded-md" src="https://www.365daysofbakingandmore.com/wp-content/uploads/2017/01/Chocolate-Croissant-Baked-French-Toast-TOP-2.jpg" alt="Sweet Chocolate Chocochips Croissant">
                                    </div>

                                    <div class="w-full space-y-3 ml-2 my-auto">
                                        <div class="flex">
                                            <div class="font-medium text-sm 2xl:text-lg">Sweet Chocolate Chocochips Croissant</div>
                                            <div class="cursor-pointer ml-auto p-1 hover:bg-[color:rgba(var(--ni-gray-200))] rounded-full duration-150">
                                                <svg class="w-5 h-5" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                    <path style="fill:#78B9EB;" d="M331.636,110.545H180.364V0h151.273V110.545z M215.273,75.636h81.455V34.909h-81.455V75.636z"/><rect x="87.273" y="162.909" style="fill:#C9E3F7;" width="337.455" height="349.091"/><rect x="256" y="162.909" style="fill:#78B9EB;" width="168.727" height="349.091"/><rect x="52.364" y="69.818" style="fill:#FFC170;" width="407.273" height="128"/><rect x="256" y="69.818" style="fill:#FF9811;" width="203.636" height="128"/><g><rect x="168.727" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/><rect x="308.364" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/><rect x="238.545" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                </svg>
                                            </div>
                                        </div>
                                        
                                        <div class="flex">
                                            <div class="font-medium text-[color:rgba(var(--ni-danger-500))]">$8.92</div>
                                            <div class="flex space-x-2 xl:space-x-3 2xl:space-4 ml-auto my-auto">
                                                <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-danger-500))] hover:bg-[color:rgba(var(--ni-danger-300))] text-white rounded-md duration-150">-</button>
                                                <input type="text" class="text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                                <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-danger-500))] hover:bg-[color:rgba(var(--ni-danger-300))] text-white rounded-md duration-150">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            `),

                sixthFood  : (`
                                <!-- food order 2 -->
                                <li class="flex" data-food="6">
                                    <div class="flex-none rounded-md">
                                        <img class="w-20 h-20 object-cover rounded-md" src="https://img.delicious.com.au/RzgR3kXD/w1200/del/2015/12/cornetti-italian-croissants-24713-1.jpg" alt="Basic Croissant La Ta Dhore">
                                    </div>

                                    <div class="w-full space-y-3 ml-2 my-auto">
                                        <div class="flex">
                                            <div class="font-medium text-sm 2xl:text-lg">Basic Croissant La Ta Dhore</div>
                                            <div class="cursor-pointer ml-auto p-1 hover:bg-[color:rgba(var(--ni-gray-200))] rounded-full duration-150">
                                                <svg class="w-5 h-5" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                    <path style="fill:#78B9EB;" d="M331.636,110.545H180.364V0h151.273V110.545z M215.273,75.636h81.455V34.909h-81.455V75.636z"/><rect x="87.273" y="162.909" style="fill:#C9E3F7;" width="337.455" height="349.091"/><rect x="256" y="162.909" style="fill:#78B9EB;" width="168.727" height="349.091"/><rect x="52.364" y="69.818" style="fill:#FFC170;" width="407.273" height="128"/><rect x="256" y="69.818" style="fill:#FF9811;" width="203.636" height="128"/><g><rect x="168.727" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/><rect x="308.364" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/><rect x="238.545" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                </svg>
                                            </div>
                                        </div>
                                        
                                        <div class="flex">
                                            <div class="font-medium text-[color:rgba(var(--ni-danger-500))]">$8.92</div>
                                            <div class="flex space-x-2 xl:space-x-3 2xl:space-4 ml-auto my-auto">
                                                <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-danger-500))] hover:bg-[color:rgba(var(--ni-danger-300))] text-white rounded-md duration-150">-</button>
                                                <input type="text" class="text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                                <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-danger-500))] hover:bg-[color:rgba(var(--ni-danger-300))] text-white rounded-md duration-150">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            `)
            }

            // each food onclick
            eachFoods.each(function(i, element) {

                $(this).click(function() {

                    rightSide.removeClass("hidden");

                    leftSide.addClass("lg:w-[65%]");
                    header.removeClass("md:mx-40");

                    foodItems.removeClass(girdsFoodItemsDefault);
                    foodItems.addClass(gridsFoodItemsResponsive);

                    // append food to order lists
                    if (i == 0) {
                        foodOrders.append(foods.firstFood);
                    }
                    
                    if ( i == 6 ) {
                        foodOrders.append(foods.secondFood);
                    }

                    if ( i == 12 ) {
                        foodOrders.append(foods.thirdFood);
                    }

                    if ( i == 18 ) {
                        foodOrders.append(foods.fouthFood);
                    }

                    if ( i == 24 ) {
                        foodOrders.append(foods.fifthFood);
                    }

                    if ( i == 30 ) {
                        foodOrders.append(foods.sixthFood);
                    }

                });
            });

            // x button to cancel order
            closeOrder.click(function() {

                rightSide.addClass("hidden");

                leftSide.removeClass("lg:w-[65%]");
                header.addClass("md:mx-40");

                foodItems.removeClass(gridsFoodItemsResponsive);
                foodItems.addClass(girdsFoodItemsDefault);
                
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
        addSubQuantity();

    }

    // call function
    posFoodOrderWithOutline();

</script>

@endsection