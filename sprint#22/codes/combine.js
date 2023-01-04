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

// Design Command Palettes with icons (Search) function
const commandPalettesWithIcons = () => {

    const recentSearches = $("#recent-searches");
    const quickActions   = $("#quick-actions");
    const items          = $(".items");

    // hide all item results
    items.addClass("hidden");
    
    const searchData = $("[data-search]");

    searchData.on('keyup', function() {

        // get search values from inputs
        const searchVal = $(this).val();
        
        searchValLength = searchVal.length;

        // hide & show recent searches/quick actions
        if ( searchValLength >= 1 ) {
            recentSearches.addClass("hidden");
            quickActions.addClass("hidden");
        } else {
            recentSearches.removeClass("hidden");
            quickActions.removeClass("hidden");    
        }

        // hide & show search results
        if ( searchValLength >= 1 ) {
            items.removeClass("hidden");
        } else if ( searchValLength == 0 ) {
            items.addClass("hidden");
        } else {
            items.removeClass("hidden");
        }

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
        if ( hiddenListsLength == (entirelistsLength*2) ) {     // multipy by 2: because jump-to also hidden
            errorMessage.removeClass("hidden");
        } else {
            errorMessage.addClass("hidden");
        }
    });

    const recentItems  = $("#recent-items")
    const recentJumpTo = $("#recent-items li span:last-child");

    // mouseover & mouseout to hide & show jump to... (recent searches)
    recentItems.each(function() {
        $(this).mouseover(function() {
            $(this).find(recentJumpTo).removeClass("hidden");
        });

        $(this).mouseout(function() {
            $(this).find(recentJumpTo).addClass("hidden");
        });
    });

    const entireList = $(".items li");
    const jumpTo = $(".items li span:last-child");

    // mouseover & mouseout to hide & show jump to...
    entireList.each(function() {
        $(this).mouseover(function() {
            $(this).find(jumpTo).removeClass("hidden");
        });

        $(this).mouseout(function() {
            $(this).find(jumpTo).addClass("hidden");  
        });
    });
}

// call function
commandPalettesWithIcons();

// Design Command Palettes Semi-transparent with icons (Search) function
const commandPalettesSemiTransparentWithIcons = () => {

    const recentSearches = $("#recent-searches");
    const quickActions   = $("#quick-actions");
    const items          = $(".items");

    // hide all item results
    items.addClass("hidden");

    const searchData = $("[data-search]");

    searchData.on('keyup', function() {

        // get search values from inputs
        const searchVal = $(this).val();

        searchValLength = searchVal.length;

        // hide & show recent searches/quick actions
        if ( searchValLength >= 1 ) {
            recentSearches.addClass("hidden");
            quickActions.addClass("hidden");
        } else {
            recentSearches.removeClass("hidden");
            quickActions.removeClass("hidden");    
        }

        // hide & show search results
        if ( searchValLength >= 1 ) {
            items.removeClass("hidden");
        } else if ( searchValLength == 0 ) {
            items.addClass("hidden");
        } else {
            items.removeClass("hidden");
        }

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
        if ( hiddenListsLength == (entirelistsLength*2) ) {     // multipy by 2: because jump-to also hidden
            errorMessage.removeClass("hidden");
        } else {
            errorMessage.addClass("hidden");
        }
    });

    const recentItems  = $("#recent-items")
    const recentJumpTo = $("#recent-items li span:last-child");

    // mouseover & mouseout to hide & show jump to... (recent searches)
    recentItems.each(function() {
        $(this).mouseover(function() {
            $(this).find(recentJumpTo).removeClass("hidden");
        });

        $(this).mouseout(function() {
            $(this).find(recentJumpTo).addClass("hidden");
        });
    });

    const entireList = $(".items li");
    const jumpTo = $(".items li span:last-child");

    // mouseover & mouseout to hide & show jump to...
    entireList.each(function() {
        $(this).mouseover(function() {
            $(this).find(jumpTo).removeClass("hidden");
        });

        $(this).mouseout(function() {
            jumpTo.each(function() {
                $(this).addClass("hidden");
            });    
        });
    });
}

// call function
commandPalettesSemiTransparentWithIcons();

// Design Command Palettes with preview (Search) function
const commandPalettesWithPreview = () => {

    // hide all lists
    const entireList = $(".items li");
    entireList.addClass("hidden");

    // list options
    const firstOption    = $("#option-1");
    const secondOption   = $("#option-2");
    const thirdOption    = $("#option-3");
    const fourthOption   = $("#option-4");
    const fifthOption    = $("#option-5");
    const sixthOption    = $("#option-6");
    const seventhOption  = $("#option-7");
    const eighthOption   = $("#option-8");

    // list details
    const firstDetail   = $("#detail-1");
    const secondDetail  = $("#detail-2");
    const thirdDetail   = $("#detail-3");
    const fourthDetail  = $("#detail-4");
    const fifthDetail   = $("#detail-5");
    const sixthDetail   = $("#detail-6");
    const seventhDetail = $("#detail-7");
    const eighthDetail  = $("#detail-8");

    // show only 4 lists at first
    const showLists = $("#option-1, #option-2, #option-3, #option-4");
    showLists.removeClass("hidden");

    // hide all details
    const entireDetails = $("#detail-1, #detail-2, #detail-3, #detail-4, #detail-5, #detail-6, #detail-7, #detail-8");
    entireDetails.addClass("hidden");

    // show first detail
    firstDetail.removeClass("hidden");
    
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
        const divideCenterLine = $("#divide-center");

        // count hidden lists length
        const hiddenListsLength = $('.items .hidden').length;

        // count all lists length
        const entirelistsLength = $('.items li').length;

        // show error message if there is no data
        if ( hiddenListsLength == (entirelistsLength*2) ) {      // multipy by 2 : because there are left side & right side of lists
            errorMessage.removeClass("hidden");
            divideCenterLine.addClass("hidden");
        } else {
            errorMessage.addClass("hidden");
            divideCenterLine.removeClass("hidden");
        }
    });

    const chevronSVGs = $(".items li svg");

    // mouseover & mouseout to show & hide SVGs
    entireList.each(function() {
        $(this).mouseover(function() {
            $(this).find(chevronSVGs).removeClass("hidden");
        });

        $(this).mouseout(function() {
            $(this).find(chevronSVGs).addClass("hidden");
        });
    });

    // hover section
    // first list
    firstOption.hover(() => {
        entireDetails.addClass("hidden");
        firstDetail.removeClass("hidden");
    });

    // second list
    secondOption.hover(() => {
        entireDetails.addClass("hidden");
        secondDetail.removeClass("hidden");
    });

    // third list
    thirdOption.hover(() => {
        entireDetails.addClass("hidden");
        thirdDetail.removeClass("hidden");
    });

    // fourth list
    fourthOption.hover(() => {
        entireDetails.addClass("hidden");
        fourthDetail.removeClass("hidden");
    });

    // fifth list
    fifthOption.hover(() => {
        entireDetails.addClass("hidden");
        fifthDetail.removeClass("hidden");
    });

    // sixth list
    sixthOption.hover(() => {
        entireDetails.addClass("hidden");
        sixthDetail.removeClass("hidden");
    });

    // seventh list
    seventhOption.hover(() => {
        entireDetails.addClass("hidden");
        seventhDetail.removeClass("hidden");
    });

    // eighth list
    eighthOption.hover(() => {
        entireDetails.addClass("hidden");
        eighthDetail.removeClass("hidden");
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
commandPalettesWithPreview();