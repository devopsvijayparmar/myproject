@if(Session::has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert" style="text-align: center;">
	{{Session::get('success')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if(Session::has('error'))
<div class="alert alert-error alert-dismissible fade show" role="alert" style="text-align: center;">
	{{Session::get('error')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">&times;</span>
  </button>
</div>
@endif