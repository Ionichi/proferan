@extends('templates.main')
@section('title')
    Dashboard    
@endsection
@section('content')
    {{-- <div class="container-fluid">

        <div class="row">

            <div class="col-xl-3 col-md-6">
                <div class="card-box">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                        </div>
                    </div>

                    <h4 class="header-title mt-0 mb-4">Total Revenue</h4>

                    <div class="widget-chart-1">
                        <div class="widget-chart-box-1 float-left" dir="ltr">
                            <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#f05050 "
                                    data-bgColor="#F9B9B9" value="58"
                                    data-skin="tron" data-angleOffset="180" data-readOnly=true
                                    data-thickness=".15"/>
                        </div>

                        <div class="widget-detail-1 text-right">
                            <h2 class="font-weight-normal pt-2 mb-1"> 256 </h2>
                            <p class="text-muted mb-1">Revenue today</p>
                        </div>
                    </div>
                </div>

            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <div class="card-box">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                        </div>
                    </div>

                    <h4 class="header-title mt-0 mb-3">Sales Analytics</h4>

                    <div class="widget-box-2">
                        <div class="widget-detail-2 text-right">
                            <span class="badge badge-success badge-pill float-left mt-3">32% <i class="mdi mdi-trending-up"></i> </span>
                            <h2 class="font-weight-normal mb-1"> 8451 </h2>
                            <p class="text-muted mb-3">Revenue today</p>
                        </div>
                        <div class="progress progress-bar-alt-success progress-sm">
                            <div class="progress-bar bg-success" role="progressbar"
                                    aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                    style="width: 77%;">
                                <span class="sr-only">77% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <div class="card-box">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                        </div>
                    </div>

                    <h4 class="header-title mt-0 mb-4">Statistics</h4>

                    <div class="widget-chart-1">
                        <div class="widget-chart-box-1 float-left" dir="ltr">
                            <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#ffbd4a"
                                    data-bgColor="#FFE6BA" value="80"
                                    data-skin="tron" data-angleOffset="180" data-readOnly=true
                                    data-thickness=".15"/>
                        </div>
                        <div class="widget-detail-1 text-right">
                            <h2 class="font-weight-normal pt-2 mb-1"> 4569 </h2>
                            <p class="text-muted mb-1">Revenue today</p>
                        </div>
                    </div>
                </div>

            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <div class="card-box">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                        </div>
                    </div>

                    <h4 class="header-title mt-0 mb-3">Daily Sales</h4>

                    <div class="widget-box-2">
                        <div class="widget-detail-2 text-right">
                            <span class="badge badge-pink badge-pill float-left mt-3">32% <i class="mdi mdi-trending-up"></i> </span>
                            <h2 class="font-weight-normal mb-1"> 158 </h2>
                            <p class="text-muted mb-3">Revenue today</p>
                        </div>
                        <div class="progress progress-bar-alt-pink progress-sm">
                            <div class="progress-bar bg-pink" role="progressbar"
                                    aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                    style="width: 77%;">
                                <span class="sr-only">77% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- end col -->

        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-4">
                <div class="card-box">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                        </div>
                    </div>

                    <h4 class="header-title mt-0">Daily Sales</h4>

                    <div class="widget-chart text-center">
                        <div id="morris-donut-example" dir="ltr" style="height: 245px;" class="morris-chart"></div>
                        <ul class="list-inline chart-detail-list mb-0">
                            <li class="list-inline-item">
                                <h5 style="color: #ff8acc;"><i class="fa fa-circle mr-1"></i>Series A</h5>
                            </li>
                            <li class="list-inline-item">
                                <h5 style="color: #5b69bc;"><i class="fa fa-circle mr-1"></i>Series B</h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- end col -->

            <div class="col-xl-4">
                <div class="card-box">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                        </div>
                    </div>
                    <h4 class="header-title mt-0">Statistics</h4>
                    <div id="morris-bar-example" dir="ltr" style="height: 280px;" class="morris-chart"></div>
                </div>
            </div><!-- end col -->

            <div class="col-xl-4">
                <div class="card-box">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                        </div>
                    </div>
                    <h4 class="header-title mt-0">Total Revenue</h4>
                    <div id="morris-line-example" dir="ltr" style="height: 280px;" class="morris-chart"></div>
                </div>
            </div><!-- end col -->

        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card-box widget-user">
                    <div class="media">
                        <div class="avatar-lg mr-3">
                            <img src="{{ asset('assets/images/users/user-3.jpg') }}" class="img-fluid rounded-circle" alt="user">
                        </div>
                        <div class="media-body overflow-hidden">
                            <h5 class="mt-0 mb-1">Chadengle</h5>
                            <p class="text-muted mb-2 font-13 text-truncate">coderthemes@gmail.com</p>
                            <small class="text-warning"><b>Admin</b></small>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <div class="card-box widget-user">
                    <div class="media">
                        <div class="avatar-lg mr-3">
                            <img src="{{ asset('assets/images/users/user-2.jpg') }}" class="img-fluid rounded-circle" alt="user">
                        </div>
                        <div class="media-body overflow-hidden">
                            <h5 class="mt-0 mb-1"> Michael Zenaty</h5>
                            <p class="text-muted mb-2 font-13 text-truncate">coderthemes@gmail.com</p>
                            <small class="text-pink"><b>Support Lead</b></small>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <div class="card-box widget-user">
                    <div class="media">
                        <div class="avatar-lg mr-3">
                            <img src="{{ asset('assets/images/users/user-1.jpg') }}" class="img-fluid rounded-circle" alt="user">
                        </div>
                        <div class="media-body overflow-hidden">
                            <h5 class="mt-0 mb-1">Stillnotdavid</h5>
                            <p class="text-muted mb-2 font-13 text-truncate">coderthemes@gmail.com</p>
                            <small class="text-success"><b>Designer</b></small>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <div class="card-box widget-user">
                    <div class="media">
                        <div class="avatar-lg mr-3">
                            <img src="{{ asset('assets/images/users/user-10.jpg') }}" class="img-fluid rounded-circle" alt="user">
                        </div>
                        <div class="media-body overflow-hidden">
                            <h5 class="mt-0 mb-1">Tomaslau</h5>
                            <p class="text-muted mb-2 font-13 text-truncate">coderthemes@gmail.com</p>
                            <small class="text-info"><b>Developer</b></small>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->

        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-xl-4">
                <div class="card-box">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                        </div>
                    </div>

                    <h4 class="header-title mb-3">Inbox</h4>

                    <div class="inbox-widget">
                        
                        <div class="inbox-item">
                            <a href="#">
                                <div class="inbox-item-img"><img src="{{ asset('assets/images/users/user-1.jpg') }}" class="rounded-circle" alt=""></div>
                                <h5 class="inbox-item-author mt-0 mb-1">Chadengle</h5>
                                <p class="inbox-item-text">Hey! there I'm available...</p>
                                <p class="inbox-item-date">13:40 PM</p>
                            </a>
                        </div>
                        
                        <div class="inbox-item">
                            <a href="#">
                                <div class="inbox-item-img"><img src="{{ asset('assets/images/users/user-2.jpg') }}" class="rounded-circle" alt=""></div>
                                <h5 class="inbox-item-author mt-0 mb-1">Tomaslau</h5>
                                <p class="inbox-item-text">I've finished it! See you so...</p>
                                <p class="inbox-item-date">13:34 PM</p>
                            </a>
                        </div>

                        <div class="inbox-item">
                                <a href="#">
                                <div class="inbox-item-img"><img src="{{ asset('assets/images/users/user-3.jpg') }}" class="rounded-circle" alt=""></div>
                                <h5 class="inbox-item-author mt-0 mb-1">Stillnotdavid</h5>
                                <p class="inbox-item-text">This theme is awesome!</p>
                                <p class="inbox-item-date">13:17 PM</p>
                            </a>
                        </div>

                        <div class="inbox-item">
                            <a href="#">
                                <div class="inbox-item-img"><img src="{{ asset('assets/images/users/user-4.jpg') }}" class="rounded-circle" alt=""></div>
                                <h5 class="inbox-item-author mt-0 mb-1">Kurafire</h5>
                                <p class="inbox-item-text">Nice to meet you</p>
                                <p class="inbox-item-date">12:20 PM</p>
                            </a>
                        </div>

                        <div class="inbox-item">
                            <a href="#">
                                <div class="inbox-item-img"><img src="{{ asset('assets/images/users/user-5.jpg') }}" class="rounded-circle" alt=""></div>
                                <h5 class="inbox-item-author mt-0 mb-1">Shahedk</h5>
                                <p class="inbox-item-text">Hey! there I'm available...</p>
                                <p class="inbox-item-date">10:15 AM</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->

            <div class="col-xl-8">
                <div class="card-box">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                        </div>
                    </div>

                    <h4 class="header-title mt-0 mb-3">Latest Projects</h4>

                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Project Name</th>
                                <th>Start Date</th>
                                <th>Due Date</th>
                                <th>Status</th>
                                <th>Assign</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Adminto Admin v1</td>
                                    <td>01/01/2017</td>
                                    <td>26/04/2017</td>
                                    <td><span class="badge badge-danger">Released</span></td>
                                    <td>Coderthemes</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Adminto Frontend v1</td>
                                    <td>01/01/2017</td>
                                    <td>26/04/2017</td>
                                    <td><span class="badge badge-success">Released</span></td>
                                    <td>Adminto admin</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Adminto Admin v1.1</td>
                                    <td>01/05/2017</td>
                                    <td>10/05/2017</td>
                                    <td><span class="badge badge-pink">Pending</span></td>
                                    <td>Coderthemes</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Adminto Frontend v1.1</td>
                                    <td>01/01/2017</td>
                                    <td>31/05/2017</td>
                                    <td><span class="badge badge-purple">Work in Progress</span>
                                    </td>
                                    <td>Adminto admin</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Adminto Admin v1.3</td>
                                    <td>01/01/2017</td>
                                    <td>31/05/2017</td>
                                    <td><span class="badge badge-warning">Coming soon</span></td>
                                    <td>Coderthemes</td>
                                </tr>

                                <tr>
                                    <td>6</td>
                                    <td>Adminto Admin v1.3</td>
                                    <td>01/01/2017</td>
                                    <td>31/05/2017</td>
                                    <td><span class="badge badge-primary">Coming soon</span></td>
                                    <td>Adminto admin</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- end col -->

        </div>
        <!-- end row -->       
        
    </div> --}}

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 justify-content-center align-items-center">
                <div class="authentication-bg">
                    <div class="mt-5 mb-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                
                                    <div class="text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="122"
                                            height="122" viewBox="0 0 122 122">
                                            <defs>
                                                <path id="gear"
                                                    d="M72,52.4v-8.8l-5.4-0.9c-0.4-1.5-1-2.9-1.7-4.1l3.2-4.4l-6.2-6.3L57.4,31c-1.3-0.7-2.7-1.3-4.1-1.7L52.4,24h-8.8l-0.9,5.4  c-1.5,0.4-2.8,1-4.1,1.7L34.2,28l-6.3,6.2l3.2,4.4c-0.7,1.3-1.3,2.7-1.7,4.2L24,43.6v8.8l5.4,0.9c0.4,1.5,1,2.8,1.7,4.1l-3.2,4.5  l6.2,6.2l4.5-3.2c1.3,0.7,2.7,1.3,4.2,1.7l0.9,5.3h8.8l0.9-5.4c1.4-0.4,2.8-1,4.1-1.7l4.5,3.2l6.2-6.2l-3.2-4.5  c0.7-1.3,1.3-2.6,1.7-4.1L72,52.4z M48,57.2c-5.1,0-9.2-4.1-9.2-9.2c0-5.1,4.2-9.2,9.2-9.2s9.2,4.1,9.2,9.2S53.1,57.2,48,57.2z" />
                                            </defs>
                                            <g transform="scale(0.77)">
                                                <use xlink:href="#gear" fill="#5b69bc">
                                                    <animateTransform attributeType="XML" attributeName="transform" type="rotate"
                                                        from="0 48 48" to="360 48 48" dur="12s" repeatCount="indefinite" />
                                                </use>
                                            </g>
                                            <g transform="scale(0.6) translate(83 13)">
                                                <use xlink:href="#gear" fill="#10c469">
                                                    <animateTransform attributeType="XML" attributeName="transform" type="rotate"
                                                        from="360 48 48" to="0 48 48" dur="12s" repeatCount="indefinite" />
                                                </use>
                                            </g>
                                            <g transform="scale(0.435) translate(37 139)">
                                                <use xlink:href="#gear" fill="#f9c851">
                                                    <animateTransform attributeType="XML" attributeName="transform" type="rotate"
                                                        from="360 48 48" to="0 48 48" dur="12s" repeatCount="indefinite" />
                                                </use>
                                            </g>
                                            <g transform="scale(0.935) translate(36 39)">
                                                <use xlink:href="#gear" fill="#ff8acc">
                                                    <animateTransform attributeType="XML" attributeName="transform" type="rotate"
                                                        from="0 48 48" to="360 48 48" dur="12s" repeatCount="indefinite" />
                                                </use>
                                            </g>
                                        </svg>
                                        <h2 class="mt-4">Site is under Maintenance</h2>
                                        <p class="text-muted">We're making the system more awesome.we'll be back shortly.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <!--Morris Chart-->
    {{-- <script src="{{ asset('assets/libs/morris-js/morris.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/libs/raphael/raphael.min.js') }}"></script> --}}

    <!-- Dashboard init js-->
    {{-- <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script> --}}
@endsection