@extends('master')
@section('content')

<!-- title -->
<div class="headingContainer">
    <h1 class="headingText"><i class="{{ $Icon }} headingIcon"></i> {{ $Title }}  </h1>
</div>

<!--------------------------------------------------------------------------
➤ user request form
<-------------------------------------------------------------------------->
<div class="mainCard">
    <form class="cardContainer" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="useTable" name="useTable" value="1">
        
        <div class="eachCard col-span-1 p-0">

            <!-- form header title -->
            <div class="px-5 border-b py-3">
                <h1 class="font-medium text-[rgba(var(--ni-primary-500))] leading-7 line-clamp-1">
                    <span class="font-content font-bold">សំណើរអ្នកប្រើប្រាស់</span> / 
                    <span>USER REQUEST FORM</span>
                </h1>
            </div>

            <!-- all inputs -->
            <div class="p-5 grid grid-cols-1 sm:grid-cols-2 gap-y-3 gap-x-2">

                <!-- user's name -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">User's name</h3>
                    <input type="text" name="userName" id="userName" value="" class="formInput mt-2" placeholder="User's name" required>
                </div>

                <!-- gender or Sex -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Gender</h3>
                    <input type="text" name="gender" id="gender" value="" class="formInput mt-2" placeholder="Gender" required>
                </div>

                <!-- mobile -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium w-full sm:w-64 after:content-['_*'] after:text-red-500 dark:text-white font-content">Mobile</h3>
                    <input
                        maxlength="10"
                        onkeypress="return validENNumber(event)"
                        type="tel"
                        placeholder="Mobile"
                        name="mobile"
                        id="mobile"
                        class="block w-full mt-2 px-3 py-1.5 bg-white sm:text-sm border dark:bg-gray-800 dark:text-gray-200 focus:outline-none focus:border-primary-400 rounded-md"
                        required
                    >
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

                <!-- date requested -->
                <div class="col-span-2 sm:col-span-1">
                    <label for="dataRequested" class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Date requested</label>
                    <input datepicker datepicker-format="dd-mm-yyyy" type="text" value="" name="dataRequested" id="dataRequested" placeholder="Date requested" class="formInput mt-2" autocomplete="off" required>
                </div>

                <!-- requested by -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Requested by</h3>
                    <input type="text" name="requestedBy" id="requestedBy" value="" class="formInput mt-2" placeholder="Requested by" required>
                </div>

                <!-- approved by -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Approved by</h3>
                    <input type="text" name="approvedBy" id="approvedBy" value="" class="formInput mt-2" placeholder="Approved by" required>
                </div>

                <!-- date received -->
                <div class="col-span-2 sm:col-span-1">
                    <label for="dataReceived" class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Date received</label>
                    <input datepicker datepicker-format="dd-mm-yyyy" type="text" value="" name="dataReceived" id="dataReceived" placeholder="Date received" class="formInput mt-2" autocomplete="off" required>
                </div>

                <!-- received by -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Received by</h3>
                    <input type="text" name="receivedBy" id="receivedBy" value="" class="formInput mt-2" placeholder="Received by" required>
                </div>

                <!-- object request/action -->
                <div class="col-span-2">
                    <div class="mt-2" id="select2_content_objectRequest">

                        <!-- object request/action: title -->
                        <table class="w-full text-center">
                            <thead>
                                <tr class="border-0">
                                    <td colspan="2" class="text-base font-medium text-gray-900 dark:text-white py-4 border-x-0 text-left">
                                        Object Request/Action
                                    </td>                            
                                </tr>
                            </thead>
                        </table>

                        <!-- object request/action: checkbox content -->
                        <div class="border space-y-2 px-6 py-4">

                            <!-- first row -->
                            <div class="grid grid-cols-4 gap-2 w-full">

                                <!-- add new -->
                                <div class="col-span-2 md:col-span-1 flex items-center gap-2">
                                    <input type="checkbox" name="addNew" id="addNew" class="w-4 h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500 rounded">
                                    <label for="addNew" class="cursor-pointer select-none mt-1 font-medium text-sm dark:bg-gray-800 dark:text-gray-100">Add new</label>
                                </div>

                                <!-- change -->
                                <div class="col-span-2 md:col-span-1 flex items-center gap-2">
                                    <input type="checkbox" name="change" id="change" class="w-4 h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500 rounded">
                                    <label for="change" class="cursor-pointer select-none mt-1 font-medium text-sm dark:bg-gray-800 dark:text-gray-100">Change</label>
                                </div>

                                <!-- delete -->
                                <div class="col-span-2 md:col-span-1 flex items-center gap-2">
                                    <input type="checkbox" name="delete" id="delete" class="w-4 h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500 rounded">
                                    <label for="delete" class="cursor-pointer select-none mt-1 font-medium text-sm dark:bg-gray-800 dark:text-gray-100">Delete</label>
                                </div>

                                <!-- other -->
                                <div class="col-span-2 md:col-span-1 flex items-center gap-2">
                                    <input type="checkbox" name="other" id="other" class="w-4 h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500 rounded">
                                    <label for="other" class="cursor-pointer select-none mt-1 font-medium text-sm dark:bg-gray-800 dark:text-gray-100">Other</label>
                                </div>
                            </div>

                            <!-- second row -->
                            <div class="grid grid-cols-4 gap-2 w-full">

                                <!-- user in system -->
                                <div class="col-span-2 md:col-span-1 flex items-center gap-2">
                                    <input type="checkbox" name="userInSystem" id="userInSystem" class="w-4 h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500 rounded">
                                    <label for="userInSystem" class="cursor-pointer select-none mt-1 font-medium text-sm dark:bg-gray-800 dark:text-gray-100">User in system</label>
                                </div>

                                <!-- chart account -->
                                <div class="col-span-2 md:col-span-1 flex items-center gap-2">
                                    <input type="checkbox" name="chartAccount" id="chartAccount" class="w-4 h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500 rounded">
                                    <label for="chartAccount" class="cursor-pointer select-none mt-1 font-medium text-sm dark:bg-gray-800 dark:text-gray-100">Chart Account</label>
                                </div>

                                <!-- computer problem solving -->
                                <div class="col-span-4 md:col-span-2 flex items-center gap-2">
                                    <input type="checkbox" name="computerProblemSolving" id="computerProblemSolving" class="w-4 h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500 rounded">
                                    <label for="computerProblemSolving" class="cursor-pointer select-none mt-1 font-medium text-sm dark:bg-gray-800 dark:text-gray-100">Computer problem solving</label>
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

                <!-- problem or upgrade -->
                <div class="col-span-2">
                    <h3 class="font-medium w-full sm:w-64 dark:text-white font-content">Problem or Upgrade</h3>
                    <textarea rows="5" name="problemOrUpgrade" id="problemOrUpgrade" class="formInput mt-2"></textarea>
                </div>

                <!-- buttons -->
                <div class="col-span-2 flex justify-end gap-x-2">
                    <button type="button" onclick="history.back()" class="button -danger text-sm py-1 waves-effect">Cancel</button>
                    <button type="button" onclick="saveModel(this,'userRequestForm','/eApprovals/form/userRequestForm','/eApprovals/form')" class="button -primary text-sm py-1 waves-effect"> Save </button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection