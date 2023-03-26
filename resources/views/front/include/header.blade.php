<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>@if(isset($title)) {{$title}} | @endif Websphare</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{$admin_site_setting->fav_icon}}" rel="icon">
  <link href="{{ asset('/front/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
  <!-- Google Fonts -->
 
  <!-- Bootstrap css -->
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <link href="{{ asset('/front/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="{{ asset('/front/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/front/lib/owlcarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/front/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/front/lib/animate/animate.min.css') }}" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="{{ asset('/front/css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('/admin/plugins/toastr/toastr.min.css') }}">
</head>

<body>

  <header id="header" class="header header-hide">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="{{ url('/') }}"  class="scrollto"><img src="{{$admin_site_setting->site_logo}}" style="height:40px!important"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
			<li id="hometab"><a href="{{ url('/') }}">Home</a></li>
			<li id="templatetab"><a href="{{ url('/web-templates') }}">Website Builders</a></li>
		    <li id="pricingtab"><a href="{{ url('/pricing') }}">Pricing</a></li>
			<li id="abouttab"><a href="{{ url('/page/about-us') }}">About Us</a></li>
			<li id="businesstab"><a href="{{ url('/business') }}">Business</a></li>
			<li id="contacttab" class="menu-has-children"  style="margin-right: 70px;"><a href="javascript:void(0)">Help</a>
				<ul>
				  <li><a href="#">Documentation</a></li>
				  <li><a href="{{ url('/contact-us') }}">Contact Support</a></li>
				  <li><a href="{{ url('/customization') }}">Customization & feedback</a></li>
				  <li><a href="{{ url('/page/faq') }}">FAQ</a></li>
				</ul>
			</li>
			
		@auth	
		<li><a href="{{url('/logout')}}">Logout</a></li>
		<li><a href="{{route('home')}}">Dashboard</a></li>
		@else
		<li id="logintab"><a href="{{url('/login')}}">Sign In</a></li>
		<li id="signuptab"><a href="{{url('/signup')}}">Sign up</a></li>
		 @endauth
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
