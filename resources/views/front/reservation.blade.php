@extends('front.layouts.base')

@section('title')  @endsection

@section('description')  @endsection
@section('image') @endsection
@section('link'){{ route('contact')}} @endsection

@section('content')

      <!--================ Breadcrumb ================-->
      <div class="mad-breadcrumb with-bg" data-bg-image-src="{{ asset('assets/html/lemar/images/1920x544_bg2.jpg') }}">
        <div class="container">
          <nav class="mad-breadcrumb-path"><span><a href="index.html">Home</a></span> - <span>Reserations Via Open Table</span>
          </nav>
          <h1 class="mad-page-title">Reserations Via Open Table</h1>
        </div>
      </div>
      <!--================ End of Breadcrumb ================-->
      <div class="mad-content no-pd">
        <div class="container">
          <div class="mad-section mad-section--stretched mad-colorizer--scheme-">
            <div class="mad-colorizer-bg-color">
              <div class="with-svg-item svg-right-side"><img src="{{ asset('assets/html/lemar/images/top_half_right.png') }}" alt=""></div>
            </div>
            <h2 class="align-center">Make a Reservation</h2>
            <p class="align-center">We accept online bookings for tables up to ten people. Larger parties can <br> be booked by phone or in person at the
            restaurant.</p>
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <form class="mad-form">
                  <div class="form-group type-2">
                    <div class="form-col with-icon">
                      <input type="text" placeholder="11/04/2020">
                      <i class="material-icons">calendar_today</i>
                    </div>
                    <div class="form-col with-icon">
                      <input type="text" placeholder="7:00 PM">
                      <i class="material-icons">access_time</i>
                    </div>
                    <div class="form-col with-icon">
                      <input type="text" placeholder="2 persons">
                      <i class="material-icons-outlined">people</i>
                    </div>
                    <div class="form-col">
                      <button class="btn btn-big">Book a Table</button>
                    </div>
                  </div>
                  <span class="mad-form-tag">Powered by OpenTable</span>
                </form>
              </div>
            </div>
          </div>
          <div data-bg-image-src="{{ asset('assets/html/lemar/images/1920x999_bg1.jpg') }}"
            class="mad-section mad-bg-section mad-section--stretched mad-colorizer--scheme- mad-colorizer--parallax">
          </div>
          <div class="mad-section">
            <div class="align-center">
              <h2>Order by Phone</h2>
              <div>Prefer to make your reservation via phone? Give us a call!</div>
              <span class="mad-text-color-2 mad-text-sb"><i>Phone number is +1 800 603 6035.</i></span>
              <div>You can contact us between 7am and Midnight ever day of the week.</div>
            </div>
          </div>
        </div>
      </div>

@endsection('content')
