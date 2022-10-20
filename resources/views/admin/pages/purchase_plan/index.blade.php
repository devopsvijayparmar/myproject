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
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
	<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Purchase Plan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Purchase Plan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
	  
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
			  
				
              <!-- /.card-header -->
              <!-- form start -->
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
				
              <!-- /.card-header -->
              <!-- form start -->
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
@include('admin.include.table_script')
<script>
$('#purchase-plan-tab').addClass('active');
</script>
@endsection 