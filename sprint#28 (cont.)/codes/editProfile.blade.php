@extends('master')
@section('content')

{{-- <div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div> --}}

<!-- Design Edit Profile -->

<!-- main -->
<div class="mainCard">
    
    <div class="cardContainer bg-[color:rgba(var(--ni-gray-100))] p-2 sm:p-5">
        <div class="divide-y divide-[color:rgba(var(--ni-gray-100))] px-8 bg-white shadow-lg rounded-lg">

            <!-- public avatar -->
            <div class="flex flex-col py-8">

                <!-- edit profile picture -->
                <div class="grid grid-cols-1 lg:grid-cols-2 space-y-5 lg:space-y-0">

                    <!-- public avatar title -->
                    <div class="flex flex-col space-y-3">
                        <div class="font-medium text-lg sm:text-2xl text-[color:rgba(var(--ni-gray-600))]">Public avatar</div>
                        <div class="text-xs sm:text-sm text-[color:rgba(var(--ni-gray-500))]">You can change your avatar here or remove the current avatar to revert to <a href="#" onclick="return false;" class="text-[color:rgba(var(--ni-primary-500))]">turbotech.com</a></div>
                    </div>

                    <!-- upload profile picture -->
                    <label for="profile_picture" class="cursor-pointer relative flex flex-col sm:flex-row justify-start items-center space-x-0 sm:space-x-3 space-y-3 sm:space-y-0 w-auto h-full text-sm">
                        <figure class="relative">

                            <!-- profile picture -->
                            <div class="p-1 border border-[color:rgba(var(--ni-gray-300))] hover:border-[color:rgba(var(--ni-primary-400))] rounded-full duration-300">
                                <img id="profile-picture" src="" alt="Profile Picture" class="w-28 lg:w-16 xl:w-28 h-28 lg:h-16 xl:h-28 object-cover rounded-full">
                            </div>
                            <figcaption>
                                <svg class="absolute left-24 lg:left-14 xl:left-24 bottom-4 lg:bottom-2 xl:bottom-4 w-5 xl:w-6 h-5 xl:h-6" viewBox="0 0 48 48" version="1" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 48 48">
                                    <path fill="#546E7A" d="M14,13H8v-1.8C8,10.5,8.5,10,9.2,10h3.6c0.7,0,1.2,0.5,1.2,1.2V13z"/><path fill="#38BCF7" d="M40,40H8c-2.2,0-4-1.8-4-4V22h40v14C44,38.2,42.2,40,40,40z"/><path fill="#0369A0" d="M12.7,22c-0.4,1.3-0.7,2.6-0.7,4c0,6.6,5.4,12,12,12s12-5.4,12-12c0-1.4-0.3-2.7-0.7-4H12.7z"/><path fill="#78909C" d="M8,12h32c2.2,0,4,1.8,4,4v6H4v-6C4,13.8,5.8,12,8,12z"/><path fill="#78909C" d="M33.9,13.1H14.2L17.6,8c0.4-0.6,1-0.9,1.7-0.9h9.6c0.7,0,1.3,0.3,1.7,0.9L33.9,13.1z"/><path fill="#455A64" d="M35.3,22c-1.6-4.7-6.1-8-11.3-8s-9.7,3.3-11.3,8H35.3z"/><circle fill="#7DD2FB" cx="24" cy="26" r="9"/><path fill="#B9E5FC" d="M29,23c-1.2-1.4-3-2.2-4.8-2.2c-1.8,0-3.6,0.8-4.8,2.2c-0.5,0.5-0.4,1.3,0.1,1.8c0.5,0.5,1.3,0.4,1.8-0.1 c1.5-1.7,4.3-1.7,5.8,0c0.3,0.3,0.6,0.4,1,0.4c0.3,0,0.6-0.1,0.9-0.3C29.4,24.4,29.5,23.5,29,23z"/><rect x="36" y="15" fill="#DBE2E5" width="5" height="4"/>
                                </svg>
                            </figcaption>
                        </figure>
                        <div class="flex flex-col space-y-3">
                            <div class="font-medium text-[color:rgba(var(--ni-gray-600))]">Upload Avatar</div>
                            <input type="file" class="hidden" name="profile_picture" accept="image/*" capture required="true"/>
                            <div class="flex gap-x-2">
                                <button id="choose-file" class="text-xs sm:text-sm mr-auto w-28 py-1 border border-[color:rgba(var(--ni-primary-400))] hover:bg-[color:rgba(var(--ni-primary-400))] text-[color:rgba(var(--ni-primary-500))] hover:text-white rounded-md duration-300">Choose file&hellip;</button>
                                <div id="filename" class="mr-auto my-auto text-xs sm:text-sm">No file chosen.</div>
                            </div>
                            <div class="text-xs sm:text-sm text-[color:rgba(var(--ni-gray-500))]">The maximum file size allowed is 0KB.</div>
                            <button id="remove-avatar" class="text-xs sm:text-sm mr-auto w-28 py-1 border border-[color:rgba(var(--ni-danger-400))] hover:bg-[color:rgba(var(--ni-danger-400))] text-[color:rgba(var(--ni-danger-500))] hover:text-white rounded-md duration-300">Remove avatar</button>
                        </div>
                    </label>
                </div>

                <!-- crop picture modal -->
                <div id="crop-picture-modal" class="fixed z-10 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">

                    <!-- dark background -->
                    <div class="fixed inset-0 bg-[color:rgba(var(--ni-gray-900),0.7)] bg-opacity-75 transition-opacity"></div>
                
                    <div class="fixed inset-0 z-10 overflow-y-auto">
                        <div class="flex justify-center items-center min-h-full p-4">

                            <!-- croppie & buttons -->
                            <div class="relative divide-y divide-[color:rgba(var(--ni-gray-300))] transform overflow-hidden transition-all bg-white max-w-sm shadow-xl rounded-lg">
                                <!-- modal title -->
                                <div class="p-5 text-sm sm:text-md">Edit Profile</div>

                                <div class="flex justify-center items-center pt-5">

                                    <!-- crop picture -->
                                    <div id="crop-picture" class="block items-center"></div>
                                </div>

                                <!-- buttons -->
                                <div class="p-5 sm:flex sm:flex-row-reverse">
                                    <button type="button" class="inline-flex w-full justify-center border border-transparent bg-[color:rgba(var(--ni-primary-400))] hover:bg-[color:rgba(var(--ni-primary-500))] px-4 py-2 text-sm md:text-md text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-[color:rgba(var(--ni-primary-500))] focus:ring-offset-2 sm:ml-3 sm:w-auto rounded-md duration-300" id="set-new-picture">Set new profile picture</button>
                                    <button type="button" class="mt-3 inline-flex w-full justify-center border border-[color:rgba(var(--ni-gray-300))] bg-white px-4 py-2 text-sm md:text-md text-[color:rgba(var(--ni-gray-700))] shadow-sm hover:bg-[color:rgba(var(--ni-gray-50))] focus:outline-none focus:ring-2 focus:ring-[color:rgba(var(--ni-primary-500))]focus:ring-offset-2 sm:mt-0 sm:w-auto rounded-md duration-300" id="cancel">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- timezone -->
            <div class="grid grid-cols-1 sm:grid-cols-2 space-y-5 sm:space-y-0 py-8">

                <!-- timezone title -->
                <div class="flex flex-col space-y-3">
                    <div class="font-medium text-lg sm:text-2xl text-[color:rgba(var(--ni-gray-600))]">Time settings</div>
                    <div class="text-xs sm:text-sm text-[color:rgba(var(--ni-gray-500))]">Set your local time zone.</div>
                </div>

                <!-- timezone dropdown -->
                <div>
                    <div class="dropdown relative flex flex-col space-y-1 sm:space-y-3 my-auto">
                        <div class="text-xs sm:text-sm text-[color:rgba(var(--ni-gray-600))]">Time zone</div>
                        <button id="timezone-dropdown" class="inline-flex justify-center items-center w-full py-2 border border-[color:rgba(var(--ni-gray-300))] hover:border-[color:rgba(var(--ni-primary-400))] text-[color:rgba(var(--ni-gray-600))] rounded-md duration-300">
                            <span class="text-xs sm:text-sm mr-1">Select timezone</span>
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                        </button>
                        <ul id="timezone" class="dropdown-menu z-30 absolute top-14 sm:top-16 w-full h-60 overflow-auto divide-y divide-[color:rgba(var(--ni-gray-200))] border border-[color:rgba(var(--ni-gray-200))] bg-white text-xs sm:text-sm text-[color:rgba(var(--ni-gray-500))]">
                            
                            <!-- search bar - timezone -->
                            <li class="p-3 bg-white sticky top-0 z-30">
                                <div class="relative rounded-lg">
                                    <svg class="pointer-events-none absolute top-2.5 left-4 h-5 w-5 text-[color:rgba(var(--ni-gray-400))]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                                    </svg>
                                    <input id="search-time" class="w-full pl-11 pr-4 py-2 outline-none border border-[color:rgba(var(--ni-gray-300))] focus:border-[color:rgba(var(--ni-primary-400))] text-[color:rgba(var(--ni-gray-600))] focus:text-[color:rgba(var(--ni-primary-500))] placeholder-[color:rgba(var(--ni-gray-500))] focus:ring-0 text-xs sm:text-sm rounded-lg" type="search" placeholder="Search timezone..." data-time>
                                </div>
                            </li>

                            <!-- timezone error message -->
                            <div id="timezone-error-message" class="text-center pt-12 py-5 hidden">
                                <svg class="mx-auto w-5 sm:w-6 h-5 sm:h-6 text-[color:rgba(var(--ni-gray-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <p class="mt-2 text-xs sm:text-sm text-[color:rgba(var(--ni-gray-900))]">No timezone found!</p>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- information -->
            <div class="grid grid-cols-1 sm:grid-cols-2 space-y-5 sm:space-y-0 py-8">

                <!-- information title -->
                <div class="flex flex-col space-y-3">
                    <div class="font-medium text-lg sm:text-2xl text-[color:rgba(var(--ni-gray-600))]">Information</div>
                    <div class="text-xs sm:text-sm text-[color:rgba(var(--ni-gray-500))]">This information will appear on your profile.</div>
                </div>

                <!-- information detail -->
                <div>
                    <form id="information-form" class="grid grid-cols-1 md:grid-cols-2 gap-2">

                        <!-- firstname en -->
                        <div class="flex flex-col gap-1">
                            <label for="first_name_en" class="text-xs sm:text-sm">First Name (EN) <span class="text-[color:rgba(var(--ni-danger-500))]">*</span></label>
                            <input type="text" name="first_name_en" class="px-5 py-2 border border-[color:rgba(var(--ni-gray-300))] text-xs sm:text-sm text-[color:rgba(var(--ni-gray-500))] focus:outline-none focus:border-[color:rgba(var(--ni-primary-400))] focus:text-[color:rgba(var(--ni-primary-500))] rounded-md" required>
                        </div>

                        <!-- lastname en -->
                        <div class="flex flex-col gap-1">
                            <label for="last_name_en" class="text-xs sm:text-sm">Last Name (EN) <span class="text-[color:rgba(var(--ni-danger-500))]">*</span></label>
                            <input type="text" name="last_name_en" class="px-5 py-2 border border-[color:rgba(var(--ni-gray-300))] text-xs sm:text-sm text-[color:rgba(var(--ni-gray-500))] focus:outline-none focus:border-[color:rgba(var(--ni-primary-400))] focus:text-[color:rgba(var(--ni-primary-500))] rounded-md" required>
                        </div>

                        <!-- firstname kh -->
                        <div class="flex flex-col gap-1">
                            <label for="first_name_kh" class="text-xs sm:text-sm">First Name (KH) <span class="text-[color:rgba(var(--ni-danger-500))]">*</span></label>
                            <input type="text" name="first_name_kh" class="px-5 py-2 border border-[color:rgba(var(--ni-gray-300))] text-xs sm:text-sm text-[color:rgba(var(--ni-gray-500))] focus:outline-none focus:border-[color:rgba(var(--ni-primary-400))] focus:text-[color:rgba(var(--ni-primary-500))] rounded-md" required>
                        </div>

                        <!-- lastname kh -->
                        <div class="flex flex-col gap-1">
                            <label for="last_name_kh" class="text-xs sm:text-sm">Last Name (KH) <span class="text-[color:rgba(var(--ni-danger-500))]">*</span></label>
                            <input type="text" name="last_name_kh" class="px-5 py-2 border border-[color:rgba(var(--ni-gray-300))] text-xs sm:text-sm text-[color:rgba(var(--ni-gray-500))] focus:outline-none focus:border-[color:rgba(var(--ni-primary-400))] focus:text-[color:rgba(var(--ni-primary-500))] rounded-md" required>
                        </div>

                        <!-- id number -->
                        <div class="flex flex-col gap-1">
                            <label for="id_number" class="text-xs sm:text-sm">ID Number <span class="text-[color:rgba(var(--ni-danger-500))]">*</span></label>
                            <input type="text" name="id_number" class="px-5 py-2 border border-[color:rgba(var(--ni-gray-300))] text-xs sm:text-sm text-[color:rgba(var(--ni-gray-500))] focus:outline-none focus:border-[color:rgba(var(--ni-primary-400))] focus:text-[color:rgba(var(--ni-primary-500))] rounded-md" required>
                        </div>

                        <!-- gender -->
                        <div class="flex flex-col gap-1">
                            <label for="gender" class="text-xs sm:text-sm">Gender</label>
                            <input type="text" name="gender" class="px-5 py-2 border border-[color:rgba(var(--ni-gray-300))] text-xs sm:text-sm text-[color:rgba(var(--ni-gray-500))] focus:outline-none focus:border-[color:rgba(var(--ni-primary-400))] focus:text-[color:rgba(var(--ni-primary-500))] rounded-md">
                        </div>

                        <!-- dob -->
                        <div class="flex flex-col gap-1">
                            <label for="dob" class="text-xs sm:text-sm">Date of Birth</label>
                            <input type="text" name="dob" class="px-5 py-2 border border-[color:rgba(var(--ni-gray-300))] text-xs sm:text-sm text-[color:rgba(var(--ni-gray-500))] focus:outline-none focus:border-[color:rgba(var(--ni-primary-400))] focus:text-[color:rgba(var(--ni-primary-500))] rounded-md">
                        </div>

                        <!-- member since -->
                        <div class="flex flex-col gap-1">
                            <label for="member_since" class="text-xs sm:text-sm">Member Since</label>
                            <input type="text" name="member_since" class="px-5 py-2 border border-[color:rgba(var(--ni-gray-300))] text-xs sm:text-sm text-[color:rgba(var(--ni-gray-500))] focus:outline-none focus:border-[color:rgba(var(--ni-primary-400))] focus:text-[color:rgba(var(--ni-primary-500))] rounded-md">
                        </div>

                        <!-- bank account -->
                        <div class="flex flex-col gap-1">
                            <label for="bank_account" class="text-xs sm:text-sm">Bank Account <span class="text-[color:rgba(var(--ni-danger-500))]">*</span></label>
                            <input type="text" name="bank_account" class="px-5 py-2 border border-[color:rgba(var(--ni-gray-300))] text-xs sm:text-sm text-[color:rgba(var(--ni-gray-500))] focus:outline-none focus:border-[color:rgba(var(--ni-primary-400))] focus:text-[color:rgba(var(--ni-primary-500))] rounded-md" required>
                        </div>

                        <!-- salary -->
                        <div class="flex flex-col gap-1">
                            <label for="salary" class="text-xs sm:text-sm">Salary <span class="text-[color:rgba(var(--ni-danger-500))]">*</span></label>
                            <input type="text" name="salary" class="px-5 py-2 border border-[color:rgba(var(--ni-gray-300))] text-xs sm:text-sm text-[color:rgba(var(--ni-gray-500))] focus:outline-none focus:border-[color:rgba(var(--ni-primary-400))] focus:text-[color:rgba(var(--ni-primary-500))] rounded-md" required>
                        </div>

                        <!-- department -->
                        <div class="flex flex-col gap-1">
                            <label for="department" class="text-xs sm:text-sm">Department</label>
                            <select type="text" name="department" class="px-5 py-2 border border-[color:rgba(var(--ni-gray-300))] text-xs sm:text-sm text-[color:rgba(var(--ni-gray-500))] focus:outline-none focus:border-[color:rgba(var(--ni-primary-400))] focus:text-[color:rgba(var(--ni-primary-500))] rounded-md">
                                <option value="1">IT Department</option>
                                <option value="2">HR Department</option>
                                <option value="3">NOC Department</option>
                                <option value="4">Finance Department</option>
                            </select>
                        </div>

                        <!-- position -->
                        <div class="flex flex-col gap-1">
                            <label for="position" class="text-xs sm:text-sm">Position</label>
                            <select type="text" name="position" class="px-5 py-2 border border-[color:rgba(var(--ni-gray-300))] text-xs sm:text-sm text-[color:rgba(var(--ni-gray-500))] focus:outline-none focus:border-[color:rgba(var(--ni-primary-400))] focus:text-[color:rgba(var(--ni-primary-500))] rounded-md">
                                <option value="1">Front-End Developer</option>
                                <option value="2">Back-End Developer</option>
                                <option value="3">API Developer</option>
                                <option value="4">Manager</option>
                            </select>
                        </div>

                        <!-- phone -->
                        <div class="flex flex-col gap-1">
                            <label for="phone" class="text-xs sm:text-sm">Phone <span class="text-[color:rgba(var(--ni-danger-500))]">*</span></label>
                            <input type="text" name="phone" class="px-5 py-2 border border-[color:rgba(var(--ni-gray-300))] text-xs sm:text-sm text-[color:rgba(var(--ni-gray-500))] focus:outline-none focus:border-[color:rgba(var(--ni-primary-400))] focus:text-[color:rgba(var(--ni-primary-500))] rounded-md" required>
                        </div>

                        <!-- office phone -->
                        <div class="flex flex-col gap-1">
                            <label for="office_phone " class="text-xs sm:text-sm">Office Phone </label>
                            <input type="text" name="office_phone" class="px-5 py-2 border border-[color:rgba(var(--ni-gray-300))] text-xs sm:text-sm text-[color:rgba(var(--ni-gray-500))] focus:outline-none focus:border-[color:rgba(var(--ni-primary-400))] focus:text-[color:rgba(var(--ni-primary-500))] rounded-md">
                        </div>

                        <!-- Email -->
                        <div class="flex flex-col gap-1">
                            <label for="email" class="text-xs sm:text-sm">Email <span class="text-[color:rgba(var(--ni-danger-500))]">*</span></label>
                            <input type="email" name="email" class="px-5 py-2 border border-[color:rgba(var(--ni-gray-300))] text-xs sm:text-sm text-[color:rgba(var(--ni-gray-500))] focus:outline-none focus:border-[color:rgba(var(--ni-primary-400))] focus:text-[color:rgba(var(--ni-primary-500))] rounded-md" required disabled>
                        </div>

                        <!-- secondary email -->
                        <div class="flex flex-col gap-1">
                            <label for="secondary_email" class="text-xs sm:text-sm">Secondary Email</label>
                            <input type="email" name="secondary_email" class="px-5 py-2 border border-[color:rgba(var(--ni-gray-300))] text-xs sm:text-sm text-[color:rgba(var(--ni-gray-500))] focus:outline-none focus:border-[color:rgba(var(--ni-primary-400))] focus:text-[color:rgba(var(--ni-primary-500))] rounded-md">
                        </div>

                        <!-- contact 3cx -->
                        <div class="flex flex-col gap-1">
                            <label for="contact_3cx" class="text-xs sm:text-sm">Contact 3CX</label>
                            <input type="text" name="contact_3cx" class="px-5 py-2 border border-[color:rgba(var(--ni-gray-300))] text-xs sm:text-sm text-[color:rgba(var(--ni-gray-500))] focus:outline-none focus:border-[color:rgba(var(--ni-primary-400))] focus:text-[color:rgba(var(--ni-primary-500))] rounded-md">
                        </div>

                        <!-- secondary contact -->
                        <div class="flex flex-col gap-1">
                            <label for="secondary_contact" class="text-xs sm:text-sm">Secondary Contact</label>
                            <input type="text" name="secondary_contact" class="px-5 py-2 border border-[color:rgba(var(--ni-gray-300))] text-xs sm:text-sm text-[color:rgba(var(--ni-gray-500))] focus:outline-none focus:border-[color:rgba(var(--ni-primary-400))] focus:text-[color:rgba(var(--ni-primary-500))] rounded-md">
                        </div>

                        <!-- hidden buttons - information -->
                        <div class="hidden">
                            <button type="cancel">Cancel</button>
                            <button type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- buttons -->
            <div class="flex py-8">
                <div class="mx-auto sm:mx-0 ml-0 sm:ml-auto space-y-2 sm:space-y-0">
                    <button id="cancel-btn" class="text-xs sm:text-sm w-full sm:w-auto px-5 py-2 border border-[color:rgba(var(--ni-danger-400))] hover:bg-[color:rgba(var(--ni-danger-400))] text-[color:rgba(var(--ni-danger-500))] hover:text-white rounded-md duration-300">Cancel</button>
                    <button id="submit-btn" class="text-xs sm:text-sm w-full sm:w-auto ml-0 sm:ml-2 px-5 py-2 border border-[color:rgba(var(--ni-primary-400))] bg-[color:rgba(var(--ni-primary-400))] hover:bg-[color:rgba(var(--ni-primary-500))] text-white rounded-md duration-300">Update profile settings</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('internalScript')

<!-- Croppie CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.js"></script>

<!-- jQuery validation CDN -->
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<script>

    // Edit Profile function
    const editProfile = () => {
 
        // public avatar function
        const publicAvatar = () => {

            // image & input
            const pictureAvatar  = $("figure")
            const profilePicture = $("#profile-picture");
            const inputFile      = $("input[type=file]");
            const filename       = $("#filename");
            const chooseFile     = $("#choose-file");
            const removeAvatar   = $("#remove-avatar");

            // modal & croppie
            const cropPictureModal = $("#crop-picture-modal");
            const cropPicture      = $("#crop-picture");
            const setNewPictureBtn = $("#set-new-picture");
            const cancelBtn        = $("#cancel");

            // croppie
            let $uploadCrop;

            // set default image
            profilePicture.attr("src", "https://genesisairway.com/wp-content/uploads/2019/05/no-image.jpg");

            // onclick profile avatar & choose file trigger input file
            pictureAvatar.add(chooseFile).click(function() {
                inputFile.trigger("click");
            });

            // onclick remove avatar set default image
            removeAvatar.click(function() {

                // reset input if picture duplicate
                inputFile.val("");
                
                profilePicture.attr("src", "https://genesisairway.com/wp-content/uploads/2019/05/no-image.jpg");
                filename.html("No file chosen.");
            });

            inputFile.change(function(e) {

                // file after chosen
                const file = this.files[0];

                // display filename
                filename.html(file.name);

                if ( file ) {
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        
                        const source = event.target.result;

                        // modal fadeIn
                        cropPictureModal.fadeIn();

                        // croppie config
                        $uploadCrop = cropPicture.croppie({
                            viewport: {
                                width: 200,
                                height: 200,
                                type: "circle"
                            },
                            boundary: {
                                width: 270,
                                height: 270
                            },
                            enableOrientation: true,
                        });

                        $uploadCrop.croppie("bind", {
                            url: source,
                        });

                        // onclick buttons
                        $uploadCrop.croppie("result", "html").then(function(html) {
                            
                            // set new profile picture
                            setNewPictureBtn.click(function(ev) {
                                
                                // set picture after crop
                                $uploadCrop.croppie("result", {
                                    type: "canvas",
                                    size: "viewport"

                                }).then(function(picture) {
                                    profilePicture.attr("src", picture);

                                }).then(function() {

                                    // reset input if picture duplicate
                                    inputFile.val("");
                                });

                                // initialize croppie more than once
                                $uploadCrop.croppie("destroy");

                                // close modal after upload
                                cropPictureModal.css({
                                    "display": "none",
                                    "transition"  : "5s"
                                });
                                cropPictureModal.addClass("hidden");

                            });

                            // cancel button
                            cancelBtn.click(function() {

                                // reset input if picture duplicate
                                inputFile.val("");

                                // initialize croppie more than once
                                $uploadCrop.croppie("destroy");

                                cropPictureModal.css({
                                    "display": "none",
                                    "transition"  : "5s"
                                });
                                cropPictureModal.addClass("hidden");
                                filename.html(file.name);
                            });
                            
                        });
                        
                    }
                    // read the contents of the specified file
                    reader.readAsDataURL(file);
                }

            });

        }
        // time settings function
        const timeSettings = () => {

            const timezoneDropdown = $("#timezone-dropdown");
            const timezone = $("#timezone");

            // hidden timezone list by default
            timezone.addClass("hidden");

            // timezone data
            const timezoneData = [
                {
                    "utc" : "(UTC-00:00)",
                    "tzid": "Asia/Dhaka",
                    "name": "Bangladesh",
                    "full": "(utc-00:00) asia/dhaka bangladesh"
                },
                {
                    "utc" : "(UTC-00:00)",
                    "tzid": "Europe/Brussels",
                    "name": "Romance",
                    "full": "(utc-00:00) europe/brussels romance"
                },
                {
                    "utc" : "(UTC-00:00)",
                    "tzid": "Africa/Abidjan",
                    "name": "Greenwich",
                    "full": "(utc-00:00) africa/abidjan greenwich"
                },
                {
                    "utc" : "(UTC-00:00)",
                    "tzid": "Europe/Sofia",
                    "name": "FLE",
                    "full": "(utc-00:00) europe/sofia fle"
                },
                {
                    "utc" : "(UTC-00:00)",
                    "tzid": "Europe/Belgrade",
                    "name": "Central Europe",
                    "full": "(utc-00:00) europe/belgrade central europe"
                },
                {
                    "utc" : "(UTC-00:00)",
                    "tzid": "America/Barbados",
                    "name": "SA Western",
                    "full": "(utc-00:00) america/barbados sa western"
                },
                {
                    "utc" : "(UTC-00:00)",
                    "tzid": "Pacific/Wallis",
                    "name": "UTC+12",
                    "full": "(utc-00:00) pacific/wallis utc+12"
                },
                {
                    "utc" : "(UTC-00:00)",
                    "tzid": "America/Port_of_Spain",
                    "name": "SA Western",
                    "full": "(utc-00:00) america/port_of_spain sa western"
                }
            ];
            
            // append timezone function
            const timezoneList = (time) => {

                const items = $(`
                    <li class="cursor-pointer px-5 py-2 hover:bg-[color:rgba(var(--ni-primary-400))] hover:text-white" data-filter-time data-time-name="${time.full}">
                        ${time.utc} ${time.tzid} (${time.name})
                    </li>
                `);
                timezone.append(items);
            }

            // append
            $.each(timezoneData, (key, value) => {
                timezoneList(value);
            });

            // toggle timezone lists
            timezoneDropdown.click(function() {
                timezone.toggleClass("hidden");
            });

            const searchTime = $("#search-time");

            searchTime.on("keyup", function() {

                const searchTimeVal = $(this).val();

                // access <li> classes
                const filterTime = $("[data-filter-time]");

                if ( searchTimeVal != "" ) {
                    filterTime.addClass("hidden");
                    $('[data-filter-time][data-time-name*="' + searchTimeVal.toLowerCase() + '"]').removeClass("hidden");
                } else {
                    filterTime.removeClass("hidden");
                }

                // timezone error message
                const timezoneErrorMessage = $("#timezone-error-message");
                
                // count timezone hidden lists length
                const timezoneHiddenListsLength = $("#timezone .hidden").length;

                // count all timezone lists length
                const entireTimezoneListsLength = $("#timezone li").length;

                // show error message if there is no data
                if ( (timezoneHiddenListsLength == entireTimezoneListsLength) || (timezoneHiddenListsLength == (entireTimezoneListsLength - 1)) ) {
                    timezoneErrorMessage.removeClass("hidden");
                } else {
                    timezoneErrorMessage.addClass("hidden");
                }

            });

        }

        // information function
        const information = () => {

            // cancel & submit buttons
            const cancelBtnDisplay = $("#cancel-btn");
            const submitBtnDisplay = $("#submit-btn");

            // hidden's cancel & submit buttons
            const cancelBtnHidden = $(".hidden [type=cancel]");
            const submitBtnHidden = $(".hidden [type=submit]");

            // information form
            const informationForm = $("#information-form");

            // custom error
            const inputDefault  = ("border border-[color:rgba(var(--ni-primary-200))]");
            const inputError    = ("border border-[color:rgba(var(--ni-danger-300))]");
            const messageClass  = ("text-sm text-[color:rgba(var(--ni-danger-500))]");

            cancelBtnDisplay.click(function() {
                // cancelBtnHidden.trigger("click");
                location.reload();
            });

            // trigger submit button
            submitBtnDisplay.click(function() {
                submitBtnHidden.trigger("click");
            });

            // validate
            informationForm.validate({
                rules: {
                    first_name_en: {
                        required: true,
                        lettersonly: true
                    },
                    last_name_en: {
                        required: true,
                        lettersonly: true
                    },
                    first_name_kh: {
                        required: true,
                        lettersonly: true
                    },
                    last_name_kh: {
                        required: true,
                        lettersonly: true
                    },
                    id_number: {
                        required: true,
                    },
                    bank_account: {
                        required: true,
                    },
                    salary: {
                        required: true,
                    },
                    phone: {
                        required: true,
                    }
                },

                // error messages
                messages: {
                    first_name_en: {
                        required: "Please enter First Name EN",
                        lettersonly: "Enter a valid First Name EN"
                    },
                    last_name_en: {
                        required: "Please enter Last Name EN",
                        lettersonly: "Enter a valid Last Name EN"
                    },
                    first_name_kh: {
                        required: "Please enter First Name KH",
                        lettersonly: "Enter a valid First Name KH"
                    },
                    last_name_kh: {
                        required: "Please enter Last Name KH",
                        lettersonly: "Enter a valid Last Name KH"
                    },
                    id_number: {
                        required: "Please enter ID Number"
                    },
                    bank_account: {
                        required: "Please enter Bank Account",
                    },
                    salary: {
                        required: "Please enter salary",
                    },
                    phone: {
                        required: "Please enter phone number",
                    }
                },

                submitHandler: function(form) {
                    form.submit();
                },

                // custom error messages styles
                errorPlacement: function(error, element) {

                    element.removeClass(inputDefault);
                    element.addClass(inputError);

                    error.addClass(messageClass);
                    error.css("margin-top", "0px");
                    error.insertAfter(element); 
                },
            });
        }

        // call functions
        publicAvatar();
        timeSettings();
        information();

    }

    // call function
    editProfile();

</script>

@endsection