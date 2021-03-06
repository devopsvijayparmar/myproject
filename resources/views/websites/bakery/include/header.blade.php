<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title><?php if(isset($site_setting->title)) { echo $site_setting->title;} else { echo $admin_site_setting->title;}?></title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- site icons -->
<?php
$fav_icon = "";if(isset($site_setting->fav_icon)) { $fav_icon = $site_setting->fav_icon;} else { $fav_icon = $admin_site_setting->fav_icon;}
$site_logo = "";if(isset($site_setting->site_logo)) { $site_logo = $site_setting->site_logo;} else { $site_logo = $admin_site_setting->site_logo;}
?>
<link rel="icon" href="<?php echo url('/uploads/site_settings/'.$fav_icon);?>" type="image/gif" />
<!-- bootstrap css -->
<link rel="stylesheet" href="{{ url('/websites/bakery/css/bootstrap.min.css') }}" />
<!-- Site css -->
<link rel="stylesheet" href="{{ url('/websites/bakery/css/style.css') }}" />
<!-- responsive css -->
<link rel="stylesheet" href="{{ url('/websites/bakery/css/responsive.css') }}" />
<!-- colors css -->
<link rel="stylesheet" href="{{ url('/websites/bakery/css/colors1.css') }}" />
<!-- custom css -->
<link rel="stylesheet" href="{{ url('/websites/bakery/css/custom.css') }}" />
<!-- wow Animation css -->
<link rel="stylesheet" href="{{ url('/websites/bakery/css/animate.css') }}" />
<!-- revolution slider css -->
<link rel="stylesheet" type="text/css" href="{{ url('/websites/bakery/revolution/css/settings.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('/websites/bakery/revolution/css/layers.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('/websites/bakery/revolution/css/navigation.css') }}" />
<link rel="stylesheet" href="{{ url('/owl/owl.carousel-2.3.4.min.css') }}">
	<!-- Owl Carousel Theme CSS -->
<link rel="stylesheet" href="{{ url('/owl/owl.theme.default-2.3.4.min.css') }}">
<link rel="stylesheet" href="{{ url('/admin/plugins/toastr/toastr.min.css') }}">
<link href="{{ url('/websites/studio/css/prettyPhoto.css') }}" rel="stylesheet">


</head>
<style>
footer {
    background: #039ee3!important;
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

</style>
<body id="default_theme" class="it_service hole-font">
<!-- loader -->
<!--<div class="bg_load"> <img class="loader_animation" src="images/loaders/loader_1.png" alt="#" /> </div>-->
<!-- end loader -->
<!-- header -->
<header id="default_header" class="header_style_1">
  <!-- header top -->
  <div class="header_top">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="full">
            <div class="topbar-left">
              <ul class="list-inline">
                <?php if(isset($contact_us->address)) { ?><li> <span class="topbar-label"><i class="fa fa-home"></i></span> <span class="topbar-hightlight">{{$contact_us->address}}</span> </li><?php } ?>
               <?php if(isset($contact_us->email)) { ?> <li> <span class="topbar-label"><i class="fa fa-envelope-o"></i></span> <span class="topbar-hightlight"><a href="mailto: {{$contact_us->email}}">{{$contact_us->email}}</a></span> </li><?php } ?>
				<?php if(isset($contact_us->contact_1)) { ?><li> <span class="topbar-label"><i class="fa fa-phone"></i></span> <span class="topbar-hightlight"><a href="tel:{{$contact_us->contact_1}}">{{$contact_us->contact_1}}</a></span> </li><?php } ?>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 right_section_header_top">
          <div class="float-left">
            <div class="social_icon">
              <ul class="list-inline">
                <?php if(isset($contact_us->facebook)) { ?><li><a class="fa fa-facebook" href="{{$contact_us->facebook}}" title="Facebook" target="_blank"></a></li><?php } ?>
                <?php if(isset($contact_us->twitter)) { ?><li><a class="fa fa-twitter" href="{{$contact_us->twitter}}" title="Twitter" target="_blank"></a></li><?php } ?>
                <?php if(isset($contact_us->linkedin)) { ?><li><a class="fa fa-linkedin" href="{{$contact_us->linkedin}}" title="LinkedIn" target="_blank"></a></li><?php } ?>
                <?php if(isset($contact_us->instagram)) { ?><li><a class="fa fa-instagram" href="{{$contact_us->instagram}}" title="Instagram" target="_blank"></a></li><?php } ?>
              </ul>
            </div>
          </div>
         
        </div>
      </div>
    </div>
  </div>
  <!-- end header top -->
  <!-- header bottom -->
  <div class="header_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
          <!-- logo start -->
          <div class="logo"> <a href="<?php echo url('/'.$title);?>"><img class="object-fit" src="<?php echo url('/uploads/site_settings/'.$site_logo);?>" alt="logo" /></a> </div>
          <!-- logo end -->
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
          <!-- menu start -->
          <div class="menu_side">
            <div id="navbar_menu">
              <ul class="first-ul">
               
				<li><a id="home" href="<?php echo url('/'.$title);?>">Home</a></li>
				<li><a id="products" href="<?php echo url('/'.$title.'/products/category');?>">Products</a></li>
				<li><a id="gallery" href="<?php echo url('/'.$title.'/gallery');?>">Gallery</a></li>
				 <li><a id="service" href="<?php echo url('/'.$title.'/service');?>">Services</a></li>
				  <li><a id="promotion" href="<?php echo url('/'.$title.'/promotion');?>">Promotions</a></li>
                <li><a id="about_us" href="<?php echo url('/'.$title.'/about-us');?>">About Us</a></li>
                <li><a id="contact-us" href="<?php echo url('/'.$title.'/contact-us');?>">Contact Us</a></li>
               
              </ul>
            </div>
           
          </div>
          <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
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
