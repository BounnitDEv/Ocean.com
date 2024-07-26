@extends('dashboard.layout.base')

@section('content')

      <div class="slim-mainpanel">
        <div class="container">
          <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">Categories</a></li>
              <li class="breadcrumb-item active" aria-current="page">Détails</li>
            </ol>
            <h6 class="slim-pagetitle">Détails du {{ $post->title }}</h6>
          </div><!-- slim-pageheader -->

          <div class="section-wrapper mg-t-20">

            <div class="row">
              <div class="col-md-8">
                <label class="section-title">&nbsp;</label>
                <p class="mg-b-20 mg-sm-b-40">&nbsp;</p>
              </div>
              <div class="col-md-4">
                <div class="d-flex justify-content-end">
                  <a href="{{ route('admin.post.index', ['id' => $post->id]) }}" class="btn btn-outline-secondary bd-0">
                    <i class="fa fa-list mg-r-5"></i> 
                    <span> Liste</span>
                  </a>
                  <a href="{{ route('admin.post.edit', ['id' => $post->id]) }}" class="btn btn-outline-primary bd-0">
                    <i class="fa fa-magic mg-r-5"></i> 
                    <span> Metter a jour</span>
                  </a>
                  <a href="{{ route('admin.post.delete', ['id' => $post->id]) }}" class="btn btn-outline-danger bd-0">
                    <i class="fa fa-close mg-r-5"></i> 
                    <span> supprimer</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="form-layout form-layout-7">
              <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                  Image:
                </div><!-- col-4 -->
                <div class="col-7 col-sm-8">
                  @if($post->image)
                  <img src="{{ $post->image_url }}" width="200" height="200">
                  @else
                  <p>no image</p>
                  @endif
                </div><!-- col-8 -->
              </div><!-- row -->
              <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                  Titre :
                </div><!-- col-4 -->
                <div class="col-7 col-sm-8">
                  <span>{{ $post->title }}</span>
                </div><!-- col-8 -->
              </div><!-- row -->
              <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                  Description :
                </div><!-- col-4 -->
                <div class="col-7 col-sm-8">
                  <span>{!! $post->description !!}</span>
                </div><!-- col-8 -->
              </div><!-- row -->
              
              

            </div><!-- form-layout -->
              <div class="form-layout-footer mg-t-30">

              </div>
          </div><!-- section-wrapper -->
          

        </div><!-- container -->

        @include('dashboard.component.copyright')
        
      </div><!-- slim-mainpanel -->
    </div><!-- slim-body -->
@endsection
