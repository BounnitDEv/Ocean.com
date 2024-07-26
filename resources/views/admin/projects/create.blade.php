@extends('admin.layout.base')

@section('content')
    <div class="slim-mainpanel">
        <div class="container">
            <div class="section-wrapper mg-t-20">
                @include('admin.component.dashboard_error')
                <form action="{{ route('admin.project.store')}}" enctype="multipart/form-data"  method="post"> 
                    @csrf 
                    <div class="row">
                        <div class="col-lg-6">                                     
                            <div class="form-group">
                                <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">                                     
                            <div class="form-group">
                                <label class="form-control-label">Field: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="field" value="{{ old('field') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">                                     
                            <div class="form-group">
                                <label class="form-control-label">Client: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="client" value="{{ old('client') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">                                     
                            <div class="form-group">
                                <label class="form-control-label">Link: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="link" value="{{ old('link') }}">
                            </div>
                        </div>
                        <div class="col-lg-12">                                     
                            <div class="form-group">
                                <label class="form-control-label">Short description: <span class="tx-danger">*</span></label>
                                <textarea class="form-control" type="text" name="short_description" rows="3">{{ old('short_description') }}</textarea>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="">
                                <label class="form-control-label">Description: <span class="tx-danger">*</span></label>
                                <textarea class="editable tx-16 bd pd-30 tx-inverse" id="" name="description" rows="6"></textarea>
                            </div>
                        </div>     
                                                                      
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Image resolution = 900*450: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="file" name="image" >
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Cover resolution = 900*450: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="file" name="cover" >
                            </div>
                        </div>
                        
                    </div>
                    <button type="submit" class="btn btn-primary bd-0 mg-t-10"><i class="fa fa-plus mg-r-5"></i>Create</button>
                </form>
            </div><!-- section-wrapper -->
        </div>
    </div>
@endsection
@push('styles')

    <link href="{{ asset('dashboard/lib/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/lib/medium-editor/css/medium-editor.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/lib/medium-editor/css/default.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/lib/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/lib/jquery.steps/css/jquery.steps.css') }}" rel="stylesheet">

    <style type="text/css">

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
    <script src="{{ asset('dashboard/lib/medium-editor/js/medium-editor.js') }}"></script>
    <script src="{{ asset('dashboard/lib/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('dashboard/lib/jquery.steps/js/jquery.steps.js') }}"></script>
    <script src="{{ asset('dashboard/lib/parsleyjs/js/parsley.js') }}"></script>
   


    <script type="text/javascript">
      
        // Select2 by showing the search
        $('.select2-show-search').select2({
          minimumResultsForSearch: ''
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

      });

    </script>



@endpush


