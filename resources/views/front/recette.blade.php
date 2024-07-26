@extends('front.layouts.base')

@section('title') @endsection

@section('description') @endsection
@section('link') @endsection
@section('image') @endsection

@section('content')


    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark-hard bg-fixed text-light" style="background-image: url({{ $recette
        ->cover_url }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>{{ $recette->name }}</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home')}}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">{{ $recette->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area single full-blog full-blog default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <div class="blog-content wow fadeInUp col-lg-10 offset-lg-1 col-md-12">
                        <div class="item">

                            <div class="blog-item-box">
                                <!-- Start Post Thumb -->
                                <div class="thumb">
                                    <img src="{{ $recette->image_url }}" alt="Thumb">
                                    <div class="date">January 25, 2021</div>
                                </div>
                                <!-- Start Post Thumb -->

                                <div class="info">
                                    
                                    <h3>Common so wicket appear to sudden</h3>
                                    <p>
                                        {!! $recette->description !!}
                                    </p>
                                    
                                   
                                    <div class="row gallery">
                                        <div class="col-lg-6 col-md-6">
                                            <img src="assets/img/blog/3.jpg" alt="Thumb">
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <img src="assets/img/blog/4.jpg" alt="Thumb">
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

    

    

@endsection
    
