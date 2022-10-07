@extends('master')
@section('content')

<div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div>

<!-- Design Simple dark Command Palettes (Search) -->

<!-- main -->
<div class="mainCard">
    <!-- main card -->
    <ul class="cardContainer grid-cols-1">
        <li id="swith-mode" class="dark eachCard px-0 pt-0 col-span-2 md:col-span-1 h-screen bg-[color:rgba(var(--ni-gray-100))] border">

            <!-- switch mode between light/dark button -->
            <div class="text-center my-5">
                <button id="light-dark-btn" class="rounded-lg px-4 py-2 bg-white dark:bg-[color:rgba(var(--ni-gray-900))] hover:bg-[color:rgba(var(--ni-primary-500))] dark:hover:bg-[color:rgba(var(--ni-primary-500))] text-[color:rgba(var(--ni-gray-600))] hover:text-white dark:text-white border border-[color:rgba(var(--ni-gray-300))] hover:border-[color:rgba(var(--ni-primary-500))] before:content-['Light'] dark:before:content-['Dark'] transition duration-300"> Mode</button>
            </div>

            <div class="relative my-5 z-10 mx-auto max-w-xl transform rounded-xl bg-white dark:bg-slate-900 p-2 shadow-lg ring-1 ring-black ring-opacity-5 transition-all opacity-100 scale-100">

                <!-- search bar -->
                <div class="search px-2 pt-2 pb-1">
                    <input class="w-full rounded-md border-0 bg-[color:rgba(var(--ni-gray-100))] px-4 py-2.5 outline-none placeholder-[color:rgba(var(--ni-gray-500))] focus:ring-0 sm:text-sm" type="search" placeholder="Search..." data-search>
                </div>

                <!-- data -->
                <ul class="items max-h-72 scroll-py-2 px-2 pt-2 pb-1 overflow-y-auto text-sm text-[color:rgba(var(--ni-gray-800))]"></ul>

                <!-- error message -->
                <div id="error-message" class="px-5 pt-5 pb-10 text-center text-sm sm:px-14 hidden">
                    <svg class="mx-auto h-6 w-6 text-[color:rgba(var(--ni-gray-400))]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                    </svg>
                    <p class="mt-4 font-semibold text-[color:rgba(var(--ni-gray-900))]">No people found</p>
                    <p class="mt-2 text-[color:rgba(var(--ni-gray-500))]">We couldn’t find anything with that term. Please try again.</p>
                </div>
            </div>
        </li>
    </ul>
</div>  

@endsection

@section('internalScript')

<script>

    // Design Simple dark Command Palettes (Search) function
    const simpleDarkCommandPalettes = () => {

        const items = $(".items");

        // list items
        const lists = $(`
            <li class="cursor-default select-none rounded-md px-4 py-2 dark:text-white hover:bg-[color:rgba(var(--ni-primary-500))] focus:bg-[color:rgba(var(--ni-primary-500))] text-gray-600 hover:text-white" data-filter-item data-filter-name="roungridh him">Roungridh Him</li>
            <li class="cursor-default select-none rounded-md px-4 py-2 dark:text-white hover:bg-[color:rgba(var(--ni-primary-500))] focus:bg-[color:rgba(var(--ni-primary-500))] text-gray-600 hover:text-white" data-filter-item data-filter-name="kim chi">Kim Chi</li>
            <li class="cursor-default select-none rounded-md px-4 py-2 dark:text-white hover:bg-[color:rgba(var(--ni-primary-500))] focus:bg-[color:rgba(var(--ni-primary-500))] text-gray-600 hover:text-white" data-filter-item data-filter-name="emily selman">Emily Selman</li>
            <li class="cursor-default select-none rounded-md px-4 py-2 dark:text-white hover:bg-[color:rgba(var(--ni-primary-500))] focus:bg-[color:rgba(var(--ni-primary-500))] text-gray-600 hover:text-white" data-filter-item data-filter-name="banana apple">Banana Apple</li>
            <li class="cursor-default select-none rounded-md px-4 py-2 dark:text-white hover:bg-[color:rgba(var(--ni-primary-500))] focus:bg-[color:rgba(var(--ni-primary-500))] text-gray-600 hover:text-white hidden" data-filter-item data-filter-name="benjamin russel">Benjamin Russel</li>
            <li class="cursor-default select-none rounded-md px-4 py-2 dark:text-white hover:bg-[color:rgba(var(--ni-primary-500))] focus:bg-[color:rgba(var(--ni-primary-500))] text-gray-600 hover:text-white hidden" data-filter-item data-filter-name="chelsea hagon">Chelsea Hagon</li>
            <li class="cursor-default select-none rounded-md px-4 py-2 dark:text-white hover:bg-[color:rgba(var(--ni-primary-500))] focus:bg-[color:rgba(var(--ni-primary-500))] text-gray-600 hover:text-white hidden" data-filter-item data-filter-name="leslie alexander">Leslie Alexander</li>
            <li class="cursor-default select-none rounded-md px-4 py-2 dark:text-white hover:bg-[color:rgba(var(--ni-primary-500))] focus:bg-[color:rgba(var(--ni-primary-500))] text-gray-600 hover:text-white hidden" data-filter-item data-filter-name="hello world">Hello World</li>
        `);

        // append list items to <ul>
        items.append(lists);

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

            // count hidden list length
            const countHiddenListsLength = $('.items .hidden').length;

            // count all list length
            const countAlllistsLength = $('.items li').length;

            // check if there is no data found
            if ( countHiddenListsLength == countAlllistsLength ) {
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
    simpleDarkCommandPalettes();

</script>

@endsection
