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
						<h3>{{$items}}</h3>
						<p>Items</p>
					</div>
					<div class="icon">
						<i class="fa fa-newspaper-o"></i>
					</div>
					<a href="{{ url('console/articles') }}" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			{{-- <div class="col-lg-3 col-xs-6">
				<div class="small-box bg-green">
					<div class="inner">
						<!-- <h3>{{$users}}</h3> -->
						<p>User</p>
					</div>
					<div class="icon">
						<i class="fa fa-users"></i>
					</div>
					<!-- <a href="{{ url('console/users') }}" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a> -->
				</div>
			</div>
			<div class="col-lg-3 col-xs-6">
				<div class="small-box bg-yellow">
					<div class="inner">
						<!-- <h3>{{$admins}}</h3> -->
						<p>Admin</p>
					</div>
					<div class="icon">
						<i class="fa fa-users"></i>
					</div>
					<!-- <a href="{{ url('console/users') }}" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a> -->
				</div>
			</div>
			<div class="col-lg-3 col-xs-6">
				<div class="small-box bg-yellow">
					<div class="inner">
						<!-- <h3>{{$facilities}}</h3> -->
						<p>Fasilitas</p>
					</div>
					<div class="icon">
						<i class="fa fa-bookmark-o"></i>
					</div>
					<!-- <a href="{{ url('console/facilities') }}" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a> -->
				</div>
			</div> --}}
		</div>
	</section>
</div>
@endsection