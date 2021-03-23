@extends('frontend.master')
@section('title', 'Contact Us')
@section('contact_us','current')
    
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('frontend') }}/images/background/page-title-bg.jpg);">
    	<div class="auto-container">
        	<div class="sec-title">
                <h1>Contact <span class="normal-font">Us</span></h1>
                <div class="bread-crumb"><a href="{{ route('index') }}">Home</a> / <a href="#" class="current">Contact Us</a></div>
            </div>
        </div>
    </section>
    <!--Default Section / Other Info-->
    <section class="default-section other-info">
    	<div class="auto-container">
        
        	<div class="row clearfix">
                
                <!--Info Column-->
                <div class="column info-column col-lg-5 col-md-6 col-sm-12 col-xs-12">
                	<article class="inner-box">

                        @foreach($contact as $cont)

                		<h3 class="margin-bott-20">Our Address</h3>
                        <div class="text margin-bott-40">ZS Technologies among the pioneers in the BANGLADESH, USA, CANADA, UK, UAE to offer quality web services. </div>
                        <ul class="info-box">
                            <li><span class="icon flaticon-location"></span><strong>Address</strong> {{$cont->address}}</li>
                            <li><span class="icon flaticon-technology-5"></span><strong>Phone</strong>{{$cont->fphone}} , {{$cont->sphone}}</li>
                            <li><span class="icon flaticon-interface-1"></span><strong>Email</strong>  {{$cont->email}}</li>
                        </ul>

                        @endforeach 

                    </article>
                </div>
                
                <!--Image Column-->
                <div class="column image-column col-lg-7 col-md-6 col-sm-12 col-xs-12">
                	<article class="inner-box">
                		<figure class="image-box"><img src="{{ asset('frontend') }}/images/resource/fluid-image-3.jpg" alt="Image"></figure>
                    </article>
                </div>
            
            </div>
        </div>
    </section>
    
@endsection