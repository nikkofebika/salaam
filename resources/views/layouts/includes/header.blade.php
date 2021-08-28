<header id="header" class="header fixed-top">
	<div class="container-fluid container-xl d-flex align-items-center justify-content-between">

		<a href="{{ url('/') }}" class="logo d-flex align-items-center">
			<img src="{{ asset('assets/logo_salaam.png') }}" alt="">
		</a>

		<nav id="navbar" class="navbar">
			<ul>
				<li><a class="@if($active_menu == 'index') active @endif" href="{{ url('/') }}">Beranda</a></li>
				<li><a class="@if($active_menu == 'pendakwah') active @endif" href="{{ url('pendakwah') }}">Pendakwah</a></li>
				<li><a class="@if($active_menu == 'video') active @endif" href="{{ url('video') }}">Video</a></li>
				<li class="dropdown"><a class="@if($active_menu == 'about' || $active_menu == 'contact-us') active @endif" href="#"><span>More</span> <i class="bi bi-chevron-down"></i></a>
					<ul>
						<li><a class="@if($active_menu == 'about') active @endif" href="{{ url('about') }}">About</a></li>
						<li><a class="@if($active_menu == 'contact-us') active @endif" href="{{ url('contact-us') }}">Contact</a></li>
						<!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
							<ul>
								<li><a href="#">Deep Drop Down 1</a></l>i
								<li><a href="#">Deep Drop Down 2</a></li>
								<li><a href="#">Deep Drop Down 3</a></li>
								<li><a href="#">Deep Drop Down 4</a></li>
								<li><a href="#">Deep Drop Down 5</a></li>
							</ul>
						</li> -->
					</ul>
				</li>
				<li><a class="getstarted" href="javascript:void(0)" style="padding: 8px 20px; color: #fff;">Get Started</a></li>
			</ul>
			<i class="bi bi-list mobile-nav-toggle"></i>
		</nav>
	</div>
</header>