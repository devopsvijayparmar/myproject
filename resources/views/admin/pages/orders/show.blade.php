@extends('admin.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Order</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('orders.index')}}">Order</a></li>
              <li class="breadcrumb-item active">Order Details</li>
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
                <h3 class="card-title">Order Details</h3>
              </div>
				<!-- /.card-header -->
                <div class="card-body">
					<div class="col-md-10">
						<p class="lead">Product Details</p>
						<table class="table table-responsive">
							<tbody>
								<tr>
									<th style="width:50%">Product Image</th>
									<td><img class="rp-img" src="@if($order->product_type == 'product') {{$order->product_image}} @else {{$order->mobile_image}} @endif"></td>
								</tr>
								<tr>
									<th>Product</th>
									<td>{{$order->product_name}}</td>
								</tr>
								@if($order->product_category)
								<tr>
									<th>Category</th>
									<td>{{$order->product_category}}</td>
								</tr>
								@endif
								@if($order->product_brand)
								<tr>
									<th>Brand</th>
									<td>{{$order->product_brand}}</td>
								</tr>
								@endif
								<tr>
									<th>Price:</th>
									<td>{{$order->currency_symbol.$order->price}}</td>
								</tr>
								<tr>
									<th>Description</th>
									<td>{!!$order->product_description!!}</td>
								</tr>
								<tr>
									<th>Quantity</th>
									<td>{{$order->quantity}}</td>
								</tr>
							</tbody>
						</table>
						
						<p class="lead">Customer Details</p>
						<table class="table table-responsive">
							<tbody>
								
								<tr>
									<th>Name</th>
									<td>{{$order->name}}</td>
								</tr>
								<tr>
									<th>Mobile</th>
									<td>{{$order->mobile}}</td>
								</tr>
								<tr>
									<th>Email</th>
									<td>{{$order->email}}</td>
								</tr>
								<tr>
									<th>Pincode</th>
									<td>{{$order->pincode}}</td>
								</tr>
							   <tr>
									<th>Flat, House no., Building, Company, Apartment:</th>
									<td>{{$order->company}}</td>
								</tr>
								<tr>
									<th>Area, Street, Sector, Village:</th>
									<td>{{$order->area}}</td>
								</tr>
								<tr>
									<th>Landmark:</th>
									<td>{{$order->landmark}}</td>
								</tr>
								<tr>
									<th>Town/City:</th>
									<td>{{$order->city}}</td>
								</tr>
								<tr>
									<th>State:</th>
									<td>{{$order->state}}</td>
								</tr>
							</tbody>
						</table>
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
$('#orderstab').addClass('active');
</script>
@endsection  