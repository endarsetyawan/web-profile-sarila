<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>OFFICE Sarila Husada</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by mannatthemes" name="description" />
        <meta content="Mannatthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="/images/icon-logo.png">

        <link href="{{ asset('assets/css/style.cssassets/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}assets/css/style.cssassets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
        <!-- DataTables -->
        <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <!-- Top Bar End -->
        <div class="page-wrapper-img">
            <div class="page-wrapper-img-inner">
                <div class="sidebar-user media">                    
                    <img src="{{ asset('assets/images/users/user-1.jpg') }}" alt="user" class="rounded-circle img-thumbnail mb-1">
                    <span class="online-icon"><i class="mdi mdi-record text-success"></i></span>
                    <div class="media-body">
                        <h5 class="text-light">Mr. Michael Hill </h5>
                        <ul class="list-unstyled list-inline mb-0 mt-2">
                            <li class="list-inline-item">
                                <a href="#" class=""><i class="mdi mdi-account text-light"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class=""><i class="mdi mdi-settings text-light"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class=""><i class="mdi mdi-power text-danger"></i></a>
                            </li>
                        </ul>
                    </div>                    
                </div>
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-right align-item-center mt-2">
                                <a class="btn btn-info px-4 align-self-center report-btn" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                            </form>
                            </div>
                            <h4 class="page-title mb-2"><i class="mdi mdi-view-dashboard-outline mr-2"></i>Dashboard</h4>  
                            <div class="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Admin Sarila Husada</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Dashboard-2</li>
                                </ol>
                            </div>                                      
                        </div><!--end page title box-->
                    </div><!--end col-->
                </div><!--end row-->
                <!-- end page title end breadcrumb -->
            </div><!--end page-wrapper-img-inner-->
        </div><!--end page-wrapper-img-->
        
        <div class="page-wrapper">
            <div class="page-wrapper-inner">

                <!-- Left Sidenav -->
                <div class="left-sidenav">
                    
                    <ul class="metismenu left-sidenav-menu" id="side-nav">

                        <li class="menu-title">Main</li>
                        <li><a href="javascript: void(0);"><i class="mdi mdi-format-list-bulleted-type"></i><span>Data Dokter</span></a></li>
                        <li>
                            <a href="javascript: void(0);"><i class="mdi mdi-format-list-bulleted-type"></i><span>Data Kamar</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="/kamar_anak">Kamar Anak</a></li>
                                <li><a href="/kamar_bidan">Kamar Bidan</a></li>
                                <li><a href="tables-responsive.html">Kamar Dewasa</a></li>
                                <li><a href="tables-footable.html">Kamar ICU</a></li>
                                <li><a href="tables-jsgrid.html">Kamar Perinatologi</a></li>
                                <li><a href="tables-editable.html">Kamar Utama</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- end left-sidenav-->
                @yield('isi')
                <!-- Page Content-->
                
                <!-- end page content -->
                
            </div>
            <!--end page-wrapper-inner -->
        </div>
        <!-- end page-wrapper -->

        <!-- jQuery  -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/js/waves.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>

        <script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
        <script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
        <script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>
        <script src="https://apexcharts.com/samples/assets/series1000.js"></script>
        <script src="https://apexcharts.com/samples/assets/ohlc.js"></script>

        <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js') }}"></script>
        <!-- Required datatable js -->
        <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

        <script src="{{ asset('assets/pages/jquery.dashboard-2.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/app.js') }}"></script>

    </body>
</html>