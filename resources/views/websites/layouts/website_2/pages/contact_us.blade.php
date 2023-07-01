
<section id="cta" class="wow fadeIn">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center clr-white">
				<h2 class="clr-white">Contact Us</h2>
				<a class="clr-white" href="{{url('/')}}">Home</a> <a class="clr-white">/<a> <a class="clr-white" href="javascript:void(0)">Contact Us</a>
			</div>
		  
		</div>
	</div>
</section><!--/#cta-->

<section id="services" >
	<div class="container">

		<div class="section-header">
			<h2 class="section-title text-center wow fadeInDown">Contact Us</h2>
			<p class="text-center">For any issues or questions that arise, our dedicated support team is here to assist you.<br> Don't hesitate to reach out and let us help you find a solution.</p>
		</div>

		<div class="row">
				<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
					<div class="media service-box">
						<div class="pull-left">
							<i class="fa fa-envelope"></i>
						</div>
						<div class="media-body">
							<h4 class="media-heading">Email</h4>
							<p>@if(isset($contact_us->email)) {{ $contact_us->email }} @endif</p>
						</div>
					</div>
				</div><!--/.col-md-4-->

				<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
					<div class="media service-box">
						<div class="pull-left">
							<i class="fa fa-map-marker"></i>
						</div>
						<div class="media-body">
							<h4 class="media-heading">Address</h4>
							<p>@if(isset($contact_us->address)) {{$contact_us->address }} @endif</p>
						</div>
					</div>
				</div><!--/.col-md-4-->

				<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
					<div class="media service-box">
						<div class="pull-left">
							<i class="fa fa-mobile"></i>
						</div>
						<div class="media-body">
							<h4 class="media-heading">Contact No.</h4>
							<p>@if(isset($contact_us->contact_1)) <i class="fa fa-phone"></i> {{ $contact_us->contact_1 }} @endif</p>
							<p>@if(isset($contact_us->contact_2)) <i class="fa fa-phone"></i> {{ $contact_us->contact_2 }} @endif</p>
						</div>
					</div>
				</div><!--/.col-md-4-->
				
				<div class="col-md-8 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
					<form  method="POST" action="{{url('contact-us')}}" enctype="multipart/form-data" id="main_id" class="form_contant">
						@csrf
						<div class="form-group">
							<input type="text" name="name" id="name" class="form-control" placeholder="Your Name" maxlength="255">
							<span id="name_error" class="error-help-block">{{$errors->first('name')}}</span>
						</div>
						<div class="form-group">
							<input type="text" name="email" id="email" class="form-control" placeholder="Your Email" maxlength="255">
							<span id="email_error" class="error-help-block">{{$errors->first('email')}}</span>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your Mobile" onkeypress="return isNumberKey(event)" type="text" name="mobile" id="mobile">
							<span id="mobile_error" class="error-help-block">{{$errors->first('mobile')}}</span>
						</div>
					
						<div class="form-group">
							<textarea class="form-control" rows="8" placeholder="Message..."  name="message" id="message"></textarea>
							<span id="message_error" class="error-help-block">{{$errors->first('message')}}</span>
						</div>
						<button type="submit" class="btn btn-primary">Send Message</button>
					</form>
				</div><!--/.col-md-4-->
		</div><!--/.row-->    
	</div><!--/.container-->
</section><!--/#services-->

@section('script')
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!!$validator->selector('#main_id')!!}
<script>
function isNumberKey(evt) {
	var charCode = (evt.which) ? evt.which : evt.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))
		return false;
	return true;
}
$('#contact-us-tab').addClass('active');
</script>
@endsection