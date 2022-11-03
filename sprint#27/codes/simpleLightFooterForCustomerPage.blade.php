@extends('master')
@section('content')

{{-- <div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div> --}}

<!-- Design Simple light Footer for Customer page -->

<!-- main -->
<div class="mainCard">
    <div class="bg-[color:rgba(var(--ni-gray-100))] p-5 rounded-lg">
        <div class="select-none h-full sm:h-screen flex justify-center items-center space-y-10">

            <!-- footer -->
            <footer class="divide-y divide-[color:rgba(var(--ni-gray-200))] dark:divide-[color:rgba(var(--ni-gray-500))] bg-white dark:bg-[color:rgba(var(--ni-gray-700))] shadow-lg rounded-xl">  
                <div class="grid grid-cols-6 2xl:grid-cols-4 px-5 md:px-10 gap-5 2xl:gap-10">

                    <!-- logo & description -->
                    <div class="flex flex-col justify-center items-center py-0 2xl:py-5 pt-5 space-y-3 col-span-6 xl:col-span-6 2xl:col-span-1">

                        <!-- image -->
                        <div class="select-none flex justify-center items-center">
                            <img class="w-28 2xl:w-24 object-contain" src="https://www.turbotech.com/storages/assets/img/system/turbotech.png" alt="TURBOTECH">
                        </div>

                        <!-- line -->
                        <div class="w-48 p-[1px] bg-[color:rgba(var(--ni-danger-200))] dark:bg-[color:rgba(var(--ni-danger-300))] rounded-full hidden 2xl:block"></div>

                        <!-- description -->
                        <div id="descriptions" class="leading-loose sm:leading-loose text-center text-xs sm:text-sm text-[color:rgba(var(--ni-gray-400))] dark:text-[color:rgba(var(--ni-gray-300))]"></div> 
                    </div>

                    <!-- systems -->
                    <div id="systems" class="flex flex-col items-center py-0 2xl:py-10 space-y-5 col-span-6 md:col-span-2 xl:col-span-2 2xl:col-span-1">
                        <div class="flex">
                            <svg class="w-5 h-5 my-auto" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 505 505" style="enable-background:new 0 0 505 505;" xml:space="preserve"><circle style="fill:#54C0EB;" cx="252.5" cy="252.5" r="252.5"/><path style="fill:#84DBFF;" d="M72.6,429.5C118.4,476.1,182,505,252.5,505s134.1-29,179.9-75.5H72.6z"/><polygon style="fill:#E6E9EE;" points="309.1,342.9 195.9,342.9 183.9,400.3 321.1,400.3 "/><polygon style="fill:#CED5E0;" points="314.8,370.2 309.1,342.9 195.9,342.9 190.2,370.2 "/><path style="fill:#324A5E;" d="M428.9,313.6V104c0-1.5-1.2-2.7-2.7-2.7H78.8c-1.5,0-2.7,1.2-2.7,2.7v209.7h352.8V313.6z"/><path style="fill:#E6E9EE;" d="M76.1,312.4V338c0,9.4,7.6,17.1,17.1,17.1h318.6c9.4,0,17.1-7.6,17.1-17.1v-25.6H76.1z"/><rect x="98.8" y="124.6" style="fill:#FFFFFF;" width="307.5" height="161.8"/><g>
                                <path style="fill:#CED5E0;" d="M331.2,400.3H173.8c-7.9,0-14.4,6.4-14.4,14.4l0,0c0,7.9,6.4,14.4,14.4,14.4h157.3c7.9,0,14.4-6.4,14.4-14.4l0,0C345.5,406.7,339.1,400.3,331.2,400.3z"/><circle style="fill:#CED5E0;" cx="252.5" cy="333" r="9.9"/></g><polygon style="fill:#2C9984;" points="328.4,240.7 258.4,240.7 258.4,163.6 246.6,163.6 246.6,240.7 176.6,240.7 176.6,252.5 328.4,252.5 "/><g><path style="fill:#4CDBC4;" d="M267.9,180.8h-30.7c-1,0-1.8-0.8-1.8-1.8v-30.7c0-1,0.8-1.8,1.8-1.8h30.7c1,0,1.8,0.8,1.8,1.8V179C269.7,180,268.9,180.8,267.9,180.8z"/><path style="fill:#4CDBC4;" d="M192,263.8h-30.7c-1,0-1.8-0.8-1.8-1.8v-30.7c0-1,0.8-1.8,1.8-1.8H192c1,0,1.8,0.8,1.8,1.8V262C193.8,263,193,263.8,192,263.8z"/><path style="fill:#4CDBC4;" d="M267.9,263.8h-30.7c-1,0-1.8-0.8-1.8-1.8v-30.7c0-1,0.8-1.8,1.8-1.8h30.7c1,0,1.8,0.8,1.8,1.8V262C269.7,263,268.9,263.8,267.9,263.8z"/><path style="fill:#4CDBC4;" d="M343.7,263.8H313c-1,0-1.8-0.8-1.8-1.8v-30.7c0-1,0.8-1.8,1.8-1.8h30.7c1,0,1.8,0.8,1.8,1.8V262C345.5,263,344.7,263.8,343.7,263.8z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                            </svg>
                            <div id="system-title" class="font-medium text-sm 2xl:text-md text-[color:rgba(var(--ni-gray-600))] dark:text-[color:rgba(var(--ni-gray-200))] ml-2"></div>
                        </div>

                        <!-- line -->
                        <div class="w-48 p-[1px] bg-[color:rgba(var(--ni-warning-200))] dark:bg-[color:rgba(var(--ni-warning-300))] rounded-full"></div>

                        <ul class="ml-3 sm:ml-8 xl:ml-3 2xl:ml-8 text-xs lg:text-sm text-[color:rgba(var(--ni-gray-400))] dark:text-[color:rgba(var(--ni-gray-300))] space-y-2"></ul>
                    </div>

                    <!-- products -->
                    <div id="products" class="flex flex-col items-center py-0 2xl:py-10 space-y-5 col-span-6 md:col-span-2 xl:col-span-2 2xl:col-span-1">
                        <div class="flex">
                            <svg class="w-5 h-5 my-auto" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 505 505" style="enable-background:new 0 0 505 505;" xml:space="preserve"><circle style="fill:#FD8469;" cx="252.5" cy="252.5" r="252.5"/><polygon style="fill:#FFFFFF;" points="179.4,86.1 179.4,139.7 125.9,139.7 125.9,418.9 379.1,418.9 379.1,86.1 "/>
                                <polygon style="fill:#E6E9EE;" points="179.4,86.1 125.9,139.7 179.4,139.7 "/><polygon style="fill:#324A5E;" points="333.2,227.4 285.2,244.8 295.3,254.9 243.1,307.1 221.3,285.3 173.9,332.7 184.3,343.2 221.3,306.2 243.1,328 305.8,265.4 315.8,275.4 "/><polygon style="fill:#4CDBC4;" points="190.1,355.1 190.1,339 190.1,223.4 190.1,207 166.8,207 166.8,378.4 338.2,378.4 338.2,355.1 "/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                            </svg>
                            <div id="product-title" class="font-medium text-sm 2xl:text-md text-[color:rgba(var(--ni-gray-600))] dark:text-[color:rgba(var(--ni-gray-200))] ml-2"></div>
                        </div>

                        <!-- line -->
                        <div class="w-48 p-[1px] bg-[color:rgba(var(--ni-success-200))] dark:bg-[color:rgba(var(--ni-success-300))] rounded-full"></div>

                        <ul class="ml-3 sm:ml-8 xl:ml-3 2xl:ml-8 text-xs lg:text-sm text-[color:rgba(var(--ni-gray-400))] dark:text-[color:rgba(var(--ni-gray-300))] space-y-2"></ul>
                    </div>

                    <!-- services -->
                    <div id="services" class="flex flex-col items-center py-0 2xl:py-10 pb-5 2xl:pb-0 space-y-5 col-span-6 md:col-span-2 xl:col-span-2 2xl:col-span-1">
                        <div class="flex">
                            <svg class="w-5 h-5 my-auto" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><circle style="fill:#31BAFD;" cx="256" cy="256" r="256"/><path style="fill:#2B9ED8;" d="M509.295,293.233L345.643,129.581L230.348,337.389l-14.484,72.706l96.29,95.713C414.677,482.859,493.966,398.426,509.295,293.233z"/><path style="fill:#E6F3FF;" d="M369.778,199.111c0-63.395-51.846-114.679-115.45-113.766c-60.818,0.874-110.749,50.412-112.078,111.221c-0.783,35.821,15.005,67.962,40.217,89.333c10.419,8.832,16.643,21.63,16.643,35.288v48.59h113.778v-48.604c0-13.469,5.922-26.271,16.236-34.932C353.973,265.378,369.778,234.098,369.778,199.111z"/><path style="fill:#CFDBE6;" d="M255.426,85.357v284.42h57.463v-48.604c0-13.469,5.922-26.271,16.236-34.932c24.848-20.864,40.653-52.145,40.653-87.131C369.778,136.083,318.524,85.049,255.426,85.357z"/><path style="fill:#324A5E;" d="M256,426.667L256,426.667c-31.418,0-56.889-25.471-56.889-56.889v-28.444h113.778v28.444C312.889,401.196,287.418,426.667,256,426.667z"/><path style="fill:#2B3B4E;" d="M255.426,341.333v85.32c0.191,0.002,0.381,0.014,0.574,0.014l0,0c31.418,0,56.889-25.471,56.889-56.889v-28.444H255.426z"/><circle style="fill:#FFD15D;" cx="256" cy="199.111" r="58.733"/><g>
                                <path style="fill:#F9B54C;" d="M256,140.371c-0.193,0-0.383,0.012-0.574,0.014v117.451c0.191,0.002,0.381,0.014,0.574,0.014c32.44,0,58.74-26.298,58.74-58.74S288.442,140.371,256,140.371z"/><path style="fill:#F9B54C;" d="M256,269.919c-39.043,0-70.808-31.765-70.808-70.808s31.765-70.808,70.808-70.808s70.808,31.765,70.808,70.808S295.043,269.919,256,269.919z M256,152.438c-25.736,0-46.673,20.937-46.673,46.673s20.937,46.673,46.673,46.673s46.673-20.937,46.673-46.673S281.736,152.438,256,152.438z"/></g><path style="fill:#F4A200;" d="M256,128.303c-0.193,0-0.383,0.014-0.574,0.014v24.135c0.191-0.002,0.381-0.014,0.574-0.014c25.736,0,46.673,20.937,46.673,46.673S281.736,245.784,256,245.784c-0.193,0-0.383-0.012-0.574-0.014v24.135c0.191,0.002,0.381,0.014,0.574,0.014c39.043,0,70.808-31.765,70.808-70.808S295.043,128.303,256,128.303z"/><rect x="243.933" y="170.667" style="fill:#F9B54C;" width="24.135" height="56.889"/><rect x="255.431" y="170.667" style="fill:#F4A200;" width="12.641" height="56.889"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                            </svg>
                            <div id="service-title" class="font-medium text-sm 2xl:text-md text-[color:rgba(var(--ni-gray-600))] dark:text-[color:rgba(var(--ni-gray-200))] ml-2"></div>
                        </div>

                        <!-- line -->
                        <div class="w-48 p-[1px] bg-[color:rgba(var(--ni-primary-200))] dark:bg-[color:rgba(var(--ni-primary-300))] rounded-full"></div>

                        <ul class="ml-3 sm:ml-8 xl:ml-3 2xl:ml-8 text-xs lg:text-sm text-[color:rgba(var(--ni-gray-400))] dark:text-[color:rgba(var(--ni-gray-300))] space-y-2"></ul>
                    </div>
                </div>

                <!-- copyright & nav -->
                <div class="p-5">
                    
                    <!-- copyright & nav -->
                    <div class="flex flex-col lg:flex-row justify-center lg:justify-start items-center lg:items-start space-y-3 lg:space-y-0">

                        <!-- copyright -->
                        <div id="copyright" class="leading-loose text-xs lg:text-sm text-center sm:text-start text-[color:rgba(var(--ni-gray-400))] dark:text-[color:rgba(var(--ni-gray-300))]"></div>

                        <!-- bottom nav -->
                        <div id="bottom-nav" class="grid grid-cols-5 text-xs lg:text-sm text-[color:rgba(var(--ni-gray-400))] dark:text-[color:rgba(var(--ni-gray-300))] ml-0 lg:ml-auto space-x-2"></div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>

@endsection

@section('internalScript')

<script>

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

</script>

@endsection