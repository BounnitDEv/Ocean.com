@extends('dashboard.layout.base')

@section('content')

      <div class="slim-mainpanel">
        <div class="container">
          <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">Produits</a></li>
              <li class="breadcrumb-item active" aria-current="page">Détails</li>
            </ol>
            <h6 class="slim-pagetitle">Détails du {{ $collection->title }}</h6>
          </div><!-- slim-pageheader -->

          <div class="section-wrapper mg-t-20">

            <div class="row">
              <div class="col-md-8">
                <label class="section-title">&nbsp;</label>
                <p class="mg-b-20 mg-sm-b-40">&nbsp;</p>
              </div>
              <div class="col-md-4">
                <div class="d-flex justify-content-end">
                  <a href="{{ route('dashboard.categories.index', ['id' => $collection->id]) }}" class="btn btn-outline-secondary bd-0">
                    <i class="fa fa-list mg-r-5"></i> 
                    <span> Liste</span>
                  </a>
                  <a href="{{ route('dashboard.categories.edit', ['id' => $collection->id]) }}" class="btn btn-outline-primary bd-0">
                    <i class="fa fa-magic mg-r-5"></i> 
                    <span> Metter a jour</span>
                  </a>
                  <a href="{{ route('dashboard.categories.delete', ['id' => $collection->id]) }}" class="btn btn-outline-danger bd-0">
                    <i class="fa fa-close mg-r-5"></i> 
                    <span> supprimer</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="form-layout form-layout-7">
              <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                  titre:
                </div><!-- col-4 -->
                <div class="col-7 col-sm-8">
                  <span>{{ $collection->title }}</span>
                </div><!-- col-8 -->
              </div><!-- row -->

              <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                  Image:
                </div><!-- col-4 -->
                <div class="col-7 col-sm-8">
                  @if($collection->cover)
                  <img src="{{ $collection->cover->url }}" width="400">
                  @else
                  <p>no image</p>
                  @endif
                </div><!-- col-8 -->
              </div><!-- row -->
              <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                  thumbnail:
                </div><!-- col-4 -->
                <div class="col-7 col-sm-8">
                  @if($collection->cover)
                  <img src="{{ $collection->cover->thumbnail_url }}" width="400">
                  @else
                  <p>no image</p>
                  @endif
                </div><!-- col-8 -->
              </div><!-- row -->
              @foreach($collection->products as $key => $product)
              <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                  product: {{ $product->title }}
                </div><!-- col-4 -->
                <div class="col-7 col-sm-8">
                  <img src="{{ $product->cover->thumbnail_url }}">
                </div><!-- col-8 -->
              </div><!-- row -->
              @endforeach

            </div><!-- form-layout -->
              <div class="form-layout-footer mg-t-30">

              </div>
          </div><!-- section-wrapper -->
          

        </div><!-- container -->

        @include('dashboard.component.copyright')
        
      </div><!-- slim-mainpanel -->
    </div><!-- slim-body -->
@endsection
