@extends('admin.layout.base')

@section('content')

      <div class="slim-mainpanel">
        <div class="container">
          <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
              <li class="breadcrumb-item"><a href="#">admin</a></li>
              <li class="breadcrumb-item active" aria-current="page">Edit Post</li>
            </ol>
            <h6 class="slim-pagetitle">Edit  : {{ $post->title }}</h6>
          </div><!-- slim-pageheader -->

          <div class="section-wrapper">
            <form action="{{ route('admin.post.update', ['id' => $post->id]) }}" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-8">
                  <label class="section-title">{{-- Top Label Layout --}}</label>
                  <p class="mg-b-20 mg-sm-b-40">{{-- A form with a label on top of each form control. --}}</p>
                </div>
                {{-- <div class="col-md-4">
                  <div class="d-flex justify-content-end">
                    <div class="toggle-wrapper">
                      <div class="toggle toggle-modern indigo"></div>
                    </div>
                    <input type="checkbox" class="is_active" name="active" value="true" style="display: none;">
                  </div>
                </div> --}}
              </div>

              @include('admin.component.dashboard_error')
              @include('admin.component.notifications')

              <div class="form-layout">
                  @csrf
                  <div class="row mg-b-25">
                    
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Titre: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="title" placeholder="Enter le nom du Categorie" value="{{ old('title')?: $post->title }}">
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Subject: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="subject" placeholder="" value="{{ old('title')?: $post->subject }}">
                      </div>
                    </div><!-- col-4 -->
                    
                    
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label">Short Description: <span class="tx-danger">*</span></label>
                        <textarea class="form-control" id="" name="short_description" rows="3" value="">{{ old('short_description')?: $post->short_description }}</textarea>
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label">Description: <span class="tx-danger">*</span></label>
                        
                        <textarea class="editable1 tx-16 bd pd-30 tx-inverse" name="description" rows="6">{{ old('description')?: $post->description }}</textarea>
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-12">
                      <label class="form-control-label">Image: </label>
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="image">
                        <img src="{{ $post->image_url }}" width="100">
                        <label class="custom-file-label" for="image" value="{{ old('image')?: $post->image_url }}">Choisir une image</label>
                      </div><!-- custom-file -->
                    </div><!-- col -->

                    
                  </div><!-- row -->
                <div class="form-layout-footer d-flex justify-content-end">
                  <button type="submit" class="btn btn-outline-primary bd-0"><i class="fa fa-plus mg-r-5"></i> Enregistrer</button>
                </div><!-- form-layout-footer -->

              </div><!-- form-layout -->
            </form>
            <a href="{{ route('admin.post.index') }}"><i class="fa fa-reply mg-r-5"> Reteur</i></a>

          </div><!-- section-wrapper -->

        </div><!-- container -->

        @include('admin.component.copyright')
        
      </div><!-- slim-mainpanel -->
    </div><!-- slim-body -->
@endsection

@push('styles')
<link href="{{ asset('dashboard/lib/summernote/css/summernote-bs4.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/lib/medium-editor/css/medium-editor.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/lib/medium-editor/css/default.css') }}" rel="stylesheet">
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
        <script src="{{ asset('dashboard/lib/summernote/js/summernote-bs4.min.js') }}"></script>

    <script>
      $(document).ready(function() {
  $('.editable-programme').each(function() {
    new MediumEditor(this, {
      placeholder: {
        text: 'Enter description'
      },
      contentEditable: true
    });
  });
});
    </script>
    <script type="text/javascript">
      
        // Select2 by showing the search
        $('.select2-show-search').select2({
          minimumResultsForSearch: ''
        });

    </script>
    <script>
      $(function(){
        'use strict';

        // Inline editor
        var editor = new MediumEditor('.editable');

        // Summernote editor
        $('#summernote').summernote({
          height: 150,
          tooltip: false
        })
      });
    </script>
    <script type="text/javascript">
      
      $(function(){
        'use strict';

        // Inline editor
        var editor = new MediumEditor('.editable1', {
                placeholder: {
                    text: 'Entrez la description'
                },
                contentEditable:true,
        });
      });

    </script>

@endpush