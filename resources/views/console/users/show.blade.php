@extends('console.layouts.master')
@section('content')
<div class="content-wrapper">
	<section class="content-header">
		<h1>Detail Data</h1>
		<ol class="breadcrumb">
			<li><a href="{{ url('console/article') }}"><i class="fa fa-newspaper-o"></i> Bulletin</a></li>
			<li class="active">Detail Data</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box box-primary">
					<div class="box-header">
						<a href="{{ url('console/articles') }}" title="Kembali" class="btn btn-primary pull-right"><i class="fa fa-arrow-left"></i> Kembali</a>
					</div>
					<div class="box-body">
						<div class="table-responsive">
							<table class="table table-hover">
								<tr>
									<th>Judul</th>
									<td>: {{ $article->title }}</td>
								</tr>
								<tr>
									<th>SEO Judul</th>
									<td>: {{ $article->seo_title }}</td>
								</tr>
								<tr>
									<th>Tanggal Tayang</th>
									<td>: <?php echo date('d-m-Y H:i', strtotime($article->published_at)) ?> / <?php echo $article->published_at <= date('Y-m-d H:i:s') ? '<span class="label label-primary">Sudah Tayang</span>' : '<span class="label label-warning">Belun Tayang</span>' ?></td>
								</tr>
								<tr>
									<th>View</th>
									<td>: {{ $article->view }}</td>
								</tr>
								<tr>
									<th>Dibuat Oleh</th>
									<td>: {{ $article->user->name }}</td>
								</tr>
								<tr>
									<th>Status</th>
									<td>: <?php echo $article->approved == 1 ? '<span class="label label-primary">Sudah di Approve</span>' : '<span class="label label-warning">Belum di Approve</span>' ?></td>
								</tr>
								<tr>
									<th>Di Approve Oleh</th>
									<td>: {{ $article->approved_by ? $article->approvedby->name : '-' }}</td>
								</tr>
								<tr>
									<th>Dibuat Pada</th>
									<td>: {{ date('d-m-Y H:i', strtotime($article->created_at)) }}</td>
								</tr>
								<tr>
									<th>Deskripsi</th>
									<td>: <?php echo $article->description ?></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endSection