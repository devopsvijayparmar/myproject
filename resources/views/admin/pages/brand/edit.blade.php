<div class="modal-content">
	<div class="modal-header">
		<h5 class="modal-title mt-0" id="exampleModalLabel">Edit Brand</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<form id="main_id_1"  method="POST" action="{{route('brand.update',Crypt::encrypt($data->id))}}" enctype="multipart/form-data">
	@method('PUT')
	@csrf
	<div class="modal-body">
		
		<div class="form-group">
			<label for="exampleFormControlInput1">Brand <span style="color:red;margin-left: 2px;" class="required-error"> *</span></label>
			<input maxlength="255" value="{{$data->name}}" type="text" id="name1" name="name" class="form-control"  placeholder="Enter brand">
		</div>
	</div>
	 <div class="modal-footer justify-content-between">
	  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	  <button type="submit" class="btn btn-primary">Update</button>
	</div>
	</form>
</div>

<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! $validator->selector('#main_id_1') !!}
