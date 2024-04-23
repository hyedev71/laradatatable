@extends ('layouts.base')

@section ('page-level-plugins_styles')
    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section ('page-level-custom_styles')
	@yield ('page-content-custom-styles')
@endsection

@section ('body-content')
	<div class="row">
		<div class="col-md-12">
			<div class="row py-3 justify-content-center">
				<div class="col-md-9">
					@yield ('page-content')
				</div>
			</div>
		</div>
	</div>
@endsection

@section ('page-level-plugins_scripts')
    <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>
@endsection

@section ('page-level-custom_scripts')
	@yield ('page-content-custom_scripts')
@endsection
