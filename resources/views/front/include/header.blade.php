<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>eStartup Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ url('/front/img/favicon.png') }}" rel="icon">
  <link href="{{ url('/front/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap css -->
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <link href="{{ url('/front/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ url('/front/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ url('/front/lib/owlcarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
  <link href="{{ url('/front/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ url('/front/lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ url('/front/lib/modal-video/css/modal-video.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ url('/front/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/admin/plugins/toastr/toastr.min.css') }}">

  <!-- =======================================================
    Theme Name: eStartup
    Theme URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <header id="header" class="header header-hide">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="{{ url('/') }}" class="scrollto"><span>e</span>Startup</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
			<li id="hometab"><a href="{{ url('/') }}">Home</a></li>
			<li id="templatetab"><a href="{{ url('/web-templates') }}">Web Templates</a></li>
			<li id="pricingtab"><a href="{{ url('/pricing') }}">Pricing</a></li>
			<li id="abouttab"><a href="{{ url('/page/about-us') }}">About Us</a></li>
			<li id="bussinesstab"><a href="{{ url('/') }}">Bussiness</a></li>
			<li id="contacttab" class="menu-has-children"  style="margin-right: 70px;"><a href="javascript:void(0)">Help</a>
				<ul>
				  <li><a href="#">Documentation</a></li>
				  <li><a href="{{ url('/contact-us') }}">Contact Support</a></li>
				</ul>
			</li>
			
		@auth	
		<li><a href="{{url('/logout')}}">Logout</a></li>
		@else
		<li><a href="{{url('/login')}}">Sign In</a></li>
		<li><a href="{{url('/signup')}}">Register</a></li>
		 @endauth
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
