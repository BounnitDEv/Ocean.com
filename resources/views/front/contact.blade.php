@extends('front.layouts.base')

@section('title')  @endsection

@section('description')  @endsection
@section('image') @endsection
@section('link'){{ route('contact')}} @endsection

@section('content')

<div class="content-wrapper">

<div class="breadcrumb-wrap bg-f br-1">
<div class="overlay bg-black op-8"></div>
<div class="container">
<div class="row">
<div class="col-xl-12">
<div class="breadcrumb-title">
<h2>Contact Us</h2>
<ul class="breadcrumb-menu list-style">
<li><a href="/">Home </a></li>
<li>Contact Us</li>
</ul>
</div>
</div>
</div>
</div>
</div>

<section class="contact-wrap pt-100 pb-100">
<div class="container">
<div class="row pb-75 justify-content-center">
<div class="col-lg-4 col-md-6">
<div class="contact-box">
<div class="contact-icon">
<i class="flaticon-telephone"></i>
</div>
<div class="contact-info">
<h5>Téléphone</h5>
<p>Nous serons heureux de vous aider. Appelez-nous, nous travaillerons ensemble.</p>
<a href="#" class="link style1">0678-099798</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="contact-box">
<div class="contact-icon">
<i class="flaticon-envelope"></i>
</div>
<div class="contact-info">
<h5>Email</h5>
<p>Nous serons heureux de vous aider. Envoyez-nous un email, nous travaillerons ensemble.</p>
<a href="#" class="link style1">contact.coachsamira@gmail.com</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="contact-box">
<div class="contact-icon">
<i class="flaticon-maps-and-flags"></i>
</div>
<div class="contact-info">
<h5>Addresse</h5>
<p>166, <br> Bd Abdelkrim El Khattabi, Appt N°8, <br> Gueliz, Marrakech</p>
<a href="https://www.google.com/maps/place/Miramas/@31.636805,-8.0219524,17z/data=!4m10!1m2!2m1!1sBd+Abdelkrim+El+Khattabi,+Appt+N%C2%B08,+Gueliz,+Marrakech!3m6!1s0xdafee974bacac0b:0x30369be9a9ddbc93!8m2!3d31.6368005!4d-8.0193775!15sCjZCZCBBYmRlbGtyaW0gRWwgS2hhdHRhYmksIEFwcHQgTsKwOCwgR3VlbGl6LCBNYXJyYWtlY2iSARJhcGFydG1lbnRfYnVpbGRpbmfgAQA!16s%2Fg%2F1w9y2ftn?entry=ttu" class="link style1">View On Google map</a>
</div>
</div>
</div>
</div>
<div class="row ">
<div class="section-title style1 mb-40 text-center">
<h2>Contacter nous!</h2>
<p>Nous sommes ici pour vous accompagner dans votre démarche. Que vous ayez des questions, besoin de plus d'informations ou souhaitiez planifier une séance, n'hésitez pas à nous contacter. Votre bien-être est notre priorité et nous avons hâte d'échanger avec vous.</p>
</div>
<div class="col-lg-10 offset-lg-1">
<div class="contact-form">
<form id="contactForm">
<div class="row">
<div class="col-lg-6">
<div class="form-group mb-4">
<input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Votre Nom">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-6">
<div class="form-group mb-4">
<input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Votre Email">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-6">
<div class="form-group mb-4">
<input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Votre Téléphone">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-6">
<div class="form-group mb-4">
<input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Votre Sujet">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12">
<div class="form-group mb-4">
<textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Écrivez votre message"></textarea>
<div class="help-block with-errors" aria-placeholder="Your Message"></div>
</div>
</div>
<div class="col-lg-12">
<div class="form-check ps-0">
<div class="form-group">
<div class="form-check">
<input name="gridCheck" value="I agree to the terms and privacy policy." class="form-check-input" type="checkbox" id="gridCheck" required>
<label class="form-check-label" for="gridCheck">
J'accepte la <a href="terms-conditions.html" class="text-primary">politique de confidentialité</a>
</label>
<div class="help-block with-errors gridCheck-error"></div>
</div>
</div>
</div>
</div>
<div class="col-lg-12">
<button type="submit" class="btn style1 w-100">
<span class="border-style">Envoyez un message</span>
</button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>
<div class="comp-map" id="com-map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3397.0257832026755!2d-8.016650024322889!3d31.633144429762552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafee917f04f6d3%3A0xccab21d6c0fa41b2!2sn%208%2C%20166%20Bd%20Abdelkrim%20Al%20Khattabi%2C%20Marrakech%2040000!5e0!3m2!1sfr!2sma!4v1722537728549!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>

</div>


@endsection
