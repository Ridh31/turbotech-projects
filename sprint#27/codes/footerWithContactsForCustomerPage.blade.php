@extends('master')
@section('content')

{{-- <div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div> --}}

<!-- Design Footer with contacts for Customer page -->

<!-- main -->
<div class="mainCard">
    <div id="appearance" class="bg-[color:rgba(var(--ni-gray-100))] p-5 rounded-lg">
        <div class="select-none h-full xl:h-screen flex justify-center items-center space-y-10">

            <!-- footer -->
            <footer class="divide-y divide-[color:rgba(var(--ni-gray-200))] dark:divide-[color:rgba(var(--ni-gray-500))] bg-white dark:bg-[color:rgba(var(--ni-gray-700))] shadow-lg rounded-xl">  
                
                <!-- email address & switch modes & social contacts -->
                <div class="flex flex-col xl:flex-row space-y-5 xl:space-y-0 p-5">

                    <!-- email & switch modes -->
                    <div class="flex flex-col xl:flex-row justify-center xl:justify-start items-center xl:items-start space-y-5 xl:space-y-0">

                        <div class="font-medium text-md text-[color:rgba(var(--ni-gray-500))] dark:text-[color:rgba(var(--ni-gray-200))] mr-2 sm:mr-5 my-auto">Join our newsletter</div>

                        <div class="flex justify-center items-center">
                            
                            <!-- email -->
                            <div class="group w-44 sm:w-72 md:w-80 lg:w-96">
                                <div class="relative flex justify-center items-center">
                                    <input id="input-email" type="text" placeholder="Email Address" class="peer relative h-10 w-full text-xs sm:text-sm bg-[color:rgba(var(--ni-gray-50))] text-[color:rgba(var(--ni-primary-500))] dark:text-[color:rgba(var(--ni-primary-500))] pl-4 pr-20 font-thin outline-none drop-shadow-sm transition-all duration-200 ease-in-out focus:bg-white focus:drop-shadow-lg rounded-md "/>
                                    <button class="absolute right-0 h-10 w-16 rounded-r-md bg-[color:rgba(var(--ni-primary-300))] text-xs font-semibold text-white transition-all duration-200 ease-in-out group-focus-within:bg-[color:rgba(var(--ni-primary-400))] group-focus-within:hover:bg-[color:rgba(var(--ni-primary-500))]">Send</button>
                                </div>
                            </div>

                            <!-- light & dark mode -->
                            <button id="light-dark" type="button" class="flex ml-2 sm:ml-5 xl:ml-10 my-auto">
                                <div class="my-auto p-0.5 bg-[color:rgba(var(--ni-yellow-100))] rounded-full">
                                    <svg class="w-5 sm:w-8 h-5 sm:h-8" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 380 380" style="enable-background:new 0 0 380 380;" xml:space="preserve"><g id="XMLID_2_"><path id="XMLID_4_" style="fill:#FFDA44;" d="M129.48,311.289h121.026c2.319-18.419,11.726-26.242,23.471-37.644c16.82-16.329,37.753-36.65,37.753-87.096c0-32.261-12.805-61.618-36.056-82.665C253.249,83.585,222.823,72.406,190,72.406c-32.823,0-63.249,11.179-85.673,31.478c-23.251,21.047-36.056,50.404-36.056,82.665c0,50.521,20.977,70.961,37.833,87.385C117.763,285.294,127.121,293.207,129.48,311.289z"/><path id="XMLID_15_" style="fill:#FFCD00;" d="M275.673,103.884C253.249,83.585,222.823,72.406,190,72.406v238.883h60.506c2.319-18.419,11.726-26.242,23.47-37.644c16.82-16.329,37.753-36.65,37.753-87.096C311.73,154.288,298.925,124.931,275.673,103.884z"/><rect id="XMLID_35_" x="148.212" y="345.645" style="fill:#7DD3FC;" width="83.576" height="34.355"/><rect id="XMLID_34_" x="133.677" y="319.878" style="fill:#7DD3FC;" width="112.646" height="34.355"/><rect id="XMLID_33_" x="119.142" y="294.111" style="fill:#7DD3FC;" width="141.716" height="34.355"/><polygon id="XMLID_16_" style="fill:#0EA5E9;" points="190,294.111 190,380 231.788,380 231.788,354.233 246.323,354.233 246.323,328.467 260.858,328.467 260.858,294.111 "/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                                </div>
                            </button>
                        </div>
                    </div>

                    <!-- social contacts -->
                    <div class="flex justify-center items-center ml-0 xl:ml-auto my-auto">
                        <div id="social-contacts" class="grid grid-cols-5 gap-3"></div>
                    </div>
                </div>
                
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

                <!-- images & copyright & nav -->
                <div class="grid grid-cols-1 xl:grid-cols-3 space-y-5 xl:space-y-0 p-5">
                    
                    <!-- copyright -->
                    <div id="copyright" class="leading-loose text-xs lg:text-sm text-center 2xl:text-start text-[color:rgba(var(--ni-gray-400))] dark:text-[color:rgba(var(--ni-gray-300))]"></div>

                    <!-- images -->
                    <div id="images" class="flex justify-center itemes-center space-x-3 "></div>

                    <!-- bottom nav -->
                    <div id="bottom-nav" class="flex text-xs lg:text-sm text-[color:rgba(var(--ni-gray-400))] dark:text-[color:rgba(var(--ni-gray-300))] justify-center items-center ml-0 2xl:ml-auto space-x-3"></div>
                </div>
            </footer>
        </div>
    </div>
</div>

@endsection

@section('internalScript')

<script>

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

</script>

@endsection