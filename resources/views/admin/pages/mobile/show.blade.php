@extends('admin.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mobiles</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
				<li class="breadcrumb-item"><a href="{{route('mobile.index')}}">Products</a></li>
				<li class="breadcrumb-item active">Mobile Detail</li>
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
                <h3 class="card-title">Mobile Detail</h3>
              </div>
                <div class="card-body">
					<div class="row">
					<div class="col-12 col-sm-6">
						<div class="col-12">
							<img src="{{$data->image_1}}" class="product-image" alt="Mobile Image">
						</div>
						<div class="col-12 product-image-thumbs">
							<div class="product-image-thumb active"><img src="{{$data->image_1}}" alt="Mobile Image"></div>
							@if($data->image_2)
							<div class="product-image-thumb" ><img src="{{$data->image_2}}" alt="Mobile Image"></div>
							@endif
						
							@if($data->image_3)
							<div class="product-image-thumb" ><img src="{{$data->image_3}}" alt="Mobile Image"></div>
							@endif
						</div>
					</div>
					<div class="col-12 col-sm-6">
					  <h3 class="my-3">{{$data->price}}</h3>
					  <h3 class="my-3">{{$data->name}}</h3>
					  <span class="description">Category - {{$data->category->name}}</span></br></br>
					  <span class="description">Brand - {{$data->brand->name}}</span></br></br>
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
$('#mobiletab').addClass('active');
</script>
@endsection