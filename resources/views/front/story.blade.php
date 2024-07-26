@extends('front.layouts.base')

@section('title')  @endsection

@section('description')  @endsection
@section('image') @endsection
@section('link'){{ route('about')}} @endsection
 
@section('content')


    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark bg-fixed text-light" style="background-image: url({{asset('assets/img/story/5.webp')}});">
        <div class="container default-padding">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Story La Sicilia</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">About</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

     <!-- Start Gallery Area
    ============================================= -->
    <div class="gallery-area overflow-hidden default-padding">
        <!-- Shape -->
        <div class="fixed-shape">
            <img src="assets/img/shape/5.png" alt="Shape">
        </div>
        <!-- Shape -->
        
        <div class="container">
            <div class="case-items-area">
                <div class="masonary">
                    <div id="portfolio-grid" class="gallery-items colums-2">
                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/story/1.webp') }}" alt="Thumb">
                                    <a href="{{ asset('assets/img/story/1.webp') }}" class="item popup-gallery"><i class="fa fa-plus"></i></a>
                                </div>
                                
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/story/2.webp') }}" alt="Thumb">
                                    <a href="{{ asset('assets/img/story/2.webp') }}" class="item popup-gallery"><i class="fa fa-plus"></i></a>
                                </div>
                                
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/story/3.webp') }}" alt="Thumb">
                                    <a href="{{ asset('assets/img/story/3.webp') }}" class="item popup-gallery"><i class="fa fa-plus"></i></a>
                                </div>
                                
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/story/4.webp') }}" alt="Thumb">
                                    <a href="{{ asset('assets/img/story/4.webp') }}" class="item popup-gallery"><i class="fa fa-plus"></i></a>
                                </div>
                                
                            </div>
                        </div>
                        <!-- Single Item -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery Area -->

  
    @include('front.components.story')

    

   
     <!-- Start Contact 
    ============================================= -->
    <div class="contact-area default-padding">
        <div class="container-full">
            <div class="contact-items">
                <div class="row align-center">
                    <div class="col-lg-3 contact-info">
                        <ul>
                             <li>
                                <h4>Our Location</h4>
                                <span>22 Baker Street,<br> London, United Kingdom,<br> W1U 3BW</span>
                            </li>
                            <li>
                                <h4>Phone</h4>
                                <span>+44-20-7328-4499 <br>+99-34-8878-9989</span>
                            </li>
                            <li>
                                <h4>Email</h4>
                                <span>info@yourdomain.com<br>admin@yourdomain.com</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="form-content">
                            <h2>Leave a message</h2>
                            <form action="https://validthemes.net/site-template/farmi/assets/mail/contact.php" method="POST" class="contact-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group comments">
                                            <textarea class="form-control" id="comments" name="comments" placeholder="Please describe what you need."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit" name="submit" id="submit">
                                            Send Now
                                        </button>
                                    </div>
                                </div>
                                <!-- Alert Message -->
                                <div class="col-md-12 alert-notification">
                                    <div id="message" class="alert-msg"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981"></iframe>
        </div>
    </div>
    <!-- End Contact Area -->
    
@endsection