<header class="main-header">
    <div class="top-bar">
        <div class="top-container">
            <!--Info Outer-->
             <div class="info-outer">
                 <!--Info Box-->
                 
                <ul class="info-box clearfix">
                    @foreach($contact as $cont)
                    <li><span class="icon flaticon-interface"></span><a href="{{$cont->email}}">{{$cont->email}}</a></li>
                    <li><span class="icon flaticon-technology-5"></span><a href="{{$cont->fphone}}">{{$cont->fphone}} </a></li>
                    @endforeach 
 

                    @foreach($sociallists as $sociallist)
                               
                    <li class="social-links-one">
                        <a href="{{$sociallist->fb}}" class="facebook img-circle"><span class="fa fa-facebook-f"></span></a>
                        <a href="{{$sociallist->twitter}}" class="twitter img-circle"><span class="fa fa-twitter"></span></a>
                        <a href="{{$sociallist->email}}" class="google-plus img-circle"><span class="fa fa-google-plus"></span></a>
                        <a href="{{$sociallist->linkedin}}" class="linkedin img-circle"><span class="fa fa-linkedin"></span></a>
                    </li>
                    @endforeach
                    
                </ul>
             </div>
        </div>
    </div> 
    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container clearfix">
            <!-- Logo -->
            <div class="logo">
                @foreach($logos as $logo)
                <a href="{{ route('userIndex') }}"><img src="{{asset($logo->image)}}" alt="ZS technology" width="40%"></a>
                @endforeach
             </div>
             
             <!--Nav Outer-->
            <div class="nav-outer clearfix">
                
                {{-- <a href="#" class="theme-btn btn-donate" data-toggle="modal" data-target="#donate-popup">Donate Now!</a> --}}
                
                <!-- Main Menu -->
                <nav class="main-menu">
                    
                    <div class="navbar-header">
                        <!-- Toggle Button -->    	
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation">
                        
                            <li class="@yield('index')">
                                <a href="{{ route('userIndex') }}">Home</a>
                            </li>
                            <li class="@yield('about_us')">
                                <a href="{{ route('aboutUs') }}">About</a>
                            </li>
                            <li class="dropdown @yield('services')"><a href="#">Services</a>
                                <ul>
                                    @foreach($serviceCategoryLists as $serviceCategoryList)
                                    <li><a href="{{URL::to('/servicesView/'.$serviceCategoryList -> id)}}"> {{$serviceCategoryList->service}}</a></li>
                                    @endforeach 
                                </ul>
                            </li>
                            
                            <li class="@yield('portfolios')">
                                <a href="{{ route('portfolios') }}"> Portfolio </a>
                            </li>
                            <li class="@yield('gallery')">
                                <a href="{{ route('gallery') }}"> Gallery </a>
                            </li>
                            
                            <li class="@yield('contact_us')">
                                <a href="{{ route('contact_us') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </nav><!-- Main Menu End-->
                
            </div>
            
        </div>
    </div><!-- Header Top End -->
    
</header>