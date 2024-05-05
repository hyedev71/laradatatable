@extends ('index')

@section ('page-content')
	<div class="card shadow py-3">
		<div class="card-header">
			<h6 class="m-0 font-weight-bold text-primary">DataTables Example (Server-Side Processing)</h6>
		</div>
		<div class="card-body">

			<div class="table-responsive">
				<table class="table table-bordered" id="dt_server_side" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Name</th>
							<th>Position</th>
							<th>Office</th>
							<th>Age</th>
							<th>Start Date</th>
							<th>Salary (RM)</th>
						</tr>
					</thead>
				</table>
			</div>

		</div>
	</div>

	<script>
		var dt_server_side_dt;

		$(document).ready(function() {
			dt_server_side_dt = $('#dt_server_side').DataTable({
				processing: true,
				serverSide: true,
				ajax: "/datatable/serverside/get/data",
				columns: [
					{data: 'fullname', name: 'fullname'},
					{data: 'position', name: 'position'},
					{data: 'office', name: 'office'},
					{data: 'age', name: 'age'},
					{data: 'start_date', name: 'start_date'},
					{
						data: 'salary', 
						name: 'salary', 
						render: $.fn.dataTable.render.number( ',', '.', 2 ),
						className: 'text-right',
					},
				],
			});
		});
	</script>
@endsection
