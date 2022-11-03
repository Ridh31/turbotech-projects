/**
 * @author                  Roungridh Him
 * @version                 N/A
**/ 

/*
*--------------------------------------------------------------------------
* Profile Card with leave funtion
*--------------------------------------------------------------------------
*/

// Profile Card with leave funtion
const profileCardWithleave = () => {

    const tab        = $("#tabs li");
    const defaultTab = $("#tabs li:first-child");
    const active     = ("bg-gradient-to-r from-[color:rgba(var(--ni-danger-300))] to-[color:rgba(var(--ni-danger-400))] text-white");

    const leaveLate    = $("#leave-late");
    const leaveContent = $("#tab-contents #leave-content");
    const lateContent  = $("#tab-contents #late-content");

    // add active color to default tab
    defaultTab.addClass(active);

    // hidden all tab contents
    leaveContent.addClass("hidden");
    lateContent.addClass("hidden"); 

    // make leave content default by remove class hidden
    leaveContent.fadeIn(1000);

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

            if ( i < 1 ) {
                
                leaveLate.text("Leave");

                lateContent.addClass("hidden");
                lateContent.css("display", "none");

                leaveContent.fadeIn();
                //leaveContent.removeClass("hidden");
        
            } else {

                leaveLate.text("Late");

                leaveContent.addClass("hidden");
                leaveContent.css("display", "none");

                lateContent.fadeIn();
                //lateContent.removeClass("hidden");

            }

        });
    });

}

// call function
profileCardWithleave();

/*
*--------------------------------------------------------------------------
* End of Profile Card with leave funtion
*--------------------------------------------------------------------------
*/

/*
*--------------------------------------------------------------------------
* Profile Card with details funtion
*--------------------------------------------------------------------------
*/

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

/*
*--------------------------------------------------------------------------
* End of Profile Card with details funtion
*--------------------------------------------------------------------------
*/

/*
*--------------------------------------------------------------------------
* Profile Card with full details funtion
*--------------------------------------------------------------------------
*/

// Profile Card with full details funtion
const profileCardWithFullDetails = () => {

    // tab
    const tab         = $("#tabs li");
    const defaultTab  = $("#tabs li:first-child");
    const active      = ("bg-gradient-to-r from-[color:rgba(var(--ni-danger-300))] to-[color:rgba(var(--ni-danger-400))] text-white");

    // content titles & contents
    const contentTitle    = $("#content-title");
    const eachContent = $("#tab-contents [tab-content]");

    // tab contents
    const educationContent     = $("#tab-contents #education-content");
    const trainingContent      = $("#tab-contents #training-content")
    const leaveContent         = $("#tab-contents #leave-content");
    const lateContent          = $("#tab-contents #late-content");
    const overtimeContent      = $("#tab-contents #overtime-content");
    const warningLetterContent = $("#tab-contents #warning-letter-content");

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
        `),

        overTimeTitle : (`
                        <div class="my-auto">
                            <svg class="w-4 h-4" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path style="fill:#ECEDEF;" d="M366.746,341.333c0-42.185-34.321-76.506-76.506-76.506h-0.535v-18.19h0.535c42.185,0,76.506-34.321,76.506-76.506v-0.356V67.411H145.254v102.365v0.356c0,42.185,34.321,76.506,76.506,76.506h0.535v18.19h-0.535c-42.185,0-76.506,34.321-76.506,76.506v102.721h221.492V341.333z"/><path style="fill:#D9DCDF;" d="M162.909,341.333c0-42.185,34.321-76.506,76.506-76.506h0.535v-18.19h-0.535c-42.185,0-76.506-34.321-76.506-76.506v-0.356V67.411h-17.655v102.365v0.356c0,42.185,34.321,76.506,76.506,76.506h0.535v18.19h-0.535c-42.185,0-76.506,34.321-76.506,76.506v102.721h17.655V341.333z"/><path style="fill:#C4DF64;" d="M366.746,161.75H145.254v8.381c0,42.253,34.253,76.506,76.506,76.506h0.535v17.655h67.411v-17.655h0.535c42.253,0,76.506-34.253,76.506-76.506V161.75z"/><path style="fill:#AFCA62;" d="M239.415,246.637c-42.253,0-76.506-34.253-76.506-76.506v-8.381h-17.655v8.381c0,42.253,34.253,76.506,76.506,76.506h0.535v17.655h17.655v-17.655H239.415z"/><path style="fill:#C4DF64;" d="M352.145,431.504c-19.711-34.389-56.552-55.752-96.145-55.752c-39.594,0-76.435,21.363-96.145,55.752c-0.046,0.08-0.076,0.165-0.119,0.245h192.528C352.221,431.668,352.192,431.584,352.145,431.504z"/><path style="fill:#AFCA62;" d="M188.582,431.504c17.302-30.187,47.805-50.331,81.781-54.805c-4.729-0.623-9.525-0.947-14.364-0.947c-39.594,0-76.435,21.363-96.145,55.752c-0.046,0.08-0.076,0.165-0.119,0.245h28.726C188.505,431.668,188.536,431.583,188.582,431.504z"/><g><path style="fill:#FFC44F;" d="M127.599,427.469c-13.865,0-25.145,11.28-25.145,25.145v34.24c0,13.865,11.28,25.145,25.145,25.145H292.38l6.42-8.025v-68.481l-6.42-8.025H127.599z"/>
                                <path style="fill:#FFC44F;" d="M384.401,427.469h-25.68l-8.56,8.025v68.481l8.56,8.025h25.68c13.865,0,25.145-11.28,25.145-25.145v-34.24C409.546,438.749,398.266,427.469,384.401,427.469z"/></g><rect x="292.38" y="427.469" style="fill:#FFD791;" width="66.341" height="84.531"/><path style="fill:#F7B14D;" d="M127.599,427.469c-13.865,0-25.145,11.28-25.145,25.145v34.24c0,13.865,11.28,25.145,25.145,25.145h26.75v-84.531H127.599z"/><g><path style="fill:#FFC44F;" d="M127.599,0c-13.865,0-25.145,11.28-25.145,25.145v34.24c0,13.865,11.28,25.145,25.145,25.145H292.38l6.42-8.025V8.025L292.38,0H127.599z"/><path style="fill:#FFC44F;" d="M384.401,0h-25.68l-8.56,8.025v68.481l8.56,8.025h25.68c13.865,0,25.145-11.28,25.145-25.145v-34.24C409.546,11.28,398.266,0,384.401,0z"/></g><rect x="292.38" style="fill:#FFD791;" width="66.341" height="84.531"/><path style="fill:#F7B14D;" d="M127.599,0c-13.865,0-25.145,11.28-25.145,25.145v34.24c0,13.865,11.28,25.145,25.145,25.145h26.75V0H127.599z"/><g><path style="fill:#AFCA62;" d="M452.882,119.306c-5.015,0-9.095-4.08-9.095-9.095s4.08-9.095,9.095-9.095h17.12c4.433,0,8.025-3.593,8.025-8.025c0-4.432-3.592-8.025-8.025-8.025h-9.095v-9.095c0-4.432-3.592-8.025-8.025-8.025c-4.433,0-8.025,3.593-8.025,8.025v10.415c-9.94,3.358-17.12,12.765-17.12,23.825c0,13.865,11.28,25.145,25.145,25.145c5.015,0,9.095,4.08,9.095,9.095c0,5.015-4.08,9.095-9.095,9.095h-17.12c-4.433,0-8.025,3.593-8.025,8.025c0,4.432,3.592,8.025,8.025,8.025h9.095v9.095c0,4.432,3.592,8.025,8.025,8.025c4.433,0,8.025-3.593,8.025-8.025v-10.415c9.94-3.358,17.12-12.765,17.12-23.825C478.027,130.586,466.747,119.306,452.882,119.306z"/><path style="fill:#AFCA62;" d="M452.882,357.918h17.12c4.433,0,8.025-3.593,8.025-8.025s-3.592-8.025-8.025-8.025h-9.095v-9.095c0-4.432-3.592-8.025-8.025-8.025c-4.433,0-8.025,3.593-8.025,8.025v10.415c-9.94,3.358-17.12,12.765-17.12,23.825c0,13.865,11.28,25.145,25.145,25.145c5.015,0,9.095,4.08,9.095,9.095c0,5.015-4.08,9.095-9.095,9.095h-17.12c-4.433,0-8.025,3.593-8.025,8.025s3.592,8.025,8.025,8.025h9.095v9.095c0,4.432,3.592,8.025,8.025,8.025c4.433,0,8.025-3.593,8.025-8.025v-10.415c9.94-3.358,17.12-12.765,17.12-23.825c0-13.865-11.28-25.145-25.145-25.145c-5.015,0-9.095-4.08-9.095-9.095C443.787,361.998,447.867,357.918,452.882,357.918z"/><path style="fill:#AFCA62;" d="M59.118,229.517h17.12c4.432,0,8.025-3.593,8.025-8.025s-3.593-8.025-8.025-8.025h-9.095v-9.095c0-4.432-3.593-8.025-8.025-8.025s-8.025,3.593-8.025,8.025v10.415c-9.94,3.358-17.12,12.765-17.12,23.825c0,13.865,11.28,25.145,25.145,25.145c5.015,0,9.095,4.08,9.095,9.095s-4.08,9.095-9.095,9.095h-17.12c-4.432,0-8.025,3.593-8.025,8.025c0,4.432,3.593,8.025,8.025,8.025h9.095v9.095c0,4.432,3.593,8.025,8.025,8.025s8.025-3.593,8.025-8.025v-10.415c9.94-3.358,17.12-12.765,17.12-23.825c0-13.865-11.28-25.145-25.145-25.145c-5.015,0-9.095-4.08-9.095-9.095S54.103,229.517,59.118,229.517z"/><path style="fill:#AFCA62;" d="M256,297.998c-4.432,0-8.025-3.593-8.025-8.025v-8.56c0-4.432,3.593-8.025,8.025-8.025c4.433,0,8.025,3.593,8.025,8.025v8.56C264.025,294.405,260.433,297.998,256,297.998z"/><path style="fill:#AFCA62;" d="M256,332.238c-4.432,0-8.025-3.593-8.025-8.025v-8.56c0-4.432,3.593-8.025,8.025-8.025c4.433,0,8.025,3.593,8.025,8.025v8.56C264.025,328.645,260.433,332.238,256,332.238z"/><path style="fill:#AFCA62;" d="M256,366.479c-4.432,0-8.025-3.593-8.025-8.025v-8.56c0-4.432,3.593-8.025,8.025-8.025c4.433,0,8.025,3.593,8.025,8.025v8.56C264.025,362.885,260.433,366.479,256,366.479z"/></g><g><circle style="fill:#D8ED8C;" cx="324.481" cy="195.812" r="17.12"/><circle style="fill:#D8ED8C;" cx="285.96" cy="405.534" r="12.84"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                            </svg>
                        </div>
                        <div class="text-md sm:text-xl font-medium text-[color:rgba(var(--ni-gray-600))] ml-2">Overtime</div>
        `),

        warningLetterTitle : (`
                        <div class="my-auto">
                            <svg class="w-4 h-4" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 497.6 497.6" style="enable-background:new 0 0 497.6 497.6;" xml:space="preserve"><path style="fill:#E8EFEE;" d="M52.4,448c-5.6,0-5.6-7.2-5.6-12V23.2c0-4.8,0-7.2,5.6-7.2h344.8c4.8,0,9.6,2.4,9.6,7.2V436c0,4.8-4.8,12-9.6,12H52.4z"/><path style="fill:#9AA5A4;" d="M390.8,32v400h-328V32H390.8 M397.2,0H52.4C38,0,30.8,9.6,30.8,23.2V436c0,13.6,7.2,28,21.6,28h344.8c13.6,0,25.6-14.4,25.6-28V23.2C422.8,9.6,410.8,0,397.2,0L397.2,0z"/><path style="fill:#FFFFFF;" d="M397.2,16H52.4c-5.6,0-5.6,2.4-5.6,7.2V436c0,3.2,0,5.6,1.6,7.2L403.6,17.6C402,16,399.6,16,397.2,16z"/><path style="fill:#B3BCBB;" d="M414.8,5.6C410,1.6,403.6,0,397.2,0H52.4C38,0,30.8,9.6,30.8,23.2V436c0,8,1.6,13.6,5.6,20l26.4-25.6V32h328v3.2L414.8,5.6z"/><g><path style="fill:#E8EFEE;" d="M134,120h188.8c6.4,0,12-5.6,12-12s-5.6-12-12-12H134c-6.4,0-12,5.6-12,12S127.6,120,134,120z"/><path style="fill:#E8EFEE;" d="M134,184h108.8c6.4,0,12-5.6,12-12s-4.8-12-11.2-12H134c-6.4,0-12,5.6-12,12S127.6,184,134,184z"/><path style="fill:#E8EFEE;" d="M322.8,224H134c-6.4,0-12,9.6-12,16s5.6,16,12,16h188.8c6.4,0,12-9.6,12-16S330,224,322.8,224z"/><path style="fill:#E8EFEE;" d="M243.6,292.8H134c-6.4,0-12,5.6-12,12s5.6,12,12,12h108.8c6.4,0,12-5.6,12-12C255.6,298.4,250,292.8,243.6,292.8z"/></g><g><path style="fill:#B1BAB9;" d="M130,112h188.8c6.4,0,12-5.6,12-12s-5.6-12-12-12H130c-6.4,0-12,5.6-12,12S123.6,112,130,112z"/>
                                <path style="fill:#B1BAB9;" d="M318.8,224H130c-6.4,0-12,5.6-12,12s5.6,12,12,12h188.8c6.4,0,12-5.6,12-12S326,224,318.8,224z"/></g><g><path style="fill:#9AA5A4;" d="M239.6,288.8H130c-6.4,0-12,5.6-12,12s5.6,12,12,12h108.8c6.4,0,12-5.6,12-12C251.6,293.6,246,288.8,239.6,288.8z"/><path style="fill:#9AA5A4;" d="M239.6,148H130.8c-6.4,0-12,5.6-12,12s5.6,12,12,12h108.8c6.4,0,12-5.6,12-12S246,148,239.6,148z"/><circle style="opacity:0.3;fill:#9AA5A4;enable-background:new ;" cx="358.8" cy="389.6" r="108"/></g><circle style="fill:#EA0A0A;" cx="345.2" cy="389.6" r="108"/><path style="fill:#BA0404;" d="M345.2,281.6c60,0,108,48,108,108s-48,108-108,108"/><path style="fill:#D10909;" d="M269.2,313.6c42.4-42.4,110.4-42.4,152.8,0s42.4,110.4,0,152.8"/><g><path style="fill:#BA0404;" d="M359.6,419.2c0,8-6.4,14.4-14.4,14.4l0,0c-8,0-14.4-6.4-14.4-14.4v-70.4c0-8,6.4-14.4,14.4-14.4l0,0c8,0,14.4,6.4,14.4,14.4V419.2z"/><circle style="fill:#BA0404;" cx="345.2" cy="456" r="8.8"/></g><g><path style="fill:#FFFFFF;" d="M359.6,409.6c0,8-6.4,14.4-14.4,14.4l0,0c-8,0-14.4-6.4-14.4-14.4v-70.4c0-8,6.4-14.4,14.4-14.4l0,0c8,0,14.4,6.4,14.4,14.4V409.6z"/><circle style="fill:#FFFFFF;" cx="345.2" cy="446.4" r="8.8"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                            </svg>
                        </div>
                        <div class="text-md sm:text-xl font-medium text-[color:rgba(var(--ni-gray-600))] ml-2">Warning Letter</div>
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

                overtimeContent.addClass("hidden");
                overtimeContent.css("display", "none");

                warningLetterContent.addClass("hidden");
                warningLetterContent.css("display", "none");

                contactInfo.css("display", "none");
                contactInfo.fadeIn(1300);

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
                        UXUIProgressBar.addClass("w-[30%]");
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

                overtimeContent.addClass("hidden");
                overtimeContent.css("display", "none");

                warningLetterContent.addClass("hidden");
                warningLetterContent.css("display", "none");

                contactInfo.css("display", "none");
                contactInfo.fadeIn(1300);

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

                overtimeContent.addClass("hidden");
                overtimeContent.css("display", "none");

                warningLetterContent.addClass("hidden");
                warningLetterContent.css("display", "none");

                contactInfo.css("display", "none");
                contactInfo.fadeIn(1300);

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

                overtimeContent.addClass("hidden");
                overtimeContent.css("display", "none");

                warningLetterContent.addClass("hidden");
                warningLetterContent.css("display", "none");

                contactInfo.css("display", "none");
                contactInfo.fadeIn(1300);

                lateContent.fadeIn();

            }

            if ( i == 4 ) {         // overtime tab
                
                contentTitle.html(title.overTimeTitle);

                educationContent.addClass("hidden");
                educationContent.css("display", "none");

                trainingContent.addClass("hidden");
                trainingContent.css("display", "none");

                leaveContent.addClass("hidden");
                leaveContent.css("display", "none");

                lateContent.addClass("hidden");
                lateContent.css("display", "none");

                warningLetterContent.addClass("hidden");
                warningLetterContent.css("display", "none");

                contactInfo.css("display", "none");
                contactInfo.fadeIn(1300);

                overtimeContent.fadeIn();

            }

            if ( i == 5 ) {         // warning letter tab

                contentTitle.html(title.warningLetterTitle);

                educationContent.addClass("hidden");
                educationContent.css("display", "none");

                trainingContent.addClass("hidden");
                trainingContent.css("display", "none");

                leaveContent.addClass("hidden");
                leaveContent.css("display", "none");

                lateContent.addClass("hidden");
                lateContent.css("display", "none");

                overtimeContent.addClass("hidden");
                overtimeContent.css("display", "none");

                contactInfo.css("display", "none");
                contactInfo.fadeIn(1300);

                warningLetterContent.fadeIn();

            }

        });
    });

    // progress bars
    $(document).ready(() => {

        // web design progress bar
        webDesignProgressBar.addClass("w-[80%]");

        // ux/ui progress bar   
        UXUIProgressBar.addClass("w-[30%]");

        // mobile template progress bar
        mobileTemplateProgressBar.addClass("w-[2%]");

        // backend api progress bar
        backendAPIProgressBar.addClass("w-[3%]");

    });

    // contact info
    const contactInfo = $("#contact-info");
    contactInfo.fadeIn(2000);

}

// call function
profileCardWithFullDetails();

/*
*--------------------------------------------------------------------------
* End of Profile Card with full details funtion
*--------------------------------------------------------------------------
*/