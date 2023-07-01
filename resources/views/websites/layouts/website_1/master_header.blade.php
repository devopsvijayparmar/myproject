<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<title>@if(isset($site_setting->title)) {{$site_setting->title}} @else {{$admin_site_setting->title}}@endif</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- site icons -->
@php $fav_icon = "";@endphp @if(isset($site_setting->fav_icon)) @php $fav_icon = $site_setting->fav_icon @endphp @else @php $fav_icon = $admin_site_setting->fav_icon @endphp @endif
@php $site_logo = "";@endphp @if(isset($site_setting->site_logo)) @php $site_logo = $site_setting->site_logo @endphp @else @php $site_logo = $admin_site_setting->site_logo @endphp @endif
<link rel="icon" href="{{$fav_icon}}" type="image/gif" />
<!-- bootstrap css -->
<link rel="stylesheet" href="{{ asset('/websites/website_1/css/bootstrap.min.css') }}" />
<!-- Site css -->
<link rel="stylesheet" href="{{ asset('/websites/website_1/css/style.css') }}" />
<!-- responsive css -->
<link rel="stylesheet" href="{{ asset('/websites/website_1/css/responsive.css') }}" />
<!-- colors css -->
<link rel="stylesheet" href="{{ asset('/websites/website_1/css/colors1.css') }}" />
<!-- wow Animation css -->
<link rel="stylesheet" href="{{ asset('/websites/website_1/css/animate.css') }}" />



<!-- revolution slider css -->
<link rel="stylesheet" type="text/css" href="{{ asset('/websites/website_1/revolution/css/settings.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('/websites/website_1/revolution/css/layers.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('/websites/website_1/revolution/css/navigation.css') }}" />
<link rel="stylesheet" href="{{ asset('/owl/owl.carousel-2.3.4.min.css') }}">
	<!-- Owl Carousel Theme CSS -->
<link rel="stylesheet" href="{{ asset('/owl/owl.theme.default-2.3.4.min.css') }}">
<link rel="stylesheet" href="{{ asset('/admin/plugins/toastr/toastr.min.css') }}">
<link href="{{ asset('/websites/common/css/prettyPhoto.css') }}" rel="stylesheet">
<link href="{{ asset('/websites/common/css/common.css') }}" rel="stylesheet">

@yield('css')

</head>
<style>
footer {
    min-height: 375px;
    padding: 0px!important;
    position: relative;
}
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

<body id="default_theme" class="it_service hole-font">
<header id="default_header" class="header_style_1">
<nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear">
    <div class="container">
     <a href="{{url('/')}}"><img style="height: 40px!important;" src="{{$site_logo}}" alt="logo" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" style="color:black;"><i class="fa fa-bars" aria-hidden="true"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
		
		    @yield('menu')
		
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
</header>
