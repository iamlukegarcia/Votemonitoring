<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Color Leader Dashboard</title>

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
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>

    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets_Admin/images/favicon.png') }}">

</head>

<body>
    <div class="container p-3">
        <div class="row ">
            <div class="col-sm">

            </div>
            <div class="col-sm ">
                <br><br>
                <h1 class="text-center text-red-600"> PLEASE CHOOSE YOUR COLOR </h1>
                <br><br>
                <a href="{{ route('Watcherslog.White') }}"
                    class="block max-w-sm p-6 mb-4  border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100">
                    <h5 class="mb-2 text-2xl font-bold text-center tracking-tight text-gray-900 "> WHITE TEAM </h5>
                </a>

                <div class="bg-red-800">
                    <a href="{{ route('Watcherslog.Red') }}"
                        class="block max-w-sm p-6  mb-4 border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100">
                        <h5 class="mb-2 text-2xl font-bold text-center tracking-tight text-gray-300 "> RED TEAM </h5>
                    </a>
                </div>

                <div class="bg-yellow-400">
                    <a href="{{ route('Watcherslog.Yellow') }}"
                        class="block max-w-sm p-6  mb-4 border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100">
                        <h5 class="mb-2 text-2xl font-bold text-center tracking-tight text-gray-900 "> YELLOW TEAM </h5>
                    </a>
                </div>

                <div class="bg-blue-800">
                    <a href="{{ route('Watcherslog.Blue') }}"
                        class="block max-w-sm p-6 mb-4 border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100">
                        <h5 class="mb-2 text-2xl font-bold text-center tracking-tight text-gray-300 "> BLUE TEAM </h5>
                    </a>
                </div>

            </div>
            <div class="col-sm">

            </div>
        </div>
    </div>

</body>

</html>
