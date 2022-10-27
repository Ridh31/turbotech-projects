@extends('master')
@section('content')

{{-- <div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div> --}}

<!-- Design Profile Card with details -->

<!-- main -->
<div class="mainCard">
    <div class="cardContainer bg-[color:rgba(var(--ni-gray-100))] p-4 rounded-xl">

        <div class="flex flex-col lg:flex-row space-x-0 lg:space-x-3 space-y-3 lg:space-y-0">

            <!-- left side -->
            <div class="w-[100%] lg:w-[40%] xl:w-[30%] 2xl:w-[20%] h-[100%]">

                <!-- profile -->
                <div class="divide-y divide-[color:rgba(var(--ni-gray-200))] border-t-4 border-[color:rgba(var(--ni-primary-400))] bg-white shadow-lg rounded-xl sticky top-0">

                    <!-- info -->
                    <div class="flex lg:block space-y-3 p-5">

                        <!-- image -->
                        <div class="hidden justify-center items-center rounded-full lg:flex">
                            <img class="select-none w-full object-contain rounded-lg" src="https://genesisairway.com/wp-content/uploads/2019/05/no-image.jpg" alt="Roungridh Him">
                        </div>

                        <!-- main info -->
                        <div class="space-y-3">

                            <!-- name & position -->
                            <div class="space-y-2">
                                <div class="font-medium text-[color:rgba(var(--ni-gray-800))] text-md sm:text-xl">Roungridh Him</div>
                                <div class="flex">
                                    <div class="text-xs sm:text-md text-[color:rgba(var(--ni-gray-400))]">Front-End Developer</div>
                                    <div class="ml-1 sm:ml-2 my-auto">
                                        <svg class="w-3 sm:w-4 h-3 sm:h-4" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 318.959 318.959" style="enable-background:new 0 0 318.959 318.959;" xml:space="preserve"><g><g>
                                            <path style="fill:#F26D49;" d="M303.671,253.512c-11.151-37.754-67.121-33.566-91.279-44.408 c-24.157-10.842-20.386-47.219-23.449-53.548H130.01c-3.058,6.329,0.714,42.711-23.449,53.548 c-24.157,10.842-80.133,6.655-91.279,44.408c-6.149,20.824-5.857,27.193-7.554,50.26c0,0,76.8,15.187,150.014,15.187 s153.488-15.187,153.488-15.187C309.527,280.699,309.82,274.337,303.671,253.512z"/><path style="fill:#EB5F24;" d="M303.671,253.512c-11.151-37.754-67.121-33.566-91.279-44.408 c-24.157-10.842-20.386-47.219-23.449-53.548h-31.206c0,0-0.719,51.024,23.438,61.866s80.133,6.655,91.279,44.408 c5.857,19.83,5.868,26.552,7.324,47.073c19.234-2.816,31.442-5.126,31.442-5.126C309.527,280.699,309.82,274.337,303.671,253.512z "/><path style="fill:#DBB491;" d="M146.795,205.512l-1.225,26.057c4.221,1.647,8.807,2.911,13.849,3.625 c5.182-0.736,9.875-2.063,14.186-3.788l-2.484-25.889h-24.326V205.512z"/><path style="fill:#C69E7F;" d="M159.418,211.285c4.311-0.613,8.279-1.636,11.972-2.956l-0.27-2.816h-24.326l-0.118,2.563 C150.589,209.52,154.814,210.633,159.418,211.285z"/><polygon style="fill:#EB5F24;" points="209.155,207.401 176.105,236.116 171.12,205.512 		"/><polygon style="fill:#EB5F24;" points="109.232,207.738 142.814,236.116 146.795,205.512 		"/><path style="fill:#E0DBD3;" d="M146.795,205.512l-25.72-13.984c0,0-3.389,4.817-11.843,16.21l31.723,22.853l2.704-14.923 L146.795,205.512z"/><path style="fill:#E0DBD3;" d="M171.12,205.512l25.72-13.984c0,0,3.861,4.48,12.315,15.873l-32.195,23.191l-2.704-14.923 L171.12,205.512z"/><path style="fill:#D3CEC7;" d="M196.84,191.528l-25.72,13.984l1.776,5.772c2.372,2.602,5.109,4.716,8.279,6.138 c2.799,1.253,6.02,2.31,9.555,3.249l18.419-13.265C200.702,196.008,196.84,191.528,196.84,191.528z"/><path style="fill:#EB5F24;" d="M60.619,312.062c27.631,3.552,62.771,6.897,97.124,6.897c35.112,0,71.854-3.496,100.581-7.133 v-22.853c0,0-56.852,8.526-100.721,8.526s-96.978-8.526-96.978-8.526v23.089H60.619z"/><ellipse transform="matrix(-0.177 0.9842 -0.9842 -0.177 385.6469 -85.3759)" style="fill:#CCA483;" cx="228.519" cy="118.551" rx="21.386" ry="11.629"/><ellipse transform="matrix(-0.9842 0.177 -0.177 -0.9842 200.0847 219.268)" style="fill:#DBB491;" cx="90.262" cy="118.558" rx="11.629" ry="21.386"/><path style="fill:#DBB491;" d="M223.64,47.359h-64.221H95.231c0,0-35.989,146.614,64.187,160.806 C259.633,193.973,223.64,47.359,223.64,47.359z"/><path style="fill:#CCA483;" d="M159.418,208.165c100.216-14.192,64.221-160.806,64.221-160.806h-15.024 c4.114,61.242,9.808,93.774-13.815,129.24C176.083,204.703,159.418,208.165,159.418,208.165z"/><path style="fill:#CCA483;" d="M211.561,43.498L86.839,53.817v30.447c0,0,3.417,2.366,6.216,3.232c0,0,34.19,7.655,57.735-1.343 c21.049-8.043,30.346-32.611,51.361-32.931c3.58-0.056,6.694,0.669,9.403,1.956L211.561,43.498z"/><path style="fill:#3B3B3B;" d="M235.786,48.725C230.064,25.956,201.191,0,159.48,0S88.897,25.956,83.169,48.725 c0,0-10.932,47.483,7.683,67.931c0,0-0.916-18.548,0.956-33.313c0,0,34.19,7.655,57.735-1.343 c21.049-8.043,30.346-32.611,51.361-32.931c19.487-0.292,25.282,22.387,26.237,34.275s0.955,33.313,0.955,33.313 C246.717,96.208,235.786,48.725,235.786,48.725z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <!-- id number -->
                            <div class="flex">
                                <div class="text-center text-xs sm:text-sm px-2 sm:px-5 py-0.5 sm:py-1 bg-gradient-to-l from-[color:rgba(var(--ni-primary-300))] to-[color:rgba(var(--ni-primary-400))] text-white shadow-md rounded-lg">TT-0216</div>
                            </div>
                        </div>

                        <!-- image small screen -->
                        <div class="flex justify-center items-center ml-auto rounded-full lg:hidden">
                            <img class="select-none w-16 sm:w-32 object-contain rounded-lg" src="https://genesisairway.com/wp-content/uploads/2019/05/no-image.jpg" alt="Roungridh Him">
                        </div>
                    </div>

                    <!-- description & status & member since -->
                    <div class="p-5 pt-4 space-y-3">

                        <!-- description -->
                        <div class="space-y-3">
                            <div class="font-medium text-md sm:text-lg text-[color:rgba(var(--ni-gray-600))]">Description</div>
                            <div class="text-xs sm:text-sm text-[color:rgba(var(--ni-gray-400))]">Old programmers never die. They simply give up their resources. If at first you don’t succeed; call it version 1.0. I’m very font of you because you are just my type.</div>
                        </div>
                        
                        <!-- status & member since -->
                        <div class="divide-y divide-[color:rgba(var(--ni-gray-200))] bg-[color:rgba(var(--ni-gray-100))] rounded-lg">
                            <div class="flex px-5 py-4 text-xs sm:text-sm">
                                <div class="font-medium text-[color:rgba(var(--ni-gray-500))] my-auto">Status</div>
                                <div class="flex ml-auto">
                                    <div class="my-auto px-2 py-1 bg-[color:rgba(var(--ni-greengray-400))] text-white rounded-md">Active</div>
                                </div>
                            </div>
                            <div class="flex p-5 font-medium text-xs sm:text-sm">
                                <div class="text-[color:rgba(var(--ni-gray-500))]">Member Since</div>
                                <div class="ml-auto text-[color:rgba(var(--ni-gray-500))]">Sep 05, 2022</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- right side -->
            <div class="w-[100%] lg:w-[60%] xl:w-[70%] 2xl:w-[80%] h-[100%] space-y-3">

                <!-- info -->
                <div class="h-auto">
                    <div class="divide-y divide-[color:rgba(var(--ni-gray-200))] bg-white shadow-md rounded-xl">
                        <div class="p-5 space-y-5">

                            <!-- about -->
                            <div class="flex">
                                <div class="my-auto">
                                    <svg class="w-4 h-4" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 318.965 318.965" style="enable-background:new 0 0 318.965 318.965;" xml:space="preserve"><g><g>
                                        <path style="fill:#636358;" d="M303.673,253.518c-11.151-37.754-67.121-33.566-91.279-44.408 c-24.157-10.842-20.386-47.219-23.449-53.548h-58.932c-3.058,6.329,0.714,42.711-23.449,53.548 c-24.157,10.842-80.133,6.655-91.279,44.408c-6.149,20.824-5.857,27.193-7.554,50.26c0,0,76.8,15.187,150.014,15.187 s153.488-15.187,153.488-15.187C309.53,280.705,309.822,274.342,303.673,253.518z"/><path style="fill:#515147;" d="M303.673,253.518c-11.151-37.754-67.121-33.566-91.279-44.408 c-24.157-10.842-20.386-47.219-23.449-53.548H157.74c0,0-0.719,51.024,23.438,61.866s80.133,6.655,91.279,44.408 c5.857,19.83,5.868,26.552,7.324,47.073c19.234-2.816,31.442-5.126,31.442-5.126C309.53,280.705,309.822,274.342,303.673,253.518z "/><g><path style="fill:#EAEAE1;" d="M174.748,318.7c10.348-26.67,24.163-73.95,26.366-119.466h-83.427 c2.203,45.572,16.058,92.909,26.423,119.562c4.541,0.112,9.094,0.169,13.636,0.169 C163.383,318.964,169.065,318.863,174.748,318.7z"/><g><polygon style="fill:#C6C5AF;" points="196.91,216.225 176.108,236.122 171.19,205.743 				"/><polygon style="fill:#C6C5AF;" points="121.009,216.225 142.817,236.122 146.796,205.518 				"/><polygon style="fill:#C6C5AF;" points="172.005,205.518 146.796,205.518 144.885,211.7 173.961,211.869 				"/><polygon style="fill:#AAA88F;" points="146.796,205.518 144.885,211.7 145.987,212.42 				"/><polygon style="fill:#AAA88F;" points="173.961,211.869 171.19,205.743 172.331,212.802 				"/><path style="fill:#4C4C4C;" d="M173.433,318.739l0.579-7.987l-6.081-80.51h-16.024l-7.099,80.515l0.585,8.066 c4.12,0.084,8.24,0.141,12.354,0.141C162.95,318.964,168.188,318.88,173.433,318.739z"/><polygon style="fill:#3A3A38;" points="151.967,230.597 167.93,230.237 168.256,234.734 				"/><polygon style="fill:#4C4C4C;" points="140.541,208.182 178.255,208.159 176.108,221.031 167.593,230.597 151.967,230.597  142.693,221.031 				"/><path style="fill:#EAEAE1;" d="M146.796,205.518l-25.72-13.984c0,0-3.389,4.817-11.843,16.21l31.723,22.853l2.704-14.923 L146.796,205.518z"/><path style="fill:#EAEAE1;" d="M171.122,205.518l25.72-13.984c0,0,3.389,4.817,11.843,16.21l-31.723,22.853l-2.704-14.923 L171.122,205.518z"/><path style="fill:#E0DBD3;" d="M196.842,191.534l-25.72,13.984l1.776,5.772c2.372,2.602,5.109,4.716,8.279,6.138 c2.799,1.253,6.02,2.31,9.549,3.249l17.947-12.927C200.232,196.351,196.842,191.534,196.842,191.534z"/></g><g><path style="fill:#515147;" d="M233.292,250.73l-15.333-5.559l13.776-3.794l-13.13-29.969l-40.749,107.208 c4.778-0.163,9.549-0.377,14.293-0.635L233.292,250.73z"/><path style="fill:#515147;" d="M86.189,241.372l13.776,3.794l-15.333,5.559l41.216,67.369c4.716,0.247,9.471,0.444,14.237,0.59 L99.24,211.734L86.189,241.372z"/></g><g><path style="fill:#72726A;" d="M228.981,251.562l-14.833-6.239l13.461-4.783l-9.004-29.137l-16.907-13.147l-32.111,120.579 c6.97-0.146,13.962-0.41,20.903-0.776L228.981,251.562z"/><path style="fill:#636358;" d="M201.693,198.256l-6.278,23.567c8.538,1.945,18.385,3.507,28.171,5.711l-4.985-16.131 L201.693,198.256z"/><path style="fill:#72726A;" d="M99.235,211.74l-8.926,28.806l13.461,4.783l-14.833,6.239l38.563,66.621 c6.902,0.343,13.877,0.585,20.847,0.703L116.22,198.267L99.235,211.74z"/></g></g><g><ellipse transform="matrix(-0.177 0.9842 -0.9842 -0.177 385.6561 -85.3711)" style="fill:#CCA483;" cx="228.522" cy="118.558" rx="21.386" ry="11.629"/><ellipse transform="matrix(-0.9842 0.177 -0.177 -0.9842 200.0903 219.2807)" style="fill:#DBB491;" cx="90.265" cy="118.565" rx="11.629" ry="21.386"/><path style="fill:#DBB491;" d="M223.641,47.365H159.42H95.233c0,0-35.989,146.614,64.187,160.806 C259.636,193.979,223.641,47.365,223.641,47.365z"/><path style="fill:#CCA483;" d="M159.42,208.171c100.216-14.192,64.221-160.806,64.221-160.806h-15.024 c4.114,61.242,9.808,93.774-13.815,129.24C176.085,204.708,159.42,208.171,159.42,208.171z"/><path style="fill:#393C3D;" d="M187.838,5.48c0,0-19.824-9.33-46.477-3.642c-19.953,4.26-52.423,17.829-59.73,46.893 c0,0-10.932,47.483,7.683,67.931c0,0-0.916-18.548,0.956-33.313c0,0,11.174,4.946,33.69,4.659 c30.188-0.382,59.444-12.776,68.442-26.355c0,0-1.034,19.532-10.876,27.502c0,0,34.522-5.396,44.729-25.883 c0,0,3.417,17.935,3.417,51.159c0,0,5.39-7.509,6.649-19.605c2.855-27.44-2.333-65.334-22.876-64.069 C213.446,30.756,204.745,13.49,187.838,5.48z"/><path style="fill:#CCA483;" d="M181.526,89.154c9.836-7.976,10.876-27.502,10.876-27.502 c-8.999,13.574-38.248,25.967-68.442,26.355c-21.763,0.275-32.931-4.333-33.651-4.643c1.433,0.613,44.156,18.554,91.672-3.884 c0,0-2.58,9.527-8.139,12.804c0,0,43.869-0.793,52.418-29.008C216.054,83.758,181.526,89.154,181.526,89.154z"/></g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                    </svg>
                                </div>
                                <div class="text-md sm:text-xl font-medium text-[color:rgba(var(--ni-gray-600))] ml-2">About</div>
                            </div>

                            <div class="space-y-3 2xl:space-y-5">
                                
                                <!-- first & last name -->
                                <div class="grid grid-cols-1 2xl:grid-cols-2 space-y-3 2xl:space-y-0">
                                    <div class="flex sm:grid grid-cols-2 text-xs sm:text-md text-[color:rgba(var(--ni-gray-600))]">
                                        <div class="font-medium select-none">First Name:</div>
                                        <div class="ml-2 sm:ml-0">Roungridh</div>
                                    </div>
                                    <div class="flex sm:grid grid-cols-2 text-xs sm:text-md text-[color:rgba(var(--ni-gray-600))]">
                                        <div class="font-medium select-none">Last Name:</div>
                                        <div class="ml-2 sm:ml-0">Him</div>
                                    </div>
                                </div>

                                <!-- gender & contact no -->
                                <div class="grid grid-cols-1 2xl:grid-cols-2 space-y-3 2xl:space-y-0">
                                    <div class="flex sm:grid grid-cols-2 text-xs sm:text-md text-[color:rgba(var(--ni-gray-600))]">
                                        <div class="font-medium select-none">Gender:</div>
                                        <div class="ml-2 sm:ml-0">Male</div>
                                    </div>
                                    <div class="flex sm:grid grid-cols-2 text-xs sm:text-md text-[color:rgba(var(--ni-gray-600))]">
                                        <div class="font-medium select-none">Contact No.</div>
                                        <div class="ml-2 sm:ml-0">(+855) 89-780-093</div>
                                    </div>
                                </div>

                                <!-- current & permanent address -->
                                <div class="grid grid-cols-1 2xl:grid-cols-2 space-y-3 2xl:space-y-0">
                                    <div class="flex sm:grid grid-cols-2 text-xs sm:text-md text-[color:rgba(var(--ni-gray-600))]">
                                        <div class="font-medium select-none">Current Address:</div>
                                        <div class="ml-2 sm:ml-0">Phnom Penh</div>
                                    </div>
                                    <div class="flex sm:grid grid-cols-2 text-xs sm:text-md text-[color:rgba(var(--ni-gray-600))]">
                                        <div class="font-medium select-none">Permanent Address:</div>
                                        <div class="ml-2 sm:ml-0">Phnom Penh</div>
                                    </div>
                                </div>

                                <!-- email & dob -->
                                <div class="grid grid-cols-1 2xl:grid-cols-2 space-y-3 2xl:space-y-0">
                                    <div class="flex sm:grid grid-cols-2 text-xs sm:text-md text-[color:rgba(var(--ni-gray-600))]">
                                        <div class="font-medium select-none">Email:</div>
                                        <div class="ml-2 sm:ml-0">himroungridh2001@gmail.com</div>
                                    </div>
                                    <div class="flex sm:grid grid-cols-2 text-xs sm:text-md text-[color:rgba(var(--ni-gray-600))]">
                                        <div class="font-medium select-none">Date of Birth:</div>
                                        <div class="ml-2 sm:ml-0">Jan 31, 2001</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- buttons -->
                        <div class="select-none text-xs sm:text-sm md:text-md flex justify-end flex-col xl:flex-row space-x-0 xl:space-x-3 space-y-3 xl:space-y-0 p-5">
                            <button class="px-10 py-2 border border-[color:rgba(var(--ni-primary-400))] hover:bg-[color:rgba(var(--ni-primary-400))] text-[color:rgba(var(--ni-primary-500))] hover:text-white rounded-lg duration-300">Modify Information</button>
                            <button class="px-10 py-2 bg-[color:rgba(var(--ni-danger-400))] hover:bg-[color:rgba(var(--ni-danger-500))] text-[color:rgba(var(--ni-danger-500))] text-white rounded-lg duration-300">Change Password</button>
                        </div>
                    </div>
                </div>

                <!-- details -->
                <div class="h-auto">
                    <div class="p-5 space-y-5 bg-white shadow-lg rounded-xl">

                        <!-- details title -->
                        <div id="content-title" class="flex"></div>

                        <!-- tabs & tab contents -->
                        <div class="divide-y divide-[color:rgba(var(--ni-gray-100))] rounded-xl">

                            <!-- tabs -->
                            <ul id="tabs" class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-2 xl:grid-cols-4 text-center font-medium text-xs sm:text-sm lg:text-md text-[color:rgba(var(--ni-gray-600))] rounded-t-md">
                                <li class="select-none cursor-pointer px-10 py-1.5 border-t border-l border-[color:rgba(var(--ni-gray-50))] hover:bg-[color:rgba(var(--ni-primary-300))] hover:text-white rounded-tl-md duration-300">Education</li>
                                <li class="select-none cursor-pointer px-10 py-1.5 border-t border-[color:rgba(var(--ni-gray-50))] hover:bg-[color:rgba(var(--ni-primary-300))] hover:text-white duration-300 rounded-tr-md md:rounded-tr-none lg:rounded-tr-md xl:rounded-tr-none">Training</li>
                                <li class="select-none cursor-pointer px-10 py-1.5 border-t border-[color:rgba(var(--ni-gray-50))] hover:bg-[color:rgba(var(--ni-primary-300))] hover:text-white duration-300 rounded-bl-md md:rounded-bl-none lg:rounded-bl-md xl:rounded-bl-none">Leave</li>
                                <li class="select-none cursor-pointer px-10 py-1.5 border-t border-r border-[color:rgba(var(--ni-gray-50))] hover:bg-[color:rgba(var(--ni-primary-300))] hover:text-white rounded-tr-none md:rounded-tr-md lg:rounded-tr-none xl:rounded-tr-md rounded-br-md md:rounded-br-none lg:rounded-br-md xl:rounded-br-none duration-300">Late</li>
                            </ul>

                            <!-- tab contents -->
                            <div id="tab-contents" class="px-2 sm:px-5 pb-2 sm:pb-5 bg-[color:rgba(var(--ni-gray-50))] rounded-tr-lg rounded-b-lg">

                                <!-- education content -->
                                <div id="education-content" class="space-y-5" tab-content>

                                    <!-- activity -->
                                    <div class="grid grid-cols-1 xl:grid-cols-2 space-x-0 xl:space-x-5">
                                        <div class="bg-white mt-2 sm:mt-5 p-5 shadow-md rounded-lg">
                                            <div class="select-none font-medium text-md sm:text-lg text-[color:rgba(var(--ni-gray-600))]">Activity</div>
                                            <ul class="list-disc text-xs sm:text-sm text-[color:rgba(var(--ni-gray-400))] mt-5 px-1 sm:px-2 md:px-10 space-y-3">
                                                <li>Connect Internet from me to you. (Pending)</li>
                                                <li>Eating (Completed)</li>
                                                <li>Sleeping (Active)</li>
                                                <li>etc... (Example)</li>
                                            </ul>
                                        </div>

                                        <!-- progress bars -->
                                        <div class="bg-white mt-2 sm:mt-5 px-5 pb-5 shadow-md rounded-lg">

                                            <!-- web design progress bar -->
                                            <div class="space-y-1 text-xs sm:text-md">
                                                <h1 class="mt-5 text-[color:rgba(var(--ni-gray-500))]">Web Design</h1>
                                                <div class="h-2 sm:h-3 relative max-w-xl rounded-full overflow-hidden">
                                                    <div class="w-full h-full bg-[color:rgba(var(--ni-gray-200))] absolute"></div>
                                                    <div id="web-design-progress-bar" class="transition-all ease-out duration-1000 h-full bg-[color:rgba(var(--ni-success-300))] relative w-0"></div>
                                                </div>  
                                            </div>
                                            
                                            <!-- ux/ui progress bar -->
                                            <div class="space-y-1 text-xs sm:text-md">
                                                <h1 class="mt-5 text-[color:rgba(var(--ni-gray-500))]">UX/UI</h1>
                                                <div class="h-2 sm:h-3 relative max-w-xl rounded-full overflow-hidden">
                                                    <div class="w-full h-full bg-[color:rgba(var(--ni-gray-200))] absolute"></div>
                                                    <div id="ux-ui-progress-bar" class="transition-all ease-out duration-1000 h-full bg-[color:rgba(var(--ni-success-300))] relative w-0"></div>
                                                </div>  
                                            </div>

                                            <!-- mobile template progress bar -->
                                            <div class="space-y-1 text-xs sm:text-md">
                                                <h1 class="mt-5 text-[color:rgba(var(--ni-gray-500))]">Mobile Template</h1>
                                                <div class="h-2 sm:h-3 relative max-w-xl rounded-full overflow-hidden">
                                                    <div class="w-full h-full bg-[color:rgba(var(--ni-gray-200))] absolute"></div>
                                                    <div id="mobile-template-progress-bar" class="transition-all ease-out duration-1000 h-full bg-[color:rgba(var(--ni-success-300))] relative w-0"></div>
                                                </div>  
                                            </div>

                                            <!-- backend api progress bar -->
                                            <div class="space-y-1 text-xs sm:text-md">
                                                <h1 class="mt-5 text-[color:rgba(var(--ni-gray-500))]">Backend API</h1>
                                                <div class="h-2 sm:h-3 relative max-w-xl rounded-full overflow-hidden">
                                                    <div class="w-full h-full bg-[color:rgba(var(--ni-gray-200))] absolute"></div>
                                                    <div id="backend-api-progress-bar" class="transition-all ease-out duration-1000 h-full bg-[color:rgba(var(--ni-success-300))] relative w-0"></div>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- training content -->
                                <div id="training-content" class="space-y-5" tab-content>
                                    <div class="mt-2 sm:mt-5 p-3 bg-white shadow-md rounded-lg">
                                        <div class="divide-y divide-[color:rgba(var(--ni-gray-200))] text-sm text-center border border-[color:rgba(var(--ni-gray-200))] rounded-md">
                                            <div class="grid grid-cols-2 text-xs sm:text-md">
                                                <div class="select-none p-3 font-medium text-[color:rgba(var(--ni-gray-500))]">Date</div>
                                                <div class="select-none p-3 font-medium text-[color:rgba(var(--ni-danger-400))]">Subject</div>
                                            </div>
                                            <div class="grid grid-cols-2 text-xs sm:text-sm">
                                                <div class="p-3 text-[color:rgba(var(--ni-gray-500))]">DD/MM/YY</div>
                                                <div class="p-3 text-[color:rgba(var(--ni-primary-400))]">HTML</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- leave content -->
                                <div id="leave-content" class="space-y-5" tab-content>

                                    <!-- leave type & amount -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 2xl:grid-cols-4 gap-0 sm:gap-5 space-y-2 sm:space-y-0 mt-2 sm:mt-5">

                                        <!-- annual leave -->
                                        <div class="p-3 bg-white font-medium text-center text-xs sm:text-md text-[color:rgba(var(--ni-gray-600))] shadow-md rounded-lg">
                                            <div class="flex justify-center items-center">
                                                <svg class="w-5 h-5 my-auto" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 128.5 128.5" style="enable-background:new 0 0 128.5 128.5;" xml:space="preserve"><g id="_x31_4"><g><circle style="fill:#EF8D6F;" cx="64.25" cy="64.25" r="64.25"/></g><g>
                                                    <path style="fill:#F2F2F2;" d="M87.805,28.975h0.618c7.083,0,12.878,5.795,12.878,12.879v48.345 c0,7.083-5.796,12.879-12.878,12.879h-0.618V47.287c2.704,0,4.896-2.192,4.896-4.896c0-2.703-2.191-4.895-4.896-4.895 C87.805,37.496,87.805,28.975,87.805,28.975z M40.696,28.975h47.109v8.521h-0.001c-2.703,0-4.896,2.192-4.896,4.895 c0,2.704,2.193,4.896,4.896,4.896h0.001v55.791H40.696V47.287c2.703,0,4.896-2.192,4.896-4.896c0-2.703-2.192-4.895-4.896-4.895 V28.975z M40.079,28.975h0.617v8.521c-2.704,0-4.896,2.192-4.896,4.895c0,2.704,2.192,4.896,4.896,4.896v55.791h-0.617 c-7.084,0-12.88-5.797-12.88-12.879V41.854C27.199,34.77,32.995,28.975,40.079,28.975z"/><path style="fill:#AFAFAF;" d="M40.696,25.422L40.696,25.422c1.046,0,1.902,0.856,1.902,1.902v13.165 c0,1.046-0.856,1.902-1.902,1.902h-0.001c-1.047,0-1.902-0.856-1.902-1.902V27.324C38.794,26.278,39.65,25.422,40.696,25.422z"/><path style="fill:#AFAFAF;" d="M87.805,25.422L87.805,25.422c1.047,0,1.902,0.856,1.902,1.902v13.165 c0,1.046-0.855,1.902-1.902,1.902h-0.001c-1.047,0-1.903-0.856-1.903-1.902V27.324C85.902,26.278,86.758,25.422,87.805,25.422z"/><rect x="27.199" y="50.675" style="fill:#FABB18;" width="74.102" height="3.107"/><rect x="53.236" y="59.304" style="fill:#EFCB6C;" width="9.584" height="8.453"/><rect x="38.199" y="58.954" style="fill:#C9675B;" width="9.584" height="8.453"/><rect x="68.727" y="59.304" style="fill:#EFCB6C;" width="9.584" height="8.453"/><rect x="83.088" y="59.304" style="fill:#EFCB6C;" width="9.584" height="8.453"/><rect x="53.586" y="72.996" style="fill:#EFCB6C;" width="9.584" height="8.453"/><rect x="69.077" y="72.996" style="fill:#EFCB6C;" width="9.584" height="8.453"/><rect x="83.088" y="73.346" style="fill:#EFCB6C;" width="9.584" height="8.453"/><rect x="53.586" y="87.327" style="fill:#EFCB6C;" width="9.584" height="8.439"/><rect x="38.373" y="72.996" style="fill:#EFCB6C;" width="9.584" height="8.453"/><rect x="38.373" y="87.327" style="fill:#EFCB6C;" width="9.584" height="8.439"/><rect x="68.727" y="87.677" style="fill:#EFCB6C;" width="9.584" height="8.439"/><rect x="83.088" y="87.677" style="fill:#EFCB6C;" width="9.584" height="8.439"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                </svg>
                                                <div class="select-none ml-2">Annual Leave</div>
                                            </div>
                                            <div class="text-[color:rgba(var(--ni-danger-400))]">0/18</div>
                                        </div>

                                        <!-- special leave -->
                                        <div class="p-3 bg-white font-medium text-center text-xs sm:text-md text-[color:rgba(var(--ni-gray-600))] shadow-md rounded-lg">
                                            <div class="flex justify-center items-center">
                                                <svg class="w-5 h-5 my-auto" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><circle style="fill:#71E2EF;" cx="256" cy="256" r="256"/>
                                                    <path style="fill:#38C6D9;" d="M512,256L398.222,142.222L124.826,389.206l122.637,122.635c2.836,0.093,5.679,0.157,8.537,0.157 C397.384,512,512,397.384,512,256z"/><path style="fill:#FEE187;" d="M147.947,398.222h216.107c18.872,0,34.17-15.298,34.17-34.17v-221.83H113.778v221.83 C113.778,382.924,129.076,398.222,147.947,398.222z"/><path style="fill:#FFC61B;" d="M255.426,142.222v256h108.627c18.872,0,34.17-15.298,34.17-34.17v-221.83H255.426z"/><rect x="113.778" y="142.222" style="fill:#FF6262;" width="284.444" height="56.889"/><rect x="255.431" y="142.222" style="fill:#E03A00;" width="142.791" height="56.889"/><g><path style="fill:#940030;" d="M170.667,170.667L170.667,170.667c-7.854,0-14.222-6.368-14.222-14.222V128 c0-7.854,6.368-14.222,14.222-14.222l0,0c7.854,0,14.222,6.368,14.222,14.222v28.444 C184.889,164.299,178.521,170.667,170.667,170.667z"/><path style="fill:#940030;" d="M227.556,170.667L227.556,170.667c-7.854,0-14.222-6.368-14.222-14.222V128 c0-7.854,6.368-14.222,14.222-14.222l0,0c7.854,0,14.222,6.368,14.222,14.222v28.444 C241.778,164.299,235.41,170.667,227.556,170.667z"/><path style="fill:#940030;" d="M284.444,170.667L284.444,170.667c-7.854,0-14.222-6.368-14.222-14.222V128 c0-7.854,6.368-14.222,14.222-14.222l0,0c7.854,0,14.222,6.368,14.222,14.222v28.444 C298.667,164.299,292.299,170.667,284.444,170.667z"/> <path style="fill:#940030;" d="M341.333,170.667L341.333,170.667c-7.854,0-14.222-6.368-14.222-14.222V128 c0-7.854,6.368-14.222,14.222-14.222l0,0c7.854,0,14.222,6.368,14.222,14.222v28.444 C355.556,164.299,349.187,170.667,341.333,170.667z"/></g><rect x="142.222" y="199.111" style="fill:#FFFFFF;" width="227.556" height="170.667"/><rect x="255.431" y="199.111" style="fill:#E8E8E8;" width="114.347" height="170.667"/><path style="fill:#273B7A;" d="M262.38,315.461v-10.366h-27.974c-3.531,0-6.177-0.798-7.94-2.396 c-1.765-1.596-2.646-3.77-2.646-6.52c0-0.705,0.129-1.421,0.39-2.145c0.26-0.724,0.65-1.484,1.171-2.284 c0.521-0.798,1.058-1.569,1.617-2.313c0.557-0.743,1.245-1.653,2.062-2.731l29.534-39.508c1.932-2.601,3.52-4.487,4.767-5.656 c1.245-1.171,2.739-1.757,4.486-1.757c5.646,0,8.47,3.232,8.47,9.697v43.132h2.398c2.86,0,5.154,0.391,6.882,1.171 s2.591,2.489,2.591,5.127c0,2.155-0.705,3.725-2.119,4.708c-1.412,0.984-3.531,1.476-6.353,1.476h-3.401v10.36 c0,2.862-0.631,4.989-1.895,6.38c-1.262,1.395-2.953,2.091-5.07,2.091c-2.081,0-3.762-0.717-5.044-2.146 C263.021,320.357,262.38,318.247,262.38,315.461z M238.418,292.614h23.961v-32.377L238.418,292.614z"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                </svg>
                                                <div class="select-none ml-2">Special Leave</div>
                                            </div>
                                            <div class="text-[color:rgba(var(--ni-primary-400))]">0/18</div>
                                        </div>

                                        <!-- sick leave -->
                                        <div class="p-3 bg-white font-medium text-center text-xs sm:text-md text-[color:rgba(var(--ni-gray-600))] shadow-md rounded-lg">
                                            <div class="flex justify-center items-center">
                                                <svg class="w-5 h-5 my-auto" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.997 511.997" style="enable-background:new 0 0 511.997 511.997;" xml:space="preserve"><circle style="fill:#FAD24D;" cx="255.999" cy="255.999" r="255.999"/>
                                                    <path style="fill:#21D0C3;" d="M417.671,144.147l-144.87,144.628l-133.327,94.061l-10.581-10.618l94.26-133.193L368.02,94.394 c18.569-18.534,68.219,31.211,49.648,49.751L417.671,144.147z"/><path style="fill:#15BDB2;" d="M417.671,144.147l-144.87,144.628L255.329,301.1l-2.376-2.376l168.489-168.491 C422.343,135.577,421.349,140.475,417.671,144.147z"/><path style="fill:#FF5B62;" d="M272.855,288.721l-133.377,94.114l-10.581-10.62l94.26-133.193 c1.571,17.377,32.965,48.407,49.701,49.701h-0.003V288.721z"/><path style="fill:#ED4C54;" d="M272.787,288.769l-133.256,94.027l-2.699-2.613l-0.026-0.029l125.977-94.7l0.024,0.008 c3.525,1.799,6.846,2.945,9.747,3.229L272.787,288.769z"/><path style="fill:#D9DADA;" d="M128.946,371.588l11.169,11.192l-23.843,23.817c-7.397,7.388-18.574-3.801-11.169-11.192 l23.845-23.817H128.946z"/><path style="fill:#15BDB2;" d="M380.117,130.562L380.117,130.562c8.64,8.64,8.64,22.778,0,31.421l-72.888,72.89 c-8.64,8.64-22.778,8.64-31.421,0l0,0c-8.64-8.64-8.64-22.778,0-31.42l72.89-72.888c8.64-8.64,22.778-8.64,31.421,0L380.117,130.562 z"/><g><path style="fill:#FEFEFE;" d="M345.051,151.533l14.098,14.098c1.584,1.584,1.587,4.181,0,5.768l-47.094,47.091 c-1.584,1.587-4.181,1.584-5.768,0l-14.098-14.098c-1.587-1.587-1.587-4.181,0-5.768l47.094-47.094 c1.584-1.587,4.181-1.584,5.768,0V151.533z"/><path style="fill:#FEFEFE;" d="M371.727,138.954c2.552,2.552,2.552,6.694,0,9.246s-6.694,2.552-9.246,0 c-2.552-2.552-2.552-6.694,0-9.246C365.033,136.402,369.175,136.402,371.727,138.954z"/></g><path style="fill:#EBECEC;" d="M344.626,153.244l12.811,12.811c1.442,1.442,1.442,3.799,0,5.241l-45.483,45.48 c-1.442,1.442-3.799,1.442-5.241,0l-12.811-12.811c-1.442-1.442-1.442-3.799,0-5.241l45.483-45.483c1.442-1.442,3.799-1.442,5.241,0 V153.244z"/><path style="fill:#FF5B62;" d="M412.776,149.034c-6.238-23.838-26.308-44.297-49.551-49.85l4.798-4.79 c18.569-18.537,68.219,31.211,49.648,49.751l-4.897,4.889H412.776z"/><path style="fill:#ED4C54;" d="M412.776,149.034c-0.677-2.586-1.516-5.136-2.505-7.628l11.171-11.174 c0.902,5.346-0.092,10.243-3.77,13.915l-4.897,4.889v-0.002H412.776z"/><path style="fill:#FFFFFF;" d="M128.949,371.59l9.768,9.792l-23.843,23.819c-7.395,7.389-17.17-2.4-9.768-9.792L128.949,371.59z"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                </svg>
                                                <div class="select-none ml-2">Sick Leave</div>
                                            </div>
                                            <div class="text-[color:rgba(var(--ni-warning-400))]">0/18</div>
                                        </div>

                                        <!-- no salary leave -->
                                        <div class="p-3 bg-white font-medium text-center text-xs sm:text-md text-[color:rgba(var(--ni-gray-600))] shadow-md rounded-lg">
                                            <div class="flex justify-center items-center">
                                                <svg class="w-5 h-5 my-auto" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><circle style="fill:#4AB8A1;" cx="256" cy="256" r="256"/><rect x="348" y="264" style="fill:#CC665C;" width="16" height="96"/><rect x="364" y="264" style="fill:#CC584C;" width="16" height="96"/><rect x="380" y="264" style="fill:#B34D43;" width="16" height="96"/><rect x="348" y="248" style="fill:#E6E6E6;" width="48" height="16"/>
                                                    <path style="fill:#CC733C;" d="M372,208.204c-13.252,0-24,10.748-24,24V248h48v-15.796C396,218.952,385.252,208.204,372,208.204z"/><path style="fill:#BF6C38;" d="M372,208.204c-1.368,0-2.696,0.14-4,0.36c11.344,1.908,20,11.752,20,23.64V248h8v-15.796 C396,218.952,385.252,208.204,372,208.204z"/><path style="fill:#FFE1D9;" d="M388,352.204c-4.416,0-8,3.584-8,8c0-4.416-3.584-8-8-8s-8,3.584-8,8c0-4.416-3.584-8-8-8 s-8,3.584-8,8l20.42,40.844c1.968,3.936,5.188,3.936,7.156,0L396,360.204C396,355.788,392.416,352.204,388,352.204z"/><path style="fill:#E6CBC3;" d="M388,352.204c-0.696,0-1.356,0.116-2,0.284c3.444,0.892,6,3.996,6,7.716l-20.42,40.844 c-0.46,0.932-1,1.624-1.58,2.116c1.848,1.584,4.08,0.892,5.58-2.116L396,360.204C396,355.788,392.416,352.204,388,352.204z"/><path style="fill:#242424;" d="M372,384.204c-3.86,0-7.492,0.932-10.728,2.556l7.148,14.288c1.968,3.936,5.188,3.936,7.156,0 l7.14-14.288C379.492,385.14,375.86,384.204,372,384.204z"/><path style="fill:#CCBB8F;" d="M332,404c0,8.8-7.2,16-16,16H132c-8.8,0-16-7.2-16-16V156c0-8.8,7.2-16,16-16h184c8.8,0,16,7.2,16,16 V404z"/><path style="fill:#BFAF86;" d="M320,400c0,4.4-3.6,8-8,8H144c-4.4,0-8-3.6-8-8V168c0-4.4,3.6-8,8-8h168c4.4,0,8,3.6,8,8V400z"/><path style="fill:#E6E6E6;" d="M316,396c0,4.4-3.6,8-8,8H140c-4.4,0-8-3.6-8-8V164c0-4.4,3.6-8,8-8h168c4.4,0,8,3.6,8,8V396z"/><g><rect x="152" y="172" style="fill:#B3B3B3;" width="144" height="24"/><rect x="152" y="216" style="fill:#B3B3B3;" width="144" height="8"/><rect x="152" y="232" style="fill:#B3B3B3;" width="144" height="8"/><rect x="152" y="248" style="fill:#B3B3B3;" width="144" height="8"/><rect x="152" y="264" style="fill:#B3B3B3;" width="144" height="8"/><rect x="152" y="280" style="fill:#B3B3B3;" width="144" height="8"/><rect x="152" y="296" style="fill:#B3B3B3;" width="144" height="8"/><rect x="152" y="312" style="fill:#B3B3B3;" width="144" height="8"/></g><path style="fill:#E6E6E6;" d="M272,120c-4,0-16,0-16,0c0-16-12-32-32-32s-32,16-32,32c0,0-12,0-16,0s-8,4-8,8s0,12,0,12h56h56 c0,0,0-8,0-12S276,120,272,120z M224,128c-6.628,0-12-5.372-12-12s5.372-12,12-12s12,5.372,12,12S230.628,128,224,128z"/><g><path style="fill:#CCCCCC;" d="M248,120c0,0,3.908,0,8,0c0-16-12-32-32-32c-1.376,0-2.704,0.088-4,0.236 C237.584,90.216,248,105.1,248,120z"/><path style="fill:#CCCCCC;" d="M272,120c-1.72,0-4.916,0-8,0c4,0,8,4,8,8s0,12,0,12h8c0,0,0-8,0-12S276,120,272,120z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                </svg>
                                                <div class="select-none ml-2">No Salary Leave</div>
                                            </div>
                                            <div class="text-[color:rgba(var(--ni-success-400))]">0/18</div>
                                        </div>
                                    </div>

                                    <!-- leave table -->
                                    <div>
                                        <ul class="grid grid-cols-1 2xl:grid-cols-3 border-b-none 2xl:border-b space-y-2 sm:space-y-5 2xl:space-y-0 shadow-none 2xl:shadow-lg rounded-none 2xl:rounded-t-lg">
                                            <div class="p-5 grid grid-cols-2 text-center bg-white shadow-md 2xl:shadow-none rounded-lg 2xl:rounded-l-lg">
                                                <li class="font-medium text-xs md:text-sm text-[color:rgba(var(--ni-gray-500))]">No.</li>
                                                <li class="font-medium text-xs md:text-sm text-[color:rgba(var(--ni-gray-500))]">Date</li>
                                            </div>
                                            <div class="p-5 grid grid-cols-2 text-center bg-white shadow-md 2xl:shadow-none rounded-lg 2xl:rounded-none">
                                                <li class="font-medium text-xs md:text-sm text-[color:rgba(var(--ni-primary-500))]">Check In</li>
                                                <li class="font-medium text-xs md:text-sm text-[color:rgba(var(--ni-danger-500))]">Check Out</li>
                                            </div>
                                            <div class="p-5 grid grid-cols-2 text-center bg-white shadow-md 2xl:shadow-none rounded-lg 2xl:rounded-r-lg">
                                                <li class="font-medium text-xs md:text-sm text-[color:rgba(var(--ni-primary-500))]">Check In</li>
                                                <li class="font-medium text-xs md:text-sm text-[color:rgba(var(--ni-danger-500))]">Check Out</li>
                                            </div>
                                        </ul>
                                        <ul class="p-4 text-sm hidden 2xl:flex justify-center text-[color:rgba(var(--ni-gray-600))] bg-white shadow-md rounded-b-lg">
                                            <svg class="w-5 h-5 my-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                                            </svg>  
                                            <div class="ml-1">No result</div>
                                        </ul>
                                    </div>
                                </div>

                                <!-- late content -->
                                <div id="late-content" tab-content>
                                    
                                    <!-- late table -->
                                    <div class="mt-2 sm:mt-5">
                                        <ul class="grid grid-cols-1 2xl:grid-cols-3 border-b-none 2xl:border-b space-y-2 sm:space-y-5 2xl:space-y-0 shadow-none 2xl:shadow-lg rounded-none 2xl:rounded-t-lg">
                                            <div class="p-5 grid grid-cols-2 text-center bg-white shadow-md 2xl:shadow-none rounded-lg 2xl:rounded-l-lg">
                                                <li class="font-medium flex justify-center text-xs md:text-sm text-[color:rgba(var(--ni-gray-500))]">
                                                    <svg class="w-3 h-3 my-auto" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 318.965 318.965" style="enable-background:new 0 0 318.965 318.965;" xml:space="preserve"><g><g>
                                                        <path style="fill:#636358;" d="M303.673,253.518c-11.151-37.754-67.121-33.566-91.279-44.408 c-24.157-10.842-20.386-47.219-23.449-53.548h-58.932c-3.058,6.329,0.714,42.711-23.449,53.548 c-24.157,10.842-80.133,6.655-91.279,44.408c-6.149,20.824-5.857,27.193-7.554,50.26c0,0,76.8,15.187,150.014,15.187 s153.488-15.187,153.488-15.187C309.53,280.705,309.822,274.342,303.673,253.518z"/><path style="fill:#515147;" d="M303.673,253.518c-11.151-37.754-67.121-33.566-91.279-44.408 c-24.157-10.842-20.386-47.219-23.449-53.548H157.74c0,0-0.719,51.024,23.438,61.866s80.133,6.655,91.279,44.408 c5.857,19.83,5.868,26.552,7.324,47.073c19.234-2.816,31.442-5.126,31.442-5.126C309.53,280.705,309.822,274.342,303.673,253.518z "/><g><path style="fill:#EAEAE1;" d="M174.748,318.7c10.348-26.67,24.163-73.95,26.366-119.466h-83.427 c2.203,45.572,16.058,92.909,26.423,119.562c4.541,0.112,9.094,0.169,13.636,0.169 C163.383,318.964,169.065,318.863,174.748,318.7z"/><g><polygon style="fill:#C6C5AF;" points="196.91,216.225 176.108,236.122 171.19,205.743 				"/><polygon style="fill:#C6C5AF;" points="121.009,216.225 142.817,236.122 146.796,205.518 				"/><polygon style="fill:#C6C5AF;" points="172.005,205.518 146.796,205.518 144.885,211.7 173.961,211.869 				"/><polygon style="fill:#AAA88F;" points="146.796,205.518 144.885,211.7 145.987,212.42 				"/><polygon style="fill:#AAA88F;" points="173.961,211.869 171.19,205.743 172.331,212.802 				"/><path style="fill:#4C4C4C;" d="M173.433,318.739l0.579-7.987l-6.081-80.51h-16.024l-7.099,80.515l0.585,8.066 c4.12,0.084,8.24,0.141,12.354,0.141C162.95,318.964,168.188,318.88,173.433,318.739z"/><polygon style="fill:#3A3A38;" points="151.967,230.597 167.93,230.237 168.256,234.734 				"/><polygon style="fill:#4C4C4C;" points="140.541,208.182 178.255,208.159 176.108,221.031 167.593,230.597 151.967,230.597  142.693,221.031 				"/><path style="fill:#EAEAE1;" d="M146.796,205.518l-25.72-13.984c0,0-3.389,4.817-11.843,16.21l31.723,22.853l2.704-14.923 L146.796,205.518z"/><path style="fill:#EAEAE1;" d="M171.122,205.518l25.72-13.984c0,0,3.389,4.817,11.843,16.21l-31.723,22.853l-2.704-14.923 L171.122,205.518z"/><path style="fill:#E0DBD3;" d="M196.842,191.534l-25.72,13.984l1.776,5.772c2.372,2.602,5.109,4.716,8.279,6.138 c2.799,1.253,6.02,2.31,9.549,3.249l17.947-12.927C200.232,196.351,196.842,191.534,196.842,191.534z"/></g><g><path style="fill:#515147;" d="M233.292,250.73l-15.333-5.559l13.776-3.794l-13.13-29.969l-40.749,107.208 c4.778-0.163,9.549-0.377,14.293-0.635L233.292,250.73z"/><path style="fill:#515147;" d="M86.189,241.372l13.776,3.794l-15.333,5.559l41.216,67.369c4.716,0.247,9.471,0.444,14.237,0.59 L99.24,211.734L86.189,241.372z"/></g><g><path style="fill:#72726A;" d="M228.981,251.562l-14.833-6.239l13.461-4.783l-9.004-29.137l-16.907-13.147l-32.111,120.579 c6.97-0.146,13.962-0.41,20.903-0.776L228.981,251.562z"/><path style="fill:#636358;" d="M201.693,198.256l-6.278,23.567c8.538,1.945,18.385,3.507,28.171,5.711l-4.985-16.131 L201.693,198.256z"/><path style="fill:#72726A;" d="M99.235,211.74l-8.926,28.806l13.461,4.783l-14.833,6.239l38.563,66.621 c6.902,0.343,13.877,0.585,20.847,0.703L116.22,198.267L99.235,211.74z"/></g></g><g><ellipse transform="matrix(-0.177 0.9842 -0.9842 -0.177 385.6561 -85.3711)" style="fill:#CCA483;" cx="228.522" cy="118.558" rx="21.386" ry="11.629"/><ellipse transform="matrix(-0.9842 0.177 -0.177 -0.9842 200.0903 219.2807)" style="fill:#DBB491;" cx="90.265" cy="118.565" rx="11.629" ry="21.386"/><path style="fill:#DBB491;" d="M223.641,47.365H159.42H95.233c0,0-35.989,146.614,64.187,160.806 C259.636,193.979,223.641,47.365,223.641,47.365z"/><path style="fill:#CCA483;" d="M159.42,208.171c100.216-14.192,64.221-160.806,64.221-160.806h-15.024 c4.114,61.242,9.808,93.774-13.815,129.24C176.085,204.708,159.42,208.171,159.42,208.171z"/><path style="fill:#393C3D;" d="M187.838,5.48c0,0-19.824-9.33-46.477-3.642c-19.953,4.26-52.423,17.829-59.73,46.893 c0,0-10.932,47.483,7.683,67.931c0,0-0.916-18.548,0.956-33.313c0,0,11.174,4.946,33.69,4.659 c30.188-0.382,59.444-12.776,68.442-26.355c0,0-1.034,19.532-10.876,27.502c0,0,34.522-5.396,44.729-25.883 c0,0,3.417,17.935,3.417,51.159c0,0,5.39-7.509,6.649-19.605c2.855-27.44-2.333-65.334-22.876-64.069 C213.446,30.756,204.745,13.49,187.838,5.48z"/><path style="fill:#CCA483;" d="M181.526,89.154c9.836-7.976,10.876-27.502,10.876-27.502 c-8.999,13.574-38.248,25.967-68.442,26.355c-21.763,0.275-32.931-4.333-33.651-4.643c1.433,0.613,44.156,18.554,91.672-3.884 c0,0-2.58,9.527-8.139,12.804c0,0,43.869-0.793,52.418-29.008C216.054,83.758,181.526,89.154,181.526,89.154z"/></g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                                    </svg>
                                                    <div class="ml-2">Employee</div>
                                                </li>
                                                <li class="font-medium text-xs md:text-sm text-[color:rgba(var(--ni-gray-500))]">Date</li>
                                            </div>
                                            <div class="p-5 grid grid-cols-2 text-center bg-white shadow-md 2xl:shadow-none rounded-lg 2xl:rounded-none">
                                                <li class="font-medium text-xs md:text-sm text-[color:rgba(var(--ni-primary-500))]">Type</li>
                                                <li class="font-medium text-xs md:text-sm text-[color:rgba(var(--ni-danger-500))]">Shift</li>
                                            </div>
                                            <div class="p-5 grid grid-cols-1 text-center bg-white shadow-md 2xl:shadow-none rounded-lg 2xl:rounded-r-lg">
                                                <li class="font-medium flex justify-center text-xs md:text-sm text-[color:rgba(var(--ni-primary-500))]">
                                                    <svg class="w-3 h-3 my-auto" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><g id="XMLID_839_"><polygon id="XMLID_840_" style="fill:#FFE98F;" points="50,175 50,145 150,145 150,115 50,115 50,85 150,85 150,0 0,0 0,300  150,300 150,175 	"/><polygon id="XMLID_841_" style="fill:#FFDA44;" points="150,0 150,85 250,85 250,115 150,115 150,145 250,145 250,175 150,175  150,300 250,210 300,249.999 300,0 	"/><polygon id="XMLID_842_" style="fill:#FF9811;" points="150,300 300,249.999 250,210 	"/><polygon id="XMLID_843_" style="fill:#FFFFFF;" points="50,115 150,115 250,115 250,85 150,85 50,85 	"/><polygon id="XMLID_844_" style="fill:#FFFFFF;" points="50,175 150,175 250,175 250,145 150,145 50,145 	"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                                                    <div class="ml-2">Reason</div>
                                                </li>
                                            </div>
                                        </ul>
                                        <ul class="p-4 text-xs md:text-sm hidden 2xl:flex justify-center text-[color:rgba(var(--ni-gray-600))] bg-white shadow-md rounded-b-lg">
                                            <svg class="w-5 h-5 my-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                                            </svg>  
                                            <div class="ml-1">No result</div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

@endsection

@section('internalScript')

<script>

    // Profile Card with details funtion
    const profileCardWithDetails = () => {

        // tab
        const tab         = $("#tabs li");
        const defaultTab  = $("#tabs li:first-child");
        const active      = ("bg-gradient-to-r from-[color:rgba(var(--ni-danger-300))] to-[color:rgba(var(--ni-danger-400))] text-white");

        // content titles & contents
        const contentTitle    = $("#content-title");
        const eachContent = $("#tab-contents [tab-content]");

        // tab contents
        const educationContent = $("#tab-contents #education-content");
        const trainingContent  = $("#tab-contents #training-content")
        const leaveContent     = $("#tab-contents #leave-content");
        const lateContent      = $("#tab-contents #late-content");

        // progress bars
        const webDesignProgressBar = $("#web-design-progress-bar");
        const UXUIProgressBar = $("#ux-ui-progress-bar");
        const mobileTemplateProgressBar = $("#mobile-template-progress-bar");
        const backendAPIProgressBar = $("#backend-api-progress-bar");

        // titles
        const title = {
            
            defaultTitle : (`
                            <div class="my-auto">
                                <svg class="w-4 h-4" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><circle style="fill:#FAA85F;" cx="256" cy="256" r="232.727"/>
                                    <path style="fill:#FAA85F;" d="M256,512C114.839,512,0,397.161,0,256S114.839,0,256,0s256,114.839,256,256S397.161,512,256,512z M256,23.273C127.674,23.273,23.273,127.674,23.273,256S127.674,488.727,256,488.727S488.727,384.326,488.727,256S384.326,23.273,256,23.273z"/><circle style="fill:#FAA85F;" cx="256" cy="256" r="209.455"/><g><circle style="fill:#FFFFFF;" cx="256" cy="162.909" r="34.909"/><path style="fill:#FFFFFF;" d="M221.091,267.636v93.091c0,12.858,10.415,23.273,23.273,23.273h46.545V244.364c0-12.858-10.415-23.273-23.273-23.273h-46.545h-23.273v23.273C197.818,257.222,208.233,267.636,221.091,267.636L221.091,267.636"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                </svg>
                            </div>
                            <div class="text-md sm:text-xl font-medium text-[color:rgba(var(--ni-gray-600))] ml-2">Information</div>
            `),

            educationTitle : (`
                            <div class="my-auto">
                                <svg class="w-4 h-4" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 491.52 491.52" style="enable-background:new 0 0 491.52 491.52;" xml:space="preserve"><rect x="167.501" y="258.918" style="fill:#F6C358;" width="156.518" height="100.511"/><polygon style="fill:#E1E6E9;" points="323.859,318.286 245.759,358.306 167.66,318.286 150.148,325.113 241.794,469.681 245.76,469.681 249.726,469.681 341.371,325.113 "/><polygon style="fill:#64798A;" points="87.656,349.475 211.427,469.681 241.794,469.681 150.148,325.113 "/><path style="fill:#3A556A;" d="M68.35,357.002c-21.252,8.847-37.93,26.045-46.12,47.558L0,469.681h211.427L87.656,349.475L68.35,357.002z"/><polygon style="fill:#EBF0F3;" points="167.66,318.286 241.794,356.213 197.954,400.525 150.148,325.113 "/><polygon style="fill:#64798A;" points="403.863,349.475 280.091,469.681 249.726,469.681 341.371,325.113 "/>
                                    <path style="fill:#3A556A;" d="M423.17,357.002c21.252,8.847,37.93,26.045,46.118,47.558l22.231,65.12H280.091l123.771-120.206L423.17,357.002z"/><polygon style="fill:#EBF0F3;" points="323.859,318.286 249.726,356.213 293.566,400.525 341.371,325.113 "/><g><ellipse transform="matrix(-0.9437 -0.3308 0.3308 -0.9437 619.6207 482.0863)" style="fill:#F6C358;" cx="350.836" cy="188.313" rx="21.893" ry="35.656"/><ellipse transform="matrix(-0.3308 -0.9437 0.9437 -0.3308 9.5106 383.3617)" style="fill:#F6C358;" cx="140.677" cy="188.309" rx="35.656" ry="21.893"/></g><path style="fill:#FCD462;" d="M349.925,183.027c0,71.855-46.636,151.612-104.165,151.612c-57.529,0-104.165-79.758-104.165-151.612S188.231,74.431,245.76,74.431C303.289,74.431,349.925,111.172,349.925,183.027z"/><path style="fill:#64798A;" d="M245.75,44.65c-55.001,0-100.412,41.056-107.259,94.194c-1.044,8.104,3.418,15.905,10.92,19.142c32.665,14.097,64.129,25.536,92.784,30.76c2.122,0.387,4.292,0.38,6.412-0.012c29.492-5.439,60.867-16.092,93.647-30.633c7.417-3.289,11.801-11.032,10.778-19.079C346.263,85.798,300.812,44.65,245.75,44.65z"/><path style="fill:#2F4859;" d="M413.877,74.004L246.723,26.028c-0.629-0.181-1.297-0.181-1.928,0L77.643,74.004c-3.374,0.968-3.374,5.748,0,6.716l167.152,47.977c0.631,0.18,1.299,0.18,1.928,0L413.877,80.72C417.25,79.753,417.25,74.972,413.877,74.004z"/><path style="fill:#3A556A;" d="M413.877,69.95L246.723,21.974c-0.629-0.18-1.297-0.18-1.928,0L77.643,69.95c-3.374,0.969-3.374,5.749,0,6.718l167.152,47.976c0.631,0.18,1.299,0.18,1.928,0l167.154-47.976C417.25,75.699,417.25,70.919,413.877,69.95z"/><path style="fill:#E56353;" d="M169.984,173.81c-3.43,0-6.206-2.776-6.206-6.206V103.17c0-2.557,1.57-4.86,3.957-5.782l73.918-28.718c3.181-1.249,6.794,0.339,8.029,3.533c1.243,3.194-0.339,6.794-3.533,8.036l-69.962,27.179v60.187C176.188,171.034,173.414,173.81,169.984,173.81z"/><ellipse style="fill:#2F4859;" cx="245.76" cy="73.308" rx="15.99" ry="10.342"/><polygon style="fill:#E56353;" points="192.809,232.861 147.155,232.861 160.18,161.621 179.783,161.621 "/><circle style="fill:#D15241;" cx="169.984" cy="157.957" r="16.251"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                </svg>
                            </div>
                            <div class="text-md sm:text-xl font-medium text-[color:rgba(var(--ni-gray-600))] ml-2">Education</div>
            `),

            trainingTitle : (`
                            <div class="my-auto">
                                <svg class="w-4 h-4" viewBox="0 0 2050 2050" data-name="Layer 2" id="Layer_2" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:#46a1f8;}.cls-2{fill:#3084d6;}.cls-3{fill:#c8c2e9;}.cls-4{fill:#231f20;opacity:0.2;}.cls-5{fill:#f4c23f;}.cls-6{fill:#4d4c78;}.cls-7{fill:#323150;}.cls-8{fill:#f8881b;}.cls-9{fill:#67baeb;}.cls-10{fill:#fad564;}.cls-11{fill:#dfdafd;}</style></defs><title/><polygon class="cls-1" points="136.2 1621.8 241.6 1443.7 1836.3 1452.8 1913.8 1621.8 136.2 1621.8"/><path class="cls-2" d="M745.1,1446.6l-503.5-2.9-41.9,70.8c78-5.7,430.6-23.3,629.6,107.3H983C938.5,1575.6,859,1504.5,745.1,1446.6Z"/><path class="cls-2" d="M1220.7,1621.8c219.1-143.8,624.7-108,644.4-106.1l-28.8-62.9-537.5-3.1c-110.7,57.4-188.2,126.7-231.8,172.1Z"/><polygon class="cls-3" points="707.1 905.3 241.6 1305.1 1025 1621.8 1025 988.7 707.1 905.3"/><polygon class="cls-3" points="1342.9 905.3 1025 988.7 1025 1621.8 1808.4 1305.1 1342.9 905.3"/><polygon class="cls-4" points="1067 977.7 1027.5 988.1 1025 1626 1155.2 1569.1 1067 977.7"/><polygon class="cls-4" points="1005 983.5 1025 988.7 1025 1621.8 894.8 1569.1 1005 983.5"/><path class="cls-5" d="M1300.3,699.1c0-152.9-124.7-276.7-277.9-275.3S748,550.5,749.7,702.4a274.2,274.2,0,0,0,70.7,180.9c56.3,62.5,88.2,143.2,88.2,227.4v.5h232.8v-.5a336.4,336.4,0,0,1,87.3-226.4A274.3,274.3,0,0,0,1300.3,699.1Z"/><path class="cls-6" d="M907.9,1110.7h234.1a0,0,0,0,1,0,0v98.6A117.1,117.1,0,0,1,1025,1326.3h0a117.1,117.1,0,0,1-117.1-117.1v-98.6a0,0,0,0,1,0,0Z"/><polygon class="cls-7" points="1142.1 1193.5 1142.1 1193.5 1142.1 1153.5 1142.1 1153.5 907.9 1153.5 907.9 1193.5 1142.1 1193.5"/><path class="cls-8" d="M1025,321a20,20,0,0,1-20-20V191a20,20,0,0,1,40,0V301A20,20,0,0,1,1025,321Z"/><path class="cls-8" d="M746,436.6a20.2,20.2,0,0,1-14.2-5.9L654.1,353a20,20,0,0,1,28.3-28.3l77.7,77.8A20,20,0,0,1,746,436.6Z"/><path class="cls-8" d="M1304,436.6a20.2,20.2,0,0,0,14.2-5.9l77.7-77.7a20,20,0,0,0-28.3-28.3l-77.7,77.8a20,20,0,0,0,14.1,34.1Z"/><path class="cls-8" d="M630.4,715.6h-110a20,20,0,0,1,0-40h110a20,20,0,0,1,0,40Z"/>
                                    <path class="cls-8" d="M1529.6,715.6h-110a20,20,0,0,1,0-40h110a20,20,0,0,1,0,40Z"/><rect class="cls-7" height="76.21" width="273" x="888.5" y="1621.8"/><rect class="cls-9" height="76.21" width="752.4" x="136.2" y="1621.8"/><rect class="cls-9" height="76.21" transform="translate(3075.3 3319.8) rotate(-180)" width="752.4" x="1161.5" y="1621.8"/><path class="cls-6" d="M1025,1621.8s-266-364-783.4-316.7l-57.5,162.4s505.9-49.9,704.4,154.3Z"/><path class="cls-6" d="M1025,1621.8s266-364,783.4-316.7l57.5,162.4s-505.9-49.9-704.4,154.3Z"/><path class="cls-10" d="M1022.4,423.8c-96,.9-180.2,51.3-228.8,126.6,7.3,214,174.3,387.5,385.6,405.1a330.4,330.4,0,0,1,49.5-71.2,274.3,274.3,0,0,0,71.6-185.2C1300.3,546.2,1175.6,422.4,1022.4,423.8Z"/><rect class="cls-11" height="208.31" rx="32.6" ry="32.6" transform="translate(-290.7 1421.9) rotate(-48.4)" width="65.1" x="1404" y="930.2"/>
                                </svg>
                            </div>
                            <div class="text-md sm:text-xl font-medium text-[color:rgba(var(--ni-gray-600))] ml-2">Training</div>
            `),
        
            leaveTitle : (`
                            <div class="my-auto">
                                <svg class="w-4 h-4" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 280.028 280.028" style="enable-background:new 0 0 280.028 280.028;" xml:space="preserve"><g>
                                    <path style="fill:#E4E7E7;" d="M17.502,0h245.024c9.661,0,17.502,7.832,17.502,17.502v245.024c0,9.661-7.841,17.502-17.502,17.502 H17.502C7.841,280.027,0,272.187,0,262.526V17.502C0,7.832,7.841,0,17.502,0z"/><path style="fill:#E2574C;" d="M262.526,0H17.502C7.841,0,0,7.832,0,17.502v43.754h280.027V17.502 C280.027,7.832,272.187,0,262.526,0z"/><path style="fill:#324D5B;" d="M189.701,148.292c-3.08,0-6.283,0.534-8.795,1.575l-0.28-0.263 c4.603-6.143,13.678-14.518,19.261-20.923c1.671-1.969,2.932-3.535,2.932-5.364c0-4.708-6.012-9.547-9.906-9.547 c-1.129,0-2.66,0-4.192,0.919c-1.671,1.05-3.352,2.091-4.472,3.133c-14.098,12.295-35.458,40.035-35.458,59.777 c0,17.397,13.538,32.439,35.038,32.439c20.652,0,35.03-15.428,35.03-32.439C218.868,162.153,206.45,148.292,189.701,148.292z  M183.838,191.189c-8.375,0-13.266-6.274-13.266-13.608c0-7.71,5.303-13.59,13.266-13.59c8.795,0,13.266,6.668,13.266,13.59 C197.095,185.177,191.784,191.189,183.838,191.189z M120,192.423H93.547c12.286-14.229,34.697-32.597,34.697-51.07 c0-16.898-14.308-27.67-32.089-27.67s-33.971,13.433-33.971,30.19c0,5.18,3.605,9.705,10.545,9.705 c13.879,0,5.933-21.545,22.56-21.545c5.924,0,10.405,4.787,10.405,10.238c0,4.787-2.459,8.908-5.058,12.374 c-10.991,14.631-24.004,26.594-36.001,39.764c-1.444,1.601-3.325,3.99-3.325,6.782c0,6.126,4.918,8.777,11.28,8.777h48.287 c5.487,0,10.405-2.652,10.405-8.777C131.28,195.074,126.354,192.423,120,192.423z"/><path style="fill:#BF392C;" d="M0,52.505h280.027v17.502H0V52.505z"/><path style="fill:#BF392C;" d="M140.014,17.502c4.839,0,8.751,3.92,8.751,8.751s-3.912,8.751-8.751,8.751s-8.751-3.92-8.751-8.751 S135.174,17.502,140.014,17.502z"/><path style="fill:#C2C5C5;" d="M262.526,262.526H17.502C7.841,262.526,0,254.685,0,245.024v17.502 c0,9.661,7.841,17.502,17.502,17.502h245.024c9.661,0,17.502-7.841,17.502-17.502v-17.502 C280.027,254.685,272.187,262.526,262.526,262.526z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                </svg>
                            </div>
                            <div class="text-md sm:text-xl font-medium text-[color:rgba(var(--ni-gray-600))] ml-2">Leave</div>
            `),
        
            lateTitle : (`
                            <div class="my-auto">
                                <svg class="w-4 h-4" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 393.568 393.568" style="enable-background:new 0 0 393.568 393.568;" xml:space="preserve"><circle style="fill:#6EB1E1;" cx="196.784" cy="196.784" r="196.784"/><circle style="fill:#FCFCFD;" cx="196.784" cy="196.784" r="161.164"/><g>
                                    <path style="fill:#4F5565;" d="M206.804,79.321c-2.586-2.586-6.077-4.137-10.02-4.137c-7.887,0-14.158,6.271-14.158,14.158v78.739c4.267-2.133,9.051-3.297,14.158-3.297c5.107,0,9.891,1.164,14.158,3.297V89.341C210.941,85.463,209.39,81.907,206.804,79.321z"/><path style="fill:#4F5565;" d="M164.784,196.784c0-5.107,1.164-9.891,3.297-14.158h-59.345c-7.37,0-13.123,5.754-13.123,13.123v2.392c0,7.305,5.754,13.123,13.123,13.123h59.475C166.077,206.869,164.784,201.956,164.784,196.784z"/></g><g><rect x="190.513" y="43.766" style="fill:#646B79;" width="12.865" height="17.584"/><rect x="190.513" y="332.218" style="fill:#646B79;" width="12.865" height="17.584"/><rect x="332.218" y="190.513" style="fill:#646B79;" width="17.584" height="12.865"/><rect x="43.766" y="190.513" style="fill:#646B79;" width="17.584" height="12.865"/><circle style="fill:#646B79;" cx="196.784" cy="196.784" r="31.935"/></g><circle style="fill:#F0582F;" cx="196.784" cy="196.784" r="14.158"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                </svg>
                            </div>
                            <div class="text-md sm:text-xl font-medium text-[color:rgba(var(--ni-gray-600))] ml-2">Late</div>
            `)
        }

        // default title
        contentTitle.append(title.defaultTitle);
        
        // add active color to default tab
        defaultTab.addClass(active);

        // hidden all tab contents
        eachContent.each(function(i) {
            $(this).addClass("hidden");
        });

        // make education content default by remove class hidden
        educationContent.fadeIn(500);

        // onclick add class active
        tab.each(function() {
            $(this).click(function() {

                tab.removeClass(active);
                $(this).addClass(active); 

            });
        });

        // onclick change contents
        tab.each(function(i, element) {
            $(this).click(function() {

                if ( i == 0 ) {          // education tab
                    
                    contentTitle.html(title.educationTitle);

                    trainingContent.addClass("hidden");
                    trainingContent.css("display", "none");

                    leaveContent.addClass("hidden");
                    leaveContent.css("display", "none");

                    lateContent.addClass("hidden");
                    lateContent.css("display", "none");

                    educationContent.fadeIn();

                    // onclick education tab => reload all progress bars
                    $(document).ready(() => {

                        // reload web design progress bar
                        webDesignProgressBar.removeClass("w-[80%]");
                        webDesignProgressBar.removeClass("duration-1000");

                        setTimeout(() => {
                            webDesignProgressBar.addClass("w-[80%]");
                            webDesignProgressBar.addClass("duration-1000");
                        }, 300);

                        // reload ux/ui progress bar   
                        UXUIProgressBar.removeClass("w-[50%]");
                        UXUIProgressBar.removeClass("duration-1000");

                        setTimeout(() => {
                            UXUIProgressBar.addClass("w-[50%]");
                            UXUIProgressBar.addClass("duration-1000");
                        }, 300);

                        // reload mobile template progress bar
                        mobileTemplateProgressBar.removeClass("w-[2%]");
                        mobileTemplateProgressBar.removeClass("duration-1000");

                        setTimeout(() => {
                            mobileTemplateProgressBar.addClass("w-[2%]");
                            mobileTemplateProgressBar.addClass("duration-1000");
                        }, 300);

                        // reload backend api progress bar
                        backendAPIProgressBar.removeClass("w-[3%]");
                        backendAPIProgressBar.removeClass("duration-1000");

                        setTimeout(() => {
                            backendAPIProgressBar.addClass("w-[3%]");
                            backendAPIProgressBar.addClass("duration-1000");
                        }, 300);

                    });

                }

                if ( i == 1 ) {         // training content

                    contentTitle.html(title.trainingTitle);

                    educationContent.addClass("hidden");
                    educationContent.css("display", "none");

                    leaveContent.addClass("hidden");
                    leaveContent.css("display", "none");

                    lateContent.addClass("hidden");
                    lateContent.css("display", "none");

                    trainingContent.fadeIn();

                }

                if ( i == 2 ) {         // leave tab

                    contentTitle.html(title.leaveTitle);

                    educationContent.addClass("hidden");
                    educationContent.css("display", "none");

                    trainingContent.addClass("hidden");
                    trainingContent.css("display", "none");

                    lateContent.addClass("hidden");
                    lateContent.css("display", "none");

                    leaveContent.fadeIn();

                }
                
                if ( i == 3 ) {         // late tab

                    contentTitle.html(title.lateTitle);

                    educationContent.addClass("hidden");
                    educationContent.css("display", "none");

                    trainingContent.addClass("hidden");
                    trainingContent.css("display", "none");

                    leaveContent.addClass("hidden");
                    leaveContent.css("display", "none");

                    lateContent.fadeIn();

                }

            });
        });

        // progress bars
        $(document).ready(() => {

            // web design progress bar
            webDesignProgressBar.addClass("w-[80%]");

            // ux/ui progress bar   
            UXUIProgressBar.addClass("w-[50%]");

            // mobile template progress bar
            mobileTemplateProgressBar.addClass("w-[2%]");

            // backend api progress bar
            backendAPIProgressBar.addClass("w-[3%]");

        });

    }

    // call function
    profileCardWithDetails();

</script>

@endsection
