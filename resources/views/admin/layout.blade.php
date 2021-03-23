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
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/')}}" aria-expanded="false">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li> 


                        {{-- logo --}}
                        <li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                                <i class="mdi mdi-receipt"></i>
                                <span class="hide-menu">Logo</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="{{route('logo')}}" class="sidebar-link">
                                        <i class="mdi mdi-note-outline"></i>
                                        <span class="hide-menu">Add Logo</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{route('manageLogo')}}" class="sidebar-link">
                                        <i class="mdi mdi-note-plus"></i>
                                        <span class="hide-menu">Manage Logo </span>
                                    </a>
                                </li>
								
                            </ul>
                        </li>
						
                        {{-- end logo --}}



                        {{-- Testimonial --}}
                        <li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                                <i class="mdi mdi-receipt"></i>
                                <span class="hide-menu">Testimonial </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="{{route('addTestimonial')}}" class="sidebar-link">
                                        <i class="mdi mdi-note-outline"></i>
                                        <span class="hide-menu">Add Testimonial </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{route('manageTestimonial')}}" class="sidebar-link">
                                        <i class="mdi mdi-note-outline"></i>
                                        <span class="hide-menu">Manage Testimonial </span>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
                        {{-- end Testimonial --}}

                        {{-- Slider --}}
                        <li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                                <i class="mdi mdi-receipt"></i>
                                <span class="hide-menu">Slider </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="{{route('addSlider')}}" class="sidebar-link">
                                        <i class="mdi mdi-note-outline"></i>
                                        <span class="hide-menu">Add Slider </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{route('manageSlider')}}" class="sidebar-link">
                                        <i class="mdi mdi-note-outline"></i>
                                        <span class="hide-menu">Manage Slider </span>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
                        {{-- end Slider --}}

                        {{-- contact --}}
                        <li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                                <i class="mdi mdi-receipt"></i>
                                <span class="hide-menu">Contact</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="{{route('addContact')}}" class="sidebar-link">
                                        <i class="mdi mdi-note-outline"></i>
                                        <span class="hide-menu"> Add Contact </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{route('manageContact')}}" class="sidebar-link">
                                        <i class="mdi mdi-note-plus"></i>
                                        <span class="hide-menu"> Manage Contact </span>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
                        {{-- end contact --}}

                        {{-- about --}}
                        <li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                                <i class="mdi mdi-receipt"></i>
                                <span class="hide-menu">About Us</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="{{route('addAbout')}}" class="sidebar-link">
                                        <i class="mdi mdi-note-outline"></i>
                                        <span class="hide-menu"> Add About </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{route('manageAbout')}}" class="sidebar-link">
                                        <i class="mdi mdi-note-plus"></i>
                                        <span class="hide-menu"> Manage About </span>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
                        {{-- end about --}}

                        {{-- team --}}
                        <li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                                <i class="mdi mdi-receipt"></i>
                                <span class="hide-menu">Team Member</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="{{route('addMember')}}" class="sidebar-link">
                                        <i class="mdi mdi-note-outline"></i>
                                        <span class="hide-menu"> Add Member </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{route('manageMember')}}" class="sidebar-link">
                                        <i class="mdi mdi-note-plus"></i>
                                        <span class="hide-menu"> Manage Member </span>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
                        {{-- end team --}}

                        {{-- gallery --}}
                        <li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                                <i class="mdi mdi-receipt"></i>
                                <span class="hide-menu">Gallery</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="{{route('addImage')}}" class="sidebar-link">
                                        <i class="mdi mdi-note-outline"></i>
                                        <span class="hide-menu"> Add Image </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{route('manageImage')}}" class="sidebar-link">
                                        <i class="mdi mdi-note-plus"></i>
                                        <span class="hide-menu"> Manage Image </span>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
                        {{-- end gallery --}}

                        {{-- portfolio --}} 
                        <li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                                <i class="mdi mdi-receipt"></i>
                                <span class="hide-menu">Portfolio</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="{{route('addPortfolio')}}" class="sidebar-link">
                                        <i class="mdi mdi-note-outline"></i>
                                        <span class="hide-menu"> Add Portfolio </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{route('managePortfolio')}}" class="sidebar-link">
                                        <i class="mdi mdi-note-plus"></i>
                                        <span class="hide-menu"> Manage Portfolio </span>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>

                       {{-- end portfolio --}}
                       

                        {{-- Service --}}
						<li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                                <i class="mdi mdi-receipt"></i>
                                <span class="hide-menu">Service </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="{{route('addServiceCategory')}}" class="sidebar-link">
                                        <i class="mdi mdi-note-outline"></i>
                                        <span class="hide-menu"> Add Service Category </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{route('addService')}}" class="sidebar-link">
                                        <i class="mdi mdi-note-outline"></i>
                                        <span class="hide-menu"> New Service </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{route('manageService')}}" class="sidebar-link">
                                        <i class="mdi mdi-note-plus"></i>
                                        <span class="hide-menu"> Manage Service </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{route('addServiceImage')}}" class="sidebar-link">
                                        <i class="mdi mdi-note-plus"></i>
                                        <span class="hide-menu">Service Image</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- end Service --}}
                        
						
                        {{-- news --}}
                        <li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                                <i class="mdi mdi-receipt"></i>
                                <span class="hide-menu">News </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="{{route('addNews')}}" class="sidebar-link">
                                        <i class="mdi mdi-note-outline"></i>
                                        <span class="hide-menu"> Add News </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{route('manageNews')}}" class="sidebar-link">
                                        <i class="mdi mdi-note-plus"></i>
                                        <span class="hide-menu"> Manage News </span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        {{-- end news --}}


                        </li>


                        {{-- social --}}
                        <li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                                <i class="mdi mdi-receipt"></i>
                                <span class="hide-menu">Social Links</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="{{route('social')}}" class="sidebar-link">
                                        <i class="mdi mdi-note-outline"></i>
                                        <span class="hide-menu">Add Social Links</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{route('manageSocial')}}" class="sidebar-link">
                                        <i class="mdi mdi-note-plus"></i>
                                        <span class="hide-menu">Manage Social Links </span>
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