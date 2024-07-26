@extends('admin.layout.base')

@section('content')

      <div class="slim-mainpanel">
        <div class="container">
          <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Admin</li>
            </ol>
            <h6 class="slim-pagetitle">Admin</h6>
          </div><!-- slim-pageheader -->




        </div><!-- container -->

        @include('admin.component.copyright')

      </div><!-- slim-mainpanel -->

@endsection


@push('styles')

    <link href="{{ asset('dashboard/lib/morris.js/css/morris.css') }}" rel="stylesheet">
    
@endpush


@push('scripts')

    <script src="{{ asset('dashboard/lib/morris.js/js/morris.js') }}"></script>
    {{-- <script src="../lib/raphael/js/raphael.min.js"></script> --}}
    <script src="{{ asset('dashboard/lib/raphael/js/raphael.min.js') }}"></script>

    <script type="text/javascript">
      
      $(function(){
        'use strict';


      });

    </script>

@endpush
