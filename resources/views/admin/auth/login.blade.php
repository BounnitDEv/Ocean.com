<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Slim">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/slim/img/slim-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/slim">
    <meta property="og:title" content="Slim">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/slim/img/slim-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/slim/img/slim-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Dashboard Login</title>

    <!-- Vendor css -->
    <link href="{{ asset('dashboard/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/slim.css') }}">

  </head>
  <body>

    <div class="signin-wrapper">

      <div class="signin-box">
        <h2 class="slim-logo">
            <img src="{{ asset('assets/img/anfto1.png') }}"  style="max-height: 50px;" alt="" class="logo_sticky">
        </h2>
        <h2 class="signin-title-primary">Bonjour!</h2>
        <p></p>
        <p>
          
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
          
        </p>
        <p>
          
@if (Session::has('error'))
    <div class="alert alert-danger">
        {{ Session::get('error') }}
    </div>
@endif
          
        </p>
        <form action="{{ route('admin.login_post') }}" method="post">
          @csrf
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Enter votre email" value="{{ old('email') }}">
          </div><!-- form-group -->
          <div class="form-group mg-b-50">
            <input type="password" name="password" class="form-control" placeholder="Enter vote mot de passe">
          </div><!-- form-group -->
          <button class="btn btn-primary btn-block btn-signin">Login</button>
        </form>

        {{-- <p class="mg-b-0">Don't have an account? <a href="page-signup.html">Sign Up</a></p> --}}
      </div><!-- signin-box -->

    </div><!-- signin-wrapper -->

    <script src="{{ asset('dashboard/lib/jquery/js/jquery.js') }}"></script>
    <script src="{{ asset('dashboard/lib/popper.js/js/popper.js') }}"></script>
    <script src="{{ asset('dashboard/lib/bootstrap/js/bootstrap.js') }}"></script>

    <script src="{{ asset('dashboard/js/slim.js') }}"></script>

  </body>
</html>
