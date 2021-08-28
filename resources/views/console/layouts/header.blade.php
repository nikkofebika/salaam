<header class="main-header">
	<a href="javascript:void(0)" class="logo">
		<span class="logo-mini"><b>S</b></span>
		<span class="logo-lg"><b>SALAAM</b></span>
	</a>
	<nav class="navbar navbar-static-top">
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
						<i class="fa fa-user img-circle text-white"></i>
						<span class="hidden-xs">{{ Auth::user()->name }}</span>
					</a>
					<ul class="dropdown-menu">
						<li class="user-header">
							<i class="fa fa-user fa-5x img-circle text-white"></i>
							<p>{{ Auth::user()->name }} <small>Member sejak {{ date('d-m-Y', strtotime(Auth::user()->created_at)) }}</small></p>
						</li>
						<li class="user-footer">
							<a href="{{ url('console/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-default btn-block">
								<span>Logout</span>
							</a>
							<form id="logout-form" action="{{ url('console/logout') }}" method="POST" class="d-none">
								@csrf
							</form>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
</header>