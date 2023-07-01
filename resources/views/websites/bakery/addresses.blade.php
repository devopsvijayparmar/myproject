<!-- header-->
@include('websites.bakery.include.header')
<!-- end header-->

<!-- common pages-->
@section('addresses_product_type')
 <input type="hidden" name="product_type" value="product">
 @endsection
@include('websites.layouts.website_1.pages.addresses')
<!-- common pages-->

<!-- footer-->
@include('websites.bakery.include.footer')
<!-- end footer-->
