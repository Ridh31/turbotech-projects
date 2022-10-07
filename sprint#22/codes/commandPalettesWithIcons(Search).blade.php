@extends('master')
@section('content')

<div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div>

<!-- Design Command Palettes with icons (Search) -->

<!-- main -->
<div class="mainCard">
    <!-- main card -->
    <ul class="cardContainer grid-cols-1">
        <li class="eachCard px-0 pt-0 col-span-2 md:col-span-1 h-screen bg-[color:rgba(var(--ni-gray-100))] border">

            <div class="relative my-5 z-10 mx-auto max-w-2xl transform rounded-xl bg-white shadow-lg ring-1 ring-black ring-opacity-5 transition-all">

                <!-- search bar -->
                <div class="search relative border-b border-[color:rgba(var(--ni-gray-200))]">
                    <svg class="pointer-events-none absolute top-3.5 left-4 h-5 w-5 text-[color:rgba(var(--ni-gray-400))]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                    </svg>
                    <input class="h-12 w-full border-0 bg-transparent pl-11 pr-4 outline-none text-[color:rgba(var(--ni-gray-800))] placeholder-[color:rgba(var(--ni-gray-500))] focus:ring-0 sm:text-sm" type="search" placeholder="Search..." data-search>
                </div>

                <ul class="max-h-80 scroll-py-2 divide-y divide-[color:rgba(var(--ni-gray-100))] overflow-y-auto" id="options" role="listbox">
                      
                    <!-- recent searches -->
                    <li id="recent-searches" class="p-2">
                        <h2 class="mt-4 mb-2 px-3 text-xs font-semibold text-[color:rgba(var(--ni-gray-500))]">Recent searches</h2>
                        <ul id="recent-items" class="text-sm text-[color:rgba(var(--ni-gray-700))]">
                            <li class="group flex cursor-default select-none items-center rounded-md px-3 py-2 hover:bg-[color:rgba(var(--ni-primary-600))] text-[color:rgba(var(--ni-gray-600))] hover:text-white">
                                <svg class="h-6 w-6 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                                </svg>
                                <span class="ml-3 flex-auto">Workflow Inc. / Website Redesign</span>
                                <span class="ml-3 flex-none hidden">Jump to...</span>
                            </li>
                        </ul>
                    </li>

                    <!-- quick actions -->
                    <li id="quick-actions" class="p-2">
                        <h2 class="sr-only">Quick actions</h2>
                        <ul class="text-sm text-[color:rgba(var(--ni-gray-700))]">

                            <!-- Add new file... -->
                            <li class="group flex cursor-default select-none items-center rounded-md px-3 py-2 hover:bg-[color:rgba(var(--ni-primary-600))] text-[color:rgba(var(--ni-gray-600))] hover:text-white">
                                <svg class="h-6 w-6 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                </svg>
                                <span class="ml-3 flex-auto">Add new file...</span>
                                <span class="ml-3 flex-none text-sm font-semibold"><kbd class="font-sans">⌘</kbd><kbd class="font-sans">N</kbd></span>
                            </li>

                            <!-- Add new folder... -->
                            <li class="group flex cursor-default select-none items-center rounded-md px-3 py-2 hover:bg-[color:rgba(var(--ni-primary-600))] text-[color:rgba(var(--ni-gray-600))] hover:text-white">
                                <svg class="h-6 w-6 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 10.5v6m3-3H9m4.06-7.19l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                                </svg>
                                <span class="ml-3 flex-auto">Add new folder...</span>
                                <span class="ml-3 flex-none text-sm font-semibold"><kbd class="font-sans">⌘</kbd><kbd class="font-sans">F</kbd></span>
                            </li>

                            <!-- Add hastag... -->
                            <li class="group flex cursor-default select-none items-center rounded-md px-3 py-2 hover:bg-[color:rgba(var(--ni-primary-600))] text-[color:rgba(var(--ni-gray-600))] hover:text-white">
                                <svg class="h-6 w-6 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5" />
                                </svg>
                                <span class="ml-3 flex-auto">Add hashtag...</span>
                                <span class="ml-3 flex-none text-sm font-semibold"><kbd class="font-sans">⌘</kbd><kbd class="font-sans">H</kbd></span>
                            </li>

                            <!-- Add label... -->
                            <li class="group flex cursor-default select-none items-center rounded-md px-3 py-2 hover:bg-[color:rgba(var(--ni-primary-600))] text-[color:rgba(var(--ni-gray-600))] hover:text-white">
                                <svg class="h-6 w-6 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                                </svg>
                                <span class="ml-3 flex-auto">Add label...</span>
                                <span class="ml-3 flex-none text-sm font-semibold"><kbd class="font-sans">⌘</kbd><kbd class="font-sans">L</kbd></span>
                            </li>
                        </ul>
                    </li>
                </ul>

                <!-- data --> 
                <ul class="items max-h-96 overflow-y-auto p-2 text-sm text-[color:rgba(var(--ni-gray-700))]">

                    <!-- item 1 -->
                    <li class="group flex cursor-default select-none items-center rounded-md px-3 py-2 hover:bg-[color:rgba(var(--ni-primary-600))] text-[color:rgba(var(--ni-gray-600))] hover:text-white" data-filter-item data-filter-name="workflow inc. / website redesign">
                        <svg class="h-6 w-6 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <span class="ml-3 flex-auto">Workflow Inc. / Website Redesign</span>
                        <span class="ml-3 flex-none hidden">Jump to...</span>
                    </li>

                    <!-- item 2 -->
                    <li class="group flex cursor-default select-none items-center rounded-md px-3 py-2 hover:bg-[color:rgba(var(--ni-primary-600))] text-[color:rgba(var(--ni-gray-600))] hover:text-white" data-filter-item data-filter-name="workflow inc. / twitter cards">
                        <svg class="h-6 w-6 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <span class="ml-3 flex-auto">Workflow Inc. / Twitter Cards</span>
                        <span class="ml-3 flex-none hidden">Jump to...</span>
                    </li>

                    <!-- item 3 -->
                    <li class="group flex cursor-default select-none items-center rounded-md px-3 py-2 hover:bg-[color:rgba(var(--ni-primary-600))] text-[color:rgba(var(--ni-gray-600))] hover:text-white" data-filter-item data-filter-name="workflow inc. / logo design">
                        <svg class="h-6 w-6 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <span class="ml-3 flex-auto">Workflow Inc. / Logo Design</span>
                        <span class="ml-3 flex-none hidden">Jump to...</span>
                    </li>

                    <!-- item 4 -->
                    <li class="group flex cursor-default select-none items-center rounded-md px-3 py-2 hover:bg-[color:rgba(var(--ni-primary-600))] text-[color:rgba(var(--ni-gray-600))] hover:text-white" data-filter-item data-filter-name="workflow inc. / advertising campaign">
                        <svg class="h-6 w-6 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <span class="ml-3 flex-auto">Workflow Inc. / Advertising Campaign</span>
                        <span class="ml-3 flex-none hidden">Jump to...</span>
                    </li>

                    
                    <!-- item 5 -->
                    <li class="group flex cursor-default select-none items-center rounded-md px-3 py-2 hover:bg-[color:rgba(var(--ni-primary-600))] text-[color:rgba(var(--ni-gray-600))] hover:text-white" data-filter-item data-filter-name="multinational llc / creative writing">
                        <svg class="h-6 w-6 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <span class="ml-3 flex-auto">Multinational LLC / Creative Writing</span>
                        <span class="ml-3 flex-none hidden">Jump to...</span>
                    </li>

                    <!-- item 6 -->
                    <li class="group flex cursor-default select-none items-center rounded-md px-3 py-2 hover:bg-[color:rgba(var(--ni-primary-600))] text-[color:rgba(var(--ni-gray-600))] hover:text-white" data-filter-item data-filter-name="multinational llc / animation">
                        <svg class="h-6 w-6 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <span class="ml-3 flex-auto">Multinational LLC / Animation</span>
                        <span class="ml-3 flex-none hidden">Jump to...</span>
                    </li>

                    <!-- item 7 -->
                    <li class="group flex cursor-default select-none items-center rounded-md px-3 py-2 hover:bg-[color:rgba(var(--ni-primary-600))] text-[color:rgba(var(--ni-gray-600))] hover:text-white" data-filter-item data-filter-name="multinational llc / product illustration">
                        <svg class="h-6 w-6 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <span class="ml-3 flex-auto">Multinational LLC / Product Illustration</span>
                        <span class="ml-3 flex-none hidden">Jump to...</span>
                    </li>

                    <!-- item 8 -->
                    <li class="group flex cursor-default select-none items-center rounded-md px-3 py-2 hover:bg-[color:rgba(var(--ni-primary-600))] text-[color:rgba(var(--ni-gray-600))] hover:text-white" data-filter-item data-filter-name="conglomerate inc. / tv ad campaign">
                        <svg class="h-6 w-6 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <span class="ml-3 flex-auto">Conglomerate Inc. / TV Ad Campaign</span>
                        <span class="ml-3 flex-none hidden">Jump to...</span>
                    </li>

                    <!-- item 9 -->
                    <li class="group flex cursor-default select-none items-center rounded-md px-3 py-2 hover:bg-[color:rgba(var(--ni-primary-600))] text-[color:rgba(var(--ni-gray-600))] hover:text-white" data-filter-item data-filter-name="conglomerate inc. / mobile app">
                        <svg class="h-6 w-6 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <span class="ml-3 flex-auto">Conglomerate Inc. / Mobile App</span>
                        <span class="ml-3 flex-none hidden">Jump to...</span>
                    </li>

                    <!-- item 10 -->
                    <li class="group flex cursor-default select-none items-center rounded-md px-3 py-2 hover:bg-[color:rgba(var(--ni-primary-600))] text-[color:rgba(var(--ni-gray-600))] hover:text-white" data-filter-item data-filter-name="conglomerate inc. / product design">
                        <svg class="h-6 w-6 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <span class="ml-3 flex-auto">Conglomerate Inc. / Product Design</span>
                        <span class="ml-3 flex-none hidden">Jump to...</span>
                    </li>

                    <!-- item 11 -->
                    <li class="group flex cursor-default select-none items-center rounded-md px-3 py-2 hover:bg-[color:rgba(var(--ni-primary-600))] text-[color:rgba(var(--ni-gray-600))] hover:text-white" data-filter-item data-filter-name="conglomerate inc. / intranet">
                        <svg class="h-6 w-6 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <span class="ml-3 flex-auto">Conglomerate Inc. / Intranet</span>
                        <span class="ml-3 flex-none hidden">Jump to...</span>
                    </li>

                    <!-- item 12 -->
                    <li class="group flex cursor-default select-none items-center rounded-md px-3 py-2 hover:bg-[color:rgba(var(--ni-primary-600))] text-[color:rgba(var(--ni-gray-600))] hover:text-white" data-filter-item data-filter-name="conglomerate inc. / custom programming">
                        <svg class="h-6 w-6 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <span class="ml-3 flex-auto">Conglomerate Inc. / Custom Programming</span>
                        <span class="ml-3 flex-none hidden">Jump to...</span>
                    </li>

                    <!-- item 13 -->
                    <li class="group flex cursor-default select-none items-center rounded-md px-3 py-2 hover:bg-[color:rgba(var(--ni-primary-600))] text-[color:rgba(var(--ni-gray-600))] hover:text-white" data-filter-item data-filter-name="products inc. / video production">
                        <svg class="h-6 w-6 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <span class="ml-3 flex-auto">Products Inc. / Video Production</span>
                        <span class="ml-3 flex-none hidden">Jump to...</span>
                    </li>

                    <!-- item 14 -->
                    <li class="group flex cursor-default select-none items-center rounded-md px-3 py-2 hover:bg-[color:rgba(var(--ni-primary-600))] text-[color:rgba(var(--ni-gray-600))] hover:text-white" data-filter-item data-filter-name="products inc. / print brochure">
                        <svg class="h-6 w-6 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <span class="ml-3 flex-auto">Products Inc. / Print Brochure</span>
                        <span class="ml-3 flex-none hidden">Jump to...</span>
                    </li>

                    <!-- item 15 -->
                    <li class="group flex cursor-default select-none items-center rounded-md px-3 py-2 hover:bg-[color:rgba(var(--ni-primary-600))] text-[color:rgba(var(--ni-gray-600))] hover:text-white" data-filter-item data-filter-name="products inc. / documentation">
                        <svg class="h-6 w-6 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <span class="ml-3 flex-auto">Products Inc. / Documentation</span>
                        <span class="ml-3 flex-none hidden">Jump to...</span>
                    </li>
                </ul>

                <!-- error message -->
                <div id="error-message" class="px-5 pt-5 pb-10 text-center sm:px-14 hidden">
                    <svg class="mx-auto h-6 w-6 text-[color:rgba(var(--ni-gray-400))]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                    </svg>
                    <p class="mt-4 text-sm text-[color:rgba(var(--ni-gray-900))]">We couldn't find any projects with that term. Please try again.</p>
                </div>
            </div>
        </li>
    </ul>
</div>  

@endsection

@section('internalScript')

<script>

    // Design Command Palettes with icons (Search) function
    const commandPalettesWithIcons = () => {

        const recentSearches = $("#recent-searches");
        const quickActions   = $("#quick-actions");
        const items          = $(".items");

        // hide all item results
        items.addClass("hidden");
        
        const searchData = $("[data-search]");

        searchData.on('keyup', function() {

            // get search values from inputs
            const searchVal = $(this).val();
            
            searchValLength = searchVal.length;

            // hide & show recent searches/quick actions
            if ( searchValLength >= 1 ) {
                recentSearches.addClass("hidden");
                quickActions.addClass("hidden");
            } else {
                recentSearches.removeClass("hidden");
                quickActions.removeClass("hidden");    
            }

            // hide & show search results
            if ( searchValLength >= 1 ) {
                items.removeClass("hidden");
            } else if ( searchValLength == 0 ) {
                items.addClass("hidden");
            } else {
                items.removeClass("hidden");
            }

            // access <li> classes
            const filterItems = $('[data-filter-item]');

            if ( searchVal != '' ) {
                filterItems.addClass('hidden');
                $('[data-filter-item][data-filter-name*="' + searchVal.toLowerCase() + '"]').removeClass('hidden');
            } else {
                filterItems.removeClass('hidden');
            }

            const errorMessage = $("#error-message");

            // count hidden lists length
            const hiddenListsLength = $('.items .hidden').length;

            // count all lists length
            const entirelistsLength = $('.items li').length;

            // show error message if there is no data
            if ( hiddenListsLength == (entirelistsLength*2) ) {     // multipy by 2: because jump-to also hidden
                errorMessage.removeClass("hidden");
            } else {
                errorMessage.addClass("hidden");
            }
        });

        const recentItems  = $("#recent-items")
        const recentJumpTo = $("#recent-items li span:last-child");

        // mouseover & mouseout to hide & show jump to... (recent searches)
        recentItems.each(function() {
            $(this).mouseover(function() {
                $(this).find(recentJumpTo).removeClass("hidden");
            });

            $(this).mouseout(function() {
                $(this).find(recentJumpTo).addClass("hidden");
            });
        });

        const entireList = $(".items li");
        const jumpTo = $(".items li span:last-child");

        // mouseover & mouseout to hide & show jump to...
        entireList.each(function() {
            $(this).mouseover(function() {
                $(this).find(jumpTo).removeClass("hidden");
            });

            $(this).mouseout(function() {
                $(this).find(jumpTo).addClass("hidden");  
            });
        });
    }

    // call function
    commandPalettesWithIcons();

</script>

@endsection
