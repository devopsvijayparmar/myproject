 @include('admin.include.header')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Books</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo url('/admin/home');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo url('/admin/books');?>">Books</a></li>
              <li class="breadcrumb-item active">Show Book</li>
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
                <h3 class="card-title">Show Book</h3>
              </div>
			 
              <!-- /.card-header -->
              <!-- form start -->
			  
                <div class="card-body">
					<div class="row">
						<div class="col-12 col-sm-6">
						  
						  <div class="col-12">
							<img src="<?php echo url('/uploads/books/'.$data->image_1);?>" class="product-image" alt="Product Image">
						  </div>
						  <div class="col-12 product-image-thumbs">
							<div class="product-image-thumb active"><img src="<?php echo url('/uploads/books/'.$data->image_1);?>" alt="Product Image"></div>
							<?php 
							if($data->image_2)
							{
							?>
							<div class="product-image-thumb" ><img src="<?php echo url('/uploads/books/'.$data->image_2);?>" alt="Product Image"></div>
							<?php } 
							if($data->image_3) {
							?>
							<div class="product-image-thumb" ><img src="<?php echo url('/uploads/books/'.$data->image_3);?>" alt="Product Image"></div>
							<?php } ?>
						  </div>
						</div>
						<div class="col-12 col-sm-6">
						  <h3 class="my-3">{{$data->name}}</h3>
						  <span class="description">Category - {{$data->category_name}}</span></br></br>
						  <span class="description">Author - {{$data->author}}</span></br></br>
						  <span class="description">Date Released - {{$data->date_released}}</span></br></br>
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
$('#bookstab').addClass('active');
</script>