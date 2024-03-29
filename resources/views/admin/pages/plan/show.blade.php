@extends('admin.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Plans</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
				<li class="breadcrumb-item"><a href="{{route('plan.index')}}">Plans</a></li>
				<li class="breadcrumb-item active">Plan Detail</li>
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
					<h3 class="card-title">Plan Detail</h3>
				</div>
			 
				<div class="card-body">
					<div class="row">
						<div class="col-12 col-sm-4">
							<div class="col-12">
								<img src="{{$data->image_url_1}}" class="img-thumbnail" alt="Product Image">
							</div>
							<div class="col-12 product-image-thumbs">
								<div class="product-image-thumb active"><img class="img-thumbnail" src="{{$data->image_url_1}}" alt="Plan Image"></div>
								@if($data->image_2)
								<div class="product-image-thumb" ><img class="img-thumbnail" src="{{$data->image_url_2}}" alt="Plan Image"></div>
								@endif
							
								@if($data->image_3)
								<div class="product-image-thumb" ><img class="img-thumbnail" src="{{$data->image_url_3}}" alt="Plan Image"></div>
								@endif
							</div>
						</div>
						<div class="col-12 col-sm-8">
							<h3 class="my-3">{{$data->name}}</h3>
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
@endsection
@section('script')
<script>
$('#plantab').addClass('active');
</script>
@endsection