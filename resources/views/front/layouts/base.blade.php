<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tanda - IT Solutions Template">

    <!-- ========== Page Title ========== -->
    <title>Tanda - IT Solutions Template</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/flaticon-set.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/bootsnav.css') }}" rel="stylesheet" />
    <link href="{{asset('assets/style.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->


</head>


<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    
    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav">

            <div class="container-full">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav inc-border">
                    <ul>
                       {{--  <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                                <i class="fa fa-shopping-basket"></i>
                                <span class="badge">3</span>
                            </a>
                            <ul class="dropdown-menu cart-list">
                                <li>
                                    <a href="#" class="photo"><img src="assets/img/100x100.png" class="cart-thumb" alt="" /></a>
                                    <h6><a href="#">Delica omtantur </a></h6>
                                    <p>2x - <span class="price">$99.99</span></p>
                                </li>
                                <li>
                                    <a href="#" class="photo"><img src="assets/img/100x100.png" class="cart-thumb" alt="" /></a>
                                    <h6><a href="#">Omnes ocurreret</a></h6>
                                    <p>1x - <span class="price">$33.33</span></p>
                                </li>
                                <li>
                                    <a href="#" class="photo"><img src="assets/img/100x100.png" class="cart-thumb" alt="" /></a>
                                    <h6><a href="#">Agam facilisis</a></h6>
                                    <p>2x - <span class="price">$99.99</span></p>
                                </li>
                                <li class="total">
                                    <span class="pull-right"><strong>Total</strong>: $0.00</span>
                                    <a href="#" class="btn btn-default btn-cart">Cart</a>
                                </li>
                            </ul>
                        </li> --}}
                        <li class="button"><a href="{{ route('contact') }}"> Contactez-nous</a></li>
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{asset('assets/img/logo-white.png')}}" class="logo logo-display" alt="Logo">
                        <img src="{{asset('assets/img/sicilia.png')}}" class="logo logo-scrolled" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                        
                        <li><a href="{{ route('home')}}">Acceuil</a></li>
                        <li><a href="{{ route('about')}}">À PROPOS</a></li>
                        <li><a href="{{ route('nos-produits')}}">Nos Produits</a></li>
                       
                        <li><a href="{{ route('nos-recettes') }}">Nos Recettes</a></li>
                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                        <li><a href="{{ route('story') }}">La story Sicilia</a></li>
                        {{-- <li><a href="{{ route('blog')}}">Blog</a></li> --}}
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->




            













    @yield('content')        
    






                
    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark text-light">
        <!-- Fixed Shape -->
        <div class="fixed-shape">
            <img src="assets/img/shape/2.png" alt="Shape">
        </div>
        <!-- Fixed Shape -->
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <!-- Single Itme -->
                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item about">
                            <img src="{{asset('assets/img/logo-white.png')}}" alt="Logo">
                           
                        </div>
                    </div>
                    <!-- End Single Itme -->

                    <!-- Single Itme -->
                    <div class="col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Explore</h4>
                            <ul>
                                <li>
                                    <a href="{{ route('home') }}">Acceuil</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}">À Propos</a>
                                </li>
                                <li>
                                    <a href="{{ route('nos-produits') }}">Nos Produits</a>
                                </li>
                                <li>
                                    <a href="{{ route('nos-recettes') }}">Nos Recettes</a>
                                </li>
                                <li>
                                    <a href="{{ route('gallery') }}">Gallery</a>
                                </li>
                                <li>
                                    <a href="{{ route('story') }}">La story sicilia</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Contactez-nous</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Itme -->

                    <!-- Single Itme -->
                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item recent-post">
                            <h4 class="widget-title">Recent Posts</h4>
                            <ul>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/thumbs/3.jpg" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">Meant widow equal an share least part. </a>
                                        <div class="meta-title">
                                            <span class="post-date">12 Feb, 2019</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/thumbs/5.jpg" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">Future Plan & Strategy for Consutruction </a>
                                        <div class="meta-title">
                                            <span class="post-date">18 Mar, 2019</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Itme -->

                    <!-- Single Itme -->
                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item">
                            <h4 class="widget-title">Contact Info</h4>
                            <div class="address">
                                <ul>
                                    <li>
                                        <strong>Address: </strong>
                                        TFZ ZONE LOGISTIQUE LOT N°86 A-14 TANGER
                                        
                                    </li>
                                    <li>
                                        <strong>Email: </strong>
                                        <a href="mailto:info@lasicilia.com">info@lasicilia.com</a>
                                    </li>
                                    <li>
                                        <strong>Phone: </strong>
                                        <a href="#"> +123 456 7890</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="social">
                                <ul>
                                    <li class="facebook">
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="youtube">
                                        <a href="#">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Itme -->
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-md-7">
                        <p>Tous droits réservés &copy;  2024. SITE WEB CRÉÉ PAR : <a href="https://maroc-freelance.com/">WWW.MAROCFREELANCE.COM </a></p>
                    </div>
                    <div class="col-md-5 text-right link">
                        <ul>
                            <li>R.C :128843– IF : 52537981</li>
                            <li>
                               ICE :003075060000045
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/equal-height.min.html') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.custom.13711.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/progress-bar.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/count-to.js') }}"></script>
    <script src="{{ asset('assets/js/YTPlayer.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootsnav.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
