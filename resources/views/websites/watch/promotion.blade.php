 @include('websites.watch.include.header')
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Promotion</h1>
              <ol class="breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">Promotion</li>
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
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Promotions</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
     @if(isset($promotion)) {!! $promotion->description !!} @else  <div class="col-md-12"><p class="text-center">No Promotions Available</p></div> @endif
    </div>
  </div>
</div>
<!-- end section -->

<!-- footer -->
 @include('websites.watch.include.footer')
<script>
$('#promotion').addClass('active');
</script>