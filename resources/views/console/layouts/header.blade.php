<header class="main-header">
	<!-- Logo -->
	<a href="javascript:void(0)" class="logo">
		<!-- mini logo for sidebar mini 50x50 pixels -->
		<span class="logo-mini"><b>CAFE</b></span>
		<!-- logo for regular state and mobile devices -->
		<span class="logo-lg"><b>CAFE</b></span>
	</a>
	<!-- Header Navbar: style can be found in header.less -->
	<nav class="navbar navbar-static-top">
		<!-- Sidebar toggle button-->
		<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle navigation</span>
		</a>

		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<li class="dropdown messages-menu">
					<a href="{{ url('/') }}" target="_blank">
						<i class="fa fa-globe"></i> Ke Website
					</a>
				</li>
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="{{ asset(auth()->user()->photo) }}" class="user-image" alt="User Image">
						<span class="hidden-xs">{{ Auth::user()->name }}</span>
					</a>
					<ul class="dropdown-menu">
						<!-- User image -->
						<li class="user-header">
							<img src="{{ asset(auth()->user()->photo) }}" class="img-circle" alt="User Image">

							<p>
								{{ Auth::user()->name }} - Admin
								<small>Member sejak {{ date('d-m-Y', strtotime(Auth::user()->created_at)) }}</small>
							</p>
						</li>
						<!-- Menu Footer-->
						<li class="user-footer">
							<!-- <div class="pull-left">
								<a href="#" class="btn btn-default btn-flat">Profile</a>
							</div> -->
							<!-- <div class="pull-right"> -->
								<a href="{{ url('console/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-default btn-block">
									<span>Logout</span>
								</a>
								<form id="logout-form" action="{{ url('console/logout') }}" method="POST" class="d-none">
									@csrf
								</form>
							<!-- </div> -->
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
</header>