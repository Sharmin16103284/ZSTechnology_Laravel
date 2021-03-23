@extends('frontend.master')
@section('title', 'Our Portfolio')
@section('portfolio','current')

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('frontend') }}/images/background/page-title-bg.jpg);">
    	<div class="auto-container">
        	<div class="sec-title">
                <h1>Our <span class="normal-font"> Portfolio </span></h1>
                <div class="bread-crumb"><a href="{{ route('index') }}">Home</a> / <a href="{{ route('portfolios') }}" class="current"> Portfolios </a></div>
            </div>
        </div>
    </section>
 
    <!--Projects Section-->
    <section class="projects-section">
    	<div class="auto-container">
            
        	<div class="row clearfix">
                

                @foreach($portfolios as $portfolio)


                <!--Default Featured Column-->
                <div class="column default-featured-column col-md-3 col-sm-6 col-xs-12">
                    <article class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <figure class="image-box">
                            <a href="{{asset($portfolio->image)}}"><img src="{{asset($portfolio->image)}}" alt="Image" style="min-height:200px;"></a>
                        </figure>
                        <div class="content-box">
                            <h3><a href="#"> {{$portfolio->mtitle}}</a></h3>
                            <div class="column-info"> {{$portfolio->stitle}}</div>
                            
                        </div>
                    </article>
                </div>

                @endforeach



                
                
            </div>
            
            <!-- Styled Pagination -->
            {{-- <div class="styled-pagination padd-top-20 margin-bott-40">
                <ul>
                    <li><a class="prev" href="#"><span class="fa fa-angle-left"></span>&ensp;Prev</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#" class="active">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a class="next" href="#">Next&ensp;<span class="fa fa-angle-right"></span></a></li>
                </ul>
            </div>
             --}}
        </div>
    </section>
    
@endsection