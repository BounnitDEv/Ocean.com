@extends('front.layouts.base')

@section('title')@endsection
@section('description')@endsection
@section('image')@endsection
@section('link'){{ route('home') }}@endsection

@section('content')
        

        <div class="section-bg-video grunge-border">
            <div class="bg-overlay transparent-dark"></div>
            <div class="videobox">
                <video autoplay loop muted poster="{{ asset('assets/images/home/4.webp')}}">
                    <source src="{{ asset('assets/video/2.mp4')}}" type="video/mp4">
                </video>
            </div>
            <div class="container content overlay-content white text-center" data-anima="fade-top" data-timeline="asc" data-time="1000">
                <hr class="space" />
                <hr class="space" />
                 <img class="logo-default scroll-hide" src="{{ asset('assets/images/logo/logo-white.png') }}" alt="logo" / width="210">
                 {{-- <hr class="space s" /> --}}
                <h1 class="text-bold text-xl anima">FROMAGERIE LA SICILIA</h1>
                <hr class="space xs" />
                <p class="anima">
                    Food, in the end, in our own tradition, is something holy. It's not about nutrients and calories.<br />
                    It's about sharing. It's about honesty. It's about identity.
                </p>
                <hr class="space s" />
                <a href="#" class="btn btn-border btn-sm anima anima-fade-bottom">VIEW THE MENU</a>
                <hr class="space m" />
                
            </div>
        </div>



        <div class="section-empty text-center" style="background-image:url(../images/bg-17.jpg)">
            <div class="container content">
                <div class="row">
                    <div class="col-md-8 col-center">
                        <div class="title-base">
                            <hr />
                            <h2>What we offer</h2>
                            <p>Our list is constantly growing</p>
                        </div>
                        <p>
                            Lorem ipsum dolor amet consectetur adipiscing elitsed do eiusm aliqua.<br />
                            Utenim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exa comodo consequato aute irure dolor in reprehenderit
                            in voluptate velit cilldolore fugiat nullapariature malesione mertolo caridllio los pollos merenda dello studente latino imperiale.
                        </p>
                        <hr class="space xs" />
                       
                    </div>
                </div>
                <img src="{{asset('assets/images/sign-3.png')}}" alt="" />
                <hr class="space m" />

                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.youtube.com/embed/T3te3PHuDIQ?rel=0&si=INydnET33uiDFJJJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="width: 100%; height: 640px;"></iframe>

                </div>
           
            </div>
        </div>



{{-- background-image:url({{asset('assets/images/bg-retro.jpg')}}) --}}
        <div class="section-empty" >
            <div class="content" style="padding-top: 0px;">
                <div class="grid-list">
                    <div class="grid-box row">
                        <div class="title-base">
                    
                            <p>Découvrez ou redécouvrez les saveurs qui racontent,<br>
                            chacune à leur manière, l'histoire de la gastronomie italienne.</p>
                            <h2>Recettes LA sicilia</h2>
                        </div>
                        <hr class="space m" />
                 
                        <div class="grid-item col-md-3">
                            <div class="img-box adv-img adv-img-half-content" data-anima="fade-left" data-trigger="hover">
                                <i class="fa fa-camera-retro anima"></i>
                                <a href="" class="img-box lightbox anima-scale-up anima">
                                    <img src="{{ asset('assets/images/img/recettes/1.webp')}}" alt="" />
                                </a>
                                <div class="caption">
                                    <h2>The Perfect Burger</h2>
                                    
                                    
                                    <p class="sub">   </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item col-md-3">
                            <div class="img-box adv-img adv-img-half-content" data-anima="fade-left" data-trigger="hover">
                                <i class="fa fa-camera-retro anima"></i>
                                <a href="" class="img-box lightbox anima-scale-up anima">
                                    <img src="{{ asset('assets/images/img/recettes/2.webp')}}" alt="" />
                                </a>
                                <div class="caption">
                                    <h2>Cheese Toast Deluxe</h2>
                                    
                                    
                                    <p class="sub">   </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item col-md-3">
                            <div class="img-box adv-img adv-img-half-content" data-anima="fade-left" data-trigger="hover">
                                <i class="fa fa-camera-retro anima"></i>
                                <a href="" class="img-box lightbox anima-scale-up anima">
                                    <img src="{{ asset('assets/images/img/recettes/3.webp')}}" alt="" />
                                </a>
                                <div class="caption">
                                    <h2>Summer Yellow Snack</h2>
                                    
                                    
                                    <p class="sub">   </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item col-md-3">
                            <div class="img-box adv-img adv-img-half-content" data-anima="fade-left" data-trigger="hover">
                                <i class="fa fa-camera-retro anima"></i>
                                <a href="" class="img-box lightbox anima-scale-up anima">
                                    <img src="{{ asset('assets/images/img/recettes/8.webp')}}" alt="" />
                                </a>
                                <div class="caption">
                                    <h2>Cheese Toast Big</h2>
                                    
                                    
                                    <p class="sub">   </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item col-md-3">
                            <div class="img-box adv-img adv-img-half-content" data-anima="fade-left" data-trigger="hover">
                                <i class="fa fa-camera-retro anima"></i>
                                <a href="" class="img-box lightbox anima-scale-up anima">
                                    <img src="{{ asset('assets/images/img/recettes/4.webp')}}" alt="" />
                                </a>
                                <div class="caption">
                                    <h2>Cheese Burger Deluxe</h2>
                                    
                                    
                                    <p class="sub">   </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item col-md-3">
                            <div class="img-box adv-img adv-img-half-content" data-anima="fade-left" data-trigger="hover">
                                <i class="fa fa-camera-retro anima"></i>
                                <a href="" class="img-box lightbox anima-scale-up anima">
                                    <img src="{{ asset('assets/images/img/recettes/5.webp')}}" alt="" />
                                </a>
                                <div class="caption">
                                    <h2>Salad Piadina Eggs</h2>
                                    
                                    <p class="sub">   </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item col-md-3">
                            <div class="img-box adv-img adv-img-half-content" data-anima="fade-left" data-trigger="hover">
                                <i class="fa fa-camera-retro anima"></i>
                                <a href="" class="img-box lightbox anima-scale-up anima">
                                    <img src="{{ asset('assets/images/img/recettes/6.webp')}}" alt="" />
                                </a>
                                <div class="caption">
                                    <h2>Mexican Hot Piadina</h2>
                                    
                                    
                                    <p class="sub">   </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item col-md-3">
                            <div class="img-box adv-img adv-img-half-content" data-anima="fade-left" data-trigger="hover">
                                <i class="fa fa-camera-retro anima"></i>
                                <a href="" class="img-box lightbox anima-scale-up anima">
                                    <img src="{{ asset('assets/images/img/recettes/7.webp')}}" alt="" />
                                </a>
                                <div class="caption">
                                    <h2>Italian Bruschette</h2>
                                    
                                    
                                    <p class="sub">   </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




     
   
        
        <div class="section-bg-image" style="background-color:#fff;background-image:url({{asset('assets/images/home/wide.jpg')}})">
            <div class="container content" style="padding-top: 0px;">

                <div class="title-base">
                    
                    <p>Découvrez ou redécouvrez les saveurs qui racontent,<br>
                    chacune à leur manière, l'histoire de la gastronomie italienne.</p>
                    <h2>Porduits LA sicilia</h2>
                </div>
                <div class="row vertical-row">
                    <div class="col-md-4" data-anima="fade-left">
                        <img src="{{ asset('assets/images/img/products/1.webp') }}" alt="" />
                    </div>
                    <div class="col-md-4">
                        <div class="title-base text-left">
                            <hr />
                            <h2>Mega Fish Burger Deluxe</h2>
                            <p>Recette La Sicilia</p>
                        </div>
                        <p class="progress-label">Carnivorous</p>
                        <div class="progress">
                            <div class="progress-bar" data-progress="75">
                                <span><span>75%</span></span>
                            </div>
                        </div>
                        <hr class="space m" />
                        <p class="progress-label">Vegetarian</p>
                        <div class="progress">
                            <div class="progress-bar " data-progress="35">
                                <span><span>35%</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <hr class="space m" />
                        <p>
                            Tincidunt integer eu augue augue nunc elit dolor,
                            luctus placerat scelerisque euismod, iaculis eu lacus nunc mi elit, vehicula ut laoreet ac, aliquam sit amet justo nunc tempor, metus vel.
                            Tincidunt integer eu augue augue nunc elit dolor luctus placerat scelerisque euismod, iaculis eu lacus nunc mi elite sartonetro permo.
                        </p>
                        <a href="#" class="btn btn-sm btn-border">Je découvre</a>
                    </div>
                </div>
                <hr class="space" />
                <div class="row vertical-row">
                    <div class="col-md-4">
                        <div class="title-base text-left">
                            <hr />
                            <h2>Double Cheese Burger</h2>
                            <p>Explosion of great taste</p>
                        </div>
                        <p class="progress-label">Carnivorous</p>
                        <div class="progress">
                            <div class="progress-bar" data-progress="60">
                                <span><span>60%</span></span>
                            </div>
                        </div>
                        <hr class="space m" />
                        <p class="progress-label">Vegetarian</p>
                        <div class="progress">
                            <div class="progress-bar " data-progress="40">
                                <span><span>40%</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <hr class="space m" />
                        <p>
                            Tincidunt integer eu augue augue nunc elit dolor,
                            luctus placerat scelerisque euismod, iaculis eu lacus nunc mi elit, vehicula ut laoreet ac, aliquam sit amet justo nunc tempor, metus vel.
                            Tincidunt integer eu augue augue nunc elit dolor luctus placerat scelerisque euismod, iaculis eu lacus nunc mi elite milleporteno.
                        </p>
                        <a href="#" class="btn btn-sm btn-border">Je découvre</a>
                    </div>
                    <div class="col-md-4" data-anima="fade-right">
                        <img src="{{ asset('assets/images/img/products/2.webp') }}" alt="" />
                    </div>
                </div>
                <hr class="space" />
                <div class="row vertical-row">

                    <div class="col-md-4" data-anima="fade-left">
                        <img src="{{ asset('assets/images/img/products/3.webp') }}" alt="" />
                    </div>
                    <div class="col-md-4">
                        <div class="title-base text-left">
                            <hr />
                            <h2>Mega Fish Burger Deluxe</h2>
                            <p>Recette La Sicilia</p>
                        </div>
                        <p class="progress-label">Carnivorous</p>
                        <div class="progress">
                            <div class="progress-bar" data-progress="75">
                                <span><span>75%</span></span>
                            </div>
                        </div>
                        <hr class="space m" />
                        <p class="progress-label">Vegetarian</p>
                        <div class="progress">
                            <div class="progress-bar " data-progress="35">
                                <span><span>35%</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <hr class="space m" />
                        <p>
                            Tincidunt integer eu augue augue nunc elit dolor,
                            luctus placerat scelerisque euismod, iaculis eu lacus nunc mi elit, vehicula ut laoreet ac, aliquam sit amet justo nunc tempor, metus vel.
                            Tincidunt integer eu augue augue nunc elit dolor luctus placerat scelerisque euismod, iaculis eu lacus nunc mi elite sartonetro permo.
                        </p>
                        <a href="#" class="btn btn-sm btn-border">Je découvre</a>
                    </div>
                </div>
                <hr class="space" />
                <div class="row vertical-row">
                    <div class="col-md-4">
                        <div class="title-base text-left">
                            <hr />
                            <h2>Double Cheese Burger</h2>
                            <p>Explosion of great taste</p>
                        </div>
                        <p class="progress-label">Carnivorous</p>
                        <div class="progress">
                            <div class="progress-bar" data-progress="60">
                                <span><span>60%</span></span>
                            </div>
                        </div>
                        <hr class="space m" />
                        <p class="progress-label">Vegetarian</p>
                        <div class="progress">
                            <div class="progress-bar " data-progress="40">
                                <span><span>40%</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <hr class="space m" />
                        <p>
                            Tincidunt integer eu augue augue nunc elit dolor,
                            luctus placerat scelerisque euismod, iaculis eu lacus nunc mi elit, vehicula ut laoreet ac, aliquam sit amet justo nunc tempor, metus vel.
                            Tincidunt integer eu augue augue nunc elit dolor luctus placerat scelerisque euismod, iaculis eu lacus nunc mi elite milleporteno.
                        </p>
                        <a href="#" class="btn btn-sm btn-border">Je découvre</a>
                    </div>
                    <div class="col-md-4" data-anima="fade-right">
                        <img src="{{ asset('assets/images/img/products/4.webp') }}" alt="" />
                    </div>
                </div>
                <hr class="space" />
                <div class="text-center">
                    <a href="{{ route('nos-produits')}}" class="btn btn-sm">Découvrez tous nos produits</a>
                </div>
            </div>
        </div>
      
        {{-- @include('front.components.gallery') --}}
       
        <div class="section-empty">
            <div class="container content">
                <div class="row">
                    <div class="col-md-1 text-center-sm">
                        <hr class="space xs hidden-sm" />
                        <img src="{{ asset('assets/images/clock.gif') }}" alt="" />
                    </div>
                    <div class="col-md-2 col-sm-12 text-center-sm">
                        <hr class="space xs hidden-sm" />
                        <div class="title-base text-left text-center-sm">
                            <hr />
                            <h2>Hours</h2>
                            <p>Our open schedules</p>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12 text-center-sm">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Day</th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thurdsay</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>Sunday</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Lunch</th>
                                    <td>11am - 15pm</td>
                                    <td>11am - 15pm</td>
                                    <td>11am - 15pm</td>
                                    <td>11am - 15pm</td>
                                    <td>11am - 15pm</td>
                                    <td>11am - 15pm</td>
                                    <td>11am - 15pm</td>
                                </tr>
                                <tr>
                                    <th>Dinner</th>
                                    <td>Closed</td>
                                    <td>18pm - 23pm</td>
                                    <td>18pm - 23pm</td>
                                    <td>18pm - 23pm</td>
                                    <td>18pm - 23pm</td>
                                    <td>18pm - 23pm</td>
                                    <td>18pm - 23pm</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    



@endsection

@push('style')
<style type="text/css">
    /* Responsive video container */
.embed-responsive {
    position: relative;
    display: block;
    width: 100%;
    padding: 0;
    overflow: hidden;
    padding-top: 56.25%; /* 16:9 aspect ratio */
}

.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object,
.embed-responsive video {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    height: 100%;
    width: 100%;
    border: 0;
}

</style>
@endpush
@push('schema')
    

@endpush
