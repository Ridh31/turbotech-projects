@extends('master')
@section('content')

<!-- title -->
<div class="headingContainer">
    <h1 class="headingText"><i class="{{ $Icon }} headingIcon"></i> {{ $Title }}  </h1>
</div>

<!--------------------------------------------------------------------------
➤ mail registration and termination form
<-------------------------------------------------------------------------->
<div class="mainCard">
    <form class="cardContainer" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="useTable" name="useTable" value="1">
        
        <div class="eachCard col-span-1 p-0">

            <!-- form header title -->
            <div class="px-5 border-b py-3">
                <h1 class="font-medium text-[rgba(var(--ni-primary-500))] leading-7 line-clamp-1">
                    <span class="font-content font-bold">ទម្រង់បែបបទចុះឈ្មោះបង្កើត Mail និង ការបញ្ចប់ការងារ</span> / 
                    <span>MAIL REGISTRATION AND TERMINATION FORM</span>
                </h1>
            </div>

            <!-- all inputs -->
            <div class="p-5 grid grid-cols-1 md:grid-cols-2 gap-y-3 gap-x-2">

                <!-- registration information: title -->
                <div class="col-span-2">
                    <div class="mt-2" id="select2_content_serverInformation">
                        <table class="w-full text-center">
                            <thead>
                                <tr class="border-0">
                                    <td colspan="2" class="text-base font-medium text-gray-900 dark:text-white py-4 border-x-0 text-left">
                                        Registration Information
                                    </td>                            
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>

                <!-- first name -->
                <div class="col-span-2 md:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">First name</h3>
                    <input type="text" name="firstName" id="firstName" value="" class="formInput mt-2" placeholder="First Name" required>
                </div>

                <!-- last name -->
                <div class="col-span-2 md:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Last (family) name</h3>
                    <input type="text" name="lastName" id="lastName" value="" class="formInput mt-2" placeholder="Last name" required>
                </div>

                <!-- institution/affiliation -->
                <div class="col-span-2 md:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Institution/affiliation</h3>
                    <input type="text" name="institutionAffiliation" id="institutionAffiliation" value="" class="formInput mt-2" placeholder="Last name" required>
                </div>

                <!-- mailing address require -->
                <div class="col-span-2 md:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Mailing address require</h3>
                    <input type="email" name="mailingAddressRequire" id="mailingAddressRequire" class="formInput mt-2" placeholder="Mailing address require" required
                        onkeypress="return validEmail(event)"
                    >
                </div>

                <!-- account name -->
                <div class="col-span-2 md:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Account name</h3>
                    <input type="text" name="accountName" id="accountName" value="" class="formInput mt-2" placeholder="Account Name" required>
                </div>

                <!-- password -->
                <div class="col-span-2 md:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Password</h3>
                        <input  type="password" 
                                id="password" 
                                name="password" 
                                class="formInput mt-2"
                        >
                </div>

                <!-- telephone -->
                <div class="col-span-2 md:col-span-1">
                    <h3 class="font-medium w-full sm:w-64 after:content-['_*'] after:text-red-500 dark:text-white font-content">Telephone</h3>
                    <input
                        maxlength="10"
                        onkeypress="return validENNumber(event)"
                        type="tel"
                        placeholder="Telephone"
                        name="telephone"
                        id="telephone"
                        class="block w-full mt-2 px-3 py-1.5 bg-white sm:text-sm border dark:bg-gray-800 dark:text-gray-200 focus:outline-none focus:border-primary-400 rounded-md"
                        required
                    >
                </div>

                <!-- dept -->
                <div class="col-span-2 md:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Dept</h3>
                    <input type="text" name="dept" id="dept" value="" class="formInput mt-2" placeholder="Dept" required>
                </div>

                <!-- e-mail address inform when completed -->
                <div class="col-span-2 md:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">E-mail Address Inform When Completed</h3>
                    <input type="email" name="emailAddressInformWhenCompleted" id="emailAddressInformWhenCompleted" class="formInput mt-2" placeholder="E-mail Address Inform When Completed" required
                        onkeypress="return validEmail(event)"
                    >
                </div>

                <!-- size of mail store -->
                <div class="col-span-2 md:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Size of Mail Store (MB/GB)</h3>
                    <input type="text" name="sizeOfMailStore" id="sizeOfMailStore" value="" class="formInput mt-2" placeholder="Size of Mail Store" required>
                </div>

                <!-- name as it appears on header of mail pages -->
                <div class="col-span-2 md:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Name as it appears on Header of Mail Pages</h3>
                    <input type="text" name="nameAsItAppearsOnHeaderOfMailPages" id="nameAsItAppearsOnHeaderOfMailPages" value="" class="formInput mt-2" placeholder="Name as it appears on Header of Mail Pages" required>
                </div>

                <!-- request by -->
                <div class="col-span-2 md:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Request By</h3>
                    <input type="text" name="requestBy" id="requestBy" value="" class="formInput mt-2" placeholder="Request By" required>
                </div>

                <!-- request by > position -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium w-full sm:w-64 after:content-['_*'] after:text-red-500 dark:text-white font-content">Position</h3>
                    <div class="mt-2" id="select2_content_requestByPosition">
                        <select class="select2" name="requestByPosition" id="requestByPosition" required>
                            <option disabled selected>-- Select --</option>
                            <option value="1"> Staff </option>
                            <option value="0"> Other </option>
                        </select>
                    </div>
                </div>

                <!-- request by > date -->
                <div class="col-span-2 sm:col-span-1">
                    <label for="requestByDate" class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Date</label>
                    <input datepicker datepicker-format="dd-mm-yyyy" type="text" value="" name="requestByDate" id="requestByDate" placeholder="Date" class="formInput mt-2" autocomplete="off" required>
                </div>

                <!-- authorized signature -->
                <div class="col-span-2 md:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Authorized signature</h3>
                    <input type="text" name="authorizedSignature" id="authorizedSignature" value="" class="formInput mt-2" placeholder="Authorized signature" required>
                </div>

                <!-- authorized > position -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium w-full sm:w-64 after:content-['_*'] after:text-red-500 dark:text-white font-content">Position</h3>
                    <div class="mt-2" id="select2_content_authorizedPosition">
                        <select class="select2" name="authorizedPosition" id="authorizedPosition" required>
                            <option disabled selected>-- Select --</option>
                            <option value="1"> Staff </option>
                            <option value="0"> Other </option>
                        </select>
                    </div>
                </div>

                <!-- authorized > date -->
                <div class="col-span-2 sm:col-span-1">
                    <label for="authorizedDate" class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Date</label>
                    <input datepicker datepicker-format="dd-mm-yyyy" type="text" value="" name="authorizedDate" id="authorizedDate" placeholder="Date" class="formInput mt-2" autocomplete="off" required>
                </div>

                <!-- approval and registration by -->
                <div class="col-span-2 md:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Approval and Registration by</h3>
                    <input type="text" name="approvalAndRegistrationBy" id="approvalAndRegistrationBy" value="" class="formInput mt-2" placeholder="Approval and Registration by" required>
                </div>

                <!-- approval and registration by > position -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium w-full sm:w-64 after:content-['_*'] after:text-red-500 dark:text-white font-content">Position</h3>
                    <div class="mt-2" id="select2_content_approvalAndRegistrationByPosition">
                        <select class="select2" name="approvalAndRegistrationByPosition" id="approvalAndRegistrationByPosition" required>
                            <option disabled selected>-- Select --</option>
                            <option value="1"> Staff </option>
                            <option value="0"> Other </option>
                        </select>
                    </div>
                </div>

                <!-- approval and registration > date -->
                <div class="col-span-2 sm:col-span-1">
                    <label for="approvalAndRegistrationByDate" class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Date</label>
                    <input datepicker datepicker-format="dd-mm-yyyy" type="text" value="" name="approvalAndRegistrationByDate" id="approvalAndRegistrationByDate" placeholder="Date" class="formInput mt-2" autocomplete="off" required>
                </div>

                <!-- termination: title -->
                <div class="col-span-2">
                    <div class="mt-2" id="select2_content_serverInformation">
                        <table class="w-full text-center">
                            <thead>
                                <tr class="border-0">
                                    <td colspan="2" class="text-base font-medium text-gray-900 dark:text-white py-4 border-x-0 text-left">
                                        Termination
                                    </td>                            
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>

                <!-- dept/branch name -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium w-full sm:w-64 after:content-['_*'] after:text-red-500 dark:text-white font-content">Dept/Branch name</h3>
                    <div class="mt-2" id="select2_content_deptBranchName">
                        <select class="select2" name="deptBranchName" id="deptBranchName" required>
                            <option disabled selected>-- Select --</option>
                            <option value="4"> Administration Department/នាយកដ្ឋាន រដ្ឋបាល </option>
                            <option value="3"> Business Department/នាយកដ្ឋានអាជីវកម្ម </option>
                            <option value="2"> Finance Department/នាយកដ្ឋានហិរញ្ញវត្ថុ </option>
                            <option value="1"> Information Technology Department/នាយកដ្ឋានព័ត៌មានវិទ្យា </option>
                            <option value="0"> Top Management/ការិយាល័យអគ្គនាយក </option>
                        </select>
                    </div>
                </div>

                <!-- contact person -->
                <div class="col-span-2 md:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Contact Person</h3>
                    <input type="text" name="contactPerson" id="contactPerson" value="" class="formInput mt-2" placeholder="Contact Person" required>
                </div>

                <!-- termination > telephone -->
                <div class="col-span-2 md:col-span-1">
                    <h3 class="font-medium w-full sm:w-64 after:content-['_*'] after:text-red-500 dark:text-white font-content">Telephone</h3>
                    <input
                        maxlength="10"
                        onkeypress="return validENNumber(event)"
                        type="tel"
                        placeholder="Telephone"
                        name="contactTelephone"
                        id="contactTelephone"
                        class="block w-full mt-2 px-3 py-1.5 bg-white sm:text-sm border dark:bg-gray-800 dark:text-gray-200 focus:outline-none focus:border-primary-400 rounded-md"
                        required
                    >
                </div>

                <!-- account number -->
                <div class="col-span-2 md:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Account Number</h3>
                    <input type="number" name="accountNumber" id="accountNumber" value="" class="formInput mt-2" placeholder="Account Number" required>
                </div>

                <!-- e-mail -->
                <div class="col-span-2">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Email</h3>
                    <input type="email" name="contactEmail" id="contactEmail" class="formInput mt-2" placeholder="Email" required
                        onkeypress="return validEmail(event)"
                    >
                </div>

                <!-- termination: hereby agree to terminate -->
                <div class="col-span-2">
                    <h3 class="font-medium italic text-red-500 dark:text-white font-content">Hereby agree to terminate:</h3>
                </div>
                
                <!-- account name -->
                <div class="col-span-2 md:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Account Name</h3>
                    <input type="text" name="accountName" id="accountName" value="" class="formInput mt-2" placeholder="Account Name" required>
                </div>

                <!-- email address -->
                <div class="col-span-2 md:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Email Address</h3>
                    <input type="email" name="terminationEmailAddress" id="terminationEmailAddress" class="formInput mt-2" placeholder="Email Address" required
                        onkeypress="return validEmail(event)"
                    >
                </div>

                <!-- termination date -->
                <div class="col-span-2 sm:col-span-1">
                    <label for="terminationDate" class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Termination Date</label>
                    <input datepicker datepicker-format="dd-mm-yyyy" type="text" value="" name="terminationDate" id="terminationDate" placeholder="Termination Date" class="formInput mt-2" autocomplete="off" required>
                </div>

                <!-- reason(s) for termination -->
                <div class="col-span-2 md:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Reason(s) For Termination</h3>
                    <input type="text" name="reasonsForTermination" id="reasonsForTermination" value="" class="formInput mt-2" placeholder="Reason(s) For Termination" required>
                </div>

                <!-- request termination by -->
                <div class="col-span-2 md:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Request Termination by</h3>
                    <input type="text" name="requestTerminationBy" id="requestTerminationBy" value="" class="formInput mt-2" placeholder="Request Termination by" required>
                </div>

                <!-- request termination by > position -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium w-full sm:w-64 after:content-['_*'] after:text-red-500 dark:text-white font-content">Position</h3>
                    <div class="mt-2" id="select2_content_requestTerminationByPosition">
                        <select class="select2" name="requestTerminationByPosition" id="requestTerminationByPosition" required>
                            <option disabled selected>-- Select --</option>
                            <option value="1"> Staff </option>
                            <option value="0"> Other </option>
                        </select>
                    </div>
                </div>

                <!-- request termination by date -->
                <div class="col-span-2 sm:col-span-1">
                    <label for="requestTerminationByDate" class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Date</label>
                    <input datepicker datepicker-format="dd-mm-yyyy" type="text" value="" name="requestTerminationByDate" id="requestTerminationByDate" placeholder="Date" class="formInput mt-2" autocomplete="off" required>
                </div>

                <!-- authorized termination signature -->
                <div class="col-span-2 md:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Authorized Termination signature</h3>
                    <input type="text" name="authorizedTerminationSignature" id="authorizedTerminationSignature" value="" class="formInput mt-2" placeholder="Authorized Termination signature" required>
                </div>

                <!-- authorized termination > position -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium w-full sm:w-64 after:content-['_*'] after:text-red-500 dark:text-white font-content">Position</h3>
                    <div class="mt-2" id="select2_content_authorizedTerminationPosition">
                        <select class="select2" name="authorizedTerminationPosition" id="authorizedTerminationPosition" required>
                            <option disabled selected>-- Select --</option>
                            <option value="1"> Staff </option>
                            <option value="0"> Other </option>
                        </select>
                    </div>
                </div>

                <!-- authorized termination > date -->
                <div class="col-span-2 sm:col-span-1">
                    <label for="authorizedTerminationDate" class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Date</label>
                    <input datepicker datepicker-format="dd-mm-yyyy" type="text" value="" name="authorizedTerminationDate" id="authorizedTerminationDate" placeholder="Date" class="formInput mt-2" autocomplete="off" required>
                </div>

                <!-- approval and termination by -->
                <div class="col-span-2 md:col-span-1">
                    <h3 class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Approval and Termination by</h3>
                    <input type="text" name="approvalAndTerminationBy" id="approvalAndTerminationBy" value="" class="formInput mt-2" placeholder="Approval and Termination by" required>
                </div>

                <!-- approval and termination by > position -->
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="font-medium w-full sm:w-64 after:content-['_*'] after:text-red-500 dark:text-white font-content">Position</h3>
                    <div class="mt-2" id="select2_content_approvalAndTerminationByPosition">
                        <select class="select2" name="approvalAndTerminationByPosition" id="approvalAndTerminationByPosition" required>
                            <option disabled selected>-- Select --</option>
                            <option value="1"> Staff </option>
                            <option value="0"> Other </option>
                        </select>
                    </div>
                </div>

                <!-- approval and termination > date -->
                <div class="col-span-2 sm:col-span-1">
                    <label for="approvalDate" class="font-medium after:content-['_*'] after:text-red-500 dark:text-white font-content">Date</label>
                    <input datepicker datepicker-format="dd-mm-yyyy" type="text" value="" name="approvalDate" id="approvalDate" placeholder="Date" class="formInput mt-2" autocomplete="off" required>
                </div>

                <!-- buttons -->
                <div class="col-span-2 flex justify-end gap-x-2">
                    <button type="button" onclick="history.back()" class="button -danger text-sm py-1 waves-effect">Cancel</button>
                    <button type="button" onclick="saveModel(this,'mailRegistrationAndTerminationForm','/eApprovals/form/mailRegistrationAndTerminationForm','/eApprovals/form')" class="button -primary text-sm py-1 waves-effect"> Save </button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection