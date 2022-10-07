@extends('master')
@section('content')

<div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div>

<!-- Design Command Palettes with images and descriptions (Search) -->

<!-- main -->
<div class="mainCard">
    <!-- main card -->
    <ul class="cardContainer grid-cols-1">
        <li id="swith-mode" class="eachCard px-0 pt-0 col-span-2 md:col-span-1 h-screen bg-[color:rgba(var(--ni-gray-100))] border">

            <!-- switch mode between light/dark button -->
            <div class="text-center my-5">
                <button id="light-dark-btn" class="rounded-lg px-4 py-2 bg-white dark:bg-[color:rgba(var(--ni-gray-900))] hover:bg-[color:rgba(var(--ni-primary-600))] dark:hover:bg-[color:rgba(var(--ni-primary-600))] text-[color:rgba(var(--ni-gray-600))] hover:text-white dark:text-white border border-[color:rgba(var(--ni-gray-300))] hover:border-[color:rgba(var(--ni-primary-600))] before:content-['Light'] dark:before:content-['Dark'] transition duration-300"> Mode</button>
            </div>

            <div class="relative my-5 z-10 mx-auto max-w-3xl transform rounded-xl bg-white dark:bg-slate-900 shadow-lg ring-1 ring-black ring-opacity-5 transition-all opacity-100 scale-100">

                <!-- search bar -->
                <div class="search relative border-b border-[color:rgba(var(--ni-gray-200))]">
                    <svg class="pointer-events-none absolute top-3.5 left-4 h-5 w-5 text-[color:rgba(var(--ni-gray-400))] dark:text-[color:rgba(var(--ni-gray-300))]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                    </svg>
                    <input class="h-12 w-full border-0 bg-transparent pl-11 pr-4 outline-none text-[color:rgba(var(--ni-gray-800))] dark:text-[color:rgba(var(--ni-gray-300))] placeholder-[color:rgba(var(--ni-gray-500))] dark:placeholder-[color:rgba(var(--ni-gray-300))] focus:ring-0 sm:text-sm" type="search" placeholder="Search..." data-search>
                </div>

                <!-- data -->
                <ul class="items max-h-96 scroll-py-3 overflow-y-auto p-3" id="options" role="listbox">
                    
                    <!-- item 1 -->
                    <li class="group flex cursor-default select-none rounded-xl p-3 hover:bg-[color:rgba(var(--ni-gray-100))] dark:hover:bg-[color:rgba(var(--ni-gray-600))]" id="option-1" role="option" tabindex="-1" data-filter-item data-filter-name="text">
                        <div class="flex h-10 w-10 flex-none items-center justify-center rounded-lg bg-[color:rgba(var(--ni-indigo-500))]">
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>
                        </div>
                        <div class="ml-4 flex-auto">
                            <p class="text-sm font-medium text-[color:rgba(var(--ni-gray-700))] dark:text-white">Text</p>
                            <p class="text-sm text-[color:rgba(var(--ni-gray-500))] dark:text-white">Add freeform text with basic formatting options.</p>
                        </div>
                    </li>

                    <!-- item 2 -->
                    <li class="group flex cursor-default select-none rounded-xl p-3 hover:bg-[color:rgba(var(--ni-gray-100))] dark:hover:bg-[color:rgba(var(--ni-gray-600))]" id="option-1" role="option" tabindex="-1" data-filter-item data-filter-name="video">
                        <div class="flex h-10 w-10 flex-none items-center justify-center rounded-lg bg-[color:rgba(var(--ni-blue-600))]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-6 w-6 text-white">
                                <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z"></path>
                            </svg>
                        </div>
                        <div class="ml-4 flex-auto">
                            <p class="text-sm font-medium text-[color:rgba(var(--ni-gray-700))] dark:text-white">Video</p>
                            <p class="text-sm text-[color:rgba(var(--ni-gray-500))] dark:text-white">Add a video from YouTube, Vimeo or other services.</p>
                        </div>
                    </li>

                    <!-- item 3 -->
                    <li class="group flex cursor-default select-none rounded-xl p-3 hover:bg-[color:rgba(var(--ni-gray-100))] dark:hover:bg-[color:rgba(var(--ni-gray-600))]" id="option-1" role="option" tabindex="-1" data-filter-item data-filter-name="page">
                        <div class="flex h-10 w-10 flex-none items-center justify-center rounded-lg bg-[color:rgba(var(--ni-violet-500))]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-6 w-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"></path>
                            </svg>
                        </div>
                        <div class="ml-4 flex-auto">
                            <p class="text-sm font-medium text-[color:rgba(var(--ni-gray-700))] dark:text-white">Page</p>
                            <p class="text-sm text-[color:rgba(var(--ni-gray-500))] dark:text-white">Add a new blank page to your project.</p>
                        </div>
                    </li>

                    <!-- item 4 -->
                    <li class="group flex cursor-default select-none rounded-xl p-3 hover:bg-[color:rgba(var(--ni-gray-100))] dark:hover:bg-[color:rgba(var(--ni-gray-600))]" id="option-1" role="option" tabindex="-1" data-filter-item data-filter-name="calendar">
                        <div class="flex h-10 w-10 flex-none items-center justify-center rounded-lg bg-[color:rgba(var(--ni-teal-500))]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-6 w-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5"></path>
                            </svg>
                        </div>
                        <div class="ml-4 flex-auto">
                            <p class="text-sm font-medium text-[color:rgba(var(--ni-gray-700))] dark:text-white">Calendar</p>
                            <p class="text-sm text-[color:rgba(var(--ni-gray-500))] dark:text-white">Add a full month calendar or a week view calendar.</p>
                        </div>
                    </li>

                    <!-- item 5 -->
                    <li class="group flex cursor-default select-none rounded-xl p-3 hover:bg-[color:rgba(var(--ni-gray-100))] dark:hover:bg-[color:rgba(var(--ni-gray-600))]" id="option-1" role="option" tabindex="-1" data-filter-item data-filter-name="table">
                        <div class="flex h-10 w-10 flex-none items-center justify-center rounded-lg bg-[color:rgba(var(--ni-cyan-500))]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-6 w-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0112 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5"></path>
                            </svg>
                        </div>
                        <div class="ml-4 flex-auto">
                            <p class="text-sm font-medium text-[color:rgba(var(--ni-gray-700))] dark:text-white">Table</p>
                            <p class="text-sm text-[color:rgba(var(--ni-gray-500))] dark:text-white">Add a table for displaying larger sets of data.</p>
                        </div>
                    </li>

                    <!-- item 6 -->
                    <li class="group flex cursor-default select-none rounded-xl p-3 hover:bg-[color:rgba(var(--ni-gray-100))] dark:hover:bg-[color:rgba(var(--ni-gray-600))]" id="option-1" role="option" tabindex="-1" data-filter-item data-filter-name="code">
                        <div class="flex h-10 w-10 flex-none items-center justify-center rounded-lg bg-[color:rgba(var(--ni-purple-500))]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-6 w-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5"></path>
                            </svg>
                        </div>
                        <div class="ml-4 flex-auto">
                            <p class="text-sm font-medium text-[color:rgba(var(--ni-gray-700))] dark:text-white">Code</p>
                            <p class="text-sm text-[color:rgba(var(--ni-gray-500))] dark:text-white">Add raw HTML, JavaScript or CSS code.</p>
                        </div>
                    </li>

                    <!-- item 7 -->
                    <li class="group flex cursor-default select-none rounded-xl p-3 hover:bg-[color:rgba(var(--ni-gray-100))] dark:hover:bg-[color:rgba(var(--ni-gray-600))]" id="option-1" role="option" tabindex="-1" data-filter-item data-filter-name="image">
                        <div class="flex h-10 w-10 flex-none items-center justify-center rounded-lg bg-[color:rgba(var(--ni-rose-500))]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-6 w-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"></path>
                            </svg>
                        </div>
                        <div class="ml-4 flex-auto">
                            <p class="text-sm font-medium text-[color:rgba(var(--ni-gray-700))] dark:text-white">Image</p>
                            <p class="text-sm text-[color:rgba(var(--ni-gray-500))] dark:text-white">Add a simple image or a photo gallery.</p>
                        </div>
                    </li>
                </ul>

                <!-- error message -->
                <div id="error-message" class="px-5 pt-5 pb-10 text-center text-sm sm:px-14 hidden">
                    <svg class="mx-auto h-6 w-6 text-[color:rgba(var(--ni-gray-400))] dark:text-[color:rgba(var(--ni-gray-300))]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                    </svg>
                    <p class="mt-4 font-semibold text-[color:rgba(var(--ni-gray-900))] dark:text-white">No results found</p>
                    <p class="mt-2 text-[color:rgba(var(--ni-gray-500))] dark:text-[color:rgba(var(--ni-gray-300))]">No components found for this search term. Please try again.</p>
                </div>
            </div>
        </li>
    </ul>
</div>  

@endsection

@section('internalScript')

<script>

    // Design Command Palettes with images and descriptions (Search) function
    const commandPalettesWithImagesAndDescriptions = () => {
        
        const searchData = $("[data-search]");

        searchData.on('keyup', function() {

            // get search values from inputs
            const searchVal = $(this).val();

            // access <li> classes
            const filterItems = $('[data-filter-item]');

            if ( searchVal != '' ) {
                filterItems.addClass('hidden');
                $('[data-filter-item][data-filter-name*="' + searchVal.toLowerCase() + '"]').removeClass('hidden');
            } else {
                filterItems.removeClass('hidden');
            }

            const errorMessage = $("#error-message");

            // count hidden lists length
            const hiddenListsLength = $('.items .hidden').length;

            // count all lists length
            const entirelistsLength = $('.items li').length;

            // show error message if there is no data
            if ( hiddenListsLength == (entirelistsLength) ) {
                errorMessage.removeClass("hidden");
            } else {
                errorMessage.addClass("hidden");
            }
        });

        // light and dark mode
        const switchBtn    = $("#light-dark-btn");
        const lightAndDark = $("#swith-mode");

        // switch mode button
        switchBtn.on("click", () => {
            lightAndDark.toggleClass("dark");
        });

    }

    // call function
    commandPalettesWithImagesAndDescriptions();

</script>

@endsection
