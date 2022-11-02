@extends('master')
@section('content')

<div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div>

<!-- Design Classic Split Login -->

<!-- main -->
<div class="mainCard">

    <!-- container -->
    <div class="cardContainer bg-[color:rgba(var(--ni-primary-100))] md:bg-[color:rgba(var(--ni-primary-100))] lg:bg-[#CEECF6] border border-[color:rgba(var(--ni-primary-200))] rounded-xl sm:rounded-l-xl">
        <div class="h-auto min-h-screen flex flex-row justify-center p-4 lg:p-0 select-none">

            <!-- login form -->
            <div class="h-full w-full md:w-[90%] lg:w-[40%] max-w-md lg:max-w-full p-5 lg:items-center overflow-auto bg-white rounded-xl sm:rounded-xl md:rounded-l-xl lg:rounded-l-xl lg:rounded-r-none">

                <!-- logo image -->
                <div class="flex justify-center items-center mt-5">
                    <img class="w-60 object-contain" src="https://www.turbotech.com/storages/assets/img/system/turbotech.png" alt="">
                </div>

                <form class="mt-20 px-0 sm:px-5" id="classic-split-login">

                    <!-- form title -->
                    <div class="text-center font-bold text-2xl text-[color:rgba(var(--ni-warning-900))]">Create Account</div>

                    <div id="inputs-container" class="flex flex-col justify-center items-center space-y-5 mt-10">

                        <!-- input name -->
                        <div class="flex flex-col space-y-0 w-full sm:w-full md:w-full lg:w-full xl:w-3/4">
                            <label class="flex text-sm mb-2" for="name">
                                <span class="text-[color:rgba(var(--ni-gray-900))]">Name</span>
                                <span class="text-[color:rgba(var(--ni-danger-500))]">*</span>
                            </label>
                            <input class="outline-none px-4 py-2 bg-[color:rgba(var(--ni-primary-100))] border border-[color:rgba(var(--ni-primary-200))] rounded-md" type="text" name="name" placeholder="Username">
                        </div>

                        <!-- input email address -->
                        <div class="flex flex-col space-y-0 w-full sm:w-full md:w-full lg:w-full xl:w-3/4">
                            <label class="flex text-sm mb-2" for="email">
                                <span class="text-[color:rgba(var(--ni-gray-900))]">Email Address</span>
                                <span class="text-[color:rgba(var(--ni-danger-500))]">*</span>
                            </label>
                            <input class="outline-none px-4 py-2 bg-[color:rgba(var(--ni-primary-100))] border border-[color:rgba(var(--ni-primary-200))] rounded-md" type="email" name="email" placeholder="Email">
                        </div>

                        <!-- input password -->
                        <div class="flex flex-col space-y-0 w-full sm:w-full md:w-full lg:w-full xl:w-3/4">
                            <label class="flex text-sm mb-2" for="password">
                                <span class="text-[color:rgba(var(--ni-gray-900))]">Password</span>
                                <span class="text-[color:rgba(var(--ni-danger-500))]">*</span>
                            </label>
                            <input class="outline-none px-4 py-2 bg-[color:rgba(var(--ni-primary-100))] border border-[color:rgba(var(--ni-primary-200))] rounded-md" type="password" name="password" placeholder="Password">
                        </div>

                        <!-- continue button -->
                        <div class="flex flex-col w-full sm:w-full md:w-full lg:w-full xl:w-3/4">
                            <button class="bg-[color:rgba(var(--ni-primary-500))] hover:bg-[color:rgba(var(--ni-primary-600))] font-semibold text-white mt-5 px-4 py-2 rounded-md duration-300" type="submit">Continue</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- blank space -->
            <div class="lg:w-[60%] rounded-r-xl bg-contain bg-no-repeat bg-center" style="background-image: url('https://static.vecteezy.com/system/resources/previews/005/168/805/non_2x/the-team-explain-scale-up-the-target-sales-team-work-hard-work-colorful-illustration-free-vector.jpg');"></div>
        </div>
    </div> 
</div>

@endsection

@section('internalScript')

<!-- jQuery validation CDN -->
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<script>

    // Classic Split Login function
    const classicSplitLogin = () => {

        const splitLoginForm = $("#classic-split-login");
        const inputs         = $("#inputs-container div input");
        const inputDefault   = ("border border-[color:rgba(var(--ni-primary-200))] bg-[color:rgba(var(--ni-primary-100))]");
        const inputError     = ("border border-[color:rgba(var(--ni-danger-300))] bg-[color:rgba(var(--ni-danger-50))]");
        const messageClass   = ("text-sm text-[color:rgba(var(--ni-danger-500))]");

        // validation
        splitLoginForm.validate({
            rules: {
                name: "required",
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 6
                }
            },

            // error message
            messages: {
                name: "Please enter your name",
                email: {
                    required: "Please enter your email",
                    email: "Enter a valid email or phone number"
                },
                password: {
                    required: "Please enter your password",
                    minlength: "Passwords must be at least 6 characters"
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

    }

    // call function
    classicSplitLogin();

</script>

@endsection
