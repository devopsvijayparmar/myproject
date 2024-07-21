<div class="section pb-40">
  <div class="container">
   <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Gallery</h2>
			<p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Immerse yourself in a visual journey through our diverse image gallery,<br> where every picture tells a unique story and sparks inspiration</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
	@if(count($gallery8) > 0)
	@foreach($gallery8 as $retrieved_data)
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
    </div>
	@if(count($product8) >0)
	 <div class="text_align_center pt-2">
		<a class="main_bt_new" href="{{$product8[0]->getProjectCategoryLink()}}">See More...</a>
	 </div>
	@endif
  </div>
</div>