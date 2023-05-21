@extends('admin.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blog</h1>
          </div>
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('blog.index')}}">Blogs</a></li>
              <li class="breadcrumb-item active">Blog Detail</li>
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
					<h3 class="card-title">Blog Detail</h3>
				</div>
                <div class="card-body">
					<div class="row">
						<div class="col-12 col-sm-4">
							<div class="col-12">
								<img src="{{$data->image_url}}" class="product-image" alt="Blog Image">
							</div>
							
						</div>
						<div class="col-12 col-sm-8">
							<h3 class="my-3">{{$data->title}}</h3>
							<p>{!! $data->description !!}</p>
							<hr>
						</div>
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
@endsection
@section('script')
<script>
$('#blogtab').addClass('active');
</script>
@endsection