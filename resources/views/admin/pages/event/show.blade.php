@extends('admin.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Events</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
				<li class="breadcrumb-item"><a href="{{route('event.index')}}">Events</a></li>
				<li class="breadcrumb-item active">Event Detail</li>
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
                <h3 class="card-title">Event Detail</h3>
              </div>
			 
              <!-- /.card-header -->
              <!-- form start -->
			  
                <div class="card-body">
					<div class="row">
						<div class="col-12 col-sm-6">
							<div class="col-12">
								<img src="{{$data->image}}" class="product-image" alt="Event Image">
							</div>
							<div class="col-12 product-image-thumbs">
								<div class="product-image-thumb active"><img src="{{$data->image}}" alt="Event Image"></div>
							</div>
						</div>
						<div class="col-12 col-sm-6">
							<h3 class="my-3">Title: {{$data->title}}</h3>
							<p>Location: {{$data->location}}</p>
							<p>Start Date: {{$data->start_date}}</p>
							<p>End Date: {{$data->end_date}}</p>
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
$('#eventtab').addClass('active');
</script>
@endsection
