@extends('master')
@section('content')

<div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div>

<!-- Design Classic Centered Login -->

<!-- main -->
<div class="mainCard">

    <!-- container -->
    <div class="cardContainer h-auto bg-[color:rgba(var(--ni-primary-100))] overflow-hidden">

        <div class="relative select-none">

            <!-- navbar -->
            <nav class="container mx-auto">
                <div class="max-w-7xl h-12 md:h-16 mx-auto mt-10 flex justify-between align-stretch px-4">

                    <!-- logo -->
                    <div id="logo" class="flex flex-col text-[color:rgba(var(--ni-gray-900))] font-extrabold">
                        <a href="#" class="flex flex-row space-x-0 justify-start items-center font-bold">
                            <span class="text-[color:rgba(var(--ni-danger-500))]">TURBO</span>
                            <span class="text-[color:rgba(var(--ni-primary-500))]">TECH</span>
                        </a>

                        <!-- break line -->
                        <div class="w-40 mt-5 p-[1px] bg-[color:rgba(var(--ni-primary-300))] mx-auto rounded-lg"></div>

                        <!-- info -->
                        <div class="flex mt-3">
                            <p class="text-sm w-full text-[color:rgba(var(--ni-gray-500))]">info@turbotech</p>
                            <button class="hover:text-[color:rgba(var(--ni-primary-500))]">
                                <svg class="my-auto w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </button>
                        </div>
                    </div>

                    <!-- navbar items -->
                    <ul id="nav-links" class="hidden absolute md:relative md:flex md:align-stretch md:justify-end right-0 top-0 mt-10 md:mt-0 py-2 md:py-0 w-48 md:w-auto h-auto z-10 shadow md:shadow-none">
                        <li class="text-[color:rgba(var(--ni-gray-800))] hover:text-[color:rgba(var(--ni-primary-500))]">
                            <a class="w-full h-full flex md:items-center pl-6 md:pl-4 pr-4 py-1 font-medium" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                                </svg>                                  
                            </a>
                        </li>
                        <li class="text-[color:rgba(var(--ni-gray-800))] hover:text-[color:rgba(var(--ni-primary-500))]">
                            <a class="w-full h-full flex md:items-center pl-6 md:pl-4 pr-4 py-1 font-medium" href="#">Sign Up</a>
                        </li>
                        <li class="my-3 bg-[color:rgba(var(--ni-primary-500))] hover:bg-[color:rgba(var(--ni-primary-400))] text-white rounded-lg duration-300">
                            <a class="w-full h-full flex md:items-center pl-6 md:pl-4 pr-4 py-1 font-medium" href="#">Request Demo</a>
                        </li>
                    </ul>

                    <!-- navbar toggle button -->
                    <div class="md:hidden flex items-center">
                        <button id="menu-button" class="p-1 rounded-full focus:outline-none hover:text-[color:rgba(var(--ni-primary-400))] duration-300">
                            <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path id="menu-icon" d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </nav>

            <!-- login form -->
            <div class="flex flex-col space-y-4 justify-center items-center mt-20">
                <div class="flex flex-col space-y-2 bg-white bg-opacity-90 shadow-lg px-10 py-12 rounded-3xl max-w-xs sm:max-w-sm md:max-w-md">

                    <!-- title & description -->
                    <div class="flex flex-col space-y-3 justify-center items-center">
                        <div class="text-2xl font-extrabold text-[color:rgba(var(--ni-gray-900))]">Agent Login</div>
                        <p class="w-[90%] sm:w-[70%] text-center text-[color:rgba(var(--ni-gray-600))]">Hey, enter your details to get sign in to your account</p>
                    </div>

                    <!-- inputs -->
                    <form class="flex flex-col space-y-3" id="classic-centered-login">
                        <input type="email" name="email" placeholder="Enter Email / Phone No" class="outline-none text-sm mt-7 px-5 py-2 w-full border border-[color:rgba(var(--ni-primary-200))] rounded-lg" required>
                        <input type="password" name="password" placeholder="Passcode" class="outline-none text-sm px-5 py-2 w-full border border-[color:rgba(var(--ni-primary-200))] rounded-lg" required>

                        <!-- question -->
                        <div class="text-sm font-semibold text-[color:rgba(var(--ni-gray-900))]">Having trouble in sign in?</div>

                        <!-- sign in button -->
                        <div class="font-semibold">
                            <button type="submit" class="w-full my-5 p-2 text-center bg-[color:rgba(var(--ni-primary-500))] hover:bg-[color:rgba(var(--ni-primary-400))] text-white rounded-lg duration-300">Sign in</button>
                        </div>
                    </form>

                    <!-- alternative sign in title -->
                    <div class="text-center">
                        <p class="text-sm mb-5 text-[color:rgba(var(--ni-gray-600))]">— Or Sign in with —</p>                     
                    </div>

                    <!-- alternative sign in items -->
                    <div class="flex flex-row justify-center items-center space-x-1">

                        <!-- google -->
                        <a href="#" class="flex justify-center items-center w-full px-3 py-2 border border-[color:rgba(var(--ni-primary-200))] rounded-lg hover:bg-[color:rgba(var(--ni-primary-100))] duration-300">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" id="_24x24_On_Light_Google" data-name="24x24/On Light/Google" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><clipPath id="clip-path">
                                <path id="a" d="M17.791,7.364H9.209v3.477h4.94c-.46,2.209-2.386,3.477-4.94,3.477A5.37,5.37,0,0,1,3.767,9,5.442,5.442,0,0,1,12.6,4.868L15.279,2.25A9.29,9.29,0,0,0,9.209,0,9.08,9.08,0,0,0,0,9a9.08,9.08,0,0,0,9.209,9A8.586,8.586,0,0,0,18,9,7.306,7.306,0,0,0,17.791,7.364Z" fill="none"/></clipPath></defs><rect id="view-box" width="24" height="24" fill="none"/><g id="Logo" transform="translate(3 3)"><g id="Clipped"><path id="a-5" data-name="a" d="M17.791,7.364H9.209v3.477h4.94c-.46,2.209-2.386,3.477-4.94,3.477A5.37,5.37,0,0,1,3.767,9,5.442,5.442,0,0,1,12.6,4.868L15.279,2.25A9.29,9.29,0,0,0,9.209,0,9.08,9.08,0,0,0,0,9a9.08,9.08,0,0,0,9.209,9A8.586,8.586,0,0,0,18,9,7.306,7.306,0,0,0,17.791,7.364Z" fill="none"/><g id="Clipped-2" data-name="Clipped" clip-path="url(#clip-path)"><path id="Path" d="M0,10.636V0L7.116,5.318Z" transform="translate(-0.837 3.682)" fill="#fbbc05"/></g></g><g id="Clipped-3" data-name="Clipped"><path id="a-6" data-name="a" d="M17.791,7.364H9.209v3.477h4.94c-.46,2.209-2.386,3.477-4.94,3.477A5.37,5.37,0,0,1,3.767,9,5.442,5.442,0,0,1,12.6,4.868L15.279,2.25A9.29,9.29,0,0,0,9.209,0,9.08,9.08,0,0,0,0,9a9.08,9.08,0,0,0,9.209,9A8.586,8.586,0,0,0,18,9,7.306,7.306,0,0,0,17.791,7.364Z" fill="none"/><g id="Clipped-4" data-name="Clipped" clip-path="url(#clip-path)"><path id="Path-2" data-name="Path" d="M0,4.5,7.116,9.818l2.93-2.5,10.047-1.6V0H0Z" transform="translate(-0.837 -0.818)" fill="#ea4335"/></g></g><g id="Clipped-5" data-name="Clipped"><path id="a-7" data-name="a" d="M17.791,7.364H9.209v3.477h4.94c-.46,2.209-2.386,3.477-4.94,3.477A5.37,5.37,0,0,1,3.767,9,5.442,5.442,0,0,1,12.6,4.868L15.279,2.25A9.29,9.29,0,0,0,9.209,0,9.08,9.08,0,0,0,0,9a9.08,9.08,0,0,0,9.209,9A8.586,8.586,0,0,0,18,9,7.306,7.306,0,0,0,17.791,7.364Z" fill="none"/><g id="Clipped-6" data-name="Clipped" clip-path="url(#clip-path)"><path id="Path-3" data-name="Path" d="M0,15.136,12.558,5.727l3.307.409L20.093,0V19.636H0Z" transform="translate(-0.837 -0.818)" fill="#34a853"/></g></g><g id="Clipped-7" data-name="Clipped"><path id="a-8" data-name="a" d="M17.791,7.364H9.209v3.477h4.94c-.46,2.209-2.386,3.477-4.94,3.477A5.37,5.37,0,0,1,3.767,9,5.442,5.442,0,0,1,12.6,4.868L15.279,2.25A9.29,9.29,0,0,0,9.209,0,9.08,9.08,0,0,0,0,9a9.08,9.08,0,0,0,9.209,9A8.586,8.586,0,0,0,18,9,7.306,7.306,0,0,0,17.791,7.364Z" fill="none"/><g id="Clipped-8" data-name="Clipped" clip-path="url(#clip-path)"><path id="Path-4" data-name="Path" d="M14.651,15.136,1.674,5.318,0,4.091,14.651,0Z" transform="translate(4.605 3.682)" fill="#4285f4"/></g></g></g>
                              </svg>
                            <div class="text-xs font-bold ml-1 my-auto">Google</div>
                        </a>

                        <!-- apple id -->
                        <a href="#" class="flex justify-center items-center w-full px-3 py-2 border border-[color:rgba(var(--ni-primary-200))] rounded-lg hover:bg-[color:rgba(var(--ni-primary-100))] duration-300">
                            <svg class="w-4 h-4" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 305 305" style="enable-background:new 0 0 305 305;" xml:space="preserve"><g id="XMLID_228_"><path id="XMLID_229_" d="M40.738,112.119c-25.785,44.745-9.393,112.648,19.121,153.82C74.092,286.523,88.502,305,108.239,305 c0.372,0,0.745-0.007,1.127-0.022c9.273-0.37,15.974-3.225,22.453-5.984c7.274-3.1,14.797-6.305,26.597-6.305 c11.226,0,18.39,3.101,25.318,6.099c6.828,2.954,13.861,6.01,24.253,5.815c22.232-0.414,35.882-20.352,47.925-37.941 c12.567-18.365,18.871-36.196,20.998-43.01l0.086-0.271c0.405-1.211-0.167-2.533-1.328-3.066c-0.032-0.015-0.15-0.064-0.183-0.078 c-3.915-1.601-38.257-16.836-38.618-58.36c-0.335-33.736,25.763-51.601,30.997-54.839l0.244-0.152 c0.567-0.365,0.962-0.944,1.096-1.606c0.134-0.661-0.006-1.349-0.386-1.905c-18.014-26.362-45.624-30.335-56.74-30.813 c-1.613-0.161-3.278-0.242-4.95-0.242c-13.056,0-25.563,4.931-35.611,8.893c-6.936,2.735-12.927,5.097-17.059,5.097 c-4.643,0-10.668-2.391-17.645-5.159c-9.33-3.703-19.905-7.899-31.1-7.899c-0.267,0-0.53,0.003-0.789,0.008 C78.894,73.643,54.298,88.535,40.738,112.119z"/>
                                <path id="XMLID_230_" d="M212.101,0.002c-15.763,0.642-34.672,10.345-45.974,23.583c-9.605,11.127-18.988,29.679-16.516,48.379 c0.155,1.17,1.107,2.073,2.284,2.164c1.064,0.083,2.15,0.125,3.232,0.126c15.413,0,32.04-8.527,43.395-22.257 c11.951-14.498,17.994-33.104,16.166-49.77C214.544,0.921,213.395-0.049,212.101,0.002z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                            </svg>
                            <div class="text-xs font-bold ml-1 my-auto">Apple</div>
                        </a>

                        <!-- facebook -->
                        <a href="#" class="flex justify-center items-center w-full px-3 py-2 border border-[color:rgba(var(--ni-primary-200))] rounded-lg hover:bg-[color:rgba(var(--ni-primary-100))] duration-300">
                            <svg class="w-4 h-4" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 291.319 291.319" style="enable-background:new 0 0 291.319 291.319;" xml:space="preserve"><g>
                                <path style="fill:#3B5998;" d="M145.659,0c80.45,0,145.66,65.219,145.66,145.66c0,80.45-65.21,145.659-145.66,145.659 S0,226.109,0,145.66C0,65.219,65.21,0,145.659,0z"/><path style="fill:#FFFFFF;" d="M163.394,100.277h18.772v-27.73h-22.067v0.1c-26.738,0.947-32.218,15.977-32.701,31.763h-0.055 v13.847h-18.207v27.156h18.207v72.793h27.439v-72.793h22.477l4.342-27.156h-26.81v-8.366 C154.791,104.556,158.341,100.277,163.394,100.277z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                            </svg>
                            <div class="text-xs font-bold ml-1 my-auto">Facebook</div>
                        </a>
                    </div>

                    <!-- request -->
                    <div class="text-center">
                        <div class="text-sm mt-3">
                            <span class="text-[color:rgba(var(--ni-gray-500))]">Don't have an account?</span>
                            <span class="font-semibold text-[color:rgba(var(--ni-gray-800))] hover:text-[color:rgba(var(--ni-primary-500))]">
                                <a href="#">Request now</a>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- copyright -->
                <div class="pb-20">
                    <div class="font-semibold text-sm text-[color:rgba(var(--ni-gray-500))]">Copyright @turbotech 2022 | Privacy Policy</div>
                </div>
            </div>
        </div>
    </div> 
</div>

@endsection

@section('internalScript')

<!-- jQuery validation CDN -->
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<script>

    // call function
    classicCenteredLogin();

</script>

@endsection
