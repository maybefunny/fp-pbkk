<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
		<div class="sidebar-brand-icon rotate-n-15">
			<i class="fas fa-gift"></i>
		</div>
		<div class="sidebar-brand-text mx-3"><?php echo SITE_NAME ?> <sup>2</sup></div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active' : '' ?>">
		<a class="nav-link" href="<?php echo site_url('dashboard/admin') ?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Overview</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Menu
	</div>

	<!-- Nav Item - Pages Collapse Menu -->
	<li class="nav-item <?php echo $this->uri->segment(2) == 'donasi' ? 'active' : '' ?>">
		<a class="nav-link" href="<?php echo site_url('dashboard/donasi') ?>">
			<i class="fas fa-fw fa-boxes"></i>
			<span>Donasi</span></a>
	</li>

	<li class="nav-item <?php echo $this->uri->segment(2) == 'kebutuhan' ? 'active' : '' ?>">
		<a class="nav-link" href="<?php echo site_url('dashboard/kebutuhan') ?>">
			<i class="fas fa-fw fa-list"></i>
			<span>Kebutuhan</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">

	<li class="nav-item <?php echo $this->uri->segment(2) == 'logout' ? 'active' : '' ?>">
		<a class="nav-link" href="<?php echo site_url('auth/logout') ?>">
			<i class="fas fa-fw fa-sign-out-alt"></i>
			<span>Logout</span></a>
	</li>

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>
<!-- End of Sidebar -->