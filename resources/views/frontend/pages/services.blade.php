@extends('frontend.master')
@section('title', 'Our Services')
@section('portfolio','current')

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('frontend') }}/images/background/page-title-bg.jpg);">
    	<div class="auto-container">
        	<div class="sec-title">
                <h1>Our <span class="normal-font"> Services </span></h1>
                <div class="bread-crumb"><a href="{{ route('index') }}">Home</a> / <a href="#" class="current"> Services </a></div>
            </div>
        </div>
    </section>
 
    <!--Projects Section-->
    <section class="projects-section">
    	<div class="auto-container">
            
        	<div class="row clearfix">
                

                @foreach($service as $servic)


                <!--Default Featured Column-->
                <div class="column default-featured-column col-xs-12">
                    <article class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <figure class="image-box">
                            <a href="{{asset($servic->image)}}"><img  src="{{asset($servic->image)}}" alt="Image" style="min-height:200px;"></a>
                        </figure>
                        <div class="content-box">
                            <h3><a href="#"> {{$servic->mtitle}}</a></h3>
                            <div class="column-info"> {{$servic->stitle}}</div>
                            <div class="text no-margin-bottom">
                                <p>{{$servic->text}}</p>
                            </div>
                        </div>
                    </article>
                </div>

                @endforeach



                
                
            </div>
            
           
        </div>
    </section>
    
@endsection