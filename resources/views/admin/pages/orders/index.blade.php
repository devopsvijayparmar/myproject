@extends('admin.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Orders</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Orders</li>
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
                <h3 class="card-title">Orders</h3>
              </div>
			 
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body table-responsive">
                @include('admin.include.table')
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
  
@endsection
@section('script')
@include('admin.include.table_script')
<script>
$('#orderstab').addClass('active');

function changestatus(id,status,message,smg)  {
	
	Swal.fire({
	title: message,
	text: "You will not be able to recover record!",
	icon: "warning",
	showCancelButton: true,
	confirmButtonColor: "#28D094",
	confirmButtonText: "Yes, change it!",
	cancelButtonText: "No, cancel please!"
	}).then(function (result) {
		if (result.value) {
			$.ajax({
				url:"{{ URL::to('/')}}/admin/orders/"+id,
				type: "DELETE",
				data: {id: id,status:status,message:message,smg:smg, _token: "{{ csrf_token() }}"},
				success: function (response) {
					$('.dataTable').DataTable().ajax.reload(null, false);
					toastr.success("Status changed successfully.");
				}
			});
		}
	});	
	
}  
  
</script>
@endsection  
 