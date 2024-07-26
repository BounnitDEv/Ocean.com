@extends('front.layouts.base')

@section('title') @endsection

@section('description') @endsection
@section('link') @endsection
@section('image') @endsection

@section('content')



    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark bg-fixed text-light" style="background-image: url({{asset('assets/img/recette/1.webp')}});">
        <div class="container default-padding">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>La Sicilia Recettes</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home')}}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">La Sicilia Recettes</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area full-blog blog-standard full-blog grid-colum default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="blog-content">
                    <div class="blog-item-box">
                        <div class="row">
                            @foreach($recettes as $recette)
                                <!-- Single Item -->
                                <div class="col-lg-4 col-md-6 single-item">
                                    <div class="item wow fadeInUp" data-wow-delay="500ms">
                                        <div class="thumb">
                                            <img src="{{ $recette->image_url }}" alt="Thumb">
                                            <div class="date">January 25, 2021</div>
                                        </div>
                                        <div class="info">
                                            
                                            <h4>
                                                <a href="{{ $recette->url }}">{{ $recette->name }}</a>
                                            </h4>
                                            <p>
                                                {!! Str::limit(strip_tags($recette->description), 40) !!}
                                            </p>
                                            <a class="btn circle btn-gray border btn-md" href="{{ $recette->url }}">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                            @endforeach
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->


    

@endsection