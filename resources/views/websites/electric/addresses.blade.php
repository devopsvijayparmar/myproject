<!-- header-->
@include('websites.electric.include.header')
<!-- end header-->

<!-- common pages-->
@section('addresses_product_type')
 <input type="hidden" name="product_type" value="electric">
 @endsection
@include('websites.layouts.website_1.pages.addresses')

<!-- common pages-->

<!-- footer-->
@include('websites.electric.include.footer')
<!-- end footer-->
