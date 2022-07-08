@include('super_admin.include.header')
@include('super_admin.include.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5 class="m-0 text-dark"> Role Management </h5>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/super-admin/home') }}">Home</a></li>
              <li class="breadcrumb-item">Role Management</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
			<div class="card">
				<div class="card-body table-responsive">
			 <a type="button" class="btn btn-primary float-right ml-2" href="{{ route('roles.create') }}">Add</a>
			  <table id="example1" class="table table-bordered table-striped">
				<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th width="280px">Action</th>
				</tr>
				</thead>
				<tbody>
					@foreach ($roles as $key => $role)
						<tr>
							<td>{{ ++$i }}</td>
							<td>{{ $role->name }}</td>
							<td>
								<a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
								
									<a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
								
								@can('role-delete')
									{!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
										{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
									{!! Form::close() !!}
								@endcan
							</td>
						</tr>
						@endforeach
				</tfoot>
			  </table>
			</div>
			</div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 @include('super_admin.include.footer')
