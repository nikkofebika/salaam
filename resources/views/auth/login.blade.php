@extends('layouts.default')
@section('content')
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-lg-5">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
                <div class="d-grid form-group d-block">
                    <button type="submit" class="btn btn-primary btn-block">
                        {{ __('Login') }}
                    </button>
                </div>
            </form>
            <center class="mt-3">
                @if (Route::has('password.request'))
                <a class="d-block" href="{{ route('password.request') }}">Lupa Password?</a>
                @endif
                <a class="d-block" href="{{ route('register') }}">Belum punya akun? Daftar disini</a>
                <h3>OR</h3>
                <a href="{{ url('/auth/facebook') }}" class="btn btn-facebook"><i class="fab fa-facebook"></i> Facebook</a>
                <a href="{{ url('/auth/twitter') }}" class="btn btn-twitter"><i class="fab fa-twitter"></i> Twitter</a>
                <a href="{{ url('/auth/github') }}" class="btn btn-github"><i class="fab fa-github"></i> Github</a>
            </center>
        </div>
    </div>
</div>
@endsection
