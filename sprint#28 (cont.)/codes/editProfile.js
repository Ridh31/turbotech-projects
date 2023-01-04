// <!-- Croppie CDN -->
// <link href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" rel="stylesheet" />
// <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.js"></script>

// <!-- jQuery validation CDN -->
// <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

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