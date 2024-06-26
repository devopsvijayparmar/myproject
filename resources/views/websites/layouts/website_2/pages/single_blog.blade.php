
<section id="cta" class="wow fadeIn">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center clr-white">
				<h2 class="clr-white">Blog</h2>
				<a class="clr-white" href="{{url('/')}}">Home</a> <a class="clr-white">/<a> <a class="clr-white" href="javascript:void(0)">Blog</a>
			</div>
		</div>
	</div>
</section><!--/#cta-->

 <section id="blog" style="margin-bottom:80px;">
	<div class="container">
	<div class="section-header">
			<h2 class="section-title text-center wow fadeInDown">Blogs</h2>
			<p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">In our latest blog post, we delve into the secrets of effective time management,<br> offering practical tips to boost productivity and achieve work-life balance</p>
		</div>
		<div class="row">
			<main>
				<div class="container mt-4">
					<div class="row">
					
					<div class="col-md-6">
					<a rel="prettyPhoto" class="preview" href="{{$blog->image_url}}">
					  <img src="{{$blog->image_url}}" alt="Property Image" class="img-fluid">
					  </a>
					</div>
					
					<div class="col-md-6">
					  <h3> {{ $blog->title }}</h3>
					  <small> {{date('D, M d, Y',strtotime($blog->created_at))}}</small>
					  {!! $blog->description !!}
					</div>
					</div>
				</div>
			</main>
		</div>
	</div>
</section>

@section('script')
<script>
$('#blogtab').addClass('active');
</script>
@endsection  