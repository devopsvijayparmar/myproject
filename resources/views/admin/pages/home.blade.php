@extends('admin.layouts.master')
@section('content')
@section('css')
 <style>
 .navbar-badge {
    font-size: 16px!important;
    padding: 4px 6px;
    position: absolute;
    right: 5px;
    top: 9px;
    font-weight: 700!important;
}
 </style>
@endsection 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-dark">Dashboard</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
		    @can('products')
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fab fa-product-hunt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Products</span>
                <span class="info-box-number">
				{{$products_count}}
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
		  @endcan
          <!-- /.col -->
		  @can('mobile')
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-mobile"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Mobiles</span>
                <span class="info-box-number">{{$mobiles_count}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
		   @endcan
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>
            @can('orders')
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1">  <a target="_blank" href="{{route('orders.index')}}"><i class="fas fa-shopping-cart"></i> </a></span>
              <div class="info-box-content">
                <span class="info-box-text">Orders</span>
                <span class="info-box-number">{{$orders_count}}</span>
              </div>
			 
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
		   @endcan
          <!-- /.col -->
		    @can('projects')
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fab fa-product-hunt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Projects</span>
                <span class="info-box-number">{{$projects_count}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
		  @endcan
          <!-- /.col -->
        </div>
        <!-- /.row -->
		 @can('orders')
        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Latest Orders</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Order ID</th>
                      <th>Product</th>
					  <th>Quantity</th>
					  <th>Customer</th>
					  <th>Customer Mobile</th>
                      <th>Status</th>
                    
                    </tr>
                    </thead>
                    <tbody>
					@foreach($orders as $ordersdata)
                    <tr>
						<td><a href="{{route('orders.show', Crypt::encrypt($ordersdata->id))}}">{{$ordersdata->order_id}}</a></td>
						<td>{{$ordersdata->product_name}}</td>
						<td>{{$ordersdata->quantity}}</td>
						<td>{{$ordersdata->name}}</td>
						<td>{{$ordersdata->mobile}}</td>
						<td><span class="badge badge-{{$ordersdata->class_badge}}">{{$ordersdata->status_badge}}</span></td>
                    </tr>
					@endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a style="font-size: 13px;" target="_blank" href="{{route('orders.index')}}" class="btn btn-sm btn-secondary float-right">View All Orders</a>
              </div>
              <!-- /.card-footer -->
        </div>
		 @endcan
		
		 @if($purchaseplan)
		<div class="row">
			 <div class="col-sm-4 ribbon-font">
				<div class="position-relative p-3 bg-info" style="height: 180px">
				<div class="ribbon-wrapper ribbon-lg">
				<div class="ribbon bg-danger">
				   Active
				</div>
				</div>
				<strong style="font-size:25px">{{$purchaseplan->plan_name}}</strong> <br>
				<small style="border-bottom:1px solid white;">{{$purchaseplan->price_text}} / {{$purchaseplan->duration}}</small></br>
				<span class="info-box-number">Page Builder : {{$purchaseplan->page_builder}}</span></br>
				<span class="info-box-number">Start Date : {{ App\Helpers\CommonHelper::dateFormate($purchaseplan->start_date) }}</span></br>
				<span class="info-box-number">Expiry Date : {{ App\Helpers\CommonHelper::dateFormate($purchaseplan->expiry_date) }}</span></br>
				</div>
			</div>
		    <div class="row">
				<div class="col-md-6 col-sm-12 col-12" title="Click to upgrade button for Emails">
					<div class="info-box">
						<span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
						<div class="info-box-content">
						<a href="{{url('/admin/upgrade-plan/emails')}}" class="badge badge-danger navbar-badge">${{$topup->no_of_emails_price}} Upgrade</a>
						<span class="info-box-text">Emails</span>
						<span class="info-box-number">{{$topup->no_of_emails}}</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-12" title="Click to upgrade button for Landing Page">
					<div class="info-box">
						<span class="info-box-icon bg-info"><i class="nav-icon fas fa-pager"></i></span>
						<div class="info-box-content">
						<a href="{{route('upgrade-plan','landingpage')}}" class="badge badge-danger navbar-badge">${{$topup->no_of_landing_page_price}} Upgrade</a>
						<span class="info-box-text">Landing Page</span>
						 <span class="info-box-number">{{$topup->no_of_landing_page}}</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-12" title="Click to upgrade button for Page Builder">
					<div class="info-box">
						<span class="info-box-icon bg-info"><i class="nav-icon fas fa-pager"></i></span>
						<div class="info-box-content">
						<a href="{{route('upgrade-plan','pagebuilder')}}" class="badge badge-danger navbar-badge">${{$topup->no_of_page_builder_price}} Upgrade</a>
						<span class="info-box-text">Page Builder</span>
						 <span class="info-box-number">{{$topup->no_of_page_builder}}</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-12" title="Click to upgrade button for Addressbook">
					<div class="info-box">
						<span class="info-box-icon bg-info"><i class="nav-icon  fas fa-address-book"></i></span>
						<div class="info-box-content">
						<a href="{{route('upgrade-plan','addressbook')}}" class="badge badge-danger navbar-badge">${{$topup->no_of_address_book_price}} Upgrade</a>
						<span class="info-box-text">Addressbook</span>
						 <span class="info-box-number">{{$topup->no_of_address_book}}</span>
						 
						</div>
					</div>
				</div>
			</div>
		</div>
	  
        <div class="row">
          <!-- left column -->
			<div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Remaining Service</h3>
              </div>
			  
				<div class="card-footer">
					<div class="row">
					  <div class="col-sm-3 col-6">
						<div class="description-block border-right">
						    <div class="btn-group btn-group-toggle" data-toggle="buttons">
								<label class="btn btn-default text-center">
								<input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
								<span style="font-size: 23px!important;" class="text-xl">{{$purchaseplan->no_of_emails}}</span>
								<br>
								Remaining Emails
							</div>
						</div>
						<!-- /.description-block -->
					  </div>
					  <!-- /.col -->
					  <div class="col-sm-3 col-6">
						<div class="description-block border-right">
						   <div class="btn-group btn-group-toggle" data-toggle="buttons">
								<label class="btn btn-default text-center">
								<input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
								<span style="font-size: 23px!important;" class="text-xl">{{$purchaseplan->no_of_landing_page}}</span>
								<br>
								Remaining Landingpage
							</div>
						</div>
						<!-- /.description-block -->
					  </div>
					  <!-- /.col -->
					  <div class="col-sm-3 col-6">
						<div class="description-block border-right">
						   <div class="btn-group btn-group-toggle" data-toggle="buttons">
								<label class="btn btn-default text-center">
								<input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
								<span style="font-size: 23px!important;" class="text-xl">{{$purchaseplan->no_of_page_builder}}</span>
								<br>
								Remaining Page builder
							</div>
						</div>
						<!-- /.description-block -->
					  </div>
					  <!-- /.col -->
					  <div class="col-sm-3 col-6">
						<div class="description-block">
						   <div class="btn-group btn-group-toggle" data-toggle="buttons">
								<label class="btn btn-default text-center">
								<input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
								<span style="font-size: 23px!important;" class="text-xl">{{$purchaseplan->no_of_address_book}}</span>
								<br>
								Remaining Addressbook
							</div>
						</div>
						<!-- /.description-block -->
					  </div>
					</div>
					<!-- /.row -->
				</div>
            </div>
            <!-- /.card -->
			</div>
          <!--/.col (left) -->
        </div>
		@endif
		
		<div class="row">
          <!-- left column -->
			<div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Purchase Plans</h3>
              </div>
				<div class="card-body table-responsive">
				@include('admin.include.table')
				</div>
            </div>
            <!-- /.card -->
			</div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
@section('script')
@include('admin.include.table_script')
<script>
$('#dashboard').addClass('active');
</script>
@endsection