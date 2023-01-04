@extends('master')
@section('content')

{{-- <div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div> --}}

<!-- create UI view Report like PDF -->

<!-- main -->
<div class="mainCard">
    <div class="cardContainer p-2 sm:p-5">

        <!-- container -->
        <div class="relative border border-[color:rgba(var(--ni-gray-300))] select-none overflow-auto h-full">

            <!-- download pdf & print report -->
            <div class="relative flex gap-2 px-1 pt-1 pb-1.5 bg-slate-100">

                <!-- download pdf button -->
                <button type="button" id="export-current-page-to-pdf" title="Export Current Page to PDF" class="hover:scale-125 duration-200">
                    <svg class="w-5 h-5" viewBox="0 0 48 48" version="1" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 48 48"> <polygon fill="#90CAF9" points="40,45 8,45 8,3 30,3 40,13"/> <polygon fill="#E1F5FE" points="38.5,14 29,14 29,4.5"/> <g fill="#1976D2"> <rect x="16" y="21" width="17" height="2"/> <rect x="16" y="25" width="13" height="2"/> <rect x="16" y="29" width="17" height="2"/> <rect x="16" y="33" width="13" height="2"/> </g></svg>
                </button>

                <!-- pdf option -->
                <div id="pdf-options" class="absolute top-8 flex justify-center items-center p-3 z-10 bg-white text-sm shadow-lg rounded-md">
                    <form class="flex flex-col space-y-3">
                        <div class="font-medium text-[color:rgba(var(--ni-primary-500))]">Export Current Page to PDF</div>

                        <!-- select layout -->
                        <div class="flex gap-5">
                            <label for="pdf-layouts" class="my-auto">Layout</label>
                            <select id="pdf-layouts" name="pdf-layouts" class="cursor-pointer w-36 ml-3.5 p-1 bg-slate-100 text-[color:rgba(var(--ni-gray-500))] focus:outline-none rounded-md">
                                <option value="Portrait">Portrait</option>
                                <option value="Landscape">Landscape</option>
                            </select>
                        </div>

                        <!-- buttons -->
                        <div class="grid grid-cols-2 gap-2 mt-2">
                            <button type="button" id="export-pdf" class="button -primary waves-effect">Export</button>
                            <button type="button" id="cancel-export-pdf" class="button -danger waves-effect">Cancel</button>
                        </div>
                    </form>
                </div>

                <!-- export excel button -->
                <button type="button" id="export-to-excel" title="Download Excel" class="hover:scale-125 duration-200">
                    <svg class="w-5 h-5" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><linearGradient id="a" x1="4.494" y1="-2092.086" x2="13.832" y2="-2075.914" gradientTransform="translate(0 2100)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#18884f"/><stop offset="0.5" stop-color="#117e43"/><stop offset="1" stop-color="#0b6631"/></linearGradient></defs><path d="M19.581,15.35,8.512,13.4V27.809A1.192,1.192,0,0,0,9.705,29h19.1A1.192,1.192,0,0,0,30,27.809h0V22.5Z" style="fill:#185c37"/><path d="M19.581,3H9.705A1.192,1.192,0,0,0,8.512,4.191h0V9.5L19.581,16l5.861,1.95L30,16V9.5Z" style="fill:#21a366"/><path d="M8.512,9.5H19.581V16H8.512Z" style="fill:#107c41"/><path d="M16.434,8.2H8.512V24.45h7.922a1.2,1.2,0,0,0,1.194-1.191V9.391A1.2,1.2,0,0,0,16.434,8.2Z" style="opacity:0.10000000149011612;isolation:isolate"/>
                        <path d="M15.783,8.85H8.512V25.1h7.271a1.2,1.2,0,0,0,1.194-1.191V10.041A1.2,1.2,0,0,0,15.783,8.85Z" style="opacity:0.20000000298023224;isolation:isolate"/><path d="M15.783,8.85H8.512V23.8h7.271a1.2,1.2,0,0,0,1.194-1.191V10.041A1.2,1.2,0,0,0,15.783,8.85Z" style="opacity:0.20000000298023224;isolation:isolate"/><path d="M15.132,8.85H8.512V23.8h6.62a1.2,1.2,0,0,0,1.194-1.191V10.041A1.2,1.2,0,0,0,15.132,8.85Z" style="opacity:0.20000000298023224;isolation:isolate"/><path d="M3.194,8.85H15.132a1.193,1.193,0,0,1,1.194,1.191V21.959a1.193,1.193,0,0,1-1.194,1.191H3.194A1.192,1.192,0,0,1,2,21.959V10.041A1.192,1.192,0,0,1,3.194,8.85Z" style="fill:url(#a)"/><path d="M5.7,19.873l2.511-3.884-2.3-3.862H7.758L9.013,14.6c.116.234.2.408.238.524h.017c.082-.188.169-.369.26-.546l1.342-2.447h1.7l-2.359,3.84,2.419,3.905H10.821l-1.45-2.711A2.355,2.355,0,0,1,9.2,16.8H9.176a1.688,1.688,0,0,1-.168.351L7.515,19.873Z" style="fill:#fff"/><path d="M28.806,3H19.581V9.5H30V4.191A1.192,1.192,0,0,0,28.806,3Z" style="fill:#33c481"/><path d="M19.581,16H30v6.5H19.581Z" style="fill:#107c41"/>
                    </svg>
                </button>

                <!-- excel option -->
                <div id="excel-options" class="absolute left-7 top-8 flex justify-center items-center p-3 z-10 bg-white text-sm shadow-lg rounded-md">
                    <form class="flex flex-col space-y-3">
                        <div class="font-medium text-[color:rgba(var(--ni-primary-500))]">Export Excel</div>

                        <!-- excel filename -->
                        <div class="flex text-[color:rgba(var(--ni-gray-500))]">
                            <label for="excel-name" class="mr-5 my-auto">Filename</label>
                            <input type="text" name="excel-name" id="excel-name" class="w-36 px-3 py-1 bg-slate-100 placeholder:text-[color:rgba(var(--ni-gray-300))] focus:outline-none rounded-md" placeholder="e.g. Report">
                        </div>

                        <!-- buttons -->
                        <div class="grid grid-cols-2 gap-2 mt-2">
                            <button type="button" id="export-excel" class="button -primary waves-effect">Export</button>
                            <button type="button" id="cancel-export-excel" class="button -danger waves-effect">Cancel</button>
                        </div>
                    </form>
                </div>

                <!-- copy to clipboard button -->
                <button type="button" id="copy-to-clipboard" title="Copy to Clipboard" class="hover:scale-125 duration-200">
                    <svg class="w-5 h-5" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 482 482" style="enable-background:new 0 0 482 482;" xml:space="preserve"><g><rect x="185.14" style="fill:#FFA733;" width="140" height="110"/><polygon style="fill:#FFB655;" points="185.14,110 185.14,0 45.14,0 45.14,372 156.86,372 156.86,110 "/><polygon style="fill:#46F8FF;" points="325.14,221.72 325.14,110 296.86,110 296.86,482 436.86,482 436.86,221.72 "/><rect x="156.86" y="110" style="fill:#9BFBFF;" width="140" height="372"/><polygon style="fill:#00D7DF;" points="325.14,221.72 436.86,221.72 325.14,110 "/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                </button>

                <!-- clipboard alert -->
                <div id="copied-to-clipboard-alert" class="p-3 bg-white absolute m-auto left-14 top-8 z-20 shadow-md rounded-lg hidden">
                    <div class="flex justify-center items-center space-x-2 text-[color:rgba(var(--ni-gray-500))]">
                        <span class="my-auto">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                        </span>
                        <span class="my-auto text-sm">Copied to clipboard.</span>
                    </div>
                </div>

                <!-- print report button -->
                <button type="button" id="print-pdf" title="Print Report" class="hover:scale-125 duration-200">
                    <svg class="w-5 h-5" viewBox="0 0 48 48" version="1" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 48 48"> <rect x="9" y="11" fill="#424242" width="30" height="3"/> <path fill="#616161" d="M4,25h40v-7c0-2.2-1.8-4-4-4H8c-2.2,0-4,1.8-4,4V25z"/> <path fill="#424242" d="M8,36h32c2.2,0,4-1.8,4-4v-8H4v8C4,34.2,5.8,36,8,36z"/> <circle fill="#00E676" cx="40" cy="18" r="1"/> <rect x="11" y="4" fill="#90CAF9" width="26" height="10"/> 
                        <path fill="#242424" d="M37.5,31h-27C9.7,31,9,30.3,9,29.5v0c0-0.8,0.7-1.5,1.5-1.5h27c0.8,0,1.5,0.7,1.5,1.5v0 C39,30.3,38.3,31,37.5,31z"/> <rect x="11" y="31" fill="#90CAF9" width="26" height="11"/> <rect x="11" y="29" fill="#42A5F5" width="26" height="2"/> <g fill="#1976D2"> <rect x="16" y="33" width="17" height="2"/> <rect x="16" y="37" width="13" height="2"/> </g>
                    </svg>
                </button>
                
                <!-- find -->
                <div class="relative">
                    <svg class="pointer-events-none absolute top-2 left-1.5 w-3 h-3 text-[color:rgba(var(--ni-gray-500))]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd"/>
                    </svg>
                    <input class="w-full h-5 bg-white text-xs text-[color:rgba(var(--ni-gray-500))] pl-6 pr-2 outline-none focus:ring-0 shadow-md rounded-md duration-300" type="search" data-find>
                </div>
            </div>

            <!-- content -->
            <div id="content-pdf" class="space-y-2 p-5">

                <!-- company logo & subject -->
                <div class="space-y-10">

                    <!-- company logo -->
                    <div class="flex gap-3 justify-center items-center flex-shrink-0">

                        <!-- set image base on current baseUrl; otherwise, the image will not load while export pdf  -->
                        <img id="logo" class="w-32 object-contain" src="http://172.26.16.95:8080/images/logo/turbotech-1.png" alt="TURBOTECH">

                        <!-- company title -->
                        <div class="text-center text-xl text-[color:rgba(var(--ni-primary-500))]">
                            <div class="font-bold">ក្រុមហ៊ុន ធើបូថេក ឯ.ក</div>
                            <div class="font-medium">TURBOTECH CO.,LTD</div>
                        </div>
                    </div>

                    <!-- subject -->
                    <div class="text-center">
                        <div class="font-medium">Fixed Asset Listing</div>
                        <div class="text-sm">
                            <span>Report Date:</span>
                            <span id="report-date"></span>
                        </div>
                    </div>
                </div>

                <!-- department -->
                <div class="text-sm">
                    <span class="font-medium">001. </span>
                    <span class="font-bold">ការិយាល័យកណ្ដាល</span>
                </div>

                <!-- building -->
                <div class="font-medium text-sm ml-8">
                    <span>01. </span>
                    <span>Building</span>
                </div>

                <div id="report-container" class="mt-2">

                    <!-- loading table -->
                    <div id="loading-table" class="relative w-full border-collapse" data-table-name="Report">
                        <div id="loading-header">
                            <div class="divide-x divide-white grid grid-cols-7 w-full animate-pulse">
                                <div class="w-full bg-[color:rgba(var(--ni-primary-400))] p-3"></div>
                                <div class="w-full bg-[color:rgba(var(--ni-primary-400))] p-3"></div>
                                <div class="w-full bg-[color:rgba(var(--ni-primary-400))] p-3"></div>
                                <div class="w-full bg-[color:rgba(var(--ni-primary-400))] p-3"></div>
                                <div class="w-full bg-[color:rgba(var(--ni-primary-400))] p-3"></div>
                                <div class="w-full bg-[color:rgba(var(--ni-primary-400))] p-3"></div>
                                <div class="w-full bg-[color:rgba(var(--ni-primary-400))] p-3"></div>
                            </div>
                        </div>
                        <div id="loading-body" class="divide-y divide-white"></div>

                        <!-- loading spinner -->
                        <div class="absolute flex inset-x-0 left-1/2 top-1/2">
                            <div class="relative">
                                
                                <!-- outer ring-->
                                <div class="w-12 h-12 rounded-full absolute border-8 border-solid border-gray-200"></div>

                                <!-- inner ring -->
                                <div class="w-12 h-12 rounded-full animate-spin absolute border-8 border-solid border-[color:rgba(var(--ni-primary-500))] border-t-transparent"></div>
                            </div>
                        </div>
                    </div>

                    <!-- table -->
                    <table id="report-table" class="relative w-full border-collapse border-y border-[color:rgba(var(--ni-gray-500))]" data-table-name="Report">
                        <thead>
                            <tr class="-primary">
                                <th class="text-white text-center py-0.5 border-x border-[color:rgba(var(--ni-gray-500))]">ID</th>
                                <th class="text-white text-center py-0.5 border-r border-[color:rgba(var(--ni-gray-500))]">Title</th>
                                <th class="text-white text-center py-0.5 border-r border-[color:rgba(var(--ni-gray-500))]">Price</th>
                                <th class="text-white text-center py-0.5 border-r border-[color:rgba(var(--ni-gray-500))]">Category</th>
                                <th class="text-white text-center py-0.5 border-r border-[color:rgba(var(--ni-gray-500))]">Rate</th>
                                <th class="text-white text-center py-0.5 border-r border-[color:rgba(var(--ni-gray-500))]">Count</th>
                                <th class="text-white text-center py-0.5 border-r border-[color:rgba(var(--ni-gray-500))]">Description</th>
                            </tr>
                        </thead>

                        <!-- table content -->
                        <tbody></tbody>

                        <!-- tfoot : showing no results found -->
                        <tfoot>
                            <tr class="excludeThisClass">
                                <td id="no-results-found" class="border-x border-[color:rgba(var(--ni-gray-500))]" style="text-align: center;">No results found</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('internalScript')

<!-- html2pdf cdn -->
<script src="https://cdn.bootcss.com/html2pdf.js/0.9.1/html2pdf.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.1/html2pdf.bundle.min.js"></script>

<!-- table2excel cdn -->
<script src="https://cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>

<script>

    console.clear();

    /*
    *--------------------------------------------------------------------------
    * loading
    *--------------------------------------------------------------------------
    */
    const dislayLoading = (visibility) => {

        const loadingTable  = $("#loading-table");
        const loadingHeader = $("#loading-header");
        const loadingBody   = $("#loading-body");

        // loading visibility
        loadingTable.addClass(visibility);

        for ( var i = 0; i < 10; i++ ) {

            loadingBody.append(`
                <div class="divide-x divide-white grid grid-cols-7 w-full animate-pulse">
                    <div class="w-full bg-[color:rgba(var(--ni-gray-300))] p-3"></div>
                    <div class="w-full bg-[color:rgba(var(--ni-gray-300))] p-3"></div>
                    <div class="w-full bg-[color:rgba(var(--ni-gray-300))] p-3"></div>
                    <div class="w-full bg-[color:rgba(var(--ni-gray-300))] p-3"></div>
                    <div class="w-full bg-[color:rgba(var(--ni-gray-300))] p-3"></div>
                    <div class="w-full bg-[color:rgba(var(--ni-gray-300))] p-3"></div>
                    <div class="w-full bg-[color:rgba(var(--ni-gray-300))] p-3"></div>
                </div>
            `);
        }
    };

    /*
    *--------------------------------------------------------------------------
    * get data from api url mockup
    *--------------------------------------------------------------------------
    */
    const getMockupData = () => {

        const reportDate  = $("#report-date");
        const reportTable = $("#report-table");
        const date        = new Date();
        const month       = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

        const tbody    = $("table tbody");
        const apiBase  = ("https://jsonplaceholder.typicode.com");
        const endpoint = ("/users");
        const headers  = { headers: { "Content-Type": "application/json; charset=utf-8" }};

        // display report date
        reportDate.html(`
            <span>${month[date.getMonth()]}</span>
            <span>${date.getDate()}, </span>
            <span>${date.getUTCFullYear()}</span>
        `);

        // show loading before content load
        reportTable.addClass("hidden");
        dislayLoading("");

        // fetch user information mockup
        fetch(apiBase + endpoint, headers)
        .then((response) => {
            const users = response.json();
            return users;
        })
        .then((json) => {

            // append user information to table row
            $.each(json, function(index, user) {

                // add \n and \t for copy to clipboard
                tbody.append(`
                    <tr>
                        <td class="py-0.5 border border-b-0 border-[color:rgba(var(--ni-gray-500))]">${user.id}\t</td>
                        <td class="py-0.5 border-r border-t border-b-0 border-[color:rgba(var(--ni-gray-500))]">${user.name}\t</td>
                        <td class="py-0.5 border-r border-t border-b-0 border-[color:rgba(var(--ni-gray-500))]">${user.username}\t</td>
                        <td class="py-0.5 border-r border-t border-b-0 border-[color:rgba(var(--ni-gray-500))]">${user.email}\t</td>
                        <td class="py-0.5 border-r border-t border-b-0 border-[color:rgba(var(--ni-gray-500))]">${user.address.zipcode}\t</td>
                        <td class="py-0.5 border-r border-t border-b-0 border-[color:rgba(var(--ni-gray-500))]">${user.phone}\t</td>
                        <td class="py-0.5 border-r border-t border-b-0 border-[color:rgba(var(--ni-gray-500))]">${user.website}\n</td>
                    </tr>
                `);
            });

            // remove loading after content load
            dislayLoading("hidden");
            reportTable.removeClass("hidden");

            // pagination => show 10 rows per page
            // pagination(10, $("#report-table tbody tr"), "");
        })
        .catch((error) => {
            console.log(error);
        });
    };

    // call mockup data function
    getMockupData();

    /*
    *--------------------------------------------------------------------------
    * export pdf
    *--------------------------------------------------------------------------
    */
    const exportCurrentPageToPDFIcon   = $("#export-current-page-to-pdf");
    const PDFOptions                   = $("#pdf-options");
    const PDFLayouts                   = $("#pdf-layouts");
    const exportPDFButton              = $("#export-pdf");
    const cancelExportPDF              = $("#cancel-export-pdf");
    const reportContainer              = $("#report-container");

    // change text size while export
    const changeTextSize = (textSizeInPixels) => {

        // change text size for thead to prevent table cells break
        $("#report-table thead tr th").each(function() {
            $(this).css("font-size", textSizeInPixels);
        });

        // change text size for tbody to prevent table cells break
        $("#report-table tbody tr td").each(function() {
            $(this).css("font-size", textSizeInPixels);
        });
    }

    // change back to original text size after export pdf
    const changeBackToOriginalTextSize = (defaultSize) => {

        // change text size for thead to prevent table cells break
        $("#report-table thead tr th").each(function() {
            $(this).css("font-size", "");
            $(this).addClass(defaultSize);
        });

        // change text size for tbody to prevent table cells break
        $("#report-table tbody tr td").each(function() {
            $(this).css("font-size", "");
            $(this).addClass(defaultSize);
        });
    }

    // hidden pdf options by default
    PDFOptions.addClass("hidden");

    // onlick export pdf icon
    exportCurrentPageToPDFIcon.click(function() {

        $("#excel-options").addClass("hidden");
        PDFOptions.toggleClass("hidden");

        // onclick export pdf button
        exportPDFButton.click(function() {

            // make other row visible before export pdf
            // $("#report-table tbody tr").css({
            //     "opacity": "1"
            // });
            
            // change text size while exporting
            changeTextSize("8px");

            // change logo during export prevent image lost for html2pdf
            // $("#logo").attr("src","{{ asset('images/logo/turbotech-1.png') }}");

            const selectedLayout = PDFLayouts.val();

            // call export pdf function
            exportPortableDocumentFormat(selectedLayout);
        });

        // cancel export pdf button
        cancelExportPDF.click(function() {

            // $("#logo").attr("src","https://www.turbotech.com/storages/assets/img/system/turbotech.png");
            PDFOptions.addClass("hidden");
        });
    });

    // export pdf function
    const exportPortableDocumentFormat = (layout) => {

        const element = document.getElementById("content-pdf");

        // export pdf options
        html2pdf(element, {
            margin: [0.5, 0.2],
            padding: 0,
            filename: "Report.pdf",
            image: { 
                type: "jpeg",
                quality: 1
            },
            html2canvas: {
                scale: 4,
                useCORS: true,
                logging: true
            },
            jsPDF: {
                unit: "in",
                format: "A4",
                orientation: `${layout}`,
            },
            class: exportPortableDocumentFormat,
            width: 320,
            height: 220
        })

        .then((canvas) => {
            changeBackToOriginalTextSize("text-sm");
        });
    };

    /*
    *--------------------------------------------------------------------------
    * export excel
    *--------------------------------------------------------------------------
    */
    const exportToExcel     = $("#export-to-excel");
    const reportTable       = $("#report-table");
    const excelOptions      = $("#excel-options");
    const excelName         = $("#excel-name");
    const exportExcelButton = $("#export-excel");
    const cancelExportExcel = $("#cancel-export-excel");

    // hidden excel options by default
    excelOptions.addClass("hidden");
        
    // onclick export excel icon
    exportToExcel.click(function() {

        PDFOptions.addClass("hidden");
        excelOptions.toggleClass("hidden");

        // onclick export excel button
        exportExcelButton.click(function() {

            excelFilename = excelName.val();
            
            // if filename is empty => filename = "Report.xls"
            if ( excelFilename == "" ) {
                excelFilename = "Report"
            
            // else filename = value from input
            } else {
                excelFilename = excelName.val();
            }

            // call export excel function
            exportExcel(excelFilename);
        });

        // onclick cancel export excel button
        cancelExportExcel.click(function() {
            excelOptions.addClass("hidden");
        });
    });
    
    // export excel function
    const exportExcel = (filename) => {

        // export excel options
        reportTable.table2excel({
            exclude: ".excludeThisClass",
            name: reportTable.data("table-name"),
            filename: `${filename}`,
            preserveColors: true
        });
    };

    /*
    *--------------------------------------------------------------------------
    * copy to clipboard
    *--------------------------------------------------------------------------
    */
    const clipboardIconsParent = $("#copy-to-clipboard").parent();
    const copyToClipboardIcon  = $("#copy-to-clipboard");
    const recordTable          = $("#report-table");

    // onclick copy to clipboard icon
    copyToClipboardIcon.click(function() {

        const tbodyNodeContents = recordTable.find("tbody tr td");

        // call copy to clipboard function
        copyToClipboard(tbodyNodeContents);
    });
    
    // copy to clipboard function
    const copyToClipboard = (element) => {

        // create a textarea for storing copy contents temporarily
        let $temp = $("<textarea>");
        $("body").append($temp);

        // select contents from textarea
        $temp.val(element.text()).select();

        // copy command
        document.execCommand("copy");

        // after copy operation remove textarea
        $temp.remove();

        // show alert after copy
        clipboardIconsParent.find("#copied-to-clipboard-alert").fadeIn(300).delay(2000).fadeOut(400);
    };

    /*
    *--------------------------------------------------------------------------
    * print report
    *--------------------------------------------------------------------------
    */
    const printIcon = $("#print-pdf");
    const contents  = ("content-pdf");

    // onclick print icon
    printIcon.click(function() {

        // change text size while printing
        changeTextSize("8px");

        // call print report function
        printReport(contents);
    });

    // print function
    const printReport = (NameID) => {

        const printContents    = document.getElementById(NameID).innerHTML;
        const originalContents = document.body.innerHTML;

        // body equal to print contents
        document.body.innerHTML = printContents;

        // show full table rows while printing
        // pagination($("#report-table tbody tr").length, $("#report-table tbody tr"), "");
        
        // show full table row contents while printing
        // $("#report-table tbody tr").css({
        //     "opacity": "1"
        // });

        // print modal and options
        window.print();

        // body equal to original or default contents
        document.body.innerHTML = originalContents;
        
        // reload location after printed help prevent error event click
        location.reload();
    };

    /*
    *--------------------------------------------------------------------------
    * find & filter datatable
    *--------------------------------------------------------------------------
    */
    const findBox    = $("[data-find]");
    const theadItems = $("#report-table tr th");
    const noResultFound = $("tfoot tr td");
                        
    // no result found
    noResultFound.addClass("hidden");
    noResultFound.attr("colspan", theadItems.length);

    // on keyup find value from table row
    findBox.on("keyup", function() {

        const findVal = $(this).val().toLowerCase();
        const tableListItems = reportTable.find("tbody tr");

        // call filter table row function
        filterTableRow(tableListItems, findVal);
    });

    // filter table rows function
    const filterTableRow = (tableRow, value) => {

        // filter table row and display results
        tableRow.filter(function() {

            // make opacity visible for each paginations while filtering
            // $("#report-table tbody tr").css({
            //     "opacity": "1"
            // });

            const filterTableRowResults = $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);

            // result lengths after filtering 
            const resultLenghts = $("#report-table tbody tr td:visible").length;

            // if result length is 0 => no results found
            if ( resultLenghts == 0 ) {
                noResultFound.removeClass("hidden");
            
            // else !no results found
            } else {
                noResultFound.addClass("hidden");
            }
        });
    };

    /*
    *--------------------------------------------------------------------------
    * pagination
    *--------------------------------------------------------------------------
    */
    // const pagination = (number, tableRow, visibility) => {

    //     const contentPDF           = $("#content-pdf");
    //     const totalTableRows       = tableRow;
    //     const totalTableRowLengths = $("#report-table tbody tr").length;
    //     const rowPerPage           = number;
        
    //     // page number
    //     const pageNumbers  = totalTableRowLengths / rowPerPage;
    //     contentPDF.after(`<div id="paginations" class="flex justify-end gap-2 p-5 ${visibility}"></div>`);

    //     const paginations       = $("#paginations");
    //     const firstPagination   = $("#paginations a:first");

    //     for( var i = 0; i < pageNumbers; i++ ) {
    //         var pageNum = i + 1;
    //         paginations.append('<a href="javascript:void(0);" rel="' + i + '" class="-primary px-3 py-1 focus:bg-[color:rgba(var(--ni-danger-500))] shadow-md rounded-md">' + pageNum + '</a>');
    //     }

    //     // hide table rows
    //     totalTableRows.hide();

    //     // show only 10 per pages
    //     totalTableRows.slice(0, rowPerPage).show();

    //     firstPagination.addClass("active");
        
    //     $("#paginations a").bind("click", function() {

    //         // onclick pagination hidden no results found
    //         noResultFound.addClass("hidden");

    //         $("#paginations a").removeClass("active");
    //         $(this).addClass("active");

    //         const currentPage = $(this).attr("rel");
    //         const startItem   = currentPage * rowPerPage;
    //         const endItem     = startItem + rowPerPage;

    //         totalTableRows.css("opacity", "0.0").hide().slice(startItem, endItem).css("display", "table-row").animate({opacity: 1}, 300);
    //     });
    // };

</script>

@endsection