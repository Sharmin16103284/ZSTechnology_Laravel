@extends('frontend.master')
@section('title', 'About Us')
@section('about_us','current')

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('frontend') }}/images/background/page-title-bg.jpg);">
    	<div class="auto-container">
        	<div class="sec-title">
                <h1>About Us</h1>
                <div class="bread-crumb"><a href="index-2.html">Home</a> / <a href="#" class="current">About Us</a></div>
            </div>
        </div>
    </section>
    <!--Default Section-->
    <section class="default-section">
    	<div class="auto-container">
        	<div class="row clearfix">
                

                @foreach($lists as $list)
                <!--Column-->
                <div class="column image-column col-md-6 col-sm-12 col-xs-12">
                	<article class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                		<figure class="image-box video-box">
                        	<img src="{{asset($list->image)}}" alt="">
                            <a href="https://www.youtube.com/watch?v=OrJKD11Rmdg" class="lightbox-image video-link"><div class="icon-outer"><span class="img-circle fa fa-play"></span></div></a>
                        </figure>
                    </article>
                </div>
                
                <!--Column-->
                <div class="column default-text-column with-margin col-md-6 col-sm-12 col-xs-12">
                	<article class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                		<h2>{{$list->headline}}</span></h2>
                        {{-- <div class="bigger-text">Lorem ipsum dolor <a href="#"><strong>some link</strong></a> sit amet, cum at inani interesset</div> --}}
                        <div class="text">
                            <p>
                                {{$list->mtext}}
                            </p>
                        </div>
                    </article>
                </div>

                @endforeach
                
            </div>
            
            <div class="row clearfix">
                
                @foreach($seccondlists as $seccondlist)


                <!--Column-->
                <div class="column default-text-column col-md-4 col-sm-6 col-xs-12">
                	<div class="text-block">
                    	<h3>{{$seccondlist->sheadline}}</h3>
                        <div class="text no-margin-bottom">
                        	<p>{{$seccondlist->text}}</p>
                        </div>
                    </div>
                </div>

                @endforeach 
                
                
            </div>
            
        </div>
    </section>
    
@endsection