
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section mb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Blog</h1>
              <ol class="breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">Blog</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->
<!-- section -->
<div class="section pb-40">
  <div class="container">
     <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Our Blog</h2>
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
            <h4>{{$blogdata->title}}</h4>
          </div>
          <div class="blog_feature_cont">
            <p>{!! mb_strimwidth($blogdata->description, 0, 100, "...") !!}</p>
          </div>
          </div>
        </div>
    </div>
	@endforeach
	@else 
		<div class="col-md-12"><p class="text-center">No Blog Available</p></div>		   
	@endif
    </div>
	<div class="center">
	{{ $blog->appends(request()->except('page'))->links("pagination::bootstrap-4") }}
	</div>
  </div>
</div>

@section('script')
<script>
$('#blog').addClass('active');
</script>
@endsection