@extends('master')
@section('content')

<div class="headingContainer">
    <h1 class="headingText">  <i class="{{ $icon }} headingIcon"> </i> {{ $title }} </h1>
</div>

<!-- Design Stats With shared borders -->

<!-- main -->
<div class="mainCard">
    <!-- main card -->
    <ul class="cardContainer bg-gray-100">

        <li class="shadow-lg grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2s lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-3 px-10 pb-5">
            
            <!-- Total Subscribers -->
            <div class="px-0 pt-0 col-span-2 md:col-span-1 my-5">
                <div class="bg-white border-r border-gray-100 sm:rounded-l-lg md:rounded-l-lg lg:rounded-l-lg xl:rounded-l-lg 2xl-rounded-l-lg">
                    <div class="px-5 pt-5">
                        <p class="text-sm text-muted">Total Subscribers</p>
                        <div class="flex">
                            <div class="w-full">
                                <span class="text-3xl font-medium text-indigo-600">71,897</span> 
                                <span class="text-sm text-muted">from 70,946</span>
                            </div>
                            <div class="flex border-1 border-green-100 bg-green-100 rounded-xl my-auto px-2">
                                <svg class="w-4 h-4 my-auto text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg> 
                                <span class="text-sm text-muted ml-1">12%</span>
                            </div>
                        </div>
                    </div>     
                    <canvas id="totalSubscribers" width="400" height="200"></canvas>
                </div>
            </div>
            <!-- end of Total Subscribers -->

            <!-- Avg. Open Rate -->
            <div class="px-0 pt-0 col-span-2 md:col-span-1 my-5">
                <div class="bg-white border-r border-gray-100">
                    <div class="px-5 pt-5">
                        <p class="text-sm text-muted">Avg. Open Rate</p>
                        <div class="flex">
                            <div class="w-full">
                                <span class="text-3xl font-medium text-indigo-600">58.16%</span> 
                                <span class="text-sm text-muted">from 58.14%</span>
                            </div>
                            <div class="flex border-1 border-green-100 bg-green-100 rounded-xl my-auto px-2">
                                <svg class="w-4 h-4 my-auto text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg> 
                                <span class="text-sm text-muted ml-1">2.02%</span>
                            </div>
                        </div>
                    </div>     
                    <canvas id="avgOpenRate" width="400" height="200"></canvas>
                </div>
            </div>
            <!-- end of Avg. Open Rate -->

            <!-- Avg. Click Rate -->
            <div class="px-0 pt-0 col-span-2 md:col-span-1 my-5">
                <div class="bg-white sm:rounded-r-lg md:rounded-r-lg lg:rounded-r-lg xl:rounded-r-lg 2xl-rounded-r-lg">
                    <div class="px-5 pt-5">
                        <p class="text-sm text-muted">Avg. Click Rate</p>
                        <div class="flex">
                            <div class="w-full">
                                <span class="text-3xl font-medium text-indigo-600">24.57%</span> 
                                <span class="text-sm text-muted">from 28.62%</span>
                            </div>
                            <div class="flex border-1 border-red-100 bg-red-100 rounded-xl my-auto px-2">
                                <svg class="w-4 h-4 my-auto text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg> 
                                <span class="text-sm text-muted ml-1">4.05%</span>
                            </div>
                        </div>
                    </div>     
                    <canvas id="avgClickRate" width="400" height="200"></canvas>
                </div>
            </div>
            <!-- end of Avg. Click Rate -->
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

    // totalSubscribers function
    const totalSubscribers = () => {

        // totalSubscribers config
        const totalSubscribersConfig = {
            responsive: true,
            title: {
                display: true,
                // text: 'Amounts by Month'
            },
            legend: {
                display: true
            },
            scales: {
                yAxes: [
                    {
                        // Hide y-axis here
                        display: false,
                        ticks: {
                            beginAtZero: true
                        },
                        scaleLabel: {
                            display: true,
                            labelString: 'Amount',
                            fontSize: 20
                        },
                        stacked: true
                    }
                ],
                xAxes: [
                    {
                    // Hide x-axis here
                    display: false
                    }
                ]
            }
        };
        
        // totalSubscribers data
        const totalSubscribersData = {
            labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
            datasets : [
                {
                    label: "Total Subscribers",
                    fill: true,
                    lineTension: 0.1,
                    backgroundColor: "rgba(31, 168, 224, 0.4)",
                    borderColor: "rgba(31, 168, 224, 1)", // The main line color
                    borderCapStyle: 'square',
                    pointBorderColor: "rgba(60, 186, 159, 1)",
                    pointBackgroundColor: "rgba(60, 186, 159, 1)",
                    pointBorderWidth: 1,
                    pointHoverRadius: 8,
                    pointHoverBackgroundColor: "yellow",
                    pointHoverBorderColor: "rgba(60, 186, 159, 1)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 4,
                    pointHitRadius: 10,
                    data: [47, 60, 120, 230, 300, 310, 400],
                    spanGaps: true,
                }
            ]
        };

        const totalSubscribersChart = document.querySelector('#totalSubscribers');

        // draw totalSubscribers chart with chart data
        const simpleChart = new Chart(totalSubscribersChart, {
            type: "line",
            data: totalSubscribersData,
            options: totalSubscribersConfig
        });

    }

    // avgOpenRate function
    const avgOpenRate = () => {

        // avgOpenRateConfig
        const avgOpenRateConfig = {
            responsive: true,
            title: {
                display: true,
                // text: 'Amounts by Month'
            },
            legend: {
                display: true
            },
            scales: {
                yAxes: [
                    {
                        // Hide y-axis here
                        display: false,
                        ticks: {
                            beginAtZero: true
                        },
                        scaleLabel: {
                            display: true,
                            labelString: 'Amount',
                            fontSize: 20
                        },
                        stacked: true
                    }
                ],
                xAxes: [
                    {
                    // Hide x-axis here
                    display: false
                    }
                ]
            }
        };

        // avgOpenRateData
        const avgOpenRateData = {
            labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
            datasets : [
                {
                    label: "Avg. Open Rate",
                    fill: true,
                    lineTension: 0.1,
                    backgroundColor: "rgba(196, 88, 80, 0.4)",
                    borderColor: "rgba(196, 88, 80, 1)", // The main line color
                    borderCapStyle: 'square',
                    pointBorderColor: "rgba(60, 186, 159, 1)",
                    pointBackgroundColor: "rgba(60, 186, 159, 1)",
                    pointBorderWidth: 1,
                    pointHoverRadius: 8,
                    pointHoverBackgroundColor: "yellow",
                    pointHoverBorderColor: "rgba(60, 186, 159, 1)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 4,
                    pointHitRadius: 10,
                    data: [400, 310, 300, 230, 300, 310, 400],
                    spanGaps: true,
                }
            ]
        };

        const avgOpenRateChart = document.querySelector('#avgOpenRate');

        // draw  avgOpenRate chart with chart data
        const chart = new Chart(avgOpenRateChart, {
            type: "line",
            data: avgOpenRateData,
            options: avgOpenRateConfig
        });
    }

    // avgClickRate function
    const avgClickRate = () => {

        // avgOpenRateConfig
        const avgClickRateConfig = {
            responsive: true,
            title: {
                display: true,
                // text: 'Amounts by Month'
            },
            legend: {
                display: true
            },
            scales: {
                yAxes: [
                    {
                        // Hide y-axis here
                        display: false,
                        ticks: {
                            beginAtZero: true
                        },
                        scaleLabel: {
                            display: true,
                            labelString: 'Amount',
                            fontSize: 20
                        },
                        stacked: true
                    }
                ],
                xAxes: [
                    {
                    // Hide x-axis here
                    display: false
                    }
                ]
            }
        };

        // avgClickRateData
        const avgClickRateData = {
            labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
            datasets : [
                {
                    label: "Avg. Click Rate",
                    fill: true,
                    lineTension: 0.1,
                    backgroundColor: "rgba(60, 186, 159, 0.4)",
                    borderColor: "rgba(60, 186, 159, 1)", // The main line color
                    borderCapStyle: 'square',
                    pointBorderColor: "rgba(31, 168, 224, 1)",
                    pointBackgroundColor: "rgba(31, 168, 224, 1)",
                    pointBorderWidth: 1,
                    pointHoverRadius: 8,
                    pointHoverBackgroundColor: "yellow",
                    pointHoverBorderColor: "rgba(31, 168, 224, 1)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 4,
                    pointHitRadius: 10,
                    data: [400, 310, 300, 230, 120, 60, 47],
                    spanGaps: true,
                }
            ]
        };

        const avgClickRateChart = document.querySelector('#avgClickRate');

        // draw  avgOpenRate chart with chart data
        const chart = new Chart(avgClickRateChart, {
            type: "line",
            data: avgClickRateData,
            options: avgClickRateConfig
        });

    }

    // call function
    totalSubscribers();
    avgOpenRate();
    avgClickRate();

</script>

@endsection
