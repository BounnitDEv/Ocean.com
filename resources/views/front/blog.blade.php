@extends('front.layouts.base')

@section('title')Freelancers Blog - By Maroc Freelance @endsection

@section('description')Explore insights and tips on freelancing from Maroc Freelance's blog. Discover valuable resources and expert advice for navigating the world of freelancing. @endsection
@section('image') {{asset('assets/images/me.webp')}} @endsection
@section('link') {{ route('blog') }} @endsection

@section('content')


    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark-hard bg-fixed text-light" style="background-image: url({{asset('assets/img/banner/9.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>La Sicilia Blog</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area full-blog blog-standard full-blog default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <div class="blog-content col-lg-10 offset-lg-1 col-md-12">
                        <div class="blog-item-box">
                            @foreach($posts as $post)
                                <!-- Single Item -->
                                <div class="single-item">
                                    <div class="item wow fadeInUp">
                                        <div class="thumb">
                                            <img src="{{ $post->image_url }}" alt="Thumb">
                                            <div class="date">January 25, 2021</div>
                                        </div>
                                        <div class="info">
                                            <div class="meta">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-user"></i> John Doe</a></li>
                                                    <li><a href="#"><i class="fas fa-comments"></i> 18 Comments</a></li>
                                                </ul>
                                            </div>
                                            <h3>
                                                <a href="blog-single-with-sidebar.html">Discovery incommode earnestly no he commanded</a>
                                            </h3>
                                            <p>
                                                Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy. 
                                            </p>
                                            <a class="btn circle btn-gray border btn-md" href="blog-single-with-sidebar.html">Discover More</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                            @endforeach
                        </div>
                        
                        <!-- Pagination -->
                        <div class="row">
                            <div class="col-md-12 pagi-area text-center">
                                <nav aria-label="navigation">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

           

@endsection