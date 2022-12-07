@extends('master')
@section('content')

<!-- title -->
<div class="headingContainer">
    <h1 class="headingText"><i class="{{ $Icon }} headingIcon"></i> {{ $Title }}  </h1>
</div>

<!--------------------------------------------------------------------------
➤ server request form
<-------------------------------------------------------------------------->
<div class="mainCard">
    <form class="cardContainer" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="useTable" name="useTable" value="1">
        
        <div class="eachCard col-span-1 p-0">

            <!-- form header title -->
            <div class="px-5 border-b py-3">
                <h1 class="font-medium text-[rgba(var(--ni-primary-500))] leading-7 line-clamp-1">
                    <span class="font-content font-bold">សំណើរស្នើសុំបង្កើត <span class="font-medium">SERVER</span></span> / 
                    <span>SERVER REQUEST FORM</span>
                </h1>
            </div>

            <!-- all inputs -->
            <div class="p-5 grid grid-cols-1 sm:grid-cols-2 gap-y-3 gap-x-2">

                <!-- name -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Name</h3>
                    <input type="text" name="name" id="name" value="" class="formInput mt-2" placeholder="Name" required>
                </div>

                <!-- date -->
                <div class="col-span-2 sm:col-span-1">
                    <label for="date" class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Date</label>
                    <input datepicker datepicker-format="dd-mm-yyyy" type="text" value="" name="date" id="date" placeholder="Date" class="formInput mt-2" autocomplete="off" required>
                </div>

                <!-- department -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium w-full sm:w-64 after:content-['_*'] after:text-red-500 dark:text-white font-content">Department</h3>
                    <div class="mt-2" id="select2_content_department">
                        <select class="select2" name="department" id="department" required>
                            <option disabled selected>-- Select --</option>
                            <option value="4"> Administration Department/នាយកដ្ឋាន រដ្ឋបាល </option>
                            <option value="3">Business Department/នាយកដ្ឋានអាជីវកម្ម </option>
                            <option value="2"> Finance Department/នាយកដ្ឋានហិរញ្ញវត្ថុ </option>
                            <option value="1"> Information Technology Department/នាយកដ្ឋានព័ត៌មានវិទ្យា </option>
                            <option value="0"> Top Management/ការិយាល័យអគ្គនាយក </option>
                        </select>
                    </div>
                </div>

                <!-- title -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Title</h3>
                    <input type="text" name="title" id="title" value="" class="formInput mt-2" placeholder="Title" required>
                </div>

                <!-- email address -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Email Address</h3>
                    <input type="email" name="emailAddress" id="emailAddress" class="formInput mt-2" placeholder="Email Address" required
                        onkeypress="return validEmail(event)"
                    >
                </div>

                <!-- phone -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium w-full sm:w-64 after:content-['_*'] after:text-red-500 dark:text-white font-content">Phone</h3>
                    <input
                        maxlength="10"
                        onkeypress="return validENNumber(event)"
                        type="tel"
                        placeholder="Phone"
                        name="phone"
                        id="phone"
                        class="block w-full mt-2 px-3 py-1.5 bg-white sm:text-sm border dark:bg-gray-800 dark:text-gray-200 focus:outline-none focus:border-primary-400 rounded-md"
                        required
                    >
                </div>

                <!-- line manager -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Line Manager</h3>
                    <input type="text" name="lineManager" id="lineManager" value="" class="formInput mt-2" placeholder="Line Manager" required>
                </div>

                <!-- line manager phone -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium w-full sm:w-64 after:content-['_*'] after:text-red-500 dark:text-white font-content">Line Manager Phone</h3>
                    <input
                        maxlength="10"
                        onkeypress="return validENNumber(event)"
                        type="tel"
                        placeholder="Line Manager Phone"
                        name="lineManagerPhone"
                        id="lineManagerPhone"
                        class="block w-full mt-2 px-3 py-1.5 bg-white sm:text-sm border dark:bg-gray-800 dark:text-gray-200 focus:outline-none focus:border-primary-400 rounded-md"
                        required
                    >
                </div>

                <!-- server information -->
                <div class="col-span-2">
                    <div class="mt-2" id="select2_content_serverInformation">

                        <!-- server information: title -->
                        <table class="w-full text-center">
                            <thead>
                                <tr class="border-0">
                                    <td colspan="2" class="text-base font-medium text-gray-900 dark:text-white py-4 border-x-0 text-left">
                                        Server Information
                                    </td>                            
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>

                <!-- server type -->
                <div class="col-span-2">
                    <div class="mt-2" id="select2_content_serverType">
                        <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Server Type (check all that apply)</h3>

                        <!-- server type: checkbox content -->
                        <div class="border space-y-2 mt-2 px-6 py-4">
                            <div class="grid grid-cols-3 gap-2 w-full">

                                <!-- application server -->
                                <div class="col-span-2 md:col-span-1 flex items-center gap-2">
                                    <input type="checkbox" name="applicationServer" id="applicationServer" class="w-4 h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500 rounded">
                                    <label for="applicationServer" class="cursor-pointer select-none mt-1 font-medium text-sm dark:bg-gray-800 dark:text-gray-100">Application Server</label>
                                </div>
        
                                <!-- database server -->
                                <div class="col-span-2 md:col-span-1 flex items-center gap-2">
                                    <input type="checkbox" name="databaseServer" id="databaseServer" class="w-4 h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500 rounded">
                                    <label for="databaseServer" class="cursor-pointer select-none mt-1 font-medium text-sm dark:bg-gray-800 dark:text-gray-100">Database Server</label>
                                </div>
        
                                <!-- file server -->
                                <div class="col-span-2 md:col-span-1 flex items-center gap-2">
                                    <input type="checkbox" name="fileServer" id="fileServer" class="w-4 h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500 rounded">
                                    <label for="fileServer" class="cursor-pointer select-none mt-1 font-medium text-sm dark:bg-gray-800 dark:text-gray-100">File Server</label>
                                </div>
        
                                <!-- web server -->
                                <div class="col-span-2 md:col-span-1 flex items-center gap-2">
                                    <input type="checkbox" name="webServer" id="webServer" class="w-4 h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500 rounded">
                                    <label for="webServer" class="cursor-pointer select-none mt-1 font-medium text-sm dark:bg-gray-800 dark:text-gray-100">Web Server</label>
                                </div>
        
                                <!-- ftp server -->
                                <div class="col-span-2 md:col-span-1 flex items-center gap-2">
                                    <input type="checkbox" name="ftpServer" id="ftpServer" class="w-4 h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500 rounded">
                                    <label for="ftpServer" class="cursor-pointer select-none mt-1 font-medium text-sm dark:bg-gray-800 dark:text-gray-100">FTP Server</label>
                                </div>
        
                                <!-- other -->
                                <div class="col-span-2 md:col-span-1 flex items-center gap-2">
                                    <input type="checkbox" name="other" id="other" class="w-4 h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500 rounded">
                                    <label for="other" class="cursor-pointer select-none mt-1 font-medium text-sm dark:bg-gray-800 dark:text-gray-100">Other</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- others -->
                <div class="col-span-2">
                    <h3 class="font-medium dark:text-white font-content">Others</h3>
                    <input type="text" name="others" id="others" value="" class="formInput mt-2" placeholder="Others" required>
                </div>

                <!-- environment -->
                <div class="col-span-2">
                    <div class="mt-2" id="select2_content_environment">
                        <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Environment</h3>

                        <!-- environment: checkbox content -->
                        <div class="border space-y-2 mt-2 px-6 py-4">
                            <div class="grid grid-cols-3 gap-2 w-full">

                                <!-- production -->
                                <div class="col-span-2 md:col-span-1 flex items-center gap-2">
                                    <input type="checkbox" name="production" id="production" class="w-4 h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500 rounded" data-environment="1">
                                    <label for="production" class="cursor-pointer select-none mt-1 font-medium text-sm dark:bg-gray-800 dark:text-gray-100">Production</label>
                                </div>

                                <!-- uat -->
                                <div class="col-span-2 md:col-span-1 flex items-center gap-2">
                                    <input type="checkbox" name="uat" id="uat" class="w-4 h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500 rounded" data-environment="1">
                                    <label for="uat" class="cursor-pointer select-none mt-1 font-medium text-sm dark:bg-gray-800 dark:text-gray-100">UAT</label>
                                </div>

                                <!-- development -->
                                <div class="col-span-2 md:col-span-1 flex items-center gap-2">
                                    <input type="checkbox" name="development" id="development" class="w-4 h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500 rounded" data-environment="1">
                                    <label for="development" class="cursor-pointer select-none mt-1 font-medium text-sm dark:bg-gray-800 dark:text-gray-100">Development</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- application administrator -->
                <div class="col-span-2">
                    <span class="font-medium dark:text-white font-content">Application administrator </span>
                    <span>(individual development responsible for maintaining the application software):</span>
                </div>

                <!-- application administrator name -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Name</h3>
                    <input type="text" name="appAdminName" id="appAdminName" value="" class="formInput mt-2" placeholder="Application Administrator Name" required>
                </div>

                <!-- application administrator phone -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium w-full sm:w-64 after:content-['_*'] after:text-red-500 dark:text-white font-content">Phone</h3>
                    <input
                        maxlength="10"
                        onkeypress="return validENNumber(event)"
                        type="tel"
                        placeholder="Application Administrator Phone"
                        name="appAdminPhone"
                        id="appAdminPhone"
                        class="block w-full mt-2 px-3 py-1.5 bg-white sm:text-sm border dark:bg-gray-800 dark:text-gray-200 focus:outline-none focus:border-primary-400 rounded-md"
                        required
                    >
                </div>
                
                <!-- will remote access request be required? -->
                <div class="col-span-2 2xl:col-span-1 grid grid-cols-2 gap-2">
                    <h3 class="font-medium w-full after:content-['_*'] after:text-red-500 dark:text-white font-content">Will remote access request be required?</h3>
                    
                    <!-- no & yes -->
                    <div class="grid grid-cols-2" id="select2_content_remoteAccessQuestion">
                        <div>
                            <input type="radio" class="cursor-pointer form-radio" name="remoteAccessQuestion" value="No" checked>
                            <span class="gap-2">NO</span>
                        </div>

                        <div>
                            <input type="radio" class="cursor-pointer form-radio" name="remoteAccessQuestion" value="Yes">
                            <span class="gap-2">YES</span>
                        </div>
                    </div>
                </div>

                <!-- server requirments -->
                <div class="col-span-2">
                    <div class="mt-2" id="select2_content_serverRequirement">

                        <!-- server requirments: title -->
                        <table class="w-full text-center">
                            <thead>
                                <tr class="border-0">
                                    <td colspan="2" class="text-base font-medium text-gray-900 dark:text-white py-4 border-x-0 text-left">
                                        Server Requirements
                                    </td>                            
                                </tr>
                            </thead>
                        </table>

                        <!-- server requirments: checkbox content -->
                        <div class="border space-y-2 px-6 py-4">
                            <div class="grid grid-cols-2 gap-2 w-full">

                                <!-- virtual machine -->
                                <div class="col-span-2 md:col-span-1 flex items-center gap-2">
                                    <input type="checkbox" name="virtualMachine" id="virtualMachine" class="w-4 h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500 rounded" data-server-requirement="1">
                                    <label for="virtualMachine" class="cursor-pointer select-none mt-1 font-medium text-sm dark:bg-gray-800 dark:text-gray-100">Virtual Machine</label>
                                </div>

                                <!-- physical server -->
                                <div class="col-span-2 md:col-span-1 flex items-center gap-2">
                                    <input type="checkbox" name="physicalServer" id="physicalServer" class="w-4 h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500 rounded" data-server-requirement="1">
                                    <label for="physicalServer" class="cursor-pointer select-none mt-1 font-medium text-sm dark:bg-gray-800 dark:text-gray-100">Physical Server</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- server name -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Server Name</h3>
                    <input type="text" name="serverName" id="serverName" value="" class="formInput mt-2" placeholder="Server Name" required>
                </div>
                
                <!-- operating system -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Operating System</h3>
                    <input type="text" name="operatingSystem" id="operatingSystem" value="" class="formInput mt-2" placeholder="Operating System" required>
                </div>

                <!-- number of cpu's core -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Number of CPU's Core</h3>
                    <input type="text" name="numberOfCPUCore" id="numberOfCPUCore" value="" class="formInput mt-2" placeholder="Number of CPU's Core" required>
                </div>

                <!-- memory -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Memory</h3>
                    <input type="text" name="memory" id="memory" value="" class="formInput mt-2" placeholder="Memory" required>
                </div>

                <!-- disk size for operating system -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Disk size for operating system</h3>
                    <input type="text" name="diskSizeForOS" id="diskSizeForOS" value="" class="formInput mt-2" placeholder="Disk size for operating system" required>
                </div>

                <!-- storage requirement for application/data -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Storage requirement for application/data</h3>
                    <input type="text" name="storageRequirementForApp" id="storageRequirementForApp" value="" class="formInput mt-2" placeholder="Disk size for operating system" required>
                </div>

                <!-- network information -->
                <div class="col-span-2">
                    <div class="mt-2" id="select2_content_networkInformation">

                        <!-- network information: title -->
                        <table class="w-full text-center">
                            <thead>
                                <tr class="border-0">
                                    <td colspan="2" class="text-base font-medium text-gray-900 dark:text-white py-4 border-x-0 text-left">
                                        Network Information
                                    </td>                            
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>

                <!-- private ip -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Private IP</h3>
                    <input type="text" name="privateIP" id="privateIP" value="" class="formInput mt-2" placeholder="Private IP" required>
                </div>

                <!-- public ip -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Public IP</h3>
                    <input type="text" name="publicIP" id="publicIP" value="" class="formInput mt-2" placeholder="Public IP" required>
                </div>

                <!-- buttons -->
                <div class="col-span-2 flex justify-end gap-x-2">
                    <button type="button" onclick="history.back()" class="button -danger text-sm py-1 waves-effect">Cancel</button>
                    <button type="button" onclick="saveModel(this,'serverRequestForm','/eApprovals/form/serverRequestForm','/eApprovals/form')" class="button -primary text-sm py-1 waves-effect"> Save </button>
                </div>
            </div>
        </div>
    </form>
</div>

<script>

   /*
    *--------------------------------------------------------------------------
    * checkbox only one
    *--------------------------------------------------------------------------
    */

    // environment checkboxes & its attribute
    const environmentCheckBoxes     = $("#select2_content_environment div div div input[data-environment]");
    const environmentCheckBoxesAttr = ("data-environment");

    // server requirment checkboxes & its attribute
    const serverRequireCheckboxes     = $("#select2_content_serverRequirement div div div input[data-server-requirement]");
    const serverRequireCheckboxesAttr = ("data-server-requirement");

    // check only one for checkboxes function
    const checkOnlyOneCheckBox = (checkboxes, attribute) => {

        // each checkbox onclick event
        checkboxes.click(function() {

            const $checkbox       = $(this);
            const otherCheckBoxes = "input:checkbox[" + attribute + "=" + $checkbox.attr(attribute) + "]";

            // if current checkbox is checked
            if ( $checkbox.is(":checked") ) {
                
                // other checkboxes => not checked
                $(otherCheckBoxes).prop("checked", false);

                // current checkbox => checked
                $checkbox.prop("checked", true);
            
            // else current checkbox => not checked
            } else {
                $checkbox.prop("checked", false);
            }
        });
    }

    // call checkOnlyOneCheckBox function for environment
    checkOnlyOneCheckBox(environmentCheckBoxes, environmentCheckBoxesAttr);

    // call checkOnlyOneCheckBox function for server requirement
    checkOnlyOneCheckBox(serverRequireCheckboxes, serverRequireCheckboxesAttr);

</script>

@endsection