/**
 * @author                  Roungridh Him
 * @version                 N/A
**/ 

/*
*--------------------------------------------------------------------------
* Simple light Footer for Admin page function
*--------------------------------------------------------------------------
*/

    // Simple light Footer for Admin page function
    const simpleLightFooterForAdminPage = () => {

        const search          = $("#search");
        const searchIcon      = $("#search-icon");

        const dropdown        = $(".dropdown");
        const dropdownItems   = $(".dropdown [data-dropdown]");
        const defaultDropdown = ("text-[color:rgba(var(--ni-gray-500))]");
        const activeDropdown  = ("bg-[color:rgba(var(--ni-primary-400))] text-white rounded-md");

        const systemsDropdown  = $("#systems-dropdown");
        const productsDropdown = $("#products-dropdown");
        const servicesDropdown = $("#services-dropdown");

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
                <li class="px-4 py-3 hover:bg-[color:rgba(var(--ni-gray-400))] hover:text-white hover:rounded-md>
                    <a href="" onclick="return false;">${value.system}</a>
                </li>
            `);

            // append products dropdown
            productsDropdown.append(`
                <li class="px-4 py-3 hover:bg-[color:rgba(var(--ni-gray-400))] hover:text-white hover:rounded-md>
                    <a href="" onclick="return false;">${value.product}</a>
                </li>
            `);

            // append services dropdown
            servicesDropdown.append(`
                <li class="px-4 py-3 hover:bg-[color:rgba(var(--ni-gray-400))] hover:text-white hover:rounded-md>
                    <a href="" onclick="return false;">${value.service}</a>
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

    }

    // call function
    simpleLightFooterForAdminPage();

/*
*--------------------------------------------------------------------------
* End of Simple light Footer for Admin page function
*--------------------------------------------------------------------------
*/

/*
*--------------------------------------------------------------------------
* Simple dark Footer for Admin page function
*--------------------------------------------------------------------------
*/

// Simple dark Footer for Admin page function
const simpleDarkFooterForAdminPage = () => {

    const search          = $("#search");
    const searchIcon      = $("#search-icon");

    const dropdown           = $(".dropdown");
    const dropdownItems      = $(".dropdown [data-dropdown]");
    const defaultDropdown    = ("text-[color:rgba(var(--ni-gray-500))]");
    const activeDropdown     = ("bg-[color:rgba(var(--ni-primary-400))] text-white rounded-md");

    const systemsDropdown  = $("#systems-dropdown");
    const productsDropdown = $("#products-dropdown");
    const servicesDropdown = $("#services-dropdown");

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

}

// call function
simpleDarkFooterForAdminPage();

/*
*--------------------------------------------------------------------------
* End of Simple dark Footer for Admin page function
*--------------------------------------------------------------------------
*/

/*
*--------------------------------------------------------------------------
* Footer with login for Admin page function
*--------------------------------------------------------------------------
*/

// jQuery validation CDN
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

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

/*
*--------------------------------------------------------------------------
* End of Footer with login for Admin page function
*--------------------------------------------------------------------------
*/

/*
*--------------------------------------------------------------------------
* Simple light Footer for Customer page
*--------------------------------------------------------------------------
*/

// Simple light Footer for Customer page
const simpleLightFooterForCustomerPage = () => {

    // descriptions
    const descriptionContents = () => {

        const description = $("#descriptions");
        const copyright   = $("#copyright");
        const content     = [
            {
                "description": `<span class="text-[color:rgba(var(--ni-primary-500))] dark:text-[color:rgba(var(--ni-primary-300))]">TURBOTECH CO.,LTD</span> is the leading information technology services provider in the Kingdom of Cambodia. <span class="text-[color:rgba(var(--ni-primary-500))] dark:text-[color:rgba(var(--ni-primary-300))]">TURBOTECH</span> Provides internet, Data Center, Software Solutions to the public with the hightest quality technology.`,
                "copyright": `Copyright ©2022 All Rights Reserved | TURBOTECH CO.,LTD`
            }
        ];

        // append description content
        description.append(content[0].description);
        copyright.append(content[0].copyright);

    }

    // lists
    const listContents = () => {

        // titles
        const systemTitle  = $("#system-title");
        const productTitle = $("#product-title");
        const sericeTitle  = $("#service-title");

        // contents
        const systemItems  = $("#systems ul");
        const productItems = $("#products ul");
        const serviceItems = $("#services ul");

        const lists = [
            {
                "title"   : "System Managements",
                "system"  : "Human Resource Systems",
                "product" : "Personal Computers",
                "service" : "Internet Service"
            },
            {
                "title"   : "Product Managements",
                "system"  : "Process Control",
                "product" : "Network Servers",
                "service" : "Customter Service"
            },
            {
                "title"   : "Service Managements",
                "system"  : "Inventory Control",
                "product" : "Backup Storage Devices",
                "service" : "Hardware Assistant Services"
            },
            {
                "system"  : "Transaction System",
                "product" : "Communications equipment",
                "service" : "Software Assistant Services"
            }
        ];

        // append title
        systemTitle.append(lists[0].title);
        productTitle.append(lists[1].title);
        sericeTitle.append(lists[2].title);

        // append each content
        $.each(lists, (key, value) => {

            // system items
            systemItems.append(`<li class="hover:text-[color:rgba(var(--ni-primary-500))] dark:hover:text-[color:rgba(var(--ni-primary-300))]"><a href="" onclick="return false;">${value.system}</a></li>`);

            // product items
            productItems.append(`<li class="hover:text-[color:rgba(var(--ni-primary-500))] dark:hover:text-[color:rgba(var(--ni-primary-300))]"><a href="" onclick="return false;">${value.product}</a></li>`);

            // service items
            serviceItems.append(`<li class="hover:text-[color:rgba(var(--ni-primary-500))] dark:hover:text-[color:rgba(var(--ni-primary-300))]"><a href="" onclick="return false;">${value.service}</a></li>`);
        });

        const bottonNav = $("#bottom-nav");
        const bottomNavItems = [
            {
                "item" : "Home",
                "href" : "#",
                "title": "Home"
            },
            {
                "item" : "Term",
                "href" : "#",
                "title": "Term"
            },
            {
                "item" : "Privacy",
                "href" : "#",
                "title": "Privacy"
            },
            {
                "item" : "Policy",
                "href" : "#",
                "title": "Policy"
            },
            {
                "item" : "Contact",
                "href" : "#",
                "title": "Contact"
            }
        ];

        // bottom nav items
        $.each(bottomNavItems, (key, value) => {
            bottonNav.append(`<a href="${value.herf}" title="${value.title}" onclick="return false;" class="hover:text-[color:rgba(var(--ni-primary-500))]">${value.item}</a>`);
        });

    }

    // call sub functions
    descriptionContents();
    listContents();

}

// call function
simpleLightFooterForCustomerPage();

/*
*--------------------------------------------------------------------------
* End of Simple light Footer for Customer page
*--------------------------------------------------------------------------
*/

/*
*--------------------------------------------------------------------------
* Simple dark Footer for Customer page
*--------------------------------------------------------------------------
*/

// Simple dark Footer for Customer page
const simpleDarkFooterForCustomerPage = () => {

    // descriptions
    const descriptionContents = () => {

        const description = $("#descriptions");
        const copyright   = $("#copyright");
        const content     = [
            {
                "description": `<span class="text-[color:rgba(var(--ni-primary-500))] dark:text-[color:rgba(var(--ni-primary-300))]">TURBOTECH CO.,LTD</span> is the leading information technology services provider in the Kingdom of Cambodia. <span class="text-[color:rgba(var(--ni-primary-500))] dark:text-[color:rgba(var(--ni-primary-300))]">TURBOTECH</span> Provides internet, Data Center, Software Solutions to the public with the hightest quality technology.`,
                "copyright": `Copyright ©2022 All Rights Reserved | TURBOTECH CO.,LTD`
            }
        ];

        // append description content
        description.append(content[0].description);
        copyright.append(content[0].copyright);

    }

    // lists
    const listContents = () => {

        // titles
        const systemTitle  = $("#system-title");
        const productTitle = $("#product-title");
        const sericeTitle  = $("#service-title");

        // contents
        const systemItems  = $("#systems ul");
        const productItems = $("#products ul");
        const serviceItems = $("#services ul");

        const lists = [
            {
                "title"   : "System Managements",
                "system"  : "Human Resource Systems",
                "product" : "Personal Computers",
                "service" : "Internet Service"
            },
            {
                "title"   : "Product Managements",
                "system"  : "Process Control",
                "product" : "Network Servers",
                "service" : "Customter Service"
            },
            {
                "title"   : "Service Managements",
                "system"  : "Inventory Control",
                "product" : "Backup Storage Devices",
                "service" : "Hardware Assistant Services"
            },
            {
                "system"  : "Transaction System",
                "product" : "Communications equipment",
                "service" : "Software Assistant Services"
            }
        ];

        // append title
        systemTitle.append(lists[0].title);
        productTitle.append(lists[1].title);
        sericeTitle.append(lists[2].title);

        // append each content
        $.each(lists, (key, value) => {

            // system items
            systemItems.append(`<li class="hover:text-[color:rgba(var(--ni-primary-500))] dark:hover:text-[color:rgba(var(--ni-primary-300))]"><a href="" onclick="return false;">${value.system}</a></li>`);

            // product items
            productItems.append(`<li class="hover:text-[color:rgba(var(--ni-primary-500))] dark:hover:text-[color:rgba(var(--ni-primary-300))]"><a href="" onclick="return false;">${value.product}</a></li>`);

            // service items
            serviceItems.append(`<li class="hover:text-[color:rgba(var(--ni-primary-500))] dark:hover:text-[color:rgba(var(--ni-primary-300))]"><a href="" onclick="return false;">${value.service}</a></li>`);
        });

        const bottonNav = $("#bottom-nav");
        const bottomNavItems = [
            {
                "item" : "Home",
                "href" : "#",
                "title": "Home"
            },
            {
                "item" : "Term",
                "href" : "#",
                "title": "Term"
            },
            {
                "item" : "Privacy",
                "href" : "#",
                "title": "Privacy"
            },
            {
                "item" : "Policy",
                "href" : "#",
                "title": "Policy"
            },
            {
                "item" : "Contact",
                "href" : "#",
                "title": "Contact"
            }
        ];

        // bottom nav items
        $.each(bottomNavItems, (key, value) => {
            bottonNav.append(`<a href="${value.herf}" title="${value.title}" onclick="return false;" class="hover:text-[color:rgba(var(--ni-primary-500))]">${value.item}</a>`);
        });

    }

    // call sub functions
    descriptionContents();
    listContents();

}

// call function
simpleDarkFooterForCustomerPage();

/*
*--------------------------------------------------------------------------
* End of Simple dark Footer for Customer page
*--------------------------------------------------------------------------
*/

/*
*--------------------------------------------------------------------------
* Simple light Footer for Customer page
*--------------------------------------------------------------------------
*/

// Simple light Footer for Customer page
const footerWithContactsForCustomerPage = () => {

    // social contacts
    const socialContacts = () => {

        const socialContactItems = $("#social-contacts");

        const socialLogos = [
            {
                "logo" : "Facebook",
                "svg"  : `<svg class="w-6 h-6 my-auto" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 474.294 474.294" style="enable-background:new 0 0 474.294 474.294;" xml:space="preserve"><circle style="fill:#3A5A98;" cx="237.111" cy="236.966" r="236.966"/><path style="fill:#345387;" d="M404.742,69.754c92.541,92.541,92.545,242.586-0.004,335.134c-92.545,92.541-242.593,92.541-335.134,0L404.742,69.754z"/><path style="fill:#2E4D72;" d="M472.543,263.656L301.129,92.238l-88.998,88.998l5.302,5.302l-50.671,50.667l41.474,41.474l-5.455,5.452l44.901,44.901l-51.764,51.764l88.429,88.429C384.065,449.045,461.037,366.255,472.543,263.656z"/><path style="fill:#FFFFFF;" d="M195.682,148.937c0,7.27,0,39.741,0,39.741h-29.115v48.598h29.115v144.402h59.808V237.276h40.134c0,0,3.76-23.307,5.579-48.781c-5.224,0-45.485,0-45.485,0s0-28.276,0-33.231c0-4.962,6.518-11.641,12.965-11.641c6.436,0,20.015,0,32.587,0c0-6.623,0-29.481,0-50.592c-16.786,0-35.883,0-44.306,0C194.201,93.028,195.682,141.671,195.682,148.937z"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>`,
                "href" : "#",
                "title": "Facebook"
            },
            {
                "logo" : "Telegram",
                "svg"  : `<svg class="w-6 h-6 my-auto" viewBox="0 0 256 256" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid"><g><path d="M128,0 C57.307,0 0,57.307 0,128 L0,128 C0,198.693 57.307,256 128,256 L128,256 C198.693,256 256,198.693 256,128 L256,128 C256,57.307 198.693,0 128,0 L128,0 Z" fill="#40B3E0"></path><path d="M190.2826,73.6308 L167.4206,188.8978 C167.4206,188.8978 164.2236,196.8918 155.4306,193.0548 L102.6726,152.6068 L83.4886,143.3348 L51.1946,132.4628 C51.1946,132.4628 46.2386,130.7048 45.7586,126.8678 C45.2796,123.0308 51.3546,120.9528 51.3546,120.9528 L179.7306,70.5928 C179.7306,70.5928 190.2826,65.9568 190.2826,73.6308" fill="#FFFFFF"></path><path d="M98.6178,187.6035 C98.6178,187.6035 97.0778,187.4595 95.1588,181.3835 C93.2408,175.3085 83.4888,143.3345 83.4888,143.3345 L161.0258,94.0945 C161.0258,94.0945 165.5028,91.3765 165.3428,94.0945 C165.3428,94.0945 166.1418,94.5735 163.7438,96.8115 C161.3458,99.0505 102.8328,151.6475 102.8328,151.6475" fill="#D2E5F1"></path><path d="M122.9015,168.1154 L102.0335,187.1414 C102.0335,187.1414 100.4025,188.3794 98.6175,187.6034 L102.6135,152.2624" fill="#B5CFE4"></path></g></svg>`,
                "href" : "#",
                "title": "Telegram"
            },
            {
                "logo" : "YouTube",
                "svg"  : `<svg class="w-6 h-6 my-auto" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><circle style="fill:#D22215;" cx="256" cy="256" r="256"/><path style="fill:#A81411;" d="M384.857,170.339c-7.677,2.343-15.682,4.356-23.699,6.361c-56.889,12.067-132.741-20.687-165.495,32.754c-27.317,42.494-35.942,95.668-67.017,133.663L294.629,509.1c110.47-16.72,197.773-104.036,214.476-214.511L384.857,170.339z"/><path style="fill:#FFFFFF;" d="M341.649,152.333H170.351c-33.608,0-60.852,27.245-60.852,60.852v85.632c0,33.608,27.245,60.852,60.852,60.852h171.298c33.608,0,60.852-27.245,60.852-60.852v-85.632C402.501,179.578,375.256,152.333,341.649,152.333L341.649,152.333z M300.494,260.167l-80.12,38.212c-2.136,1.019-4.603-0.536-4.603-2.901v-78.814c0-2.4,2.532-3.955,4.67-2.87l80.12,40.601C302.947,255.602,302.904,259.019,300.494,260.167L300.494,260.167z"/><path style="fill:#D1D1D1;" d="M341.649,152.333h-87.373v78.605l46.287,23.455c2.384,1.208,2.341,4.624-0.069,5.773l-46.218,22.044v77.459h87.373c33.608,0,60.852-27.245,60.852-60.852v-85.632C402.501,179.578,375.256,152.333,341.649,152.333z"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>`,
                "href" : "#",
                "title": "YouTube"
            },
            {
                "logo" : "Twitter",
                "svg"  : `<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><circle style="fill:#65A2D9;" cx="256" cy="256" r="256"/><path style="fill:#3A7CA5;" d="M393.014,139.326c-26.703,23.169-53.253,43.475-74.954,71.852c-53.381,64.372-118.613,155.7-207.386,142.086l158.61,158.396c134.456-6.873,241.497-117.493,242.686-253.376L393.014,139.326z"/><path style="fill:#FFFFFF;" d="M397.872,162.471c-6.513,2.889-13.271,5.167-20.208,6.815c7.644-7.261,13.39-16.346,16.631-26.484c0.926-2.893-2.219-5.398-4.832-3.848c-9.65,5.725-20.044,10.016-30.894,12.762c-0.628,0.16-1.276,0.24-1.929,0.24c-1.979,0-3.896-0.733-5.411-2.065c-11.542-10.174-26.39-15.777-41.805-15.777c-6.672,0-13.405,1.04-20.016,3.091c-20.487,6.353-36.295,23.254-41.257,44.103c-1.86,7.818-2.362,15.648-1.496,23.264c0.097,0.876-0.314,1.486-0.569,1.772c-0.45,0.502-1.084,0.791-1.745,0.791c-0.072,0-0.15-0.003-0.224-0.01c-44.846-4.168-85.287-25.772-113.869-60.837c-1.455-1.789-4.253-1.569-5.415,0.422c-5.596,9.606-8.554,20.589-8.554,31.766c0,17.127,6.884,33.27,18.837,45.039c-5.027-1.193-9.893-3.07-14.414-5.582c-2.188-1.214-4.877,0.35-4.908,2.851c-0.31,25.445,14.588,48.087,36.905,58.282c-0.45,0.01-0.9,0.014-1.35,0.014c-3.537,0-7.121-0.338-10.645-1.015c-2.463-0.467-4.532,1.867-3.768,4.253c7.246,22.618,26.717,39.288,50.021,43.07c-19.339,12.983-41.863,19.83-65.302,19.83l-7.306-0.003c-2.255,0-4.16,1.469-4.73,3.65c-0.565,2.145,0.474,4.413,2.396,5.53c26.412,15.372,56.541,23.495,87.138,23.495c26.784,0,51.838-5.313,74.466-15.798c20.745-9.609,39.076-23.345,54.486-40.827c14.357-16.286,25.581-35.085,33.365-55.879c7.418-19.816,11.34-40.967,11.34-61.154v-0.964c0-3.241,1.465-6.291,4.024-8.37c9.706-7.882,18.16-17.158,25.122-27.572C403.796,164.578,400.896,161.13,397.872,162.471L397.872,162.471z"/><path style="fill:#D1D1D1;" d="M397.872,162.471c-6.515,2.889-13.271,5.167-20.208,6.815c7.644-7.261,13.39-16.346,16.632-26.484c0.926-2.893-2.219-5.398-4.832-3.848c-9.65,5.725-20.044,10.016-30.894,12.762c-0.628,0.16-1.276,0.24-1.929,0.24c-1.979,0-3.896-0.733-5.411-2.065c-11.542-10.174-26.39-15.777-41.805-15.777c-6.671,0-13.405,1.04-20.016,3.091c-14.322,4.441-26.343,14.048-33.985,26.546v205.477c6.222-2.029,12.293-4.403,18.198-7.139c20.745-9.609,39.076-23.345,54.486-40.827c14.357-16.287,25.581-35.085,33.365-55.879c7.418-19.816,11.34-40.967,11.34-61.154v-0.964c0-3.241,1.465-6.291,4.024-8.37c9.706-7.882,18.16-17.158,25.122-27.572C403.796,164.578,400.896,161.13,397.872,162.471z"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>`,
                "href" : "#",
                "title": "Twitter"
            },
            {
                "logo" : "Gmail",
                "svg"  : `<svg class="w-6 h-6 my-auto" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><circle style="fill:#273B7A;" cx="256" cy="256" r="256"/><path style="fill:#121149;" d="M308.445,506.613c99.231-20.661,177.386-98.766,198.125-197.968L374.555,176.338L226.187,277.33l17.613,17.613l-106.632,40.431L308.445,506.613z"/><linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="55.4978" y1="423.8696" x2="165.1978" y2="423.8696" gradientTransform="matrix(1.7239 0 0 -1.7239 35.4714 986.7104)"><stop offset="0" style="stop-color:#F3F1E8"/><stop offset="1" style="stop-color:#E3E0D0"/></linearGradient><path style="fill:url(#SVGID_1_);" d="M358.538,169.52H153.46c-12.278,0-22.316,10.049-22.316,22.319v128.326c0,12.262,10.037,22.313,22.316,22.313h205.078c12.278,0,22.318-10.05,22.318-22.313V191.84C380.856,179.571,370.816,169.52,358.538,169.52z"/><g><polygon style="fill:#B5B4B0;" points="255.073,289.797 162.109,340.137 162.261,342.48 256.157,291.868 "/><path style="fill:#B5B4B0;" d="M360.431,190.857l-59.566,45.87l-44.709,55.143l90.905,50.612h11.476c8.242,0,15.46-4.534,19.328-11.23l-7.697-51.131L360.431,190.857z"/></g><path style="fill:#DD4B40;" d="M256.157,291.868l124.699-96.547v-3.481c0-12.271-10.038-22.319-22.318-22.319h-4.965l-94.441,80.618l-98.256-80.618h-7.416c-12.278,0-22.316,10.049-22.316,22.319v128.326c0,12.262,10.037,22.313,22.316,22.313h8.801V217.347L256.157,291.868z"/><path style="fill:#A43026;" d="M380.856,320.165V195.32l-33.794,26.164v120.994h11.476C370.816,342.48,380.856,332.429,380.856,320.165z"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>`,
                "href" : "#",
                "title": "Gmail"
            }
        ];

        $.each(socialLogos, (key, value) => {

            socialContactItems.append(`<a href="${value.href}" title="${value.title}" onclick="return false;">${value.svg}</a>`);

        });

    }

    // descriptions
    const descriptionContents = () => {

        const description = $("#descriptions");
        const copyright   = $("#copyright");
        const content     = [
            {
                "description": `<span class="text-[color:rgba(var(--ni-primary-500))] dark:text-[color:rgba(var(--ni-primary-300))]">TURBOTECH CO.,LTD</span> is the leading information technology services provider in the Kingdom of Cambodia. <span class="text-[color:rgba(var(--ni-primary-500))] dark:text-[color:rgba(var(--ni-primary-300))]">TURBOTECH</span> Provides internet, Data Center, Software Solutions to the public with the hightest quality technology.`,
                "copyright": `Copyright ©2022 All Rights Reserved | TURBOTECH CO.,LTD`
            }
        ];

        // append description content
        description.append(content[0].description);
        copyright.append(content[0].copyright);

    }

    // images
    const imageContents = () => {

        const images       = $("#images");
        const imageSources = [
            {
                "src" : "https://www.tovban.com/static/images/aba/ic_ABA%20PAY_3x.png",
                "alt" : "ABA Pay"
            },
            {
                "src" : "https://blog.logomyway.com/wp-content/uploads/2022/02/visa-logo-2.jpg",
                "alt" : "VISA"      
            },
            {
                "src" : "https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/MasterCard_Logo.svg/2560px-MasterCard_Logo.svg.png",
                "alt" : "Master Card"
            },
            {
                "src" : "https://play-lh.googleusercontent.com/9YmfkqXUjbThaKH55niNGFY0TqL30MEOqBNU1TDjJp1sQijhAzlGefzyNWmieqBGrAa0=w240-h480-rw",
                "alt" : "LUNA"
            },
            {
                "src" : "http://ogpcambodia.com/mt-content/uploads/2021/04/tela.png",
                "alt" : "TELA"
            }
        ];

        // append images
        $.each(imageSources, (key, value) => {
            images.append(`<img class="select-none w-7 sm:w-10 h-5 sm:h-7 object-contain rounded-md" src="${value.src}" alt="${value.alt}">`);
        });
    }

    // lists
    const listContents = () => {

        // titles
        const systemTitle  = $("#system-title");
        const productTitle = $("#product-title");
        const sericeTitle  = $("#service-title");

        // contents
        const systemItems  = $("#systems ul");
        const productItems = $("#products ul");
        const serviceItems = $("#services ul");

        const lists = [
            {
                "title"   : "System Managements",
                "system"  : "Human Resource Systems",
                "product" : "Personal Computers",
                "service" : "Internet Service"
            },
            {
                "title"   : "Product Managements",
                "system"  : "Process Control",
                "product" : "Network Servers",
                "service" : "Customter Service"
            },
            {
                "title"   : "Service Managements",
                "system"  : "Inventory Control",
                "product" : "Backup Storage Devices",
                "service" : "Hardware Assistant Services"
            },
            {
                "system"  : "Transaction System",
                "product" : "Communications equipment",
                "service" : "Software Assistant Services"
            }
        ];

        // append title
        systemTitle.append(lists[0].title);
        productTitle.append(lists[1].title);
        sericeTitle.append(lists[2].title);

        // append each content
        $.each(lists, (key, value) => {

            // system items
            systemItems.append(`<li class="hover:text-[color:rgba(var(--ni-primary-500))] dark:hover:text-[color:rgba(var(--ni-primary-300))]"><a href="" onclick="return false;">${value.system}</a></li>`);

            // product items
            productItems.append(`<li class="hover:text-[color:rgba(var(--ni-primary-500))] dark:hover:text-[color:rgba(var(--ni-primary-300))]"><a href="" onclick="return false;">${value.product}</a></li>`);

            // service items
            serviceItems.append(`<li class="hover:text-[color:rgba(var(--ni-primary-500))] dark:hover:text-[color:rgba(var(--ni-primary-300))]"><a href="" onclick="return false;">${value.service}</a></li>`);
        });

        const bottonNav = $("#bottom-nav");
        const bottomNavItems = [
            {
                "item" : "Home",
                "href" : "#",
                "title": "Home"
            },
            {
                "item" : "Term",
                "href" : "#",
                "title": "Term"
            },
            {
                "item" : "Privacy",
                "href" : "#",
                "title": "Privacy"
            },
            {
                "item" : "Policy",
                "href" : "#",
                "title": "Policy"
            },
            {
                "item" : "Contact",
                "href" : "#",
                "title": "Contact"
            }
        ];

        // bottom nav items
        $.each(bottomNavItems, (key, value) => {
            bottonNav.append(`<a href="${value.herf}" title="${value.title}" onclick="return false;" class="hover:text-[color:rgba(var(--ni-primary-500))]">${value.item}</a>`);
        });

    }

    const lightDarkModes = () => {

        const appearance            = $("#appearance");
        const switchModesBtn        = $("#light-dark");

        const modes = [
            {
                "mode" : "Light Mode",
                "svg"  : `<div class="my-auto p-0.5 bg-[color:rgba(var(--ni-yellow-100))] rounded-full"><svg class="w-5 sm:w-8 h-5 sm:h-8 my-auto" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 380 380" style="enable-background:new 0 0 380 380;" xml:space="preserve"><g id="XMLID_2_"><path id="XMLID_4_" style="fill:#FFDA44;" d="M129.48,311.289h121.026c2.319-18.419,11.726-26.242,23.471-37.644c16.82-16.329,37.753-36.65,37.753-87.096c0-32.261-12.805-61.618-36.056-82.665C253.249,83.585,222.823,72.406,190,72.406c-32.823,0-63.249,11.179-85.673,31.478c-23.251,21.047-36.056,50.404-36.056,82.665c0,50.521,20.977,70.961,37.833,87.385C117.763,285.294,127.121,293.207,129.48,311.289z"/><path id="XMLID_15_" style="fill:#FFCD00;" d="M275.673,103.884C253.249,83.585,222.823,72.406,190,72.406v238.883h60.506c2.319-18.419,11.726-26.242,23.47-37.644c16.82-16.329,37.753-36.65,37.753-87.096C311.73,154.288,298.925,124.931,275.673,103.884z"/><rect id="XMLID_35_" x="148.212" y="345.645" style="fill:#7DD3FC;" width="83.576" height="34.355"/><rect id="XMLID_34_" x="133.677" y="319.878" style="fill:#7DD3FC;" width="112.646" height="34.355"/><rect id="XMLID_33_" x="119.142" y="294.111" style="fill:#7DD3FC;" width="141.716" height="34.355"/><polygon id="XMLID_16_" style="fill:#0EA5E9;" points="190,294.111 190,380 231.788,380 231.788,354.233 246.323,354.233 246.323,328.467 260.858,328.467 260.858,294.111 "/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></div>`
            },
            {
                "mode" : "Dark Mode",
                "svg"  : `<div class="my-auto p-0.5 rounded-full"><svg class="w-5 sm:w-8 h-5 sm:h-8 my-auto" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 380 380" style="enable-background:new 0 0 380 380;" xml:space="preserve"><g id="XMLID_2_"><path id="XMLID_4_" style="fill:#E7ECED;" d="M129.48,311.289h121.026c2.319-18.419,11.726-26.242,23.471-37.644c16.82-16.329,37.753-36.65,37.753-87.096c0-32.261-12.805-61.618-36.056-82.665C253.249,83.585,222.823,72.406,190,72.406c-32.823,0-63.249,11.179-85.673,31.478c-23.251,21.047-36.056,50.404-36.056,82.665c0,50.521,20.977,70.961,37.833,87.385C117.763,285.294,127.121,293.207,129.48,311.289z"/><path id="XMLID_15_" style="fill:#D9D9D9;" d="M275.673,103.884C253.249,83.585,222.823,72.406,190,72.406v238.883h60.506c2.319-18.419,11.726-26.242,23.47-37.644c16.82-16.329,37.753-36.65,37.753-87.096C311.73,154.288,298.925,124.931,275.673,103.884z"/><rect id="XMLID_35_" x="148.212" y="345.645" style="fill:#7DD3FC;" width="83.576" height="34.355"/><rect id="XMLID_34_" x="133.677" y="319.878" style="fill:#7DD3FC;" width="112.646" height="34.355"/><rect id="XMLID_33_" x="119.142" y="294.111" style="fill:#7DD3FC;" width="141.716" height="34.355"/><polygon id="XMLID_16_" style="fill:#0EA5E9;" points="190,294.111 190,380 231.788,380 231.788,354.233 246.323,354.233 246.323,328.467 260.858,328.467 260.858,294.111 "/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></div>`
            }
        ];

        // default title
        switchModesBtn.attr("title", modes[0].mode);

        switchModesBtn.click(function() {

            appearance.toggleClass("dark");

            if ( !appearance.hasClass("dark") ) {

                $(this).html(modes[0].svg);
                $(this).attr("title", modes[0].mode);

            } else {

                $(this).html(modes[1].svg);
                $(this).attr("title", modes[1].mode);

            }
        });

    }

    // call sub functions
    socialContacts();
    descriptionContents();
    imageContents();
    listContents();
    lightDarkModes();

}

// call function
footerWithContactsForCustomerPage();

/*
*--------------------------------------------------------------------------
* End of Simple light Footer for Customer page
*--------------------------------------------------------------------------
*/