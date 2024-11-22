@extends('front.layouts.base')

@section('title')  @endsection

@section('description')  @endsection
@section('image') @endsection
@section('link'){{ route('contact')}} @endsection

@section('content')



      <!--================ Breadcrumb ================-->
      <div class="mad-breadcrumb with-bg" data-bg-image-src="{{ asset('assets/html/lemar/images/1920x544_bg5.jpg') }}">
        <div class="container">
          <nav class="mad-breadcrumb-path"><span><a href="index.html">Home</a></span> - <span>Grid Gallery Minimal Gap</span>
          </nav>
          <h1 class="mad-page-title">Grid Gallery Minimal Gap</h1>
        </div>
      </div>
      <!--================ End of Breadcrumb ================-->
      <div class="mad-content">
        <div class="container">
          <div class="mad-gallery col-size-3">
            <div class="mad-gallery-item">
              <a href="{{ asset('assets/html/lemar/images/448x448_img3.jpg') }}" data-fancybox="gallery"><img src="{{ asset('assets/html/lemar/images/448x448_img3.jpg') }}" alt=""></a>
            </div>
            <div class="mad-gallery-item">
              <a href="{{ asset('assets/html/lemar/images/448x448_img4.jpg') }}" data-fancybox="gallery"><img src="{{ asset('assets/html/lemar/images/448x448_img4.jpg') }}" alt=""></a>
            </div>
            <div class="mad-gallery-item">
              <a href="{{ asset('assets/html/lemar/images/448x448_img5.jpg') }}" data-fancybox="gallery"><img src="{{ asset('assets/html/lemar/images/448x448_img5.jpg') }}" alt=""></a>
            </div>
            <div class="mad-gallery-item">
              <a href="{{ asset('assets/html/lemar/images/448x448_img6.jpg') }}" data-fancybox="gallery"><img src="{{ asset('assets/html/lemar/images/448x448_img6.jpg') }}" alt=""></a>
            </div>
            <div class="mad-gallery-item">
              <a href="{{ asset('assets/html/lemar/images/448x448_img7.jpg') }}" data-fancybox="gallery"><img src="{{ asset('assets/html/lemar/images/448x448_img7.jpg') }}" alt=""></a>
            </div>
            <div class="mad-gallery-item">
              <a href="{{ asset('assets/html/lemar/images/448x448_img8.jpg') }}" data-fancybox="gallery"><img src="{{ asset('assets/html/lemar/images/448x448_img8.jpg') }}" alt=""></a>
            </div>
            <div class="mad-gallery-item">
              <a href="{{ asset('assets/html/lemar/images/448x448_img9.jpg') }}" data-fancybox="gallery"><img src="{{ asset('assets/html/lemar/images/448x448_img9.jpg') }}" alt=""></a>
            </div>
            <div class="mad-gallery-item">
              <a href="{{ asset('assets/html/lemar/images/448x448_img10.jpg') }}" data-fancybox="gallery"><img src="{{ asset('assets/html/lemar/images/448x448_img10.jpg') }}" alt=""></a>
            </div>
            <div class="mad-gallery-item">
              <a href="{{ asset('assets/html/lemar/images/448x448_img11.jpg') }}" data-fancybox="gallery"><img src="{{ asset('assets/html/lemar/images/448x448_img11.jpg') }}" alt=""></a>
            </div>
          </div>
          <div class="align-center">
            <a href="#" class="btn">Load More</a>
          </div>
        </div>
      </div>

@endsection
