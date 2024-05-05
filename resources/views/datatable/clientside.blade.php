@extends ('index')

@section ('page-content')
	<div class="card shadow py-3">
		<div class="card-header">
			<h6 class="m-0 font-weight-bold text-primary">DataTables Example (Client-Side Processing)</h6>
		</div>
		<div class="card-body">

			<div class="table-responsive">
				<table class="table table-bordered" id="dt_client_side" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Name</th>
							<th>Position</th>
							<th>Office</th>
							<th>Age</th>
							<th class="text-center">Start Date</th>
							<th class="text-right">Salary (RM)</th>
						</tr>
					</thead>
					<tbody>
						@if (!empty($staff))
							@foreach ($staff as $st)
								<tr data-id="{{ $st->staff_id }}">
									<td>{{ $st->fullname }}</td>
									<td>{{ $st->position }}</td>
									<td>{{ $st->office }}</td>
									<td>{{ $st->age }}</td>
									<td class="text-center">{{ date("Y-m-d", strtotime($st->start_date)) }}</td>
									<td class="text-right">{{ number_format($st->salary, 2, '.', ',') }}</td>
								</tr>
							@endforeach
						@endif
					</tbody>
				</table>
			</div>

		</div>
	</div>

	<script>
		$(document).ready(function() {
			$('#dt_client_side').DataTable();
		});
	</script>
@endsection
