
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title mt-0" id="exampleModalLabel">Edit Type</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="main_id1"  method="POST" action="<?php echo URL::to('/')?>/admin/type/{{App\Helpers\CryptHelper::encryptstring($data->id)}}" enctype="multipart/form-data">
			@method('PUT')
			@csrf
			<div class="modal-body">
				 <div class="form-group">
					<label for="exampleFormControlInput1">Category <span style="color:red;margin-left: 2px;" class="required-error"> *</span></label>
					 <select class="form-control" id="category1" name="category_fk">
					<option value="">select category</option>
					<?php foreach($category as $retrieved_data) { ?>
					<option <?php if($data->category_fk == $retrieved_data->id) { echo "selected";}?> value="{{$retrieved_data->id}}">{{$retrieved_data->name}}</option>
					<?php } ?>
				  </select>
					<span style="color:red;" id="category1_error"></span>
				</div>
				<div class="form-group">
					<label for="exampleFormControlInput1">Type <span style="color:red;margin-left: 2px;" class="required-error"> *</span></label>
					<input maxlength="255" value="{{$data->name}}" type="text" id="name1" name="name" class="form-control"  placeholder="Enter type name">
					<span style="color:red;" id="name1_error"></span>
				</div>
			</div>
			 <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
			</form>
		</div>
	<script>
	
	$('#main_id1').submit(function (e) {
	   
	$(':input[type="submit"]').prop('disabled', true);
	var name = $('#name1').val();
	var category = $('#category1').val();
	
	var cnt = 0;
	var f = 0;
	
	$('#name1_error').html("");

	
	if (category.trim() == '') {
		$('#category1_error').html("Please select Category");
		cnt = 1;
		if(f == 1)
		{
			$("#category1").addClass("autofocous");
		}
	}
	if (name.trim() == '') {
		$('#name1_error').html("Please enter Type");
		cnt = 1;
		if(f == 1)
		{
			$('#name1').focus();
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