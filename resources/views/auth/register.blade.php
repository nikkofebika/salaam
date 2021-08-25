@extends('layouts.default')
@push('styles')
<link href="{{ asset('backend/bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="container">
	<div class="row justify-content-center my-5">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Register') }}</div>

				<div class="card-body">
					<form method="POST" action="{{ route('register') }}">
						@csrf
						<div class="form-group">
							<label for="name">{{ __('Name') }}</label>
							<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

							@error('name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

							@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
						<div class="form-group">
							<label for="phone">No. Handphone</label>
							<input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

							@error('phone')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
						<div class="form-group">
							<label for="password">{{ __('Password') }}</label>
							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

							@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
						<div class="form-group">
							<label for="password-confirm">{{ __('Confirm Password') }}</label>
							<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group @error('province_id') has-error @enderror">
									<label>Provinsi <span class="text-danger">*</span></label>
									<select name="province_id" class="form-control form-select select2" id="select-province" required>
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
							<div class="col-md-6">
								<div class="form-group @error('regency_id') has-error @enderror">
									<label>Kota/Kabupaten <span class="text-danger">*</span></label>
									<select name="regency_id" class="form-control form-select select2" id="select-regency" disabled required>
										<option value="">- Pilih Kota/Kabupaten -</option>
									</select>
									@error('regency_id')
									<span class="help-block">{{ $message }}</span>
									@enderror
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group @error('district_id') has-error @enderror">
									<label>Kecamatan</label>
									<select name="district_id" class="form-control form-select select2" id="select-district" disabled required>
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
									<select name="village_id" class="form-control form-select select2" id="select-village" disabled>
										<option value="">- Pilih Kelurahan -</option>
									</select>
									@error('village_id')
									<span class="help-block">{{ $message }}</span>
									@enderror
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="address">Alamat</label>
							<textarea class="form-control @error('address') is-invalid @enderror" name="address" required rows="5">{{ old('address') }}</textarea>
							@error('address')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
						<div class="d-grid form-group d-block mt-3">
							<button type="submit" class="btn btn-primary">
								{{ __('Register') }}
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@push('scripts')
<script src="{{ asset('backend/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<script>
    $(document).ready(function($) {
        $('.select2').select2();
        $("#select-province").change(function(){
            var province_id = $(this).val();
            if ($(this).val() === "") {
                $("#select-regency").attr("disabled",true).val("").change();
                $("#select-district").attr("disabled",true).val("").change();
                $("#select-village").attr("disabled",true).val("").change();
            } else {
                $.get('{{ url("register/get_regencies") }}/'+province_id, function(html){
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
                $.get('{{ url("register/get_districts") }}/'+regency_id, function(html){
                    $("#select-district").attr("disabled",false).html(html);
                })
            }
        })

        $("#select-district").change(function(){
            var district_id = $(this).val();
            if ($(this).val() === "") {
                $("#select-village").attr("disabled",true).val("").change();
            } else {
                $.get('{{ url("register/get_villages") }}/'+district_id, function(html){
                    $("#select-village").attr("disabled",false).html(html);
                })
            }
        })
    });
</script>
@endpush