<footer class="main-footer" style="background-image:url({{ asset('frontend') }}/images/background/footer-bg.jpg);">
    	
    <!--Footer Upper-->        
    <div class="footer-upper">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Two 4th column-->
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="row clearfix">
                        <div class="col-lg-8 col-sm-6 col-xs-12 column">
                            <div class="footer-widget about-widget">

                                <div class="logo">
                                    @foreach($logos as $logo)
                                    <a href="{{ route('userIndex') }}"><img src="{{asset($logo->image)}}" class="img-responsive" alt="" width="40%"></a>
                                    @endforeach
                                </div>
                               
                                
                                @foreach($contact as $cont)
                                <ul class="contact-info">
                                    <li><span class="icon fa fa-map-marker"></span>{{$cont->address}}</li>
                                    <li><span class="icon fa fa-phone"></span> {{$cont->fphone}} , {{$cont->sphone}}</li>
                                    <li><span class="icon fa fa-envelope-o"></span> {{$cont->email}}</li>
                                </ul>
                                @endforeach
                                

                                @foreach($sociallists as $sociallist)
                                <div class="social-links-two clearfix">
                                    <a href="{{$sociallist->fb}}" class="facebook img-circle"><span class="fa fa-facebook-f"></span></a>
                                    <a href="{{$sociallist->twitter}}" class="twitter img-circle"><span class="fa fa-twitter"></span></a>
                                    <a href="{{$sociallist->email}}" class="google-plus img-circle"><span class="fa fa-google-plus"></span></a>
                                    <a href="{{$sociallist->linkedin}}" class="linkedin img-circle"><span class="fa fa-linkedin"></span></a>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                        
                        <!--Footer Column-->
                        <div class="col-lg-4 col-sm-6 col-xs-12 column">
                            <h2>Our Project</h2>
                            <div class="footer-widget links-widget">
                                <ul>
                                    <li><a href="{{ route('userIndex') }}">Home</a></li>
                                    <li><a href="{{ route('aboutUs') }}">About</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="{{ route('portfolios') }}">Portfolio</a></li>
                                    <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                    <li><a href="{{ route('contact_us') }}">Contact Us</a></li>
                                </ul>
    
                            </div>
                        </div>
                    </div>
                </div><!--Two 4th column End-->
                
                <!--Two 4th column-->
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="row clearfix">
                        <!--Footer Column-->
                        <div class="col-lg-7 col-sm-6 col-xs-12 column">
                            <div class="footer-widget news-widget">
                                <h2>Latest News</h2>	
                                
                                <!--News Post-->
                                <div class="news-post">
                                    <div class="icon"></div>
                                    <div class="news-content"><figure class="image-thumb"><img src="{{ asset('frontend') }}/images/resource/post-thumb-4.jpg" alt=""></figure><a href="#">If you need a crown or lorem an implant you will pay it gap it</a></div>
                                    <div class="time">July 2, 2014</div>
                                </div>
                                
                                <!--News Post-->
                                <div class="news-post">
                                    <div class="icon"></div>
                                    <div class="news-content"><figure class="image-thumb"><img src="{{ asset('frontend') }}/images/resource/post-thumb-5.jpg" alt=""></figure><a href="#">If you need a crown or lorem an implant you will pay it gap it</a></div>
                                    <div class="time">July 2, 2014</div>
                                </div>
                                
                            </div>
                        </div>
                        
                        <!--Footer Column-->
                        <div class="col-lg-5 col-sm-6 col-xs-12 column">
                            <div class="footer-widget links-widget">
                                <h2>Quick Links</h2>
                                <ul>
                                    <li><a href="{{ route('userIndex') }}">Home</a></li>
                                    <li><a href="{{ route('aboutUs') }}">About</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="{{ route('portfolios') }}">Portfolio</a></li>
                                    <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                    <li><a href="{{ route('contact_us') }}">Contact Us</a></li>
                                </ul>
    
                            </div>
                        </div>
                    </div>
                </div><!--Two 4th column End-->
                
            </div>
            
        </div>
    </div>
    
    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container clearfix">
            <!--Copyright-->
            <div class="copyright text-center">Copyright 2021 &copy; Theme Created By <a href="#"> ZS Technology </a>  with love</div>
        </div>
    </div>
    
</footer>