@extends('master')
@section('content')

{{-- <div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div> --}}

<!-- Design Footer with login for Admin page -->

<!-- main -->
<div class="mainCard">
    <div id="page-appearance" class="bg-[color:rgba(var(--ni-gray-100))] dark:bg-[color:rgba(var(--ni-gray-50))] p-5 rounded-lg">
        <div class="select-none flex flex-col h-screen justify-center items-center space-y-10">

            <!-- footer -->
            <footer class="divide-y divide-[color:rgba(var(--ni-gray-200))] dark:divide-[color:rgba(var(--ni-gray-500))] w-full bg-white dark:bg-[color:rgba(var(--ni-gray-700))] shadow-lg rounded-xl">

                <!-- above items -->
                <div class="p-5">
                    <div class="flex flex-col 2xl:flex-row justify-center sm:justify-items-stretch items-center sm:items-stretch">

                        <!-- image small screen -->
                        <div class="select-none flex justify-center items-center 2xl:hidden mb-5">
                            <img class="w-32 object-contain" src="https://www.turbotech.com/storages/assets/img/system/turbotech.png" alt="TURBOTECH">
                        </div>

                        <!-- search bar -->
                        <div class="relative w-48 sm:w-full 2xl:w-96 mr-0 2xl:mr-3 border border-[color:rgba(var(--ni-primary-400))] dark:bg-[color:rgba(var(--ni-gray-100))] text-[color:rgba(var(--ni-gray-400))] rounded-md">
                            <svg id="search-icon" class="pointer-events-none absolute top-3 left-4 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                            </svg>
                            <input id="search" class="select-none w-48 sm:w-96 h-11 border-0 bg-transparent pl-11 pr-4 outline-none text-[color:rgba(var(--ni-primary-500))] dark:text-[color:rgba(var(--ni-gray-600))] placeholder-[color:rgba(var(--ni-gray-500))] dark:placeholder-[color:rgba(var(--ni-gray-600))] focus:ring-0 text-sm" type="search" placeholder="Enter an product, service, tool..." data-search>
                        </div>

                        <!-- dropdown & buttons -->
                        <div class="select-none flex flex-col lg:flex-row justify-center items-center">

                            <!-- dropdowns -->
                            <div id="dropdown" class="flex flex-col sm:flex-row justify-start sm:justify-center 2xl:justify-start items-start sm:items-center 2xl:items-start space-x-0 sm:space-x-3 space-y-3 sm:space-y-0 mr-0 lg:mr-3 mt-3 2xl:mt-0 text-[color:rgba(var(--ni-gray-500))]">

                                <!-- all systems -->
                                <div class="dropdown inline-block relative my-auto">
                                    <button class="inline-flex justify-center items-center w-48 sm:w-32 h-12 border border-[color:rgba(var(--ni-primary-400))] dark:bg-[color:rgba(var(--ni-gray-500))] hover:bg-[color:rgba(var(--ni-primary-400))] dark:text-[color:rgba(var(--ni-gray-100))] hover:text-white rounded-md duration-200">
                                        <span class="text-sm mr-1">All Systems</span>
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                                    </button>
                                    <ul id="systems-dropdown" class="dropdown-menu z-30 absolute w-48 sm:w-52 md:w-80 divide-y divide-[color:rgba(var(--ni-gray-200))] border border-[color:rgba(var(--ni-gray-200))] dark:border-[color:rgba(var(--ni-gray-200))] bg-white text-sm text-[color:rgba(var(--ni-gray-500))] dark:text-[color:rgba(var(--ni-gray-600))]" data-dropdown></ul>
                                </div>

                                <!-- all products -->
                                <div class="dropdown inline-block relative my-auto">
                                    <button class="inline-flex justify-center items-center w-48 sm:w-32 h-12 border border-[color:rgba(var(--ni-primary-400))] dark:bg-[color:rgba(var(--ni-gray-500))] hover:bg-[color:rgba(var(--ni-primary-400))] dark:text-[color:rgba(var(--ni-gray-100))] hover:text-white rounded-md duration-200">
                                        <span class="text-sm mr-1">All Products</span>
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                                    </button>
                                    <ul id="products-dropdown" class="dropdown-menu z-30 absolute w-48 sm:w-52 md:w-80 divide-y divide-[color:rgba(var(--ni-gray-200))] border border-[color:rgba(var(--ni-gray-200))] dark:border-[color:rgba(var(--ni-gray-200))] bg-white text-sm text-[color:rgba(var(--ni-gray-500))] dark:text-[color:rgba(var(--ni-gray-600))]" data-dropdown></ul>
                                </div>

                                <!-- all services -->
                                <div class="dropdown inline-block relative my-auto">
                                    <button class="inline-flex justify-center items-center w-48 sm:w-32 h-12 border border-[color:rgba(var(--ni-primary-400))] dark:bg-[color:rgba(var(--ni-gray-500))] hover:bg-[color:rgba(var(--ni-primary-400))] dark:text-[color:rgba(var(--ni-gray-100))] hover:text-white rounded-md duration-200">
                                        <span class="text-sm mr-1">All Services</span>
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                                    </button>
                                    <ul id="services-dropdown" class="dropdown-menu z-30 absolute w-48 sm:w-52 md:w-80 divide-y divide-[color:rgba(var(--ni-gray-200))] border border-[color:rgba(var(--ni-gray-200))] dark:border-[color:rgba(var(--ni-gray-200))] bg-white text-sm text-[color:rgba(var(--ni-gray-500))] dark:text-[color:rgba(var(--ni-gray-600))]" data-dropdown></ul>
                                </div>
                            </div>

                            <!-- buttons -->
                            <div class="flex flex-col sm:flex-row justify-center 2xl:justify-start items-center 2xl:items-start space-x-0 sm:space-x-3 space-y-3 sm:space-y-0 ml-0 lg:ml-auto mr-0 2xl:mr-3 mt-3 2xl:mt-0 text-sm text-[color:rgba(var(--ni-gray-500))]">
                                <button class="flex justify-center items-center w-48 sm:w-32 lg:w-28 xl:w-32 h-12 bg-[color:rgba(var(--ni-primary-400))] hover:bg-[color:rgba(var(--ni-primary-300))] text-white rounded-lg duration-300">
                                    <div class="p-1 bg-white rounded-full">
                                        <svg class="w-4 h-4 my-auto" viewBox="0 0 32 32" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink"><g transform="matrix(1,0,0,1,-96,-288)"><path d="M115,294.459C116.414,294.903 117.693,295.654 118.76,296.633C118.76,296.633 119.362,296.286 120.026,295.902C120.983,295.35 122.206,295.677 122.758,296.634C123.08,297.191 123.437,297.809 123.758,298.366C124.311,299.323 123.983,300.546 123.026,301.098C122.363,301.481 121.763,301.827 121.763,301.827C121.918,302.527 122,303.254 122,304C122,304.746 121.918,305.473 121.763,306.173C121.763,306.173 122.363,306.519 123.026,306.902C123.486,307.167 123.821,307.604 123.958,308.116C124.095,308.629 124.024,309.175 123.758,309.634C123.437,310.191 123.08,310.809 122.758,311.366C122.206,312.323 120.983,312.65 120.026,312.098C119.362,311.714 118.76,311.367 118.76,311.367C117.693,312.346 116.414,313.097 115,313.541L115,315C115,316.105 114.105,317 113,317C112.356,317 111.644,317 111,317C109.895,317 109,316.105 109,315C109,314.234 109,313.541 109,313.541C107.586,313.097 106.307,312.346 105.24,311.367C105.24,311.367 104.638,311.714 103.974,312.098C103.017,312.65 101.794,312.323 101.242,311.366C100.92,310.809 100.563,310.191 100.242,309.634C99.689,308.677 100.017,307.454 100.974,306.902C101.637,306.519 102.237,306.173 102.237,306.173C102.082,305.473 102,304.746 102,304C102,303.254 102.082,302.527 102.237,301.827C102.237,301.827 101.637,301.481 100.974,301.098C100.514,300.833 100.179,300.396 100.042,299.884C99.905,299.371 99.976,298.825 100.242,298.366C100.563,297.809 100.92,297.191 101.242,296.634C101.794,295.677 103.017,295.35 103.974,295.902C104.638,296.286 105.24,296.633 105.24,296.633C106.307,295.654 107.586,294.903 109,294.459L109,293C109,291.895 109.895,291 111,291C111.644,291 112.356,291 113,291C114.105,291 115,291.895 115,293C115,293.766 115,294.459 115,294.459Z" style="fill: #67E8F9;"/><path d="M116,293.751L116,293C116,291.343 114.657,290 113,290L111,290C109.343,290 108,291.343 108,293L108,293.751C106.956,294.16 105.989,294.723 105.127,295.413C105.127,295.413 104.474,295.036 104.474,295.036C103.039,294.207 101.204,294.699 100.376,296.134L99.376,297.866C98.978,298.555 98.87,299.374 99.076,300.142C99.282,300.911 99.785,301.566 100.474,301.964C100.474,301.964 101.125,302.34 101.125,302.34C101.043,302.881 101,303.436 101,304C101,304.564 101.043,305.119 101.125,305.66C101.125,305.66 100.474,306.036 100.474,306.036C99.039,306.864 98.547,308.699 99.376,310.134L100.376,311.866C101.204,313.301 103.039,313.793 104.474,312.964C104.474,312.964 105.127,312.587 105.127,312.587C105.989,313.277 106.956,313.841 108,314.249C108,314.249 108,315 108,315C108,316.657 109.343,318 111,318L113,318C114.657,318 116,316.657 116,315L116,314.249C117.044,313.84 118.011,313.277 118.873,312.587C118.873,312.587 119.526,312.964 119.526,312.964C120.961,313.793 122.796,313.301 123.624,311.866L124.624,310.134C125.022,309.445 125.13,308.626 124.924,307.858C124.718,307.089 124.215,306.434 123.526,306.036C123.526,306.036 122.875,305.66 122.875,305.66C122.957,305.119 123,304.564 123,304C123,303.436 122.957,302.881 122.875,302.34C122.875,302.34 123.526,301.964 123.526,301.964C124.961,301.136 125.453,299.301 124.624,297.866L123.624,296.134C122.796,294.699 120.961,294.207 119.526,295.036C119.526,295.036 118.873,295.413 118.873,295.413C118.012,294.723 117.045,294.159 116,293.751ZM114,294.459C114,294.895 114.283,295.282 114.7,295.413C115.973,295.813 117.123,296.488 118.083,297.37C118.405,297.665 118.881,297.718 119.26,297.499L120.526,296.768C121.005,296.492 121.616,296.656 121.892,297.134C121.892,297.134 122.892,298.866 122.892,298.866C123.168,299.344 123.005,299.956 122.526,300.232L121.263,300.961C120.885,301.18 120.692,301.618 120.787,302.044C120.926,302.674 121,303.328 121,304C121,304.672 120.926,305.326 120.787,305.956C120.692,306.382 120.885,306.82 121.263,307.039L122.526,307.768C122.756,307.901 122.924,308.119 122.992,308.375C123.061,308.631 123.025,308.904 122.892,309.134C122.892,309.134 121.892,310.866 121.892,310.866C121.616,311.344 121.005,311.508 120.526,311.232C119.862,310.848 119.26,310.501 119.26,310.501C118.881,310.282 118.405,310.335 118.083,310.63C117.123,311.511 115.972,312.187 114.7,312.588C114.283,312.719 114,313.105 114,313.541L114,315C114,315.552 113.552,316 113,316C113,316 111,316 111,316C110.448,316 110,315.552 110,315C110,314.234 110,313.541 110,313.541C110,313.105 109.717,312.718 109.3,312.587C108.027,312.187 106.877,311.512 105.917,310.63C105.595,310.335 105.119,310.282 104.74,310.501L103.474,311.232C102.995,311.508 102.384,311.344 102.108,310.866C102.108,310.866 101.108,309.134 101.108,309.134C100.832,308.656 100.995,308.044 101.474,307.768L102.737,307.039C103.115,306.82 103.308,306.382 103.213,305.956C103.074,305.326 103,304.672 103,304C103,303.328 103.074,302.674 103.213,302.044C103.308,301.618 103.115,301.18 102.737,300.961L101.474,300.232C101.244,300.099 101.076,299.881 101.008,299.625C100.939,299.369 100.975,299.096 101.108,298.866C101.108,298.866 102.108,297.134 102.108,297.134C102.384,296.656 102.995,296.492 103.474,296.768C104.138,297.152 104.74,297.499 104.74,297.499C105.119,297.718 105.595,297.665 105.917,297.37C106.877,296.489 108.028,295.813 109.3,295.412C109.717,295.281 110,294.895 110,294.459L110,293C110,292.448 110.448,292 111,292C111,292 113,292 113,292C113.552,292 114,292.448 114,293C114,293.766 114,294.459 114,294.459ZM112,298C108.689,298 106,300.689 106,304C106,307.311 108.689,310 112,310C115.311,310 118,307.311 118,304C118,300.689 115.311,298 112,298ZM112,300C114.208,300 116,301.792 116,304C116,306.208 114.208,308 112,308C109.792,308 108,306.208 108,304C108,301.792 109.792,300 112,300Z" style="fill:#0EA5E9"/></g></svg>
                                    </div>
                                    <div class="ml-1">Advanced</div>
                                </button>
                                <button class="flex justify-center items-center w-48 sm:w-32 lg:w-28 xl:w-32 h-12 bg-[color:rgba(var(--ni-danger-400))] hover:bg-[color:rgba(var(--ni-danger-300))] text-white rounded-lg duration-300">
                                    <div class="">Search</div>
                                </button>
                            </div>
                        </div>

                        <!-- image large screen -->
                        <div class="select-none ml-auto hidden 2xl:block">
                            <img class="w-20 object-contain" src="https://www.turbotech.com/storages/assets/img/system/turbotech.png" alt="TURBOTECH">
                        </div>
                    </div>
                </div>

                <!-- below items -->
                <div class="p-5">
                    <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0">
                        <div class="flex justify-center sm:justify-start items-center sm:items-start space-x-5 my-auto">

                            <!-- dashboard -->
                            <div class="cursor-pointer flex text-xs sm:text-sm text-[color:rgba(var(--ni-gray-500))] hover:text-[color:rgba(var(--ni-primary-500))] dark:text-[color:rgba(var(--ni-gray-300))] dark:hover:text-white">
                                <svg class="w-3 sm:w-4 h-3 sm:h-4 my-auto" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><rect x="18" y="2" width="12" height="46" rx="2" ry="2" fill="#ec5044"/><rect x="34" y="27.99" width="12" height="20.01" rx="2" ry="2" fill="#f6c253"/><rect x="2" y="18" width="12" height="30" rx="2" ry="2" fill="#41c3f1"/></svg>
                                <div class="ml-2 my-auto">Dashboard</div>
                            </div>

                            <!-- demo testing -->
                            <div class="cursor-pointer flex text-xs sm:text-sm text-[color:rgba(var(--ni-gray-500))] hover:text-[color:rgba(var(--ni-primary-500))] dark:text-[color:rgba(var(--ni-gray-300))] dark:hover:text-white">
                                <svg class="w-3 sm:w-4 h-3 sm:h-4 my-auto" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path style="fill:#DFDFDF;" d="M489.497,183.101h-2.014l-20.915,59.288l20.915,59.288h2.014c12.428,0,22.503-10.075,22.503-22.503v-73.567C512,193.175,501.925,183.101,489.497,183.101z"/><rect x="442.055" y="183.097" style="fill:#F1F1F1;" width="45.431" height="118.575"/><g>
                                    <path style="fill:#288FD9;" d="M462.966,48.862c-49.061,39.234-99.102,67.963-143.366,88.738l-20.915,107.603L319.6,347.174c44.263,20.774,94.304,49.503,143.366,88.738V48.862z"/><polygon style="fill:#288FD9;" points="54.857,198.91 21.56,198.91 11.103,242.387 21.56,285.864 54.857,285.864 "/></g><rect y="198.907" style="fill:#8BCBF1;" width="21.56" height="86.956"/><polygon style="fill:#DFDFDF;" points="143.357,314.609 99.22,304.152 142.018,463.138 175.697,463.138 "/><polygon style="fill:#F1F1F1;" points="75.998,314.609 108.338,463.138 142.018,463.138 107.401,304.152 "/><path style="fill:#8BCBF1;" d="M176.235,187.096v110.581c0,0,61.882,11.255,143.366,49.497V137.598C238.117,175.843,176.235,187.096,176.235,187.096z"/><polygon style="fill:#C1C1C1;" points="176.235,170.165 109.678,170.165 88.763,242.387 109.678,314.609 176.235,314.609 "/><rect x="43.123" y="170.162" style="fill:#DFDFDF;" width="66.557" height="144.447"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                </svg>
                                <div class="ml-2 my-auto">Demo Testing</div>
                            </div>
                        </div>

                        <div class="flex justify-center items-center ml-0 sm:ml-auto space-x-3">

                            <!-- switch mode button -->
                            <div class="flex justify-center items-center">
                                <button id="light-dark" class="flex justify-center items-center text-xs sm:text-sm my-auto w-24 sm:w-32 lg:w-28 xl:w-32 py-2 border border-[color:rgba(var(--ni-primary-400))] dark:bg-[color:rgba(var(--ni-gray-500))] hover:bg-[color:rgba(var(--ni-primary-400))] dark:hover:bg-[color:rgba(var(--ni-gray-500))] text-[color:rgba(var(--ni-primary-500))] dark:text-[color:rgba(var(--ni-gray-200))] hover:text-white dark:hover:text-white rounded-lg duration-300"></button>
                            </div>

                            <!-- log in -->
                            <div id="login-modal" class="flex justify-center items-center">
                                <button class="flex justify-center items-center my-auto w-24 sm:w-32 lg:w-28 xl:w-32 py-2 border border-[color:rgba(var(--ni-primary-400))] dark:bg-[color:rgba(var(--ni-gray-100))] hover:bg-[color:rgba(var(--ni-primary-400))] dark:hover:bg-[color:rgba(var(--ni-gray-500))] text-[color:rgba(var(--ni-primary-500))] dark:text-[color:rgba(var(--ni-gray-600))] hover:text-white dark:hover:text-white rounded-lg duration-300">
                                    <div class="p-1 bg-white dark:bg-[color:rgba(var(--ni-gray-100))] rounded-full">
                                        <svg class="w-4 h-4 my-auto" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="M24,23C12.4,23,3,29.27,3,37v7a2,2,0,0,0,2,2H43a2,2,0,0,0,2-2V37C45,29.27,35.6,23,24,23Z" fill="#4dbe86"/><path d="M24,0A13,13,0,1,0,37,13,13,13,0,0,0,24,0Z" fill="#fac591"/><path d="M34.29,5A13,13,0,0,0,13.82,4.9a0.09,0.09,0,0,0,.07.14h20.4Z" fill="#84523c"/></svg>
                                    </div>
                                    <div class="select-none ml-1 my-auto text-xs sm:text-sm text-center duration-150">Log In</div>
                                </button>
                            </div>
                        </div>

                        <!-- modal -->
                        <div id="modal" class="relative z-40 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                            
                            <!-- dark opacicy background -->
                            <div class="fixed inset-0 bg-[color:rgba(var(--ni-gray-800),0.7)] bg-opacity-100 transition-opacity"></div>
                        
                            <div class="fixed inset-0 z-10 overflow-y-auto">

                                <!-- blank space -->
                                <div id="blank-space" class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0"></div>
                                
                                <!-- login form -->
                                <div class="select-none flex justify-center items-center p-4 text-center sm:items-center sm:p-0">
                                    <div class="absolute top-10 sm:top-0 transform overflow-hidden bg-white mx-3 sm:mx-0 px-4 pt-5 pb-8 text-left shadow-xl transition-all sm:my-8 sm:max-w-lg sm:p-6 translate-y-10 rounded-xl">
                    
                                        <!-- title & description -->
                                        <div class="flex flex-col space-y-3 justify-center items-center">
                                            <div class="select-none flex justify-center items-center">
                                                <img class="w-52 object-contain" src="https://www.turbotech.com/storages/assets/img/system/turbotech.png" alt="TURBOTECH">
                                            </div>
                                            <p class="w-[90%] sm:w-[70%] text-center text-[color:rgba(var(--ni-gray-600))]">Hey, enter your details to get sign in to your account</p>
                                        </div>

                                        <!-- inputs -->
                                        <form class="flex flex-col space-y-3" id="footer-login">
                                            <input type="email" name="email" placeholder="Email Address" class="outline-none text-sm mt-7 px-5 py-2 w-full border border-[color:rgba(var(--ni-primary-200))] dark:border-[color:rgba(var(--ni-primary-200))] dark:text-[color:rgba(var(--ni-gray-800))] rounded-lg" required>
                                            <input type="password" name="password" placeholder="Password" class="outline-none text-sm px-5 py-2 w-full border border-[color:rgba(var(--ni-primary-200))] dark:border-[color:rgba(var(--ni-primary-200))] dark:text-[color:rgba(var(--ni-gray-800))] rounded-lg" required>

                                            <!-- question -->
                                            <div class="text-sm font-semibold text-[color:rgba(var(--ni-gray-900))]">Having trouble in sign in?</div>

                                            <!-- sign in button -->
                                            <div class="font-semibold">
                                                <button type="submit" class="w-full my-5 p-2 text-center bg-[color:rgba(var(--ni-danger-400))] hover:bg-[color:rgba(var(--ni-danger-300))] text-white rounded-lg duration-300">Sign in</button>
                                            </div>
                                        </form>

                                        <!-- alternative sign in title -->
                                        <div class="text-center">
                                            <p class="text-sm mb-5 text-[color:rgba(var(--ni-gray-600))] dark:text-[color:rgba(var(--ni-gray-600))]">— Or Sign in with —</p>                     
                                        </div>

                                        <!-- alternative sign in items -->
                                        <div class="flex flex-row justify-center items-center space-x-1">

                                            <!-- google -->
                                            <a href="#" onclick="return false;" class="flex justify-center items-center w-full px-3 py-2 border border-[color:rgba(var(--ni-primary-200))] dark:border-[color:rgba(var(--ni-primary-200))] hover:bg-[color:rgba(var(--ni-primary-400))] text-[color:rgba(var(--ni-gray-800))] dark:text-[color:rgba(var(--ni-gray-800))] hover:text-white dark:hover:text-white rounded-lg duration-300">
                                                <div class="p-0.5 bg-white rounded-full">
                                                    <svg class="w-4 h-4" viewBox="0 0 24 24" id="_24x24_On_Light_Google" data-name="24x24/On Light/Google" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><clipPath id="clip-path">
                                                        <path id="a" d="M17.791,7.364H9.209v3.477h4.94c-.46,2.209-2.386,3.477-4.94,3.477A5.37,5.37,0,0,1,3.767,9,5.442,5.442,0,0,1,12.6,4.868L15.279,2.25A9.29,9.29,0,0,0,9.209,0,9.08,9.08,0,0,0,0,9a9.08,9.08,0,0,0,9.209,9A8.586,8.586,0,0,0,18,9,7.306,7.306,0,0,0,17.791,7.364Z" fill="none"/></clipPath></defs><rect id="view-box" width="24" height="24" fill="none"/><g id="Logo" transform="translate(3 3)"><g id="Clipped"><path id="a-5" data-name="a" d="M17.791,7.364H9.209v3.477h4.94c-.46,2.209-2.386,3.477-4.94,3.477A5.37,5.37,0,0,1,3.767,9,5.442,5.442,0,0,1,12.6,4.868L15.279,2.25A9.29,9.29,0,0,0,9.209,0,9.08,9.08,0,0,0,0,9a9.08,9.08,0,0,0,9.209,9A8.586,8.586,0,0,0,18,9,7.306,7.306,0,0,0,17.791,7.364Z" fill="none"/><g id="Clipped-2" data-name="Clipped" clip-path="url(#clip-path)"><path id="Path" d="M0,10.636V0L7.116,5.318Z" transform="translate(-0.837 3.682)" fill="#fbbc05"/></g></g><g id="Clipped-3" data-name="Clipped"><path id="a-6" data-name="a" d="M17.791,7.364H9.209v3.477h4.94c-.46,2.209-2.386,3.477-4.94,3.477A5.37,5.37,0,0,1,3.767,9,5.442,5.442,0,0,1,12.6,4.868L15.279,2.25A9.29,9.29,0,0,0,9.209,0,9.08,9.08,0,0,0,0,9a9.08,9.08,0,0,0,9.209,9A8.586,8.586,0,0,0,18,9,7.306,7.306,0,0,0,17.791,7.364Z" fill="none"/><g id="Clipped-4" data-name="Clipped" clip-path="url(#clip-path)"><path id="Path-2" data-name="Path" d="M0,4.5,7.116,9.818l2.93-2.5,10.047-1.6V0H0Z" transform="translate(-0.837 -0.818)" fill="#ea4335"/></g></g><g id="Clipped-5" data-name="Clipped"><path id="a-7" data-name="a" d="M17.791,7.364H9.209v3.477h4.94c-.46,2.209-2.386,3.477-4.94,3.477A5.37,5.37,0,0,1,3.767,9,5.442,5.442,0,0,1,12.6,4.868L15.279,2.25A9.29,9.29,0,0,0,9.209,0,9.08,9.08,0,0,0,0,9a9.08,9.08,0,0,0,9.209,9A8.586,8.586,0,0,0,18,9,7.306,7.306,0,0,0,17.791,7.364Z" fill="none"/><g id="Clipped-6" data-name="Clipped" clip-path="url(#clip-path)"><path id="Path-3" data-name="Path" d="M0,15.136,12.558,5.727l3.307.409L20.093,0V19.636H0Z" transform="translate(-0.837 -0.818)" fill="#34a853"/></g></g><g id="Clipped-7" data-name="Clipped"><path id="a-8" data-name="a" d="M17.791,7.364H9.209v3.477h4.94c-.46,2.209-2.386,3.477-4.94,3.477A5.37,5.37,0,0,1,3.767,9,5.442,5.442,0,0,1,12.6,4.868L15.279,2.25A9.29,9.29,0,0,0,9.209,0,9.08,9.08,0,0,0,0,9a9.08,9.08,0,0,0,9.209,9A8.586,8.586,0,0,0,18,9,7.306,7.306,0,0,0,17.791,7.364Z" fill="none"/><g id="Clipped-8" data-name="Clipped" clip-path="url(#clip-path)"><path id="Path-4" data-name="Path" d="M14.651,15.136,1.674,5.318,0,4.091,14.651,0Z" transform="translate(4.605 3.682)" fill="#4285f4"/></g></g></g>
                                                    </svg>
                                                </div>
                                                <div class="text-xs ml-1 my-auto">Google</div>
                                            </a>

                                            <!-- apple id -->
                                            <a href="#" onclick="return false;" class="flex justify-center items-center w-full px-3 py-2 border border-[color:rgba(var(--ni-primary-200))] dark:border-[color:rgba(var(--ni-primary-200))] hover:bg-[color:rgba(var(--ni-primary-400))] text-[color:rgba(var(--ni-gray-800))] dark:text-[color:rgba(var(--ni-gray-800))] hover:text-white dark:hover:text-white rounded-lg duration-300">
                                                <div class="p-0.5 bg-white rounded-full">
                                                    <svg class="w-4 h-4" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 305 305" style="enable-background:new 0 0 305 305;" xml:space="preserve"><g id="XMLID_228_"><path id="XMLID_229_" d="M40.738,112.119c-25.785,44.745-9.393,112.648,19.121,153.82C74.092,286.523,88.502,305,108.239,305 c0.372,0,0.745-0.007,1.127-0.022c9.273-0.37,15.974-3.225,22.453-5.984c7.274-3.1,14.797-6.305,26.597-6.305 c11.226,0,18.39,3.101,25.318,6.099c6.828,2.954,13.861,6.01,24.253,5.815c22.232-0.414,35.882-20.352,47.925-37.941 c12.567-18.365,18.871-36.196,20.998-43.01l0.086-0.271c0.405-1.211-0.167-2.533-1.328-3.066c-0.032-0.015-0.15-0.064-0.183-0.078 c-3.915-1.601-38.257-16.836-38.618-58.36c-0.335-33.736,25.763-51.601,30.997-54.839l0.244-0.152 c0.567-0.365,0.962-0.944,1.096-1.606c0.134-0.661-0.006-1.349-0.386-1.905c-18.014-26.362-45.624-30.335-56.74-30.813 c-1.613-0.161-3.278-0.242-4.95-0.242c-13.056,0-25.563,4.931-35.611,8.893c-6.936,2.735-12.927,5.097-17.059,5.097 c-4.643,0-10.668-2.391-17.645-5.159c-9.33-3.703-19.905-7.899-31.1-7.899c-0.267,0-0.53,0.003-0.789,0.008 C78.894,73.643,54.298,88.535,40.738,112.119z"/>
                                                        <path id="XMLID_230_" d="M212.101,0.002c-15.763,0.642-34.672,10.345-45.974,23.583c-9.605,11.127-18.988,29.679-16.516,48.379 c0.155,1.17,1.107,2.073,2.284,2.164c1.064,0.083,2.15,0.125,3.232,0.126c15.413,0,32.04-8.527,43.395-22.257 c11.951-14.498,17.994-33.104,16.166-49.77C214.544,0.921,213.395-0.049,212.101,0.002z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                    </svg>
                                                </div>
                                                <div class="text-xs ml-1 my-auto">Apple</div>
                                            </a>

                                            <!-- facebook -->
                                            <a href="#" onclick="return false;" class="flex justify-center items-center w-full px-3 py-2 border border-[color:rgba(var(--ni-primary-200))] dark:border-[color:rgba(var(--ni-primary-200))] hover:bg-[color:rgba(var(--ni-primary-400))] text-[color:rgba(var(--ni-gray-800))] dark:text-[color:rgba(var(--ni-gray-800))] hover:text-white dark:hover:text-white rounded-lg duration-300">
                                                <div class="p-0.5 bg-white rounded-full">
                                                    <svg class="w-4 h-4" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 291.319 291.319" style="enable-background:new 0 0 291.319 291.319;" xml:space="preserve"><g>
                                                        <path style="fill:#3B5998;" d="M145.659,0c80.45,0,145.66,65.219,145.66,145.66c0,80.45-65.21,145.659-145.66,145.659 S0,226.109,0,145.66C0,65.219,65.21,0,145.659,0z"/><path style="fill:#FFFFFF;" d="M163.394,100.277h18.772v-27.73h-22.067v0.1c-26.738,0.947-32.218,15.977-32.701,31.763h-0.055 v13.847h-18.207v27.156h18.207v72.793h27.439v-72.793h22.477l4.342-27.156h-26.81v-8.366 C154.791,104.556,158.341,100.277,163.394,100.277z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                    </svg>
                                                </div>
                                                <div class="text-xs ml-1 my-auto">Facebook</div>
                                            </a>
                                        </div>

                                        <!-- request -->
                                        <div class="text-center">
                                            <div class="text-sm my-3">
                                                <span class="text-[color:rgba(var(--ni-gray-500))]">Don't have an account?</span>
                                                <span class="font-semibold text-[color:rgba(var(--ni-gray-600))] hover:text-[color:rgba(var(--ni-primary-500))]">
                                                    <a href="#" onclick="return false;">Request now</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>

@endsection

@section('internalScript')

<!-- jQuery validation CDN -->
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<script>

    // Footer with login for Admin page function
    const footerWithLoginForAdminPage = () => {

        // search bar
        const search          = $("#search");
        const searchIcon      = $("#search-icon");

        // dropdown buttons
        const dropdown           = $(".dropdown");
        const dropdownItems      = $(".dropdown [data-dropdown]");
        const defaultDropdown    = ("text-[color:rgba(var(--ni-gray-500))]");
        const activeDropdown     = ("bg-[color:rgba(var(--ni-primary-400))] text-white rounded-md");

        // dropdown items
        const systemsDropdown  = $("#systems-dropdown");
        const productsDropdown = $("#products-dropdown");
        const servicesDropdown = $("#services-dropdown");

        // button light & dark mode
        const changeModeBtn  = $("#light-dark");
        const pageAppearance = $("#page-appearance");

        // login button & modal
        const loginModal        = $("#login-modal");
        const loginModalContent = $("#modal");
        const blankSpace        = $("#blank-space");

        // login contents
        const footerLogin   = $("#footer-login");
        const inputs        = $("#footer-login input");
        const inputDefault  = ("border border-[color:rgba(var(--ni-primary-200))]");
        const inputError    = ("border border-[color:rgba(var(--ni-danger-300))]");
        const messageClass  = ("text-sm text-[color:rgba(var(--ni-danger-500))]");

        const lightMode = (`
            <div class="p-1 bg-[color:rgba(var(--ni-gray-100))] rounded-full">
                <svg class="w-4 h-4" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 480.024 480.024" style="enable-background:new 0 0 480.024 480.024;" xml:space="preserve"><circle style="fill:#FCE674;" cx="368.252" cy="111.728" r="111.728"/>
                    <path style="fill:#92C7D3;" d="M426.22,372.416c-1.12,0-42.648,0-42.648,0c0.744-8.272,1.24-14.104,1.256-18.888c0.128-42.672-28.36-82.664-70.032-91.84c-23.752-5.232-46.424-2.72-65.184,7.408c-22.888-34.064-60.808-57.72-104.272-60.376c-5.592-0.768-11.256-1.56-17.056-1.56C57.444,207.152,0.012,266.248,0.012,339.312c0,38.072,15.688,72.224,40.648,96.36c22.072,24.488,52.72,40.272,89.008,42.904c0,0,295.432,1.448,296.552,1.448c29.712,0,53.792-21.808,53.792-53.8C480.012,394.216,455.924,372.416,426.22,372.416z"/><g><polygon style="fill:#FCE674;" points="76.564,149.592 91.572,180.008 125.14,184.88 100.852,208.552 106.588,241.984 76.564,226.2 46.54,241.984 52.276,208.552 27.988,184.88 61.556,180.008 "/><polygon style="fill:#FCE674;" points="192.428,0.624 207.436,31.04 241.004,35.92 216.716,59.592 222.444,93.016 192.428,77.24 162.404,93.016 168.14,59.592 143.852,35.92 177.412,31.04 "/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                </svg>
            </div>
            <div class="ml-1">Light</div>
        `);

        const darkMode = (`
            <div class="p-1">
                <svg class="w-4 h-4" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 480.016 480.016" style="enable-background:new 0 0 480.016 480.016;" xml:space="preserve">
                    <path style="fill:#92C7D3;" d="M426.224,363.84c-1.12,0-42.648,0-42.648,0c0.744-8.16,1.24-9.968,1.256-14.744 c0.128-42.672-28.36-80.592-70.032-89.776c-23.752-5.232-46.432-1.68-65.192,8.44c-22.888-34.064-60.816-57.2-104.272-59.856 c-5.592-0.768-11.256-1.304-17.056-1.304C57.432,206.6,0,265.832,0,338.888c0,38.072,15.688,72.288,40.648,96.424 c22.072,24.488,52.72,40.304,89.008,42.936c0,0,295.448,1.464,296.568,1.464c29.712,0,53.792-25.936,53.792-57.936 C480.016,389.776,455.936,363.84,426.224,363.84z"/><g><path style="fill:#FCE674;" d="M363,1.976c10.28,17.208,16.304,37.264,16.304,58.768c0,63.44-51.432,114.872-114.872,114.872 c-0.144,0-0.28-0.024-0.424-0.024c20.056,33.568,56.632,56.112,98.576,56.112c63.44,0,114.872-51.432,114.872-114.872 C477.456,53.528,426.248,2.208,363,1.976z"/><polygon style="fill:#FCE674;" points="76.552,149.28 91.56,179.696 125.128,184.576 100.84,208.248 106.576,241.68  76.552,225.896 46.528,241.68 52.264,208.248 27.976,184.576 61.544,179.696 	"/><polygon style="fill:#FCE674;" points="192.416,0.304 207.432,30.72 241,35.6 216.712,59.28 222.44,92.704 192.416,76.92  162.4,92.704 168.128,59.28 143.84,35.6 177.408,30.72 	"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                </svg>
            </div>
            <div class="ml-1">Dark</div>
        `);

        // light mode default
        changeModeBtn.html(lightMode);

        const lists = [
            {
                "system" : "System example 1",
                "product": "Product example 1",
                "service": "Services example 1"
            },
            {
                "system" : "System example 2",
                "product": "Product example 2",
                "service": "Services example 2"
            },
            {
                "system" : "System example 3",
                "product": "Product example 3",
                "service": "Services example 3"
            }
        ];

        $.each(lists, (key, value) => {

            // append systems dropdown
            systemsDropdown.append(`
                <li class="px-4 py-3 hover:bg-[color:rgba(var(--ni-gray-400))] dark:hover:bg-[color:rgba(var(--ni-gray-200))] hover:text-white dark:hover:text-[color:rgba(var(--ni-gray-600))] hover:rounded-md>
                    <a href="" onclick="return false;">${value.system}</a>
                </li>
            `);

            // append products dropdown
            productsDropdown.append(`
                <li class="px-4 py-3 hover:bg-[color:rgba(var(--ni-gray-400))] dark:hover:bg-[color:rgba(var(--ni-gray-200))] hover:text-white dark:hover:text-[color:rgba(var(--ni-gray-600))] hover:rounded-md>
                    <a href="" onclick="return false;">${value.system}</a>
                </li>
            `);

            // append services dropdown
            servicesDropdown.append(`
                <li class="px-4 py-3 hover:bg-[color:rgba(var(--ni-gray-400))] dark:hover:bg-[color:rgba(var(--ni-gray-200))] hover:text-white dark:hover:text-[color:rgba(var(--ni-gray-600))] hover:rounded-md>
                    <a href="" onclick="return false;">${value.system}</a>
                </li>
            `);
        });

        search.keyup(function() {
            searchIcon.each(function() {
                searchIcon.removeClass("text-[color:rgba(var(--ni-primary-500))]");
                $(this).addClass("text-[color:rgba(var(--ni-primary-500))]");
            });
        });

        // hidden dropdown items
        dropdownItems.addClass("hidden");

        dropdown.each(function(i) {
            
            // show dropdown items mouseover
            $(this).mouseover(function() {
                $(this).addClass(activeDropdown);
                $(this).find(dropdownItems).removeClass("hidden");
            });

            // hidden dropdown items mouseout
            $(this).mouseout(function() {
                $(this).removeClass(activeDropdown);
                $(this).find(dropdownItems).addClass("hidden");
            });

        });

        $(function() {

            // onclick change apperances
            changeModeBtn.click(function() {
                pageAppearance.toggleClass("dark");

                if ( !pageAppearance.hasClass("dark") ) {
                    $(this).html(lightMode);
                } else {
                    $(this).html(darkMode);
                }

            });
        });

        $(function() {

            // onclick show modal
            loginModal.click(() => {
                loginModalContent.removeClass("hidden");
            });

            // onclick blank space to close login modal
            blankSpace.click(() => {
                loginModalContent.addClass("hidden");
            });

        });

        // validate login modal
        footerLogin.validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 5
                }
            },

            // error message
            messages: {
                email: {
                    required: "Please enter your email or phone number",
                    email: "Enter a valid email address"
                },
                password: {
                    required: "Please provide a passcode",
                    minlength: "Passcode must be at least 5 characters"
                }
            },

            submitHandler: function(form) {
                form.submit();
            },

            // custom error messages styles
            errorPlacement: function(error, element) { 

                element.removeClass(inputDefault);
                element.addClass(inputError);

                error.addClass(messageClass);
                error.css("margin-top", "0px"); 
                error.insertAfter(element); 
            },

            // success
            success: function(error) {

                inputs.each(function() {
                    $(this).removeClass(inputError);
                    $(this).addClass(inputDefault);
                });

                // remove error messages
                error.remove();
            }
        });

    }

    // call function
    footerWithLoginForAdminPage();

</script>

@endsection