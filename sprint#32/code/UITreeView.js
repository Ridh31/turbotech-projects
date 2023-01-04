console.clear();

/*
*--------------------------------------------------------------------------
* tree view
*--------------------------------------------------------------------------
*/
const entireChildrenUnorderedList = $("#tree-view ul");
const listContainsUnorderedList   = $("#tree-view li > ul");
const customListStyles            = $("#tree-view li");

const treeViewUI = () => {
    
    // hide all children ul except parent
    entireChildrenUnorderedList.hide();

    // custom list
    customListStyles.append(`

        <style>
            #tree-view li{position:relative; cursor:pointer;}
            #tree-view li:before{position:absolute;top:0;left:-15px;display:block;width:15px;height:1em;content:"";border-bottom:1px dotted #666;border-left:1px dotted #666}
            #tree-view li:after{position:absolute;top:1.1em;bottom:1px;left:-15px;display:block;content:"";border-left:1px dotted #666;}
            
            /* hide the vertical line on the first item */
            #tree-view > li:first-child:before{border-left:none;}

            /* hide the lines on the last item */
            #tree-view li:last-child:after{display:none;}

            /* active color */
            .active{color: #0EA5E9;}
        </style>
    `);

    // each li contains ul
    listContainsUnorderedList.each(function(i) {

        const subUnorderedList = $(this);
        const parentList       = subUnorderedList.parent("li");

        // toggle icon
        const toggleIcon = (`<i id="toggle-icon" class="cursor-pointer relative inline-block w-3.5 z-10 leading-[14px] -ml-[22px] mr-0.5 border border-[color:rgba(var(--ni-gray-400))] bg-slate-100 text-center rounded-sm">+</i>`);
        
        // add class to parent list
        parentList.addClass("has-children");
        
        // prepend toggle icon
        parentList.prepend(toggleIcon).find("#toggle-icon").on("click", function() {

            // toggle + and -
            $(this).text( $(this).text() == "+" ? "-" : "+" );

            // slide toggle speed
            subUnorderedList.slideToggle(300);
        });
    });
};

// call function
treeViewUI();

/*
*--------------------------------------------------------------------------
* tree view content
*--------------------------------------------------------------------------
*/
const dataGroupTree       = $("#data-group li");
const treeViewContents    = $("#tree-view-contents");

// datatable
const dataTable = (`
    <table id="report-table" class="relative w-full border border-[color:rgba(var(--ni-gray-500))] border-collapse text-start mt-2" data-table-name="Report">
        <thead class="z-10 sticky top-0">
            <tr class="-primary">
                <th class="text-white text-center px-1 py-0.5 border-x border-[color:rgba(var(--ni-gray-500))]">Code</th>
                <th class="text-white text-center px-1 py-0.5 border-x border-[color:rgba(var(--ni-gray-500))]">Name</th>
                <th class="text-white text-center px-1 py-0.5 border-x border-[color:rgba(var(--ni-gray-500))]">Username</th>
                <th class="text-white text-center px-1 py-0.5 border-x border-[color:rgba(var(--ni-gray-500))]">Email</th>
                <th class="text-white text-center px-1 py-0.5 border-x border-[color:rgba(var(--ni-gray-500))]">Zip Cope</th>
                <th class="text-white text-center px-1 py-0.5 border-x border-[color:rgba(var(--ni-gray-500))]">Phone</th>
                <th class="text-white text-center px-1 py-0.5 border-x border-[color:rgba(var(--ni-gray-500))]">Website</th>
            </tr>
        </thead>

        <!-- table content -->
        <tbody>
            <tr>
                <td colspan="7" style="text-align: center;">No data</td>
            </tr>
        </tbody>
    </table>
`)

// show each data group content
const displayDataGroupContents = () => {

    // add active to each li
    $("#data-group").on("click", "li", function () {
        $("#data-group li.active").removeClass("active");
        $(this).addClass("active");
    });

    // add hover class to data group list
    dataGroupTree.each(function() {

        // add styles to each data group tree node
        $(this).addClass("hover:text-[color:rgba(var(--ni-primary-500))]");        

        // onclick each data group tree node
        $(this).click(function() {

            $(this).focus().addClass("text-[color:rgba(var(--ni-primary-500)]");

            // get data title
            const dataTitle = (`<h3 class="text-[color:rgba(var(--ni-primary-500))]">${$(this).data("title")}</h3>`);

            // data group contents
            const dataGroupContents = {
                fixedAssetStatus: `${dataTitle} ${dataTable}`,
                title: `${dataTitle} ${dataTable}`,
                nationality: `${dataTitle} ${dataTable}`,
                marritialStatus: `${dataTitle} ${dataTable}`,
                gender: `${dataTitle} ${dataTable}`,
                country: `${dataTitle} ${dataTable}`,
                province: `${dataTitle} ${dataTable}`,
                district: `${dataTitle} ${dataTable}`,
                commune: `${dataTitle} ${dataTable}`,
                village: `${dataTitle} ${dataTable}`,
                identificationType: `${dataTitle} ${dataTable}`,
                knowledgeLevel: `${dataTitle} ${dataTable}`,
                language: `${dataTitle} ${dataTable}`,
                institutions: `${dataTitle} ${dataTable}`,
                major: `${dataTitle} ${dataTable}`,
                certificateDegree: `${dataTitle} ${dataTable}`,
                typeOfBusiness: `${dataTitle} ${dataTable}`,
                company: `${dataTitle} ${dataTable}`,
                reasonOfLeaving: `${dataTitle} ${dataTable}`,
                department: `${dataTitle} ${dataTable}`,
                unitSection: `${dataTitle} ${dataTable}`,
                position: `${dataTitle} ${dataTable}`,
                otherSkill: `${dataTitle} ${dataTable}`,
                people: `${dataTitle} ${dataTable}`,
                occupation: `${dataTitle} ${dataTable}`,
                brand: `${dataTitle} ${dataTable}`,
                assetMediaType: `${dataTitle} ${dataTable}`,
                stockOutDescription: `${dataTitle} ${dataTable}`,
            }

            // get data group tree id
            const dataGroupTreeID = $(this).attr("id");

            // show each data group contents
            treeViewContents.hide().html(dataGroupContents[dataGroupTreeID]).fadeIn();
        });
    });
};

// call function
displayDataGroupContents();