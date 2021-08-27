@extends('console.layouts.master')
@push('styles')
<link href="{{ asset('backend/bower_components/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
<link href="{{ asset('backend/bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="content-wrapper">
	<section class="content-header">
		<h1 class="pull-left">{{ $page_title }}</h1>
		<a href="{{ url('console/videos') }}" class="btn btn-default pull-right"><i class="fa fa-arrow-left"></i> Kembali</a>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-xs-12 m-t-md">
				<div class="box box-primary">
					<form method="POST" action="{{ url('console/videos/'.$video->id) }}">
						@csrf @method('PUT')
						<div class="box-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group @error('playlist_id') has-error @enderror">
										<label>Playlist <span class="text-danger">*</span></label>
										<select name="playlist_id" class="form-control select2" required>
											<option value="">- Pilih Playlist -</option>
											@foreach($playlists as $p)
											<option value="{{ $p->playlist_id }}" {{ $video->playlist_id == $p->playlist_id ? "selected" : "" }}>{{ $p->title }}</option>
											@endForeach
										</select>
										@error('playlist_id')
										<span class="help-block">{{ $message }}</span>
										@enderror
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group @error('video_id') has-error @enderror">
										<label>Video ID <span class="text-danger">*</span></label>
										<input type="text" name="video_id" class="form-control" required placeholder="Video ID" value="{{ $video->video_id }}">
										@error('video_id')
										<span class="help-block">{{ $message }}</span>
										@enderror
									</div>
								</div>
							</div>
							<div class="form-group @error('title') has-error @enderror">
								<label>Judul Video <span class="text-danger">*</span></label>
								<input type="text" name="title" class="form-control" required placeholder="Judul Video" value="{{ $video->title }}">
								@error('title')
								<span class="help-block">{{ $message }}</span>
								@enderror
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group @error('tgl_upload') has-error @enderror">
										<label>Tanggal Upload <span class="text-danger">*</span></label>
										<input name="tgl_upload" required readonly autocomplete="off" type="text" id="datetimepicker" class="form-control " value="{{ $video->tgl_upload }}">
										@error('tgl_upload')
										<span class="help-block">{{ $message }}</span>
										@enderror
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="m-b-xs">Status <span class="text-danger">*</span></label>
										<div class="radio m-t-xs">
											<label>
												<input type="radio" name="is_active" value="1" {{ $video->approved_by != null ? "checked" : "" }}> Active
											</label>
											<label class="m-l-md">
												<input type="radio" name="is_active" value="0" {{ $video->approved_by == null ? "checked" : "" }}> Non Aktif
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group @error('description') has-error @enderror">
								<label>Deskripsi Playlist <span class="text-danger">*</span></label>
								<textarea name="description" class="form-control" rows="5" required placeholder="Deskripsi Playlist">{{ $video->description }}</textarea>
								@error('description')
								<span class="help-block">{{ $message }}</span>
								@enderror
							</div>
							<div class="form-group @error('meta_keywords') has-error @enderror">
								<label>Meta Keywords <span class="text-danger">*</span></label>
								<textarea name="meta_keywords" class="form-control" rows="5" required placeholder="Meta Keywords">{{ $video->meta_keywords }}</textarea>
								@error('meta_keywords')
								<span class="help-block">{{ $message }}</span>
								@enderror
								<span class="form-text m-b-none">
									Tips Menulis Meta Keywords :
									<ol>
										<li>Gunakan keywords yang ada korelasinya dengan nama kategori.</li>
										<li>Penulisan keywords dipisahkan dengan tanda koma(,) tanpa menggunakan titik.</li>
										<li>Contoh penulisan : Sepakbola, Liga Indonesia, Liga Inggris, Liga Spanyol, Bursa Transfer Pemain</li>
										<li>Contoh Meta <strong>keywords</strong> dapat dilihat di <strong><a href="https://bola.kompas.com/" target="_blank">https://bola.kompas.com/</a></strong>. Lalu klik kanan, pilih View Page Source atau tekan tombol Ctrl+U. Lalu cari meta <strong>keywords</strong>.</li>
									</ol>
								</span>
							</div>
						</div>
						<div class="box-footer">
							<button type="submit" class="btn btn-primary btn-block" id="btn_submit"><i class="fa fa-paper-plane"></i> Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</div>
@endSection
@push('scripts')
<script src="{{ asset('backend/bower_components/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('backend/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<script>
	$(document).ready(function($) {
		$('.select2').select2()
		$('#datetimepicker').datetimepicker();
	});
</script>
@endpush