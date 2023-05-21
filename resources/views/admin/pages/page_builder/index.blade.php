@extends('admin.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Page Builder</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
				<li class="breadcrumb-item active">Page Builder</li>
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
                <div class="card-body table-responsive">
				<div class="form-group col-md-4 p-0">
					<label for="exampleInputEmail1">Menu Name </label>
					<input onkeyup="changeMenuName(this.value);" type="text" class="form-control" id="menu_name" value="{{Auth::user()->page_name}}" maxlength="20">
				</div>
				 <a type="button" class="btn btn-primary float-right ml-2 mb-4" href="{{route('page-builder.create')}}">Create Web Page</a>
                <div class="card-body p-0">
				<div class="btn-group btn-group-toggle" data-toggle="buttons">
					<label style="text-align: left;" class="btn btn-default">
					<p class="m-0"><strong>Important Note</strong>: Using drag & drop, you can change the position of these pages.</p>
				</label></div>
                <div class="table-responsive">
                  <table class="table m-0 table-bordered">
                    <thead>
                    <tr>
                      <th style="width: 10%;">Draggable</th>
                      <th>Page Title</th>
					  <th>Url</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody class="row_position">
						@foreach($page as $pagedata)
						<tr id="{{$pagedata->id}}">
							<td><i class="fas fa-arrows-alt" style="cursor: pointer;" aria-hidden="true"></i></td>
							<td>{{$pagedata->title}}</td>
							<td><label style="text-align: left;" class="btn btn-default"><p class="m-0"><a href="{{$pagedata->url}}" target="_blank"><i class="fas fa-external-link-alt"></i> {{$pagedata->url}}</a></p></td>
							<td>
							
							<a title="Edit" class="mr-2" href="{{route('page-builder.edit', Crypt::encrypt($pagedata->id)) }}" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
							 
							<a class="mr-2" title="Delete" href="javascript:void(0);" onclick="deleteRecord('{{route('page-builder.destroy', Crypt::encrypt($pagedata->id))}}');" data-popup="tooltip"><i class="fas fa-trash-alt text-info font-16"></i></a>
							
							<a title="Details" target="_blank" href="{{$pagedata->url}}" data-popup="tooltip"><i class="fas fa-eye text-info font-16"></i></a>
							
							
							</td>
							
						</tr>
						@endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
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


@endsection
@section('script')
<script>
$('#page-builder-tab').addClass('active');

	$( ".row_position" ).sortable({
		delay: 150,
		stop: function() {
			var selectedData = new Array();
			$('.row_position tr').each(function() {
				selectedData.push($(this).attr("id"));
			});
			$.ajax({
				url: '{{route("reposition")}}',
				type: "POST",
				data: {id:selectedData, _token: "{{csrf_token()}}"},
				success: function (response)
				{
					if(response == 1){
						toastr.success('Record updated successfully');
					}else{
						toastr.success('Whoops, looks like something went wrong. Please try again');
					}
				}
			});
			
		}
	});

function changeMenuName(page_name){
	$.ajax({
		url: "{{route('change-menu-name')}}",
		type: "POST",
		data: {page_name:page_name,_token: "{{csrf_token()}}"},
		success: function (response)
		{
			if(response == 1){
				toastr.success('Record updated successfully');
			}else{
				toastr.success('Whoops, looks like something went wrong. Please try again');
			}
		}
	});
}

</script>
@endsection  