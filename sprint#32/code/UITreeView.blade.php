@extends('master')
@section('content')

{{-- <div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div> --}}

<!-- UI Tree View -->

<!-- main -->
<div class="mainCard">
    <div class="cardContainer p-2 sm:p-5">

        <!-- left side: tree view -->
        <div class="divide-x divide-[color:rgba(var(--ni-gray-300))] flex border border-[color:rgba(var(--ni-gray-300))]">

            <!-- tree view container -->
            <div class="w-[25%] p-5">

                <!-- tree view -->
                <ul id="tree-view" class="select-none m-0 pl-6 leading-8 list-none">       

                    <!-- data group -->
                    <li>
                        <a href="#" onclick="return false;">Data Group</a>
                        
                        <!-- data group contents -->
                        <ul id="data-group" class="relative ml-5">
                            <li id="fixedAssetStatus" data-title="Fixed Asset Status">Fixed Asset Status</li>
                            <li id="title" data-title="Title">Title</li>
                            <li id="nationality" data-title="Nationality">Nationality</li>
                            <li id="marritialStatus" data-title="Marritial Status">Marritial Status</li>
                            <li id="gender" data-title="Gender">Gender</li>
                            <li id="country" data-title="Country">Country</li>
                            <li id="province" data-title="Province">Province</li>
                            <li id="district" data-title="District">District</li>
                            <li id="commune" data-title="Commune">Commune</li>
                            <li id="village" data-title="Village">Village</li>
                            <li id="identificationType" data-title="Identification Type">Identification Type</li>
                            <li id="knowledgeLevel" data-title="Knowledge Level">Knowledge Level</li>
                            <li id="language" data-title="Language">Language</li>
                            <li id="institutions" data-title="Institutions of education">Institutions of education</li>
                            <li id="major" data-title="Major">Major</li>
                            <li id="certificateDegree" data-title="Certificate Degree">Certificate Degree</li>
                            <li id="typeOfBusiness" data-title="Type of Business">Type of Business</li>
                            <li id="company" data-title="Company">Company</li>
                            <li id="reasonOfLeaving" data-title="Reason of Leaving">Reason of Leaving</li>
                            <li id="department" data-title="Department">Department</li>
                            <li id="unitSection" data-title="Unit/Section">Unit/Section</li>
                            <li id="position" data-title="Position">Position</li>
                            <li id="otherSkill" data-title="Other Skill">Other Skill</li>
                            <li id="people" data-title="People Relationship">People Relationship</li>
                            <li id="occupation" data-title="Occupation">Occupation</li>
                            <li id="brand" data-title="Brand">Brand</li>
                            <li id="assetMediaType" data-title="Asset Media Type">Asset Media Type</li>
                            <li id="stockOutDescription" data-title="Stock Out Description">Stock Out Description</li>
                        </ul>
                    </li>
                    
                    <!-- nested group -->
                    <li>
                        <a href="#" onclick="return false;">Nested Group</a>
                        
                        <!-- nested group contents -->
                        <ul id="nested-group" class="ml-5">

                            <!-- software -->
                            <li>
                                <a href="#" onclick="return false;">Software</a>

                                <!-- software contents -->
                                <ul class="ml-5">
                                    <li>Application Software</li>
                                    <li>System Software</li>
                                </ul>
                            </li>

                            <!-- installation -->
                            <li>Installation</li>

                            <!-- configuration -->
                            <li>
                                <a href="#" onclick="return false;">Configuration</a>

                                <!-- configuration content -->
                                <ul class="ml-5">

                                    <!-- services -->
                                    <li>Services</li>

                                    <!-- upgrade devices -->
                                    <li>
                                        <a href="#" onclick="return false;">Upgrade Devices</a>

                                        <!-- upgrade devices contents -->
                                        <ul class="ml-5">
                                            <li>Advanced Installation</li>
                                            <li>Changing Devices</li>
                                        </ul>
                                    </li>

                                    <!-- internet speed -->
                                    <li>Internet Speed</li>

                                    <!-- battery life -->
                                    <li>Battery Life</li>

                                    <!-- tools -->
                                    <li>Tools</li>
                                </ul>
                            </li>

                            <!-- documentations -->
                            <li>Documentations</li>

                            <!-- accessibility -->
                            <li>Accessibility</li>

                            <!--  -->
                            <li>Components</li>

                            <!-- customize -->
                            <li>
                                <a href="#" onclick="return false;">Customize</a>
                                
                                <!-- customize contents -->
                                <ul class="ml-5">
                                    <li>Overview</li>
                                    <li>Products</li>
                                </ul>
                            </li>
                            
                            <!-- background -->
                            <li>Background</li>

                            <!-- utilites -->
                            <li>
                                <a href="#" onclick="return false;">Utilities</a>

                                <!-- utilities contents -->
                                <ul class="ml-5">
                                    <li>Systems</li>
                                    <li>Visibility</li>
                                    <li>Approach</li>
                                    <li>Training</li>
                                    <li>Interactions</li>
                                </ul>
                            </li>

                            <!-- migration -->
                            <li>Migration</li>

                            <!-- about -->
                            <li>About</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- right side: contents -->
            <div class="w-[75%] p-5">
                <div id="tree-view-contents">
                    <h3 class="text-[color:rgba(var(--ni-primary-500))]">HIM ROUNGRIDH</h3>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('internalScript')

<script>

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

        // add hover class to data group list
        dataGroupTree.each(function() {

            // add styles to each data group tree node
            $(this).addClass("hover:text-[color:rgba(var(--ni-primary-500))]");

            // onclick each data group tree node
            $(this).click(function() {

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

</script>

@endsection