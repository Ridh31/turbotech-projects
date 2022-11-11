@extends('master')
@section('content')

{{-- <div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div> --}}

<!-- Design Stacked Linear / Category -->

<!-- main -->
<div class="mainCard">
    <ul class="cardContainer flex justify-center items-center">
        <li class="eachCard w-full lg:w-[70%] xl:w-[60%] 2xl:w-[50%] h-auto px-0 py-2 pr-2 mt-5 sm:mt-0 rounded-xl">
            <div class="p-0 sm:p-2 md:p-5">
                <canvas id="stacked-linear-category" class="min-h-min sm:min-h-[20rem]"></canvas>
            </div>
        </li>
    </ul>
</div>

@endsection

@section('internalScript')

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>

<script>

    // Stacked Linear / Category function
    const stackedLinearCategory = () => {

        // Stacked Linear / Category config
        const stackedLinearCategoryConfig = {

            maintainAspectRatio: false, // true: graph size bigger
            responsive: true,
            plugins: {
                title: {
                    display: false,
                    text: "Stacked scales",
                },
            },
            scales: {
                y: {
                    type: "linear",
                    position: "left",
                    stack: "demo",
                    stackWeight: 2,
                    grid: {
                        borderColor: "rgba(248,113,113,1)",
                    },
                },
                y2: {
                    type: "category",
                    labels: ["ON", "OFF"],
                    offset: true,
                    position: "left",
                    stack: "demo",
                    stackWeight: 1,
                    grid: {
                        borderColor: "rgba(14,165,233,1)",
                    },
                },
            },
        };

        // Stacked Linear / Category data
        const stackedLinearCategoryData = {
            labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
            datasets: [
                {
                    label: "Dataset 1",
                    backgroundColor: "rgba(248,113,113,1)",
                    borderColor: "rgba(248,113,113,1)",
                    data: [10, 30, 50, 20, 25, 44, -10],
                },
                {
                    label: "Dataset 2",
                    backgroundColor: "rgba(14,165,233,1)",
                    borderColor: "rgba(14,165,233,1)",
                    data: ["ON", "ON", "OFF", "ON", "OFF", "OFF", "ON"],
                    stepped: true,
                    yAxisID: "y2"
                },
            ],
        };

        const barChart = $("#stacked-linear-category");

        const stackedLinearCategoryChart = new Chart(barChart, {
            type: "line",
            options: stackedLinearCategoryConfig,
            data: stackedLinearCategoryData
        });

    }

    // call function
    stackedLinearCategory();
    
</script>

@endsection