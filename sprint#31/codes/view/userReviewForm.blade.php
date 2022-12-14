@extends('master')
@section('content')

<!-- title -->
<div class="headingContainer">
    <h1 class="headingText"><i class="{{ $Icon }} headingIcon"></i> {{ $Title }}  </h1>
</div>

<!--------------------------------------------------------------------------
➤ user review form
<-------------------------------------------------------------------------->
<div class="mainCard">
    <form class="cardContainer" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="useTable" name="useTable" value="1">
        
        <div class="eachCard col-span-1 p-0">

            <!-- form header title -->
            <div class="px-5 border-b py-3">
                <h1 class="font-medium text-[rgba(var(--ni-primary-500))] leading-7 line-clamp-1">
                    <span class="font-content font-bold">ទម្រង់ពិនិត្យអ្នកប្រើប្រាស់</span> / 
                    <span>USER REVIEW</span>
                </h1>
            </div>

            <!-- all inputs -->
            <div class="p-5 grid grid-cols-1 md:grid-cols-2 gap-y-3 gap-x-2">

                <!-- user review: title -->
                <div class="col-span-2">
                    <div class="mt-2" id="select2_content_serverInformation">
                        <table class="w-full text-center">
                            <thead>
                                <tr class="border-0">
                                    <td colspan="2" class="text-base font-medium text-gray-900 dark:text-white py-4 border-x-0 text-left">
                                        User Review
                                    </td>                            
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>

                <!-- reviewed by -->
                <div class="col-span-2 md:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Reviewed by</h3>
                    <input type="text" name="reviewedBy" id="reviewedBy" value="" class="formInput mt-2" placeholder="Reviewed by" required>
                </div>

                <!-- review date -->
                <div class="col-span-2 sm:col-span-1">
                    <label for="requestByDate" class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Review Date</label>
                    <input datepicker datepicker-format="dd-mm-yyyy" type="text" value="" name="reviewDate" id="reviewDate" placeholder="Review Date" class="formInput mt-2" autocomplete="off" required>
                </div>

                <!-- verified by -->
                <div class="col-span-2 md:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Verified by</h3>
                    <input type="text" name="verifiedBy" id="verifiedBy" value="" class="formInput mt-2" placeholder="Verified by" required>
                </div>

                <!-- verified date -->
                <div class="col-span-2 sm:col-span-1">
                    <label for="requestByDate" class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Verified Date</label>
                    <input datepicker datepicker-format="dd-mm-yyyy" type="text" value="" name="verifiedDate" id="verifiedDate" placeholder="Verified Date" class="formInput mt-2" autocomplete="off" required>
                </div>

                <!-- document approved by -->
                <div class="col-span-2 md:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Document Approved by</h3>
                    <input type="text" name="documentApprovedBy" id="documentApprovedBy" value="" class="formInput mt-2" placeholder="Document Approved by" required>
                </div>

                <!-- head of dept -->
                <div class="col-span-2 md:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Head of Dept</h3>
                    <input type="text" name="headOfDept" id="headOfDept" value="" class="formInput mt-2" placeholder="Head of Dept" required>
                </div>

                <!-- name -->
                <div class="col-span-2 md:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Name</h3>
                    <input type="text" name="name" id="name" value="" class="formInput mt-2" placeholder="Name" required>
                </div>

                <!-- approve date -->
                <div class="col-span-2 sm:col-span-1">
                    <label for="requestByDate" class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Approve Date</label>
                    <input datepicker datepicker-format="dd-mm-yyyy" type="text" value="" name="approveDate" id="approveDate" placeholder="Approve Date" class="formInput mt-2" autocomplete="off" required>
                </div>

                <!-- review account users list format: title -->
                <div class="col-span-2">
                    <div class="mt-2" id="select2_content_serverInformation">
                        <table class="w-full text-center">
                            <thead>
                                <tr class="border-0">
                                    <td colspan="2" class="text-base font-medium text-gray-900 dark:text-white py-4 border-x-0 text-left">
                                        Review Account Users List Format
                                    </td>                            
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>

                <!-- account users -->
                <div class="col-span-2 md:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Account users</h3>
                    <input type="text" name="accountUsers" id="accountUsers" value="" class="formInput mt-2" placeholder="Account users" required>
                </div>

                <!-- type acc -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium w-full sm:w-64 after:content-['_*'] after:text-red-500 dark:text-white font-content">Type Account</h3>
                    <div class="mt-2" id="select2_content_typeAccount">
                        <select class="select2" name="typeAccount" id="typeAccount" required>
                            <option disabled selected>-- Select --</option>
                            <option value="1"> Personal Account </option>
                            <option value="0"> Business Account </option>
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
                            <option value="3"> Business Department/នាយកដ្ឋានអាជីវកម្ម </option>
                            <option value="2"> Finance Department/នាយកដ្ឋានហិរញ្ញវត្ថុ </option>
                            <option value="1"> Information Technology Department/នាយកដ្ឋានព័ត៌មានវិទ្យា </option>
                            <option value="0"> Top Management/ការិយាល័យអគ្គនាយក </option>
                        </select>
                    </div>
                </div>

                <!-- status -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium w-full sm:w-64 after:content-['_*'] after:text-red-500 dark:text-white font-content">Status</h3>
                    <div class="mt-2" id="select2_content_status">
                        <select class="select2" name="status"  id="status" required>
                            <option disabled selected>-- Select --</option>
                            <option>Active</option>
                            <option>Inactive</option>
                        </select>
                    </div>
                </div>

                <!-- remarks -->
                <div class="col-span-2">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Remarks</h3>
                    <input type="text" name="remarks" id="remarks" value="" class="formInput mt-2" placeholder="Remarks" required>
                </div>

                <!-- buttons -->
                <div class="col-span-2 flex justify-end gap-x-2">
                    <button type="button" onclick="history.back()" class="button -danger text-sm py-1 waves-effect">Cancel</button>
                    <button type="button" onclick="saveModel(this,'userReviewForm','/eApprovals/form/userReviewForm','/eApprovals/form')" class="button -primary text-sm py-1 waves-effect"> Save </button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection