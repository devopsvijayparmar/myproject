@include('websites.furniture.include.header')

    <section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center clr-white">
                    <h2 class="clr-white">Projects</h2>
					<a class="clr-white" href="{{url('/')}}/{{$title}}">Home</a> <a class="clr-white">/<a> <a class="clr-white" href="javascript:void(0)">Projects</a>
                </div>
            </div>
        </div>
    </section><!--/#cta-->

    <section id="blog" class="mb-5" style="margin-bottom:80px;">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Projects</h2>
            </div>
			
			<div class="row">
			@if(count($projects) >0)
			@foreach($projects as $projectsdata) 
			<div class="col-md-4 col-sm-6">
				<div class="product-grid" style="padding:0!important">
					<div class="product-image">
						<a href="{{url('/')}}/{{$title}}/{{App\Helpers\CryptHelper::encryptstring($projectsdata->id)}}/single-project">
							<img class="pic-1" src="{{url('uploads/projects')}}/{{$projectsdata->image_1}}">
						</a>
						<ul class="social">
							<li><a href="{{url('/')}}/{{$title}}/{{App\Helpers\CryptHelper::encryptstring($projectsdata->id)}}/single-project" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
						</ul>
						<!--<span class="product-new-label">Sale</span>
						<span class="product-discount-label">20%</span>-->
					</div>
					<div class="p-2">
						<div class="font-clr">{{ mb_strimwidth($projectsdata->name, 0, 50, "...")}}</div>
						<div class="font-clr"><div class="">{{ mb_strimwidth($projectsdata->project_type_name, 0, 50, "...")}}</div></div>
					</div>
				</div>
			</div>
			@endforeach
			@else
				<h4 class="text-center">No Record Available</h4>
			@endif
			</div>
        </div><!--/.container-->
    </section><!--/#portfolio-->
@include('websites.furniture.include.footer')
<script>
$('#projects').addClass('active');
</script>