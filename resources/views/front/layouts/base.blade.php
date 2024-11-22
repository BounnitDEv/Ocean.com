


<!DOCTYPE html>
<html lang="en">

<head>
  <!--================ Basic page needs ================-->
  <title>Home 3</title>
  <meta charset="UTF-8">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <!--================ Mobile specific metas ================-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--================ Favicon ================-->
  <link rel="shortcut icon" href="images/favicon.ico">
  <!--================ Google web fonts ================-->
  <link href="https://fonts.googleapis.com/css?family=Asap:400,400i,500,500i,600,600i,700,700%7CSatisfy&amp;display=swap"
    rel="stylesheet">
  <!--================ Vendor CSS ================-->
  <link rel="stylesheet" href="{{asset('assets/html/lemar/css/fontawesome-all.min.css')}}">
  <link
    href="https://fonts.googleapis.com/css?family=Material+Icons%7CMaterial+Icons+Outlined%7CMaterial+Icons+Two+Tone%7CMaterial+Icons+Round%7CMaterial+Icons+Sharp"
    rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/html/lemar/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/html/lemar/css/animate.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/html/lemar/css/linearicons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/html/lemar/vendors/owl-carousel/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/html/lemar/vendors/fancybox/jquery.fancybox.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/html/lemar/vendors/arcticmodal/jquery.arcticmodal-0.3.css')}}">
  <link rel="stylesheet" href="{{asset('assets/html/lemar/vendors/revolution/css/settings.css')}}">
  <link rel="stylesheet" href="{{asset('assets/html/lemar/vendors/revolution/css/layers.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/html/lemar/vendors/revolution/css/navigation.min.css')}}">
  <!--================ Theme CSS ================-->
  <link rel="stylesheet" href="{{asset('assets/html/lemar/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/html/lemar/css/responsive.css')}}">
  <!--================ Vendor JS ================-->
</head>

<body>
  <div class="mad-preloader"></div>
  <div id="mad-page-wrapper" class="mad-page-wrapper">

    <!--================ Header ================-->
    <header id="mad-header" class="mad-header mad-header--transparent">
      <div class="container">
        <!--================ Section ================-->
        <div class="mad-header-section">
          <div class="mad-header-items item-col-3">
            <div class="mad-header-item">
              <div><i class="material-icons">phone</i> +1 800 603 6035</div>
            </div>
            <div class="mad-header-item">
              <a href="index.html" class="mad-logo"><img src="{{ asset('assets/html/lemar/images/logo.png') }}" alt=""></a>
            </div>
            <div class="mad-header-item">
              <div class="mad-social-icons">
                <ul>
                  <li><a href="https://www.facebook.com/p/Ocean-Tanger-100063954668528"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="https://www.instagram.com/oceantangermaroc"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="https://www.tripadvisor.fr/Restaurant_Review-g293737-d1896074-Reviews-Restaurant_L_Ocean-Tangier_Tanger_Tetouan_Al_Hoceima.html"><i class="fab fa-tripadvisor"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!--================ End of Section ================-->
        <div class="mad-header-section--sticky-xl">
          <div class="container">
            <!--================ Navigation ================-->
            <nav class="mad-navigation-container mad-header-section--sticky-xl">
              <ul class="mad-navigation mad-navigation--vertical-sm">
                <li class="menu-item current-menu-item"><a href="{{ route('home') }}">Home</a>
                </li>
                <li class="menu-item current-menu-item"><a href="{{ route('about') }}">About Us</a>
                </li>
                <li class="menu-item current-menu-item"><a href="{{ route('menu') }}">Menu</a>
                </li>
                <li class="menu-item current-menu-item"><a href="{{ route('chefs') }}">Our Chefs</a>
                </li>
                <li class="menu-item current-menu-item"><a href="{{ route('gallery') }}">Gallery</a>
                </li>
                <li class="menu-item current-menu-item"><a href="{{ route('reservation') }}">Reservation</a>
                </li>
                <li class="menu-item current-menu-item"><a href="{{ route('contact') }}">Contact Us</a>
                </li>

              </ul>
            </nav>
            <!--================ End of Navigation ================-->
          </div>
        </div>
      </div>
    </header>
    <!--================ End of Header ================-->


    @yield('content')








<!--================ Footer ================-->
<footer id="mad-footer" class="mad-footer">
      <!--================ Footer row ================-->
      <div class="mad-footer-main">
        <div class="container">
          <div class="row hr-size-1">
            <div class="col-md-4">
              <!--================ Widget ================-->
              <section class="mad-widget">
                <h4 class="mad-widget-title">We Are Open</h4>
                <div class="mad-timetable mad-vr-list">
                  <ul>
                    <li>
                      <div class="mad-tt-title">Brunch</div>
                      Saturday: 10am – 2pm
                    </li>
                    <li>
                      <div class="mad-tt-title">Dinner</div>
                      Monday – Thursday: 5pm – 10pm <br>
                      Friday – Saturday: 4pm – 11pm
                    </li>
                    <li>
                      <div class="mad-tt-title">Happy Hour</div>
                      Monday – Thursday: 5pm – 6pm <br>
                      Friday – Saturday: 2pm – 4pm
                    </li>
                  </ul>
                </div>
              </section>
              <!--================ End of Widget ================-->
            </div>
            <div class="col-md-4">
              <!--================ Widget ================-->
              <section class="mad-widget">
                <a href="#" class="mad-logo content-element-3"><img src="{{ asset('assets/html/lemar/images/logo2.png') }}" alt=""></a>
                <div class="mad-vr-list content-element-5">
                  <ul>
                    <li>
                      56 12th Ave, <br>
                      New York, NY 10011 <br>
                      <a href="#" class="mad-dir mad-link">Get Direction</a>
                    </li>
                    <li>
                      +1 800 603 6035 <br>
                      +1 800 603 6036 <br>
                      <a href="#" class="mad-link">oceantanger@gmail.com</a>
                    </li>
                  </ul>
                </div>
                <div class="mad-social-icons style-2 size-big">
                  <ul class="justify-content-center">
                    <li><a href="https://www.facebook.com/p/Ocean-Tanger-100063954668528"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.instagram.com/oceantangermaroc"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.tripadvisor.fr/Restaurant_Review-g293737-d1896074-Reviews-Restaurant_L_Ocean-Tangier_Tanger_Tetouan_Al_Hoceima.html"><i class="fab fa-tripadvisor"></i></a></li>
                    <li><a href="https://www.youtube.com/embed/kQPbxV0c1YY?si=Y78m18d3nCAsq7iC"><i class="fab fa-youtube"></i></a></li>
                  </ul>
                </div>
              </section>
              <!--================ End of Widget ================-->
            </div>
            <div class="col-md-4">
              <!--================ Widget ================-->
              <section class="mad-widget">
                <h4 class="mad-widget-title">Useful Links</h4>
                <div class="mad-vr-list">
                  <ul>
                    <li><a href="{{ route('home') }}" class="mad-link">Home</a></li>
                    <li><a href="{{ route('about') }}" class="mad-link">About us</a></li>
                    <li><a href="{{ route('menu') }}" class="mad-link">Menu</a></li>
                    <li><a href="{{ route('chefs') }}" class="mad-link">Our Chefs</a></li>
                    <li><a href="{{ route('gallery') }}" class="mad-link">Gallery</a></li>
                    <li><a href="{{ route('reservation') }}" class="mad-link">Reservation</a></li>
                    <li><a href="{{ route('contact') }}" class="mad-link">Contact us</a></li>
                  </ul>
                </div>
              </section>
              <!--================ End of Widget ================-->
            </div>
          </div>
        </div>
      </div>
      <!--================ End of Footer row ================-->
      <p class="copyrights">Tous droits réservés © 2024 <a href="#" class="mad-link link-white">L'océan</a>.<br>
      SITE WEB CRÉÉ PAR  <a href="https://maroc-freelance.com/"> WWW.MAROCFREELANCE.COM </a></p>
    </footer>
    <!--================ End of Footer ================-->
  </div>
    <script src="{{ asset('assets/html/lemar/vendors/modernizr.js') }}"></script>
    <script src="{{ asset('assets/html/lemar/vendors/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/html/lemar/vendors/jquery.easing.1.3.min.js') }}"></script>
    <script src="{{ asset('assets/html/lemar/vendors/instafeed.min.js') }}"></script>
    <script src="{{ asset('assets/html/lemar/vendors/instafeed.wrapper.min.js') }}"></script>
    <script src="{{ asset('assets/html/lemar/vendors/monkeysan.jquery.nav.1.0.min.js') }}"></script>
    <script src="{{ asset('assets/html/lemar/vendors/monkeysan.tabs.min.js') }}"></script>
    <script src="{{ asset('assets/html/lemar/vendors/arcticmodal/jquery.arcticmodal-0.3.min.js') }}"></script>
    <script src="{{ asset('assets/html/lemar/vendors/handlebars-v4.0.5.min.js') }}"></script>
    <script src="{{ asset('assets/html/lemar/vendors/monkeysan.validator.min.js') }}"></script>
    <script src="{{ asset('assets/html/lemar/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/html/lemar/vendors/jquery.parallax-1.1.3.min.js') }}"></script>
    <script src="{{ asset('assets/html/lemar/vendors/retina.min.js') }}"></script>

    <script src="{{ asset('assets/html/lemar/js/modules/mad.alert-box.min.js') }}"></script>
    <script src="{{ asset('assets/html/lemar/js/modules/mad.newsletter-form.min.js') }}"></script>
    <script src="{{ asset('assets/html/lemar/js/modules/mad.sticky-header-section.min.js') }}"></script>
    <script src="{{ asset('assets/html/lemar/js/mad.app.js') }}"></script>
    @stack('scripts')
</body>

</html>
