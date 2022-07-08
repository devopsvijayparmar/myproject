 @include('admin.include.header')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Event</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo url('/admin/home');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo url('/admin/event');?>">Event</a></li>
              <li class="breadcrumb-item active">Show Event</li>
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
                <h3 class="card-title">Show Event</h3>
              </div>
			 
              <!-- /.card-header -->
              <!-- form start -->
			  
                <div class="card-body">
					<div class="row">
						<div class="col-12 col-sm-6">
						  
						  <div class="col-12">
							<img src="<?php echo url('/uploads/event/'.$data->image);?>" class="product-image" alt="Product Image">
						  </div>
						  <div class="col-12 product-image-thumbs">
							<div class="product-image-thumb active"><img src="<?php echo url('/uploads/event/'.$data->image);?>" alt="Product Image"></div>
						  </div>
						</div>
						<div class="col-12 col-sm-6">
						  <h3 class="my-3">{{$data->title}}</h3>
						  <p><?php echo $data->description;?></p>
						  <hr>
						
						</div>
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
$('#eventtab').addClass('active');
</script>