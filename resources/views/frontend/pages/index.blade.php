@extends('frontend.master')
@section('title','ZS Technology')
@section('index','current')

@section('content')
    <!--Main Slider-->
    @include('frontend.inc.slider')
    
    <br>
    <!--Featured Fluid Section-->
    <section class="featured-fluid-section">
        
        
        <div class="outer clearfix">

            
            @foreach($edits as $edit)
            <!--Image Column-->
            <div class="image-column" style="background-image:url({{asset($edit->image)}}"></div>
            
            <!--Text Column-->
            <article class="column text-column dark-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms" style="background-image:url({{asset($edit->image)}}">

                @endforeach 
                
                <div class="content-box pull-left">	
                    <h2>Our <span class="theme_color"> Services </span> </h2>

                    @foreach($serviceCategoryLists as $serviceCategoryList)
                    
                    <h4>
                        <i class="fa fa-hand-o-right"></i>
                        <a href="{{$serviceCategoryList->id}}">
                            <strong> {{$serviceCategoryList->service}} </strong>
                        </a>
                    </h4> 
                    @endforeach 
                    
                </div>
                
                <div class="clearfix"></div>
            </article>
            
        </div>
        
    </section>


    <!--Recent Projects Section-->
    <section class="recent-projects">
    	<div class="auto-container">
        	
            <div class="sec-title clearfix">
            	<div class="pull-left">
                    <h2>RECENT <span class="normal-font theme_color">Project</span></h2>
                </div>
                <div class="pull-right padd-top-30">
                	<a href="{{route('portfolios')}}" class="theme-btn btn-style-three">See All Projects</a>
                </div>
            </div>
        	<div class="row clearfix">
                
                @foreach($portfoliolists as $portfoliolist)


                <!--Default Featured Column-->
                <div class="column default-featured-column col-md-3 col-sm-6 col-xs-12">
                	<article class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                		<figure class="image-box">
                        	<a href="{{asset($portfoliolist->image)}}"><img style="height: 190px" src="{{asset($portfoliolist->image)}}" alt=""></a>
                        </figure> 
                        <div class="content-box">
                        	<h3><a href="#">{{$portfoliolist->mtitle}}</a></h3>
                            <div class="column-info">{{$portfoliolist->stitle}}</div>
                            <div class="text">{{$portfoliolist->text}}</div>
                        </div>
                    </article>
                </div>

                @endforeach
                
                
                
            </div>
        </div> 
    </section>


    <!--Testimonials-->
    <section class="testimonials-section" style="background-image:url({{ asset('frontend') }}/images/background/testimonials-bg.jpg);">
        <div class="auto-container">

            <div class="sec-title text-center">
                <h2>Testi<span class="normal-font theme_color">monial</span></h2>
            </div>
            <!--Slider-->      
            <div class="testimonials-slider testimonials-carousel">

                
    @foreach($testimoniallists as $testimoniallist)

                
                <!--Slide-->
                <article class="slide-item">
                    
                    <div class="info-box">
                        <figure class="image-box"><img src="{{asset($testimoniallist->image)}}" alt=""></figure>
                        <h3>{{$testimoniallist->name}}</h3>
                        <p class="designation">{{$testimoniallist->address}}</p>
                    </div>
                    
                    <div class="slide-text">
                        <p>{{$testimoniallist->text}}</p>
                    </div>
                </article>

                @endforeach
                
            </div>
            
        </div>    
    </section>

    <!--Blog News Section-->
    <section class="blog-news-section latest-news">
    	<div class="auto-container">
        	
            <div class="sec-title text-center">
                <h2>Latest <span class="normal-font theme_color">News</span></h2>
            </div>
        	<div class="row clearfix">
                

                @foreach($newslists as $newslist)
                <!--News Column-->
                <div class="column blog-news-column col-lg-4 col-md-6 col-sm-6 col-xs-12">
                	<article class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                		<figure class="image-box">
                        	<a href="{{asset($newslist->image)}}"><img style="height: 250px" src="{{asset($newslist->image)}}" alt=""></a>
                            <div class="news-date"><span class="month">{{$newslist->date}}</span></div>
                        </figure>
                        <div class="content-box">
                        	<h3><a href="#">{{$newslist->title}}</a></h3>
                        	<div class="post-info clearfix">
                            	<div class="post-author">Posted by {{$newslist->name}}</div>
                                
                            </div>
                            <div class="text">{{$newslist->text}}</div>
                        </div>
                    </article>
                </div>


                @endforeach


            </div>
        </div>
    </section>

@endsection