@extends('master')
@section('content')

<div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div>

<!-- Design stats with Stacked bar/line -->

<!-- main -->
<div class="mainCard">
    <!-- main card -->
    <ul class="cardContainer grid-cols-1">

        <!-- Stats with Stacked bar/line chart -->
        <li class="eachCard px-0 py-2 pr-2 col-span-2 md:col-span-1 mt-5 sm:mt-0 md:mt-0">
            <div class="p-0 sm:p-2 md:p-5">
                <canvas id="barChartWithLine" class="min-h-min sm:min-h-[20rem]"></canvas>
            </div>
        </li>
    </ul>
</div>  

@endsection

@section('internalScript')

<!-- Chart CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<!-- graph JS link -->
<script type="text/javascript" src="jscript/graph.js"></script>

<script>

    // statsWithStackedBarLine function
    const statsWithStackedBarLine = () => {

        // bar chart with line config
        const barChartWithLineConfig = {
            maintainAspectRatio: true, // true: graph size bigger
            responsive: true,
        };

        // chart data
        const barChartWithLineData = {
            labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            datasets: [
                {
                    label: "New",
                    backgroundColor: "rgb(31,168,224,0.2)",
                    borderColor: "rgba(31,168,224,1)",
                    borderWidth: 2,
                    hoverBackgroundColor: "rgba(31,168,224,0.4)",
                    hoverBorderColor: "rgba(31,168,224,1)",
                    data: [65, 234, 35, 165, 56, 67],
                    stack: 'combined',
                    type: 'line'
                },
                {
                    label: "Contacted",
                    backgroundColor: "rgb(92,224,31,0.2)",
                    borderColor: "rgba(92,224,31,1)",
                    borderWidth: 2,
                    hoverBackgroundColor: "rgba(92,224,31,0.4)",
                    hoverBorderColor: "rgba(92,224,31,1)",
                    data: [65, 100, 35, 81, 56, 55],
                    stack: 'combined',
                }
            ]
        };

        const chart = document.querySelector('#barChartWithLine');

        // Draw chart structure with chart data
        const stats = new Chart(chart, {
            type: 'bar',
            options: barChartWithLineConfig,
            data: barChartWithLineData
        });
    }

    // call function
    statsWithStackedBarLine();

</script>

@endsection
