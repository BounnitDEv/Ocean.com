@extends('front.layouts.base')

@section('title')  @endsection

@section('description')  @endsection
@section('image') @endsection
@section('link'){{ route('about')}} @endsection
 
@section('content')


    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark bg-fixed text-light" style="background-image: url(assets/img/banner/3.webp);">
        <div class="container">
            <div class="row default-padding">
                <div class="col-lg-8 offset-lg-2">
                    <h1>À PROPOS DE NOUS</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">À PROPOS</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Star About Area
    ============================================= -->
    <div class="about-content-area overflow-hidden inc-shape default-padding">
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
                            Bienvenue à la Fromagerie La Sicilia, située au cœur de la Zone Logistique TFZ Lot N°86 A-14 à Tanger, au Maroc. Nous sommes dédiés à la fabrication artisanale des meilleurs fromages italiens tels que la mozzarella, la burrata et la ricotta, en perpétuant des méthodes traditionnelles transmises de génération en génération. Depuis nos modestes débuts en Italie, nous avons transporté notre savoir-faire et notre passion vers notre nouvelle usine au Maroc, équipée des technologies de pointe les plus performantes.
                        </p>
                        <p>Chez La Sicilia, la qualité et la durabilité sont au cœur de notre démarche. Nous sélectionnons soigneusement les meilleurs ingrédients biologiques, en partenariat avec des fermes locales réputées pour leur engagement envers des pratiques éthiques et durables. Chaque étape de notre processus de production est minutieusement supervisée pour garantir que nos fromages non seulement régalent les palais, mais contribuent également à soutenir l'environnement et l'économie locale.</p>
                        <p>Nous sommes fiers de notre héritage et de notre engagement à fournir des produits de la plus haute qualité, tout en préservant l'authenticité et la tradition qui caractérisent nos fromages italiens renommés.</p>
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

  
   <div class="default-padding" style="padding-top: 40px;">
    <div class="container-full">
       {{--  <div class="site-heading text-center">
                        <h4>Our Team</h4>
                        <h2>Professional Farmers</h2>
                    </div> --}}
      <iframe src="https://www.youtube.com/embed/T3te3PHuDIQ?rel=0&si=INydnET33uiDFJJJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="width: 100%; height: 640px;"></iframe>
    </div>
    </div>

    
    @include('front.components.contact')
    
@endsection