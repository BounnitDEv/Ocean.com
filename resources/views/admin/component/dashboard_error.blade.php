@if ($errors->any())
    @foreach ($errors->all() as $error)
		<div class="alert alert-danger" role="alert">
	      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	        <span aria-hidden="true"><i class="fa fa-close mg-r-5"></i></span>
	      </button>
	      <strong>{{ $error }}</strong>
	    </div>
    @endforeach
@endif