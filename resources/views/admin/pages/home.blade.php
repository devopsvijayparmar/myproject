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
            <h1 class="m-0 text-dark">Dashboard</h1>
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
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Products</span>
                <span class="info-box-number">
                  10
                  <small>%</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Mobiles</span>
                <span class="info-box-number">41,410</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Orders</span>
                <span class="info-box-number">760</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Projects</span>
                <span class="info-box-number">2,000</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
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
                      <th>Item</th>
                      <th>Status</th>
                      <th>Popularity</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR9842</a></td>
                      <td>Call of Duty IV</td>
                      <td><span class="badge badge-success">Shipped</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR1848</a></td>
                      <td>Samsung Smart TV</td>
                      <td><span class="badge badge-warning">Pending</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR7429</a></td>
                      <td>iPhone 6 Plus</td>
                      <td><span class="badge badge-danger">Delivered</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR7429</a></td>
                      <td>Samsung Smart TV</td>
                      <td><span class="badge badge-info">Processing</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR1848</a></td>
                      <td>Samsung Smart TV</td>
                      <td><span class="badge badge-warning">Pending</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR7429</a></td>
                      <td>iPhone 6 Plus</td>
                      <td><span class="badge badge-danger">Delivered</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR9842</a></td>
                      <td>Call of Duty IV</td>
                      <td><span class="badge badge-success">Shipped</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
              </div>
              <!-- /.card-footer -->
        </div>
		
		 @if($purchaseplan)
		<div class="row">
			 <div class="col-sm-4">
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
				<div class="col-md-6 col-sm-12 col-12">
					<div class="info-box">
						<span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
						<div class="info-box-content">
						<a href="{{url('/admin/upgrade-plan/emails')}}" class="badge badge-danger navbar-badge">${{$topup->no_of_emails_price}} Upgrade</a>
						<span class="info-box-text">EMAILS</span>
						<span class="info-box-number">{{$topup->no_of_emails}}</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-12">
					<div class="info-box">
						<span class="info-box-icon bg-info"><i class="nav-icon fas fa-pager"></i></span>
						<div class="info-box-content">
						<a href="{{route('upgrade-plan','landingpage')}}" class="badge badge-danger navbar-badge">${{$topup->no_of_landing_page_price}} Upgrade</a>
						<span class="info-box-text">Landingpage</span>
						 <span class="info-box-number">{{$topup->no_of_landing_page}}</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-12">
					<div class="info-box">
						<span class="info-box-icon bg-info"><i class="nav-icon fas fa-pager"></i></span>
						<div class="info-box-content">
						<a href="{{route('upgrade-plan','pagebuilder')}}" class="badge badge-danger navbar-badge">${{$topup->no_of_page_builder_price}} Upgrade</a>
						<span class="info-box-text">Page builder</span>
						 <span class="info-box-number">{{$topup->no_of_page_builder}}</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-12">
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
						 
						  <h5 class="description-header">{{$purchaseplan->no_of_emails}}</h5>
						  <span class="description-text">Remaining Emails</span>
						</div>
						<!-- /.description-block -->
					  </div>
					  <!-- /.col -->
					  <div class="col-sm-3 col-6">
						<div class="description-block border-right">
						 
						  <h5 class="description-header">{{$purchaseplan->no_of_landing_page}}</h5>
						  <span class="description-text">Remaining Landingpage</span>
						</div>
						<!-- /.description-block -->
					  </div>
					  <!-- /.col -->
					  <div class="col-sm-3 col-6">
						<div class="description-block border-right">
						  
						  <h5 class="description-header">{{$purchaseplan->no_of_page_builder}}</h5>
						  <span class="description-text">Remaining Page builder</span>
						</div>
						<!-- /.description-block -->
					  </div>
					  <!-- /.col -->
					  <div class="col-sm-3 col-6">
						<div class="description-block">
						  
						  <h5 class="description-header">{{$purchaseplan->no_of_address_book}}</h5>
						  <span class="description-text">Remaining Addressbook</span>
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