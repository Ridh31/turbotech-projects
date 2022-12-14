@extends('master')
@section('content')

<!-- title -->
<div class="headingContainer">
    <h1 class="headingText"><i class="{{ $Icon }} headingIcon"></i> {{ $Title }}  </h1>
</div>

<!--------------------------------------------------------------------------
➤ change request form
<-------------------------------------------------------------------------->
<div class="mainCard">
    <form class="cardContainer" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="useTable" name="useTable" value="1">
        
        <div class="eachCard col-span-1 p-0">

            <!-- form header title -->
            <div class="px-5 border-b py-3">
                <h1 class="font-medium text-[rgba(var(--ni-primary-500))] leading-7 line-clamp-1">
                    <span class="font-content font-bold">សំណើរសុំផ្លាស់ប្ដូរ</span> / 
                    <span>CHANGE REQUEST FORM</span>
                </h1>
            </div>

            <!-- all inputs -->
            <div class="p-5 grid grid-cols-1 sm:grid-cols-2 gap-y-3 gap-x-2">

                <!-- name's request -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Name's Request</h3>
                    <input type="text" name="nameRequest" id="nameRequest" value="" class="formInput mt-2" placeholder="Name's Request" required>
                </div>

                <!-- gender or Sex -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Gender</h3>
                    <input type="text" name="gender" id="gender" value="" class="formInput mt-2" placeholder="Gender" required>
                </div>

                <!-- position -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium w-full sm:w-64 after:content-['_*'] after:text-red-500 dark:text-white font-content">Position</h3>
                    <div class="mt-2" id="select2_content_position">
                        <select class="select2" name="position" id="position" required>
                            <option disabled selected>-- Select --</option>
                            <option value="1"> Staff </option>
                            <option value="0"> Other </option>
                        </select>
                    </div>
                </div>

                <!-- department/branch name -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium w-full sm:w-64 after:content-['_*'] after:text-red-500 dark:text-white font-content">Department/Branch Name</h3>
                    <div class="mt-2" id="select2_content_departmentBranchName">
                        <select class="select2" name="departmentBranchName" id="departmentBranchName" required>
                            <option disabled selected>-- Select --</option>
                            <option value="4"> Administration Department/នាយកដ្ឋាន រដ្ឋបាល </option>
                            <option value="3">Business Department/នាយកដ្ឋានអាជីវកម្ម </option>
                            <option value="2"> Finance Department/នាយកដ្ឋានហិរញ្ញវត្ថុ </option>
                            <option value="1"> Information Technology Department/នាយកដ្ឋានព័ត៌មានវិទ្យា </option>
                            <option value="0"> Top Management/ការិយាល័យអគ្គនាយក </option>
                        </select>
                    </div>
                </div>

                <!-- request by -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Request by</h3>
                    <input type="text" name="requestBy" id="requestBy" value="" class="formInput mt-2" placeholder="Request by" required>
                </div>

                <!-- date request -->
                <div class="col-span-2 sm:col-span-1">
                    <label for="dateRequest" class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Date request</label>
                    <input datepicker datepicker-format="dd-mm-yyyy" type="text" value="" name="dateRequest" id="dateRequest" placeholder="Date request" class="formInput mt-2" autocomplete="off" required>
                </div>

                <!-- approved by head of IT -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Approved by Head of IT</h3>
                    <input type="text" name="approvedByHeadOfIT" id="approvedByHeadOfIT" value="" class="formInput mt-2" placeholder="Approved by Head of IT" required>
                </div>

                <!-- approved by ceo -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Approved by CEO</h3>
                    <input type="text" name="approvedByCEO" id="approvedByCEO" value="" class="formInput mt-2" placeholder="Approved by CEO" required>
                </div>

                <!-- object request/description of change -->
                <div class="col-span-2">
                    <h3 class="font-medium w-full dark:text-white font-content">Object Request/Description of Change</h3>
                    <textarea rows="5" name="objectRequest" id="objectRequest" class="formInput mt-2"></textarea>
                </div>

                <!-- testing by it/mis staff -->
                <div class="col-span-2">
                    <h3 class="font-medium w-full dark:text-white font-content">Testing by IT/MIS Staff</h3>
                    <textarea rows="5" name="testingByITAndMIS" id="testingByITAndMIS" class="formInput mt-2"></textarea>
                </div>

                <!-- impact for change/result with testing/module testing -->
                <div class="col-span-2">
                    <h3 class="font-medium w-full dark:text-white font-content">Impact for change/Result with testing/Module testing</h3>
                    <textarea rows="5" name="impactForChange" id="impactForChange" class="formInput mt-2"></textarea>
                </div>

                <!-- controlled/checked/tested/verified by -->
                <div class="col-span-2">
                    <h3 class="font-medium w-full dark:text-white font-content">Controlled/Checked/Tested/Verified by</h3>
                    <textarea rows="5" name="controlled" id="controlled" class="formInput mt-2"></textarea>
                </div>

                <!-- buttons -->
                <div class="col-span-2 flex justify-end gap-x-2">
                    <button type="button" onclick="history.back()" class="button -danger text-sm py-1 waves-effect">Cancel</button>
                    <button type="button" onclick="saveModel(this,'changeRequestForm','/eApprovals/form/changeRequestForm','/eApprovals/form')" class="button -primary text-sm py-1 waves-effect"> Save </button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection