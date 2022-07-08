<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@if(isset($site_setting->title)) {{$site_setting->title}} @else {{$admin_site_setting->title}} @endif</title>
	<?php
	$fav_icon = "";if(isset($site_setting->fav_icon)) { $fav_icon = $site_setting->fav_icon;} else { $fav_icon = $admin_site_setting->fav_icon;}
	$site_logo = "";if(isset($site_setting->site_logo)) { $site_logo = $site_setting->site_logo;} else { $site_logo = $admin_site_setting->site_logo;}
	?>
	<!-- core CSS -->
    <link href="{{ asset('/websites/realestate/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/websites/realestate/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/websites/realestate/css/animate.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/owl/owl.carousel-2.3.4.min.css') }}">
	<!-- Owl Carousel Theme CSS -->
	<link rel="stylesheet" href="{{ asset('/owl/owl.theme.default-2.3.4.min.css') }}">
    <link href="{{ asset('/websites/realestate/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('/websites/realestate/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('/websites/realestate/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('/websites/realestate/css/custom.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('/admin/plugins/toastr/toastr.min.css') }}">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{asset('/uploads/site_settings/')}}/{{$fav_icon}}">
</head><!--/head-->
<style>

</style>
<body id="home" class="homepage">

    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('/')}}/{{$title}}"><img src="{{url('/')}}/uploads/site_settings/{{$site_logo}}" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li id="hometab" class="scroll"><a href="{{url('/')}}/{{$title}}">Home</a></li>
						<li id="projects" class="scroll"><a href="{{url('/')}}/{{$title}}/projects/category">Projects</a></li>
						<li id="plantab" class="scroll"><a href="{{url('/')}}/{{$title}}/plan">Plan</a></li>
                        <li id="servicetab" class="scroll"><a href="{{url('/')}}/{{$title}}/service">Service</a></li>
                        <li id="promotiontab" class="scroll"><a href="{{url('/')}}/{{$title}}/promotion">Promotion</a></li>
						<li id="gallerytab" class="scroll"><a href="{{url('/')}}/{{$title}}/gallery">Gallery</a></li>
                         <li id="about_us_tab" class="scroll"><a href="{{url('/')}}/{{$title}}/about-us">About Us</a></li>  
                        <li id="contact-us-tab" class="scroll"><a href="{{url('/')}}/{{$title}}/contact-us">Contact Us</a></li>          
                       						
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->
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