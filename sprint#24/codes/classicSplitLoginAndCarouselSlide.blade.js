// <!-- jQuery validation CDN -->
// <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

// Classic Split Login and Carousel Slide function
const classicSplitLoginAndCarouselSlide = () => {

    const splitLoginAndCarousel = $("#split-login-and-carousel");
    const inputs                = $("#split-login-and-carousel div input");
    const inputDefault          = ("border border-[color:rgba(var(--ni-primary-200))]");
    const inputError            = ("border border-[color:rgba(var(--ni-danger-300))]");
    const messageClass          = ("text-sm text-[color:rgba(var(--ni-danger-500))]");

    // validation
    splitLoginAndCarousel.validate({
        rules: {
            name: "required",
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 8
            }
        },

        // error messages
        messages: {
            name: "Please enter your name",
            email: {
                required: "Please enter your email",
                email:"Enter a valid email or phone number"
            },
            password: {
                required: "Please enter your password",
                minlength: "Passwords must be at least 8 characters"
            }
        },

        submitHandler: function(form) {
            form.submit();
        },

        // custom error message styles
        errorPlacement: function(error, element) {
            element.removeClass(inputDefault);
            element.addClass(inputError);

            error.addClass(messageClass);
            error.css("margin-top", "0px"); 
            error.insertAfter(element); 
        },

        // success
        success: function(error) {             
            
            inputs.each(function() {
                $(this).removeClass(inputError);
                $(this).addClass(inputDefault);
            });

            // remove error messages
            error.remove();
        }
    });

    $(document).ready(function() {

        const password = $("#password");

        // SVG icon styles
        const svgDefault = ("fill-[color:rgba(var(--ni-gray-300))]"),
                svgSuccess = ("fill-[color:rgba(var(--ni-greengray-500))]");

        // text styles
        const textDefault = ("text-[color:rgba(var(--ni-gray-400))]"),
                textSuccess = ("text-[color:rgba(var(--ni-greengray-500))]");
        
        // lowercase items
        const lowercaseIcon = $("#required-password div:first-child svg"),
                lowerCaseChar = $("#required-password div:first-child div");

        // special items
        const specialIcon = $("#required-password div:nth-child(2) svg"),
                specialChar = $("#required-password div:nth-child(2) div");

        // uppercase items
        const uppercaseIcon = $("#required-password div:nth-child(3) svg"),
                upperCaseChar = $("#required-password div:nth-child(3) div");

        // minimun items
        const minimumIcon = $("#required-password div:nth-child(4) svg"),
                minimunChar = $("#required-password div:nth-child(4) div");

        // minimun items
        const numberIcon = $("#required-password div:last-child svg"),
                numberChar = $("#required-password div:last-child div");

        // match password function
        const matchPassword = () => {
            
            password.on("keyup", function() {

                const passwords    = password.val();
                const eachPassword = true;

                // compare regex
                const lowercase = passwords.match(/[a-z]/),
                        special   = passwords.match(/[!@#$%&*?]/);
                        uppercase = passwords.match(/[A-Z]/),
                        number    = passwords.match(/[0-9]/);

                // lowercase condition
                if ( lowercase ) {

                    lowercaseIcon.removeClass(svgDefault);
                    lowerCaseChar.removeClass(textDefault);
                    
                    lowercaseIcon.addClass(svgSuccess);
                    lowerCaseChar.addClass(textSuccess);

                } else {

                    lowercaseIcon.addClass(svgDefault);
                    lowerCaseChar.addClass(textDefault);

                    lowercaseIcon.removeClass(svgSuccess);
                    lowerCaseChar.removeClass(textSuccess);

                }

                // one special character condition
                if ( special ) {
                    
                    specialIcon.removeClass(svgDefault);
                    specialChar.removeClass(textDefault);
                    
                    specialIcon.addClass(svgSuccess);
                    specialChar.addClass(textSuccess);

                } else {

                    specialIcon.addClass(svgDefault);
                    specialChar.addClass(textDefault);

                    specialIcon.removeClass(svgSuccess);
                    specialChar.removeClass(textSuccess);

                }

                // uppercase condition
                if ( uppercase ) {

                    uppercaseIcon.removeClass(svgDefault);
                    upperCaseChar.removeClass(textDefault);

                    uppercaseIcon.addClass(svgSuccess);
                    upperCaseChar.addClass(textSuccess);

                } else {

                    uppercaseIcon.addClass(svgDefault);
                    upperCaseChar.addClass(textDefault);

                    uppercaseIcon.removeClass(svgSuccess);
                    upperCaseChar.removeClass(textSuccess);

                }

                // 8 minimum condition
                if ( passwords.length >= 8 ) {

                    minimumIcon.removeClass(svgDefault);
                    minimunChar.removeClass(textDefault);

                    minimumIcon.addClass(svgSuccess);
                    minimunChar.addClass(textSuccess);

                } else {

                    minimumIcon.addClass(svgDefault);
                    minimunChar.addClass(textDefault);

                    minimumIcon.removeClass(svgSuccess);
                    minimunChar.removeClass(textSuccess);
                }

                // one special character condition
                if ( number ) {
                    
                    numberIcon.removeClass(svgDefault);
                    numberChar.removeClass(textDefault);
                    
                    numberIcon.addClass(svgSuccess);
                    numberChar.addClass(textSuccess);

                } else {

                    numberIcon.addClass(svgDefault);
                    numberChar.addClass(textDefault);

                    numberIcon.removeClass(svgSuccess);
                    numberChar.removeClass(textSuccess);

                }
            });
        }

        // call match password function
        matchPassword();

    });

}

// call function
classicSplitLoginAndCarouselSlide();
