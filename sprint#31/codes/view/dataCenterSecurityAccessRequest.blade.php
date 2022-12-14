@extends('master')
@section('content')

<!-- title -->
<div class="headingContainer">
    <h1 class="headingText"><i class="{{ $Icon }} headingIcon"></i> {{ $Title }}  </h1>
</div>

<!--------------------------------------------------------------------------
➤ data center security access request
<-------------------------------------------------------------------------->
<div class="mainCard">
    <form class="cardContainer" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="useTable" name="useTable" value="1">
        
        <div class="eachCard col-span-1 p-0">

            <!-- form header title -->
            <div class="px-5 border-b py-3">
                <h1 class="font-medium text-[rgba(var(--ni-primary-500))] leading-7 line-clamp-1">
                    <span class="font-content font-bold">ទម្រង់ស្នើសុំចូលផ្នែកសុវត្ថិភាពរបស់មជ្ឈមណ្ឌល​ទិន្នន័យ</span> / 
                    <span>DATA CENTER SECURITY ACCESS REQUEST</span>
                </h1>
            </div>

            <!-- all inputs -->
            <div class="p-5 grid grid-cols-1 sm:grid-cols-2 gap-y-3 gap-x-2">

                <!-- name -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Name</h3>
                    <input type="text" name="name" id="name" value="" class="formInput mt-2" placeholder="Name" required>
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

                <!-- job title -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Job title</h3>
                    <input type="text" name="jobTitle" id="jobTitle" value="" class="formInput mt-2" placeholder="Job title" required>
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

                <!-- employee id -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Employee ID</h3>
                    <input type="text" name="employeeID" id="employeeID" value="" class="formInput mt-2" placeholder="Employee ID" required>
                </div>

                <!-- building -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Building</h3>
                    <input type="text" name="building" id="building" value="" class="formInput mt-2" placeholder="Building" required>
                </div>

                <!-- name requester's -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Name Requester's</h3>
                    <input type="text" name="nameRequesters" id="nameRequesters" value="" class="formInput mt-2" placeholder="Name Requester's" required>
                </div>

                <!-- requester's date -->
                <div class="col-span-2 sm:col-span-1">
                    <label for="requestersDate" class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Date</label>
                    <input datepicker datepicker-format="dd-mm-yyyy" type="text" value="" name="requestersDate" id="requestersDate" placeholder="Date" class="formInput mt-2" autocomplete="off" required>
                </div>

                <!-- manager or department head's name -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Manager or Department head's name</h3>
                    <input type="text" name="departmentHeadsName" id="departmentHeadsName" value="" class="formInput mt-2" placeholder="Manager or Department head's name" required>
                </div>

                <!-- manager or department head's date -->
                <div class="col-span-2 sm:col-span-1">
                    <label for="departmentHeadsDate" class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Date</label>
                    <input datepicker datepicker-format="dd-mm-yyyy" type="text" value="" name="departmentHeadsDate" id="departmentHeadsDate" placeholder="Date" class="formInput mt-2" autocomplete="off" required>
                </div>

                <!-- data center manager's name -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Data Center Manager's name</h3>
                    <input type="text" name="dataCenterManagersName" id="dataCenterManagersName" value="" class="formInput mt-2" placeholder="Data Center Manager's name" required>
                </div>

                <!-- data center manager's date -->
                <div class="col-span-2 sm:col-span-1">
                    <label for="dataCenterManagersDate" class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Date</label>
                    <input datepicker datepicker-format="dd-mm-yyyy" type="text" value="" name="dataCenterManagersDate" id="dataCenterManagersDate" placeholder="Date" class="formInput mt-2" autocomplete="off" required>
                </div>

                <!-- buttons -->
                <div class="col-span-2 flex justify-end gap-x-2">
                    <button type="button" onclick="history.back()" class="button -danger text-sm py-1 waves-effect">Cancel</button>
                    <button type="button" onclick="saveModel(this,'dataCenterSecurityAccessRequest','/eApprovals/form/dataCenterSecurityAccessRequest','/eApprovals/form')" class="button -primary text-sm py-1 waves-effect"> Save </button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection