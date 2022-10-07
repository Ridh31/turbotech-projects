@extends('master')
@section('content')

<div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div>

<!-- Design Sample Pricing with Rounded and Shadow card page -->

<!-- main -->
<div class="mainCard">

    <!-- container -->
    <div class="cardContainer px-5 sm:px-5 md:px-10 lg:px-10 py-5 bg-[color:rgba(var(--ni-gray-100))]">
        <!-- Pricing title -->
        <div class="col-span-1 w-full text-center">
            <div class="container p-5 mx-auto items-center">
                <div class="w-full mx-auto">
                    <h1 class="font-bold text-4xl text-[color:rgba(var(--ni-gray-600))]">Sample Pricing with Rounded and Shadow card page</h1>
                    <p class="font-bold py-3">We are an industry-leading company that values honesty, integrity, and efficiency. Building quality products and caring.</p>
                    <p class="pb-5">You can start with our Free Plan to see if this service can meet all your needs.</p>
                </div>
                <div class="w-40 p-0.5 bg-[color:rgba(var(--ni-primary-300))] mx-auto rounded-lg"></div>
            </div>
        </div>

        <!-- pricing cards -->
        <ul class="cardContainer grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 select-none mt-0">

            <!-- "personal" pricing card -->
            <li class="eachCard col-span-1 w-auto border border-[color:rgba(var(--ni-gray-200))] rounded-xl shadow-lg transform transition duration-500 hover:scale-105">
                <div class="w-full mx-auto px-3">

                    <!-- title -->
                    <div class="mt-3">
                        <h1 class="text-2xl text-[color:rgba(var(--ni-gray-600))]">Personal</h1>
                    </div>

                    <!-- small title -->
                    <div class="flex w-full mt-1">
                        <h1 class="font-bold text-sm text-[color:rgba(var(--ni-gray-400))] py-1">Freemium</h1>
                    </div>

                    <!-- price -->
                    <div class="mt-5 flex">
                        <span class="text-lg">$</span>
                        <h1 class="text-4xl font-bold text-[color:rgba(var(--ni-gray-400))]">0</h1>
                        <span class="mt-5">/month</span>
                    </div>

                    <!-- price title -->
                    <div class="mt-2">
                        <div class="flex">
                            <p class="text-sm text-[color:rgba(var(--ni-gray-400))] mr-2">For up to 10 users</p>
                            <svg class="w-5 h-5 text-[color:rgba(var(--ni-gray-600))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- button -->
                    <div class="mt-5 mb-3">
                        <button class="w-full mt-5 p-2 rounded-lg border border-[color:rgba(var(--ni-gray-500))] hover:border-[color:rgba(var(--ni-gray-400))] bg-[color:rgba(var(--ni-gray-500))] hover:bg-[color:rgba(var(--ni-gray-400))] text-white duration-500">Create a Free Account</button>
                    </div>

                    <!-- details -->
                    <div class="divide-y divide-[color:rgba(var(--ni-gray-300))]">
                        <!-- feature 1 -->
                        <div class="py-3">
                            <div class="flex my-auto py-1">
                                 <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))] fill-[color:rgba(var(--ni-primary-400))]" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-point" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="4"></circle>
                                 </svg>
                                <div class="flex text-sm ml-3 my-auto">
                                    <h3 class="font-bold">250</h3>
                                    <p class="ml-1 text-[color:rgba(var(--ni-gray-500))]">Conversations P/M</p>
                                </div>
                            </div>
                            <div class="flex my-auto py-1">
                                <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))] fill-[color:rgba(var(--ni-primary-400))]" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-point" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="4"></circle>
                                 </svg>
                                 <div class="flex text-sm ml-3 my-auto">
                                    <h3 class="font-bold">2</h3>
                                    <p class="ml-1 text-[color:rgba(var(--ni-gray-500))]">Voice Channels</p>
                                </div>
                            </div>
                            <div class="flex my-auto py-1">
                                <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))] fill-[color:rgba(var(--ni-primary-400))]" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-point" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="4"></circle>
                                 </svg>
                                 <div class="flex text-sm ml-3 my-auto">
                                    <h3 class="font-bold">1 GB</h3>
                                    <p class="ml-1 text-[color:rgba(var(--ni-gray-500))]">Data Storage</p>
                                </div>
                            </div>
                        </div>

                        <!-- feature 2 -->
                        <div class="py-3">
                            <div class="flex my-auto py-1">
                                <svg class="w-6 h-6 text-[color:rgba(var(--ni-greengray-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                <div class="flex text-sm ml-3 my-auto">
                                    <p class="text-[color:rgba(var(--ni-gray-500))]">Chat Widget</p>
                                </div>
                            </div>
                            <div class="flex my-auto py-1">
                                <svg class="w-6 h-6 text-[color:rgba(var(--ni-greengray-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                <div class="flex text-sm ml-3 my-auto">
                                    <p class="text-[color:rgba(var(--ni-gray-500))]">Realtime Overview</p>
                                </div>
                            </div>
                            <div class="flex my-auto pt-1">
                                <svg class="w-6 h-6 text-[color:rgba(var(--ni-greengray-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                <div class="flex text-sm ml-3 my-auto">
                                    <p class="text-[color:rgba(var(--ni-gray-500))]">Special Academy</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <!-- "essentials" pricing card -->
            <li class="eachCard col-span-1 w-auto border border-[color:rgba(var(--ni-gray-200))] rounded-xl shadow-lg transform transition duration-500 hover:scale-105">
                <div class="w-full mx-auto px-3">

                    <!-- title -->
                    <div class="mt-3 flex w-full">
                        <h1 class="text-2xl text-[color:rgba(var(--ni-gray-600))]">Essentials</h1>
                        <span class="flex ml-2 my-auto py-0.5 px-1 border border-[color:rgba(var(--ni-danger-400))] bg-[color:rgba(var(--ni-danger-400))] animate-bounce rounded-xl">       
                            <svg class="w-4 h-4 mr-1 text-[color:rgba(var(--ni-yellow-300))] fill-[color:rgba(var(--ni-yellow-300))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                            </svg>
                            <span class="text-white my-auto text-des">Popular</span>
                        </span>
                    </div>

                    <!-- small title -->
                    <div class="flex w-full mt-1">
                        <h1 class="font-bold text-sm text-[color:rgba(var(--ni-gray-400))] py-1">For the basic</h1>
                    </div>

                    <!-- price -->
                    <div class="mt-5 flex">
                        <span class="text-lg">$</span>
                        <h1 class="text-4xl font-bold text-[color:rgba(var(--ni-yellow-400))]">49</h1>
                        <span class="mt-5">/month</span>
                    </div>

                    <!-- price title -->
                    <div class="mt-2">
                        <div class="flex">
                            <p class="text-sm text-[color:rgba(var(--ni-gray-400))] mr-2">For up to 50 users</p>
                            <svg class="w-5 h-5 text-[color:rgba(var(--ni-primary-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- button -->
                    <div class="mt-5 mb-3">
                        <button class="w-full mt-5 p-2 rounded-lg border border-[color:rgba(var(--ni-gray-500))] hover:bg-[color:rgba(var(--ni-gray-500))] text-[color:rgba(var(--ni-gray-500))] hover:text-white duration-500">Request Access</button>
                    </div>

                    <!-- details -->
                    <div class="divide-y divide-[color:rgba(var(--ni-gray-300))]">
                        <!-- feature 1 -->
                        <div class="py-3">
                            <div class="flex my-auto py-1">
                                <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))] fill-[color:rgba(var(--ni-primary-400))]" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-point" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="4"></circle>
                                </svg>
                                <div class="flex text-sm ml-3 my-auto">
                                    <h3 class="font-bold">1000</h3>
                                    <p class="ml-1 text-[color:rgba(var(--ni-gray-500))]">Conversations P/M</p>
                                </div>
                            </div>
                            <div class="flex my-auto py-1">
                                <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))] fill-[color:rgba(var(--ni-primary-400))]" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-point" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="4"></circle>
                                </svg>
                                <div class="flex text-sm ml-3 my-auto">
                                    <h3 class="font-bold">3</h3>
                                    <p class="ml-1 text-[color:rgba(var(--ni-gray-500))]">Voice Channels</p>
                                </div>
                            </div>
                            <div class="flex my-auto py-1">
                                <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))] fill-[color:rgba(var(--ni-primary-400))]" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-point" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="4"></circle>
                                </svg>
                                <div class="flex text-sm ml-3 my-auto">
                                    <h3 class="font-bold">5 GB</h3>
                                    <p class="ml-1 text-[color:rgba(var(--ni-gray-500))]">Data Storage</p>
                                </div>
                            </div>
                        </div>

                        <!-- feature 2 -->
                        <div class="py-3">
                            <div class="flex my-auto py-1">
                                <svg class="w-6 h-6 text-[color:rgba(var(--ni-greengray-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                <div class="flex text-sm ml-3 my-auto">
                                    <p class="text-[color:rgba(var(--ni-gray-500))]">Plus</p>
                                    <h3 class="ml-1 font-bold text-[color:rgba(var(--ni-danger-500))]">Freemium</h3>
                                </div>
                            </div>
                            <div class="flex my-auto py-1">
                                <svg class="w-6 h-6 text-[color:rgba(var(--ni-greengray-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                <div class="flex text-sm ml-3 my-auto">
                                    <p class="text-[color:rgba(var(--ni-gray-500))]">Chat Widget</p>
                                </div>
                            </div>
                            <div class="flex my-auto pt-1">
                                <svg class="w-6 h-6 text-[color:rgba(var(--ni-greengray-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                <div class="flex text-sm ml-3 my-auto">
                                    <p class="text-[color:rgba(var(--ni-gray-500))]">Realtime Overview</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <!-- "team" pricing card -->
            <li class="eachCard col-span-1 w-auto border border-[color:rgba(var(--ni-gray-200))] rounded-xl shadow-lg transform transition duration-500 hover:scale-105">
                <div class="w-full mx-auto px-3">

                    <!-- title -->
                    <div class="mt-3 flex w-full">
                        <h1 class="text-2xl text-[color:rgba(var(--ni-gray-600))]">Team</h1>
                        <span class="flex ml-2 my-auto py-0.5 px-1 border border-[color:rgba(var(--ni-greengray-400))] bg-[color:rgba(var(--ni-greengray-400))] rounded-xl">
                            <svg class="w-4 h-4 mr-1 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                            </svg>
                            <span class="text-white my-auto text-des">Advanced</span>
                        </span>
                    </div>

                    <!-- small title -->
                    <div class="flex w-full mt-1">
                        <h1 class="font-bold text-sm text-[color:rgba(var(--ni-gray-400))] py-1">For the small teams</h1>
                    </div>

                    <!-- price -->
                    <div class="mt-5 flex">
                        <span class="text-lg">$</span>
                        <h1 class="text-4xl font-bold text-[color:rgba(var(--ni-danger-400))]">89</h1>
                        <span class="mt-5">/month</span>
                    </div>

                    <!-- price title -->
                    <div class="mt-2">
                        <div class="flex">
                            <p class="text-sm text-[color:rgba(var(--ni-gray-400))] mr-2">For up to 100 users</p>
                            <svg class="w-5 h-5 text-[color:rgba(var(--ni-indigo-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- button -->
                    <div class="mt-5 mb-3">
                        <button class="w-full mt-5 p-2 rounded-lg border border-[color:rgba(var(--ni-gray-500))] hover:bg-[color:rgba(var(--ni-gray-500))] text-[color:rgba(var(--ni-gray-500))] hover:text-white duration-500">Request Access</button>
                    </div>

                    <!-- details -->
                    <div class="divide-y divide-[color:rgba(var(--ni-gray-300))]">
                        <!-- feature 1 -->
                        <div class="py-3">
                            <div class="flex my-auto py-1">
                                <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))] fill-[color:rgba(var(--ni-primary-400))]" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-point" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="4"></circle>
                                </svg>
                                <div class="flex text-sm ml-3 my-auto">
                                    <h3 class="font-bold">2000</h3>
                                    <p class="ml-1 text-[color:rgba(var(--ni-gray-500))]">Conversations P/M</p>
                                </div>
                            </div>
                            <div class="flex my-auto py-1">
                                <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))] fill-[color:rgba(var(--ni-primary-400))]" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-point" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="4"></circle>
                                </svg>
                                <div class="flex text-sm ml-3 my-auto">
                                    <h3 class="font-bold">5</h3>
                                    <p class="ml-1 text-[color:rgba(var(--ni-gray-500))]">Voice Channels</p>
                                </div>
                            </div>
                            <div class="flex my-auto py-1">
                                <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))] fill-[color:rgba(var(--ni-primary-400))]" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-point" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="4"></circle>
                                </svg>
                                <div class="flex text-sm ml-3 my-auto">
                                    <h3 class="font-bold">25 GB</h3>
                                    <p class="ml-1 text-[color:rgba(var(--ni-gray-500))]">Data Storage</p>
                                </div>
                            </div>
                        </div>

                        <!-- feature 2 -->
                        <div class="py-3">
                            <div class="flex my-auto py-1">
                                <svg class="w-6 h-6 text-[color:rgba(var(--ni-greengray-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                <div class="flex text-sm ml-3 my-auto">
                                    <p class="text-[color:rgba(var(--ni-gray-500))]">Plus</p>
                                    <h3 class="ml-1 font-bold text-[color:rgba(var(--ni-danger-500))]">Essentials</h3>
                                </div>
                            </div>
                            <div class="flex my-auto py-1">
                                <svg class="w-6 h-6 text-[color:rgba(var(--ni-greengray-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                <div class="flex text-sm ml-3 my-auto">
                                    <p class="text-[color:rgba(var(--ni-gray-500))]">Channel Statistics</p>
                                </div>
                            </div>
                            <div class="flex my-auto pt-1">
                                <svg class="w-6 h-6 text-[color:rgba(var(--ni-greengray-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                <div class="flex text-sm ml-3 my-auto">
                                    <p class="text-[color:rgba(var(--ni-gray-500))]">Artificial Intelligence</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <!-- "professional" pricing card -->
            <li class="eachCard col-span-1 w-auto border border-[color:rgba(var(--ni-gray-200))] rounded-xl shadow-lg transform transition duration-500 hover:scale-105">
                <div class="w-full mx-auto px-3">

                    <!-- title -->
                    <div class="mt-3 flex w-full">
                        <h1 class="text-2xl text-[color:rgba(var(--ni-gray-600))]">Professional</h1>
                        <span class="flex ml-2 my-auto py-0.5 px-1 border border-[color:rgba(var(--ni-primary-400))] bg-[color:rgba(var(--ni-primary-400))] rounded-xl">
                            <svg class="w-4 h-4 mr-1 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
                            </svg>
                            <span class="text-white my-auto text-des">Unlimited</span>
                        </span>
                    </div>

                    <!-- small title -->
                    <div class="flex w-full mt-1">
                        <h1 class="font-bold text-sm text-[color:rgba(var(--ni-gray-400))] py-1">For the professionals</h1>
                    </div>

                    <!-- price -->
                    <div class="mt-5 flex">
                        <span class="text-lg">$</span>
                        <h1 class="text-4xl font-bold text-[color:rgba(var(--ni-primary-400))]">129</h1>
                        <span class="mt-5">/month</span>
                    </div>

                    <!-- price title -->
                    <div class="mt-2">
                        <div class="flex">
                            <p class="text-sm text-[color:rgba(var(--ni-gray-400))] mr-2">For organizations</p>
                            <svg class="w-5 h-5 text-[color:rgba(var(--ni-greengray-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- button -->
                    <div class="mt-5 mb-3">
                        <button class="w-full mt-5 p-2 rounded-lg border border-[color:rgba(var(--ni-gray-500))] hover:bg-[color:rgba(var(--ni-gray-500))] text-[color:rgba(var(--ni-gray-500))] hover:text-white duration-500">Request Access</button>
                    </div>

                    <!-- details -->
                    <div class="divide-y divide-[color:rgba(var(--ni-gray-300))]">
                        <!-- feature 1 -->
                        <div class="py-3">
                            <div class="flex my-auto py-1">
                                <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))] fill-[color:rgba(var(--ni-primary-400))]" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-point" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="4"></circle>
                                </svg>
                                <div class="flex text-sm ml-3 my-auto">
                                    <h3 class="font-bold">5000</h3>
                                    <p class="ml-1 text-[color:rgba(var(--ni-gray-500))]">Conversations P/M</p>
                                </div>
                            </div>
                            <div class="flex my-auto py-1">
                                <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))] fill-[color:rgba(var(--ni-primary-400))]" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-point" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="4"></circle>
                                </svg>
                                <div class="flex text-sm ml-3 my-auto">
                                    <h3 class="font-bold">20</h3>
                                    <p class="ml-1 text-[color:rgba(var(--ni-gray-500))]">Voice Channels</p>
                                </div>
                            </div>
                            <div class="flex my-auto py-1">
                                <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))] fill-[color:rgba(var(--ni-primary-400))]" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-point" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="4"></circle>
                                </svg>
                                <div class="flex text-sm ml-3 my-auto">
                                    <h3 class="font-bold">100 GB</h3>
                                    <p class="ml-1 text-[color:rgba(var(--ni-gray-500))]">Data Storage</p>
                                </div>
                            </div>
                        </div>

                        <!-- feature 2 -->
                        <div class="py-3">
                            <div class="flex my-auto py-1">
                                <svg class="w-6 h-6 text-[color:rgba(var(--ni-greengray-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                <div class="flex text-sm ml-3 my-auto">
                                    <p class="text-[color:rgba(var(--ni-gray-500))]">Plus</p>
                                    <h3 class="ml-1 font-bold text-[color:rgba(var(--ni-danger-500))]">Advanced</h3>
                                </div>
                            </div>
                            <div class="flex my-auto py-1">
                                <svg class="w-6 h-6 text-[color:rgba(var(--ni-greengray-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                <div class="flex text-sm ml-3 my-auto">
                                    <p class="text-[color:rgba(var(--ni-gray-500))]">Outbound Webhooks</p>
                                </div>
                            </div>
                            <div class="flex my-auto pt-1">
                                <svg class="w-6 h-6 text-[color:rgba(var(--ni-greengray-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                <div class="flex text-sm ml-3 my-auto">
                                    <p class="text-[color:rgba(var(--ni-gray-500))]">Own Success Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div> 
</div>

@endsection

@section('internalScript')

@endsection
