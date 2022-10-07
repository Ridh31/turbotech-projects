@extends('master')
@section('content')

<div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div>

<!-- Design Stats with Pie Chart Solid -->

<!-- main -->
<div class="mainCard">
    <!-- main card -->
    <ul class="cardContainer grid-cols-1">

        <!-- chart -->
        <li class="eachCard px-0 pt-0 col-span-2 md:col-span-1">
            <div class="flex divide-x h-12 border-b divide-secondary-200 p-0">
                <h2 class="p-3 font-md w-full block font-medium dark:text-gray-100">Design Stats with Bar Chart Solid </h2>
            </div>
            <div class="p-2 sm:p-5">
                <canvas id="pieChartSolid" class="min-h-min sm:min-h-[20rem]" width="400" height="150"></canvas>
            </div>
        </li>
        <!-- chart -->
    </ul>
</div>  

@endsection

@section('internalScript')

<!-- Chart CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<!-- graph JS link -->
<script type="text/javascript" src="jscript/graph.js"></script>

<script>

    // statsWithPieChartSolid function
    const statsWithPieChartSolid = () => {

        // chart data
        const pieChartSolidData = {
            labels: ['Data#1', 'Data#2', 'Data#3', 'Data#4'],
            datasets: [
                {
                    data: [133.3, 86.2, 52.2, 51.2],
                    borderWidth: 1,
                    backgroundColor: [
                        "rgba(92,224,31)",
                        "rgba(31,168,224)",
                        "rgba(92,134,333)",
                        "rgba(255,99,132)",
                    ],
                    hoverBackgroundColor: [
                        "rgba(92,224,31,0.8)",
                        "rgba(31,168,224,0.8)",
                        "rgba(92,134,333,0.8)",
                        "rgba(255,99,132,0.8)",
                    ],
                    hoverBorderColor: [
                        "rgba(92,224,31,1)",
                        "rgba(31,168,224,1)",
                        "rgba(92,134,333,1)",
                        "rgba(255,99,132,1)",
                    ]
                }
            ]
        };

        const chart = document.querySelector('#pieChartSolid');

        // draw pie chart solid with chart data
        const pieChartSolid = new Chart(chart, {
            type: 'pie',
            data: pieChartSolidData
        });
    }

    // call function
    statsWithPieChartSolid();

</script>

@endsection
