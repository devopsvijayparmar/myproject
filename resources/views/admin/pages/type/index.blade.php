@extends('admin.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Types</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Types</li>
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
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body table-responsive">
				 <button type="button" class="btn btn-primary float-right ml-2" data-toggle="modal" data-target="#modal-default">Add</button>
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
	<!-- /.content-wrapper -->
<div class="modal fade" id="modal-default">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">Type</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<form id="main_id" method="POST" action="{{route('type.store')}}" enctype="multipart/form-data">
			@method('POST')
			@csrf
			<div class="modal-body">
				<div class="form-group">
					<label for="exampleFormControlInput1">Category <span style="color:red;margin-left: 2px;" class="required-error"> *</span></label>
					 <select class="form-control" id="category_id" name="category_id">
					<option value="">select category</option>
					@foreach($category as $retrieved_data)
					<option value="{{$retrieved_data->id}}">{{$retrieved_data->name}}</option>
					@endforeach
				  </select>
					<span style="color:red;" id="category_error"></span>
				</div>
				<div class="form-group">
					<label for="exampleFormControlInput1">Type <span style="color:red;margin-left: 2px;" class="required-error"> *</span></label>
					<input maxlength="255" type="text" id="name" name="name" class="form-control" placeholder="Enter type">
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
</div>

<div class="modal fade" id="exampleModaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document" id="append">
	</div>
</div>

@endsection
@section('script')
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! $validator->selector('#main_id') !!}
@include('admin.include.table_script')
<script>
$('#typetab').addClass('active');

function functionEdit(id) 
{ 
	$.ajax({
		url: "{{ URL::to('/')}}/admin/type/"+id+"/edit",
		type: "GET",
		success: function (response) {
			$('#append').html(response);
			$('#exampleModaledit').modal('show');
		}
	});
}
</script>
@endsection