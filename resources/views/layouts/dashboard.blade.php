<div class="main-panel">
    <div class="content-wrapper pb-0">


        <!-- CITY LEVEL starts here -->
        <div class="row">
            <div
                class="max-w-sm col-sm-12 col-lg-4 w-full bg-white rounded-lg mb-4 shadow-sm dark:bg-gray-800 p-4 md:p-6">

                <div class="flex justify-between items-start w-full">
                    <div class="flex-col items-center">
                        <div class="flex items-center mb-1">
                            <h5 class="text-xl font-bold leading-none text-black-900 me-1"> VOTE MONITORING (CITYWIDE)
                            </h5>
                        </div>
                    </div>
                </div>
                <!-- pie  Chart -->
                <div class="py-6" id="pie-chart"></div>
            </div>

            {{-- Overall stats start here  --}}
            <div class="col-lg-8">
                <div class="row ">
                    <div class="col-sm-12 stretch-card grid-margin">
                        <div class="card ">
                            <div class="card-body px-3    text-dark">
                                <div class="d-flex justify-content-between">
                                    <p class="text-muted font-13 mb-0">Total Registered Voters</p>
                                </div>
                                <h2 class="font-weight-bold"> {{ $RegVotes }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row  ">
                    <div class="col-sm-6 stretch-card grid-margin">
                        <div class="card">
                            <div class="card-body px-3 text-dark">
                                <div class="d-flex justify-content-between">
                                    <p class="text-muted font-13 mb-0">Total Voters Voted</p>
                                </div>
                                <h2 class="font-weight-semibold"> {{ $NumVotes }}
                                    <span class="text-info">({{ round(($NumVotes / $RegVotes) * 100, 2) }}%)</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 stretch-card grid-margin">
                        <div class="card">
                            <div class="card-body px-3 text-dark">
                                <div class="d-flex justify-content-between">
                                    <p class="text-muted font-13 mb-0"><span
                                            class="font-weight-bold text-danger">NOT</span> Voted yet</p>
                                </div>
                                <h2 class="font-weight-semibold"> {{ $RegVotes - $NumVotes }}
                                    <span
                                        class="text-info">({{ round((($RegVotes - $NumVotes) / $RegVotes) * 100, 2) }}%)</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 stretch-card grid-margin">
                        <div class="card">
                            <div class="card-body px-3 text-dark">
                                <div class="d-flex justify-content-between">
                                    <p class="text-muted font-13 mb-0">Total Invalid Votes</p>
                                </div>
                                <h2 class="font-weight-semibold">{{ $InvalidVotes }}
                                    <span class="text-info">({{ round(($InvalidVotes / $RegVotes) * 100, 2) }}%)</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



        <!-- Barangay Level starts here -->
        <div class="row mb-3">

            <div class=" w-full bg-white rounded-lg shadow-sm dark:bg-gray-800 p-4 md:p-6">
                <div class="flex justify-between border-gray-200 border-b dark:border-gray-700 pb-3">
                    <dl>
                        <dt class="text-base font-normal text-gray-500 dark:text-gray-400 pb-1">VOTE MONITORING</dt>
                        <dd class="leading-none text-3xl font-bold text-gray-900  ">BARANGAY</dd>
                    </dl>
                </div>
            </div>
         </div>
         <div class="row">
            @foreach($Barangay as $barangays)
            <div class="col-sm-3 stretch-card grid-margin">
                <div class="card">
                    <div class="card-body px-3 text-dark">
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-medium text-black-700  ">
                                {{  $barangays->brgyName }}     
                            </span>
                            <span class="text-sm font-medium text-black-700  ">  {{ $BarangayData[$barangays->brgy_id] }}   %</span>
                        </div>
                        <div class="h-6 w-full bg-gray-200 rounded-full h-2.5 ">
                            <div class="h-6 bg-red-600 text-large font-medium text-blue-50 text-center p-0.5 leading-none rounded-full"
                                style="width:  {{ $BarangayData[$barangays->brgy_id] }}%">
                                <span class=" font-weight-bold ">   {{ $BarangayData[$barangays->brgy_id] }}</span>
                            </div>
                        </div>
                        <span class="text-sm  font-medium text-black-700  ">  {{ $Barangaycount[$barangays->brgy_id] }} of out {{  $barangays->NumberofPrecinct  }} Precincts are updated </span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    @include('layouts.partial.footer')
    <!-- partial -->
</div>
