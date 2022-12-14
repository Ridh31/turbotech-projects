@extends('master')
@section('content')

<!-- title -->
<div class="headingContainer">
    <h1 class="headingText"><i class="{{ $Icon }} headingIcon"></i> {{ $Title }}  </h1>
</div>

<!--------------------------------------------------------------------------
➤ date center equipment rename / relocate request
<-------------------------------------------------------------------------->
<div class="mainCard">
    <form class="cardContainer" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="useTable" name="useTable" value="1">
        
        <div class="eachCard col-span-1 p-0">

            <!-- form header title -->
            <div class="px-5 border-b py-3">
                <h1 class="font-medium text-[rgba(var(--ni-primary-500))] leading-7 line-clamp-1">
                    <span class="font-content font-bold">ទម្រង់ស្នើសុំប្ដូរឈ្មោះនិងបម្លាស់ទីឧបករណ៍របស់មជ្ឈមណ្ឌល​ទិន្នន័យ</span> / 
                    <span>DATE CENTER EQUIPMENT RENAME/RELOCATE REQUEST</span>
                </h1>
            </div>

            <!-- all inputs -->
            <div class="p-5 grid grid-cols-1 sm:grid-cols-2 gap-y-3 gap-x-2">

                <!-- requestor name -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Requestor Name</h3>
                    <input type="text" name="requestorName" id="requestorName" value="" class="formInput mt-2" placeholder="Requestor Name" required>
                </div>

                <!-- requested date -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Requested Date</h3>
                    <input type="text" name="requestedDate" id="requestedDate" value="" class="formInput mt-2" placeholder="Requested Date" required>
                </div>

                <!-- requestor email -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Requestor Email</h3>
                    <input type="email" name="requestorEmail" id="requestorEmail" class="formInput mt-2" placeholder="Requestor Email" required
                        onkeypress="return validEmail(event)"
                    >
                </div>

                <!-- phone -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium w-full sm:w-64 after:content-['_*'] after:text-red-500 dark:text-white font-content">Office/Daytime Phone</h3>
                    <input
                        maxlength="10"
                        onkeypress="return validENNumber(event)"
                        type="tel"
                        placeholder="Office/Daytime Phone"
                        name="officeDaytimePhone"
                        id="officeDaytimePhone"
                        class="block w-full mt-2 px-3 py-1.5 bg-white sm:text-sm border dark:bg-gray-800 dark:text-gray-200 focus:outline-none focus:border-primary-400 rounded-md"
                        required
                    >
                </div>

                <!-- department/company/suppliers -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Department/Company/Suppliers</h3>
                    <input type="text" name="departmentCompanySuppliers" id="departmentCompanySuppliers" value="" class="formInput mt-2" placeholder="Department/Company/Suppliers" required>
                </div>

                <!-- description purpose of change -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Description Purpose of Change</h3>
                    <input type="text" name="descriptionPurposeOfChange" id="descriptionPurposeOfChange" value="" class="formInput mt-2" placeholder="Description Purpose of Change" required>
                </div>

                <!-- approved by -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Approved By</h3>
                    <input type="text" name="approvedBy" id="approvedBy" value="" class="formInput mt-2" placeholder="Approved By" required>
                </div>

                <!-- date -->
                <div class="col-span-2 sm:col-span-1">
                    <label for="date" class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Date</label>
                    <input datepicker datepicker-format="dd-mm-yyyy" type="text" value="" name="date" id="date" placeholder="Date" class="formInput mt-2" autocomplete="off" required>
                </div>

                <!-- buttons -->
                <div class="col-span-2 flex justify-end gap-x-2">
                    <button type="button" onclick="history.back()" class="button -danger text-sm py-1 waves-effect">Cancel</button>
                    <button type="button" onclick="saveModel(this,'dataCenterEquipmentRenameRelocateRequest','/eApprovals/form/dataCenterEquipmentRenameRelocateRequest','/eApprovals/form')" class="button -primary text-sm py-1 waves-effect"> Save </button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection