@extends('master')
@section('content')

<div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div>

<!-- Design Pricing with get started page -->

<!-- main -->
<div class="mainCard">

    <!-- container -->
    <div class="cardContainer px-5 sm:px-5 md:px-10 lg:px-10 py-5 bg-[color:rgba(var(--ni-gray-100))]">

        <!-- navbar -->
        <div class="relative">
            <nav class="container mx-auto">
                <div class="max-w-4xl h-12 nd:h-16 mx-auto flex justify-between align-stretch px-4">

                    <!-- logo -->
                    <div id="logo" class="flex items-center text-[color:rgba(var(--ni-primary-400))] font-bold">
                        <a class="hover:text-[color:rgba(var(--ni-primary-500))]" href="/">LOGO</a>
                    </div>

                    <!-- navbar items -->
                    <ul id="nav-links" class="hidden absolute md:relative md:flex md:align-stretch md:justify-end right-0 top-0 mt-10 md:mt-0 py-2 md:py-0 w-48 md:w-auto h-auto z-10 shadow md:shadow-none">
                        <li class="hover:border-b-2 hover:border-[color:rgba(var(--ni-primary-400))]">
                            <a class="w-full h-full flex md:items-center pl-6 md:pl-4 pr-4 py-1 font-medium text-[color:rgba(var(--ni-gray-400))] hover:text-[color:rgba(var(--ni-primary-400))]" href="#">Home</a>
                        </li>
                        <li class="hover:border-b-2 hover:border-[color:rgba(var(--ni-primary-400))]">
                            <a class="w-full h-full flex md:items-center pl-6 md:pl-4 pr-4 py-1 font-medium text-[color:rgba(var(--ni-gray-400))] hover:text-[color:rgba(var(--ni-primary-400))]" href="#">About</a>
                        </li>
                        <li class="hover:border-b-2 hover:border-[color:rgba(var(--ni-primary-400))]">
                            <a class="w-full h-full flex md:items-center pl-6 md:pl-4 pr-4 py-1 font-medium text-[color:rgba(var(--ni-gray-400))] hover:text-[color:rgba(var(--ni-primary-400))]" href="#">Contact</a>
                        </li>
                        <li class="hover:border-b-2 hover:border-[color:rgba(var(--ni-primary-400))]">
                            <a class="w-full h-full flex md:items-center pl-6 md:pl-4 pr-4 py-1 font-medium text-[color:rgba(var(--ni-gray-400))] hover:text-[color:rgba(var(--ni-primary-400))]" href="#">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>

                    <!-- navbar toggle button -->
                    <div class="md:hidden flex items-center">
                        <button id="menu-button" class="p-1 rounded-full focus:outline-none hover:text-[color:rgba(var(--ni-primary-400))] duration-300">
                            <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path id="menu-icon" d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </nav>
        </div>

        <!-- pricing title -->
        <div class="col-span-1 w-full text-center">
            <div class="container p-5 mx-auto items-center">
                <div class="w-full mx-auto">
                    <h3 class="font-bold text-lg text-[color:rgba(var(--ni-gray-400))]">Pricing</h3>
                    <div class="w-40 my-5 p-0.5 bg-[color:rgba(var(--ni-primary-300))] mx-auto rounded-lg"></div>
                    <h1 class="font-bold text-4xl text-[color:rgba(var(--ni-gray-600))]">Pricing with get started page</h1>
                    <p class="font-bold py-3">We are an industry-leading company that values honesty, integrity, and efficiency. Building quality products and caring.</p>
                    <p class="pb-5">You can start with our Free Plan to see if this service can meet all your needs.</p>
                </div>

                <!-- monthly & yearly -->
                <div id="test" class="w-fit px-5 flex justify-center items-center mt-5 mx-auto rounded-3xl bg-[color:rgba(var(--ni-primary-400))]">

                    <!-- monthly -->
                    <div class="text-md text-white">Monthly</div>
                    <div class="ml-2 mt-2 space-y-2" x-data="{toggle: false, toggle2: false}">

                        <!-- toggle button -->
                        <button id="toggle-button" class="transition ease-in-out duration-300 w-12 bg-gray-300 rounded-full focus:outline-none" :class="{ 'bg-green-400': toggle }" x-on:click="toggle = !toggle">
                            <div class="transition ease-in-out duration-300 rounded-full h-6 w-6 bg-white shadow" :class="{ 'transform translate-x-full ': toggle }"></div>
                        </button>
                    </div>

                    <!-- yearly -->
                    <div class="ml-2 text-md text-white">Yearly</div>
                    <div class="ml-2 text-xs font-medium px-2 py-0.5 rounded-lg bg-[color:rgba(var(--ni-yellow-300))]">-10%</div>
                </div>  
            </div>
        </div>

        <!-- pricing cards -->
        <ul id="pricing-cards" class="cardContainer grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 select-none mt-0">

            <!-- "personal" pricing card -->
            <li class="eachCard col-span-1 w-auto border border-[color:rgba(var(--ni-gray-200))] rounded-xl shadow-lg transform transition duration-500 hover:scale-105 hover:border-2 hover:border-[color:rgba(var(--ni-primary-400))]">               
                <div class="w-full mx-auto px-3">

                    <!-- "personal" pricing svg -->
                    <div class="flex justify-center item-center">                        
                        <svg class="w-40 h-40" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 451.529 451.529" style="enable-background:new 0 0 451.529 451.529;" xml:space="preserve" width="512" height="512"><g><g>
                            <path style="fill:#333E48;" d="M367.98,374.108c-46.068,0-83.548-37.48-83.548-83.549c0-46.07,37.48-83.549,83.548-83.549    c46.069,0,83.549,37.479,83.549,83.549C451.529,336.628,414.05,374.108,367.98,374.108z M367.98,233.425    c-31.503,0-57.133,25.631-57.133,57.135s25.63,57.133,57.133,57.133c31.505,0,57.134-25.629,57.134-57.133    S399.485,233.425,367.98,233.425z"/><path style="opacity:0.4;fill:#222222;" d="M367.98,233.425v-26.414c-46.068,0-83.548,37.479-83.548,83.549    c0,46.068,37.48,83.549,83.548,83.549v-26.416c-31.503,0-57.133-25.629-57.133-57.133S336.478,233.425,367.98,233.425z"/></g><g><path style="fill:#333E48;" d="M83.549,374.108C37.479,374.108,0,336.628,0,290.559c0-46.07,37.479-83.549,83.549-83.549    c46.067,0,83.548,37.479,83.548,83.549C167.097,336.628,129.616,374.108,83.549,374.108z M83.549,233.425    c-31.505,0-57.134,25.631-57.134,57.135s25.629,57.133,57.134,57.133c31.503,0,57.133-25.629,57.133-57.133    S115.052,233.425,83.549,233.425z"/><path style="opacity:0.4;fill:#222222;" d="M83.549,233.425v-26.414C37.479,207.011,0,244.489,0,290.559    c0,46.068,37.479,83.549,83.549,83.549v-26.416c-31.505,0-57.134-25.629-57.134-57.133S52.044,233.425,83.549,233.425z"/><path style="opacity:0.4;fill:#222222;" d="M122.259,216.556l-13.721,22.637c6.028,2.945,11.458,6.928,16.072,11.701    l13.998-23.092C133.642,223.438,128.16,219.655,122.259,216.556z M140.632,292.542c-0.238,6.92-1.708,13.533-4.205,19.621    l27.42,1.408c1.807-6.289,2.896-12.875,3.164-19.672L140.632,292.542z"/></g><g><path style="fill:#A4A9AD;" d="M152.268,187.1c-2.872,0-5.612-1.66-6.855-4.453l-18.248-41c-1.685-3.783,0.018-8.217,3.802-9.9    c3.783-1.686,8.217,0.018,9.901,3.801l18.248,41c1.685,3.785-0.018,8.219-3.802,9.902    C154.323,186.892,153.288,187.1,152.268,187.1z"/><path style="opacity:0.3;fill:#222222;" d="M140.868,135.548c-1.685-3.783-6.118-5.486-9.901-3.801    c-3.784,1.684-5.486,6.117-3.802,9.9l5.859,13.164c4.396-1.115,9.603-2.428,14.753-3.738L140.868,135.548z"/><path style="fill:#333E48;" d="M176.938,122.548c0.336-8.314-6.132-15.328-14.447-15.662l-48.265-1.949    c-12.27-0.496-22.616,9.049-23.112,21.318c-0.495,12.268,9.05,22.615,21.319,23.111c2.397,0.096,4.72-0.201,6.912-0.818    l0.001,0.008c6.932-1.885,38.026-9.523,46.412-12.051c0.052-0.018,0.101-0.033,0.15-0.049c0.421-0.127,0.799-0.244,1.087-0.344    l-0.001-0.004C172.587,134.087,176.684,128.854,176.938,122.548z"/><path style="opacity:0.4;fill:#222222;" d="M176.938,122.548H91.6c-0.254,1.203-0.435,2.438-0.485,3.707    c-0.495,12.268,9.05,22.615,21.319,23.111c2.397,0.096,4.72-0.201,6.912-0.818l0.001,0.008    c6.932-1.885,38.026-9.523,46.412-12.051c0.052-0.018,0.101-0.033,0.15-0.049c0.421-0.127,0.799-0.244,1.087-0.344l-0.001-0.004    C172.587,134.087,176.684,128.854,176.938,122.548z"/></g><path style="fill:#FF5959;" d="M367.98,297.038c-3.113,0-6.021-1.953-7.091-5.061l-44.085-127.99l-7.31-50.646   c-0.592-4.1,2.252-7.902,6.352-8.494c4.091-0.592,7.902,2.25,8.494,6.352l7.109,49.244l43.622,126.65   c1.35,3.916-0.732,8.186-4.648,9.533C369.614,296.905,368.79,297.038,367.98,297.038z"/><g><path style="fill:#333E48;" d="M316.91,119.77c-1.449,0-2.913-0.42-4.202-1.295l-25.223-17.104    c-3.429-2.324-4.323-6.988-1.998-10.416c2.325-3.43,6.989-4.324,10.416-1.998l25.223,17.104c3.429,2.324,4.323,6.988,1.998,10.416    C321.674,118.616,319.313,119.77,316.91,119.77z"/><path style="opacity:0.4;fill:#222222;" d="M295.903,88.958c-3.427-2.326-8.091-1.432-10.416,1.998    c-2.325,3.428-1.431,8.092,1.998,10.416l18.207,12.348c4.041-3.053,7.049-7.395,8.42-12.414L295.903,88.958z"/><path style="fill:#333E48;" d="M309.438,95.167c0-9.803-7.943-17.746-17.744-17.746c-9.8,0-17.741,7.943-17.741,17.746    c0,9.799,7.941,17.74,17.741,17.74C301.494,112.907,309.438,104.966,309.438,95.167z"/><circle style="fill:#D1D3D3;" cx="291.695" cy="95.167" r="6.444"/><path style="opacity:0.4;fill:#222222;" d="M291.693,77.421c-9.8,0-17.741,7.943-17.741,17.746c0,9.799,7.941,17.74,17.741,17.74    V77.421z"/></g><path style="fill:#FF5959;" d="M328.496,165.249c-1.736-3.574-5.44-5.766-9.414-5.564l-167.878,8.539   c-0.066,0.004-0.129,0.016-0.196,0.025c-0.165,0.01-0.326,0.033-0.489,0.051c-0.27,0.035-0.539,0.072-0.806,0.129   c-0.145,0.029-0.288,0.066-0.431,0.102c-0.279,0.072-0.556,0.15-0.826,0.246c-0.128,0.045-0.251,0.092-0.376,0.143   c-0.277,0.107-0.55,0.229-0.815,0.365c-0.116,0.057-0.23,0.115-0.343,0.178c-0.262,0.145-0.514,0.301-0.762,0.471   c-0.109,0.072-0.218,0.145-0.325,0.221c-0.235,0.178-0.46,0.363-0.681,0.561c-0.104,0.092-0.21,0.178-0.31,0.275   c-0.211,0.201-0.406,0.42-0.599,0.641c-0.093,0.107-0.19,0.205-0.278,0.314c-0.202,0.254-0.385,0.525-0.563,0.797   c-0.053,0.086-0.116,0.158-0.168,0.242L75.078,285.425c-1.808,2.982-1.915,6.691-0.282,9.771c1.633,3.082,4.762,5.078,8.245,5.256   l124.808,6.416c0.17,0.008,0.341,0.012,0.51,0.012c0.386,0,0.768-0.025,1.147-0.07c0.128-0.016,0.251-0.041,0.376-0.06   c0.251-0.037,0.501-0.082,0.748-0.141c0.144-0.033,0.285-0.076,0.428-0.117c0.224-0.063,0.444-0.131,0.664-0.211   c0.145-0.051,0.285-0.107,0.428-0.168c0.211-0.086,0.419-0.182,0.625-0.285c0.136-0.066,0.271-0.135,0.402-0.209   c0.207-0.115,0.407-0.244,0.607-0.373c0.117-0.078,0.239-0.15,0.355-0.236c0.216-0.154,0.42-0.322,0.623-0.496   c0.09-0.074,0.182-0.142,0.268-0.221c0.276-0.252,0.539-0.517,0.788-0.801l0.023-0.027c0.003-0.004,0.007-0.008,0.011-0.012   l111.194-127.363C329.661,173.095,330.231,168.825,328.496,165.249z M100.611,281.52l50.05-82.572l41.601,87.281L100.611,281.52z    M210.811,279.102l-32.609-68.42l96.623-4.9L210.811,279.102z"/><path style="fill:#FEDD3D;" d="M228.759,193.808c-3.975,0-7.291-3.123-7.485-7.137c-0.2-4.137,2.991-7.654,7.129-7.854   l53.316-2.582c4.126-0.189,7.653,2.992,7.854,7.129s-2.991,7.654-7.129,7.854l-53.316,2.582   C229.004,193.806,228.881,193.808,228.759,193.808z"/><path style="opacity:0.3;fill:#222222;" d="M210.811,165.19l-59.607,3.033c-0.066,0.004-0.129,0.016-0.196,0.025   c-0.165,0.01-0.326,0.033-0.489,0.051c-0.27,0.035-0.539,0.072-0.806,0.129c-0.145,0.029-0.288,0.066-0.431,0.102   c-0.279,0.072-0.556,0.15-0.826,0.246c-0.128,0.045-0.251,0.092-0.376,0.143c-0.277,0.107-0.55,0.229-0.815,0.365   c-0.116,0.057-0.23,0.115-0.343,0.178c-0.262,0.145-0.514,0.301-0.762,0.471c-0.109,0.072-0.218,0.145-0.325,0.221   c-0.235,0.178-0.46,0.363-0.681,0.561c-0.104,0.092-0.21,0.178-0.31,0.275c-0.211,0.201-0.406,0.42-0.599,0.641   c-0.093,0.107-0.19,0.205-0.278,0.314c-0.202,0.254-0.385,0.525-0.563,0.797c-0.053,0.086-0.116,0.158-0.168,0.242L75.078,285.425   c-1.808,2.982-1.915,6.691-0.282,9.771c1.633,3.082,4.762,5.078,8.245,5.256l124.808,6.416c0.17,0.008,0.341,0.012,0.51,0.012   c0.386,0,0.768-0.025,1.147-0.07c0.128-0.016,0.251-0.041,0.376-0.06c0.251-0.037,0.501-0.082,0.748-0.141   c0.06-0.014,0.121-0.033,0.182-0.047v-27.459l-32.609-68.42l32.609-1.652V165.19z M192.262,286.229l-91.65-4.709l50.05-82.572   L192.262,286.229z"/><g><path style="fill:#A4A9AD;" d="M233.689,296.975c0-13.988-11.341-25.334-25.333-25.334c-13.99,0-25.333,11.346-25.333,25.334    c0,13.99,11.343,25.332,25.333,25.332C222.349,322.308,233.689,310.966,233.689,296.975z"/><circle style="fill:#333E48;" cx="208.356" cy="296.975" r="13.519"/><path style="opacity:0.2;fill:#222222;" d="M208.356,271.642c-13.99,0-25.333,11.346-25.333,25.334    c0,13.99,11.343,25.332,25.333,25.332V271.642z"/><path style="fill:#A4A9AD;" d="M230.643,338.849c-2.483,0-4.906-0.438-6.334-2.689l-22.288-35.17    c-2.217-3.498-1.179-8.133,2.32-10.35c3.497-2.215,8.133-1.178,10.35,2.32l22.288,35.17c2.217,3.498,1.179,8.131-2.32,10.35    C233.414,339.268,232.017,338.849,230.643,338.849z"/><path style="opacity:0.2;fill:#222222;" d="M236.979,328.13l-4.932-7.781H214.29l10.02,15.811    c1.428,2.252,3.851,2.689,6.334,2.689c1.373,0,2.771,0.42,4.016-0.369C238.158,336.261,239.196,331.628,236.979,328.13z"/><rect x="211.658" y="324.645" style="fill:#FF5959;" width="37.972" height="15"/></g></g>
                        </svg>                   
                    </div>

                    <!-- title -->
                    <div class="mt-3 text-center">
                        <h1 class="text-2xl text-[color:rgba(var(--ni-gray-600))]">Personal</h1>
                    </div>

                    <!-- small title -->
                    <div class="flex w-full mt-1 justify-center items-center">
                        <h1 class="font-bold text-sm text-[color:rgba(var(--ni-gray-400))] py-1">Freemium</h1>
                    </div>

                    <!-- price -->
                    <div class="mt-5 flex justify-center items-center">
                        <span class="text-lg">$</span>
                        <h1 class="text-4xl font-bold text-[color:rgba(var(--ni-gray-400))]">0</h1>
                        <span class="mt-5">/month</span>
                    </div>

                    <!-- price title -->
                    <div class="mt-2">
                        <div class="flex justify-center items-center">
                            <p class="text-sm text-[color:rgba(var(--ni-gray-400))] mr-2">For up to 10 users</p>
                            <svg class="w-5 h-5 text-[color:rgba(var(--ni-gray-600))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- button -->
                    <div class="mt-5 mb-3">
                        <button class="w-full mt-5 p-2 rounded-lg border border-[color:rgba(var(--ni-gray-500))] hover:border-[color:rgba(var(--ni-gray-400))] bg-[color:rgba(var(--ni-gray-500))] hover:bg-[color:rgba(var(--ni-gray-400))] text-white duration-500">Create Account</button>
                    </div>

                    <!-- details 1 -->
                    <div class="mx-5 sm:mx-5 md:mx-10 lg:mx-10 xl:mx-10 py-3">
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))] fill-[color:rgba(var(--ni-primary-400))]" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-point" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="12" r="4"></circle>
                            </svg>
                            <div class="flex text-sm ml-3 my-auto">
                                <h3 class="font-bold">250</h3>
                                <p class="ml-1 text-[color:rgba(var(--ni-gray-500))]">Conversations P/M</p>
                            </div>
                        </div>
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))] fill-[color:rgba(var(--ni-primary-400))]" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-point" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="12" r="4"></circle>
                            </svg>
                            <div class="flex text-sm ml-3 my-auto">
                                <h3 class="font-bold">2</h3>
                                <p class="ml-1 text-[color:rgba(var(--ni-gray-500))]">Voice Channels</p>
                            </div>
                        </div>
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))] fill-[color:rgba(var(--ni-primary-400))]" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-point" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="12" r="4"></circle>
                                </svg>
                                <div class="flex text-sm ml-3 my-auto">
                                <h3 class="font-bold">1 GB</h3>
                                <p class="ml-1 text-[color:rgba(var(--ni-gray-500))]">Data Storage</p>
                            </div>
                        </div>
                    </div>

                    <!-- center line -->
                    <div class="w-full border border-[color:rgba(var(--ni-gray-100))] rounded-lg"></div>

                    <!-- details 2 -->
                    <div class="mx-5 sm:mx-5 md:mx-10 lg:mx-10 xl:mx-10 py-3">
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-greengray-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <div class="flex text-sm ml-3 my-auto">
                                <p class="text-[color:rgba(var(--ni-gray-500))]">Chat Widget</p>
                            </div>
                        </div>
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-greengray-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <div class="flex text-sm ml-3 my-auto">
                                <p class="text-[color:rgba(var(--ni-gray-500))]">Realtime Overview</p>
                            </div>
                        </div>
                        <div class="flex my-auto pt-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-greengray-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <div class="flex text-sm ml-3 my-auto">
                                <p class="text-[color:rgba(var(--ni-gray-500))]">Special Academy</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <!-- "essentials" pricing card -->
            <li class="eachCard col-span-1 w-auto border border-[color:rgba(var(--ni-gray-200))] rounded-xl shadow-lg transform transition duration-500 hover:scale-105 hover:border-2 hover:border-[color:rgba(var(--ni-primary-400))]">
                <div id="pricing-content" class="w-full mx-auto px-3">

                    <!-- "essentials" pricing svg -->
                    <div class="flex justify-center item-center">
                        <svg class="w-40 h-40" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.991 511.991" style="enable-background:new 0 0 511.991 511.991;" xml:space="preserve">
                            <path style="fill:#A0D468;" d="M348.244,358.008c-0.812,0.297-158.044,4.062-158.044,4.062l-17.75,11.827l21.328,32 c1.984,2.969,5.312,4.75,8.875,4.75c65.187,0,149.528-31.344,153.075-32.672L348.244,358.008z"/><g><path style="fill:#E6E9ED;" d="M95.999,229.33H10.657c-5.891,0-10.656,4.773-10.656,10.664v42.655 c0,5.891,4.766,10.672,10.656,10.672h85.342c5.891,0,10.656-4.781,10.656-10.672v-42.655 C106.655,234.103,101.89,229.33,95.999,229.33z"/><path style="fill:#E6E9ED;" d="M372.119,357.289c0.312,0.016,0.531,0.031,0.609,0.031l0.75-21.328 c-0.281,0-27.156-0.953-55.969-4.031c-52.795-5.609-63.436-13.109-65.029-14.547c-7.453-6.75-15.093-22.64-9.109-59.982 c3.891-24.266,11.844-45.445,11.922-45.656c1.25-3.273,0.797-6.953-1.188-9.835c-2-2.891-5.281-4.609-8.781-4.609H117.327 c-4.171,0-7.953,2.43-9.687,6.211l-22.046,47.999l19.39,8.906l44.343,96.873v21.327h223.777v-21.327h-0.984L372.119,357.289 L372.119,357.289z"/></g><path style="fill:#434A54;" d="M95.999,303.993C60.703,303.993,32,332.695,32,367.991c0,35.281,28.703,63.999,63.999,63.999 c35.281,0,63.999-28.718,63.999-63.999C159.998,332.695,131.28,303.993,95.999,303.993z"/><path style="fill:#F5F7FA;" d="M103.53,375.538c-4.156,4.156-10.922,4.156-15.078,0c-4.172-4.172-4.172-10.921,0-15.093 c4.156-4.172,10.921-4.172,15.078,0C107.702,364.617,107.702,371.366,103.53,375.538z"/><path style="fill:#434A54;" d="M447.992,303.993c-35.296,0-63.998,28.702-63.998,63.998c0,35.281,28.702,63.999,63.998,63.999 c35.281,0,63.999-28.718,63.999-63.999C511.991,332.695,483.273,303.993,447.992,303.993z"/><path style="fill:#E6E9ED;" d="M351.994,137.332c0.266,1.055,26.984,106.818,36.484,219.988l39.248-66.546l-33.077-157.442 L351.994,137.332z"/><path style="fill:#F5F7FA;" d="M447.976,378.663c-4.969,0-9.406-3.484-10.438-8.547l-10.672-52.265 c-1.172-5.766,2.547-11.405,8.312-12.577c5.781-1.188,11.406,2.546,12.594,8.312l10.672,52.265 c1.172,5.781-2.562,11.406-8.328,12.594C449.398,378.585,448.68,378.663,447.976,378.663z"/><path style="fill:#A0D468;" d="M438.226,155.137L426.492,88.81c-0.953-5.391-5.844-9.18-11.28-8.781 c-0.719,0.047-17.859,1.367-35.202,8.32c-31.969,12.828-38.688,33.718-38.688,48.983c0,13.227,5.719,23.492,16.562,29.687 c7.625,4.359,17.781,6.578,30.219,6.578h0.016c20.796,0,41.732-6.109,42.623-6.367C435.945,165.691,439.164,160.488,438.226,155.137 z"/><path style="fill:#CCD1D9;" d="M159.998,314.648c-17.656,0-32,14.359-32,32c0,17.656,14.343,31.999,32,31.999 c17.64,0,31.999-14.343,31.999-31.999C191.997,329.008,177.638,314.648,159.998,314.648z"/><path style="fill:#434A54;" d="M266.652,218.659H95.999c-5.891,0-10.671-4.773-10.671-10.664v-10.664 c0-5.891,4.781-10.672,10.671-10.672h170.653c5.891,0,10.672,4.781,10.672,10.672v10.664 C277.324,213.885,272.543,218.659,266.652,218.659z"/><path style="fill:#E6E9ED;" d="M330.666,165.331c-3.922,0-7.688-2.172-9.562-5.914c-2.625-5.273-0.469-11.679,4.797-14.304 l42.859-21.336c5.281-2.617,11.672-0.477,14.297,4.797s0.484,11.68-4.797,14.305l-42.844,21.335 C333.885,164.972,332.26,165.331,330.666,165.331z"/><path style="fill:#ED5564;" d="M10.657,293.321H32V229.33H10.657c-5.891,0-10.656,4.773-10.656,10.664v42.655 C0.001,288.54,4.767,293.321,10.657,293.321z"/><g><path style="fill:#A0D468;" d="M510.944,320.711c-0.844-1.75-21.108-42.952-65.905-42.952c-8.562,0-17.469,1.562-26.516,4.656 c-32.576,11.125-46.061,34.202-51.639,51.608c-5.922,18.484-4.234,34.468-4.172,35.14c0.438,3.859,2.938,7.188,6.531,8.672 c1.312,0.547,2.703,0.812,4.078,0.812c2.375,0,4.734-0.797,6.656-2.328c0.266-0.219,26.812-21.233,64.232-35.655 c12.859-4.969,27.297-6,37.141-6c10.609,0,18.218,1.188,18.28,1.188c3.906,0.625,7.859-0.969,10.234-4.141 C512.241,328.523,512.647,324.289,510.944,320.711z"/><path style="fill:#A0D468;" d="M213.247,334.664c-0.125-0.938-3.031-23.406-14.391-46.108 c-15.875-31.765-40.39-48.554-70.858-48.554c-28.39,0-52.78,4.844-72.483,14.398c-16.297,7.898-29.406,18.952-38.984,32.89 C0.188,311.07,0,334.977,0,335.992c0,5.891,4.766,10.656,10.656,10.656h191.996c3.062,0,5.984-1.312,8-3.594 C212.684,340.758,213.622,337.695,213.247,334.664z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                        </svg>
                    </div>

                    <!-- title -->
                    <div class="mt-3 flex w-full justify-center items-center">
                        <h1 class="text-2xl text-[color:rgba(var(--ni-gray-600))]">Essentials</h1>
                        <span class="flex ml-2 my-auto py-0.5 px-1 border border-[color:rgba(var(--ni-danger-400))] bg-[color:rgba(var(--ni-danger-400))] animate-bounce rounded-xl">       
                            <svg class="w-4 h-4 mr-1 text-[color:rgba(var(--ni-yellow-300))] fill-[color:rgba(var(--ni-yellow-300))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                            </svg>
                            <span class="text-white my-auto text-des">Popular</span>
                        </span>
                    </div>

                    <!-- small title -->
                    <div class="flex w-full mt-1 justify-center items-center">
                        <h1 class="font-bold text-sm text-[color:rgba(var(--ni-gray-400))] py-1">For the basic</h1>
                    </div>

                    <!-- price -->
                    <div class="mt-5 flex justify-center items-center">
                        <span class="text-lg">$</span>
                        <h1 id="essentials-price" class="text-4xl font-bold text-[color:rgba(var(--ni-yellow-400))]">49</h1>
                        <span class="mt-5">/month</span>
                    </div>

                    <!-- price title -->
                    <div class="mt-2">
                        <div class="flex justify-center items-center">
                            <p class="text-sm text-[color:rgba(var(--ni-gray-400))] mr-2">For up to 50 users</p>
                            <svg class="w-5 h-5 text-[color:rgba(var(--ni-primary-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- button -->
                    <div class="mt-5 mb-3">
                        <button class="w-full mt-5 p-2 rounded-lg border border-[color:rgba(var(--ni-gray-500))] hover:bg-[color:rgba(var(--ni-gray-500))] text-[color:rgba(var(--ni-gray-500))] hover:text-white duration-500">Request Access</button>
                    </div>

                    <!-- details 1 -->
                    <div class="mx-5 sm:mx-5 md:mx-10 lg:mx-10 xl:mx-10 py-3">
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))] fill-[color:rgba(var(--ni-primary-400))]" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-point" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="12" r="4"></circle>
                            </svg>
                            <div class="flex text-sm ml-3 my-auto">
                                <h3 class="font-bold">1000</h3>
                                <p class="ml-1 text-[color:rgba(var(--ni-gray-500))]">Conversations P/M</p>
                            </div>
                        </div>
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))] fill-[color:rgba(var(--ni-primary-400))]" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-point" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="12" r="4"></circle>
                            </svg>
                            <div class="flex text-sm ml-3 my-auto">
                                <h3 class="font-bold">3</h3>
                                <p class="ml-1 text-[color:rgba(var(--ni-gray-500))]">Voice Channels</p>
                            </div>
                        </div>
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))] fill-[color:rgba(var(--ni-primary-400))]" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-point" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="12" r="4"></circle>
                            </svg>
                            <div class="flex text-sm ml-3 my-auto">
                                <h3 class="font-bold">5 GB</h3>
                                <p class="ml-1 text-[color:rgba(var(--ni-gray-500))]">Data Storage</p>
                            </div>
                        </div>
                    </div>

                    <!-- center line -->
                    <div class="w-full border border-[color:rgba(var(--ni-gray-100))] rounded-lg"></div>

                    <!-- details 2 -->
                    <div class="mx-5 sm:mx-5 md:mx-10 lg:mx-10 xl:mx-10 py-3">
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-greengray-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <div class="flex text-sm ml-3 my-auto">
                                <p class="text-[color:rgba(var(--ni-gray-500))]">Plus</p>
                                <h3 class="ml-1 font-bold text-[color:rgba(var(--ni-danger-500))]">Freemium</h3>
                            </div>
                        </div>
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-greengray-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <div class="flex text-sm ml-3 my-auto">
                                <p class="text-[color:rgba(var(--ni-gray-500))]">Chat Widget</p>
                            </div>
                        </div>
                        <div class="flex my-auto pt-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-greengray-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <div class="flex text-sm ml-3 my-auto">
                                <p class="text-[color:rgba(var(--ni-gray-500))]">Realtime Overview</p>
                            </div>
                        </div>
                    </div>
                </div>  
            </li>

            <!-- "team" pricing card -->
            <li class="eachCard col-span-1 w-auto border border-[color:rgba(var(--ni-gray-200))] rounded-xl shadow-lg transform transition duration-500 hover:scale-105 hover:border-2 hover:border-[color:rgba(var(--ni-primary-400))]">
                <div class="w-full mx-auto px-3">

                    <!-- "team" pricing svg -->
                    <div class="flex justify-center item-center">
                        <svg class="w-40 h-40" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <path style="fill:#F9AA1A;" d="M439.868,216.586h-42.769l-35.291-77.501c-2.839-6.235-9.381-9.916-16.192-9.09l-149.29,18.067 c-58.788,7.114-112.086,38.894-146.299,87.211l-25.299,31.831c-2.21,2.781-3.414,6.228-3.414,9.779v56.316 c0,8.68,7.037,15.717,15.717,15.717h459.251c8.68,0,15.717-7.037,15.717-15.717v-44.482 C512,248.943,479.641,216.586,439.868,216.586z"/><path style="fill:#FFBE24;" d="M266.657,139.55l-70.331,8.511c-58.788,7.114-112.086,38.894-146.299,87.211l-25.299,31.831 c-2.21,2.781-3.414,6.228-3.414,9.779v56.316c0,8.68,7.037,15.717,15.717,15.717h229.626L266.657,139.55z"/><path style="fill:#995D3D;" d="M28.316,318.881H15.717C7.037,318.881,0,311.844,0,303.164s7.037-15.717,15.717-15.717h12.599 c8.68,0,15.717,7.037,15.717,15.717S36.998,318.881,28.316,318.881z"/><path style="fill:#7A4126;" d="M307.023,294.162h-20.431c-8.68,0-15.717-7.037-15.717-15.717s7.037-15.717,15.717-15.717h20.431 c8.68,0,15.717,7.037,15.717,15.717S315.703,294.162,307.023,294.162z"/><path style="fill:#995D3D;" d="M296.808,294.162h-10.216c-8.68,0-15.717-7.037-15.717-15.717s7.037-15.717,15.717-15.717h10.216 V294.162z"/><path style="fill:#BDDEFF;" d="M361.808,139.085c-2.839-6.235-9.381-9.916-16.192-9.09l-149.29,18.067 c-50.641,6.128-97.195,30.572-130.999,68.109h331.582L361.808,139.085z"/><path style="fill:#D7EBFF;" d="M266.657,139.55l-70.331,8.511c-50.641,6.128-97.195,30.572-130.999,68.109h201.329V139.55z"/><path style="fill:#212A2D;" d="M196.326,148.06c-50.641,6.128-97.195,30.572-130.999,68.109h145.209v-69.83L196.326,148.06z"/><path style="fill:#2E373A;" d="M125.904,169.618c-22.746,11.643-43.322,27.392-60.577,46.553h60.58L125.904,169.618z"/><path style="fill:#212A2D;" d="M410.94,382.12c-28.587,0-51.844-23.257-51.844-51.844s23.257-51.844,51.844-51.844 s51.844,23.257,51.844,51.844S439.526,382.12,410.94,382.12z"/><path style="fill:#2E373A;" d="M410.94,382.12c-28.587,0-51.844-23.257-51.844-51.844s23.257-51.844,51.844-51.844V382.12z"/><circle style="fill:#A2B3BF;" cx="410.945" cy="330.273" r="20.891"/><path style="fill:#C9D2D9;" d="M410.94,351.168c-11.539,0-20.891-9.354-20.891-20.891c0-11.539,9.354-20.891,20.891-20.891V351.168z"/><path style="fill:#212A2D;" d="M125.907,382.12c-28.587,0-51.844-23.257-51.844-51.844s23.257-51.844,51.844-51.844 s51.844,23.257,51.844,51.844S154.494,382.12,125.907,382.12z"/><path style="fill:#2E373A;" d="M125.907,382.12c-28.587,0-51.844-23.257-51.844-51.844s23.257-51.844,51.844-51.844 C125.907,278.432,125.907,382.12,125.907,382.12z"/><circle style="fill:#A2B3BF;" cx="125.906" cy="330.273" r="20.891"/><path style="fill:#C9D2D9;" d="M125.907,351.168c-11.539,0-20.891-9.354-20.891-20.891c0-11.539,9.354-20.891,20.891-20.891 C125.907,309.385,125.907,351.168,125.907,351.168z"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                        </svg>                    
                    </div>

                    <!-- title -->
                    <div class="mt-3 flex w-full justify-center items-center">
                        <h1 class="text-2xl text-[color:rgba(var(--ni-gray-600))]">Team</h1>
                        <span class="flex ml-2 my-auto py-0.5 px-1 border border-[color:rgba(var(--ni-greengray-400))] bg-[color:rgba(var(--ni-greengray-400))] rounded-xl">
                            <svg class="w-4 h-4 mr-1 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                            </svg>
                            <span class="text-white my-auto text-des">Advanced</span>
                        </span>
                    </div>

                    <!-- small title -->
                    <div class="flex w-full mt-1 justify-center items-center">
                        <h1 class="font-bold text-sm text-[color:rgba(var(--ni-gray-400))] py-1">For the small teams</h1>
                    </div>

                    <!-- price -->
                    <div class="mt-5 flex justify-center items-center">
                        <span class="text-lg">$</span>
                        <h1 id="team-price" class="text-4xl font-bold text-[color:rgba(var(--ni-danger-400))]">89</h1>
                        <span class="mt-5">/month</span>
                    </div>

                    <!-- price title -->
                    <div class="mt-2">
                        <div class="flex justify-center items-center">
                            <p class="text-sm text-[color:rgba(var(--ni-gray-400))] mr-2">For up to 100 users</p>
                            <svg class="w-5 h-5 text-[color:rgba(var(--ni-indigo-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- button -->
                    <div class="mt-5 mb-3">
                        <button class="w-full mt-5 p-2 rounded-lg border border-[color:rgba(var(--ni-gray-500))] hover:bg-[color:rgba(var(--ni-gray-500))] text-[color:rgba(var(--ni-gray-500))] hover:text-white duration-500">Request Access</button>
                    </div>

                    <!-- details 1 -->
                    <div class="mx-5 sm:mx-5 md:mx-10 lg:mx-10 xl:mx-10 py-3">
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))] fill-[color:rgba(var(--ni-primary-400))]" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-point" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="12" r="4"></circle>
                            </svg>
                            <div class="flex text-sm ml-3 my-auto">
                                <h3 class="font-bold">2000</h3>
                                <p class="ml-1 text-[color:rgba(var(--ni-gray-500))]">Conversations P/M</p>
                            </div>
                        </div>
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))] fill-[color:rgba(var(--ni-primary-400))]" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-point" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="12" r="4"></circle>
                            </svg>
                            <div class="flex text-sm ml-3 my-auto">
                                <h3 class="font-bold">5</h3>
                                <p class="ml-1 text-[color:rgba(var(--ni-gray-500))]">Voice Channels</p>
                            </div>
                        </div>
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))] fill-[color:rgba(var(--ni-primary-400))]" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-point" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="12" r="4"></circle>
                            </svg>
                            <div class="flex text-sm ml-3 my-auto">
                                <h3 class="font-bold">25 GB</h3>
                                <p class="ml-1 text-[color:rgba(var(--ni-gray-500))]">Data Storage</p>
                            </div>
                        </div>
                    </div>

                    <!-- center line -->
                    <div class="w-full border border-[color:rgba(var(--ni-gray-100))] rounded-lg"></div>

                    <!-- details 2 -->
                    <div class="mx-5 sm:mx-5 md:mx-10 lg:mx-10 xl:mx-10 py-3">
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-greengray-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <div class="flex text-sm ml-3 my-auto">
                                <p class="text-[color:rgba(var(--ni-gray-500))]">Plus</p>
                                <h3 class="ml-1 font-bold text-[color:rgba(var(--ni-danger-500))]">Essentials</h3>
                            </div>
                        </div>
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-greengray-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <div class="flex text-sm ml-3 my-auto">
                                <p class="text-[color:rgba(var(--ni-gray-500))]">Channel Statistics</p>
                            </div>
                        </div>
                        <div class="flex my-auto pt-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-greengray-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <div class="flex text-sm ml-3 my-auto">
                                <p class="text-[color:rgba(var(--ni-gray-500))]">Artificial Intelligence</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <!-- "professional" pricing card -->
            <li class="eachCard col-span-1 w-auto border border-[color:rgba(var(--ni-gray-200))] rounded-xl shadow-lg transform transition duration-500 hover:scale-105 hover:border-2 hover:border-[color:rgba(var(--ni-primary-400))]">
                <div class="w-full mx-auto px-3">

                    <!-- "essentials" pricing svg -->
                    <div class="flex justify-center item-center">
                        <svg class="w-40 h-40" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g><rect x="336" y="200" style="fill:#5C546A;" width="40" height="176"/></g><g>
                            <path style="fill:#5C546A;" d="M480,392H32c-8.837,0-16-7.163-16-16v-16h480v16C496,384.837,488.837,392,480,392z"/></g><g><path style="fill:#FF4F19;" d="M492.031,247.459l-77.883-108.58C412.625,137.055,410.375,136,408,136h-32c-4.422,0-8,3.582-8,8 v216c0,4.418,3.578,8,8,8h112c13.234,0,24-10.766,24-24v-72.881C512,259.256,503.352,249.377,492.031,247.459z"/></g><g><path style="fill:#5C546A;" d="M446.702,144c10.33,0,19.502,6.61,22.768,16.411l22.561,87.048c0,0-57.544-11.693-74.491-16.34 C407.143,228.269,400,218.78,400,208v-64H446.702z"/></g><g><g><path style="fill:#8A8895;" d="M400,152c-4.422,0-8-3.582-8-8v-38.059c0-4.27-1.664-8.289-4.688-11.316l-8.969-8.969 c-3.125-3.125-3.125-8.188,0-11.313s8.188-3.125,11.313,0l8.969,8.969c6.047,6.051,9.375,14.086,9.375,22.629V144 C408,148.418,404.422,152,400,152z"/></g></g><g><path style="fill:#527991;" d="M328,104H24c-13.234,0-24,10.766-24,24v216c0,13.234,10.766,24,24,24c0,0,315.578,0,320,0 s8-3.582,8-8V128C352,114.766,341.234,104,328,104z"/></g><g><path style="fill:#5D647F;" d="M0,344c0,13.234,10.766,24,24,24h320c4.422,0,8-3.582,8-8v-56H0V344z"/></g><g><path style="fill:#8A8895;" d="M248,408h-64c-8.837,0-16-7.163-16-16v-16c0-8.837,7.163-16,16-16h64c8.837,0,16,7.163,16,16v16 C264,400.837,256.837,408,248,408z"/></g><g><g><path style="fill:#5C546A;" d="M192,392c-2.078,0-4.164-0.883-5.68-2.32c-1.445-1.52-2.32-3.602-2.32-5.68 c0-2.082,0.875-4.16,2.32-5.68c3.039-2.961,8.398-2.961,11.359,0c1.438,1.52,2.32,3.598,2.32,5.68c0,2.078-0.883,4.16-2.398,5.68 C196.156,391.117,194.078,392,192,392z"/></g></g><g><path style="fill:#FFD100;" d="M484,304c-6.627,0-12,5.373-12,12s5.373,12,12,12h12v-24H484z"/></g><g><g><circle style="fill:#5C546A;" cx="96" cy="384" r="56"/></g><g><circle style="fill:#8A8895;" cx="96" cy="384" r="32"/></g></g><g><g><circle style="fill:#5C546A;" cx="416" cy="384" r="56"/></g><g><circle style="fill:#8A8895;" cx="416" cy="384" r="32"/></g></g><g><rect x="496" y="304" style="fill:#FFFFFF;" width="16" height="24"/></g><g><path style="fill:#E7001E;" d="M472,136h-96c-4.418,0-8,3.582-8,8v8h104c4.422,0,8-3.582,8-8S476.422,136,472,136z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                       </svg>                       
                    </div>
 
                    <!-- title -->
                    <div class="mt-3 flex w-full justify-center items-center">
                        <h1 class="text-2xl text-[color:rgba(var(--ni-gray-600))]">Professional</h1>
                        <span class="flex ml-2 my-auto py-0.5 px-1 border border-[color:rgba(var(--ni-primary-400))] bg-[color:rgba(var(--ni-primary-400))] rounded-xl">
                            <svg class="w-4 h-4 mr-1 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
                            </svg>
                            <span class="text-white my-auto text-des">Unlimited</span>
                        </span>
                    </div>

                    <!-- small title -->
                    <div class="flex w-full mt-1 justify-center items-center">
                        <h1 class="font-bold text-sm text-[color:rgba(var(--ni-gray-400))] py-1">For the professionals</h1>
                    </div>

                    <!-- price -->
                    <div class="mt-5 flex justify-center items-center">
                        <span class="text-lg">$</span>
                        <h1 id="professional-price" class="text-4xl font-bold text-[color:rgba(var(--ni-primary-400))]">129</h1>
                        <span class="mt-5">/month</span>
                    </div>

                    <!-- price title -->
                    <div class="mt-2">
                        <div class="flex justify-center items-center">
                            <p class="text-sm text-[color:rgba(var(--ni-gray-400))] mr-2">For organizations</p>
                            <svg class="w-5 h-5 text-[color:rgba(var(--ni-greengray-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- button -->
                    <div class="mt-5 mb-3">
                        <button class="w-full mt-5 p-2 rounded-lg border border-[color:rgba(var(--ni-gray-500))] hover:bg-[color:rgba(var(--ni-gray-500))] text-[color:rgba(var(--ni-gray-500))] hover:text-white duration-500">Request Access</button>
                    </div>

                    <!-- details 1 -->
                    <div class="mx-5 sm:mx-5 md:mx-10 lg:mx-10 xl:mx-10 py-3">
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))] fill-[color:rgba(var(--ni-primary-400))]" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-point" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="12" r="4"></circle>
                            </svg>
                            <div class="flex text-sm ml-3 my-auto">
                                <h3 class="font-bold">5000</h3>
                                <p class="ml-1 text-[color:rgba(var(--ni-gray-500))]">Conversations P/M</p>
                            </div>
                        </div>
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))] fill-[color:rgba(var(--ni-primary-400))]" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-point" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="12" r="4"></circle>
                            </svg>
                            <div class="flex text-sm ml-3 my-auto">
                                <h3 class="font-bold">20</h3>
                                <p class="ml-1 text-[color:rgba(var(--ni-gray-500))]">Voice Channels</p>
                            </div>
                        </div>
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))] fill-[color:rgba(var(--ni-primary-400))]" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-point" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="12" r="4"></circle>
                            </svg>
                            <div class="flex text-sm ml-3 my-auto">
                                <h3 class="font-bold">100 GB</h3>
                                <p class="ml-1 text-[color:rgba(var(--ni-gray-500))]">Data Storage</p>
                            </div>
                        </div>
                    </div>

                    <!-- center line -->
                    <div class="w-full border border-[color:rgba(var(--ni-gray-100))] rounded-lg"></div>

                    <!-- details 2 -->
                    <div class="mx-5 sm:mx-5 md:mx-10 lg:mx-10 xl:mx-10 py-3">
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-greengray-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <div class="flex text-sm ml-3 my-auto">
                                <p class="text-[color:rgba(var(--ni-gray-500))]">Plus</p>
                                <h3 class="ml-1 font-bold text-[color:rgba(var(--ni-danger-500))]">Advanced</h3>
                            </div>
                        </div>
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-greengray-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <div class="flex text-sm ml-3 my-auto">
                                <p class="text-[color:rgba(var(--ni-gray-500))]">Outbound Webhooks</p>
                            </div>
                        </div>
                        <div class="flex my-auto pt-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-greengray-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <div class="flex text-sm ml-3 my-auto">
                                <p class="text-[color:rgba(var(--ni-gray-500))]">Own Success Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div> 
</div>

@endsection

@section('internalScript')

<script>
    
    // Pricing with get started page function
    const pricingWithGetStartedPage = () => {
        
        const toggleButton      = $("#toggle-button");
        const essentialsPrice   = $("#essentials-price");
        const teamPrice         = $("#team-price");
        const professionalPrice = $("#professional-price");

        // toggle button
        toggleButton.click(function() {

            if ( essentialsPrice.text() == "49" ) {     // change price contents
                essentialsPrice.text("46.75");
                teamPrice.text("84.91");
                professionalPrice.text("123.07");
            } else {                                    // change back to original price contents
                essentialsPrice.text("49");
                teamPrice.text("89");
                professionalPrice.text("129");
            }
        });
    }

    // call function
    pricingWithGetStartedPage();

</script>

@endsection
