<!-- Footer -->
<div class="section it_service_policy" style="padding: 30px 0px 30px 0px;background: #2e2e2e; color: white;">
        <div class="container">
            <div class="row">
           
			 <div class="col-md-4">
			   <ul class="first-ul" style="color:white;">
					<li><?php if(isset($contact_us->address)) { ?> <i class="fa fa-home"></i> {{$contact_us->address}} <?php } ?></li>
					<li><?php if(isset($contact_us->email)) { ?><i class="fa fa-envelope-o"></i> <a style="color:white" href="mailto:{{$contact_us->email}}">{{$contact_us->email}}</a> <?php } ?></li>
					<li> <?php if(isset($contact_us->contact_1)) { ?> <i class="fa fa-phone"></i> <a style="color:white" href="tel:{{$contact_us->contact_1}}">{{$contact_us->contact_1}}</a><?php } ?></li>
				</ul>
			</div>
			
			<div class="col-md-4">
				<ul class="first-ul" style="color:white;">
			    	<li><a id="blog" href="<?php echo url('/'.$title.'/blog');?>">Blog</a></li>
					<li><a id="service" href="<?php echo url('/'.$title.'/service');?>">Services</a></li>
					<li><a id="promotion" href="<?php echo url('/'.$title.'/promotion');?>">Promotions</a></li>
					<li><a id="about_us" href="<?php echo url('/'.$title.'/about-us');?>">About Us</a></li>
					<li><a id="contact-us" href="<?php echo url('/'.$title.'/contact-us');?>">Contact Us</a></li>
				</ul>
			</div> 
			 <div class="col-md-4">
			  <ul class="first-ul" style="color:white;">
					<li> <?php if(isset($contact_us->facebook)) { ?><a style="color:white" class="fa fa-facebook mr-2 font-25" href="{{$contact_us->facebook}}" title="Facebook" target="_blank"></a><?php } ?></li>
					<li> <?php if(isset($contact_us->twitter)) { ?><a style="color:white" class="fa fa-twitter mr-2 font-25" href="{{$contact_us->twitter}}" title="Twitter" target="_blank"></a><?php } ?></li>
					<li> <?php if(isset($contact_us->linkedin)) { ?><a style="color:white" class="fa fa-linkedin mr-2 font-25" href="{{$contact_us->linkedin}}" title="LinkedIn" target="_blank"></a><?php } ?></li>
					<li>   <?php if(isset($contact_us->instagram)) { ?><a style="color:white" class="fa fa-instagram mr-2 font-25" href="{{$contact_us->instagram}}" title="Instagram" target="_blank"></a><?php } ?></li>
				</ul>
			</div>
			</div>
		</div>
</div>


<!-- end footer -->
<!-- js section -->
<script src="{{ url('/websites/cloth/js/jquery.min.js') }}"></script>
<script src="{{ url('/websites/cloth/js/bootstrap.min.js') }}"></script>
<!-- menu js -->
<script src="{{ url('/websites/cloth/js/menumaker.js') }}"></script>
<!-- wow animation -->
<script src="{{ url('/websites/cloth/js/wow.js') }}"></script>
<!-- custom js -->
<script src="{{ url('/websites/cloth/js/custom.js') }}"></script>
<!-- revolution js files -->
<script src="{{ url('/websites/cloth/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ url('/websites/cloth/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ url('/websites/cloth/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ url('/websites/cloth/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ url('/websites/cloth/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ url('/websites/cloth/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ url('/websites/cloth/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ url('/websites/cloth/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ url('/websites/cloth/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ url('/websites/cloth/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ url('/websites/cloth/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ url('/owl/owl.carousel-2.3.4.min.js') }}"></script>
<script src="{{ url('/admin/plugins/toastr/toastr.min.js') }}"></script>

<!--for image Popup js-->
<script src="{{ url('/websites/studio/js/mousescroll.js') }}"></script>
<script src="{{ url('/websites/studio/js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ url('/websites/studio/js/main.js') }}"></script>
<!--for image Popup js-->
<!-- map js -->

<!-- end google map js -->
</body>
</html>
@if(Session::has('success'))
<script>
toastr.success('<?php echo Session::get('success') ?>', '', {timeOut: 5000});
</script>
@endif

@if(Session::has('error'))
<script>
toastr.error('<?php echo Session::get('error') ?>', '', {timeOut: 5000});
</script>
@endif
