
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section mb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Gallery</h1>
              <ol class="breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">Gallery</li>
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
            <h2>Our Gallery</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
	@if(count($gallery) > 0)
	@foreach($gallery as $retrieved_data)
      <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
        <div class="full pb-2">
          <div class="blog_section">
            <div class="blog_feature_img"> <a class="preview" href="{{$retrieved_data->image_path}}" rel="prettyPhoto"><img class="img-thumbnail" src="{{$retrieved_data->image_path}}" ></a> </div>
          
          </div>
        </div>
      </div>
	@endforeach  
	@else
		<div class="col-md-12"><p class="text-center">No Record Available</p></div>		
	@endif
	<div class="center">
	{{ $gallery->appends(request()->except('page'))->links("pagination::bootstrap-4") }}
	</div>
    </div>
  </div>
</div>
<!-- end section -->

@section('script')
<script>
$('#gallery').addClass('active');
</script>
@endsection