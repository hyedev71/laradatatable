<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
		<div class="sidebar-brand-icon rotate-n-15">
			<i class="fas fa-laugh-wink"></i>
		</div>
		<div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item">
		<a class="nav-link" href="/">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		DataTable
	</div>

	<!-- Nav Item - DataTable -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#collapseDatatable" aria-expanded="true" aria-controls="collapseDatatable">
			<i class="fas fa-fw fa-cog"></i>
			<span>DataTable</span>
		</a>
		<div id="collapseDatatable" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Processsing Type:</h6>
				<a class="collapse-item" href="javascript:void(0)" onclick="$('.container-fluid').load('/datatable/clientside')">Client-Side</a>
				<a class="collapse-item" href="javascript:void(0)" onclick="$('.container-fluid').load('/datatable/serverside')">Server-Side</a>
			</div>
		</div>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>
