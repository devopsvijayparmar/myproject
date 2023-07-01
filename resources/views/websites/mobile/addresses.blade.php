<!-- header-->
@include('websites.mobile.include.header')
<!-- end header-->

<!-- common pages-->

@section('addresses_product_type')
 <input type="hidden" name="product_type" value="mobile">
 @endsection
@include('websites.layouts.website_1.pages.addresses')

<!-- common pages-->

<!-- footer-->
@include('websites.mobile.include.footer')
<!-- end footer-->
