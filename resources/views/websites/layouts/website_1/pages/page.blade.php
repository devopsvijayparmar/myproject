
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section mb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">{{$page->title}}</h1>
              <ol class="breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">{{$page->title}}</li>
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
        <div class="">
          <div class="main_heading text_align_center">
            <h2>{{$page->title}}</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-12">
            <div class="full">
              <p>{!!$page->description!!}</p>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>
<!-- end section -->
