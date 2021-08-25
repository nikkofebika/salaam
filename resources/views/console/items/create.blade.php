@extends('console.layouts.master')
@push('styles')
<link href="{{ asset('backend/bower_components/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
<link href="{{ asset('backend/bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="content-wrapper">
	<section class="content-header">
		<h1 class="pull-left">{{ $page_title }}</h1>
		<a href="{{ url('console/items') }}" class="btn btn-default pull-right"><i class="fa fa-arrow-left"></i> Kembali</a>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-xs-12 m-t-md">
				<div class="box box-primary">
					<form method="POST" action="{{ url('console/items') }}" enctype="multipart/form-data">
						@csrf
						<div class="box-body">
							<div class="row">
								<div class="col-md-8 col-sm-12">
									<div class="form-group @error('name') has-error @enderror">
										<label>Nama <span class="text-danger">*</span></label>
										<input type="text" name="name" class="form-control" required placeholder="Nama Item" value="{{ old('name') }}">
										@error('name')
										<span class="help-block">{{ $message }}</span>
										@enderror
									</div>
								</div>
								<div class="col-md-4 col-sm-12">
									<div class="form-group @error('color') has-error @enderror">
										<label>Warna <span class="text-danger">*</span></label>
										<select name="color" class="form-control" required>
											<option value="">- Pilih Warna -</option>
											@foreach(getColorList() as $c)
											<option value="{{ $c }}">{{ $c }}</option>
											@endForeach
										</select>
										@error('color')
										<span class="help-block">{{ $message }}</span>
										@enderror
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group @error('model') has-error @enderror">
										<label>Model</label>
										<input type="text" name="model" class="form-control" placeholder="Model" value="{{ old('model') }}">
										@error('model')
										<span class="help-block">{{ $message }}</span>
										@enderror
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group @error('tag') has-error @enderror">
										<label>Tag</label>
										<input type="text" name="tag" class="form-control" placeholder="Tag" value="{{ old('tag') }}">
										@error('tag')
										<span class="help-block">{{ $message }}</span>
										@enderror
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group @error('item_type_id') has-error @enderror">
										<label>Tipe Barang Hilang <span class="text-danger">*</span></label>
										<select name="item_type_id" class="form-control select2">
											@foreach($item_types as $it)
											<option value="{{ $it->id }}" {{ old('item_type_id') === $it->id ? "selected" : "" }}>{{ $it->name }}</option>
											@endForeach
										</select>
										@error('item_type_id')
										<span class="help-block">{{ $message }}</span>
										@enderror
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group @error('find_date') has-error @enderror">
										<label>Waktu Ditemukan <span class="text-danger">*</span></label>
										<input type="text" name="find_date" class="form-control" id="datetimepicker" required value="{{ old('find_date') }}" readonly/>
										@error('find_date')
										<span class="help-block">{{ $message }}</span>
										@enderror
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group @error('location_id') has-error @enderror">
										<label>Lokasi</label>
										<select name="location_id" class="form-control" required>
											<option value="">- Pilih Lokasi -</option>
											@foreach($locations as $l)
											<option value="{{ $l->id }}" {{ old('location_id') === $l->id ? "selected" : "" }}>{{ $l->name }}</option>
											@endForeach
										</select>
										@error('location_id')
										<span class="help-block">{{ $message }}</span>
										@enderror
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group @error('specific_location') has-error @enderror">
										<label>Lokasi Spesifik <span class="text-danger">*</span></label>
										<textarea name="specific_location" class="form-control" required rows="3" placeholder="Lokasi Spesifik">{{ old('specific_location') }}</textarea>
										@error('specific_location')
										<span class="help-block">{{ $message }}</span>
										@enderror
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group @error('province_id') has-error @enderror">
										<label>Provinsi <span class="text-danger">*</span></label>
										<select name="province_id" class="form-control select2" id="select-province" required>
											<option value="">- Pilih Provinsi -</option>
											@foreach($provinces as $p)
											<option value="{{ $p->id }}" {{ old('province_id') === $p->id ? "selected" : "" }}>{{ $p->name }}</option>
											@endForeach
										</select>
										@error('province_id')
										<span class="help-block">{{ $message }}</span>
										@enderror
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group @error('regency_id') has-error @enderror">
										<label>Kota/Kabupaten <span class="text-danger">*</span></label>
										<select name="regency_id" class="form-control select2" id="select-regency" disabled required>
											<option value="">- Pilih Kota/Kabupaten -</option>
										</select>
										@error('regency_id')
										<span class="help-block">{{ $message }}</span>
										@enderror
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group @error('district_id') has-error @enderror">
										<label>Kecamatan</label>
										<select name="district_id" class="form-control select2" id="select-district" disabled required>
											<option value="">- Pilih Kecamatan -</option>
										</select>
										@error('district_id')
										<span class="help-block">{{ $message }}</span>
										@enderror
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group @error('village_id') has-error @enderror">
										<label>Kelurahan</label>
										<select name="village_id" class="form-control select2" id="select-village" disabled>
											<option value="">- Pilih Kelurahan -</option>
										</select>
										@error('village_id')
										<span class="help-block">{{ $message }}</span>
										@enderror
									</div>
								</div>
							</div>
							<div class="form-group @error('description') has-error @enderror">
								<label>Description <span class="text-danger">*</span></label>
								<textarea name="description" class="form-control" rows="5" required>{{ old('description') }}</textarea>
								@error('description')
								<span class="help-block">{{ $message }}</span>
								@enderror
							</div>
							<div class="form-group @error('images') has-error @enderror">
								<label>Gambar <span class="text-danger">*</span></label>
								<input type="file" name="images[]" class="form-control" multiple required value="{{ old('images') }}">
								@error('images')
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
				$.get('{{ url("console/items/get_regencies") }}/'+province_id, function(html){
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
				$.get('{{ url("console/items/get_districts") }}/'+regency_id, function(html){
					$("#select-district").attr("disabled",false).html(html);
				})
			}
		})

		$("#select-district").change(function(){
			var district_id = $(this).val();
			if ($(this).val() === "") {
				$("#select-village").attr("disabled",true).val("").change();
			} else {
				$.get('{{ url("console/items/get_villages") }}/'+district_id, function(html){
					$("#select-village").attr("disabled",false).html(html);
				})
			}
		})
	});
</script>
@endpush