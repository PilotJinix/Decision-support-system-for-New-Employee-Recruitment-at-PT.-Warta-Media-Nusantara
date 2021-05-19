@extends("layouts.master")
@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="form-head mb-4 d-flex flex-wrap align-items-center">
                <div class="me-auto">
                    <h2 class="font-w600 mb-0">Dashboard</h2>
                    <p class="text-light">Lorem ipsum  dolor sit amet </p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-3 col-xxl-6 col-sm-6 ">
                            <div class="card">
                                <div class="card-header border-0 pb-0">
                                    <div class="d-flex align-items-center">
                                        <h2 class="chart-num font-w600 mb-0">215</h2>
                                        <svg class="ms-2 primary-icon" width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.00401 11.1924C0.222201 11.1924 -0.670134 9.0381 0.589795 7.77817L7.78218 0.585786C8.56323 -0.195262 9.82956 -0.195262 10.6106 0.585786L17.803 7.77817C19.0629 9.0381 18.1706 11.1924 16.3888 11.1924H2.00401Z" fill="#0E8A74"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="text-black font-w500 mb-0">Tickets</h5>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div id="widgetChart1" class="chart-primary"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-6 col-sm-6 ">
                            <div class="card">
                                <div class="card-header border-0 pb-0">
                                    <div class="d-flex align-items-center">
                                        <h2 class="chart-num font-w600 mb-0">$536k</h2>
                                        <svg class="ms-2" width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.00401 -4.76837e-06C0.222201 -4.76837e-06 -0.670134 2.15428 0.589795 3.41421L7.78218 10.6066C8.56323 11.3876 9.82956 11.3876 10.6106 10.6066L17.803 3.41421C19.0629 2.15428 18.1706 -4.76837e-06 16.3888 -4.76837e-06H2.00401Z" fill="#FF3131"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="text-black font-w500 mb-0">Revenue</h5>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div id="widgetChart2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-6 col-sm-6 ">
                            <div class="card">
                                <div class="card-header border-0 pb-0">
                                    <div class="d-flex align-items-center">
                                        <h2 class="chart-num font-w600 mb-0">652</h2>
                                        <svg class="ms-2 primary-icon" width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.00401 11.1924C0.222201 11.1924 -0.670134 9.0381 0.589795 7.77817L7.78218 0.585786C8.56323 -0.195262 9.82956 -0.195262 10.6106 0.585786L17.803 7.77817C19.0629 9.0381 18.1706 11.1924 16.3888 11.1924H2.00401Z" fill="#0E8A74"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="text-black font-w500 mb-0">Sales</h5>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <canvas id="widgetChart3" height="60"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-6 col-sm-6 ">
                            <div class="card">
                                <div class="card-body pt-sm-4 pt-3 d-flex align-items-center justify-content-between">
                                    <div class="me-3">
                                        <div class="d-flex align-items-center">
                                            <h2 class="chart-num font-w600 mb-0">45242</h2>
                                        </div>
                                        <div>
                                            <h5 class="text-black font-w500 mb-3 mt-2">Event Held</h5>
                                        </div>
                                        <div>
                                            <p class="text-primary fs-14 mb-0">
                                                <svg class="me-2 primary-icon" width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns=	"http://www.w3.org/2000/svg">
                                                    <path d="M2.00401 11.1924C0.222201 11.1924 -0.670134 9.0381 0.589795 7.77817L7.78218 0.585786C8.56323 -0.195262 9.82956 -0.195262 10.6106 0.585786L17.803 7.77817C19.0629 9.0381 18.1706 11.1924 16.3888 11.1924H2.00401Z" fill="#0E8A74"/>
                                                </svg>
                                                2.4%
                                                <span class="op-6 text-light">than Last Week</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-inline-block position-relative donut-chart-sale">
                                            <span class="donut1" data-peity='{ "fill": ["rgb(14, 138, 116,1)", "rgba(240, 240, 240)"],   "innerRadius": 35, "radius": 10}'>5/8</span>
                                            <small class="text-black">66%</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->
@endsection
