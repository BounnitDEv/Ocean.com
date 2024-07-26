@extends('front.layouts.base')

@section('title')@endsection
@section('description')@endsection
@section('image')@endsection
@section('link'){{ route('home') }}@endsection

@section('content')
        
    



    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area top-pad-80">
        <div id="bootcarousel" class="carousel text-xl text-center text-light slide animate_text" data-ride="carousel">

            <!-- Indicators for slides -->
            <div class="carousel-indicator">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <ol class="carousel-indicators">
                                <li data-target="#bootcarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#bootcarousel" data-slide-to="1"></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-zoom">
                <div class="carousel-item active">
                    <div class="slider-thumb bg-fixed" style="background-image: url({{asset('assets/img/banner/1.webp')}});"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark-hard">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1">
                                        <div class="content">
                                            <img src="{{asset('assets/img/logo-white.png')}}" width="150" alt="Shape">
                                            <h2 data-animation="animated zoomInLeft">Fromagerie  <br><strong>La Sicilia</strong></h2>
                                            <p class="animated slideInRight">
                                                Découvrez l'excellence italienne au cœur du Maroc. À la Fromagerie La Sicilia, nous fusionnons tradition et innovation pour vous offrir une variété de fromages italiens authentiques, y compris la mozzarella, la burrata, la ricotta et bien plus encore..
                                            </p>
                                            <a data-animation="animated slideInUp" class="animated-btn" href="#plus"><i class="fas fa-angle-right"></i> Découvrir plus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="carousel-item">
                    <div class="slider-thumb bg-fixed" style="background-image: url({{asset('assets/img/banner/2.jpeg')}});"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark-hard">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1">
                                        <div class="content">
                                            <h2 data-animation="animated slideInDown">Best <strong>harvest</strong></h2>
                                            <p class="animated slideInRight">
                                                Coming merits and was talent enough far. Sir joy northward sportsmen education. Discovery incommode earnestly no he commanded.
                                            </p>
                                            <a data-animation="animated slideInUp" class="animated-btn" href="#"><i class="fas fa-angle-right"></i> Discover More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <!-- End Wrapper for slides -->

        </div>
    </div>
    <!-- End Banner -->

    <!-- Star About Area
    ============================================= -->
    <div class="about-content-area overflow-hidden inc-shape default-padding" id="plus">
        <!-- Illustration -->
        <div class="illustration">
            <img src="{{ asset('assets/img/shape/4.png') }}" alt="Illustration">
        </div>
        <!-- Illustration -->
        <div class="container">
            <div class="row">
                
                <div class="col-lg-6 info">
                    <div class="content wow fadeInLeft" data-wow-delay="300ms">
                        <h5>À PROPOS DE NOUS</h5>
                        <h2 class="area-title">Fromagerie La Sicilia <br> Tangier - Maroc</h2>
                        <p>
                            Bienvenue à la Fromagerie La Sicilia, nichée au cœur de la Zone Logistique TFZ Lot N°86 A-14 à Tanger, au Maroc. Nous sommes fiers de fabriquer les meilleurs fromages italiens, notamment la mozzarella, la burrata et la ricotta, en utilisant des méthodes traditionnelles transmises de génération en génération. Notre engagement envers la qualité et la durabilité guide tout ce que nous faisons, de la sélection des ingrédients biologiques les plus frais à la fabrication soignée de chaque fromage.
                        </p>
                        <a class="btn circle btn-theme border btn-md" href="{{ route('about') }}">Lire la suite</a>
                    </div>
                    <ul class="achivement">
                        <li>
                            <div class="fun-fact">
                                <div class="counter">
                                    <div class="timer" data-to="100" data-speed="5000">100</div>
                                    <div class="operator">%</div>
                                </div>
                                <span class="medium">Produits Certifiés</span>
                            </div>
                        </li>
                        <li>
                            <div class="fun-fact">
                                <div class="counter">
                                    <div class="timer" data-to="100" data-speed="5000">100</div>
                                    <div class="operator">%</div>
                                </div>
                                <span class="medium">Produit biologique</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="thumb">
                        <img class="wow fadeInRight" data-wow-delay="700ms" src="{{asset('assets/img/about/6.jpg')}}" alt="Thumb">
                        <img class="wow fadeInUp" data-wow-delay="1000ms" src="{{asset('assets/img/about/onssa.png')}}" alt="Thumb">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End About Area -->

     <!-- Start Specialty 
    ============================================= -->
    <div class="specialty-area overflow-hidden bottom-less">
        <div class="container-full">
            <div class="specialty-items default-padding">
                <!-- Fixed BG -->
                <div class="fixed-bg bg-fixed shadow dark" style="background-image: url(assets/img/banner/3.webp);">
                    
                </div>
                <!-- End Fixed BG -->
                <div class="row">
                    <div class="col-lg-12 info text-light text-center">
                        <h2>All you need for agriculture hard work & professional</h2>
                        <a class="btn circle btn-light border btn-md" href="#">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Specialty Area -->




     <!-- Start Services 
    ============================================= -->
    <div class="services-area overflow-hidden default-padding" style="padding-top: 20px;">
        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-lg-5">
                        <h1 class="text-invisible">
                            La Sicilia
                        </h1>
                        <h5>Nos Produits</h5>
                        <h2>
                            Pourquoi choisir nos produits frais biologiques
                        </h2>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <p>
                            À La Sicilia, la qualité commence par nos ingrédients. Nous sélectionnons méticuleusement du lait biologique auprès de fermes locales reconnues pour leur engagement envers des pratiques éthiques et des produits laitiers de qualité supérieure. En maintenant une chaîne d'approvisionnement durable, nous nous assurons que chaque bouchée de notre fromage non seulement a un goût exceptionnel, mais soutient également l'environnement et l'économie locale. 
                        </p>
                        <a class="btn circle btn-md btn-theme effect" href="{{ route('nos-produits')}}">Voir tout<i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-box">
            <!-- Shape -->
            <div class="shape-illustration">
                <img src="{{ asset('assets/img/shape/6.png') }}" alt="Shape">
            </div>
            <!-- Shape -->
            <div class="container">
                <div class="services-items">
                    <div class="row">
                        <!-- Single Item -->
                        <div class="single-item col-lg-3 col-md-6">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{asset('assets/img/product/1.png')}}" alt="Thumb">
                                    <div class="content">
                                        
                                        <div class="title">
                                            <h5><a href="#"><strong>Mozzarella</strong> </a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="single-item col-lg-3 col-md-6">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{asset('assets/img/product/2.png')}}" alt="Thumb">
                                    <div class="content">
                                        
                                        <div class="title">
                                            <h5><a href="#"><strong>Burrata</strong></a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="single-item col-lg-3 col-md-6">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{asset('assets/img/product/3.png')}}" alt="Thumb">
                                    <div class="content">
                                        
                                        <div class="title">
                                            <h5><a href="#"><strong>Ricotta</strong> </a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="single-item col-lg-3 col-md-6">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{asset('assets/img/product/4.png')}}" alt="Thumb">
                                    <div class="content">
                                                                               <div class="title">
                                            <h5><a href="#"><strong>Beurre</strong> </a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Area -->


    @include('front.components.story')



     <!-- Start Gallery Area
    ============================================= -->
    <div class="gallery-area overflow-hidden default-padding">
        <!-- Shape -->
        <div class="fixed-shape">
            <img src="assets/img/shape/5.png" alt="Shape">
        </div>
        <!-- Shape -->
        
        <div class="container">
            <div class="case-items-area">
                <div class="masonary">
                    <div id="portfolio-grid" class="gallery-items colums-2">
                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/story/1.webp') }}" alt="Thumb">
                                    <a href="{{ asset('assets/img/story/1.webp') }}" class="item popup-gallery"><i class="fa fa-plus"></i></a>
                                </div>
                                
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/story/2.webp') }}" alt="Thumb">
                                    <a href="{{ asset('assets/img/story/2.webp') }}" class="item popup-gallery"><i class="fa fa-plus"></i></a>
                                </div>
                                
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/story/3.webp') }}" alt="Thumb">
                                    <a href="{{ asset('assets/img/story/3.webp') }}" class="item popup-gallery"><i class="fa fa-plus"></i></a>
                                </div>
                                
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <iframe src="https://www.youtube.com/embed/T3te3PHuDIQ?rel=0&si=INydnET33uiDFJJJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="width: 100%; height: 400px;"></iframe>
                                </div>
                                
                            </div>
                        </div>
                        <!-- Single Item -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery Area -->
    



    <!-- Start Specialty 
    ============================================= -->
   {{--  <div class="specialty-area bg-gray overflow-hidden">
        <div class="container-full">
            <div class="specialty-items default-padding">
                <!-- Fixed BG -->
                <div class="fixed-bg bg-fixed shadow dark" style="background-image: url(assets/img/banner/7.jpg);">
                    
                </div>
                <!-- End Fixed BG -->
                <div class="row">
                    <div class="col-lg-12 info text-light text-center">
                        <h2>All you need for agriculture hard work & professional</h2>
                        <a class="btn circle btn-light border btn-md" href="#">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Specialty Area -->




{{-- 

    <div class="default-padding bg-gray" style="padding-top: 40px;">
    <div class="container-full">
       
      <iframe src="https://www.youtube.com/embed/T3te3PHuDIQ?rel=0&si=INydnET33uiDFJJJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="width: 100%; height: 640px;"></iframe>
    </div>
    </div> --}}

   
    @include('front.components.contact')

    

@endsection

@push('style')

@endpush
@push('schema')
    

@endpush
