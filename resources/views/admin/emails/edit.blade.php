@extends('dashboard.layout.base')

@section('content')

      <div class="slim-mainpanel">
        <div class="container">
          <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">Collection</a></li>
              <li class="breadcrumb-item active" aria-current="page">Modifier la Collection</li>
            </ol>
            <h6 class="slim-pagetitle">Modifier la Collection</h6>
          </div><!-- slim-pageheader -->

          <div class="section-wrapper">
            <form action="{{ route('dashboard.collections.store') }}" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-8">
                  <label class="section-title">{{-- Top Label Layout --}}</label>
                  <p class="mg-b-20 mg-sm-b-40">{{-- A form with a label on top of each form control. --}}</p>
                </div>
                <div class="col-md-4">
                  <div class="d-flex justify-content-end">
                    <div class="toggle-wrapper">
                      <div class="toggle toggle-modern indigo"></div>
                    </div>
                    <input type="checkbox" class="is_active" name="active" value="true" style="display: none;">
                  </div>
                </div>
              </div>

              @include('dashboard.component.dashboard_error')
              @include('dashboard.component.notifications')

              <div class="form-layout">
                  @csrf
                  <div class="row mg-b-25">
                    <div class="col-lg-8">
                      <div class="form-group">
                        <label class="form-control-label">Titre: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="title" placeholder="Enter le titre du collection" value="{{ old('title')?: $collection->title }}">
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                      <label class="form-control-label">Image: </label>
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="image">
                        <label class="custom-file-label" for="image" value="{{ old('image') }}">Choisir une image</label>
                      </div><!-- custom-file -->
                    </div><!-- col -->
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Slogan: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="slogan" placeholder="Enter le slogan du collection" value="{{ old('slogan')?: $collection->slogan }}">
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Promo: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="promo" placeholder="Enter le promo du collection" value="{{ old('promo')?: $collection->promo }}">
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Produits: <span class="tx-danger">*</span></label>
                        <select class="form-control select2 select2-show-search" data-placeholder="Choisir Les Produits de cette Collection" name="products[]" multiple>
                          <option label="Choisir La categorie mére"></option>
                          @foreach($products as $product)
                          <option value="{{ $product->id }}">{{ $product->title }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div><!-- col-4 -->
                  </div><!-- row -->
                <div class="form-layout-footer d-flex justify-content-end">
                  <button class="btn btn-outline-secondary bd-0 mx-1"><i class="fa fa-reply mg-r-5"></i> Reteur</button>
                  <button type="submit" class="btn btn-outline-primary bd-0"><i class="fa fa-plus mg-r-5"></i> Enregistrer</button>
                </div><!-- form-layout-footer -->

              </div><!-- form-layout -->
            </form>

          </div><!-- section-wrapper -->

        </div><!-- container -->

        @include('dashboard.component.copyright')
        
      </div><!-- slim-mainpanel -->
    </div><!-- slim-body -->
@endsection

@push('styles')

    <link href="{{ asset('dashboard/lib/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/lib/jquery-toggles/css/toggles-full.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/lib/medium-editor/css/medium-editor.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/lib/medium-editor/css/default.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/lib/select2/css/select2.min.css') }}" rel="stylesheet">

    <style type="text/css">
      
      .toggle-modern.indigo .toggle-on.active {
          background-color: #1b84e7 !important;
      }

      .toggle-modern.indigo .toggle-on.active + .toggle-blob {
          border: 3px solid #1b84e7 !important;
      }

      .toggle-wrapper {
        width: unset !important; 
      }

      .editabl-wrapper textarea {
        display: none;
      }

      .bootstrap-tagsinput {
          border-radius: 0;
      }

    </style>

@endpush

@push('scripts')

    <script src="{{ asset('dashboard/lib/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"></script>
    <script src="{{ asset('dashboard/lib/jquery-toggles/js/toggles.min.js') }}"></script>
    <script src="{{ asset('dashboard/lib/medium-editor/js/medium-editor.js') }}"></script>
    <script src="{{ asset('dashboard/lib/select2/js/select2.full.min.js') }}"></script>

    <script type="text/javascript">
      
      $(function(){
        'use strict'

        // Toggles
        $('.toggle').toggles({
          on: true,
          height: 32,
          checkbox: '.is_active',
          width: 90,
          text: {
            on: 'activer',
            off: 'desactiver'
          }
        });
        

        $('.toggle').on('toggle', function(e, active) {
          if (active) {
            $('.is_active').val('true')
          } else {
            $('.is_active').val('false')
          }
        });

      });


    </script>

    <script type="text/javascript">
      
      $(function(){
        'use strict';

        // Inline editor
        var editor = new MediumEditor('.editable', {
                placeholder: {
                    text: 'Entrez la description'
                },
                contentEditable:true,
        });

        // editor.subscribe('editableInput', function (event, editable) {
        //     $('.description').val($('.editable').html())
        // });


      });

    </script>

    <script type="text/javascript">
      
        // Select2 by showing the search
        $('.select2-show-search').select2({
          minimumResultsForSearch: ''
        });

    </script>

@endpush