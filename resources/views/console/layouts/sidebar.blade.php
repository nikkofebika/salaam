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
					<i class="fa fa-users"></i> <span>Admin</span>
				</a>
			</li>
			<li class="{{ $active_menu == 'pendakwah' ? 'active' : '' }}">
				<a href="{{ url('console/pendakwah') }}">
					<i class="fa fa-users"></i> <span>Pendakwah</span>
				</a>
			</li>
			<li class="{{ $active_menu == 'video_playlists' ||  $active_menu == 'videos' ? 'active' : '' }} treeview">
				<a href="#">
					<i class="fa fa-video-camera"></i> <span>Youtube</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li class="{{ $active_menu == 'video_playlists' ? 'active' : '' }}"><a href="{{ url('console/video_playlists') }}"><i class="fa fa-circle-o"></i> Playlist</a></li>
					<li class="{{ $active_menu == 'videos' ? 'active' : '' }}"><a href="{{ url('console/videos') }}"><i class="fa fa-circle-o"></i> Video</a></li>
				</ul>
			</li>
			<li>
				<a href="{{ url('console/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
					<i class="fa fa-sign-out"></i> <span>Logout</span>
				</a>
				<form id="logout-form" action="{{ route('console.logout') }}" method="POST" class="d-none">
					@csrf
				</form>
			</li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>