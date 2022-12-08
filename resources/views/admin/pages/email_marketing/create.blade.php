@extends('admin.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Email Marketing</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
			  <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('email-marketing.index')}}">Email Marketing</a></li>
              <li class="breadcrumb-item active">Add</li>
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
              <div class="card-header">
                <h3 class="card-title">Add Email</h3>
              </div>
              <!-- form start -->
			   <form id="main_id" method="POST" action="{{route('email-marketing.store')}}" enctype="multipart/form-data">
				@method('POST')
				@csrf
                <div class="card-body">
					<div class="form-group">
						 <label for="exampleInputEmail1">Subject <span class="error">*</span></label>
						  <input type="text" class="form-control" id="subject" placeholder="Enter subject" name="subject" maxlength="255" value="{{old('subject')}}">
						  <span class="error">{{$errors->first('subject')}}</span>
					</div>
					
					<div class="form-group">
						<label for="exampleInputEmail1">Description<span class="error">*</span></label>
						<textarea type="text" class="form-control" id="description" name="email">{{old('email')}}</textarea>
						<span class="error">{{$errors->first('email')}}</span>
					</div>
					<div class="form-group">
					 <p>User Name: <?php echo "{{USER_NAME}}";?></p>
					</div>
                </div>
				<div class="card-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
                </div>
				</form>
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
@endsection
@section('script')
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
<script src="{{ asset('/admin/plugins/ckeditor/ckeditor.js') }}"></script>
{!! $validator->selector('#main_id') !!}
<script>
$('#emailtab').addClass('active');
CKEDITOR.replace('description');
</script>
@endsection