<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="{{ asset(auth()->user()->photo) }}" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p>{{ Auth::user()->name }}</p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<?php $active_menu = isset($active_menu) ? $active_menu : '' ?>
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MAIN NAVIGATION</li>
			<li class="{{ $active_menu == 'dashboard' ? 'active' : '' }}">
				<a href="{{ url('console/dashboard') }}">
					<i class="fa fa-dashboard"></i> <span>Dashboard</span>
				</a>
			</li>
			<li class="{{ $active_menu == 'users' ? 'active' : '' }}">
				<a href="{{ url('console/users') }}">
					<i class="fa fa-users"></i> <span>User</span>
				</a>
			</li>
			<li class="{{ $active_menu == 'items' ? 'active' : '' }}">
				<a href="{{ url('console/items') }}">
					<i class="fa fa-list"></i> <span>Item</span>
				</a>
			</li>
			<li class="{{ $active_menu == 'item_types' ? 'active' : '' }}">
				<a href="{{ url('console/item_types') }}">
					<i class="fa fa-list"></i> <span>Jenis Item</span>
				</a>
			</li>
			<li class="{{ $active_menu == 'locations' ? 'active' : '' }}">
				<a href="{{ url('console/locations') }}">
					<i class="fa fa-map-marker"></i> <span>Lokasi</span>
				</a>
			</li>
			<li>
				<a href="{{ url('console/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
					<i class="fa fa-sign-out"></i> <span>Logout</span>
				</a>
				<form id="logout-form" action="{{ url('console/logout') }}" method="POST" class="d-none">
					@csrf
				</form>
			</li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>