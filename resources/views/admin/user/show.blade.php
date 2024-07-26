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
            <h6 class="slim-pagetitle">Détails du {{ $user->name }}</h6>
          </div><!-- slim-pageheader -->

          <div class="section-wrapper mg-t-20">

            <div class="row">
              <div class="col-md-8">
                <label class="section-title">&nbsp;</label>
                <p class="mg-b-20 mg-sm-b-40">&nbsp;</p>
              </div>
              <div class="col-md-4">
                <div class="d-flex justify-content-end">
                  <a href="{{ route('admin.user.index', ['id' => $user->id]) }}" class="btn btn-outline-secondary bd-0">
                    <i class="fa fa-list mg-r-5"></i> 
                    <span> Liste</span>
                  </a>
                  
                  <a href="{{ route('admin.user.delete', ['id' => $user->id]) }}" class="btn btn-outline-danger bd-0">
                    <i class="fa fa-close mg-r-5"></i> 
                    <span> supprimer</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="form-layout form-layout-7">
              
              <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                  Nom :
                </div><!-- col-4 -->
                <div class="col-7 col-sm-8">
                  <span>{{ $user->first_name }}</span>
                </div><!-- col-8 -->
              </div><!-- row -->
              <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                  Prenom :
                </div><!-- col-4 -->
                <div class="col-7 col-sm-8">
                  <span>{{ $user->last_name }}</span>
                </div><!-- col-8 -->
              </div><!-- row -->
              <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                  Email :
                </div><!-- col-4 -->
                <div class="col-7 col-sm-8">
                  <span>{{ $user->email }}</span>
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
