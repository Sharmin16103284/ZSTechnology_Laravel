@extends('frontend.master')
@section('title', 'Gallery')
@section('gallery','current')

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('frontend') }}/images/background/page-title-bg.jpg);">
    	<div class="auto-container">
        	<div class="sec-title">
                <h1>Our <span class="normal-font">Gallery</span></h1>
                <div class="bread-crumb"><a href="index-2.html">Home</a> / <a href="#" class="current">Gallery</a></div>
            </div>
        </div>
    </section>
    <section class="gallery-section">
        <div class="auto-container">
             
            {{-- <!--Filter-->
            <div class="filters text-center">
                <ul class="filter-tabs filter-btns clearfix anim-3-all">
                    <li class="active filter" data-role="button" data-filter="all">All</li>
                    <li class="filter" data-role="button" data-filter=".environment">Environment</li>
                    <li class="filter" data-role="button" data-filter=".eco">Eco</li>
                    <li class="filter" data-role="button" data-filter=".energy">Energy</li>
                    <li class="filter" data-role="button" data-filter=".animals">Animals</li>
                    <li class="filter" data-role="button" data-filter=".plants">Plants</li>
                </ul>
            </div> --}}
            
            <!--Filter List-->
            <div class="row filter-list clearfix">
                

                @foreach($gallerylists as $gallerylist)


                <!--Column-->
                <div class="column mix mix_all eco plants col-md-4 col-sm-6 col-xs-12">
                    <!--Default Portfolio Item-->
                    <div class="default-portfolio-item">
                        <div class="inner-box text-center">
                            <!--Image Box-->
                            <figure class="image-box"><img style="height: 280px" src="{{asset($gallerylist->image)}}" alt=""></figure>
                            <div class="overlay-box">
                                <div class="inner-content">
                                    <div class="content">
                                        <h3><a href="{{$gallerylist->title}}">{{$gallerylist->title}}</a></h3>
                                        <a class="arrow lightbox-image" href="{{asset($gallerylist->image)}}" title="{{$gallerylist->title}}"><span class="icon flaticon-cross-4"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
                
                
            </div>
            
        </div>
    </section>
    
@endsection

@section('scripts')
    
<script src="{{ asset('frontend') }}/js/jquery.js"></script> 
<script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('frontend') }}/js/jquery.fancybox.pack.js"></script>
<script src="{{ asset('frontend') }}/js/jquery.fancybox-media.js"></script>
<script src="{{ asset('frontend') }}/js/owl.js"></script>
<script src="{{ asset('frontend') }}/js/mixitup.js"></script>
<script src="{{ asset('frontend') }}/js/wow.js"></script>
<script src="{{ asset('frontend') }}/js/script.js"></script>
@endsection