@extends('master')
@section('content')

{{-- <div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div> --}}

<!-- Design Horizontal Bar Chart -->

<!-- main -->
<div class="mainCard">
    <ul class="cardContainer flex justify-center items-center">
        <li class="eachCard w-full lg:w-[70%] xl:w-[60%] 2xl:w-[50%] h-auto px-0 py-2 pr-2 mt-5 sm:mt-0 rounded-xl">
            <div class="p-0 sm:p-2 md:p-5">
                <canvas id="horizontal-bar" class="min-h-min sm:min-h-[20rem]"></canvas>
            </div>
        </li>
    </ul>
</div>

@endsection

@section('internalScript')

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>

<script>

    // Horizontal Bar Chart function
    const horizontalBarChart = () => {
            
        // Horizontal Bar Chart config
        const horizontalBarChartConfig = {
            maintainAspectRatio: true,
            indexAxis: "y",
            elements : {
                borderWidth: 2,
            },
            responsive: true,
            plugins: {
                legend: {
                    position: "top",
                },
                title: {
                    display: false, // title display none by false
                    text: 'Chart.js Horizontal Bar Chart'
                }
            }
        };

        // Horizontal Bar Chart data
        const horizontalBarChartData = {
            labels : ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
            datasets : [
                {
                    label : "Dataset 1",
                    backgroundColor: "rgba(248,113,113,0.5)",
                    borderColor: "rgba(248,113,113,1)",
                    borderWidth: 2,
                    hoverBackgroundColor: "rgba(248,113,113,1)",
                    hoverBorderColor: "rgba(248,113,113,1)",
                    data: [31.854, 19.211, -45.489, 3.186, -10.074, -45.761, 39.333],
                },
                {
                    label : "Dataset 2",
                    backgroundColor: "rgba(14,165,233,0.5)",
                    borderColor: "rgba(14,165,233,1)",
                    borderWidth: 2,
                    hoverBackgroundColor: "rgba(14,165,233,1)",
                    hoverBorderColor: "rgba(14,165,233,1)",
                    data: [-85.655, -70.108, 6.962, 59.134, -51.862, -27.262, 90.96],
                    stack: "combined",
                }
            ],
        };

        const barChart = $("#horizontal-bar");

        const horizontalBar = new Chart(barChart, {
            type: "bar",
            options: horizontalBarChartConfig,
            data: horizontalBarChartData
        });
    }

    // call function
    horizontalBarChart();

</script>

@endsection