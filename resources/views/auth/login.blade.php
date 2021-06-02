@extends('layouts.app')

@section('content')
<br><br><br><br><br><br><br><br><br><br>
<div class="container mt-5">
                <h1 class="text-success p-3 text-center ">{{ env('APP_NAME') }}
                <span class="card-header">{{ __('Login') }}</span></h1>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card m-3 my-3">

                <div class="card-body">
                    <form method="POST" class="py-3"  action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-1">
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                                    <input class="form-control" class="text-center" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4 text-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4 text-center">
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
