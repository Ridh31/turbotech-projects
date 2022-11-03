/**
 * @author                  Roungridh Him
 * @version                 N/A
**/ 

/*
*--------------------------------------------------------------------------
* POS Food Order function
*--------------------------------------------------------------------------
*/

// POS Food Order function
const posFoodOrder = () => {

    const leftSide  = $("#left-side");
    const rightSide = $("#right-side");
    
    const header    = $("#header");
    const foodItems = $("#food-items");
    const foodOrders = $("#order-items");

    const girdsFoodItemsDefault    = ("lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5");
    const gridsFoodItemsResponsive = ("md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3");
    
    // left side & right function
    const sidesPopUp = () => {

        if ( rightSide.hasClass("hidden") ) {

            leftSide.removeClass("lg:w-[65%]");
            header.addClass("md:mx-40");

            foodItems.removeClass(gridsFoodItemsResponsive);
            foodItems.addClass(girdsFoodItemsDefault);

        } else {

            leftSide.addClass("lg:w-[65%]");
            header.removeClass("md:mx-40");

            foodItems.removeClass(gridsFoodItemsResponsive);    
            foodItems.addClass(girdsFoodItemsDefault);

        }

    }

    // onclick food items
    const foodItemsOrder = () => {

        const eachFoods  = $("#food-items div");
        const closeOrder = $("#right-side #cancel-order button");
        const eachFoodOrders = $("#order-items div");

        const foods = {
            firstFood  : (`
                            <!-- food order 1 -->
                            <li class="flex" data-food="1">
                                <div class="flex-none rounded-md">
                                    <img class="w-20 h-20 object-cover rounded-md" src="https://i1.wp.com/www.bakingwithdan.com/wp-content/uploads/2021/03/almondcroissant.2-scaled.jpg" alt="Almond Brown Sugar Croissant">
                                </div>

                                <div class="w-full space-y-3 ml-2 my-auto">
                                    <div class="flex">
                                        <div class="font-medium text-sm 2xl:text-lg">Almond Brown Sugar Croissant</div>
                                        <div class="cursor-pointer ml-auto p-1 hover:bg-[color:rgba(var(--ni-gray-200))] rounded-full duration-150">
                                            <svg class="w-5 h-5" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                <path style="fill:#78B9EB;" d="M331.636,110.545H180.364V0h151.273V110.545z M215.273,75.636h81.455V34.909h-81.455V75.636z"/><rect x="87.273" y="162.909" style="fill:#C9E3F7;" width="337.455" height="349.091"/><rect x="256" y="162.909" style="fill:#78B9EB;" width="168.727" height="349.091"/><rect x="52.364" y="69.818" style="fill:#FFC170;" width="407.273" height="128"/><rect x="256" y="69.818" style="fill:#FF9811;" width="203.636" height="128"/><g><rect x="168.727" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/><rect x="308.364" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/><rect x="238.545" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="flex">
                                        <div class="font-medium text-[color:rgba(var(--ni-danger-500))]">$12.98</div>
                                        <div class="flex space-x-2 xl:space-x-3 2xl:space-4 ml-auto my-auto">
                                            <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-danger-500))] hover:bg-[color:rgba(var(--ni-danger-300))] text-white rounded-md duration-150">-</button>
                                            <input type="text" class="text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                            <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-danger-500))] hover:bg-[color:rgba(var(--ni-danger-300))] text-white rounded-md duration-150">+</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        `),

            secondFood : (`
                            <!-- food order 2 -->
                            <li class="flex" data-food="2"> 
                                <div class="flex-none rounded-md">
                                    <img class="w-20 h-20 object-cover rounded-md" src="https://www.smoking-meat.com/image-files/smoked-pork-tenderloin-sliders-1000.jpg" alt="Smoke Tenderloin Slide Croissant">
                                </div>

                                <div class="w-full space-y-3 ml-2 my-auto">
                                    <div class="flex">
                                        <div class="font-medium text-sm 2xl:text-lg">Almond Brown Sugar Croissant</div>
                                        <div class="cursor-pointer ml-auto p-1 hover:bg-[color:rgba(var(--ni-gray-200))] rounded-full duration-150">
                                            <svg class="w-5 h-5" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                <path style="fill:#78B9EB;" d="M331.636,110.545H180.364V0h151.273V110.545z M215.273,75.636h81.455V34.909h-81.455V75.636z"/><rect x="87.273" y="162.909" style="fill:#C9E3F7;" width="337.455" height="349.091"/><rect x="256" y="162.909" style="fill:#78B9EB;" width="168.727" height="349.091"/><rect x="52.364" y="69.818" style="fill:#FFC170;" width="407.273" height="128"/><rect x="256" y="69.818" style="fill:#FF9811;" width="203.636" height="128"/><g><rect x="168.727" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/><rect x="308.364" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/><rect x="238.545" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                            </svg>
                                        </div>
                                    </div>
                                    
                                    <div class="flex">
                                        <div class="font-medium text-[color:rgba(var(--ni-danger-500))]">$12.98</div>
                                        <div class="flex space-x-2 xl:space-x-3 2xl:space-4 ml-auto my-auto">
                                            <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-danger-500))] hover:bg-[color:rgba(var(--ni-danger-300))] text-white rounded-md duration-150">-</button>
                                            <input type="text" class="text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                            <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-danger-500))] hover:bg-[color:rgba(var(--ni-danger-300))] text-white rounded-md duration-150">+</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        `),

            thirdFood  : (`
                            <!-- food order 2 -->
                            <li class="flex" data-food="3">
                                <div class="flex-none rounded-md">
                                    <img class="w-20 h-20 object-cover rounded-md" src="https://www.thekitchenwhisperer.net/wp-content/uploads/2014/02/Croissant-Love1.jpg" alt="Berry Whipped Cream Croissant">
                                </div>

                                <div class="w-full space-y-3 ml-2 my-auto">
                                    <div class="flex">
                                        <div class="font-medium text-sm 2xl:text-lg">Berry Whipped Cream Croissant</div>
                                        <div class="cursor-pointer ml-auto p-1 hover:bg-[color:rgba(var(--ni-gray-200))] rounded-full duration-150">
                                            <svg class="w-5 h-5" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                <path style="fill:#78B9EB;" d="M331.636,110.545H180.364V0h151.273V110.545z M215.273,75.636h81.455V34.909h-81.455V75.636z"/><rect x="87.273" y="162.909" style="fill:#C9E3F7;" width="337.455" height="349.091"/><rect x="256" y="162.909" style="fill:#78B9EB;" width="168.727" height="349.091"/><rect x="52.364" y="69.818" style="fill:#FFC170;" width="407.273" height="128"/><rect x="256" y="69.818" style="fill:#FF9811;" width="203.636" height="128"/><g><rect x="168.727" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/><rect x="308.364" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/><rect x="238.545" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                            </svg>
                                        </div>
                                    </div>
                                    
                                    <div class="flex">
                                        <div class="font-medium text-[color:rgba(var(--ni-danger-500))]">$8.92</div>
                                        <div class="flex space-x-2 xl:space-x-3 2xl:space-4 ml-auto my-auto">
                                            <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-danger-500))] hover:bg-[color:rgba(var(--ni-danger-300))] text-white rounded-md duration-150">-</button>
                                            <input type="text" class="text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                            <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-danger-500))] hover:bg-[color:rgba(var(--ni-danger-300))] text-white rounded-md duration-150">+</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        `),

            fouthFood  : (`
                            <!-- food order 2 -->
                            <li class="flex" data-food="4">
                                <div class="flex-none rounded-md">
                                    <img class="w-20 h-20 object-cover rounded-md" src="https://www.washingtonpost.com/rf/image_1484w/2010-2019/WashingtonPost/2018/07/11/Food/Images/fd-studio17.JPG?t=20170517" alt="Sweet Granulated Sugar Croissant">
                                </div>

                                <div class="w-full space-y-3 ml-2 my-auto">
                                    <div class="flex">
                                        <div class="font-medium text-sm 2xl:text-lg">Sweet Granulated Sugar Croissant</div>
                                        <div class="cursor-pointer ml-auto p-1 hover:bg-[color:rgba(var(--ni-gray-200))] rounded-full duration-150">
                                            <svg class="w-5 h-5" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                <path style="fill:#78B9EB;" d="M331.636,110.545H180.364V0h151.273V110.545z M215.273,75.636h81.455V34.909h-81.455V75.636z"/><rect x="87.273" y="162.909" style="fill:#C9E3F7;" width="337.455" height="349.091"/><rect x="256" y="162.909" style="fill:#78B9EB;" width="168.727" height="349.091"/><rect x="52.364" y="69.818" style="fill:#FFC170;" width="407.273" height="128"/><rect x="256" y="69.818" style="fill:#FF9811;" width="203.636" height="128"/><g><rect x="168.727" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/><rect x="308.364" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/><rect x="238.545" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                            </svg>
                                        </div>
                                    </div>
                                    
                                    <div class="flex">
                                        <div class="font-medium text-[color:rgba(var(--ni-danger-500))]">$8.92</div>
                                        <div class="flex space-x-2 xl:space-x-3 2xl:space-4 ml-auto my-auto">
                                            <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-danger-500))] hover:bg-[color:rgba(var(--ni-danger-300))] text-white rounded-md duration-150">-</button>
                                            <input type="text" class="text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                            <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-danger-500))] hover:bg-[color:rgba(var(--ni-danger-300))] text-white rounded-md duration-150">+</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        `),

            fifthFood  : (`
                            <!-- food order 2 -->
                            <li class="flex" data-food="5">
                                <div class="flex-none rounded-md">
                                    <img class="w-20 h-20 object-cover rounded-md" src="https://www.365daysofbakingandmore.com/wp-content/uploads/2017/01/Chocolate-Croissant-Baked-French-Toast-TOP-2.jpg" alt="Sweet Chocolate Chocochips Croissant">
                                </div>

                                <div class="w-full space-y-3 ml-2 my-auto">
                                    <div class="flex">
                                        <div class="font-medium text-sm 2xl:text-lg">Sweet Chocolate Chocochips Croissant</div>
                                        <div class="cursor-pointer ml-auto p-1 hover:bg-[color:rgba(var(--ni-gray-200))] rounded-full duration-150">
                                            <svg class="w-5 h-5" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                <path style="fill:#78B9EB;" d="M331.636,110.545H180.364V0h151.273V110.545z M215.273,75.636h81.455V34.909h-81.455V75.636z"/><rect x="87.273" y="162.909" style="fill:#C9E3F7;" width="337.455" height="349.091"/><rect x="256" y="162.909" style="fill:#78B9EB;" width="168.727" height="349.091"/><rect x="52.364" y="69.818" style="fill:#FFC170;" width="407.273" height="128"/><rect x="256" y="69.818" style="fill:#FF9811;" width="203.636" height="128"/><g><rect x="168.727" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/><rect x="308.364" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/><rect x="238.545" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                            </svg>
                                        </div>
                                    </div>
                                    
                                    <div class="flex">
                                        <div class="font-medium text-[color:rgba(var(--ni-danger-500))]">$8.92</div>
                                        <div class="flex space-x-2 xl:space-x-3 2xl:space-4 ml-auto my-auto">
                                            <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-danger-500))] hover:bg-[color:rgba(var(--ni-danger-300))] text-white rounded-md duration-150">-</button>
                                            <input type="text" class="text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                            <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-danger-500))] hover:bg-[color:rgba(var(--ni-danger-300))] text-white rounded-md duration-150">+</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        `),

            sixthFood  : (`
                            <!-- food order 2 -->
                            <li class="flex" data-food="6">
                                <div class="flex-none rounded-md">
                                    <img class="w-20 h-20 object-cover rounded-md" src="https://img.delicious.com.au/RzgR3kXD/w1200/del/2015/12/cornetti-italian-croissants-24713-1.jpg" alt="Basic Croissant La Ta Dhore">
                                </div>

                                <div class="w-full space-y-3 ml-2 my-auto">
                                    <div class="flex">
                                        <div class="font-medium text-sm 2xl:text-lg">Basic Croissant La Ta Dhore</div>
                                        <div class="cursor-pointer ml-auto p-1 hover:bg-[color:rgba(var(--ni-gray-200))] rounded-full duration-150">
                                            <svg class="w-5 h-5" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                <path style="fill:#78B9EB;" d="M331.636,110.545H180.364V0h151.273V110.545z M215.273,75.636h81.455V34.909h-81.455V75.636z"/><rect x="87.273" y="162.909" style="fill:#C9E3F7;" width="337.455" height="349.091"/><rect x="256" y="162.909" style="fill:#78B9EB;" width="168.727" height="349.091"/><rect x="52.364" y="69.818" style="fill:#FFC170;" width="407.273" height="128"/><rect x="256" y="69.818" style="fill:#FF9811;" width="203.636" height="128"/><g><rect x="168.727" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/><rect x="308.364" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/><rect x="238.545" y="256" style="fill:#3C5D76;" width="34.909" height="162.909"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                            </svg>
                                        </div>
                                    </div>
                                    
                                    <div class="flex">
                                        <div class="font-medium text-[color:rgba(var(--ni-danger-500))]">$8.92</div>
                                        <div class="flex space-x-2 xl:space-x-3 2xl:space-4 ml-auto my-auto">
                                            <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-danger-500))] hover:bg-[color:rgba(var(--ni-danger-300))] text-white rounded-md duration-150">-</button>
                                            <input type="text" class="text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                            <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-danger-500))] hover:bg-[color:rgba(var(--ni-danger-300))] text-white rounded-md duration-150">+</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        `)
        }

        // each food onclick
        eachFoods.each(function(i, element) {

            $(this).click(function() {

                rightSide.removeClass("hidden");

                leftSide.addClass("lg:w-[65%]");
                header.removeClass("md:mx-40");

                foodItems.removeClass(girdsFoodItemsDefault);
                foodItems.addClass(gridsFoodItemsResponsive);

                // append food to order lists
                if (i == 0) {
                    foodOrders.append(foods.firstFood);
                }
                
                if ( i == 6 ) {
                    foodOrders.append(foods.secondFood);
                }

                if ( i == 12 ) {
                    foodOrders.append(foods.thirdFood);
                }

                if ( i == 18 ) {
                    foodOrders.append(foods.fouthFood);
                }

                if ( i == 24 ) {
                    foodOrders.append(foods.fifthFood);
                }

                if ( i == 30 ) {
                    foodOrders.append(foods.sixthFood);
                }

            });
        });

        // x button to cancel order
        closeOrder.click(function() {

            rightSide.addClass("hidden");

            leftSide.removeClass("lg:w-[65%]");
            header.addClass("md:mx-40");

            foodItems.removeClass(gridsFoodItemsResponsive);
            foodItems.addClass(girdsFoodItemsDefault);
            
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
    foodItemsOrder();
    addSubQuantity();

}

// call function
posFoodOrder();

/*
*--------------------------------------------------------------------------
* End of POS Food Order function
*--------------------------------------------------------------------------
*/

/*
*--------------------------------------------------------------------------
* POS Restaurant Order function 
*--------------------------------------------------------------------------
*/

// POS Restaurant Order function -->
const posRestaurantOrder = () => {

    const leftSide  = $("#left-side");
    const rightSide = $("#right-side");
    
    const foodItems = $("#food-items");
    const foodOrders = $("#order-items");

    const girdsFoodItemsDefault    = ("lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5");
    const gridsFoodItemsResponsive = ("lg:grid-cols-2 xl:grid-cols-2 2xl:grid-cols-3");
    
    // left side & right function
    const sidesPopUp = () => {

        if ( rightSide.hasClass("hidden") ) {

            leftSide.removeClass("lg:w-[65%]");

            foodItems.removeClass(girdsFoodItemsDefault);
            foodItems.addClass(girdsFoodItemsDefault);

        } else {

            leftSide.addClass("lg:w-[65%]");

            foodItems.removeClass(girdsFoodItemsDefault);    
            foodItems.addClass(gridsFoodItemsResponsive);

        }

    }

    // onclick food items
    const foodItemsOrder = () => {

        const addFoods   = $("#food-items li div:last-child .add-food");
        const eachSizes  = $("#food-items li div:last-child div:first-child div");
        const active     = ("bg-[color:rgba(var(--ni-danger-400))] text-white");
        const added      = ("Added");
        const closeOrder = $("#right-side #cancel-order button");

        const foods = {
            firstFood  : (`
                            <!-- food order 1 -->
                            <li class="flex p-5 bg-[color:rgba(var(--ni-gray-50))] rounded-xl" data-food="1">
                                <div class="flex-none rounded-full my-auto">
                                    <img class="w-20 h-20 object-cover rounded-full" src="https://us2guntur.com/images//10024img/FarmHouse_B_260216.jpg" alt="Farm Villa">
                                </div>
                                <div class="w-full space-y-3 ml-2 my-auto">
                                    <div class="flex">
                                        <div class="font-medium text-sm 2xl:text-lg">Farm Villa</div>
                                        <div class="flex space-x-2 xl:space-x-3 2xl:space-4 ml-auto my-auto p-1 bg-white rounded-xl">
                                            <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-yellow-400))] text-white rounded-full duration-150">–</button>
                                            <input type="text" class="font-medium text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                            <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-yellow-400))] text-white rounded-full duration-150">+</button>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="font-medium text-[color:rgba(var(--ni-danger-500))]">$8.00</div>
                                        <div id="remove-food" class="cursor-pointer ml-auto text-sm text-[color:rgba(var(--ni-danger-400))] hover:text-[color:rgba(var(--ni-danger-500))]">Remove</div>
                                    </div>
                                </div>
                            </li>
                        `),

            secondFood : (`
                            <!-- food order 2 -->
                            <li class="flex p-5 bg-[color:rgba(var(--ni-gray-50))] rounded-xl" data-food="2">
                                <div class="flex-none rounded-full my-auto">
                                    <img class="w-20 h-20 object-cover rounded-full" src="https://us2guntur.com/images//10024img/peppypaneer_B_260216.jpg" alt="Tandoori Paneer">
                                </div>
                                <div class="w-full space-y-3 ml-2 my-auto">
                                    <div class="flex">
                                        <div class="font-medium text-sm 2xl:text-lg">Tandoori Paneer</div>
                                        <div class="flex space-x-2 xl:space-x-3 2xl:space-4 ml-auto my-auto p-1 bg-white rounded-xl">
                                            <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-yellow-400))] text-white rounded-full duration-150">–</button>
                                            <input type="text" class="font-medium text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                            <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-yellow-400))] text-white rounded-full duration-150">+</button>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="font-medium text-[color:rgba(var(--ni-danger-500))]">$10.00</div>
                                        <div id="remove-food" class="cursor-pointer ml-auto text-sm text-[color:rgba(var(--ni-danger-400))] hover:text-[color:rgba(var(--ni-danger-500))]">Remove</div>
                                    </div>
                                </div>
                            </li>
                        `),

            thirdFood  : (`
                            <!-- food order 2 -->
                            <li class="flex p-5 bg-[color:rgba(var(--ni-gray-50))] rounded-xl" data-food="2">
                                <div class="flex-none rounded-full my-auto">
                                    <img class="w-20 h-20 object-cover rounded-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1IpYtha5WhQqkbC28i0tPhBQZQ8s86sIEYhcCYffjoe8_1T5Ysqi7GcaJtiumm1Xl3kU&usqp=CAU" alt="Cheezy - 7">
                                </div>
                                <div class="w-full space-y-3 ml-2 my-auto">
                                    <div class="flex">
                                        <div class="font-medium text-sm 2xl:text-lg">Cheezy - 7</div>
                                        <div class="flex space-x-2 xl:space-x-3 2xl:space-4 ml-auto my-auto p-1 bg-white rounded-xl">
                                            <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-yellow-400))] text-white rounded-full duration-150">–</button>
                                            <input type="text" class="font-medium text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                            <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-yellow-400))] text-white rounded-full duration-150">+</button>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="font-medium text-[color:rgba(var(--ni-danger-500))]">$19.00</div>
                                        <div id="remove-food" class="cursor-pointer ml-auto text-sm text-[color:rgba(var(--ni-danger-400))] hover:text-[color:rgba(var(--ni-danger-500))]">Remove</div>
                                    </div>
                                </div>
                            </li>
                        `),

            fouthFood  : (`
                            <!-- food order 2 -->
                            <li class="flex p-5 bg-[color:rgba(var(--ni-gray-50))] rounded-xl" data-food="2">
                                <div class="flex-none rounded-full my-auto">
                                    <img class="w-20 h-20 object-cover rounded-full" src="https://us.123rf.com/450wm/alexanderbaluev/alexanderbaluev1907/alexanderbaluev190700004/129688281-pizza-margarita-top-view-pizza-with-cheese-isolated-on-white-background-.jpg?ver=6" alt="Margherita">
                                </div>
                                <div class="w-full space-y-3 ml-2 my-auto">
                                    <div class="flex">
                                        <div class="font-medium text-sm 2xl:text-lg">Margherita</div>
                                        <div class="flex space-x-2 xl:space-x-3 2xl:space-4 ml-auto my-auto p-1 bg-white rounded-xl">
                                            <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-yellow-400))] text-white rounded-full duration-150">–</button>
                                            <input type="text" class="font-medium text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                            <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-yellow-400))] text-white rounded-full duration-150">+</button>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="font-medium text-[color:rgba(var(--ni-danger-500))]">$12.00</div>
                                        <div id="remove-food" class="cursor-pointer ml-auto text-sm text-[color:rgba(var(--ni-danger-400))] hover:text-[color:rgba(var(--ni-danger-500))]">Remove</div>
                                    </div>
                                </div>
                            </li>
                        `),

            fifthFood  : (`
                            <!-- food order 2 -->
                            <li class="flex p-5 bg-[color:rgba(var(--ni-gray-50))] rounded-xl" data-food="2">
                                <div class="flex-none rounded-full my-auto">
                                    <img class="w-20 h-20 object-cover rounded-full" src="https://bizrise.s3.ap-south-1.amazonaws.com/store/img/9409111/product/corn-onion-pizzamedium-8inch/corn-onion-pizzamedium-8inch-1636182171349_1.jpg" alt="Sweet Corn">
                                </div>
                                <div class="w-full space-y-3 ml-2 my-auto">
                                    <div class="flex">
                                        <div class="font-medium text-sm 2xl:text-lg">Sweet Corn</div>
                                        <div class="flex space-x-2 xl:space-x-3 2xl:space-4 ml-auto my-auto p-1 bg-white rounded-xl">
                                            <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-yellow-400))] text-white rounded-full duration-150">–</button>
                                            <input type="text" class="font-medium text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                            <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-yellow-400))] text-white rounded-full duration-150">+</button>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="font-medium text-[color:rgba(var(--ni-danger-500))]">$13.00</div>
                                        <div id="remove-food" class="cursor-pointer ml-auto text-sm text-[color:rgba(var(--ni-danger-400))] hover:text-[color:rgba(var(--ni-danger-500))]">Remove</div>
                                    </div>
                                </div>
                            </li>
                        `),

            sixthFood  : (`
                            <!-- food order 2 -->
                            <li class="flex p-5 bg-[color:rgba(var(--ni-gray-50))] rounded-xl" data-food="2">
                                <div class="flex-none rounded-full my-auto">
                                    <img class="w-20 h-20 object-cover rounded-full" src="https://www.kapruka.com/cdn-cgi/image/width=700,quality=93,f=auto/shops/specialGifts/productImages/1542352270399_TandooriChickenM.jpg" alt="Chicken Pizza">
                                </div>
                                <div class="w-full space-y-3 ml-2 my-auto">
                                    <div class="flex">
                                        <div class="font-medium text-sm 2xl:text-lg">Chicken Pizza</div>
                                        <div class="flex space-x-2 xl:space-x-3 2xl:space-4 ml-auto my-auto p-1 bg-white rounded-xl">
                                            <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-yellow-400))] text-white rounded-full duration-150">–</button>
                                            <input type="text" class="font-medium text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                            <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-yellow-400))] text-white rounded-full duration-150">+</button>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="font-medium text-[color:rgba(var(--ni-danger-500))]">$22.00</div>
                                        <div id="remove-food" class="cursor-pointer ml-auto text-sm text-[color:rgba(var(--ni-danger-400))] hover:text-[color:rgba(var(--ni-danger-500))]">Remove</div>
                                    </div>
                                </div>
                            </li>
                        `)
        }

        // each food onclick
        addFoods.each(function(i, element) {

            $(this).click(function() {

                // change text button
                $(this).html(added);

                rightSide.removeClass("hidden");

                leftSide.addClass("lg:w-[65%]");

                foodItems.removeClass(girdsFoodItemsDefault);
                foodItems.addClass(gridsFoodItemsResponsive);

                // append food to order lists
                if ( i == 0 ) {
                    foodOrders.append(foods.firstFood);
                }
                
                if ( i == 1 ) {
                    foodOrders.append(foods.secondFood);
                }

                if ( i == 2 ) {
                    foodOrders.append(foods.thirdFood);
                }

                if ( i == 3 ) {
                    foodOrders.append(foods.fouthFood);
                }

                if ( i == 4 ) {
                    foodOrders.append(foods.fifthFood);
                }

                if ( i == 5 ) {
                    foodOrders.append(foods.sixthFood);
                }

            });
        });

        // onclick active food sizes
        eachSizes.each(function(i, element) {
            $(this).click(function() {
                eachSizes.removeClass(active);
                $(this).addClass(active);
            });
        });

        // x button to cancel order
        closeOrder.click(function() {

            rightSide.addClass("hidden");

            leftSide.removeClass("lg:w-[65%]");

            foodItems.removeClass(gridsFoodItemsResponsive);
            foodItems.addClass(girdsFoodItemsDefault);
            
        });

    }

    // onclick add active to payment methods
    const payments = () => {

        const paymentMethods = $("#payment-methods div .payment");

        paymentMethods.each(function(i, element) {
            $(this).click(function() {
                paymentMethods.removeClass("bg-[color:rgba(var(--ni-gray-200))]");
                $(this).addClass("bg-[color:rgba(var(--ni-gray-200))]");
            });
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
    foodItemsOrder();
    payments();
    addSubQuantity();

}

// call function
posRestaurantOrder();

/*
*--------------------------------------------------------------------------
* End of POS Restaurant Order function 
*--------------------------------------------------------------------------
*/

/*
*--------------------------------------------------------------------------
* POS Pet shop function
*--------------------------------------------------------------------------
*/

// POS Pet shop function
const posPetShop = () => {

    const leftSide  = $("#left-side");
    const rightSide = $("#right-side");
    
    const header    = $("#header");
    const productItems = $("#product-items");
    const productOrders = $("#order-items");

    const girdsProductItemsDefault    = ("lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5");
    const gridsProductItemsResponsive = ("lg:grid-cols-2 xl:grid-cols-2 2xl:grid-cols-3");
    
    // left side & right function
    const sidesPopUp = () => {

        if ( rightSide.hasClass("hidden") ) {

            leftSide.removeClass("lg:w-[65%]");
            header.addClass("md:mx-40");

            productItems.removeClass(gridsProductItemsResponsive);
            productItems.addClass(girdsProductItemsDefault);

        } else {

            leftSide.addClass("lg:w-[65%]");
            header.removeClass("md:mx-40");

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
            firstProduct  : (`
                            <!-- product order 1 -->
                            <li class="flex rounded-xl" data-product="1">
                                <div class="flex-none border border-[color:rgba(var(--ni-gray-300))] my-auto rounded-lg">
                                    <img class="w-20 h-20 object-cover rounded-full" src="https://ph-test-11.slatic.net/p/3b1b271490bc9fd18679d13fa9576110.jpg" alt="Dog Food 'Yum Yum' - Hi-Protien">
                                </div>
                                <div class="w-full space-y-3 ml-2 my-auto">
                                    <div class="flex">
                                        <div class="font-medium text-sm 2xl:text-lg">Dog Food "Yum Yum" - Hi-Protien</div>
                                        <div class="flex space-x-2 xl:space-x-3 2xl:space-4 ml-auto my-auto">
                                            <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-primary-500))] hover:bg-[color:rgba(var(--ni-primary-300))] text-white rounded-lg duration-150">–</button>
                                            <input type="text" class="font-medium text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                            <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-primary-500))] hover:bg-[color:rgba(var(--ni-primary-300))] text-white rounded-lg duration-150">+</button>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="font-medium text-[color:rgba(var(--ni-primary-500))]">$25.98</div>
                                        <div id="remove-food" class="cursor-pointer ml-auto text-sm text-[color:rgba(var(--ni-danger-400))] hover:text-[color:rgba(var(--ni-danger-500))]">Remove</div>
                                    </div>
                                </div>
                            </li>
                        `),

            secondProduct : (`
                            <!-- product order 2 -->
                            <li class="flex rounded-xl" data-product="1">
                                <div class="flex-none border border-[color:rgba(var(--ni-gray-300))] my-auto rounded-lg">
                                    <img class="w-20 h-20 object-cover rounded-full" src="https://ph-test-11.slatic.net/p/mdc/b9342cce7f4587b4801e97fa68cb4eb0.jpg" alt="Dog Food 'Yum Yum' - Adult Version">
                                </div>
                                <div class="w-full space-y-3 ml-2 my-auto">
                                    <div class="flex">
                                        <div class="font-medium text-sm 2xl:text-lg">Dog Food "Yum Yum" - Adult Version</div>
                                        <div class="flex space-x-2 xl:space-x-3 2xl:space-4 ml-auto my-auto">
                                            <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-primary-500))] hover:bg-[color:rgba(var(--ni-primary-300))] text-white rounded-lg duration-150">–</button>
                                            <input type="text" class="font-medium text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                            <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-primary-500))] hover:bg-[color:rgba(var(--ni-primary-300))] text-white rounded-lg duration-150">+</button>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="font-medium text-[color:rgba(var(--ni-primary-500))]">$30.15</div>
                                        <div id="remove-food" class="cursor-pointer ml-auto text-sm text-[color:rgba(var(--ni-danger-400))] hover:text-[color:rgba(var(--ni-danger-500))]">Remove</div>
                                    </div>
                                </div>
                            </li>
                        `),

            thirdProduct  : (`
                            <!-- product order 3 -->
                            <li class="flex rounded-xl" data-product="1">
                                <div class="flex-none border border-[color:rgba(var(--ni-gray-300))] my-auto rounded-lg">
                                    <img class="w-20 h-20 object-cover rounded-full" src="https://imgcache.dealmoon.com/thumbimg.dealmoon.com/dealmoon/824/de1/134/4898f70533753399b278826.jpg_600_0_3_4b24.jpg" alt="JCPenney YUM Dog Food Bowl 17.00">
                                </div>
                                <div class="w-full space-y-3 ml-2 my-auto">
                                    <div class="flex">
                                        <div class="font-medium text-sm 2xl:text-lg">JCPenney YUM Dog Food Bowl 17.00</div>
                                        <div class="flex space-x-2 xl:space-x-3 2xl:space-4 ml-auto my-auto">
                                            <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-primary-500))] hover:bg-[color:rgba(var(--ni-primary-300))] text-white rounded-lg duration-150">–</button>
                                            <input type="text" class="font-medium text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                            <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-primary-500))] hover:bg-[color:rgba(var(--ni-primary-300))] text-white rounded-lg duration-150">+</button>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="font-medium text-[color:rgba(var(--ni-primary-500))]">$17.00</div>
                                        <div id="remove-food" class="cursor-pointer ml-auto text-sm text-[color:rgba(var(--ni-danger-400))] hover:text-[color:rgba(var(--ni-danger-500))]">Remove</div>
                                    </div>
                                </div>
                            </li>
                        `),

            fouthProduct  : (`
                            <!-- product order 4 -->
                            <li class="flex rounded-xl" data-product="1">
                                <div class="flex-none border border-[color:rgba(var(--ni-gray-300))] my-auto rounded-lg">
                                    <img class="w-20 h-20 object-cover rounded-full" src="https://lzd-img-global.slatic.net/g/p/8486dac7f1b2120268fdf00c9bfbd267.jpg_720x720q80.jpg_.webp" alt="Dog Food 'Araton' - Junior Version">
                                </div>
                                <div class="w-full space-y-3 ml-2 my-auto">
                                    <div class="flex">
                                        <div class="font-medium text-sm 2xl:text-lg">Dog Food "Araton" - Junior Version</div>
                                        <div class="flex space-x-2 xl:space-x-3 2xl:space-4 ml-auto my-auto">
                                            <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-primary-500))] hover:bg-[color:rgba(var(--ni-primary-300))] text-white rounded-lg duration-150">–</button>
                                            <input type="text" class="font-medium text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                            <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-primary-500))] hover:bg-[color:rgba(var(--ni-primary-300))] text-white rounded-lg duration-150">+</button>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="font-medium text-[color:rgba(var(--ni-primary-500))]">$31.92</div>
                                        <div id="remove-food" class="cursor-pointer ml-auto text-sm text-[color:rgba(var(--ni-danger-400))] hover:text-[color:rgba(var(--ni-danger-500))]">Remove</div>
                                    </div>
                                </div>
                            </li>
                        `),

            fifthProduct  : (`
                            <!-- product order 5 -->
                            <li class="flex rounded-xl" data-product="1">
                                <div class="flex-none border border-[color:rgba(var(--ni-gray-300))] my-auto rounded-lg">
                                    <img class="w-20 h-20 object-cover rounded-full" src="https://lzd-img-global.slatic.net/g/p/cf690d9db827632fc1dfba46c6462c64.jpg_720x720q80.jpg_.webp" alt="Dog Food 'Araton' - 1 Year Version">
                                </div>
                                <div class="w-full space-y-3 ml-2 my-auto">
                                    <div class="flex">
                                        <div class="font-medium text-sm 2xl:text-lg">Dog Food "Araton" - 1 Year Version</div>
                                        <div class="flex space-x-2 xl:space-x-3 2xl:space-4 ml-auto my-auto">
                                            <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-primary-500))] hover:bg-[color:rgba(var(--ni-primary-300))] text-white rounded-lg duration-150">–</button>
                                            <input type="text" class="font-medium text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                            <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-primary-500))] hover:bg-[color:rgba(var(--ni-primary-300))] text-white rounded-lg duration-150">+</button>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="font-medium text-[color:rgba(var(--ni-primary-500))]">$33.81</div>
                                        <div id="remove-food" class="cursor-pointer ml-auto text-sm text-[color:rgba(var(--ni-danger-400))] hover:text-[color:rgba(var(--ni-danger-500))]">Remove</div>
                                    </div>
                                </div>
                            </li>
                        `),

            sixthProduct  : (`
                            <!-- product order 6 -->
                            <li class="flex rounded-xl" data-product="1">
                                <div class="flex-none border border-[color:rgba(var(--ni-gray-300))] my-auto rounded-lg">
                                    <img class="w-20 h-20 object-cover rounded-full" src="https://medicalanka.com/wp-content/uploads/Araton-Adult.png" alt="Dog Food 'Araton' - Adult Version">
                                </div>
                                <div class="w-full space-y-3 ml-2 my-auto">
                                    <div class="flex">
                                        <div class="font-medium text-sm 2xl:text-lg">Dog Food "Araton" - Adult Version</div>
                                        <div class="flex space-x-2 xl:space-x-3 2xl:space-4 ml-auto my-auto">
                                            <button type="button" id="sub" class="sub w-6 h-6 bg-[color:rgba(var(--ni-primary-500))] hover:bg-[color:rgba(var(--ni-primary-300))] text-white rounded-lg duration-150">–</button>
                                            <input type="text" class="font-medium text-sm text-center w-2" id="1" value="1" min="1" max="12" disabled>
                                            <button type="button" id="add" class="add w-6 h-6 bg-[color:rgba(var(--ni-primary-500))] hover:bg-[color:rgba(var(--ni-primary-300))] text-white rounded-lg duration-150">+</button>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="font-medium text-[color:rgba(var(--ni-primary-500))]">$35.22</div>
                                        <div id="remove-food" class="cursor-pointer ml-auto text-sm text-[color:rgba(var(--ni-danger-400))] hover:text-[color:rgba(var(--ni-danger-500))]">Remove</div>
                                    </div>
                                </div>
                            </li>
                        `)
        }

        // each food onclick
        eachProducts.each(function(i, element) {

            $(this).click(function() {

                rightSide.removeClass("hidden");

                leftSide.addClass("lg:w-[65%]");
                header.removeClass("md:mx-40");

                productItems.removeClass(girdsProductItemsDefault);
                productItems.addClass(gridsProductItemsResponsive);

                // append food to order lists
                if (i == 0) {
                    productOrders.append(products.firstProduct);
                }
                
                if ( i == 1 ) {
                    productOrders.append(products.secondProduct);
                }

                if ( i == 2 ) {
                    productOrders.append(products.thirdProduct);
                }

                if ( i == 3 ) {
                    productOrders.append(products.fouthProduct);
                }

                if ( i == 4 ) {
                    productOrders.append(products.fifthProduct);
                }

                if ( i == 5 ) {
                    productOrders.append(products.sixthProduct);
                }

            });
        });

        // x button to cancel order
        closeOrder.click(function() {

            rightSide.addClass("hidden");

            leftSide.removeClass("lg:w-[65%]");
            header.addClass("md:mx-40");

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
posPetShop();

/*
*--------------------------------------------------------------------------
* End of POS Pet shop function
*--------------------------------------------------------------------------
*/

/*
*--------------------------------------------------------------------------
* POS Plant shop function
*--------------------------------------------------------------------------
*/

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

/*
*--------------------------------------------------------------------------
* End of POS Plant shop function
*--------------------------------------------------------------------------
*/