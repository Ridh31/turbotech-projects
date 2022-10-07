@extends('master')
@section('content')

<div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div>

<!-- Design Sample Pricing with outline card page -->

<!-- main -->
<div class="mainCard">

    <!-- container -->
    <div class="cardContainer px-5 sm:px-5 md:px-10 lg:px-10 py-5 bg-[color:rgba(var(--ni-gray-50))]">
        <!-- Pricing title -->
        <div class="col-span-1 w-full text-center">
            <div class="container p-5 mx-auto items-center">
                <div class="w-full mx-auto">
                    <h1 class="font-bold text-4xl text-[color:rgba(var(--ni-gray-600))]">Sample Pricing with outline card page</h1>
                    <p class="font-bold py-3">We are an industry-leading company that values honesty, integrity, and efficiency. Building quality products and caring.</p>
                    <p class="pb-5">You can start with our Free Plan to see if this service can meet all your needs.</p>
                </div>
                <div class="w-40 p-0.5 bg-[color:rgba(var(--ni-primary-300))] mx-auto rounded-lg"></div>
            </div>
        </div>

        <!-- pricing cards -->
        <ul class="cardContainer grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 select-none mt-0">

            <!-- "personal plan" pricing card -->
            <li class="eachCard col-span-1 w-auto rounded-xl outline outline-2 outline-[color:rgba(var(--ni-gray-400))] transform transition duration-500 hover:scale-105">
                <div class="w-full mx-auto px-3">

                    <!-- personal title -->
                    <div class="flex w-full mt-3">
                        <h1 class="font-bold text-md text-[color:rgba(var(--ni-gray-600))] py-1">Personal Plan</h1>
                    </div>

                    <!-- price -->
                    <div class="mt-3">
                        <h1 class="text-4xl text-[color:rgba(var(--ni-gray-600))]">Free</h1>
                    </div>

                    <!-- descriptions -->
                    <div class="mt-7">
                        <div class="flex">
                            <p class="text-sm text-[color:rgba(var(--ni-gray-400))] mr-2">For up to 10 users</p>
                            <svg class="w-5 h-5 text-[color:rgba(var(--ni-gray-600))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- details -->
                    <div class="mt-8">
                        <h3 class="text-sm font-bold text-black mb-3">GET THE BASIC FREE</h3>  
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-sm ml-3 my-auto">Personal Use Only</p>
                        </div>
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-sm ml-3 my-auto">60 Requests / per hour</p>
                        </div>
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-sm ml-3 my-auto">HTTPS Encryption</p>
                        </div>
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-danger-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-sm ml-3 my-auto">Additional Fields</p>
                        </div>
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-danger-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-sm ml-3 my-auto">Image Processing</p>
                        </div>
                        <div class="flex my-auto pt-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-danger-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-sm ml-3 my-auto">Usage Analytics</p>
                        </div>
                    </div>

                    <!-- button -->
                    <div class="mt-5 mb-3 sm:mb-0">
                        <button class="w-full mt-5 p-2 rounded-lg border border-[color:rgba(var(--ni-gray-500))] hover:bg-[color:rgba(var(--ni-gray-500))] text-[color:rgba(var(--ni-gray-500))] hover:text-white duration-500">Get Start Now</button>
                    </div>
                </div>
            </li>

            <!-- "basic plan" pricing card -->
            <li class="eachCard col-span-1 w-auto rounded-xl outline outline-2 outline-[color:rgba(var(--ni-gray-400))] transform transition duration-500 hover:scale-105">
                <div class="w-full mx-auto p-3">

                    <!-- basic title -->
                    <div class="flex w-full">
                        <h1 class="font-bold text-md text-[color:rgba(var(--ni-gray-600))] py-1">Basic Plan</h1>
                        <span class="flex ml-2 my-auto py-0.5 px-1 border border-[color:rgba(var(--ni-danger-400))] bg-[color:rgba(var(--ni-danger-400))] animate-bounce rounded-xl">
                            <svg class="w-4 h-4 mr-1 text-[color:rgba(var(--ni-yellow-300))] fill-[color:rgba(var(--ni-yellow-300))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                            </svg>
                            <span class="text-white my-auto text-des">Most Popular!</span>
                        </span>
                    </div>

                    <!-- price -->
                    <div class="mt-5 flex">
                        <span class="text-lg">$</span>
                        <h1 class="text-4xl font-bold text-[color:rgba(var(--ni-yellow-400))]">15</h1>
                        <span class="mt-5">/month</span>
                    </div>

                    <!-- descriptions -->
                    <div class="mt-5">
                        <div class="flex">
                            <p class="text-sm text-[color:rgba(var(--ni-gray-400))] mr-2">For up to 50 users</p>
                            <svg class="w-5 h-5 text-[color:rgba(var(--ni-primary-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- details -->
                    <div class="mt-8">
                        <h3 class="text-sm font-bold text-black mb-3">EVERTHING IN BASIC, PLUS</h3>  
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-sm ml-3 my-auto">Personal Use Only</p>
                        </div>
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-sm ml-3 my-auto">200 Requests / per hour</p>
                        </div>
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-sm ml-3 my-auto">HTTPS Encryption</p>
                        </div>
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-sm ml-3 my-auto">Additional Fields</p>
                        </div>
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-danger-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-sm ml-3 my-auto">Image Processing</p>
                        </div>
                        <div class="flex my-auto pt-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-danger-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-sm ml-3 my-auto">Usage Analytics</p>
                        </div>
                    </div>
                    
                    <!-- button -->
                    <div class="mt-5 mb-3 sm:mb-0">
                        <button class="w-full mt-5 p-2 rounded-lg border border-[color:rgba(var(--ni-gray-500))] hover:border-[color:rgba(var(--ni-gray-400))] bg-[color:rgba(var(--ni-gray-500))] hover:bg-[color:rgba(var(--ni-gray-400))] text-white duration-500">Start Free Trial</button>
                    </div>
                </div>
            </li>

            <!-- "pro plan" pricing card -->
            <li class="eachCard col-span-1 w-auto rounded-xl outline outline-2 outline-[color:rgba(var(--ni-gray-400))] transform transition duration-500 hover:scale-105">
                <div class="w-full mx-auto p-3">

                    <!-- pro title -->
                    <div class="flex w-full">
                        <h1 class="font-bold text-md text-[color:rgba(var(--ni-gray-600))] py-1">Pro Plan</h1>
                    </div>

                    <!-- price -->
                    <div class="mt-5 flex">
                        <span class="text-lg">$</span>
                        <h1 class="text-4xl font-bold text-[color:rgba(var(--ni-danger-400))]">38</h1>
                        <span class="mt-5">/month</span>
                    </div>

                    <!-- descriptions -->
                    <div class="mt-5">
                        <div class="flex">
                            <p class="text-sm text-[color:rgba(var(--ni-gray-400))] mr-2">For up to 100 users</p>
                            <svg class="w-5 h-5 text-[color:rgba(var(--ni-indigo-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- details -->
                    <div class="mt-8">
                        <h3 class="text-sm font-bold text-black mb-3">EVERTHING IN PRO, PLUS</h3>  
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-sm ml-3 my-auto">Commercial Use</p>
                        </div>
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-sm ml-3 my-auto">1000 Requests / per hour</p>
                        </div>
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-sm ml-3 my-auto">HTTPS Encryption</p>
                        </div>
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-sm ml-3 my-auto">Additional Fields</p>
                        </div>
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-sm ml-3 my-auto">Image Processing</p>
                        </div>
                        <div class="flex my-auto pt-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-sm ml-3 my-auto">Usage Analytics</p>
                        </div>
                    </div>

                    <!-- button -->
                    <div class="mt-5 mb-3 sm:mb-0">
                        <button class="w-full mt-5 p-2 rounded-lg border border-[color:rgba(var(--ni-gray-500))] hover:bg-[color:rgba(var(--ni-gray-500))] text-[color:rgba(var(--ni-gray-500))] hover:text-white duration-500">Request Access</button>
                    </div>
                </div>
            </li>

            <!-- "enterprise plan" pricing card -->
            <li class="eachCard col-span-1 w-auto rounded-xl outline outline-2 outline-[color:rgba(var(--ni-gray-400))] transform transition duration-500 hover:scale-105">
                <div class="w-full mx-auto p-3">

                    <!-- enterprise title -->
                    <div class="flex w-full">
                        <h1 class="font-bold text-md text-[color:rgba(var(--ni-gray-600))] py-1">Enterprise Plan</h1>
                    </div>

                    <!-- price -->
                    <div class="mt-5 flex">
                        <span class="text-lg">$</span>
                        <h1 class="text-4xl font-bold text-[color:rgba(var(--ni-primary-400))]">119</h1>
                        <span class="mt-5">/month</span>
                    </div>

                    <!-- descriptions -->
                    <div class="mt-5">
                        <div class="flex">
                            <p class="text-sm text-[color:rgba(var(--ni-gray-400))] mr-2">For organizations</p>
                            <svg class="w-5 h-5 text-[color:rgba(var(--ni-greengray-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- details -->
                    <div class="mt-8">
                        <h3 class="text-sm font-bold text-black mb-3">EVERTHING IN ENTERPRISE, PLUS</h3>  
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-sm ml-3 my-auto">Commercial Use</p>
                        </div>
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-sm ml-3 my-auto">100 Requests / per minute</p>
                        </div>
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-sm ml-3 my-auto">HTTPS Encryption</p>
                        </div>
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-sm ml-3 my-auto">Additional Fields</p>
                        </div>
                        <div class="flex my-auto py-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-sm ml-3 my-auto">Image Processing</p>
                        </div>
                        <div class="flex my-auto pt-1">
                            <svg class="w-6 h-6 text-[color:rgba(var(--ni-primary-400))]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-sm ml-3 my-auto">Usage Analytics</p>
                        </div>
                    </div>

                    <!-- button -->
                    <div class="mt-5 mb-3 sm:mb-0">
                        <button class="w-full mt-5 p-2 rounded-lg border border-[color:rgba(var(--ni-gray-500))] hover:bg-[color:rgba(var(--ni-gray-500))] text-[color:rgba(var(--ni-gray-500))] hover:text-white duration-500">Request Access</button>
                    </div>
                </div>
            </li>
        </ul>
    </div> 
</div>

@endsection

@section('internalScript')

@endsection
