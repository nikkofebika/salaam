@extends('console.layouts.master')
@push('styles')
<link href="{{ asset('backend/bower_components/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="content-wrapper">
	<section class="content-header">
		<h1 class="pull-left">{{ $page_title }}</h1>
		<a href="{{ url('console/users') }}" class="btn btn-default pull-right"><i class="fa fa-arrow-left"></i> Kembali</a>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-xs-12 m-t-md">
				<div class="box box-primary">
					<form method="POST" action="{{ url('console/users') }}" enctype="multipart/form-data">
						@csrf
						<div class="box-body">
							<div class="form-group @error('name') has-error @enderror">
								<label>Nama <span class="text-danger">*</span></label>
								<input type="text" name="name" class="form-control" required placeholder="Nama" value="{{ old('name') }}">
								@error('name')
								<span class="help-block">{{ $message }}</span>
								@enderror
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group @error('email') has-error @enderror">
										<label>Email <span class="text-danger">*</span></label>
										<input type="text" name="email" class="form-control" required placeholder="Email" value="{{ old('email') }}">
										@error('email')
										<span class="help-block">{{ $message }}</span>
										@enderror
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group @error('password') has-error @enderror">
										<label>Password <span class="text-danger">*</span></label>
										<input type="password" name="password" class="form-control" required placeholder="Password" value="">
										@error('password')
										<span class="help-block">{{ $message }}</span>
										@enderror
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group @error('phone') has-error @enderror">
										<label>No. Telepon <span class="text-danger">*</span></label>
										<input type="text" name="phone" class="form-control" required placeholder="No. Telepon" value="{{ old('phone') }}">
										@error('phone')
										<span class="help-block">{{ $message }}</span>
										@enderror
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="m-b-xs">Status <span class="text-danger">*</span></label>
										<div class="radio m-t-xs">
											<label>
												<input type="radio" name="is_active" value="1"> Active
											</label>
											<label class="m-l-md">
												<input type="radio" name="is_active" value="0" checked> Non Aktif
											</label>
										</div>
									</div>
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
<script>
	$(document).ready(function($) {
		$('form').submit(function(){
			$('#btn_submit').attr('disabled',true).text('Submitting...');
		});
	});
</script>
@endpush