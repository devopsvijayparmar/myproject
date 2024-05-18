
<div class="modal-content">
	<form id="main_id1"  method="POST" action="{{route('slider.update',Crypt::encrypt($data->id))}}" enctype="multipart/form-data">
	@method('PUT')
	@csrf
	 <div class="modal-body">
		<div class="form-group">
			<label for="exampleInputFile">Image<span class="error">*</span></label>
			<input type="file" onchange="ValidateSize(this)" class="form-control" name="image" id="image1">
			<img class="mar-top-10 rp-img100" src="{{$data->image}}" id="blah1"/ ></br>
			<span class="error" id='image1_error'>{{$errors->first('image')}}</span>
		</div>
		<div class="btn-group btn-group-toggle mb-1" data-toggle="buttons">
			<label style="text-align: left;" class="btn btn-default">
			<p class="m-0"><em><strong>Note</strong>: height: 550 px width: 1600 px.</em></p>
		</div>
	</div>
	 <div class="modal-footer justify-content-between">
	  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	  <button type="submit" class="btn btn-primary">Update</button>
	</div>
	</form>
</div>
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! $validator->selector('#main_id1') !!}
<script>
	function readURL(input) {
	if (input.files && input.files[0]) {
	var reader = new FileReader();

	reader.onload = function(e) {
		$('#blah1').css({
			height: '100px',
			width: '100px'
		});
		$('#blah1').attr('src', e.target.result);
		
	}
	reader.readAsDataURL(input.files[0]);
	}
	}

	$("#image1").change(function() {
	  readURL(this);
	});
</script>