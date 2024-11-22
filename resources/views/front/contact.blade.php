@extends('front.layouts.base')

@section('title')  @endsection

@section('description')  @endsection
@section('image') @endsection
@section('link'){{ route('contact')}} @endsection

@section('content')

      <!--================ Breadcrumb ================-->
      <div class="mad-breadcrumb with-bg" data-bg-image-src="{{ asset('assets/html/lemar/images/1920x544_bg2.jpg') }}">
        <div class="container">
          <nav class="mad-breadcrumb-path"><span><a href="index.html">Home</a></span> - <span>Contact Us v1</span>
          </nav>
          <h1 class="mad-page-title">Contact Us v1</h1>
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
                <h2>Get in Touch</h2>
                <div class="row hr-size-2">
                  <div class="col-md-5">
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
                          <a href="#" class="mad-link">mail@companyname.com</a>
                        </li>
                      </ul>
                    </div>
                    <div class="mad-social-icons style-3">
                      <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-tripadvisor"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <p>If you have any further enquiries, please use the form below.</p>
                    <form class="mad-contact-form size-2">
                      <div class="mad-col">
                        <input type="text" id="cf_name" name="cf_name" required placeholder="Your Name">
                      </div>
                      <div class="mad-col">
                        <input type="email" id="cf_email" name="cf_email" required placeholder="E-mail">
                      </div>
                      <div class="mad-col">
                        <textarea rows="4" id="message" name="cf_message" required placeholder="Message"></textarea>
                      </div>
                      <div class="mad-col">
                        <button type="submit" class="btn"><span>Submit</span></button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-xl-4">
                <div class="mad-tt-element no-border">
                  <span class="mad-tt-svg"><span><img src="{{ asset('assets/html/lemar/images/crab.png') }}" alt=""></span></span>
                  <h4 class="mad-title">We Are Open</h4>
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
                  <a href="#" class="btn btn-style-6">Make a Reservation</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--================ Google Map ================-->
        <!-- <div id="googleMap" class="mad-gmap wide"></div> -->
      </div>


@endsection
