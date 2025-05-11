<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
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
    <br> <br> <br>
    <div class="container">
        <div class="row ">
            @foreach ($Barangays as $Barangay)
                <div class="col-3 mb-3">
                    <div class="card">
                        <div class="card-body px-3 text-dark">
                            <div class="d-flex justify-content-between">
                                <h2 class="text-red-700 font-weight-bold mb-2">{{ $Barangay->brgyName }}</h2>
                            </div>
                            <h4 class="font-weight-semibold text-center">{{ $BarangayCount[$Barangay->brgy_id] }}
                                out of {{ $Barangay->NumberofPrecinct }} precincts are updated.
                                <span
                                    class="text-info">({{ round(($BarangayCount[$Barangay->brgy_id] / $Barangay->NumberofPrecinct) * 100, 2) }}%)</span>
                            </h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container">
        <div class="card mt-5">
            <h3 class="card-header p-3">Watchers Transaction Log</h3>
            <div class="card-body">

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table id="search-table2" class="w-full text-sm text-center text-gray-600">
                        <thead class="text-xs  text-gray-700 uppercase bg-gray-550">
                            <tr>

                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Clustered Precinct
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Barangay
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Registered
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Number of Votes
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Invalid Votes
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

                                    <th scope="row"
                                        class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap ">
                                        {{ $PrecinctLog->FirstName }} {{ $PrecinctLog->LastName }}
                                    </th>
                                    <td class="px-6 py-4 text-center  text-gray-900">
                                        {{ $PrecinctLog->Precinct_id }}
                                    </td>
                                    <td class="px-6 py-4 text-center  text-gray-900">
                                        {{ $PrecinctLog->brgyName }}
                                    </td>
                                    <td class="px-6 py-4 text-center  text-gray-900">
                                        {{ $PrecinctLog->RegisteredVoters }}
                                    </td>
                                    <td class="px-6 py-4 text-center  text-gray-900">
                                        {{ $PrecinctLog->NumberofVotes }}
                                    </td>
                                    <td class="px-6 py-4 text-center  text-gray-900">
                                        {{ $PrecinctLog->Invalid_Votes }}
                                    </td>
                                    <td class="px-6 py-4 text-center  text-gray-900">
                                        @if ($PrecinctLog->updated_at == null)
                                            No update yet
                                        @else
                                            {{ \Carbon\Carbon::parse($PrecinctLog->updated_at)->DiffForHumans() }}
                                        @endif

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
<script>
    if (document.getElementById("search-table2") && typeof simpleDatatables.DataTable !== 'undefined') {
        const dataTable = new simpleDatatables.DataTable("#search-table2", {
            searchable: true,
            sortable: true,
        });
    }
</script>

</html>
