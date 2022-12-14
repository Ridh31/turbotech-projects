@extends('master')
@section('content')

<!-- title -->
<div class="headingContainer">
    <h1 class="headingText"><i class="{{ $Icon }} headingIcon"></i> {{ $Title }}  </h1>
</div>

<!--------------------------------------------------------------------------
➤ IT hardware problem report
<-------------------------------------------------------------------------->
<div class="mainCard">
    <form class="cardContainer" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="useTable" name="useTable" value="1">
        
        <div class="eachCard col-span-1 p-0">

            <!-- form header title -->
            <div class="px-5 border-b py-3">
                <h1 class="font-medium text-[rgba(var(--ni-primary-500))] leading-7 line-clamp-1">
                    <span class="font-content font-bold">របាយការណ៍បញ្ហា IT Hardware</span> / 
                    <span>IT HARDWARE PROBLEM REPORT</span>
                </h1>
            </div>

            <!-- all inputs -->
            <div class="p-5 grid grid-cols-1 sm:grid-cols-2 gap-y-3 gap-x-2">

                <!-- checker -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Checker</h3>
                    <input type="text" name="checker" id="checker" value="" class="formInput mt-2" placeholder="Checker" required>
                </div>

                <!-- gender or sex -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Gender</h3>
                    <input type="text" name="gender" id="gender" value="" class="formInput mt-2" placeholder="Gender" required>
                </div>

                <!-- position -->
                <div class="col-span-2">
                    <div id="select2_content_position">
                        <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Position</h3>

                        <!-- position: checkbox content -->
                        <div class="border space-y-2 mt-2 px-6 py-4">
                            <div class="grid grid-cols-4 gap-2 w-full">

                                <!-- IT manager -->
                                <div class="col-span-4 sm:col-span-2 md:col-span-1 flex items-center gap-2">
                                    <input type="checkbox" name="ITManager" id="ITManager" class="w-4 h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500 rounded" data-position="1">
                                    <label for="ITManager" class="cursor-pointer select-none mt-1 font-medium text-sm dark:bg-gray-800 dark:text-gray-100">IT Manager</label>
                                </div>

                                <!-- senior IT officer -->
                                <div class="col-span-4 sm:col-span-2 md:col-span-1 flex items-center gap-2">
                                    <input type="checkbox" name="seniorITOfficer" id="seniorITOfficer" class="w-4 h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500 rounded" data-position="1">
                                    <label for="seniorITOfficer" class="cursor-pointer select-none mt-1 font-medium text-sm dark:bg-gray-800 dark:text-gray-100">Senior IT Officer</label>
                                </div>

                                <!-- IT officer -->
                                <div class="col-span-4 sm:col-span-2 md:col-span-1 flex items-center gap-2">
                                    <input type="checkbox" name="ITOfficer" id="ITOfficer" class="w-4 h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500 rounded" data-position="1">
                                    <label for="ITOfficer" class="cursor-pointer select-none mt-1 font-medium text-sm dark:bg-gray-800 dark:text-gray-100">IT Officer</label>
                                </div>

                                <!-- IT assistant -->
                                <div class="col-span-4 sm:col-span-2 md:col-span-1 flex items-center gap-2">
                                    <input type="checkbox" name="ITAssistant" id="ITAssistant" class="w-4 h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500 rounded" data-position="1">
                                    <label for="ITAssistant" class="cursor-pointer select-none mt-1 font-medium text-sm dark:bg-gray-800 dark:text-gray-100">IT Assistant</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- IT officer -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium dark:text-white font-content">IT Officer</h3>
                    <input type="text" name="ITOfficerInput" id="ITOfficerInput" value="" class="formInput mt-2" placeholder="IT Officer">
                </div>

                <!-- tel -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium w-full sm:w-64 after:content-['_*'] after:text-red-500 dark:text-white font-content">Tel</h3>
                    <input
                        maxlength="10"
                        onkeypress="return validENNumber(event)"
                        type="tel"
                        placeholder="Tel"
                        name="tel"
                        id="tel"
                        class="block w-full mt-2 px-3 py-1.5 bg-white sm:text-sm border dark:bg-gray-800 dark:text-gray-200 focus:outline-none focus:border-primary-400 rounded-md"
                        required
                    >
                </div>

                <!-- computer/hardware asset code -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Computer/Hardware Asset Code</h3>
                    <input type="text" name="computerHardwareAssetCode" id="computerHardwareAssetCode" value="" class="formInput mt-2" placeholder="Computer/Hardware Asset Code" required>
                </div>

                <!-- used by -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Used by</h3>
                    <input type="text" name="usedBy" id="usedBy" value="" class="formInput mt-2" placeholder="Used by" required>
                </div>

                <!-- department or branch -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium w-full sm:w-64 after:content-['_*'] after:text-red-500 dark:text-white font-content">Department or Branch</h3>
                    <div class="mt-2" id="select2_content_departmentOrBranch">
                        <select class="select2" name="departmentOrBranch" id="departmentOrBranch" required>
                            <option disabled selected>-- Select --</option>
                            <option value="4"> Administration Department/នាយកដ្ឋាន រដ្ឋបាល </option>
                            <option value="3"> Business Department/នាយកដ្ឋានអាជីវកម្ម </option>
                            <option value="2"> Finance Department/នាយកដ្ឋានហិរញ្ញវត្ថុ </option>
                            <option value="1"> Information Technology Department/នាយកដ្ឋានព័ត៌មានវិទ្យា </option>
                            <option value="0"> Top Management/ការិយាល័យអគ្គនាយក </option>
                        </select>
                    </div>
                </div>

                <!-- date of problem -->
                <div class="col-span-2 sm:col-span-1">
                    <label for="dateOfProblem" class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Date of Problem</label>
                    <input datepicker datepicker-format="dd-mm-yyyy" type="text" value="" name="dateOfProblem" id="dateOfProblem" placeholder="Date of Problem" class="formInput mt-2" autocomplete="off" required>
                </div>

                <!-- problem description -->
                <div class="col-span-2">
                    <h3 class="font-medium w-full sm:w-64 dark:text-white font-content">Problem Description</h3>
                    <textarea rows="5" name="problemDescription" id="problemDescription" class="formInput mt-2"></textarea>
                </div>

                <!-- problem solving -->
                <div class="col-span-2">
                    <h3 class="font-medium w-full sm:w-64 dark:text-white font-content">Problem Solving</h3>
                    <textarea rows="5" name="problemSolving" id="problemSolving" class="formInput mt-2"></textarea>
                </div>

                <!-- date solving -->
                <div class="col-span-2 sm:col-span-1">
                    <label for="dateSolving" class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Date Solving</label>
                    <input datepicker datepicker-format="dd-mm-yyyy" type="text" value="" name="dateSolving" id="dateSolving" placeholder="Date Solving" class="formInput mt-2" autocomplete="off" required>
                </div>

                <!-- controller/checker -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Controller/Checker</h3>
                    <input type="text" name="controllerChecker" id="controllerChecker" value="" class="formInput mt-2" placeholder="Controller/Checker" required>
                </div>

                <!-- approved IT manager -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Approved IT Manager</h3>
                    <input type="text" name="approvedITManager" id="approvedITManager" value="" class="formInput mt-2" placeholder="Approved IT Manager" required>
                </div>

                <!-- buttons -->
                <div class="col-span-2 flex justify-end gap-x-2">
                    <button type="button" onclick="history.back()" class="button -danger text-sm py-1 waves-effect">Cancel</button>
                    <button type="button" onclick="saveModel(this,'ITHardwareProblemReport','/eApprovals/form/ITHardwareProblemReport','/eApprovals/form')" class="button -primary text-sm py-1 waves-effect"> Save </button>
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

    // position checkboxes & its attribute
    const positionCheckBoxes     = $("#select2_content_position div div div input[data-position]");
    const positionCheckBoxesAttr = ("data-position");
 
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

     // call function
     checkOnlyOneCheckBox(positionCheckBoxes, positionCheckBoxesAttr);
 
 </script>

@endsection