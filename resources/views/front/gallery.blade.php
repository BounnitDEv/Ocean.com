@extends('front.layouts.base')

@section('title')  @endsection

@section('description')  @endsection
@section('image') @endsection
@section('link'){{ route('contact')}} @endsection

@section('content')

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark  text-light" style="background-image: url({{asset('assets/img/banner/3.webp')}});">
        <div class="container default-padding">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Gallery</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Gallery Area
    ============================================= -->
    <div class="gallery-area default-padding">
        <!-- Shape -->
        <div class="fixed-shape">
            <img src="assets/img/shape/5.png" alt="Shape">
        </div>
        <!-- Shape -->
        <div class="container">
            <div class="case-items-area">
                <div class="masonary">
                    <div id="portfolio-grid" class="gallery-items colums-3">
                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/gallery/1.webp') }}" alt="Thumb">
                                    <a href="{{ asset('assets/img/gallery/1.webp') }}" class="item popup-gallery"><i class="fa fa-plus"></i></a>
                                </div>
                                
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/gallery/2.webp') }}" alt="Thumb">
                                    <a href="{{ asset('assets/img/gallery/2.webp') }}" class="item popup-gallery"><i class="fa fa-plus"></i></a>
                                </div>
                                
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/gallery/3.webp') }}" alt="Thumb">
                                    <a href="{{ asset('assets/img/gallery/3.webp') }}" class="item popup-gallery"><i class="fa fa-plus"></i></a>
                                </div>
                                
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/gallery/4.webp') }}" alt="Thumb">
                                    <a href="{{ asset('assets/img/gallery/4.webp') }}" class="item popup-gallery"><i class="fa fa-plus"></i></a>
                                </div>
                                
                            </div>
                        </div>
                        <!-- Single Item -->

                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/gallery/5.webp') }}" alt="Thumb">
                                    <a href="{{ asset('assets/img/gallery/5.webp') }}" class="item popup-gallery"><i class="fa fa-plus"></i></a>
                                </div>
                                
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/gallery/6.webp') }}" alt="Thumb">
                                    <a href="{{ asset('assets/img/gallery/6.webp') }}" class="item popup-gallery"><i class="fa fa-plus"></i></a>
                                </div>
                                
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/gallery/7.webp') }}" alt="Thumb">
                                    <a href="{{ asset('assets/img/gallery/7.webp') }}" class="item popup-gallery"><i class="fa fa-plus"></i></a>
                                </div>
                                
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/gallery/8.webp') }}" alt="Thumb">
                                    <a href="{{ asset('assets/img/gallery/8.webp') }}" class="item popup-gallery"><i class="fa fa-plus"></i></a>
                                </div>
                                
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/gallery/9.webp') }}" alt="Thumb">
                                    <a href="{{ asset('assets/img/gallery/9.webp') }}" class="item popup-gallery"><i class="fa fa-plus"></i></a>
                                </div>
                                
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/gallery/10.webp') }}" alt="Thumb">
                                    <a href="{{ asset('assets/img/gallery/10.webp') }}" class="item popup-gallery"><i class="fa fa-plus"></i></a>
                                </div>
                                
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/gallery/11.webp') }}" alt="Thumb">
                                    <a href="{{ asset('assets/img/gallery/11.webp') }}" class="item popup-gallery"><i class="fa fa-plus"></i></a>
                                </div>
                                
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/gallery/12.webp') }}" alt="Thumb">
                                    <a href="{{ asset('assets/img/gallery/12.webp') }}" class="item popup-gallery"><i class="fa fa-plus"></i></a>
                                </div>
                                
                            </div>
                        </div>
                        <!-- End Single Item -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery Area -->

    

@endsection