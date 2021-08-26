@extends('console.layouts.master')
@push('styles')
<link href="{{ asset('backend/bower_components/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
<link href="{{ asset('backend/bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="content-wrapper">
	<section class="content-header">
		<h1 class="pull-left">{{ $page_title }}</h1>
		<a href="{{ url('console/video_playlists') }}" class="btn btn-default pull-right"><i class="fa fa-arrow-left"></i> Kembali</a>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-xs-12 m-t-md">
				<div class="box box-primary">
					<form method="POST" action="{{ url('console/video_playlists') }}">
						@csrf
						<div class="box-body">
							<div class="form-group @error('playlist_id') has-error @enderror">
								<label>Playlist ID <span class="text-danger">*</span></label>
								<input type="text" name="playlist_id" class="form-control" required placeholder="Playlist ID" value="{{ old('playlist_id') }}">
								@error('playlist_id')
								<span class="help-block">{{ $message }}</span>
								@enderror
							</div>
							<div class="form-group @error('title') has-error @enderror">
								<label>Nama Playlist <span class="text-danger">*</span></label>
								<input type="text" name="title" class="form-control" required placeholder="Nama Playlist" value="{{ old('title') }}">
								@error('title')
								<span class="help-block">{{ $message }}</span>
								@enderror
							</div>
							<div class="form-group @error('meta_keywords') has-error @enderror">
								<label>Meta Keywords <span class="text-danger">*</span></label>
								<input type="text" name="meta_keywords" class="form-control" required placeholder="Meta Keywords" value="{{ old('meta_keywords') }}">
								@error('meta_keywords')
								<span class="help-block">{{ $message }}</span>
								@enderror
							</div>
							<div class="form-group @error('description') has-error @enderror">
								<label>Deskripsi Playlist <span class="text-danger">*</span></label>
								<textarea name="description" class="form-control" rows="5" required placeholder="Deskripsi Playlist">{{ old('description') }}</textarea>
								@error('description')
								<span class="help-block">{{ $message }}</span>
								@enderror
							</div>
							<div class="form-group @error('priority') has-error @enderror">
								<label>Urutan Playlist <span class="text-danger">*</span></label>
								<input type="number" min="1" name="priority" class="form-control" required placeholder="Urutan Playlist" value="{{ old('priority') }}">
								@error('priority')
								<span class="help-block">{{ $message }}</span>
								@enderror
							</div>
							<div class="form-group">
								<label class="m-b-xs">Status <span class="text-danger">*</span></label>
								<div class="radio m-t-xs">
									<label>
										<input type="radio" name="is_active" id="optionsRadios1" value="1"> Active
									</label>
									<label class="m-l-md">
										<input type="radio" name="is_active" id="optionsRadios2" value="0" checked> Non Aktif
									</label>
								</div>
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
		$('#datetimepicker').datetimepicker({
			todayBtn:  1,
			autoclose: 1,
			todayHighlight: 1,
		});
		$('form').submit(function(){
			$('#btn_submit').attr('disabled',true).text('Submitting...');
		});
		x = document.getElementById("password");
		$('#btnShowHide').click(function(){
			if (x.type === "password") {
				$(this).children().removeClass('fa-eye').addClass('fa-eye-slash')
				x.type = "text";
			} else {
				x.type = "password";
				$(this).children().removeClass('fa-eye-slash').addClass('fa-eye');
			}
		})
		$("#select-province").change(function(){
			var province_id = $(this).val();
			if ($(this).val() === "") {
				$("#select-regency").attr("disabled",true).val("").change();
				$("#select-district").attr("disabled",true).val("").change();
				$("#select-village").attr("disabled",true).val("").change();
			} else {
				$.get('{{ url("console/video_playlists/get_regencies") }}/'+province_id, function(html){
					$("#select-regency").attr("disabled",false).html(html);
				})
			}
		})

		$("#select-regency").change(function(){
			var regency_id = $(this).val();
			if ($(this).val() === "") {
				$("#select-district").attr("disabled",true).val("").change();
				$("#select-village").attr("disabled",true).val("").change();
			} else {
				$.get('{{ url("console/video_playlists/get_districts") }}/'+regency_id, function(html){
					$("#select-district").attr("disabled",false).html(html);
				})
			}
		})

		$("#select-district").change(function(){
			var district_id = $(this).val();
			if ($(this).val() === "") {
				$("#select-village").attr("disabled",true).val("").change();
			} else {
				$.get('{{ url("console/video_playlists/get_villages") }}/'+district_id, function(html){
					$("#select-village").attr("disabled",false).html(html);
				})
			}
		})
	});
</script>
@endpush