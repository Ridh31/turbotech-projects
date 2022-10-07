@extends('master')
@section('content')

<div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div>

<!-- Design Command Palettes with preview (Search) -->

<!-- main -->
<div class="mainCard">
    <!-- main card -->
    <ul class="cardContainer grid-cols-1">
        <li id="swith-mode" class="eachCard px-0 pt-0 col-span-2 md:col-span-1 h-screen bg-[color:rgba(var(--ni-gray-100))] border">

            <!-- switch mode between light/dark button -->
            <div class="text-center my-5">
                <button id="light-dark-btn" class="rounded-lg px-4 py-2 bg-white dark:bg-[color:rgba(var(--ni-gray-900))] hover:bg-[color:rgba(var(--ni-primary-600))] dark:hover:bg-[color:rgba(var(--ni-primary-600))] text-[color:rgba(var(--ni-gray-600))] hover:text-white dark:text-white border border-[color:rgba(var(--ni-gray-300))] hover:border-[color:rgba(var(--ni-primary-600))] before:content-['Light'] dark:before:content-['Dark'] transition duration-300"> Mode</button>
            </div>

            <div class="relative my-5 z-10 mx-auto max-w-3xl transform rounded-xl bg-white dark:bg-slate-900 shadow-lg ring-1 ring-black ring-opacity-5 transition-all opacity-100 scale-100">

                <!-- search bar -->
                <div class="search relative border-b border-[color:rgba(var(--ni-gray-200))]">
                    <svg class="pointer-events-none absolute top-3.5 left-4 h-5 w-5 text-[color:rgba(var(--ni-gray-400))] dark:text-[color:rgba(var(--ni-gray-300))]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                    </svg>
                    <input class="h-12 w-full border-0 bg-transparent pl-11 pr-4 outline-none text-[color:rgba(var(--ni-gray-800))] dark:text-[color:rgba(var(--ni-gray-300))] placeholder-[color:rgba(var(--ni-gray-500))] dark:placeholder-[color:rgba(var(--ni-gray-300))] focus:ring-0 sm:text-sm" type="search" placeholder="Search..." data-search>
                </div>

                <div id="divide-center" class="flex divide-x divide-[color:rgba(var(--ni-gray-100))] dark:divide-[color:rgba(var(--ni-gray-500))]">
                    <!-- left side -->
                    <div class="w-1/2 max-h-96 min-w-0 flex-auto">
                        <!-- data -->
                        <ul class="items max-h-96 scroll-py-4 px-2 pt-2 pb-1 overflow-y-auto text-sm text-[color:rgba(var(--ni-gray-800))]">

                            <!-- person 1 -->
                            <li class="group flex cursor-default select-none items-center rounded-md p-2 dark:text-white hover:bg-[color:rgba(var(--ni-gray-100))] dark:hover:bg-[color:rgba(var(--ni-gray-600))] focus:bg-[color:rgba(var(--ni-gray-100))] text-[color:rgba(var(--ni-gray-600))] hover:text-[color:rgba(var(--ni-gray-600))]" id="option-1" data-filter-item data-filter-name="roungridh him">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQnDVLvpYHYEkteOUkWNPpHZVhNIAMIz3YWze1IkSm9Q&s" alt="Roungridh Him" class="h-6 w-6 flex-none rounded-full">
                                <span class="ml-3 flex-auto">Roungridh Him</span>
                                <svg class="ml-3 hidden h-5 w-5 flex-none text-[color:rgba(var(--ni-gray-400))] dark:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                </svg>
                            </li>

                            <!-- person 2 -->
                            <li class="group flex cursor-default select-none items-center rounded-md p-2 dark:text-white hover:bg-[color:rgba(var(--ni-gray-100))] dark:hover:bg-[color:rgba(var(--ni-gray-600))] focus:bg-[color:rgba(var(--ni-gray-100))] text-[color:rgba(var(--ni-gray-600))] hover:text-[color:rgba(var(--ni-gray-600))]" id="option-2" data-filter-item data-filter-name="kim chi">
                                <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Kim Chi" class="h-6 w-6 flex-none rounded-full">
                                <span class="ml-3 flex-auto">Kim Chi</span>
                                <svg class="ml-3 hidden h-5 w-5 flex-none text-[color:rgba(var(--ni-gray-400))] dark:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                </svg>
                            </li>

                            <!-- person 3 -->
                            <li class="group flex cursor-default select-none items-center rounded-md p-2 dark:text-white hover:bg-[color:rgba(var(--ni-gray-100))] dark:hover:bg-[color:rgba(var(--ni-gray-600))] focus:bg-[color:rgba(var(--ni-gray-100))] text-[color:rgba(var(--ni-gray-600))] hover:text-[color:rgba(var(--ni-gray-600))]" id="option-3" data-filter-item data-filter-name="emily selman">
                                <img src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Emily Selman" class="h-6 w-6 flex-none rounded-full">
                                <span class="ml-3 flex-auto">Emily Selman</span>
                                <svg class="ml-3 hidden h-5 w-5 flex-none text-[color:rgba(var(--ni-gray-400))] dark:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                </svg>
                            </li>

                            <!-- person 4 -->
                            <li class="group flex cursor-default select-none items-center rounded-md p-2 dark:text-white hover:bg-[color:rgba(var(--ni-gray-100))] dark:hover:bg-[color:rgba(var(--ni-gray-600))] focus:bg-[color:rgba(var(--ni-gray-100))] text-[color:rgba(var(--ni-gray-600))] hover:text-[color:rgba(var(--ni-gray-600))]" id="option-4" data-filter-item data-filter-name="banana apple">
                                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Banana Apple" class="h-6 w-6 flex-none rounded-full">
                                <span class="ml-3 flex-auto">Banana Apple</span>
                                <svg class="ml-3 hidden h-5 w-5 flex-none text-[color:rgba(var(--ni-gray-400))] dark:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                </svg>
                            </li>

                            <!-- person 5 -->
                            <li class="group flex cursor-default select-none items-center rounded-md p-2 dark:text-white hover:bg-[color:rgba(var(--ni-gray-100))] dark:hover:bg-[color:rgba(var(--ni-gray-600))] focus:bg-[color:rgba(var(--ni-gray-100))] text-[color:rgba(var(--ni-gray-600))] hover:text-[color:rgba(var(--ni-gray-600))]" id="option-5" data-filter-item data-filter-name="benjamin russel">
                                <img src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Benjamin Russel" class="h-6 w-6 flex-none rounded-full">
                                <span class="ml-3 flex-auto">Benjamin Russel</span>
                                <svg class="ml-3 hidden h-5 w-5 flex-none text-[color:rgba(var(--ni-gray-400))] dark:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                </svg>
                            </li>

                            <!-- person 6 -->
                            <li class="group flex cursor-default select-none items-center rounded-md p-2 dark:text-white hover:bg-[color:rgba(var(--ni-gray-100))] dark:hover:bg-[color:rgba(var(--ni-gray-600))] focus:bg-[color:rgba(var(--ni-gray-100))] text-[color:rgba(var(--ni-gray-600))] hover:text-[color:rgba(var(--ni-gray-600))]" id="option-6" data-filter-item data-filter-name="chelsea hagon">
                                <img src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Chelsea Hagon" class="h-6 w-6 flex-none rounded-full">
                                <span class="ml-3 flex-auto">Chelsea Hagon</span>
                                <svg class="ml-3 hidden h-5 w-5 flex-none text-[color:rgba(var(--ni-gray-400))] dark:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                </svg>
                            </li>

                            <!-- person 7 -->
                            <li class="group flex cursor-default select-none items-center rounded-md p-2 dark:text-white hover:bg-[color:rgba(var(--ni-gray-100))] dark:hover:bg-[color:rgba(var(--ni-gray-600))] focus:bg-[color:rgba(var(--ni-gray-100))] text-[color:rgba(var(--ni-gray-600))] hover:text-[color:rgba(var(--ni-gray-600))]" id="option-7" data-filter-item data-filter-name="leslie alexander">
                                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Leslie Alexander" class="h-6 w-6 flex-none rounded-full">
                                <span class="ml-3 flex-auto">Leslie Alexander</span>
                                <svg class="ml-3 hidden h-5 w-5 flex-none text-[color:rgba(var(--ni-gray-400))] dark:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                </svg>
                            </li>

                            <!-- person 8 -->
                            <li class="group flex cursor-default select-none items-center rounded-md p-2 dark:text-white hover:bg-[color:rgba(var(--ni-gray-100))] dark:hover:bg-[color:rgba(var(--ni-gray-600))] focus:bg-[color:rgba(var(--ni-gray-100))] text-[color:rgba(var(--ni-gray-600))] hover:text-[color:rgba(var(--ni-gray-600))]" id="option-8" data-filter-item data-filter-name="hello world">
                                <img src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Hello World" class="h-6 w-6 flex-none rounded-full">
                                <span class="ml-3 flex-auto">Hello World</span>
                                <svg class="ml-3 hidden h-5 w-5 flex-none text-[color:rgba(var(--ni-gray-400))] dark:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                </svg>
                            </li>
                        </ul>
                    </div>

                    <!-- right side -->
                    <div id="right-side" class="hidden h-96 w-1/2 flex-none flex-col overflow-hidden sm:flex">
                        
                        <!-- person 1 details -->
                        <div class="divide-y divide-[color:rgba(var(--ni-gray-100))] dark:divide-[color:rgba(var(--ni-gray-500))]" data-filter-item data-filter-name="roungridh him" id="detail-1">
                            <div class="flex-none p-6 text-center ">
                                <img class="mx-auto h-16 w-16 rounded-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQnDVLvpYHYEkteOUkWNPpHZVhNIAMIz3YWze1IkSm9Q&s" alt="Roungridh Him">
                                <h2 class="mt-3 font-semibold text-[color:rgba(var(--ni-gray-900))] dark:text-white">Roungridh Him</h2>
                                <p class="text-sm leading-6 text-[color:rgba(var(--ni-gray-500))] dark:text-[color:rgba(var(--ni-gray-300))]">Developer, Software Development</p>
                            </div>
                            <!-- person 1 contacts -->
                            <div class="flex-auto flex-col justify-between p-6">
                                <dl class="grid grid-cols-1 gap-x-6 gap-y-3 text-sm text-[color:rgba(var(--ni-gray-700))]">
                                    <dt class="col-end-1 font-semibold text-[color:rgba(var(--ni-gray-900))] dark:text-white">Phone</dt>
                                    <dd class="dark:text-white">089-780-093</dd>
                                    <dt class="col-end-1 font-semibold text-[color:rgba(var(--ni-gray-900))] dark:text-white">URL</dt>
                                    <dd class="truncate"><a href="https://example.com" class="text-[color:rgba(var(--ni-primary-600))] dark:text-[color:rgba(var(--ni-primary-300))] underline">https://example.com</a></dd>
                                    <dt class="col-end-1 font-semibold text-[color:rgba(var(--ni-gray-900))] dark:text-white">Email</dt>
                                    <dd class="truncate"><a href="#" class="text-[color:rgba(var(--ni-primary-600))] dark:text-[color:rgba(var(--ni-primary-300))] underline">example@example.com</a></dd>
                                </dl>
                                <button type="button" class="mt-6 w-full rounded-md border border-transparent bg-[color:rgba(var(--ni-primary-500))] py-2 px-4 text-sm font-medium text-white dark:text-white shadow-sm hover:bg-[color:rgba(var(--ni-primary-700))] focus:outline-none focus:ring-2 focus:ring-[color:rgba(var(--ni-primary-500))] focus:ring-offset-2">Send message</button>
                            </div>
                        </div>

                        <!-- person 2 details -->
                        <div class="divide-y divide-[color:rgba(var(--ni-gray-100))] dark:divide-[color:rgba(var(--ni-gray-500))]" data-filter-item data-filter-name="kim chi" id="detail-2">
                            <div class="flex-none p-6 text-center">
                                <img class="mx-auto h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Kim Chi">
                                <h2 class="mt-3 font-semibold text-[color:rgba(var(--ni-gray-900))] dark:text-white">Kim Chi</h2>
                                <p class="text-sm leading-6 text-[color:rgba(var(--ni-gray-500))] dark:text-[color:rgba(var(--ni-gray-300))]">Chief, Food & Drink</p>
                            </div>
                            <!-- person 2 contacts -->
                            <div class="flex-auto flex-col justify-between p-6">
                                <dl class="grid grid-cols-1 gap-x-6 gap-y-3 text-sm text-[color:rgba(var(--ni-gray-700))]">
                                    <dt class="col-end-1 font-semibold text-[color:rgba(var(--ni-gray-900))] dark:text-white">Phone</dt>
                                    <dd class="dark:text-white">(520) 717-3793</dd>
                                    <dt class="col-end-1 font-semibold text-[color:rgba(var(--ni-gray-900))] dark:text-white">URL</dt>
                                    <dd class="truncate"><a href="https://example.com" class="text-[color:rgba(var(--ni-primary-600))] dark:text-[color:rgba(var(--ni-primary-300))] underline">https://example.com</a></dd>
                                    <dt class="col-end-1 font-semibold text-[color:rgba(var(--ni-gray-900))] dark:text-white">Email</dt>
                                    <dd class="truncate"><a href="#" class="text-[color:rgba(var(--ni-primary-600))] dark:text-[color:rgba(var(--ni-primary-300))] underline">example@example.com</a></dd>
                                </dl>
                                <button type="button" class="mt-6 w-full rounded-md border border-transparent bg-[color:rgba(var(--ni-primary-500))] py-2 px-4 text-sm font-medium text-white dark:text-white shadow-sm hover:bg-[color:rgba(var(--ni-primary-700))] focus:outline-none focus:ring-2 focus:ring-[color:rgba(var(--ni-primary-500))] focus:ring-offset-2">Send message</button>
                            </div>
                        </div>

                        <!-- person 3 details -->
                        <div class="divide-y divide-[color:rgba(var(--ni-gray-100))] dark:divide-[color:rgba(var(--ni-gray-500))]" data-filter-item data-filter-name="emily selman" id="detail-3">
                            <div class="flex-none p-6 text-center">
                                <img class="mx-auto h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Emily Selman">
                                <h2 class="mt-3 font-semibold text-[color:rgba(var(--ni-gray-900))] dark:text-white">Emily Selman</h2>
                                <p class="text-sm leading-6 text-[color:rgba(var(--ni-gray-500))] dark:text-[color:rgba(var(--ni-gray-300))]">VP, User Experience</p>
                            </div>
                            <!-- person 3 contacts -->
                            <div class="flex-auto flex-col justify-between p-6">
                                <dl class="grid grid-cols-1 gap-x-6 gap-y-3 text-sm text-[color:rgba(var(--ni-gray-700))]">
                                    <dt class="col-end-1 font-semibold text-[color:rgba(var(--ni-gray-900))] dark:text-white">Phone</dt>
                                    <dd class="dark:text-white">902-649-9025</dd>
                                    <dt class="col-end-1 font-semibold text-[color:rgba(var(--ni-gray-900))] dark:text-white">URL</dt>
                                    <dd class="truncate"><a href="https://example.com" class="text-[color:rgba(var(--ni-primary-600))] dark:text-[color:rgba(var(--ni-primary-300))] underline">https://example.com</a></dd>
                                    <dt class="col-end-1 font-semibold text-[color:rgba(var(--ni-gray-900))] dark:text-white">Email</dt>
                                    <dd class="truncate"><a href="#" class="text-[color:rgba(var(--ni-primary-600))] dark:text-[color:rgba(var(--ni-primary-300))] underline">example@example.com</a></dd>
                                </dl>
                                <button type="button" class="mt-6 w-full rounded-md border border-transparent bg-[color:rgba(var(--ni-primary-500))] py-2 px-4 text-sm font-medium text-white dark:text-white shadow-sm hover:bg-[color:rgba(var(--ni-primary-700))] focus:outline-none focus:ring-2 focus:ring-[color:rgba(var(--ni-primary-500))] focus:ring-offset-2">Send message</button>
                            </div>
                        </div>

                        <!-- person 4 details -->
                        <div class="divide-y divide-[color:rgba(var(--ni-gray-100))] dark:divide-[color:rgba(var(--ni-gray-500))]" data-filter-item data-filter-name="banana apple" id="detail-4">
                            <div class="flex-none p-6 text-center">
                                <img class="mx-auto h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Banana Apple">
                                <h2 class="mt-3 font-semibold text-[color:rgba(var(--ni-gray-900))] dark:text-white">Banana Apple</h2>
                                <p class="text-sm leading-6 text-[color:rgba(var(--ni-gray-500))] dark:text-[color:rgba(var(--ni-gray-300))]">Fruit, Healthy Diet</p>
                            </div>
                            <!-- person 4 contacts -->
                            <div class="flex-auto flex-col justify-between p-6">
                                <dl class="grid grid-cols-1 gap-x-6 gap-y-3 text-sm text-[color:rgba(var(--ni-gray-700))]">
                                    <dt class="col-end-1 font-semibold text-[color:rgba(var(--ni-gray-900))] dark:text-white">Phone</dt>
                                    <dd class="dark:text-white">(424) 411-6610</dd>
                                    <dt class="col-end-1 font-semibold text-[color:rgba(var(--ni-gray-900))] dark:text-white">URL</dt>
                                    <dd class="truncate"><a href="https://example.com" class="text-[color:rgba(var(--ni-primary-600))] dark:text-[color:rgba(var(--ni-primary-300))] underline">https://example.com</a></dd>
                                    <dt class="col-end-1 font-semibold text-[color:rgba(var(--ni-gray-900))] dark:text-white">Email</dt>
                                    <dd class="truncate"><a href="#" class="text-[color:rgba(var(--ni-primary-600))] dark:text-[color:rgba(var(--ni-primary-300))] underline">example@example.com</a></dd>
                                </dl>
                                <button type="button" class="mt-6 w-full rounded-md border border-transparent bg-[color:rgba(var(--ni-primary-500))] py-2 px-4 text-sm font-medium text-white dark:text-white shadow-sm hover:bg-[color:rgba(var(--ni-primary-700))] focus:outline-none focus:ring-2 focus:ring-[color:rgba(var(--ni-primary-500))] focus:ring-offset-2">Send message</button>
                            </div>
                        </div>

                        <!-- person 5 details -->
                        <div class="divide-y divide-[color:rgba(var(--ni-gray-100))] dark:divide-[color:rgba(var(--ni-gray-500))]" data-filter-item data-filter-name="benjamin russel" id="detail-5">
                            <div class="flex-none p-6 text-center">
                                <img class="mx-auto h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Benjamin Russel">
                                <h2 class="mt-3 font-semibold text-[color:rgba(var(--ni-gray-900))] dark:text-white">Benjamin Russel</h2>
                                <p class="text-sm leading-6 text-[color:rgba(var(--ni-gray-500))] dark:text-[color:rgba(var(--ni-gray-300))]">Director, Print Operations</p>
                            </div>
                            <!-- person 5 contacts -->
                            <div class="flex-auto flex-col justify-between p-6">
                                <dl class="grid grid-cols-1 gap-x-6 gap-y-3 text-sm text-[color:rgba(var(--ni-gray-700))]">
                                    <dt class="col-end-1 font-semibold text-[color:rgba(var(--ni-gray-900))] dark:text-white">Phone</dt>
                                    <dd class="dark:text-white">645-664-8590</dd>
                                    <dt class="col-end-1 font-semibold text-[color:rgba(var(--ni-gray-900))] dark:text-white">URL</dt>
                                    <dd class="truncate"><a href="https://example.com" class="text-[color:rgba(var(--ni-primary-600))] dark:text-[color:rgba(var(--ni-primary-300))] underline">https://example.com</a></dd>
                                    <dt class="col-end-1 font-semibold text-[color:rgba(var(--ni-gray-900))] dark:text-white">Email</dt>
                                    <dd class="truncate"><a href="#" class="text-[color:rgba(var(--ni-primary-600))] dark:text-[color:rgba(var(--ni-primary-300))] underline">example@example.com</a></dd>
                                </dl>
                                <button type="button" class="mt-6 w-full rounded-md border border-transparent bg-[color:rgba(var(--ni-primary-500))] py-2 px-4 text-sm font-medium text-white dark:text-white shadow-sm hover:bg-[color:rgba(var(--ni-primary-700))] focus:outline-none focus:ring-2 focus:ring-[color:rgba(var(--ni-primary-500))] focus:ring-offset-2">Send message</button>
                            </div>
                        </div>

                        <!-- person 6 details -->
                        <div class="divide-y divide-[color:rgba(var(--ni-gray-100))] dark:divide-[color:rgba(var(--ni-gray-500))]" data-filter-item data-filter-name="chelsea hagon" id="detail-6">
                            <div class="flex-none p-6 text-center">
                                <img class="mx-auto h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Chelsea Hagon">
                                <h2 class="mt-3 font-semibold text-[color:rgba(var(--ni-gray-900))] dark:text-white">Chelsea Hagon</h2>
                                <p class="text-sm leading-6 text-[color:rgba(var(--ni-gray-500))] dark:text-[color:rgba(var(--ni-gray-300))]">Human Resources Manager</p>
                            </div>
                            <!-- person 6 contacts -->
                            <div class="flex-auto flex-col justify-between p-6">
                                <dl class="grid grid-cols-1 gap-x-6 gap-y-3 text-sm text-[color:rgba(var(--ni-gray-700))]">
                                    <dt class="col-end-1 font-semibold text-[color:rgba(var(--ni-gray-900))] dark:text-white">Phone</dt>
                                    <dd class="dark:text-white">343-829-4718</dd>
                                    <dt class="col-end-1 font-semibold text-[color:rgba(var(--ni-gray-900))] dark:text-white">URL</dt>
                                    <dd class="truncate"><a href="https://example.com" class="text-[color:rgba(var(--ni-primary-600))] dark:text-[color:rgba(var(--ni-primary-300))] underline">https://example.com</a></dd>
                                    <dt class="col-end-1 font-semibold text-[color:rgba(var(--ni-gray-900))] dark:text-white">Email</dt>
                                    <dd class="truncate"><a href="#" class="text-[color:rgba(var(--ni-primary-600))] dark:text-[color:rgba(var(--ni-primary-300))] underline">example@example.com</a></dd>
                                </dl>
                                <button type="button" class="mt-6 w-full rounded-md border border-transparent bg-[color:rgba(var(--ni-primary-500))] py-2 px-4 text-sm font-medium text-white dark:text-white shadow-sm hover:bg-[color:rgba(var(--ni-primary-700))] focus:outline-none focus:ring-2 focus:ring-[color:rgba(var(--ni-primary-500))] focus:ring-offset-2">Send message</button>
                            </div>
                        </div>

                        <!-- person 7 details -->
                        <div class="divide-y divide-[color:rgba(var(--ni-gray-100))] dark:divide-[color:rgba(var(--ni-gray-500))]" data-filter-item data-filter-name="leslie alexander" id="detail-7">
                            <div class="flex-none p-6 text-center">
                                <img class="mx-auto h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Leslie Alexander">
                                <h2 class="mt-3 font-semibold text-[color:rgba(var(--ni-gray-900))] dark:text-white">Leslie Alexander</h2>
                                <p class="text-sm leading-6 text-[color:rgba(var(--ni-gray-500))] dark:text-[color:rgba(var(--ni-gray-300))]">Co-Founder / CEO</p>
                            </div>
                            <!-- person 7 contacts -->
                            <div class="flex-auto flex-col justify-between p-6">
                                <dl class="grid grid-cols-1 gap-x-6 gap-y-3 text-sm text-[color:rgba(var(--ni-gray-700))]">
                                    <dt class="col-end-1 font-semibold text-[color:rgba(var(--ni-gray-900))] dark:text-white">Phone</dt>
                                    <dd class="dark:text-white">1-493-747-9031</dd>
                                    <dt class="col-end-1 font-semibold text-[color:rgba(var(--ni-gray-900))] dark:text-white">URL</dt>
                                    <dd class="truncate"><a href="https://example.com" class="text-[color:rgba(var(--ni-primary-600))] dark:text-[color:rgba(var(--ni-primary-300))] underline">https://example.com</a></dd>
                                    <dt class="col-end-1 font-semibold text-[color:rgba(var(--ni-gray-900))] dark:text-white">Email</dt>
                                    <dd class="truncate"><a href="#" class="text-[color:rgba(var(--ni-primary-600))] dark:text-[color:rgba(var(--ni-primary-300))] underline">example@example.com</a></dd>
                                </dl>
                                <button type="button" class="mt-6 w-full rounded-md border border-transparent bg-[color:rgba(var(--ni-primary-500))] py-2 px-4 text-sm font-medium text-white dark:text-white shadow-sm hover:bg-[color:rgba(var(--ni-primary-700))] focus:outline-none focus:ring-2 focus:ring-[color:rgba(var(--ni-primary-500))] focus:ring-offset-2">Send message</button>
                            </div>
                        </div>

                        <!-- person 8 details -->
                        <div class="divide-y divide-[color:rgba(var(--ni-gray-100))] dark:divide-[color:rgba(var(--ni-gray-500))]" data-filter-item data-filter-name="hello world" id="detail-8">
                            <div class="flex-none p-6 text-center">
                                <img class="mx-auto h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Hello World">
                                <h2 class="mt-3 font-semibold text-[color:rgba(var(--ni-gray-900))] dark:text-white">Hello World</h2>
                                <p class="text-sm leading-6 text-[color:rgba(var(--ni-gray-500))] dark:text-[color:rgba(var(--ni-gray-300))]">Principal Designer</p>
                            </div>
                            <!-- person 8 contacts -->
                            <div class="flex-auto flex-col justify-between p-6">
                                <dl class="grid grid-cols-1 gap-x-6 gap-y-3 text-sm text-[color:rgba(var(--ni-gray-700))]">
                                    <dt class="col-end-1 font-semibold text-[color:rgba(var(--ni-gray-900))] dark:text-white">Phone</dt>
                                    <dd class="dark:text-white">345-500-5753</dd>
                                    <dt class="col-end-1 font-semibold text-[color:rgba(var(--ni-gray-900))] dark:text-white">URL</dt>
                                    <dd class="truncate"><a href="https://example.com" class="text-[color:rgba(var(--ni-primary-600))] dark:text-[color:rgba(var(--ni-primary-300))] underline">https://example.com</a></dd>
                                    <dt class="col-end-1 font-semibold text-[color:rgba(var(--ni-gray-900))] dark:text-white">Email</dt>
                                    <dd class="truncate"><a href="#" class="text-[color:rgba(var(--ni-primary-600))] dark:text-[color:rgba(var(--ni-primary-300))] underline">example@example.com</a></dd>
                                </dl>
                                <button type="button" class="mt-6 w-full rounded-md border border-transparent bg-[color:rgba(var(--ni-primary-500))] py-2 px-4 text-sm font-medium text-white dark:text-white shadow-sm hover:bg-[color:rgba(var(--ni-primary-700))] focus:outline-none focus:ring-2 focus:ring-[color:rgba(var(--ni-primary-500))] focus:ring-offset-2">Send message</button>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- error message -->
                <div id="error-message" class="hidden px-5 pt-5 pb-10 text-center text-sm sm:px-14">
                    <svg class="mx-auto h-6 w-6 text-[color:rgba(var(--ni-gray-400))] dark:text-[color:rgba(var(--ni-gray-300))]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                    </svg>
                    <p class="mt-4 font-semibold text-[color:rgba(var(--ni-gray-900))] dark:text-white">No people found</p>
                    <p class="mt-2 text-[color:rgba(var(--ni-gray-500))] dark:text-[color:rgba(var(--ni-gray-300))]">We couldn’t find anything with that term. Please try again.</p>
                </div>
            </div>
        </li>
    </ul>
</div>  

@endsection

@section('internalScript')

<script>

    // Design Command Palettes with preview (Search) function
    const commandPalettesWithPreview = () => {

        // hide all lists
        const entireList = $(".items li");
        entireList.addClass("hidden");

        // list options
        const firstOption    = $("#option-1");
        const secondOption   = $("#option-2");
        const thirdOption    = $("#option-3");
        const fourthOption   = $("#option-4");
        const fifthOption    = $("#option-5");
        const sixthOption    = $("#option-6");
        const seventhOption  = $("#option-7");
        const eighthOption   = $("#option-8");

        // list details
        const firstDetail   = $("#detail-1");
        const secondDetail  = $("#detail-2");
        const thirdDetail   = $("#detail-3");
        const fourthDetail  = $("#detail-4");
        const fifthDetail   = $("#detail-5");
        const sixthDetail   = $("#detail-6");
        const seventhDetail = $("#detail-7");
        const eighthDetail  = $("#detail-8");

        // show only 4 lists at first
        const showLists = $("#option-1, #option-2, #option-3, #option-4");
        showLists.removeClass("hidden");

        // hide all details
        const entireDetails = $("#detail-1, #detail-2, #detail-3, #detail-4, #detail-5, #detail-6, #detail-7, #detail-8");
        entireDetails.addClass("hidden");

        // show first detail
        firstDetail.removeClass("hidden");
        
        const searchData = $("[data-search]");

        searchData.on('keyup', function() {

            // get search values from inputs
            const searchVal = $(this).val();

            // access <li> classes
            const filterItems = $('[data-filter-item]');

            if ( searchVal != '' ) {
                filterItems.addClass('hidden');
                $('[data-filter-item][data-filter-name*="' + searchVal.toLowerCase() + '"]').removeClass('hidden');
            } else {
                filterItems.removeClass('hidden');
            }

            const errorMessage = $("#error-message");
            const divideCenterLine = $("#divide-center");

            // count hidden lists length
            const hiddenListsLength = $('.items .hidden').length;

            // count all lists length
            const entirelistsLength = $('.items li').length;

            // show error message if there is no data
            if ( hiddenListsLength == (entirelistsLength*2) ) {      // multipy by 2 : because there are left side & right side of lists
                errorMessage.removeClass("hidden");
                divideCenterLine.addClass("hidden");
            } else {
                errorMessage.addClass("hidden");
                divideCenterLine.removeClass("hidden");
            }
        });

        const chevronSVGs = $(".items li svg");

        // mouseover & mouseout to show & hide SVGs
        entireList.each(function() {
            $(this).mouseover(function() {
                $(this).find(chevronSVGs).removeClass("hidden");
            });

            $(this).mouseout(function() {
                $(this).find(chevronSVGs).addClass("hidden");
            });
        });

        // hover section
        // first list
        firstOption.hover(() => {
            entireDetails.addClass("hidden");
            firstDetail.removeClass("hidden");
        });

        // second list
        secondOption.hover(() => {
            entireDetails.addClass("hidden");
            secondDetail.removeClass("hidden");
        });

        // third list
        thirdOption.hover(() => {
            entireDetails.addClass("hidden");
            thirdDetail.removeClass("hidden");
        });

        // fourth list
        fourthOption.hover(() => {
            entireDetails.addClass("hidden");
            fourthDetail.removeClass("hidden");
        });

        // fifth list
        fifthOption.hover(() => {
            entireDetails.addClass("hidden");
            fifthDetail.removeClass("hidden");
        });

        // sixth list
        sixthOption.hover(() => {
            entireDetails.addClass("hidden");
            sixthDetail.removeClass("hidden");
        });

        // seventh list
        seventhOption.hover(() => {
            entireDetails.addClass("hidden");
            seventhDetail.removeClass("hidden");
        });

        // eighth list
        eighthOption.hover(() => {
            entireDetails.addClass("hidden");
            eighthDetail.removeClass("hidden");
        });
        
        // light and dark mode
        const switchBtn    = $("#light-dark-btn");
        const lightAndDark = $("#swith-mode");

        // switch mode button
        switchBtn.on("click", () => {
            lightAndDark.toggleClass("dark");
        });
        
    }

    // call function
    commandPalettesWithPreview();

</script>

@endsection
