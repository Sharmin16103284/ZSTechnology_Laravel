@extends('frontend.master')
@section('title', 'Our Team')
@section('our_team','current')

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('frontend') }}/images/background/page-title-bg.jpg);">
    	<div class="auto-container">
        	<div class="sec-title">
                <h1>Our <span class="normal-font"> Team </span></h1>
                <div class="bread-crumb"><a href="{{ route('index') }}">Home</a> / <a href="{{ route('portfolios') }}" class="current"> Portfolios </a></div>
            </div>
        </div>
    </section>

    <!--Team Section-->
    <section class="team-section">
        <div class="auto-container">
        	
            
            <div class="row clearfix">
                @foreach($teamlists as $teamlist)
                <!--Column-->
                <article class="column team-member col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="inner-box">

                        

                        <figure class="image"><a href="mailto:mail@email.com"><img style="width:250px; height: 200px" src="{{asset($teamlist->image)}}" alt=""></a></figure>
                        <div class="member-info">
                            <h3>{{$teamlist->name}}</h3>
                            <div class="designation">{{$teamlist->designation}}</div>
                        </div>
                        <div class="content">
                            <div class="text"><p>{{$teamlist->text}}</p></div>
                            <div class="social-links">
                                <a href="{{$teamlist->fb}}"><span class="fa fa-facebook-f"></span></a>
                                <a href="{{$teamlist->twitter}}"><span class="fa fa-twitter"></span></a>
                                <a href="{{$teamlist->email}}"><span class="fa fa-google-plus"></span></a>
                                <a href="{{$teamlist->linkedin}}"><span class="fa fa-linkedin"></span></a>
                            </div>
                        </div>

                        


                    </div>
                </article>
                @endforeach
               
                
            </div>
            
        </div>
    </section>
    
@endsection