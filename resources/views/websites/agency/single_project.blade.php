 @include('websites.agency.include.header')
 <link href="{{ asset('/websites/agency/css/single_product.css') }}" rel="stylesheet">
    <section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center clr-white">
                    <h2 class="clr-white">Project Detail</h2>
					<a class="clr-white" href="{{url('/')}}/{{$title}}">Home</a> <a class="clr-white">/<a> <a class="clr-white" href="javascript:void(0)">Project Detail</a>
                </div>
            </div>
        </div>
    </section><!--/#cta-->
   
     <section id="blog" style="margin-bottom:80px;">
        <div class="container">
            	<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><a class="preview" href="{{url('/uploads/projects')}}/{{$project->image_1}}" rel="prettyPhoto"><img src="{{url('/uploads/projects')}}/{{$project->image_1}}" /></a></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						
						  
						    <li class="active"> <a class="preview" href="{{url('/uploads/projects')}}/{{$project->image_1}}" rel="prettyPhoto"><img src="{{url('/uploads/projects')}}/{{$project->image_1}}" /></a></li>
							
							@if($project->image_2)
						   <li> <a class="preview" href="{{url('/uploads/projects')}}/{{$project->image_2}}" rel="prettyPhoto"><img src="{{url('/uploads/projects')}}/{{$project->image_2}}" /></a></li>
							@endif
						   @if($project->image_3)
						   <li> <a class="preview" href="{{url('/uploads/projects')}}/{{$project->image_3}}" rel="prettyPhoto"><img src="{{url('/uploads/projects')}}/{{$project->image_3}}" /></a></li>
							@endif
						</ul>
						
					</div>
					<div class="details col-md-6 detail-desc">
						<h3 class="product-title">{{$project->name}}</h3>
						<div class="rating">
							<span class="review-no">{{$project->project_type_name}}</span>
						</div>
						{!! $project->description !!}
					</div>
				</div>
			</div>

        </div>
    </section>
    
  @include('websites.agency.include.footer')
   <script>
	$('#projects').addClass('active');
  </script>