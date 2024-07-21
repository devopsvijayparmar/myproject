<div class="section pb-40">
	<div class="container">
	<div class="row">
	  <div class="col-md-12">
		<div class="full">
		  <div class="main_heading text_align_center">
			<h2>Blogs</h2>
			<p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">In our latest blog post, we delve into the secrets of effective time management,<br> offering practical tips to boost productivity and achieve work-life balance</p>
		  </div>
		</div>
	  </div>
	</div>
	
    <div class="row">
	@if(count($blog) > 0)
	@foreach($blog as $blogdata)
      <div class="col-md-4 blog-border">
        <div class="full blog_colum">
          <a href="{{$blogdata->getDetailPageLink()}}"> <div class="blog_feature_img"> <img class="card-img-top" src="{{$blogdata->image_url}}" alt="#" /> </div></a>
		  <div class="p-3">
			  <div class="post_time">
				<p><i class="fa fa-clock-o"></i> {{date('D, M d, Y',strtotime($blogdata->created_at))}}</p>
			  </div>
			  <div class="blog_feature_head">
				<h4>{{ mb_strimwidth($blogdata->title, 0, 40, "...") }}</h4>
			  </div>
			  <div class="blog_feature_cont">
				<p>{!! mb_strimwidth($blogdata->description, 0, 400, "...") !!}</p>
			  </div>
		  </div>
		</div>
      </div>
	@endforeach
	@else
	<div class="col-md-12"><p class="text-center">No Blog Available</p></div>
    @endif
    </div>
	@if(count($blog) > 0)
	<div class="text_align_center pt-2">
	<a class="main_bt_new" href="{{$blog[0]->getBlogPageLink()}}">See More...</a>
	</div>
	@endif
  </div>
</div>