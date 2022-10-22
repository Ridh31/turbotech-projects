@extends('master')
@section('internalCss')
<link rel="stylesheet" type="text/css" href="{{ asset('css/evoCalendar.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>

@endsection
@section('content')

{{-- <div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div> --}}

<!-- Design POS Plant Shop-->

<!-- main -->
<div class="mainCard">
    <div class="cardContainer bg-[color:rgba(var(--ni-gray-100))]">
        <div class="flex flex-col lg:flex-row select-none">

            <!-- left side -->
            <div id="left-side" class="w-full lg:w-[65%] p-5 space-y-8">

                <!-- header -->
                <header id="header" class="mx-0 sm:mx-0">

                    <!-- plant shop -->
                    <div class="w-full text-center xl:text-start">
                        <div class="text-3xl font-medium">Welcome, Ridh</div>
                        <div class="text-[color:rgba(var(--ni-gray-400))] mt-2">Easily find whatever you need then you can manage plant stock in your shop</div>
                    </div>

                    <!-- header items, search, etc... -->
                    <div class="flex flex-col 2xl:flex-row justify-center items-center mt-5">
                        <div class="flex">

                            <!-- search bar -->
                            <div class="relative bg-white my-auto shadow-md rounded-lg">
                                <svg class="pointer-events-none absolute top-3.5 left-4 h-5 w-5 text-[color:rgba(var(--ni-gray-400))]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                                </svg>
                                <input class="h-12 w-full sm:w-96 border-0 bg-transparent pl-11 pr-4 outline-none text-[color:rgba(var(--ni-gray-800))] placeholder-[color:rgba(var(--ni-gray-500))] focus:ring-0 sm:text-sm rounded-md" type="search" placeholder="Search product..." data-search>
                            </div>

                            <!-- adjust -->
                            <div class="cursor-pointer bg-white ml-5 p-3 shadow-md rounded-md my-auto">
                                <svg class="w-6 h-6" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path style="fill:#797882;" d="M483.587,161.1H28.413C12.721,161.1,0,148.378,0,132.687s12.721-28.413,28.413-28.413h455.174 c15.691,0,28.413,12.722,28.413,28.413S499.278,161.1,483.587,161.1z"/><path style="fill:#3E3E42;" d="M483.587,407.726H28.413C12.721,407.726,0,395.005,0,379.313S12.721,350.9,28.413,350.9h455.174 c15.691,0,28.413,12.722,28.413,28.413C512,395.004,499.278,407.726,483.587,407.726z"/><circle style="fill:#A6E7ED;" cx="166.688" cy="132.689" r="75.677"/><path style="fill:#FFFFFF;" d="M91.016,132.687c0,41.793,33.88,75.673,75.673,75.673V57.014 C124.895,57.014,91.016,90.894,91.016,132.687z"/><path style="fill:#00655B;" d="M166.689,236.773c-57.393,0-104.086-46.693-104.086-104.086S109.296,28.601,166.689,28.601 s104.086,46.693,104.086,104.086S224.083,236.773,166.689,236.773z M166.689,85.427c-26.06,0-47.26,21.201-47.26,47.26 s21.201,47.26,47.26,47.26s47.26-21.201,47.26-47.26S192.748,85.427,166.689,85.427z"/><path style="fill:#4AB6BF;" d="M166.689,179.947c-26.06,0-47.26-21.201-47.26-47.26s21.201-47.26,47.26-47.26V28.601 c-57.393,0-104.086,46.693-104.086,104.086s46.693,104.086,104.086,104.086V179.947z"/><circle style="fill:#A6E7ED;" cx="348.889" cy="379.315" r="75.677"/><path style="fill:#FFFFFF;" d="M273.215,379.313c0,41.793,33.88,75.673,75.673,75.673V303.64 C307.095,303.64,273.215,337.52,273.215,379.313z"/><path style="fill:#005A95;" d="M348.888,483.399c-57.393,0-104.086-46.693-104.086-104.086s46.693-104.086,104.086-104.086 c57.393,0,104.086,46.693,104.086,104.086S406.281,483.399,348.888,483.399z M348.888,332.053c-26.06,0-47.26,21.202-47.26,47.26 c0,26.059,21.202,47.26,47.26,47.26c26.059,0,47.26-21.201,47.26-47.26C396.148,353.253,374.948,332.053,348.888,332.053z"/><path style="fill:#31AAEF;" d="M348.888,426.573c-26.06,0-47.26-21.201-47.26-47.26c0-26.06,21.201-47.26,47.26-47.26v-56.826 c-57.393,0-104.086,46.693-104.086,104.086s46.693,104.086,104.086,104.086V426.573z"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                </svg>
                            </div>
                        </div>

                        <!-- accesories & plant pack -->
                        <div class="flex space-x-5 ml-0 2xl:ml-auto mt-8 2xl:mt-0">

                            <!-- accesories -->
                            <div class="cursor-pointer ml-0 2xl:ml-5 flex bg-white hover:bg-[color:rgba(var(--ni-danger-400))] hover:text-white px-5 py-3 shadow-md rounded-md duration-300">
                                <div class="my-auto p-3 bg-[color:rgba(var(--ni-gray-100))] rounded-md">
                                    <svg class="w-5 h-5" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                        <path style="fill:#DBE1F1;" d="M456.348,445.217H55.652c-9.217,0-16.696-7.473-16.696-16.696V217.043C38.957,97.365,136.326,0,256,0 s217.043,97.365,217.043,217.043v211.478C473.043,437.744,465.565,445.217,456.348,445.217z"/><path style="fill:#D0D5E5;" d="M456.348,445.217c9.217,0,16.696-7.473,16.696-16.696V217.043C473.043,97.365,375.674,0,256,0 v445.217H456.348z"/><path style="fill:#FFFFFF;" d="M344.487,115.645c-5.231,7.679-15.581,9.683-23.151,4.452 c-19.367-13.023-42.406-19.478-65.336-19.478s-45.969,6.456-65.336,19.478c-7.57,5.231-17.92,3.228-23.151-4.452 c-5.12-7.57-3.117-18.032,4.562-23.151C196.896,75.687,225.948,66.783,256,66.783s59.104,8.904,83.923,25.711 C347.603,97.614,349.606,108.077,344.487,115.645z"/><path style="fill:#7CCC92;" d="M389.565,166.957h-66.783c-27.27,0-51.534,13.245-66.783,33.614 c-15.249-20.369-39.513-33.614-66.783-33.614h-66.783c-9.239,0-16.696,7.457-16.696,16.696v66.783 c0,46.08,37.398,83.478,83.478,83.478h133.565c46.08,0,83.478-37.398,83.478-83.478v-66.783 C406.261,174.414,398.805,166.957,389.565,166.957z"/><path style="fill:#34B772;" d="M406.261,183.652v66.783c0,46.08-37.398,83.478-83.478,83.478H256V200.57 c15.249-20.369,39.513-33.614,66.783-33.614h66.783C398.805,166.957,406.261,174.414,406.261,183.652z"/><path style="fill:#DDDD47;" d="M334.582,262.233l-61.886,61.885v98.838c0,9.238-7.456,16.696-16.696,16.696 s-16.696-7.457-16.696-16.696v-98.838l-61.886-61.885c-6.567-6.456-6.567-17.141,0-23.597c6.568-6.567,17.03-6.567,23.598,0 L256,293.621l54.983-54.984c6.568-6.567,17.03-6.567,23.598,0C341.148,245.092,341.148,255.777,334.582,262.233z"/><path style="fill:#C7D100;" d="M334.582,262.233l-61.886,61.885v98.838c0,9.238-7.456,16.696-16.696,16.696V293.621l54.983-54.984 c6.568-6.567,17.03-6.567,23.598,0C341.148,245.092,341.148,255.777,334.582,262.233z"/><path style="fill:#E7ECFD;" d="M344.487,115.645c-5.231,7.679-15.581,9.683-23.151,4.452 c-19.367-13.023-42.406-19.478-65.336-19.478V66.783c30.052,0,59.104,8.904,83.923,25.711 C347.603,97.614,349.606,108.077,344.487,115.645z"/><path style="fill:#79695A;" d="M495.304,512H16.696C7.479,512,0,504.527,0,495.304v-33.391c0-27.619,22.468-50.087,50.087-50.087 h411.826c27.619,0,50.087,22.468,50.087,50.087v33.391C512,504.527,504.521,512,495.304,512z"/><path style="fill:#6C5B52;" d="M461.913,411.826H256V512h239.304c9.217,0,16.696-7.473,16.696-16.696v-33.391 C512,434.294,489.532,411.826,461.913,411.826z"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                    </svg>
                                </div>
                                <span class="font-medium mx-2 my-auto">Accesories</span>
                            </div>

                            <!-- plant pack -->
                            <div class="cursor-pointer flex bg-[color:rgba(var(--ni-gray-700))] hover:bg-[color:rgba(var(--ni-gray-800))] px-5 py-3 shadow-md rounded-md duration-300">
                                <div class="my-auto">
                                    <svg class="w-6 h-6" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                        <path style="fill:#FF9478;" d="M78.316,242.244l53.365,251.394C134.403,506.459,147.22,512,159.942,512h191.978 c13.211,0,25.539-5.542,28.261-18.363l53.365-251.394H78.316z"/><g><path style="fill:#FF6243;" d="M340.177,484.098h-82.985c-4.332,0-7.845-3.512-7.845-7.845s3.512-7.845,7.845-7.845h82.985 c4.333,0,7.845,3.512,7.845,7.845S344.51,484.098,340.177,484.098z"/><path style="fill:#FF6243;" d="M433.546,242.244H78.316l53.365,251.394C134.403,506.459,147.22,512,159.942,512h76.612 c-8.965-1.884-16.47-8.867-18.485-18.363l-42.027-197.98h246.166L433.546,242.244z"/></g><path style="fill:#6DC82A;" d="M203.79,26.267c-43.096-23.224-85.232-26.12-87.003-26.233c-5.113-0.32-10.106,1.641-13.63,5.362 c-3.523,3.72-5.213,8.812-4.613,13.901c4.463,37.839,15.721,70.701,33.461,97.674c14.684,22.327,33.77,40.627,56.726,54.392 c44.228,26.519,87.157,26.825,88.964,26.825c2.58,0,8.625,0,13.773-5.152c3.375-3.377,5.203-8.001,5.046-12.773 C293.661,92.742,244.516,48.211,203.79,26.267z"/><g><path style="fill:#5EAC24;" d="M291.468,193.035c2.274-2.275,3.824-5.121,4.559-8.191c-53.61-10.671-141.428-59.492-164.12-182.895 c-8.879-1.487-14.498-1.875-15.12-1.915c-5.113-0.32-10.106,1.641-13.63,5.361c-3.523,3.72-5.213,8.812-4.613,13.901 c4.463,37.839,15.721,70.701,33.461,97.674c14.684,22.327,33.77,40.627,56.726,54.392c44.228,26.519,87.157,26.825,88.964,26.825 C280.275,198.188,286.319,198.188,291.468,193.035z"/><path style="fill:#5EAC24;" d="M233.501,46.003c-4.019,4.634-7.822,9.44-11.385,14.427 c-21.904,30.652-34.473,67.088-37.442,108.424c1.34,0.851,2.691,1.69,4.058,2.509c44.228,26.519,87.157,26.825,88.964,26.825 c2.58,0,8.625,0,13.773-5.152c3.375-3.377,5.203-8.001,5.046-12.773C294.339,113.531,265.25,71.794,233.501,46.003z"/></g><path style="fill:#91DC5A;" d="M408.844,5.395c-3.524-3.719-8.506-5.68-13.63-5.361c-1.773,0.112-43.906,3.009-87.003,26.232 c-40.726,21.945-89.87,66.476-92.724,153.997c-0.156,4.772,1.67,9.396,5.046,12.773c5.148,5.151,11.192,5.152,13.772,5.152 c0.001,0,0.001,0,0.001,0c1.826,0,44.742-0.309,88.964-26.825c22.956-13.765,42.042-32.065,56.727-54.392 c17.741-26.973,28.998-59.835,33.461-97.674C414.057,14.208,412.368,9.115,408.844,5.395z"/><path style="fill:#6DC82A;" d="M395.214,0.034c-1.773,0.112-43.906,3.009-87.003,26.232c-40.726,21.945-89.87,66.476-92.724,153.996 c-0.156,4.772,1.67,9.396,5.046,12.773c5.148,5.151,11.192,5.152,13.772,5.152c0,0,0.001,0,0.002,0c0.483,0,3.846-0.022,9.348-0.545 C265.143,85.341,362.136,43.63,411.687,31.823c0.67-4.116,1.27-8.285,1.77-12.526c0.6-5.089-1.09-10.18-4.613-13.901 C405.321,1.675,400.339-0.284,395.214,0.034z"/><path style="fill:#96C8EF;" d="M453.737,259.909H58.264c-11.506,0-20.919-9.414-20.919-20.919v-81.254 c0-11.506,9.414-20.919,20.919-20.919h395.473c11.506,0,20.919,9.414,20.919,20.919v81.254 C474.656,250.495,465.242,259.909,453.737,259.909z"/><g><path style="fill:#5AAAE7;" d="M123.811,238.99v-81.253c0-11.506,9.414-20.919,20.919-20.919H58.264 c-11.506,0-20.919,9.414-20.919,20.919v81.253c0,11.506,9.414,20.919,20.919,20.919h86.467 C133.225,259.909,123.811,250.495,123.811,238.99z"/><path style="fill:#5AAAE7;" d="M435.375,232.007h-144.18c-4.332,0-7.845-3.512-7.845-7.845c0-4.332,3.512-7.845,7.845-7.845 h144.181c4.333,0,7.845,3.512,7.845,7.845C443.221,228.495,439.708,232.007,435.375,232.007z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                    </svg>
                                </div>
                                <span class="text-white mx-2 my-auto">Plant Pack</span>
                            </div>
                        </div>
                    </div>
                </header>

                <!-- products -->
                <section>

                    <!-- products container -->
                    <ul id="product-items" class="cardContainer grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5">

                        <!-- product 1 -->
                        <li class="cursor-pointer p-4 pb-6 bg-white space-y-4 shadow-lg rounded-xl relative translate-y-3 hover:translate-y-0 duration-150" data-value="product 1">

                            <!-- product 1: image -->
                            <div class="flex justify-center items-center border border-[color:rgba(var(--ni-gray-300))] rounded-lg">
                                <img class="w-60 h-60 object-contain rounded-lg" src="https://api.floriday.io/images/0c65618e-6c4a-46db-99a5-c140570baab4.jpg?width=360&height=360&crop=pad" alt="Chamaecyparis">
                            </div>

                            <div class="flex">
                                <!-- product 1: title & description -->
                                <div>
                                    <div class="font-medium">Chamaecyparis</div>
                                    <div class="text-xs text-[color:rgba(var(--ni-gray-400))]">Stock 10 in your shop</div>
                                </div>

                                <!-- product 1: price -->
                                <div class="font-medium text-xl text-[color:rgba(var(--ni-danger-400))] my-auto ml-auto">$8.8</div>
                            </div>  
                        </li>

                        <!-- product 2 -->
                        <li class="cursor-pointer p-4 pb-6 bg-white space-y-4 shadow-lg rounded-xl relative translate-y-3 hover:translate-y-0 duration-150" data-value="product 2">

                            <!-- product 2: image -->
                            <div class="flex justify-center items-center border border-[color:rgba(var(--ni-gray-300))] rounded-lg">
                                <img class="w-60 h-60 object-contain rounded-lg" src="https://cdn11.bigcommerce.com/s-km30nn7y/images/stencil/1280x1280/products/241037/922644/apifueswv__57539.1592543006.jpg?c=3" alt="Fern Plant">
                            </div>

                            <div class="flex">
                                <!-- product 2: title & description -->
                                <div>
                                    <div class="font-medium">Fern Plant</div>
                                    <div class="text-xs text-[color:rgba(var(--ni-gray-400))]">Stock 40 in your shop</div>
                                </div>

                                <!-- product 2: price -->
                                <div class="font-medium text-xl text-[color:rgba(var(--ni-danger-400))] my-auto ml-auto">$7.7</div>
                            </div>  
                        </li>

                        <!-- product 3 -->
                        <li class="cursor-pointer p-4 pb-6 bg-white space-y-4 shadow-lg rounded-xl relative translate-y-3 hover:translate-y-0 duration-150" data-value="product 3">

                            <!-- product 3: image -->
                            <div class="flex justify-center items-center border border-[color:rgba(var(--ni-gray-300))] rounded-lg">
                                <img class="w-60 h-60 object-contain rounded-lg" src="https://cdn.britannica.com/41/156541-050-2BA71F34/philodendron.jpg" alt="Houseplant">
                            </div>

                            <div class="flex">
                                <!-- product 3: title & description -->
                                <div>
                                    <div class="font-medium">Houseplant</div>
                                    <div class="text-xs text-[color:rgba(var(--ni-gray-400))]">Stock 12 in your shop</div>
                                </div>

                                <!-- product 3: price -->
                                <div class="font-medium text-xl text-[color:rgba(var(--ni-danger-400))] my-auto ml-auto">$6.6</div>
                            </div>  
                        </li>

                        <!-- product 4 -->
                        <li class="cursor-pointer p-4 pb-6 bg-white space-y-4 shadow-lg rounded-xl relative translate-y-3 hover:translate-y-0 duration-150" data-value="product 4">

                            <!-- product 4: image -->
                            <div class="flex justify-center items-center border border-[color:rgba(var(--ni-gray-300))] rounded-lg">
                                <img class="w-60 h-60 object-contain rounded-lg" src="https://i5.walmartimages.com/asr/9207f6ff-8937-427f-8826-e62cf6db74a4_1.073244e52f8189ddd3aa36c10262dd03.jpeg" alt="Dracaena">
                            </div>

                            <div class="flex">
                                <!-- product 4: title & description -->
                                <div>
                                    <div class="font-medium">Dracaena</div>
                                    <div class="text-xs text-[color:rgba(var(--ni-gray-400))]">Stock 20 in your shop</div>
                                </div>

                                <!-- product 4: price -->
                                <div class="font-medium text-xl text-[color:rgba(var(--ni-danger-400))] my-auto ml-auto">$5.5</div>
                            </div>  
                        </li>

                        <!-- product 5 -->
                        <li class="cursor-pointer p-4 pb-6 bg-white space-y-4 shadow-lg rounded-xl relative translate-y-3 hover:translate-y-0 duration-150" data-value="product 5">

                            <!-- product 5: image -->
                            <div class="flex justify-center items-center border border-[color:rgba(var(--ni-gray-300))] rounded-lg">
                                <img class="w-60 h-60 object-contain rounded-lg" src="https://www.ikea.com/ch/en/images/products/aloe-vera-potted-plant-aloe__0548608_pe657287_s5.jpg?f=s" alt="Aloe Vera">
                            </div>

                            <div class="flex">
                                <!-- product 5: title & description -->
                                <div>
                                    <div class="font-medium">Aloe Vera</div>
                                    <div class="text-xs text-[color:rgba(var(--ni-gray-400))]">Stock 17 in your shop</div>
                                </div>

                                <!-- product 5: price -->
                                <div class="font-medium text-xl text-[color:rgba(var(--ni-danger-400))] my-auto ml-auto">$4.4</div>
                            </div>  
                        </li>

                        <!-- product 6 -->
                        <li class="cursor-pointer p-4 pb-6 bg-white space-y-4 shadow-lg rounded-xl relative translate-y-3 hover:translate-y-0 duration-150" data-value="product 6">

                            <!-- product 6: image -->
                            <div class="flex justify-center items-center border border-[color:rgba(var(--ni-gray-300))] rounded-lg">
                                <img class="w-60 h-60 object-contain rounded-lg" src="https://www.artificialplantsandtrees.com/mm5/graphics/00000002/AGF1018-ZM-1.jpg" alt="Cactus Plant">
                            </div>

                            <div class="flex">
                                <!-- product 6: title & description -->
                                <div>
                                    <div class="font-medium">Cactus Plant</div>
                                    <div class="text-xs text-[color:rgba(var(--ni-gray-400))]">Stock 8 in your shop</div>
                                </div>

                                <!-- product 6: price -->
                                <div class="font-medium text-xl text-[color:rgba(var(--ni-danger-400))] my-auto ml-auto">$3.3</div>
                            </div>  
                        </li>

                        <!-- product 7 -->
                        <li class="cursor-pointer p-4 pb-6 bg-white space-y-4 shadow-lg rounded-xl relative translate-y-3 hover:translate-y-0 duration-150" data-value="product 7">

                            <!-- product 7: image -->
                            <div class="flex justify-center items-center border border-[color:rgba(var(--ni-gray-300))] rounded-lg">
                                <img class="w-60 h-60 object-contain rounded-lg" src="https://i.guim.co.uk/img/media/88d049557e4b6c0a87f3bd013b397a61c954c694/232_115_2179_1308/master/2179.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=70f0a190792f6bd362244e68f1a92b65" alt="Swiss Cheese">
                            </div>

                            <div class="flex">
                                <!-- product 7: title & description -->
                                <div>
                                    <div class="font-medium">Swiss Cheese</div>
                                    <div class="text-xs text-[color:rgba(var(--ni-gray-400))]">Stock 1 in your shop</div>
                                </div>

                                <!-- product 7: price -->
                                <div class="font-medium text-xl text-[color:rgba(var(--ni-danger-400))] my-auto ml-auto">$9.9</div>
                            </div>  
                        </li>

                        <!-- product 8 -->
                        <li class="cursor-pointer p-4 pb-6 bg-white space-y-4 shadow-lg rounded-xl relative translate-y-3 hover:translate-y-0 duration-150" data-value="product 8">

                            <!-- product 8: image -->
                            <div class="flex justify-center items-center border border-[color:rgba(var(--ni-gray-300))] rounded-lg">
                                <img class="w-60 h-60 object-contain rounded-lg" src="https://thelittlebotanical.com/wp-content/uploads/2017/11/TLB_HOU001_02-4.jpg" alt="Chamaedorea">
                            </div>

                            <div class="flex">
                                <!-- product 8: title & description -->
                                <div>
                                    <div class="font-medium">Chamaedorea</div>
                                    <div class="text-xs text-[color:rgba(var(--ni-gray-400))]">Stock 10 in your shop</div>
                                </div>

                                <!-- product 8: price -->
                                <div class="font-medium text-xl text-[color:rgba(var(--ni-danger-400))] my-auto ml-auto">$2.2</div>
                            </div>  
                        </li>

                        <!-- product 9 -->
                        <li class="cursor-pointer p-4 pb-6 bg-white space-y-4 shadow-lg rounded-xl relative translate-y-3 hover:translate-y-0 duration-150" data-value="product 9">

                            <!-- product 9: image -->
                            <div class="flex justify-center items-center border border-[color:rgba(var(--ni-gray-300))] rounded-lg">
                                <img class="w-60 h-60 object-contain rounded-lg" src="https://mobileimages.lowes.com/productimages/139329f6-7f38-4c3c-a666-b08a27ff438b/02811070.jpg?size=pdhism" alt="Coleus">
                            </div>

                            <div class="flex">
                                <!-- product 9: title & description -->
                                <div>
                                    <div class="font-medium">Coleus</div>
                                    <div class="text-xs text-[color:rgba(var(--ni-gray-400))]">Stock 10 in your shop</div>
                                </div>

                                <!-- product 9: price -->
                                <div class="font-medium text-xl text-[color:rgba(var(--ni-danger-400))] my-auto ml-auto">$5.5</div>
                            </div>  
                        </li>

                        <!-- product 10 -->
                        <li class="cursor-pointer p-4 pb-6 bg-white space-y-4 shadow-lg rounded-xl relative translate-y-3 hover:translate-y-0 duration-150" data-value="product 10">

                            <!-- product 10: image -->
                            <div class="flex justify-center items-center border border-[color:rgba(var(--ni-gray-300))] rounded-lg">
                                <img class="w-60 h-60 object-contain rounded-lg" src="http://mobileimages.lowes.com/productimages/3d655a7c-7b56-4806-9a28-bebabf1d9203/10429390.jpg" alt="Coral Bells">
                            </div>

                            <div class="flex">
                                <!-- product 10: title & description -->
                                <div>
                                    <div class="font-medium">Coral Bells</div>
                                    <div class="text-xs text-[color:rgba(var(--ni-gray-400))]">Stock 10 in your shop</div>
                                </div>

                                <!-- product 10: price -->
                                <div class="font-medium text-xl text-[color:rgba(var(--ni-danger-400))] my-auto ml-auto">$6.6</div>
                            </div>  
                        </li>

                        <!-- product 11 -->
                        <li class="cursor-pointer p-4 pb-6 bg-white space-y-4 shadow-lg rounded-xl relative translate-y-3 hover:translate-y-0 duration-150" data-value="product 11">

                            <!-- product 11: image -->
                            <div class="flex justify-center items-center border border-[color:rgba(var(--ni-gray-300))] rounded-lg">
                                <img class="w-60 h-60 object-contain rounded-lg" src="http://mobileimages.lowes.com/productimages/a9e425c0-fbc4-4fe3-b69b-4c5fc041b56c/08839544.jpg" alt="Marigold">
                            </div>

                            <div class="flex">
                                <!-- product 11: title & description -->
                                <div>
                                    <div class="font-medium">Marigold</div>
                                    <div class="text-xs text-[color:rgba(var(--ni-gray-400))]">Stock 10 in your shop</div>
                                </div>

                                <!-- product 11: price -->
                                <div class="font-medium text-xl text-[color:rgba(var(--ni-danger-400))] my-auto ml-auto">$7.7</div>
                            </div>  
                        </li>

                        <!-- product 12 -->
                        <li class="cursor-pointer p-4 pb-6 bg-white space-y-4 shadow-lg rounded-xl relative translate-y-3 hover:translate-y-0 duration-150" data-value="product 12">

                            <!-- product 12: image -->
                            <div class="flex justify-center items-center border border-[color:rgba(var(--ni-gray-300))] rounded-lg">
                                <img class="w-60 h-60 object-contain rounded-lg" src="https://sf.tac-cdn.net/images/products/large/T12Z106A.jpg" alt="Easter Lily">
                            </div>

                            <div class="flex">
                                <!-- product 12: title & description -->
                                <div>
                                    <div class="font-medium">Easter Lily</div>
                                    <div class="text-xs text-[color:rgba(var(--ni-gray-400))]">Stock 10 in your shop</div>
                                </div>

                                <!-- product 12: price -->
                                <div class="font-medium text-xl text-[color:rgba(var(--ni-danger-400))] my-auto ml-auto">$8.8</div>
                            </div>  
                        </li>
                    </ul>
                </section>
            </div>

            <!-- right side -->
            <div id="right-side" class="w-full lg:w-[35%] p-8 xl:p-10 bg-white shadow-md rounded-md sticky top-0 hidden">

                <div class="space-y-5">
                    <!-- x -->
                    <div id="cancel-order" class="flex">
                        <div class="font-medium text-3xl">Plant Order</div>
                        <button class="ml-auto hover:text-[color:rgba(var(--ni-danger-500))] duration-150">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </button>
                    </div>

                    <!-- recipient -->
                    <div class="flex space-x-3">
                        <div class="text-lg xl:text-xl font-medium">Recipient : Ridh</div>
                        <svg class="w-7 h-7 animate-bounce" viewBox="0 0 64 64" id="Layer_1" style="enable-background:new 0 0 64 64;" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css"> .st0{fill:#B4E6DD;} .st1{fill:#80D4C4;} .st2{fill:#D2F0EA;} .st3{fill:#FFFFFF;} .st4{fill:#FBD872;} .st5{fill:#DB7767;} .st6{fill:#F38E7A;} .st7{fill:#F6AF62;} .st8{fill:#32A48E;} .st9{fill:#A38FD8;} .st10{fill:#7C64BD;} .st11{fill:#EAA157;} .st12{fill:#9681CF;} .st13{fill:#F9C46A;} .st14{fill:#CE6B61;}</style><g>
                            <path class="st6" d="M32,8c-9.54,0-17.27,7.73-17.27,17.27S32,56,32,56s17.27-21.19,17.27-30.73S41.54,8,32,8z M32,36.54   c-6.21,0-11.27-5.06-11.27-11.27S25.79,14,32,14c6.21,0,11.27,5.06,11.27,11.27S38.21,36.54,32,36.54z"/><path class="st2" d="M39.32,22.97c-4.04-4.04-10.6-4.04-14.64,0l-2.3,2.3l2.3,2.3c4.04,4.04,10.6,4.04,14.64,0l2.3-2.3L39.32,22.97   z"/><path class="st9" d="M34,24.77c-0.83,0-1.5-0.67-1.5-1.5c0-0.54,0.29-1.01,0.71-1.27c-0.38-0.14-0.78-0.23-1.21-0.23   c-1.93,0-3.5,1.57-3.5,3.5s1.57,3.5,3.5,3.5s3.5-1.57,3.5-3.5c0-0.43-0.09-0.83-0.23-1.21C35.01,24.48,34.54,24.77,34,24.77z"/></g>
                        </svg>
                    </div>

                    <!-- recipient address -->
                    <div class="pb-5 border-b border-[color:rgba(var(--ni-gray-300))]">
                        <address class="text-[color:rgba(var(--ni-gray-400))]">Full address: (+855) 89 780 093, Boeung Salang, Khan Russey Keo, Phnom Penh, Cambodia</address>
                    </div>
                </div>


                <!-- order lists -->
                <ul id="order-items" class="flex flex-col"></ul>

                <!-- total -->
                <div class="flex pt-5 pb-10 text-2xl">
                    <div class="font-medium">Total Price</div>
                    <div class="ml-auto font-bold text-[color:rgba(var(--ni-danger-400))]">$100.00</div>
                </div>

                <!-- buttons -->
                <div class="space-y-5">
                    <button class="w-full text-xl text-[color:rgba(var(--ni-gray-400))] py-3 border-dashed border-2 border-[color:rgba(var(--ni-gray-300))] duration-300">Add Voucher Code</button>
                    <button class="w-full text-xl text-white py-3 bg-[color:rgba(var(--ni-gray-700))] hover:bg-[color:rgba(var(--ni-gray-800))] rounded-md duration-300">Print Receipt</button>
                </div>
            </div>
        </div>
    </div> 
</div>

@endsection

@section('internalScript')

<script>

    // POS Plant shop function
    const posPlantShop = () => {

        const leftSide  = $("#left-side");
        const rightSide = $("#right-side");
        
        const productItems = $("#product-items");
        const productOrders = $("#order-items");

        const girdsProductItemsDefault    = ("lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5");
        const gridsProductItemsResponsive = ("lg:grid-cols-2 xl:grid-cols-2 2xl:grid-cols-3");
        
        // left side & right function
        const sidesPopUp = () => {

            if ( rightSide.hasClass("hidden") ) {

                leftSide.removeClass("lg:w-[65%]");

                productItems.removeClass(gridsProductItemsResponsive);
                productItems.addClass(girdsProductItemsDefault);

            } else {

                leftSide.addClass("lg:w-[65%]");

                productItems.removeClass(girdsProductItemsDefault);    
                productItems.addClass(gridsProductItemsResponsive);

            }

        }

        // onclick active nav items
        const activeNavItems = () => {
            
            const navProducts = $("#nav-products #nav-item");
            const activeNav   = ("bg-[color:rgba(var(--ni-primary-500))] text-white");

            navProducts.each(function(i, element) {

                $(this).click(function() {
                    navProducts.removeClass(activeNav);
                    $(this).addClass(activeNav);
                });

            });

        }

        // onclick food items
        const foodItemsOrder = () => {

            const eachProducts  = $("#product-items li");
            const closeOrder = $("#right-side #cancel-order button");

            const products = {
                chamaecyparis : (`
                                <!-- product order 1 -->
                                <li class="flex py-8 border-b border-[color:rgba(var(--ni-gray-300))]" data-product="1">
                                    <div class="w-full space-y-3 my-auto">
                                        <div class="font-medium text-2xl text-center 2xl:text-start">Chamaecyparis</div>
                                        <div class="flex justify-center items-center border border-[color:rgba(var(--ni-gray-300))] my-auto rounded-lg 2xl:hidden">
                                            <img class="w-40 h-40 object-cover rounded-full" src="https://api.floriday.io/images/0c65618e-6c4a-46db-99a5-c140570baab4.jpg?width=360&height=360&crop=pad" alt="Chamaecyparis">
                                        </div>
                                        <div class="flex justify-center 2xl:justify-start text-lg">
                                            <div class="font-medium text-[color:rgba(var(--ni-danger-400))]">$8.8</div>
                                            <div class="text-[color:rgba(var(--ni-gray-400))] ml-2">( Plant Pack )</div>
                                        </div>
                                        <div class="text-[color:rgba(var(--ni-gray-400))] text-center 2xl:text-start">Conifers in the cypress family Cupresaceae</div>
                                        <div class="flex justify-center 2xl:justify-start space-x-10 my-auto">
                                            <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-gray-700))] hover:bg-[color:rgba(var(--ni-gray-800))] text-white rounded-md duration-150">–</button>
                                            <input type="text" class="font-medium text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                            <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-gray-700))] hover:bg-[color:rgba(var(--ni-gray-800))] text-white rounded-md duration-150">+</button>
                                        </div>
                                    </div>
                                    <div class="flex-none ml-2 border border-[color:rgba(var(--ni-gray-300))] my-auto rounded-lg hidden 2xl:block">
                                        <img class="w-44 h-44 object-cover rounded-full" src="https://api.floriday.io/images/0c65618e-6c4a-46db-99a5-c140570baab4.jpg?width=360&height=360&crop=pad" alt="Chamaecyparis">
                                    </div>
                                </li>
                            `),

                fernPlant     : (`
                                <!-- product order 2 -->
                                <li class="flex py-8 border-b border-[color:rgba(var(--ni-gray-300))]" data-product="2">
                                    <div class="w-full space-y-3 my-auto">
                                        <div class="font-medium text-2xl text-center 2xl:text-start">Fern Plant</div>
                                        <div class="flex justify-center items-center border border-[color:rgba(var(--ni-gray-300))] my-auto rounded-lg 2xl:hidden">
                                            <img class="w-40 h-40 object-cover rounded-full" src="https://cdn11.bigcommerce.com/s-km30nn7y/images/stencil/1280x1280/products/241037/922644/apifueswv__57539.1592543006.jpg?c=3" alt="Fern Plant">
                                        </div>
                                        <div class="flex justify-center 2xl:justify-start text-lg">
                                            <div class="font-medium text-[color:rgba(var(--ni-danger-400))]">$7.7</div>
                                            <div class="text-[color:rgba(var(--ni-gray-400))] ml-2">( Plant Pack )</div>
                                        </div>
                                        <div class="text-[color:rgba(var(--ni-gray-400))] text-center 2xl:text-start">Conifers in the cypress family Cupresaceae</div>
                                        <div class="flex justify-center 2xl:justify-start space-x-10 my-auto">
                                            <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-gray-700))] hover:bg-[color:rgba(var(--ni-gray-800))] text-white rounded-md duration-150">–</button>
                                            <input type="text" class="font-medium text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                            <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-gray-700))] hover:bg-[color:rgba(var(--ni-gray-800))] text-white rounded-md duration-150">+</button>
                                        </div>
                                    </div>
                                    <div class="flex-none ml-2 border border-[color:rgba(var(--ni-gray-300))] my-auto rounded-lg hidden 2xl:block">
                                        <img class="w-44 h-44 object-cover rounded-full" src="https://cdn11.bigcommerce.com/s-km30nn7y/images/stencil/1280x1280/products/241037/922644/apifueswv__57539.1592543006.jpg?c=3" alt="Fern Plant">
                                    </div>
                                </li>
                            `),

                houseplant    : (`
                                <!-- product order 3 -->
                                <li class="flex py-8 border-b border-[color:rgba(var(--ni-gray-300))]" data-product="3">
                                    <div class="w-full space-y-3 my-auto">
                                        <div class="font-medium text-2xl text-center 2xl:text-start">Houseplant</div>
                                        <div class="flex justify-center items-center border border-[color:rgba(var(--ni-gray-300))] my-auto rounded-lg 2xl:hidden">
                                            <img class="w-40 h-40 object-cover rounded-full" src="https://cdn.britannica.com/41/156541-050-2BA71F34/philodendron.jpg" alt="Houseplant">
                                        </div>
                                        <div class="flex justify-center 2xl:justify-start text-lg">
                                            <div class="font-medium text-[color:rgba(var(--ni-danger-400))]">$6.6</div>
                                            <div class="text-[color:rgba(var(--ni-gray-400))] ml-2">( Plant Pack )</div>
                                        </div>
                                        <div class="text-[color:rgba(var(--ni-gray-400))] text-center 2xl:text-start">Conifers in the cypress family Cupresaceae</div>
                                        <div class="flex justify-center 2xl:justify-start space-x-10 my-auto">
                                            <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-gray-700))] hover:bg-[color:rgba(var(--ni-gray-800))] text-white rounded-md duration-150">–</button>
                                            <input type="text" class="font-medium text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                            <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-gray-700))] hover:bg-[color:rgba(var(--ni-gray-800))] text-white rounded-md duration-150">+</button>
                                        </div>
                                    </div>
                                    <div class="flex-none ml-2 border border-[color:rgba(var(--ni-gray-300))] my-auto rounded-lg hidden 2xl:block">
                                        <img class="w-44 h-44 object-cover rounded-full" src="https://cdn.britannica.com/41/156541-050-2BA71F34/philodendron.jpg" alt="Houseplant">
                                    </div>
                                </li>
                            `),

                dracaena      : (`
                                <!-- product order 4 -->
                                <li class="flex py-8 border-b border-[color:rgba(var(--ni-gray-300))]" data-product="4">
                                    <div class="w-full space-y-3 my-auto">
                                        <div class="font-medium text-2xl text-center 2xl:text-start">Dracaena</div>
                                        <div class="flex justify-center items-center border border-[color:rgba(var(--ni-gray-300))] my-auto rounded-lg 2xl:hidden">
                                            <img class="w-40 h-40 object-cover rounded-full" src="https://i5.walmartimages.com/asr/9207f6ff-8937-427f-8826-e62cf6db74a4_1.073244e52f8189ddd3aa36c10262dd03.jpeg" alt="Dracaena">
                                        </div>
                                        <div class="flex justify-center 2xl:justify-start text-lg">
                                            <div class="font-medium text-[color:rgba(var(--ni-danger-400))]">$5.5</div>
                                            <div class="text-[color:rgba(var(--ni-gray-400))] ml-2">( Plant Pack )</div>
                                        </div>
                                        <div class="text-[color:rgba(var(--ni-gray-400))] text-center 2xl:text-start">Conifers in the cypress family Cupresaceae</div>
                                        <div class="flex justify-center 2xl:justify-start space-x-10 my-auto">
                                            <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-gray-700))] hover:bg-[color:rgba(var(--ni-gray-800))] text-white rounded-md duration-150">–</button>
                                            <input type="text" class="font-medium text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                            <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-gray-700))] hover:bg-[color:rgba(var(--ni-gray-800))] text-white rounded-md duration-150">+</button>
                                        </div>
                                    </div>
                                    <div class="flex-none ml-2 border border-[color:rgba(var(--ni-gray-300))] my-auto rounded-lg hidden 2xl:block">
                                        <img class="w-44 h-44 object-cover rounded-full" src="https://i5.walmartimages.com/asr/9207f6ff-8937-427f-8826-e62cf6db74a4_1.073244e52f8189ddd3aa36c10262dd03.jpeg" alt="Dracaena">
                                    </div>
                                </li>
                            `),

                aloeVera      : (`
                                <!-- product order 5 -->
                                <li class="flex py-8 border-b border-[color:rgba(var(--ni-gray-300))]" data-product="5">
                                    <div class="w-full space-y-3 my-auto">
                                        <div class="font-medium text-2xl text-center 2xl:text-start">Aloe Vera</div>
                                        <div class="flex justify-center items-center border border-[color:rgba(var(--ni-gray-300))] my-auto rounded-lg 2xl:hidden">
                                            <img class="w-40 h-40 object-cover rounded-full" src="https://www.ikea.com/ch/en/images/products/aloe-vera-potted-plant-aloe__0548608_pe657287_s5.jpg?f=s" alt="Aloe Vera">
                                        </div>
                                        <div class="flex justify-center 2xl:justify-start text-lg">
                                            <div class="font-medium text-[color:rgba(var(--ni-danger-400))]">$4.4</div>
                                            <div class="text-[color:rgba(var(--ni-gray-400))] ml-2">( Plant Pack )</div>
                                        </div>
                                        <div class="text-[color:rgba(var(--ni-gray-400))] text-center 2xl:text-start">Conifers in the cypress family Cupresaceae</div>
                                        <div class="flex justify-center 2xl:justify-start space-x-10 my-auto">
                                            <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-gray-700))] hover:bg-[color:rgba(var(--ni-gray-800))] text-white rounded-md duration-150">–</button>
                                            <input type="text" class="font-medium text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                            <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-gray-700))] hover:bg-[color:rgba(var(--ni-gray-800))] text-white rounded-md duration-150">+</button>
                                        </div>
                                    </div>
                                    <div class="flex-none ml-2 border border-[color:rgba(var(--ni-gray-300))] my-auto rounded-lg hidden 2xl:block">
                                        <img class="w-44 h-44 object-cover rounded-full" src="https://www.ikea.com/ch/en/images/products/aloe-vera-potted-plant-aloe__0548608_pe657287_s5.jpg?f=s" alt="Aloe Vera">
                                    </div>
                                </li>
                            `),

                cactusPlant   : (`
                                <!-- product order 6 -->
                                <li class="flex py-8 border-b border-[color:rgba(var(--ni-gray-300))]" data-product="6">
                                    <div class="w-full space-y-3 my-auto">
                                        <div class="font-medium text-2xl text-center 2xl:text-start">Cactus Plant</div>
                                        <div class="flex justify-center items-center border border-[color:rgba(var(--ni-gray-300))] my-auto rounded-lg 2xl:hidden">
                                            <img class="w-40 h-40 object-cover rounded-full" src="https://www.artificialplantsandtrees.com/mm5/graphics/00000002/AGF1018-ZM-1.jpg" alt="Cactus Plant">
                                        </div>
                                        <div class="flex justify-center 2xl:justify-start text-lg">
                                            <div class="font-medium text-[color:rgba(var(--ni-danger-400))]">$3.3</div>
                                            <div class="text-[color:rgba(var(--ni-gray-400))] ml-2">( Plant Pack )</div>
                                        </div>
                                        <div class="text-[color:rgba(var(--ni-gray-400))] text-center 2xl:text-start">Conifers in the cypress family Cupresaceae</div>
                                        <div class="flex justify-center 2xl:justify-start space-x-10 my-auto">
                                            <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-gray-700))] hover:bg-[color:rgba(var(--ni-gray-800))] text-white rounded-md duration-150">–</button>
                                            <input type="text" class="font-medium text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                            <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-gray-700))] hover:bg-[color:rgba(var(--ni-gray-800))] text-white rounded-md duration-150">+</button>
                                        </div>
                                    </div>
                                    <div class="flex-none ml-2 border border-[color:rgba(var(--ni-gray-300))] my-auto rounded-lg hidden 2xl:block">
                                        <img class="w-44 h-44 object-cover rounded-full" src="https://www.artificialplantsandtrees.com/mm5/graphics/00000002/AGF1018-ZM-1.jpg" alt="Cactus Plant">
                                    </div>
                                </li>
                            `),
                swissCheese   : (`
                                <!-- product order 7 -->
                                <li class="flex py-8 border-b border-[color:rgba(var(--ni-gray-300))]" data-product="7">
                                    <div class="w-full space-y-3 my-auto">
                                        <div class="font-medium text-2xl text-center 2xl:text-start">Swiss Cheese</div>
                                        <div class="flex justify-center items-center border border-[color:rgba(var(--ni-gray-300))] my-auto rounded-lg 2xl:hidden">
                                            <img class="w-40 h-40 object-cover rounded-full" src="https://i.guim.co.uk/img/media/88d049557e4b6c0a87f3bd013b397a61c954c694/232_115_2179_1308/master/2179.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=70f0a190792f6bd362244e68f1a92b65" alt="Swiss Cheese">
                                        </div>
                                        <div class="flex justify-center 2xl:justify-start text-lg">
                                            <div class="font-medium text-[color:rgba(var(--ni-danger-400))]">$9.9</div>
                                            <div class="text-[color:rgba(var(--ni-gray-400))] ml-2">( Plant Pack )</div>
                                        </div>
                                        <div class="text-[color:rgba(var(--ni-gray-400))] text-center 2xl:text-start">Conifers in the cypress family Cupresaceae</div>
                                        <div class="flex justify-center 2xl:justify-start space-x-10 my-auto">
                                            <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-gray-700))] hover:bg-[color:rgba(var(--ni-gray-800))] text-white rounded-md duration-150">–</button>
                                            <input type="text" class="font-medium text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                            <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-gray-700))] hover:bg-[color:rgba(var(--ni-gray-800))] text-white rounded-md duration-150">+</button>
                                        </div>
                                    </div>
                                    <div class="flex-none ml-2 border border-[color:rgba(var(--ni-gray-300))] my-auto rounded-lg hidden 2xl:block">
                                        <img class="w-44 h-44 object-cover rounded-full" src="https://i.guim.co.uk/img/media/88d049557e4b6c0a87f3bd013b397a61c954c694/232_115_2179_1308/master/2179.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=70f0a190792f6bd362244e68f1a92b65" alt="Swiss Cheese">
                                    </div>
                                </li>
                            `),

                chamaedorea   : (`
                                <!-- product order 8 -->
                                <li class="flex py-8 border-b border-[color:rgba(var(--ni-gray-300))]" data-product="8">
                                    <div class="w-full space-y-3 my-auto">
                                        <div class="font-medium text-2xl text-center 2xl:text-start">Chamaedorea</div>
                                        <div class="flex justify-center items-center border border-[color:rgba(var(--ni-gray-300))] my-auto rounded-lg 2xl:hidden">
                                            <img class="w-40 h-40 object-cover rounded-full" src="https://thelittlebotanical.com/wp-content/uploads/2017/11/TLB_HOU001_02-4.jpg" alt="Chamaedorea">
                                        </div>
                                        <div class="flex justify-center 2xl:justify-start text-lg">
                                            <div class="font-medium text-[color:rgba(var(--ni-danger-400))]">$2.2</div>
                                            <div class="text-[color:rgba(var(--ni-gray-400))] ml-2">( Plant Pack )</div>
                                        </div>
                                        <div class="text-[color:rgba(var(--ni-gray-400))] text-center 2xl:text-start">Conifers in the cypress family Cupresaceae</div>
                                        <div class="flex justify-center 2xl:justify-start space-x-10 my-auto">
                                            <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-gray-700))] hover:bg-[color:rgba(var(--ni-gray-800))] text-white rounded-md duration-150">–</button>
                                            <input type="text" class="font-medium text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                            <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-gray-700))] hover:bg-[color:rgba(var(--ni-gray-800))] text-white rounded-md duration-150">+</button>
                                        </div>
                                    </div>
                                    <div class="flex-none ml-2 border border-[color:rgba(var(--ni-gray-300))] my-auto rounded-lg hidden 2xl:block">
                                        <img class="w-44 h-44 object-cover rounded-full" src="https://thelittlebotanical.com/wp-content/uploads/2017/11/TLB_HOU001_02-4.jpg" alt="Chamaedorea">
                                    </div>
                                </li>
                            `),

                coleus        : (`
                                <!-- product order 9 -->
                                <li class="flex py-8 border-b border-[color:rgba(var(--ni-gray-300))]" data-product="9">
                                    <div class="w-full space-y-3 my-auto">
                                        <div class="font-medium text-2xl text-center 2xl:text-start">Coleus</div>
                                        <div class="flex justify-center items-center border border-[color:rgba(var(--ni-gray-300))] my-auto rounded-lg 2xl:hidden">
                                            <img class="w-40 h-40 object-cover rounded-full" src="https://mobileimages.lowes.com/productimages/139329f6-7f38-4c3c-a666-b08a27ff438b/02811070.jpg?size=pdhism" alt="Coleus">
                                        </div>
                                        <div class="flex justify-center 2xl:justify-start text-lg">
                                            <div class="font-medium text-[color:rgba(var(--ni-danger-400))]">$5.5</div>
                                            <div class="text-[color:rgba(var(--ni-gray-400))] ml-2">( Plant Pack )</div>
                                        </div>
                                        <div class="text-[color:rgba(var(--ni-gray-400))] text-center 2xl:text-start">Conifers in the cypress family Cupresaceae</div>
                                        <div class="flex justify-center 2xl:justify-start space-x-10 my-auto">
                                            <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-gray-700))] hover:bg-[color:rgba(var(--ni-gray-800))] text-white rounded-md duration-150">–</button>
                                            <input type="text" class="font-medium text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                            <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-gray-700))] hover:bg-[color:rgba(var(--ni-gray-800))] text-white rounded-md duration-150">+</button>
                                        </div>
                                    </div>
                                    <div class="flex-none ml-2 border border-[color:rgba(var(--ni-gray-300))] my-auto rounded-lg hidden 2xl:block">
                                        <img class="w-44 h-44 object-cover rounded-full" src="https://mobileimages.lowes.com/productimages/139329f6-7f38-4c3c-a666-b08a27ff438b/02811070.jpg?size=pdhism" alt="Coleus">
                                    </div>
                                </li>
                            `),

                coralBells    : (`
                                <!-- product order 10 -->
                                <li class="flex py-8 border-b border-[color:rgba(var(--ni-gray-300))]" data-product="10">
                                    <div class="w-full space-y-3 my-auto">
                                        <div class="font-medium text-2xl text-center 2xl:text-start">Coral Bells</div>
                                        <div class="flex justify-center items-center border border-[color:rgba(var(--ni-gray-300))] my-auto rounded-lg 2xl:hidden">
                                            <img class="w-40 h-40 object-cover rounded-full" src="http://mobileimages.lowes.com/productimages/3d655a7c-7b56-4806-9a28-bebabf1d9203/10429390.jpg" alt="Coral Bells">
                                        </div>
                                        <div class="flex justify-center 2xl:justify-start text-lg">
                                            <div class="font-medium text-[color:rgba(var(--ni-danger-400))]">$6.6</div>
                                            <div class="text-[color:rgba(var(--ni-gray-400))] ml-2">( Plant Pack )</div>
                                        </div>
                                        <div class="text-[color:rgba(var(--ni-gray-400))] text-center 2xl:text-start">Conifers in the cypress family Cupresaceae</div>
                                        <div class="flex justify-center 2xl:justify-start space-x-10 my-auto">
                                            <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-gray-700))] hover:bg-[color:rgba(var(--ni-gray-800))] text-white rounded-md duration-150">–</button>
                                            <input type="text" class="font-medium text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                            <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-gray-700))] hover:bg-[color:rgba(var(--ni-gray-800))] text-white rounded-md duration-150">+</button>
                                        </div>
                                    </div>
                                    <div class="flex-none ml-2 border border-[color:rgba(var(--ni-gray-300))] my-auto rounded-lg hidden 2xl:block">
                                        <img class="w-44 h-44 object-cover rounded-full" src="http://mobileimages.lowes.com/productimages/3d655a7c-7b56-4806-9a28-bebabf1d9203/10429390.jpg" alt="Coral Bells">
                                    </div>
                                </li>
                            `),

                marigold      : (`
                                <!-- product order 11 -->
                                <li class="flex py-8 border-b border-[color:rgba(var(--ni-gray-300))]" data-product="11">
                                    <div class="w-full space-y-3 my-auto">
                                        <div class="font-medium text-2xl text-center 2xl:text-start">Marigold</div>
                                        <div class="flex justify-center items-center border border-[color:rgba(var(--ni-gray-300))] my-auto rounded-lg 2xl:hidden">
                                            <img class="w-40 h-40 object-cover rounded-full" src="http://mobileimages.lowes.com/productimages/a9e425c0-fbc4-4fe3-b69b-4c5fc041b56c/08839544.jpg" alt="Marigold">
                                        </div>
                                        <div class="flex justify-center 2xl:justify-start text-lg">
                                            <div class="font-medium text-[color:rgba(var(--ni-danger-400))]">$7.7</div>
                                            <div class="text-[color:rgba(var(--ni-gray-400))] ml-2">( Plant Pack )</div>
                                        </div>
                                        <div class="text-[color:rgba(var(--ni-gray-400))] text-center 2xl:text-start">Conifers in the cypress family Cupresaceae</div>
                                        <div class="flex justify-center 2xl:justify-start space-x-10 my-auto">
                                            <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-gray-700))] hover:bg-[color:rgba(var(--ni-gray-800))] text-white rounded-md duration-150">–</button>
                                            <input type="text" class="font-medium text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                            <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-gray-700))] hover:bg-[color:rgba(var(--ni-gray-800))] text-white rounded-md duration-150">+</button>
                                        </div>
                                    </div>
                                    <div class="flex-none ml-2 border border-[color:rgba(var(--ni-gray-300))] my-auto rounded-lg hidden 2xl:block">
                                        <img class="w-44 h-44 object-cover rounded-full" src="http://mobileimages.lowes.com/productimages/a9e425c0-fbc4-4fe3-b69b-4c5fc041b56c/08839544.jpg" alt="Marigold">
                                    </div>
                                </li>
                            `),

                easterLily    : (`
                                <!-- product order 12 -->
                                <li class="flex py-8 border-b border-[color:rgba(var(--ni-gray-300))]" data-product="12">
                                    <div class="w-full space-y-3 my-auto">
                                        <div class="font-medium text-2xl text-center 2xl:text-start">Easter Lily</div>
                                        <div class="flex justify-center items-center border border-[color:rgba(var(--ni-gray-300))] my-auto rounded-lg 2xl:hidden">
                                            <img class="w-40 h-40 object-cover rounded-full" src="https://sf.tac-cdn.net/images/products/large/T12Z106A.jpg" alt="Easter Lily">
                                        </div>
                                        <div class="flex justify-center 2xl:justify-start text-lg">
                                            <div class="font-medium text-[color:rgba(var(--ni-danger-400))]">$8.8</div>
                                            <div class="text-[color:rgba(var(--ni-gray-400))] ml-2">( Plant Pack )</div>
                                        </div>
                                        <div class="text-[color:rgba(var(--ni-gray-400))] text-center 2xl:text-start">Conifers in the cypress family Cupresaceae</div>
                                        <div class="flex justify-center 2xl:justify-start space-x-10 my-auto">
                                            <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-gray-700))] hover:bg-[color:rgba(var(--ni-gray-800))] text-white rounded-md duration-150">–</button>
                                            <input type="text" class="font-medium text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                            <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-gray-700))] hover:bg-[color:rgba(var(--ni-gray-800))] text-white rounded-md duration-150">+</button>
                                        </div>
                                    </div>
                                    <div class="flex-none ml-2 border border-[color:rgba(var(--ni-gray-300))] my-auto rounded-lg hidden 2xl:block">
                                        <img class="w-44 h-44 object-cover rounded-full" src="https://sf.tac-cdn.net/images/products/large/T12Z106A.jpg" alt="Easter Lily">
                                    </div>
                                </li>
                            `),
            }

            // each food onclick
            eachProducts.each(function(i, element) {

                $(this).click(function() {

                    rightSide.removeClass("hidden");
                    leftSide.addClass("lg:w-[65%]");

                    productItems.removeClass(girdsProductItemsDefault);
                    productItems.addClass(gridsProductItemsResponsive);

                    // append food to order lists
                    if (i == 0) {
                        productOrders.append(products.chamaecyparis);
                    }
                    
                    if ( i == 1 ) {
                        productOrders.append(products.fernPlant);
                    }

                    if ( i == 2 ) {
                        productOrders.append(products.houseplant);
                    }

                    if ( i == 3 ) {
                        productOrders.append(products.dracaena);
                    }

                    if ( i == 4 ) {
                        productOrders.append(products.aloeVera);
                    }

                    if ( i == 5 ) {
                        productOrders.append(products.cactusPlant);
                    }

                    if ( i == 6 ) {
                        productOrders.append(products.swissCheese);
                    }

                    if ( i == 7 ) {
                        productOrders.append(products.chamaedorea);
                    }

                    if ( i == 8 ) {
                        productOrders.append(products.coleus);
                    }

                    if ( i == 9 ) {
                        productOrders.append(products.coralBells);
                    }

                    if ( i == 10 ) {
                        productOrders.append(products.marigold);
                    }

                    if ( i == 11 ) {
                        productOrders.append(products.easterLily);
                    }

                });
            });

            // x button to cancel order
            closeOrder.click(function() {

                rightSide.addClass("hidden");
                leftSide.removeClass("lg:w-[65%]");

                productItems.removeClass(gridsProductItemsResponsive);
                productItems.addClass(girdsProductItemsDefault);
                
            });

        }

        // add & sub quantity function
        const addSubQuantity = () => {

            const add = $(".add");
            const sub = $(".sub");

            // add quantity
            add.click(function() {
                if ($(this).prev().val() < 12) {
                    $(this).prev().val(+$(this).prev().val() + 1);
                }
            });

            // sub quantity
            sub.click(function() {
                if ($(this).next().val() > 1) {
                    if ($(this).next().val() > 1) {
                        $(this).next().val(+$(this).next().val() - 1);
                    }
                }
            });

        }

        // call functions
        sidesPopUp();
        activeNavItems();
        foodItemsOrder();
        addSubQuantity();

    }

    // call function
    posPlantShop();

</script>

@endsection