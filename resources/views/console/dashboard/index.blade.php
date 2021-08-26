@extends('console.layouts.master')
@section('content')
<div class="content-wrapper">
	<section class="content-header">
		<h1>Dashboard</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-lg-3 col-xs-6">
				<div class="small-box bg-aqua">
					<div class="inner">
						<h3>{{$admins}}</h3>
						<p>Admin</p>
					</div>
					<div class="icon">
						<i class="fa fa-users"></i>
					</div>
					<a href="{{ url('console/users') }}" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<div class="col-lg-3 col-xs-6">
				<div class="small-box bg-green">
					<div class="inner">
						<h3>{{$videos}}</h3>
						<p>Video</p>
					</div>
					<div class="icon">
						<i class="fa fa-video-camera"></i>
					</div>
					<a href="{{ url('console/videos') }}" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<div class="col-lg-3 col-xs-6">
				<div class="small-box bg-yellow">
					<div class="inner">
						<h3>{{$video_playlists}}</h3>
						<p>Video Playlist</p>
					</div>
					<div class="icon">
						<i class="fa fa-list"></i>
					</div>
					<a href="{{ url('console/video_playlists') }}" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection