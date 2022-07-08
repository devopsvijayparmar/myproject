
		<div class="modal-content">
			
			<form id="main_id1"  method="POST" action="<?php echo URL::to('/')?>/admin/slider/{{App\Helpers\CryptHelper::encryptstring($data->id)}}" enctype="multipart/form-data">
			@method('PUT')
			@csrf
			 <div class="modal-body">
				<div class="form-group">
					<label for="exampleInputFile">Image<span class="error">*</span></label>
					<input type="file" onchange="ValidateSize(this)" class="form-control" name="image" id="image1">
					<img class="mar-top-10 rp-img100" src="<?php echo URL::to('/'); ?>/uploads/slider/{{$data->image}}" id="blah1"/ ></br>
					<span class="error" id='image1_error'>{{$errors->Slider->first('image')}}</span>
				</div>
            </div>
			 <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
			</form>
		</div>
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
		
		 $('#main_id1').submit(function (e) {
	   
			$(':input[type="submit"]').prop('disabled', true);
			var image1 = $('#image1').val();
			
			var cnt = 0;
			
			$('#image1_error').html("");

			
			
			if(image1)
			{
				regex = new RegExp("(.*?)\.(jpg|png|jpeg|PNG)$");
				if (image1) {
					if (!(regex.test(image1))) {
					   
					  $('#image1_error').html("Only JPG, PNG and JPEG image are allowed");
						cnt = 1;
					}
				}
				
				if (image1) {
					var file_size = $('#image1')[0].files[0].size;
					if(file_size>2097152) {
						$("#image1_error").html("File size exceeds 2 MB");
						cnt = 1;
					} 
				}
			}
			
			if (cnt == 1) {
				$(':input[type="submit"]').prop('disabled', false);
				return false;
			} else {
				return true;
			}
		});
		</script>