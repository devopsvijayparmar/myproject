
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Blog Detail</h1>
              <ol class="breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">Blog Detail</li>
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
<div class="section padding_layout_1 blog_grid">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 pull-right blog-border">
        <div class="full">
          <div class="blog_section margin_bottom_0">
            <div class="blog_feature_img pb-2"> <img class="img-thumbnail" src="{{$blog->image_url}}" alt="#"> </div>
            <div class="">
              <p class="blog_head">{{$blog->title}}</p>
              <div class="post_info">
                <ul>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> {{date('D, M d, Y',strtotime($blog->created_at))}}</li>
                </ul>
              </div>
              {!! $blog->description !!}
            </div>
          </div>
        </div>
      </div>
	  
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-left">
        <div class="side_bar">
          <div class="side_bar_blog">
            <h4>RECENT POST</h4>
            <div class="recent_post">
              <ul>
			  
			    @foreach($bloglast3 as $retrieved_data)
                <li>
				<p class="post_head"><a href="{{$retrieved_data->getDetailPageLink()}}"> {{$retrieved_data->title}}</a></p>
                  <p class="post_date"><i class="fa fa-calendar" aria-hidden="true"></i> {{date('D, M d, Y',strtotime($retrieved_data->created_at))}}</p>
                </li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@section('script')
<script>
$('#blog').addClass('active');
</script>
@endsection