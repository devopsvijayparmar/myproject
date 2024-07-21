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
            <h1>Membership Plan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Membership Plan</li>
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
			 <div class="col-sm-4 ribbon-font">
				<div class="position-relative p-3 purchase-plan-card" style="height: 180px">
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
			<div class="col-sm-8 ribbon-font">
		    <div class="row">
				<div class="col-md-6 col-sm-12 col-12" title="Click to upgrade button for Emails">
					<div class="info-box">
						<span class="info-box-icon dashboard-info"><img style="max-width: 70%;" src="{{asset('admin/dashboard-icon/email.png')}}"></span>
						<div class="info-box-content">
						<span class="info-box-text">Email Sent</span>
						@php
							$remaining_landing_page = (int)$purchaseplan->no_of_emails - (int)$purchaseplan->remaining_emails;
						@endphp
						<span class="info-box-number">{{$remaining_landing_page}}</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-12" title="Click to upgrade button for Landing Page">
					<div class="info-box">
						<span class="info-box-icon dashboard-info"><img style="max-width: 70%;" src="{{asset('admin/dashboard-icon/landing_page.png')}}"></span>
						<div class="info-box-content">
						<span class="info-box-text">Created Landing Page</span>
						 <span class="info-box-number">{{$purchaseplan->used_landing_page}}</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-12" title="Click to upgrade button for Page Builder">
					<div class="info-box">
						<span class="info-box-icon dashboard-info"><img style="max-width: 70%;" src="{{asset('admin/dashboard-icon/page_builder.png')}}"></span>
						<div class="info-box-content">
						<span class="info-box-text">Created Page Builder</span>
						 <span class="info-box-number">{{$purchaseplan->used_page_builder}}</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-12" title="Click to upgrade button for Addressbook">
					<div class="info-box">
						<span class="info-box-icon dashboard-info"><img style="max-width: 70%;" src="{{asset('admin/dashboard-icon/address_book.png')}}"></span>
						<div class="info-box-content">
						<span class="info-box-text">Address Book List</span>
						 <span class="info-box-number">{{$purchaseplan->used_address_book}}</span>
						 
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	  
	    
        <div class="row">
			<div class="col-md-6">
				<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
						<div class="card">
						<div class="card-body">
						<p class="text-center">
							<span>Remaining Service</span>
							</p>
							<div class="progress-group">
							Emails
							@php $width = App\Helpers\CommonHelper::findPercentage($purchaseplan->remaining_emails,$purchaseplan->no_of_emails) @endphp
							<span class="float-right"><b>{{$purchaseplan->remaining_emails}}</b>/{{$purchaseplan->no_of_emails}}</span>
							<div class="progress progress-sm" style="height: 30px;">
							<div class="progress-bar bg-primary" style="width: {{$width}}%;background:#dbf2f2!important;"></div>
							</div>
							</div>

							<div class="progress-group">
							Landing Page
							@php
								$remaining_landing_page = (int)$purchaseplan->no_of_landing_page - (int)$purchaseplan->used_landing_page;
								$width = App\Helpers\CommonHelper::findPercentage($remaining_landing_page,$purchaseplan->no_of_landing_page) 
							@endphp
							<span class="float-right"><b>{{$remaining_landing_page}}</b>/{{$purchaseplan->no_of_landing_page}}</span>
							<div class="progress progress-sm" style="height: 30px;">
							<div class="progress-bar bg-danger" style="width: {{$width}}%;background:#ffecd9!important;"></div>
							</div>
							</div>
						</div>
						<table class="table mb-0">
							<tbody>
								<tr>
									<td><i class="fas fa-circle fa-fw" style="color:#dbf2f2!important;"></i> Remaining Emails</td>
									<td class="text-end">{{$purchaseplan->remaining_emails}}</td>
								</tr>
								<tr>
									<td><i class="fas fa-circle fa-fw"  style="color:#ffecd9!important;"></i> Remaining Landing Page</td>
									<td class="text-end">{{$remaining_landing_page}}</td>
								</tr>
							</tbody>
						</table>
						</div>
						</div>
						
					</div>
				</div>
				</div>
			</div>
			
			<div class="col-md-6">
				<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
						<div class="card">
						<div class="card-body">
						<p class="text-center">
							<span>Remaining Service</span>
							</p>
						
							<div class="progress-group">
							Page Builder
							@php
								$remaining_page_builder = (int)$purchaseplan->no_of_page_builder - (int)$purchaseplan->used_page_builder;
								$width = App\Helpers\CommonHelper::findPercentage($remaining_page_builder,$purchaseplan->no_of_landing_page) 
							@endphp
							<span class="float-right"><b>{{$remaining_page_builder}}</b>/{{$purchaseplan->no_of_landing_page}}</span>
							<div class="progress progress-sm" style="height: 30px;">
							<div class="progress-bar bg-danger" style="width: {{$width}}%;background:#ffe0e6!important;"></div>
							</div>
							</div>

							<div class="progress-group">
							Address Book
							@php 
							$remaining_address_book = (int)$purchaseplan->no_of_address_book - (int)$purchaseplan->used_address_book;
							$width = App\Helpers\CommonHelper::findPercentage($remaining_address_book,$purchaseplan->no_of_address_book)

							@endphp
							<span class="float-right"><b>{{$remaining_address_book}}</b>/{{$purchaseplan->no_of_address_book}}</span>
							<div class="progress progress-sm" style="height: 30px;">
							<div class="progress-bar bg-danger" style="width: {{$width}}%;background:#ebe0ff!important;"></div>
							</div>
							</div>
						</div>
						<table class="table mb-0">
							<tbody>
								<tr>
									<td><i class="fas fa-circle text-danger fa-fw" style="color:#ffe0e6!important"></i> Remaining Page Builder</td>
									<td class="text-end">{{$remaining_page_builder}}</td>
								</tr>
								<tr>
									<td><i class="fas fa-circle text-dark fa-fw" style="color:#ebe0ff!important"></i> Remaining Address Book</td>
									<td class="text-end">{{$remaining_address_book}}</td>
								</tr>
							</tbody>
						</table>
						</div>
						</div>
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
		@endif
		
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