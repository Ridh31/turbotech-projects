@extends('master')
@section('content')

{{-- <div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div> --}}

<!-- Design Generate lowercase -->

<!-- main -->
<div class="mainCard">
    <div class="cardContainer bg-[color:rgba(var(--ni-gray-100))] p-3 sm:p-10">

        <!-- Generate lowercase -->
        <div class="flex justify-center items-center h-screen bg-[color:rgba(var(--ni-gray-100))]">
            <div class="select-none w-full p-3 sm:p-5 space-y-3 sm:space-y-5 bg-white shadow-lg rounded-lg">

                <!-- title & note -->
                <div class="text-lg sm:text-xl text-center sm:text-start text-[color:rgba(var(--ni-gray-600))]">Generate lowercase</div>
                <div class="flex justify-center sm:justify-start text-xs sm:text-sm text-[color:rgba(var(--ni-gray-400))]">
                    <svg class="w-4 h-4 my-auto" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 380 380" style="enable-background:new 0 0 380 380;" xml:space="preserve"><g id="XMLID_2_"><path id="XMLID_4_" style="fill:#FFDA44;" d="M129.48,311.289h121.026c2.319-18.419,11.726-26.242,23.471-37.644c16.82-16.329,37.753-36.65,37.753-87.096c0-32.261-12.805-61.618-36.056-82.665C253.249,83.585,222.823,72.406,190,72.406c-32.823,0-63.249,11.179-85.673,31.478c-23.251,21.047-36.056,50.404-36.056,82.665c0,50.521,20.977,70.961,37.833,87.385C117.763,285.294,127.121,293.207,129.48,311.289z"/><path id="XMLID_15_" style="fill:#FFCD00;" d="M275.673,103.884C253.249,83.585,222.823,72.406,190,72.406v238.883h60.506c2.319-18.419,11.726-26.242,23.47-37.644c16.82-16.329,37.753-36.65,37.753-87.096C311.73,154.288,298.925,124.931,275.673,103.884z"/><rect id="XMLID_35_" x="148.212" y="345.645" style="fill:#7DD3FC;" width="83.576" height="34.355"/><rect id="XMLID_34_" x="133.677" y="319.878" style="fill:#7DD3FC;" width="112.646" height="34.355"/><rect id="XMLID_33_" x="119.142" y="294.111" style="fill:#7DD3FC;" width="141.716" height="34.355"/><polygon id="XMLID_16_" style="fill:#0EA5E9;" points="190,294.111 190,380 231.788,380 231.788,354.233 246.323,354.233 246.323,328.467 260.858,328.467 260.858,294.111 "/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                    <div class="ml-1 sm:ml-2 mt-1">Note: Spaces will convert to single dash.</div>
                </div>

                <!-- default input -->
                <div class="flex flex-col space-y-1">
                    <label for="default" class="text-xs sm:text-sm text-[color:rgba(var(--ni-gray-600))]">Default</label>
                    <input type="text" name="default" placeholder="Enter text here&hellip;" class="w-full px-5 py-2 border border-[color:rgba(var(--ni-gray-200))] text-xs sm:text-sm text-[color:rgba(var(--ni-gray-500))] focus:outline-none focus:border-[color:rgba(var(--ni-primary-400))] focus:text-[color:rgba(var(--ni-primary-500))] rounded-md">
                </div>

                <!-- generate input -->
                <div class="flex flex-col space-y-1">
                    <label for="generate" class="text-xs sm:text-sm text-[color:rgba(var(--ni-gray-600))]">Generate</label>
                    <input type="text" name="generate" placeholder="Generate result&hellip;" class="w-full px-5 py-2 border border-[color:rgba(var(--ni-gray-200))] text-xs sm:text-sm text-[color:rgba(var(--ni-gray-500))] focus:outline-none focus:border-[color:rgba(var(--ni-primary-400))] focus:text-[color:rgba(var(--ni-primary-500))] rounded-md">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('internalScript')

<script>

    // inputs
    const defaultInput  = $("input[name*='default']");
    const generateInput = $("input[name*='generate']");

    // Generate lowercase function
    const generateLowercase = (defaultInput, generateInput) => {

        defaultInput.on("keyup", function() {

            // get default value
            const defaultInputVal = $(this).val();

            // convert default value to lowercase
            const lowercaseVal = defaultInputVal.toString().toLowerCase();

            // regex for spaces, dashes, and underscore => single dash
            result = lowercaseVal.replace(/(?:\s*-\s*)+|(?:\s*_\s*)+/g, "-")

            // regex for special chars => none
            .replace(/[`~!@#$%^&*?()=+{}:;""'',<>?]|\/{1,}|\\{1,}|\[{1,}|\]{1,}|\|{1,}/g, "");

            // display value
            generateInput.val(result);

        });

    }

    // call function
    generateLowercase(defaultInput, generateInput);

</script>

@endsection