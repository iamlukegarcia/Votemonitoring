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
    <div class="container">
        <div class="card mt-5">
            <h3 class="card-header p-3">Watchers Transaction Log</h3>
            <div class="card-body">

                {{-- 
                   
                 --}}


                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <div class="pb-4 bg-black  ">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative mt-1">
                            <div
                                class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="text" id="table-search"
                                class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search for items">
                        </div>
                    </div>
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>

                                <th scope="col" class="px-6 py-3">
                                    FirstName
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    LastName
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Clustered Precinct
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Barangay
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Number of Votes
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Last update
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($PrecinctLogs as $PrecinctLog)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">

                                    <th scope="row" class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap ">
                                        {{ $PrecinctLog->FirstName }}
                                    </th>
                                    <td class="px-6 py-4 text-center  text-gray-900">
                                        {{ $PrecinctLog->LastName }}
                                    </td>
                                    <td class="px-6 py-4 text-center  text-gray-900">
                                        {{ $PrecinctLog->PrecinctCode }}
                                    </td>
                                    <td class="px-6 py-4 text-center  text-gray-900">
                                        {{ $PrecinctLog->brgyName }}
                                    </td>
                                    <td class="px-6 py-4 text-center  text-gray-900">
                                        {{ $PrecinctLog->NumberofVotes }}
                                    </td>
                                    <td class="px-6 py-4 text-center  text-gray-900">
                                        {{ $PrecinctLog->updated_at }}
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>


</body>

</html>
