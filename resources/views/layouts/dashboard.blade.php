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
                        <span class="text-sm  font-medium text-black-700  ">  X of out Y Precincts are updated </span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
      

        <!-- image card row starts here -->
       
        <!-- table row starts here -->
        {{-- <div class="row">
            <div class="col-xl-4 grid-margin">
                <div class="card card-stat stretch-card mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="text-white">
                                <h3 class="font-weight-bold mb-0">$168.90</h3>
                                <h6>This Month</h6>
                                <div class="badge badge-danger">23%</div>
                            </div>
                            <div class="flot-bar-wrapper">
                                <div id="column-chart" class="flot-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card stretch-card mb-3">
                    <div class="card-body d-flex flex-wrap justify-content-between">
                        <div>
                            <h4 class="font-weight-semibold mb-1 text-black"> Member Profit </h4>
                            <h6 class="text-muted">Average Weekly Profit</h6>
                        </div>
                        <h3 class="text-success font-weight-bold">+168.900</h3>
                    </div>
                </div>
                <div class="card stretch-card mb-3">
                    <div class="card-body d-flex flex-wrap justify-content-between">
                        <div>
                            <h4 class="font-weight-semibold mb-1 text-black"> Total Profit </h4>
                            <h6 class="text-muted">Weekly Customer Orders</h6>
                        </div>
                        <h3 class="text-success font-weight-bold">+6890.00</h3>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body d-flex flex-wrap justify-content-between">
                        <div>
                            <h4 class="font-weight-semibold mb-1 text-black"> Issue Reports </h4>
                            <h6 class="text-muted">System bugs and issues</h6>
                        </div>
                        <h3 class="text-danger font-weight-bold">-8380.00</h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 stretch-card grid-margin">
                <div class="card">
                    <div class="card-body pb-0">
                        <h4 class="card-title mb-0">Financial management review</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table custom-table text-dark">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Sale Rate</th>
                                        <th>Actual</th>
                                        <th>Variance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="../assets/images/faces/face2.jpg" class="mr-2"
                                                alt="image" /> Jacob Jensen
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <span class="pr-2 d-flex align-items-center">85%</span>
                                                <select id="star-1" name="rating" autocomplete="off">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td>32,435</td>
                                        <td>40,234</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="../assets/images/faces/face3.jpg" class="mr-2"
                                                alt="image" /> Cecelia Bradley
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <span class="pr-2 d-flex align-items-center">55%</span>
                                                <select id="star-2" name="rating" autocomplete="off">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td>4,36780</td>
                                        <td>765728</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="../assets/images/faces/face4.jpg" class="mr-2"
                                                alt="image" /> Leah Sherman
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <span class="pr-2 d-flex align-items-center">23%</span>
                                                <select id="star-3" name="rating" autocomplete="off">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td>2300</td>
                                        <td>22437</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="../assets/images/faces/face5.jpg" class="mr-2"
                                                alt="image" /> Ina Curry
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <span class="pr-2 d-flex align-items-center">44%</span>
                                                <select id="star-4" name="rating" autocomplete="off">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td>53462</td>
                                        <td>1,75938</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="../assets/images/faces/face7.jpg" class="mr-2"
                                                alt="image" /> Lida Fitzgerald
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <span class="pr-2 d-flex align-items-center">65%</span>
                                                <select id="star-5" name="rating" autocomplete="off">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td>67453</td>
                                        <td>765377</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="../assets/images/faces/face2.jpg" class="mr-2"
                                                alt="image" /> Stella Johnson
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <span class="pr-2 d-flex align-items-center">49%</span>
                                                <select id="star-6" name="rating" autocomplete="off">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td>43662</td>
                                        <td>96535</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="../assets/images/faces/face9.jpg" class="mr-2"
                                                alt="image" /> Maria Ortiz
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <span class="pr-2 d-flex align-items-center">65%</span>
                                                <select id="star-7" name="rating" autocomplete="off">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td>76555</td>
                                        <td>258546</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a class="text-black font-13 d-block pt-2 pb-2 pb-lg-0 font-weight-bold pl-4"
                            href="#">Show more</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- doughnut chart row starts -->
        <div class="row">
            <div class="col-sm-12 stretch-card grid-margin">
                <div class="card">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="card-title">Channel Sessions</div>
                                    <div class="d-flex flex-wrap">
                                        <div class="doughnut-wrapper w-50">
                                            <canvas id="doughnutChart1" width="100" height="100"></canvas>
                                        </div>
                                        <div id="doughnut-chart-legend"
                                            class="pl-lg-3 rounded-legend align-self-center flex-grow legend-vertical legend-bottom-left">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="card-title">News Sessions</div>
                                    <div class="d-flex flex-wrap">
                                        <div class="doughnut-wrapper w-50">
                                            <canvas id="doughnutChart2" width="100" height="100"></canvas>
                                        </div>
                                        <div id="doughnut-chart-legend2"
                                            class="pl-lg-3 rounded-legend align-self-center flex-grow legend-vertical legend-bottom-left">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="card-title">Device Sessions</div>
                                    <div class="d-flex flex-wrap">
                                        <div class="doughnut-wrapper w-50">
                                            <canvas id="doughnutChart3" width="100" height="100"></canvas>
                                        </div>
                                        <div id="doughnut-chart-legend3"
                                            class="pl-lg-3 rounded-legend align-self-center flex-grow legend-vertical legend-bottom-left">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- last row starts here -->
        <div class="row">
            <div class="col-sm-6 col-xl-4 stretch-card grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title mb-2">Upcoming events (3)</div>
                        <h3 class="mb-3">23 september 2019</h3>
                        <div class="d-flex border-bottom border-top py-3">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" checked /></label>
                            </div>
                            <div class="pl-2">
                                <span class="font-12 text-muted">Tue, Mar 5, 9.30am</span>
                                <p class="m-0 text-black"> Hey I attached some new PSD files… </p>
                            </div>
                        </div>
                        <div class="d-flex border-bottom py-3">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" /></label>
                            </div>
                            <div class="pl-2">
                                <span class="font-12 text-muted">Mon, Mar 11, 4.30 PM</span>
                                <p class="m-0 text-black"> Discuss performance with manager </p>
                            </div>
                        </div>
                        <div class="d-flex border-bottom py-3">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" /></label>
                            </div>
                            <div class="pl-2">
                                <span class="font-12 text-muted">Tue, Mar 5, 9.30am</span>
                                <p class="m-0 text-black">Meeting with Alisa</p>
                            </div>
                        </div>
                        <div class="d-flex pt-3">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" /></label>
                            </div>
                            <div class="pl-2">
                                <span class="font-12 text-muted">Mon, Mar 11, 4.30 PM</span>
                                <p class="m-0 text-black"> Hey I attached some new PSD files… </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4 stretch-card grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex border-bottom mb-4 pb-2">
                            <div class="hexagon">
                                <div class="hex-mid hexagon-warning">
                                    <i class="mdi mdi-clock-outline"></i>
                                </div>
                            </div>
                            <div class="pl-4">
                                <h4 class="font-weight-bold text-warning mb-0"> 12.45 </h4>
                                <h6 class="text-muted">Schedule Meeting</h6>
                            </div>
                        </div>
                        <div class="d-flex border-bottom mb-4 pb-2">
                            <div class="hexagon">
                                <div class="hex-mid hexagon-danger">
                                    <i class="mdi mdi-account-outline"></i>
                                </div>
                            </div>
                            <div class="pl-4">
                                <h4 class="font-weight-bold text-danger mb-0">34568</h4>
                                <h6 class="text-muted">Profile visits</h6>
                            </div>
                        </div>
                        <div class="d-flex border-bottom mb-4 pb-2">
                            <div class="hexagon">
                                <div class="hex-mid hexagon-success">
                                    <i class="mdi mdi-laptop-chromebook"></i>
                                </div>
                            </div>
                            <div class="pl-4">
                                <h4 class="font-weight-bold text-success mb-0"> 33.50% </h4>
                                <h6 class="text-muted">Bounce Rate</h6>
                            </div>
                        </div>
                        <div class="d-flex border-bottom mb-4 pb-2">
                            <div class="hexagon">
                                <div class="hex-mid hexagon-info">
                                    <i class="mdi mdi-clock-outline"></i>
                                </div>
                            </div>
                            <div class="pl-4">
                                <h4 class="font-weight-bold text-info mb-0">12.45</h4>
                                <h6 class="text-muted">Schedule Meeting</h6>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="hexagon">
                                <div class="hex-mid hexagon-primary">
                                    <i class="mdi mdi-timer-sand"></i>
                                </div>
                            </div>
                            <div class="pl-4">
                                <h4 class="font-weight-bold text-primary mb-0"> 12.45 </h4>
                                <h6 class="text-muted mb-0">Browser Usage</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4 stretch-card grid-margin">
                <div class="card color-card-wrapper">
                    <div class="card-body">
                        <img class="img-fluid card-top-img w-100" src="../assets/images/dashboard/img_5.jpg"
                            alt="" />
                        <div class="d-flex flex-wrap justify-content-around color-card-outer">
                            <div class="col-6 p-0 mb-4">
                                <div class="color-card primary m-auto">
                                    <i class="mdi mdi-clock-outline"></i>
                                    <p class="font-weight-semibold mb-0">Delivered</p>
                                    <span class="small">15 Packages</span>
                                </div>
                            </div>
                            <div class="col-6 p-0 mb-4">
                                <div class="color-card bg-success m-auto">
                                    <i class="mdi mdi-tshirt-crew"></i>
                                    <p class="font-weight-semibold mb-0">Ordered</p>
                                    <span class="small">72 Items</span>
                                </div>
                            </div>
                            <div class="col-6 p-0">
                                <div class="color-card bg-info m-auto">
                                    <i class="mdi mdi-trophy-outline"></i>
                                    <p class="font-weight-semibold mb-0">Arrived</p>
                                    <span class="small">34 Upgraded</span>
                                </div>
                            </div>
                            <div class="col-6 p-0">
                                <div class="color-card bg-danger m-auto">
                                    <i class="mdi mdi-presentation"></i>
                                    <p class="font-weight-semibold mb-0">Reported</p>
                                    <span class="small">72 Support</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    @include('layouts.partial.footer')
    <!-- partial -->
</div>
