@extends('master')
@section('content')

{{-- <div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div> --}}

<!-- Design Doughnut Chart -->

<!-- main -->
<div class="mainCard">
    <ul class="cardContainer flex justify-center items-center h-screen md:h-full bg-[color:rgba(var(--ni-gray-100))] p-2 sm:p-5">
        <li class="eachCard w-full lg:w-[70%] xl:w-[60%] 2xl:w-[50%] h-auto px-0 py-2 pr-2 my-2 rounded-xl">
            <div class="p-0 sm:p-2 md:p-5">
                <canvas id="doughnut-chart" class="min-h-min sm:min-h-[20rem]"></canvas>
            </div>
        </li>
    </ul>
</div>

@endsection

@section('internalScript')

<!-- Chart.js CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>

<script>

    //  Doughnut Chart function
    const doughnutChart = () => { 

        // chart labels
        const labels = ["Red", "Green", "Blue", "Yellow", "Orange"];

        // chart colors
        const CHART_COLORS = [
            "rgba(248,113,113,1)",
            "rgba(52,211,153,1)",
            "rgba(56,189,248,1)",
            "rgba(250,204,21,1)",
            "rgba(251,146,60,1)"
        ];

        // Doughnut Chart config
        const doughnutChartConfig = {
            responsive: true,
            plugins: {
                legend: {
                    position: "top",
                },
                title: {
                    display: false,
                    text: "Chart.js Doughnut Chart"
                }
            }
        };

        // Doughnut Chart data
        const doughnutChartData = {
            labels : labels,
            datasets: [
                {
                    label: "Doughnut Chart Example",
                    backgroundColor: CHART_COLORS,
                    data: [73.048, 72.694, 70.83, 63.546, 61.888],
                }
            ]
        };

        const chart = $("#doughnut-chart");
        
        const doughnut = new Chart(chart, {
            type: "doughnut",
            options: doughnutChartConfig,
            data: doughnutChartData
        });

    }

    // call function
    doughnutChart();
    
</script>

@endsection