@extends('front.layouts.base')

@section('title')  @endsection

@section('description')  @endsection
@section('image') @endsection
@section('link'){{ route('about')}} @endsection

@section('content')
<!DOCTYPE html>
<html lang="zxx">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/line-awesome.min.css">
<link rel="stylesheet" href="assets/css/flaticon.css">
<link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
<link rel="stylesheet" href="assets/css/aos.css">
<link rel="stylesheet" href="assets/css/odometer.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/dark-theme.css">
<link rel="stylesheet" href="assets/css/responsive.css">
<title>Perhu - Life Coach & Therapist Bootstrap 5 Template</title>
<link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>
<body>

<div class="preloader js-preloader">
<img src="assets/img/preloader.gif" alt="Image">
</div>


<div class="switch-theme-mode">
<label id="switch" class="switch">
<input type="checkbox" onchange="toggleTheme()" id="slider">
<span class="slider round"></span>
</label>
</div>


<div class="page-wrapper">


<div class="content-wrapper">

<div class="breadcrumb-wrap bg-f br-1">
<div class="overlay bg-black op-8"></div>
<div class="container">
<div class="row">
<div class="col-xl-12">
<div class="breadcrumb-title">
<h2>About Us</h2>
<ul class="breadcrumb-menu list-style">
<li><a href="/">Home </a></li>
<li>About us</li>
</ul>
</div>
</div>
</div>
</div>
</div>


<div class="about-wrap style2 ptb-100">
<div class="container">
<div class="row gx-5 align-items-center">
<div class="col-lg-6">
<a class="d-block about-img bg-f about-bg-3" data-fancybox="gallery" href="assets/img/about/about-img-3.jpg">
</a>
</div>
<div class="col-lg-6">
<div class="about-content">
<div class="content-title">
<span>À propos de nous</span>
<h2>Découvrez des solutions de coaching sur mesure pour votre bien-être</h2>
<p>En tant que coach certifiée en finance, relations, famille, développement professionnel et santé mentale, je suis là pour vous offrir des solutions personnalisées. Que vous soyez un professionnel, un parent ou une personne célibataire, je vous propose un accompagnement pour évoluer, avancer et vous épanouir. Ensemble, nous travaillerons à améliorer votre santé mentale et à atteindre une vie plus équilibrée et épanouie.</p>
</div>
<div class="about-quote">
<p>"La solution pour évoluer, avancer, s’épanouir, c'est d'apprendre à être à l’écoute de vous-même."</p>
<span>ICHQIRIB Samira Master COACH -thérapeute Praticienne En hypnose Ericksonienne</span>
</div>
<div class="about-btn">
<a href="about.html" class="btn style1">Learn More</a>
<a href="contact.html" class="btn style2">Contact Us</a>
</div>
</div>
</div>
</div>
</div>
</div>


<section class="process-wrap bg-souvi style1 pt-100 pb-75">
<div class="container">
<div class="section-title style1 mb-40 text-center">
<h2>Procédure de coaching de vie</h2>
<p>Découvrez notre approche structurée pour le coaching de vie, conçue pour vous aider à atteindre vos objectifs et à réaliser votre plein potentiel. Voici comment nous procédons :</p>
</div>
<div class="row justify-content-center">
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="process-item style2">
<span>1</span>
<h4><a href="about.html">Explorer</a></h4>
<p>Découvrez votre potentiel et définissez des objectifs clairs et réalisables avec notre accompagnement.
</p>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="process-item style2">
<span>2</span>
<h4><a href="about.html">Mentorat</a></h4>
<p>Bénéficiez d'un mentorat expert pour surmonter les défis et rester sur la bonne voie.</p>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="process-item style2">
<span>3</span>
<h4><a href="about.html">Motiver</a></h4>
<p>Restez motivé grâce au soutien et aux encouragements continus de votre coach.</p>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="process-item style2">
<span>4</span>
<h4><a href="about.html">Soutien</a></h4>
<p>Profitez d'un soutien continu pour garantir des changements et une croissance durables.</p>
</div>
</div>
</div>
</div>
</section>


<section class="process-wrap ptb-100">
<div class="container">
<div class="row gx-5 align-items-center">
<div class="col-lg-6">
<div class="process-content">
<div class="content-title style1 mb-40">
<span>Procédure</span>
<h2>Une Méthode Adaptée Pour Votre Épanouissement</h2>
<p class="mt-20">Découvrez une approche simplifiée pour votre bien-être. Je vous guiderai à chaque étape pour garantir des résultats durables.</p>
</div>
<div class="process-item-wrap">
<div class="process-item style3">
<div class="process-step ">
1
</div>
<div class="process-text">
<h5>Hypnothérapie</h5>
<p>Débutons par une discussion pour créer un plan d’hypnothérapie personnalisé.</p>
</div>
</div>
<div class="process-item style3">
<div class="process-step">
2
</div>
<div class="process-text">
<h5>Coaching de vie</h5>
<p>Planifiez des sessions à votre convenance pour soutenir votre progression.</p>
</div>
</div>
<div class="process-item style3">
<div class="process-step">
3
</div>
<div class="process-text">
<h5>Coaching Professionnel</h5>
<p>Participez aux sessions pour aborder vos préoccupations et recevoir un soutien efficace.</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6">
<a class="d-block process-img bg-f process-bg-2" data-fancybox="gallery" href="assets/img/process/process-bg-2.jpg">
</a>
</div>
</div>
</div>
</section>

<!-- <div class="category-wrap" style="margin-top: 0;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="category-item">
                    <div class="cat-icon">
                        <i class="flaticon-boy-1"></i>
                    </div>
                    <h3 class="cat-title"><a href="services.html">Children Therapy</a></h3>
                    <p>Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Repudiandae, tempore Placeat.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="category-item">
                    <div class="cat-icon">
                        <i class="flaticon-team"></i>
                    </div>
                    <h3 class="cat-title"><a href="services.html">Business Therapy</a></h3>
                    <p>Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Repudiandae, tempore Placeat.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="category-item">
                    <div class="cat-icon">
                        <i class="flaticon-dating"></i>
                    </div>
                    <h3 class="cat-title"><a href="services.html">Couples Therapy</a></h3>
                    <p>Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Repudiandae, tempore Placeat.</p>
                </div>
            </div>
        </div>
    </div>
</div> -->


<section class="wh-choose-wrap ptb-100">
<div class="container">
<div class="row gx-5 align-items-center">
<div class="col-lg-6">
<div class="content-title style1 mb-40">
<span>Pourquoi nous choisir</span>
<h2>Coaching expert adapté à vos besoins</h2>
<p>Découvrez un coaching personnalisé qui va au-delà de la thérapie traditionnelle. Grâce à une compréhension approfondie des techniques psychologiques et un engagement envers votre croissance, j’offre des solutions sur mesure qui répondent à vos défis et aspirations uniques.</p>
</div>
<div class="wh-item-wrap">
<div class="wh-item">
<div class="wh-icon">
<i class="flaticon-individual"></i>
</div>
<div class="wh-text">
<h5>Zoom</h5>
<p>Profitez de séances de thérapie personnalisées depuis chez vous, offrant flexibilité et soutien selon vos besoins.</p>
</div>
</div>
<div class="wh-item">
<div class="wh-icon">
<i class="flaticon-brain"></i>
</div>
<div class="wh-text">
<h5>Google Meet</h5>
<p>Bénéficiez d'une évaluation cognitive approfondie pour cibler et améliorer votre santé mentale.</p>
</div>
</div>
<div class="wh-item">
<div class="wh-icon">
<i class="flaticon-doctor"></i>
</div>
<div class="wh-text">
<h5>Au cabinet</h5>
<p>Travaillez avec un coach qualifié pour un développement personnel adapté à vos objectifs spécifiques.</p>
</div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="wh-img bg-f wh-bg-1">
<img class="shape-1" src="assets/img/why-choose-us/shape-2.png" alt="Image">
</div>
</div>
</div>
</div>
</section>


<div class="partner-wrap bg-souvi ptb-100">
<div class="container">
<div class="row">
<div class="col-xl-12">
<div class="partner-slider swiper-container">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="partner-logo">
<img src="assets/img/partner/partner-logo-1.png" alt="Image">
</div>
</div>
<div class="swiper-slide">
<div class="partner-logo">
<img src="assets/img/partner/partner-logo-2.png" alt="Image">
</div>
</div>
<div class="swiper-slide">
<div class="partner-logo">
<img src="assets/img/partner/partner-logo-3.png" alt="Image">
</div>
</div>
<div class="swiper-slide">
<div class="partner-logo">
<img src="assets/img/partner/partner-logo-4.png" alt="Image">
</div>
</div>
<div class="swiper-slide">
<div class="partner-logo">
<img src="assets/img/partner/partner-logo-5.png" alt="Image">
</div>
</div>
<div class="swiper-slide">
<div class="partner-logo">
<img src="assets/img/partner/partner-logo-6.png" alt="Image">
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


<a href="javascript:void(0)" class="back-to-top"><i class="las la-arrow-up"></i></a>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.js"></script>
<script src="assets/js/ajaxchimp.min.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/fslightbox.js"></script>
<script src="assets/js/jquery.appear.js"></script>
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/perhu/default/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jul 2024 00:35:04 GMT -->
</html>
@endsection
