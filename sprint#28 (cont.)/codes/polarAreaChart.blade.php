@extends('master')
@section('content')

{{-- <div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div> --}}

<!-- Design Polar Area Chart -->

<!-- main -->
<div class="mainCard">
    <ul class="cardContainer flex justify-center items-center h-screen md:h-full bg-[color:rgba(var(--ni-gray-100))] p-2 sm:p-5">
        <li class="eachCard w-full md:w-[80%] lg:w-[70%] xl:w-[60%] 2xl:w-[50%] h-auto px-0 py-2 pr-2 my-2 rounded-xl">
            <div class="p-0 sm:p-2 md:p-5">
                <canvas id="polar-area-chart" class="min-h-min sm:min-h-[20rem]"></canvas>
            </div>
        </li>
    </ul>
</div>

@endsection

@section('internalScript')

<!-- Chart.js CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>

<script>

    //  Polar Area Chart function
    const polarAreaChart = () => { 

        // chart labels
        const labels = ["Red", "Green", "Blue", "Yellow", "Orange"];

        // chart colors
        const CHART_COLORS = [
            "rgba(248,113,113,0.5)",
            "rgba(52,211,153,0.5)",
            "rgba(56,189,248,0.5)",
            "rgba(250,204,21,0.5)",
            "rgba(251,146,60,0.5)"
        ];

        // Polar Area Chart config
        const polarAreaChartConfig = {
            responsive: true,
            plugins: {
                legend: {
                    position: "top",
                },
                title: {
                    display: false,
                    text: "Chart.js Polar Area Chart"
                }
            }
        };

        // Polar Area Chart data
        const polarAreaChartData = {
            labels : labels,
            datasets: [
                {
                    label: "Polar Area Chart Example",
                    backgroundColor: CHART_COLORS,
                    data: [60.067, 44.694, 55.83, 47.546, 39.888],
                }
            ]
        };

        const chart = $("#polar-area-chart");
        
        const polarArea = new Chart(chart, {
            type: "polarArea",
            options: polarAreaChartConfig,
            data: polarAreaChartData
        });

    }

    // call function
    polarAreaChart();
    
</script>

@endsection