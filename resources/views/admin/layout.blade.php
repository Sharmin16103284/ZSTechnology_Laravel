<!-- layout.blade.php -->

<!-- layout.blade.php -->

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon.png')}}">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{asset('admin/assets/libs/flot/css/float-chart.css')}}" rel="stylesheet">
    <link href="{{asset('admin/dist/css/style.min.css')}}" rel="stylesheet">

    
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <img src="{{asset('admin/assets/images/logo-icon.png')}}" alt="homepage" class="light-logo" />
                           
                        </b>
                        <span class="logo-text">
                             <img src="{{asset('admin/assets/images/logo-text.png')}}" alt="homepage" class="light-logo" />
                            
                        </span>
                    </a>
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav float-left mr-auto">
                        
                    </ul>
                    <ul class="navbar-nav float-right">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset('admin/assets/images/users/1.jpg')}}" alt="user" class="rounded-circle" width="31">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-user m-r-5 m-l-5"></i> My Profile
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-settings m-r-5 m-l-5"></i> Account Setting
                                </a>
                                <div class="dropdown-divider"></div>
								 <a class="dropdown-item" href="register.php">
                                    <i class="fas fa-user-plus"></i>  Register
                                </a>
                                <a class="dropdown-item" href="admin.php">
                                    <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout
                                </a>
                            </div>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->

        <!-- side menu -->

        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
    					<li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/')}}" target="_blank" aria-expanded="false">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li> 
                        <li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                                <i class="mdi mdi-receipt"></i>
                                <span class="hide-menu">Category </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="{{route('add_category')}}" class="sidebar-link">
                                        <i class="mdi mdi-note-outline"></i>
                                        <span class="hide-menu">Add category </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{route('view_category')}}" class="sidebar-link">
                                        <i class="mdi mdi-note-outline"></i>
                                        <span class="hide-menu">View category </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                                <i class="mdi mdi-receipt"></i>
                                <span class="hide-menu">Employee</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="{{route('add_employee')}}" class="sidebar-link">
                                        <i class="mdi mdi-note-outline"></i>
                                        <span class="hide-menu"> Add Employee </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{route('employee_list')}}" class="sidebar-link">
                                        <i class="mdi mdi-note-plus"></i>
                                        <span class="hide-menu"> Manage Employee </span>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
						<li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                                <i class="mdi mdi-receipt"></i>
                                <span class="hide-menu">Order </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="order.php" class="sidebar-link">
                                        <i class="mdi mdi-note-outline"></i>
                                        <span class="hide-menu"> New Order </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="delivered_order.php" class="sidebar-link">
                                        <i class="mdi mdi-note-plus"></i>
                                        <span class="hide-menu"> Delivered Order </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
						
						<li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                                <i class="mdi mdi-receipt"></i>
                                <span class="hide-menu">Payment Method </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="cod.php" class="sidebar-link">
                                        <i class="mdi mdi-note-outline"></i>
                                        <span class="hide-menu">Cash on delivery</span>
                                    </a>
                                </li>
								
                            </ul>
                        </li>
                        <li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                                <i class="mdi mdi-receipt"></i>
                                <span class="hide-menu">Messages </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="new_msg.php" class="sidebar-link">
                                        <i class="mdi mdi-note-outline"></i>
                                        <span class="hide-menu"> New Messages </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="arch_msg.php" class="sidebar-link">
                                        <i class="mdi mdi-note-plus"></i>
                                        <span class="hide-menu"> Archived Messages </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        </li>
                        <li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                                <i class="mdi mdi-receipt"></i>
                                <span class="hide-menu">Report</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="sell.php" class="sidebar-link">
                                        <i class="mdi mdi-note-outline"></i>
                                        <span class="hide-menu">Sell</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="profite.php" class="sidebar-link">
                                        <i class="mdi mdi-note-plus"></i>
                                        <span class="hide-menu">Invesment & Profite </span>
                                    </a>
                                </li>
								<li class="sidebar-item">
                                    <a href="report.php" class="sidebar-link">
                                        <i class="mdi mdi-note-plus"></i>
                                        <span class="hide-menu"> Report </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
						<li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                                <i class="mdi mdi-receipt"></i>
                                <span class="hide-menu">Setting</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="title.php" class="sidebar-link">
                                        <i class="mdi mdi-note-outline"></i>
                                        <span class="hide-menu">Title</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="social.php" class="sidebar-link">
                                        <i class="mdi mdi-note-plus"></i>
                                        <span class="hide-menu">Social </span>
                                    </a>
                                </li>
								<li class="sidebar-item">
                                    <a href="credit.php" class="sidebar-link">
                                        <i class="mdi mdi-note-plus"></i>
                                        <span class="hide-menu"> Footer Credit </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
												<li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                                <i class="mdi mdi-receipt"></i>
                                <span class="hide-menu">Pages</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="about.php" class="sidebar-link">
                                        <i class="mdi mdi-note-outline"></i>
                                        <span class="hide-menu">About</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="terms.php" class="sidebar-link">
                                        <i class="mdi mdi-note-plus"></i>
                                        <span class="hide-menu">Terms </span>
                                    </a>
                                </li>
								
                            </ul>
                        </li>
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
       

<!-- ============= yield ================== -->

@yield('content')




       <!-- footer -->
       <div class="page-wrapper">
          
		  
		<!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                Designed and Developed by Sharmin Sultana
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('admin/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('admin/assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('admin/dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('admin/dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('admin/dist/js/custom.min.js')}}"></script>
    <!--This page JavaScript -->
    <!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="{{asset('admin/assets/libs/flot/excanvas.js')}}"></script>
    <script src="{{asset('admin/assets/libs/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('admin/assets/libs/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('admin/assets/libs/flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('admin/assets/libs/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('admin/assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
    <script src="{{asset('admin/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('admin/dist/js/pages/chart/chart-page-init.js')}}"></script>

</body>

</html>