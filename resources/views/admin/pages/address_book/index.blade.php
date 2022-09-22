@extends('admin.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Address Book</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Address Book</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
             
			 <span class="error"></span>
				@if($errors->first('file'))
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  {{$errors->first('file')}}
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>
				@endif
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body table-responsive">
				 <a type="button" class="btn btn-primary float-right ml-2" href="{{$createUrl}}">Add</a>
				 <a type="button" class="btn btn-success float-right ml-2" onclick="importcsv();" href="javascript:void(0);">Import CSV</a>
				 <a class="btn btn-info float-right ml-2" download href="{{URL::to('/sample/Import-Address-Book.csv')}}">Download Sample CSV</a>
                 @include('admin.include.table')
                </div>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
	<div class="modal fade" id="modal-default">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Import Address</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<form id="main_id" method="POST" action="{{route('import-addressbook')}}" enctype="multipart/form-data">
		@method('POST')
		@csrf
		<div class="modal-body">
			<div class="form-group">
				<input type="file" id="file" name="file" class="form-control" >
				<span style="color:red;" id="file_error"></span>
			</div>
		</div>
		<div class="modal-footer justify-content-between">
		  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</div>
		</form>
	  </div>
	  <!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
  </div>
  
  <!-- /.content-wrapper -->
@endsection
@section('script')
@include('admin.include.table_script')
<script>

function importcsv()
{
	$('#modal-default').modal('show');
}

$('#main_id').submit(function (e) {
	   
	$(':input[type="submit"]').prop('disabled', true);
	var file = $('#file').val();
	
	var cnt = 0;
	
	$('#file_error').html("");

	
	if (file.trim() == '') {
		$('#file_error').html("Please select File");
		cnt = 1;
		$('#file').focus();
	}
	
	regex = new RegExp("(.*?)\.(csv)$");
	if (file) {
		if (!(regex.test(file))) {
		   
		  $('#file_error').html("Only CSV file is allowed");
			cnt = 1;
		}
	}
	
	if (cnt == 1) {
		$(':input[type="submit"]').prop('disabled', false);
		return false;
	} else {
		return true;
	}
});

$('#address-book-tab').addClass('active');
</script>
@endsection