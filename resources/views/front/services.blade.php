@extends('front.layouts.base')

@section('title')@endsection
@section('description')@endsection
@section('image')@endsection
@section('link'){{ route('home') }}@endsection

@section('content')


<div class="content-wrapper">

<div class="breadcrumb-wrap bg-f br-1">
<div class="overlay bg-black op-8"></div>
<div class="container">
<div class="row">
<div class="col-xl-12">
<div class="breadcrumb-title">
<h2>Our Service</h2>
<ul class="breadcrumb-menu list-style">
<li><a href="/">Home </a></li>
<li>Services</li>
</ul>
</div>
</div>
</div>
</div>
</div>

</div>


<section class="service-wrap pt-100 pb-75 bg-albastor">
<img src="assets/img/services/service-shape-1.png" alt="Image" class="service-shape-1 lg-none">
<img src="assets/img/services/service-shape-2.png" alt="Image" class="service-shape-2 lg-none">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-6">
<div class="service-card style1">
<span class="service-icon">
<i class="flaticon-brain"></i>
</span>
<h3 class="service-title"><a href="service-details.html">Depression Therapy</a></h3>
<p>Lorem ipsum dolor sit asetur dor adipcing elit amet seddo it eiusmod tempor lorem dolorin amet sit dolore out slum amet.</p>
<a href="service-details.html" class="btn style1">Learn More</a>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="service-card style1">
<span class="service-icon">
<i class="flaticon-individual"></i>
</span>
<h3 class="service-title"><a href="service-details.html">Individual Therapy</a></h3>
<p>Lorem ipsum dolor sit asetur dor adipcing elit amet seddo it eiusmod tempor lorem dolorin amet sit dolore out slum amet.</p>
<a href="service-details.html" class="btn style1">Learn More</a>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="service-card style1">
<span class="service-icon">
<i class="flaticon-dating"></i>
</span>
<h3 class="service-title"><a href="service-details.html">Couples Therapy</a></h3>
<p>Lorem ipsum dolor sit amsectetur adipcing elit, seddo eiusmod tempor incididunt dolore. </p>
<a href="service-details.html" class="btn style1">Learn More</a>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="service-card style1">
<span class="service-icon">
<i class="flaticon-boy"></i>
</span>
<h3 class="service-title"><a href="service-details.html">Children Therapy</a></h3>
<p>Lorem ipsum dolor sit asetur dor adipcing elit amet seddo it eiusmod tempor lorem dolorin amet sit dolore out slum amet.</p>
<a href="service-details.html" class="btn style1">Learn More</a>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="service-card style1">
<span class="service-icon">
<i class="flaticon-brain-1"></i>
</span>
<h3 class="service-title"><a href="service-details.html">Anti-stress Therapy</a></h3>
<p>Lorem ipsum dolor sit asetur dor adipcing elit amet seddo it eiusmod tempor lorem dolorin amet sit dolore out slum amet.</p>
<a href="service-details.html" class="btn style1">Learn More</a>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="service-card style1">
<span class="service-icon">
<i class="flaticon-psychology"></i>
</span>
<h3 class="service-title"><a href="service-details.html">Post-Divorse Therapy</a></h3>
<p>Lorem ipsum dolor sit asetur dor adipcing elit amet seddo it eiusmod tempor lorem dolorin amet sit dolore out slum amet.</p>
<a href="service-details.html" class="btn style1">Learn More</a>
</div>
</div>
</div>
</div>
</section>


<section class="session-wrap ptb-100">
<img src="assets/img/session/session-shape-1.png" alt="Iamge" class="session-shape-1 lg-none moveHorizontal">
<img src="assets/img/session/session-shape-2.png" alt="Iamge" class="session-shape-2 lg-none">
<div class="container">
<div class="row gx-5 align-items-center">
<div class="col-lg-6">
<div class="session-content">
<div class="content-title">
<span>Online Session</span>
<h2>Get A Counselling Right Now</h2>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. Quis ipsupendisse ultrices gravida. Risus commodo viverra dolor amet sit.</p>
<p>Our clinic largest private mental health partnership, with a carselected nationwide team of Psychiatrists, Psychologists and Psychotherapists We only work with highly experienced sit lorem private mental.</p>
<a href="appointment.html" class="btn style1">Get Now</a>
</div>
</div>
<div class="col-lg-6">
<div class="session-img style1">
<img src="assets/img/session/session-img-1.png" alt="Image">
</div>
</div>
</div>
</div>
</section>




@endsection
