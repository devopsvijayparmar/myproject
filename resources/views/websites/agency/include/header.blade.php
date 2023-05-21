<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@if(isset($site_setting->title)) {{$site_setting->title}} @else {{$admin_site_setting->title}} @endif</title>
	@php $fav_icon = "";@endphp @if(isset($site_setting->fav_icon)) @php $fav_icon = $site_setting->fav_icon @endphp @else @php $fav_icon = $admin_site_setting->fav_icon @endphp @endif
	@php $site_logo = "";@endphp @if(isset($site_setting->site_logo)) @php $site_logo = $site_setting->site_logo @endphp @else @php $site_logo = $admin_site_setting->site_logo @endphp @endif
	<!-- core CSS -->
  <link rel="stylesheet" href="{{ asset('/websites/watch/css/bootstrap.min.css') }}" />
    <link href="{{ asset('/websites/agency/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/websites/agency/css/animate.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/owl/owl.carousel-2.3.4.min.css') }}">
	<!-- Owl Carousel Theme CSS -->
	<link rel="stylesheet" href="{{ asset('/owl/owl.theme.default-2.3.4.min.css') }}">
    <link href="{{ asset('/websites/agency/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('/websites/agency/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('/websites/agency/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('/websites/agency/css/custom.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('/admin/plugins/toastr/toastr.min.css') }}">      
    <link rel="shortcut icon" href="{{$fav_icon}}">
</head><!--/head-->
<style>

.mr-2{
	margin-left:10px!important;
}
.first-ul a{
	color:white;
}
.first-ul li{
	margin-bottom:20px!important;
}
.nav-link{
	color:black!important;
}
</style>
<body id="home" class="homepage">

	<header id="default_header" class="header_style_1">
		<nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear">
			<div class="container">
			 <a href="{{url('/')}}"><img style="height: 40px!important;" src="{{$site_logo}}" alt="logo" /></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon" style="color:black;"><i class="fa fa-bars" aria-hidden="true"></i></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link" id="hometab" href="{{url('/')}}">Home</a></li>
					<li class="nav-item"><a class="nav-link" id="projects" href="{{url('projects/category')}}">Projects</a></li>
					<li class="nav-item"><a class="nav-link" id="products" href="{{url('products/category')}}">Products</a></li>
					<li class="nav-item"><a class="nav-link" id="servicetab" href="{{url('service')}}">Services</a></li>
						<li class="nav-item"><a class="nav-link" id="gallerytab" href="{{url('gallery')}}">Gallery</a></li>
					<li class="nav-item"><a class="nav-link" id="promotiontab" href="{{url('promotion')}}">Promotions</a></li>
					<li class="nav-item"><a class="nav-link" id="about_us_tab" href="{{url('about-us')}}">About Us</a></li>
					
					@if(isset($page_builder))
						 @if(count($page_builder) > 0)
						 <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">{{$user->page_name}} </a>
							<div class="dropdown-menu" role="menu">
							@foreach($page_builder as $page_builder_data)
								<a class="dropdown-item" role="presentation" href="{{$page_builder_data->url}}">{{$page_builder_data->title}}</a>
							@endforeach	
							</div>
						</li>
						@endif
					@endif
				</ul>
			  </div>
			</div>
		  </nav>
		  <!-- header bottom end -->
		</header>
	
	
	<script>
    document.addEventListener("DOMContentLoaded", function(){
	// make it as accordion for smaller screens
	if (window.innerWidth > 992) {

		document.querySelectorAll('.navbar .nav-item').forEach(function(everyitem){

			everyitem.addEventListener('mouseover', function(e){

				let el_link = this.querySelector('a[data-bs-toggle]');

				if(el_link != null){
					let nextEl = el_link.nextElementSibling;
					el_link.classList.add('show');
					nextEl.classList.add('show');
				}

			});
			everyitem.addEventListener('mouseleave', function(e){
				let el_link = this.querySelector('a[data-bs-toggle]');

				if(el_link != null){
					let nextEl = el_link.nextElementSibling;
					el_link.classList.remove('show');
					nextEl.classList.remove('show');
				}


			})
		});

	}
	// end if innerWidth
	}); 
	</script>