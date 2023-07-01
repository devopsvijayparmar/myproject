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
              <span class="info-box-icon dashboard-info elevation-1"><a target="_blank" href="{{route('products.index')}}"><img style="max-width: 70%;" src="{{asset('admin/dashboard-icon/product.png')}}"></a></span>

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
              <span class="info-box-icon dashboard-info elevation-1"><a target="_blank" href="{{route('mobile.index')}}"><img style="max-width: 70%;" src="{{asset('admin/dashboard-icon/mobile.png')}}"></a></span>
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
              <span class="info-box-icon dashboard-info elevation-1">  <a target="_blank" href="{{route('orders.index')}}"><img style="max-width: 70%;" src="{{asset('admin/dashboard-icon/order.png')}}"> </a></span>
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
              <span class="info-box-icon dashboard-info elevation-1"><a target="_blank" href="{{route('projects.index')}}"><img style="max-width: 70%;" src="{{asset('admin/dashboard-icon/project.png')}}"></a></span>

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
                <a style="font-size: 12px;" target="_blank" href="{{route('orders.index')}}" class="btn btn-sm btn-secondary float-right">View All Orders</a>
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
			    <!--
				<div class="col-md-6 col-sm-12 col-12" title="Click to upgrade button for Emails">
					<div class="info-box">
						<span class="info-box-icon dashboard-info"><img style="max-width: 70%;" src="{{asset('admin/dashboard-icon/email.png')}}"></span>
						<div class="info-box-content">
						<a href="{{url('/admin/upgrade-plan/emails')}}" class="badge badge-danger navbar-badge d-none">${{$topup->no_of_emails_price}} Upgrade</a>
						<span class="info-box-text">Emails</span>
						<span class="info-box-number">{{$topup->no_of_emails}}</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-12" title="Click to upgrade button for Landing Page">
					<div class="info-box">
						<span class="info-box-icon dashboard-info"><img style="max-width: 70%;" src="{{asset('admin/dashboard-icon/landing_page.png')}}"></span>
						<div class="info-box-content">
						<a href="{{route('upgrade-plan','landingpage')}}" class="badge badge-danger navbar-badge d-none">${{$topup->no_of_landing_page_price}} Upgrade</a>
						<span class="info-box-text">Landing Page</span>
						 <span class="info-box-number">{{$topup->no_of_landing_page}}</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-12" title="Click to upgrade button for Page Builder">
					<div class="info-box">
						<span class="info-box-icon dashboard-info"><img style="max-width: 70%;" src="{{asset('admin/dashboard-icon/page_builder.png')}}"></span>
						<div class="info-box-content">
						<a href="{{route('upgrade-plan','pagebuilder')}}" class="badge badge-danger navbar-badge d-none">${{$topup->no_of_page_builder_price}} Upgrade</a>
						<span class="info-box-text">Page Builder</span>
						 <span class="info-box-number">{{$topup->no_of_page_builder}}</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-12" title="Click to upgrade button for Addressbook">
					<div class="info-box">
						<span class="info-box-icon dashboard-info"><img style="max-width: 70%;" src="{{asset('admin/dashboard-icon/address_book.png')}}"></span>
						<div class="info-box-content">
						<a href="{{route('upgrade-plan','addressbook')}}" class="badge badge-danger navbar-badge d-none">${{$topup->no_of_address_book_price}} Upgrade</a>
						<span class="info-box-text">Addressbook</span>
						 <span class="info-box-number">{{$topup->no_of_address_book}}</span>
						 
						</div>
					</div>
				</div>-->
				<div class="col-md-6 col-sm-12 col-12" title="Click to upgrade button for Emails">
					<div class="info-box">
						<span class="info-box-icon dashboard-info"><img style="max-width: 70%;" src="{{asset('admin/dashboard-icon/email.png')}}"></span>
						<div class="info-box-content">
						<span class="info-box-text">Emails</span>
						<span class="info-box-number">{{$purchaseplan->no_of_emails}}</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-12" title="Click to upgrade button for Landing Page">
					<div class="info-box">
						<span class="info-box-icon dashboard-info"><img style="max-width: 70%;" src="{{asset('admin/dashboard-icon/landing_page.png')}}"></span>
						<div class="info-box-content">
						<span class="info-box-text">Landing Page</span>
						 <span class="info-box-number">{{$purchaseplan->no_of_landing_page}}</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-12" title="Click to upgrade button for Page Builder">
					<div class="info-box">
						<span class="info-box-icon dashboard-info"><img style="max-width: 70%;" src="{{asset('admin/dashboard-icon/page_builder.png')}}"></span>
						<div class="info-box-content">
						<span class="info-box-text">Page Builder</span>
						 <span class="info-box-number">{{$purchaseplan->no_of_page_builder}}</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-12" title="Click to upgrade button for Addressbook">
					<div class="info-box">
						<span class="info-box-icon dashboard-info"><img style="max-width: 70%;" src="{{asset('admin/dashboard-icon/address_book.png')}}"></span>
						<div class="info-box-content">
						<span class="info-box-text">Addressbook</span>
						 <span class="info-box-number">{{$purchaseplan->no_of_address_book}}</span>
						 
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="row">
			<div class="col-md-12">
				<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
						<div class="card">
						<div class="card-body">
						<p class="text-center">
							<span>Remaining Service</span>
							</p>
							<div class="progress-group">
							Emails
							@php $width = App\Helpers\CommonHelper::findPercentage($purchaseplan->remaining_emails,$purchaseplan->no_of_emails) @endphp
							<span class="float-right"><b>{{$purchaseplan->remaining_emails}}</b>/{{$purchaseplan->no_of_emails}}</span>
							<div class="progress progress-sm">
							<div class="progress-bar bg-primary" style="width: {{$width}}%;background:#007bff!important;"></div>
							</div>
							</div>

							<div class="progress-group">
							Landing Page
							@php
								$remaining_landing_page = (int)$purchaseplan->no_of_landing_page - (int)$purchaseplan->used_landing_page;
								$width = App\Helpers\CommonHelper::findPercentage($remaining_landing_page,$purchaseplan->no_of_landing_page) 
							@endphp
							<span class="float-right"><b>{{$remaining_landing_page}}</b>/{{$purchaseplan->no_of_landing_page}}</span>
							<div class="progress progress-sm">
							<div class="progress-bar bg-danger" style="width: {{$width}}%;background:#ffc107!important;"></div>
							</div>
							</div>

							<div class="progress-group">
							@php
								$remaining_page_builder = (int)$purchaseplan->no_of_page_builder - (int)$purchaseplan->used_page_builder;
								$width = App\Helpers\CommonHelper::findPercentage($remaining_page_builder,$purchaseplan->no_of_page_builder) 
							@endphp
							
							@php $width = App\Helpers\CommonHelper::findPercentage($purchaseplan->used_page_builder,$purchaseplan->no_of_page_builder) @endphp
							<span class="progress-text">Page Builder</span>
							<span class="float-right"><b>{{$remaining_page_builder}}</b>/{{$purchaseplan->no_of_page_builder}}</span>
							<div class="progress progress-sm">
							<div class="progress-bar bg-success" style="width: {{$width}}%;background:#FF81A6!important;"></div>
							</div>
							</div>

							<div class="progress-group">
							Address Book
							@php 
							$remaining_address_book = (int)$purchaseplan->no_of_address_book - (int)$purchaseplan->used_address_book;
							$width = App\Helpers\CommonHelper::findPercentage($remaining_address_book,$purchaseplan->no_of_address_book)

							@endphp
							<span class="float-right"><b>{{$remaining_address_book}}</b>/{{$purchaseplan->no_of_address_book}}</span>
							<div class="progress progress-sm">
							<div class="progress-bar bg-danger" style="width: {{$width}}%;background:#CF82F1!important;"></div>
							</div>
							</div>
						</div>
						<table class="table mb-0">
							<tbody>
								<tr>
									<td><i class="fas fa-circle text-primary fa-fw"></i> Remaining Emails</td>
									<td class="text-end">{{$purchaseplan->remaining_emails}}</td>
								</tr>
								<tr>
									<td><i class="fas fa-circle text-warning fa-fw"></i> Remaining Landing Page</td>
									<td class="text-end">{{$remaining_landing_page}}</td>
								</tr>
								<tr>
									<td><i class="fas fa-circle text-danger fa-fw" style="color:#FF81A6!important"></i> Remaining Page Builder</td>
									<td class="text-end">{{$remaining_page_builder}}</td>
								</tr>
								<tr>
									<td><i class="fas fa-circle text-dark fa-fw" style="color:#CF82F1!important"></i> Remaining Address Book</td>
									<td class="text-end">{{$remaining_address_book}}</td>
								</tr>
							</tbody>
						</table>
						</div>
						</div>

						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="d-flex">
										<p class="d-flex flex-column">
										<span class="text-bold text-lg">820</span>
										<span>Visitors Over Time</span>
										</p>
									</div>

									<div class="position-relative mb-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
									<canvas id="visitors-chart" height="250" width="715" style="display: block; height: 200px; width: 572px;" class="chartjs-render-monitor"></canvas>
									</div>
									<div class="d-flex flex-row justify-content-end">
									<span class="mr-2">
									<i class="fas fa-square text-primary"></i> This Week
									</span>
									<span>
									<i class="fas fa-square text-gray"></i> Last Week
									</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
		
        <!--<div class="row">
         
			<div class="col-md-12">
           
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
						
					  </div>
					 
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
						
					  </div>
					 
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
						
					  </div>
					 
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
						
					  </div>
					</div>
					
				</div>
            </div>
           
			</div>
         
        </div>-->
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
   
 'use strict'

  var ticksStyle = {
    fontColor: '#495057',
    fontStyle: 'bold'
  }

  var mode      = 'index'
  var intersect = true

 var $visitorsChart = $('#visitors-chart')
  var visitorsChart  = new Chart($visitorsChart, {
    data   : {
      labels  : ['18th', '20th', '22nd', '24th', '26th', '28th', '30th'],
      datasets: [{
        type                : 'line',
        data                : [100, 120, 170, 167, 180, 177, 160],
        backgroundColor     : 'transparent',
        borderColor         : '#007bff',
        pointBorderColor    : '#007bff',
        pointBackgroundColor: '#007bff',
        fill                : false
      },
        {
          type                : 'line',
          data                : [60, 80, 70, 67, 80, 77, 100],
          backgroundColor     : 'tansparent',
          borderColor         : '#ced4da',
          pointBorderColor    : '#ced4da',
          pointBackgroundColor: '#ced4da',
          fill                : false
        }]
    },
    options: {
      maintainAspectRatio: false,
      tooltips           : {
        mode     : mode,
        intersect: intersect
      },
      hover              : {
        mode     : mode,
        intersect: intersect
      },
      legend             : {
        display: false
      },
      scales             : {
        yAxes: [{
          // display: false,
          gridLines: {
            display      : true,
            lineWidth    : '4px',
            color        : 'rgba(0, 0, 0, .2)',
            zeroLineColor: 'transparent'
          },
          ticks    : $.extend({
            beginAtZero : true,
            suggestedMax: 200
          }, ticksStyle)
        }],
        xAxes: [{
          display  : true,
          gridLines: {
            display: false
          },
          ticks    : ticksStyle
        }]
      }
    }
  })
</script>
@endsection