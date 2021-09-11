@extends('layouts.master')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">

		<!-- Main content -->
		<section class="content">
		  <div class="row">

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">User's List</h3>

				</div>
				<!-- /.box-header -->
				<div class="box-body">
                    @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success')}}
                    </div>
                    @endif
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="5%">S/N</th>
								<th>Name</th>
								<th>Email</th>
								<th width="25%">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($allData as $key => $user)
							<tr>
								<td>{{$key+1}}</td>
								<td>{{$user->name}}</td>
								<td>{{$user->email}}</td>
								<td>
									<form action="{{ route('admin.activate-user', ['user' => $user->id])}}" method="post">
                                        @csrf
                                        <button class="btn btn-info" type="submit">Approve</button>
                                    </form>
								</td>
							</tr>
							@endforeach

						</tbody>

					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->


			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->

	  </div>
  </div>
  <!-- /.content-wrapper -->

@endsection

@section('javascript')
	<!-- Vendor JS -->
	<script src="{{ asset('backend/js/vendors.min.js') }}"></script>
    <script src="{{ asset('../assets/icons/feather-icons/feather.min.js') }}"></script>	<script src="../assets/vendor_components/datatable/datatables.min.js"></script>
	<script src="{{ asset('backend/js/pages/data-table.js') }}"></script>

	<!-- Sunny Admin App -->
	<script src="{{ asset('backend/js/template.js') }}"></script>


@endsection
