@extends('admin.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Page Builder</h1>
          </div>
		   <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('blog.index')}}">Page Builder</a></li>
              <li class="breadcrumb-item active">Create Page</li>
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
                <h3 class="card-title">Create Page</h3>
              </div>
			 
              <!-- /.card-header -->
              <!-- form start -->
			   <form id="main_id" method="POST" action="{{route('page-builder.store')}}" enctype="multipart/form-data">
				@method('POST')
				@csrf
                <div class="card-body">
					<div class="form-group">
						 <label for="exampleInputEmail1">Page Title <span class="error">*</span></label>
						  <input type="text" class="form-control" id="title" placeholder="Enter page title" name="title" maxlength="255" value="{{old('title')}}">
						 <span class="error" id='title_error'>{{$errors->first('title')}}</span>
					</div>
					<div class="form-group">
						 <label for="exampleInputEmail1">Page Name <span class="error">*</span></label>
						  <input type="text" class="form-control" id="name" placeholder="Enter page name" name="name" maxlength="255" value="{{old('name')}}">
						 <span class="error" id='name_error'>{{$errors->first('name')}}</span>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Content<span class="error">*</span></label>
						<textarea type="text" class="form-control" id="description" name="description" placeholder="Enter Content">	{{old('description')}}</textarea>
						<span class="error" id='description_error'>{{$errors->first('description')}}</span>
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
  <!-- /.content-wrapper -->
@endsection
@section('script')
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! $validator->selector('#main_id') !!}
<script>
$('#pagebuildertab').addClass('active');
$("#description").summernote({
  callbacks: {
	// callback for pasting text only (no formatting)
	onPaste: function (e) {
	  var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
	  e.preventDefault();
	  bufferText = bufferText.replace(/\r?\n/g, '<br>');
	  document.execCommand('insertHtml', false, bufferText);
	}
  }
});

</script>
@endsection