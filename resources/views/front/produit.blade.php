@extends('front.layouts.base')

@section('title') @endsection

@section('description') @endsection
@section('link') @endsection
@section('image') @endsection

@section('content')


    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark-hard bg-fixed text-light" style="background-image: url({{ $produit
        ->cover_url }});">
        <div class="container default-padding">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>{{ $produit->name }}</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home')}}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">{{ $produit->name }}</li>
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
                               {{--  <div class="thumb text-center">
                                    <img src="{{ $produit->image_url }}" alt="Thumb">
                                    <div class="date">January 25, 2021</div>
                                </div> --}}
                                <!-- Start Post Thumb -->

                                <div class="info">
                                    
                                    <p>
                                        {!! $produit->description !!}
                                    </p>
                                    
                                   
                                    
                                   
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
    
