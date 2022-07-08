 @include('admin.include.header')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Order</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo url('/admin/home');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo url('/admin/orders');?>">Order</a></li>
              <li class="breadcrumb-item active">Show Order</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Show Order</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
			
                <div class="card-body">
				<p class="lead">Customer Details</p>
				<div class="col-md-10">
					<table class="table table-responsive">
                      <tbody>
					  
					  <tr>
                        <th style="width:50%">Image:</th>
                        <td><img class="rp-img" src="<?php echo url('/uploads/products/'.$product->image_1);?>"></td>
                      </tr>
					   <tr>
                        <th>Category:</th>
                        <td>$250.30</td>
                      </tr>
					   <tr>
                        <th>Name:</th>
                        <td>{{$product->name}}</td>
                      </tr>
					   <?php
						$currency_symbol = "";
						if(isset($site_setting->currency_symbol)) { $currency_symbol = $site_setting->currency_symbol;};
						if($product->price)
						{
						   
						?>
					   <tr>
                        <th>Price:</th>
                        <td>{{$currency_symbol.$product->price}}</td>
                      </tr>
						<?php } ?>
					   <tr>
                        <th>Quantity:</th>
                        <td>{{$order->quantity}}</td>
                      </tr>
					  <tr>
                        <th>Full name:</th>
                       <td>{{$order->name}}</td>
                      </tr>
                      <tr>
                        <th>Mobile number</th>
                        <td>{{$order->mobile}}</td>
                      </tr>
                      <tr>
                        <th>Email Address:</th>
                        <td>{{$order->email}}</td>
                      </tr>
                      <tr>
                        <th>Pincode:</th>
                        <td>{{$order->pincode}}</td>
                      </tr>
					   <tr>
                        <th>Flat, House no., Building, Company, Apartment:</th>
                        <td>{{$order->company}}</td>
                      </tr>
					   <tr>
                        <th>Area, Street, Sector, Village:</th>
                         <td>{{$order->area}}</td>
                      </tr>
					   <tr>
                        <th>Landmark:</th>
                         <td>{{$order->landmark}}</td>
                      </tr>
					   <tr>
                        <th>Town/City:</th>
                        <td>{{$order->city}}</td>
                      </tr>
					   <tr>
                        <th>State:</th>
                         <td>{{$order->state}}</td>
                      </tr>
					  
                    </tbody></table>
				</div>
				</div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('admin.include.footer')
<script>
$('#orderstab').addClass('active');
</script>