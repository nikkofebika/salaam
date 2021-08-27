@extends('console.layouts.master')
@push('styles')
<link href="{{ asset('backend/bower_components/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="content-wrapper">
	<section class="content-header">
		<h1 class="pull-left">{{ $page_title }}</h1>
		<a href="{{ url('console/pendakwah') }}" class="btn btn-default pull-right"><i class="fa fa-arrow-left"></i> Kembali</a>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-xs-12 m-t-md">
				<div class="box box-primary">
					<form method="POST" action="{{ url('console/pendakwah') }}" enctype="multipart/form-data">
						@csrf
						<div class="box-body">
							<div class="form-group @error('name') has-error @enderror">
								<label>Nama Pendakwah <span class="text-danger">*</span></label>
								<input type="text" name="name" class="form-control" required placeholder="Nama Pendakwah" value="{{ old('name') }}">
								@error('name')
								<span class="help-block">{{ $message }}</span>
								@enderror
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group @error('priority') has-error @enderror">
										<label>Urutan <span class="text-danger">*</span></label>
										<input type="number" min="1" name="priority" class="form-control" required placeholder="Urutan" value="{{ old('priority') }}">
										@error('priority')
										<span class="help-block">{{ $message }}</span>
										@enderror
									</div>
								</div>
								<div class="col-md-6">
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
							</div>
							<div class="form-group @error('image') has-error @enderror">
								<label>Foto Pendakwah <span class="text-danger">*</span></label>
								<input type="file" name="image" class="form-control" required value="{{ old('image') }}">
								@error('image')
								<span class="help-block">{{ $message }}</span>
								@enderror
							</div>
							<div class="form-group @error('description') has-error @enderror">
								<label>Deskripsi Pendakwah <span class="text-danger">*</span></label>
								<textarea name="description" class="form-control" rows="5" required placeholder="Deskripsi Pendakwah">{{ old('description') }}</textarea>
								@error('description')
								<span class="help-block">{{ $message }}</span>
								@enderror
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
<script>
	$(document).ready(function($) {
		$('form').submit(function(){
			$('#btn_submit').attr('disabled',true).text('Submitting...');
		});
	});
</script>
@endpush