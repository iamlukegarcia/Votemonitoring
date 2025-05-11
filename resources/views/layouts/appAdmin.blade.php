<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Admin Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets_Admin/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_Admin/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_Admin/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('TailwindCharts/flowbite.min.css') }}">

    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets_Admin/vendors/jquery-bar-rating/css-stars.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_Admin/vendors/font-awesome/css/font-awesome.min.css') }}">


    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets_Admin/css/demo_1/style.css') }}">

    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets_Admin/images/favicon.png') }}">

</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        {{-- @include('layouts.partial.sidebar') --}}
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            @include('layouts.partial.settings')
            <!-- partial -->
            <!-- partial:partials/_navbar.html -->
            @include('layouts.partial.navbar')
            <!-- partial -->
            @include('layouts.dashboard')
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('assets_Admin/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets_Admin/vendors/jquery-bar-rating/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('assets_Admin/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets_Admin/vendors/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets_Admin/vendors/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('assets_Admin/vendors/flot/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('assets_Admin/vendors/flot/jquery.flot.fillbetween.js') }}"></script>
    <script src="{{ asset('assets_Admin/vendors/flot/jquery.flot.stack.js') }}"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets_Admin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets_Admin/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets_Admin/js/misc.js') }}"></script>
    <script src="{{ asset('assets_Admin/js/settings.js') }}"></script>
    <script src="{{ asset('assets_Admin/js/todolist.js') }}"></script>

    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assets_Admin/js/dashboard.js') }}"></script>
    <script src="{{ asset('TailwindCharts/flowbite.min.js') }}"></script>
    <script src="{{ asset('TailwindCharts/apexcharts.js') }}"></script>

    <!-- End custom js for this page -->
</body>


<script>
    const getChartOptions = () => {
        return {
            series: [{{ round(($NumVotes / $RegVotes) * 100, 2) }},
                {{ round((($RegVotes - $NumVotes) / $RegVotes) * 100, 2) }}
            ],
            colors: ["#681200", "#9f9f9f"],
            chart: {
                height: 420,
                width: "100%",
                type: "pie",
            },
            stroke: {
                colors: ["white"],
                lineCap: "",
            },
            plotOptions: {
                pie: {
                    labels: {
                        show: true,
                    },
                    size: "100%",
                    dataLabels: {
                        offset: -25
                    }
                },
            },
            labels: ["Voted", "Not Voted"],
            dataLabels: {
                enabled: true,
                style: {
                    fontFamily: "Inter, sans-serif",
                },
            },
            legend: {
                position: "bottom",
                fontFamily: "Inter, sans-serif",
            },
            yaxis: {
                labels: {
                    formatter: function(value) {
                        return value + "%"
                    },
                },
            },
            xaxis: {
                labels: {
                    formatter: function(value) {
                        return value + "%"
                    },
                },
                axisTicks: {
                    show: false,
                },
                axisBorder: {
                    show: false,
                },
            },
        }
    }

    if (document.getElementById("pie-chart") && typeof ApexCharts !== 'undefined') {
        const chart = new ApexCharts(document.getElementById("pie-chart"), getChartOptions());
        chart.render();
    }
    // end pie chart

    //start line chart 

    const options = {
        series: [{
                name: "Voted",
                color: "#681200",
                data: [{{ $Baclaran }},
                    {{ $Banay }}, {{ $Banlic }},
                    {{ $Bigaa }}, {{ $Butong }}, {{ $Casile }}, {{ $Diezmo }},
                    {{ $Gulod }}, {{ $Mamatid }}, {{ $Marinig }}, {{ $Niugan }},
                    {{ $Pittland }}, {{ $Pulo }}, {{ $Sala }}, {{ $SanIsidro }},
                    {{ $PobUno }}, {{ $PobDos }}, {{ $PobTres }}
                ],
            },
            {
                name: "Not Voted",
                data: [{{100 - $Baclaran}},
                    {{100 - $Banay }}, {{100 - $Banlic }},
                    {{100 - $Bigaa }}, {{100 - $Butong }}, {{100 - $Casile }}, {{100 - $Diezmo }},
                    {{100 - $Gulod }}, {{100 - $Mamatid }}, {{100 - $Marinig }}, {{100 - $Niugan }},
                    {{100 - $Pittland }}, {{100 - $Pulo }}, {{100 - $Sala }}, {{100 - $SanIsidro }},
                    {{100 - $PobUno }}, {{100 - $PobDos }}, {{100 - $PobTres }}],
                color: "#9f9f9f",
            }
        ],
        chart: {
            sparkline: {
                enabled: false,
            },
            type: "bar",
            width: "100%",
            height: 1000,
            toolbar: {
                show: false,
            }
        },
        fill: {
            opacity: 1,
        },
        plotOptions: {
            bar: {
                horizontal: true,
                columnWidth: "100%",
                borderRadiusApplication: "end",
                borderRadius: 6,
                dataLabels: {
                    position: "top",
                },
            },
        },
        legend: {
            show: true,
            position: "bottom",
        },
        dataLabels: {
            enabled: false,
        },
        tooltip: {
            shared: true,
            intersect: false,
            formatter: function(value) {
                return value + "yy%"
            }
        },
        xaxis: {
            labels: {
                show: true,
                style: {
                    fontFamily: "Inter, sans-serif",
                    cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                },
                formatter: function(value) {
                    return value + "%"
                }
            },
            categories: ["Baclaran", "Banay-Banay", "Banlic", "Bigaa", "Butong", "Casile",
                "Diezmo", "Gulod", "Mamatid", "Marinig", "Niugan", "Pittland", "Pulo", "Sala", "San Isidro",
                "Pob. Uno", "Pob. Dos", "Pob. Tres",
            ],
            axisTicks: {
                show: false,
            },
            axisBorder: {
                show: false,
            },
        },
        yaxis: {
            labels: {
                show: true,
                style: {
                    fontFamily: "Inter, sans-serif",
                    cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                }
            }
        },
        grid: {
            show: true,
            strokeDashArray: 4,
            padding: {
                left: 2,
                right: 2,
                top: -20
            },
        },
        fill: {
            opacity: 1,
        }
    }

    if (document.getElementById("bar-chart") && typeof ApexCharts !== 'undefined') {
        const chart = new ApexCharts(document.getElementById("bar-chart"), options);
        chart.render();
    }
</script>

</html>
