@extends('front.layouts.base')

@section('title')  @endsection

@section('description')  @endsection
@section('image') @endsection
@section('link'){{ route('contact')}} @endsection

@section('content')

      <!--================ Breadcrumb ================-->
      <div class="mad-breadcrumb with-bg" data-bg-image-src="{{ asset('assets/html/lemar/images/D3828FF7-1C50-4B2A-A640-0F66E7DD3F71 (7).webp') }}">
        <div class="container">
          <nav class="mad-breadcrumb-path"><span><a href="index.html">Accueil</a></span> - <span>Contactez-nous</span>
          </nav>
          <h1 class="mad-page-title">Contactez-nous</h1>
        </div>
      </div>
      <!--================ End of Breadcrumb ================-->
      <div class="mad-content no-pd">
        <div class="container">
          <div class="mad-section mad-section--stretched mad-colorizer--scheme-">
            <div class="mad-colorizer-bg-color">
              <div class="with-svg-item bottom2"><img src="{{ asset('assets/html/lemar/images/bottom_half_left.png') }}" alt=""></div>
            </div>
            <div class="row hr-size-2">
              <div class="col-xl-8">
                <h2>Envoyez-nous un message</h2>
                <div class="row hr-size-2">
                  <div class="col-md-5">
                    <div class="mad-vr-list content-element-5">
                      <ul>
                        <li>
                          Plage sidi kacem, <br>
                          Tanger 90000 <br>
                          <a href="#" class="mad-dir mad-link">Voir l'itinéraire</a>
                        </li>
                        <li>
                            +212 (0) 539 338 137 <br>
                            +212 (0) 539 338 137 <br>
                          <a href="#" class="mad-link">oceantanger@gmail.com</a>
                        </li>
                      </ul>
                    </div>
                    <div class="mad-social-icons style-3">
                      <ul>
                        <li><a href="https://www.facebook.com/p/Ocean-Tanger-100063954668528"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.instagram.com/oceantangermaroc"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://www.tripadvisor.fr/Restaurant_Review-g293737-d1896074-Reviews-Restaurant_L_Ocean-Tangier_Tanger_Tetouan_Al_Hoceima.html"><i class="fab fa-tripadvisor"></i></a></li>
                        <li><a href="https://www.youtube.com/embed/kQPbxV0c1YY?si=Y78m18d3nCAsq7iC"><i class="fab fa-youtube"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <p>Pour toute question, remplissez le formulaire ci-dessous.</p>
                    <form class="mad-contact-form size-2">
                      <div class="mad-col">
                        <input type="text" id="cf_name" name="cf_name" required placeholder="Votre Nom">
                      </div>
                      <div class="mad-col">
                        <input type="email" id="cf_email" name="cf_email" required placeholder="E-mail">
                      </div>
                      <div class="mad-col">
                        <textarea rows="4" id="message" name="cf_message" required placeholder="Message"></textarea>
                      </div>
                      <div class="mad-col">
                        <button type="submit" class="btn"><span>Valider</span></button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-xl-4">
                <div class="mad-tt-element no-border">
                  <span class="mad-tt-svg"><span><img src="{{ asset('assets/html/lemar/images/crab.png') }}" alt=""></span></span>
                  <h4 class="mad-title">Prêts à vous servir !</h4>
                  <div class="mad-timetable mad-vr-list">
                    <ul>
                      <li>
                        <div class="mad-tt-title">Brunch</div>
                        Saturday: 10am – 2pm
                      </li>
                      <li>
                        <div class="mad-tt-title">Dîner</div>
                        Monday – Thursday: 5pm – 10pm <br>
                        Friday – Saturday: 4pm – 11pm
                      </li>
                      <li>
                        <div class="mad-tt-title">Offres Spéciales</div>
                        Monday – Thursday: 5pm – 6pm <br>
                        Friday – Saturday: 2pm – 4pm
                      </li>
                    </ul>
                  </div>
                  <a href="#" class="btn btn-style-6">Réservez maintenant!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--================ Google Map ================-->
        <!-- <div id="googleMap" class="mad-gmap wide"></div> -->
        <!-- <iframe src="https://www.google.com/maps/d/embed?mid=1TVs2t9lqN7AXJyiFtgFaVY7kSM5jHrA&ehbc=2E312F" width="640" height="480"></iframe> -->
      </div>


@endsection
