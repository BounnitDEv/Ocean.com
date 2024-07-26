@if($notification = Session::get('success'))
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong>{{ $notification }}</strong>
    </div>
@endif

@if(session()->has('warning'))
	@foreach(session()->pull('warning') as $notification)
		<div class="alert alert-warning" role="alert">
	      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	        <span aria-hidden="true">×</span>
	      </button>
	      <strong>{{ $notification }}</strong>
	    </div>
	@endforeach
@endif

@if(session()->has('error'))
	@foreach(session()->pull('error') as $notification)
		<div class="alert alert-danger" role="alert">
	      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	        <span aria-hidden="true">×</span>
	      </button>
	      <strong>{{ $notification }}</strong>
	    </div>
	@endforeach
@endif

@if(session()->has('notification'))
	@foreach(session()->pull('notification') as $notification)
		<div class="alert alert-primary" role="alert">
	      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	        <span aria-hidden="true">×</span>
	      </button>
	      <strong>{{ $notification }}</strong>
	    </div>
	@endforeach
@endif
