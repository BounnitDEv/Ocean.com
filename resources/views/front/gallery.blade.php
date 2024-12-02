@extends('front.layouts.base')

@section('title')  @endsection

@section('description')  @endsection
@section('image') @endsection
@section('link'){{ route('contact')}} @endsection

@section('content')



      <!--================ Breadcrumb ================-->
      <div class="mad-breadcrumb with-bg" data-bg-image-src="{{ asset('assets/html/lemar/images/E061175D-8F82-47C4-8391-D8342C6F55B5.jpeg') }}">
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
              <a href="{{ asset('assets/html/lemar/images/6CC5B42B-9241-46CC-A3A5-F310455EE9DA (2).webp') }}" data-fancybox="gallery"><img src="{{ asset('assets/html/lemar/images/6CC5B42B-9241-46CC-A3A5-F310455EE9DA (2).webp') }}" alt=""></a>
            </div>
            <div class="mad-gallery-item">
              <a href="{{ asset('assets/html/lemar/images/7B514A41-3FA0-414B-9141-53F12062821F (2).webp') }}" data-fancybox="gallery"><img src="{{ asset('assets/html/lemar/images/7B514A41-3FA0-414B-9141-53F12062821F (2).webp') }}" alt=""></a>
            </div>
            <div class="mad-gallery-item">
              <a href="{{ asset('assets/html/lemar/images/6C63F599-E7D3-400A-97E2-6E754B1FA2DB (2).webp') }}" data-fancybox="gallery"><img src="{{ asset('assets/html/lemar/images/6C63F599-E7D3-400A-97E2-6E754B1FA2DB (2).webp') }}" alt=""></a>
            </div>
            <div class="mad-gallery-item">
              <a href="{{ asset('assets/html/lemar/images/586D1E86-EF29-4D25-8056-AF23C2EC0A40 (5).webp') }}" data-fancybox="gallery"><img src="{{ asset('assets/html/lemar/images/586D1E86-EF29-4D25-8056-AF23C2EC0A40 (5).webp') }}" alt=""></a>
            </div>
            <div class="mad-gallery-item">
              <a href="{{ asset('assets/html/lemar/images/6F3474F1-16A4-4178-BC0A-640EBB38FB8B.webp') }}" data-fancybox="gallery"><img src="{{ asset('assets/html/lemar/images/6F3474F1-16A4-4178-BC0A-640EBB38FB8B.webp') }}" alt=""></a>
            </div>
            <div class="mad-gallery-item">
              <a href="{{ asset('assets/html/lemar/images/50C396EF-405A-4565-A8BB-BE175945DD78 (2).webp') }}" data-fancybox="gallery"><img src="{{ asset('assets/html/lemar/images/50C396EF-405A-4565-A8BB-BE175945DD78 (2).webp') }}" alt=""></a>
            </div>
            <div class="mad-gallery-item">
              <a href="{{ asset('assets/html/lemar/images/F4AD71DC-3D6A-4FA5-ACE0-F134DF6DEF24 (1).webp') }}" data-fancybox="gallery"><img src="{{ asset('assets/html/lemar/images/F4AD71DC-3D6A-4FA5-ACE0-F134DF6DEF24 (1).webp') }}" alt=""></a>
            </div>
            <div class="mad-gallery-item">
              <a href="{{ asset('assets/html/lemar/images/BE2AE241-6D01-46C8-9D26-D08C38C1EB80 (2).webp') }}" data-fancybox="gallery"><img src="{{ asset('assets/html/lemar/images/BE2AE241-6D01-46C8-9D26-D08C38C1EB80 (2).webp') }}" alt=""></a>
            </div>
            <div class="mad-gallery-item">
              <a href="{{ asset('assets/html/lemar/images/3703F840-56DD-4079-A175-23135E18C52D (4).webp') }}" data-fancybox="gallery"><img src="{{ asset('assets/html/lemar/images/3703F840-56DD-4079-A175-23135E18C52D (4).webp') }}" alt=""></a>
            </div>
          </div>
          <div class="align-center">
            <a href="#" class="btn">Load More</a>
          </div>
        </div>
      </div>

@endsection
