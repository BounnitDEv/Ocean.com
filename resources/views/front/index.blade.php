@extends('front.layouts.base')

@section('title')@endsection
@section('description')@endsection
@section('image')@endsection
@section('link'){{ route('home') }}@endsection

@section('content')



<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/perhu/default/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jul 2024 00:35:02 GMT -->
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


<div class="page-wrapper ">

<section class="hero-wrap style3 bg-souvi">
<img src="assets/img/circle-shape1.png" alt="Image" class="hero-shape-11 lg-none">
<img src="assets/img/circle-shape1.png" alt="Image" class="hero-shape-12 lg-none">
<img src="assets/img/services/service-shape-5.png" alt="Image" class="hero-shape-14 lg-none">
<div class="container">
<div class="row align-items-center gx-5">
<div class="col-lg-6">
<div class="hero-content">
<span data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">ICHQIRIB Samira -- Meilleure Psychonaute</span>
<h1 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="800">Transformez Votre Potentiel.</h1>
<p data-aos="fade-right" data-aos-duration="1000" data-aos-delay="1200">Coach certifié en finance, relations, famille, développement professionnel et santé mentale, je suis là pour vous aider à évoluer et à vous épanouir.
Que vous soyez professionnel, parent ou célibataire, je vous propose un accompagnement personnalisé pour atteindre vos objectifs et améliorer votre bien-être.
</p>
<div class="hero-btn">
<a href="/about" class="btn style1">En savoir plus</a>

</div>
</div>
</div>
<div class="col-lg-6">
<div class="hero-img-wrap bg-f hero-bg-10">
<img class="hero-shape-9" src="assets/img/hero/hero-shape-9.png" alt="Image">
</div>
</div>
</div>
</div>
</section>


<div class="category-wrap">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-4 col-md-6">
<div class="category-item">
<div class="cat-icon">
<i class="flaticon-boy-1"></i>
</div>
<h3 class="cat-title"><a href="services.html">Soutien aux Enfants</a></h3>
<p>Améliorez la communication, l'autonomie et la gestion des émotions chez les enfants avec des approches adaptées.</p>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="category-item">
<div class="cat-icon">
<i class="flaticon-team"></i>
</div>
<h3 class="cat-title"><a href="services.html">Coaching Professionnel</a></h3>
<p>Atteignez vos objectifs de carrière avec des stratégies efficaces, une meilleure orientation et des revenus accrus.</p>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="category-item">
<div class="cat-icon">
<i class="flaticon-dating"></i>
</div>
<h3 class="cat-title"><a href="services.html">Coaching de Vie</a></h3>
<p>Épanouissez-vous et gérez vos émotions avec des outils personnalisés pour une vie équilibrée et satisfaisante.</p>
</div>
</div>
</div>
</div>
</div>


<section class="about-wrap style3 ptb-100">
<div class="container">
<div class="row gx-5 align-items-center">
<div class="col-lg-6">
<div class="about-img bg-f about-bg-4">
<img src="assets/img/about/shape-2.png" alt="Image" class="shape-2">
</div>
</div>
<div class="col-lg-6">
<div class="about-content">
<div class="content-title">
<span>À propos</span>
<h2>Atteindre Votre Plein Potentiel</h2>
<p>En tant que coach certifiée, j'accompagne chefs d'entreprise, cadres, parents et célibataires à réussir et s'épanouir en atteignant leurs objectifs:</p>
</div>
<div class="about-icon-wrap">
<div class="about-icon-item">
<i class="flaticon-doctor"></i>
<p>Vie<br>professionnelle</p>
</div>
<div class="about-icon-item">
<i class="flaticon-brain"></i>
<p>Vie<br>personnelle</p>
</div>
</div>
<div class="about-btn">
<a href="/about" class="btn style1">En savoir plus</a>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="service-wrap bg-souvi ptb-100">
<img src="assets/img/services/service-shape-3.png" alt="Image" class="service-shape-3 lg-none">
<img src="assets/img/services/service-shape-4.png" alt="Image" class="service-shape-4 lg-none">
<img src="assets/img/services/service-shape-5.png" alt="Image" class="service-shape-5 lg-none">
<img src="assets/img/circle-shape1.png" alt="Image" class="service-shape-6 lg-none">
<div class="container">
<div class="section-title style1 mb-40 text-center">
<h2>Nos Meilleurs Services</h2>
<p>Découvrez une gamme de thérapies transformatrices conçues pour soutenir votre bien-être mental et émotionnel. Que vous affrontiez des défis spécifiques ou que vous cherchiez à évoluer personnellement, nos services vous offrent l'accompagnement nécessaire.</p>
</div>
<div class="service-slider-wrap">
<div class="container">
<div class="row">
<div class="col-md-12 px-0">
<div class="service-sider-one swiper-container">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="service-card style2 bg-f service-bg-1">
<div class="service-info">
<span class="icon-overlay"> <i class="flaticon-brain"></i></span>
<span class="service-icon">
<i class="flaticon-brain"></i>
</span>
<h3 class="service-title">
<a href="service-details.html">Coaching Professionnel</a>
</h3>
<p>Atteignez vos objectifs de carrière avec des stratégies efficaces, une meilleure orientation et des revenus accrus. </p>
<a href="service-details.html" class="link style1">En savoir plus <i class="flaticon-right-arrow-1"></i></a>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="service-card style2 bg-f service-bg-2">
<div class="service-info">
<span class="icon-overlay"> <i class="flaticon-individual"></i></span>
<span class="service-icon">
<i class="flaticon-individual"></i>
</span>
<h3 class="service-title">
<a href="service-details.html">Coaching de Vie</a>
</h3>
<p>Épanouissez-vous et gérez vos émotions avec des outils personnalisés pour une vie équilibrée et satisfaisante.</p>
<a href="service-details.html" class="link style1">
En savoir plus <i class="flaticon-right-arrow-1"></i>
</a>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="service-card style2 bg-f service-bg-3">
<div class="service-info">
<span class="icon-overlay"> <i class="flaticon-dating"></i></span>
<span class="service-icon">
<i class="flaticon-dating"></i>
</span>
<h3 class="service-title">
<a href="service-details.html">Soutien aux Parents</a>
</h3>
<p>Réinventez les valeurs éducatives et assurez le bien-être de votre famille avec des conseils adaptés.</p>
<a href="service-details.html" class="link style1">
En savoir plus <i class="flaticon-right-arrow-1"></i>
</a>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="service-card style2 bg-f service-bg-4">
<div class="service-info">
<span class="icon-overlay"> <i class="flaticon-psychology"></i></span>
<span class="service-icon">
<i class="flaticon-psychology"></i>
</span>
<h3 class="service-title">
<a href="service-details.html">Hypnose</a>
</h3>
<p>Gérez le stress, l'anxiété, les phobies, et plus encore avec des séances d'hypnose adaptées à vos besoins spécifiques.</p>
<a href="service-details.html" class="link style1">
En savoir plus <i class="flaticon-right-arrow-1"></i>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="service-one-next slider-btn style3"><i class="flaticon-right-arrow-angle"></i></div>
<div class="service-one-prev slider-btn style3"><i class="flaticon-left-arrow"></i></div>
</div>
</div>
</section>


<section class="wh-choose-wrap ptb-100">
<div class="container">
<div class="row gx-5 align-items-center">
<div class="col-lg-6">
<div class="content-title style1 mb-30">
<span>Pourquoi Nous Choisir</span>
<h2 class="mb-15">Des Soins Psychologiques Personnalisés</h2>
<p>Nous vous offrons des soins psychologiques dans notre cabinet unique, dédiés à vous fournir le meilleur soutien possible.</p>
</div>
<div class="wh-item-wrap">
<div class="wh-item">
<div class="wh-icon">
<i class="flaticon-individual"></i>
</div>
<div class="wh-text">
<h5>Conseils en Ligne</h5>
<p>Obtenez des conseils psychologiques professionnels depuis le confort de votre maison grâce à nos services de consultation en ligne.
</p>
</div>
</div>
<div class="wh-item">
<div class="wh-icon">
<i class="flaticon-brain"></i>
</div>
<div class="wh-text">
<h5>Examen Cérébral</h5>
<p>Nous proposons des examens cérébraux complets pour évaluer et suivre votre santé mentale de manière précise.</p>
</div>
</div>
<div class="wh-item">
<div class="wh-icon">
<i class="flaticon-doctor"></i>
</div>
<div class="wh-text">
<h5>Expertise Professionnelle</h5>
<p>Avec une vaste expérience, nous offrons des soins psychologiques experts, axés sur votre bien-être et votre épanouissement personnel.
</p>
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



<section class="faq-wrap ptb-100 bg-souvi">
    <img src="assets/img/circle-shape1.png" alt="Image" class="faq-shape-1 lg-none">
    <img src="assets/img/circle-shape1.png" alt="Image" class="faq-shape-2 lg-none">
    <div class="container">
        <div class="section-title style1 mb-40 text-center">
            <h2>Questions Fréquemment Posées</h2>
            <p>Trouvez des réponses aux questions courantes sur nos services de soins psychologiques et comment nous pouvons vous aider.</p>
        </div>
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span>
                                    <i class="las la-plus plus"></i>
                                    <i class="las la-minus minus"></i>
                                </span>
                                Comment une psychonaute aide-t-elle à améliorer la santé mentale ?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="single-product-text">
                                    <p>Une psychonaute aide à améliorer la santé mentale en offrant un soutien émotionnel, en enseignant des techniques de gestion du stress et en guidant les individus à travers leurs expériences psychédéliques pour en tirer des bénéfices thérapeutiques. Elle aide à identifier et à traiter les troubles mentaux, à promouvoir la croissance personnelle et à favoriser le bien-être général.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span>
                                    <i class="las la-plus plus"></i>
                                    <i class="las la-minus minus"></i>
                                </span>
                                Quels types de problèmes une psychonaute peut-elle aider à résoudre ?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Une psychonaute peut aider à résoudre une variété de problèmes de santé mentale, notamment l'anxiété, la dépression, les traumatismes, le stress post-traumatique, les troubles de l'humeur et les problèmes de dépendance. Elle peut également fournir un soutien dans les périodes de transition de vie, aider à améliorer l'estime de soi et favoriser le développement personnel.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span>
                                    <i class="las la-plus plus"></i>
                                    <i class="las la-minus minus"></i>
                                </span>
                                Comment se préparer à une séance avec une psychonaute ?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Pour se préparer à une séance avec une psychonaute, il est conseillé de noter vos objectifs personnels, vos préoccupations et vos expériences récentes. Il est également utile de trouver un endroit calme où vous vous sentez à l'aise et de vous assurer que vous ne serez pas dérangé pendant la session. Préparez-vous mentalement à être ouvert et honnête durant la discussion.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="faq-img">
                    <img src="assets/img/about/faq-img.png" alt="Image">
                </div>
            </div>
        </div>
    </div>
</section>



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

<!-- Mirrored from templates.hibootstrap.com/perhu/default/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jul 2024 00:35:03 GMT -->
</html>


@endsection

@push('style')

@endpush
@push('schema')


@endpush
