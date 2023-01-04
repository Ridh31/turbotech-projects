// <!-- html2pdf cdn -->
// <script src="https://cdn.bootcss.com/html2pdf.js/0.9.1/html2pdf.bundle.js"></script>
// <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.1/html2pdf.bundle.min.js"></script>

// <!-- table2excel cdn -->
// <script src="https://cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>

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
const pagination = (number, tableRow, visibility) => {

    const contentPDF           = $("#content-pdf");
    const totalTableRows       = tableRow;
    const totalTableRowLengths = $("#report-table tbody tr").length;
    const rowPerPage           = number;
    
    // page number
    const pageNumbers  = totalTableRowLengths / rowPerPage;
    contentPDF.after(`<div id="paginations" class="flex justify-end gap-2 p-5 ${visibility}"></div>`);

    const paginations       = $("#paginations");
    const firstPagination   = $("#paginations a:first");

    for( var i = 0; i < pageNumbers; i++ ) {
        var pageNum = i + 1;
        paginations.append('<a href="javascript:void(0);" rel="' + i + '" class="-primary px-3 py-1 focus:bg-[color:rgba(var(--ni-danger-500))] shadow-md rounded-md">' + pageNum + '</a>');
    }

    // hide table rows
    totalTableRows.hide();

    // show only 10 per pages
    totalTableRows.slice(0, rowPerPage).show();

    firstPagination.addClass("active");
    
    $("#paginations a").bind("click", function() {

        // onclick pagination hidden no results found
        noResultFound.addClass("hidden");

        $("#paginations a").removeClass("active");
        $(this).addClass("active");

        const currentPage = $(this).attr("rel");
        const startItem   = currentPage * rowPerPage;
        const endItem     = startItem + rowPerPage;

        totalTableRows.css("opacity", "0.0").hide().slice(startItem, endItem).css("display", "table-row").animate({opacity: 1}, 300);
    });
};