@extends('layouts.app')

@section('content')
    <div class="container mt-5 pt-5">
        <h1 class="text-success p-3 text-center ">{{ env('APP_NAME') }}
            <span class="card-header">{{ __('Login') }}</span>
        </h1>
        <div class="card-body p-5">
            <div class="row justify-content-center">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <form method="POST" class="py-3" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email" class="form-label">{{ __('E-Mail') }}</label>
                            <input type="email" name="email" id="email" class="form-control"
                                value="{{ old('email') }}" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                {{ __('Remember Me') }}
                            </label>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            <div class="form-group">
                                <div class="offset-md-4 text-center">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
    <style>
        .form-group input,
        .form-group select {
            float: left;
            width: 100%;
            border-radius: 0;
            border: solid #ccc 1px;
            padding: 2px 12px;
            font-weight: 400;
            font-size: 13px;
            margin: 0px 0 0;
            box-shadow: none;
            color: #333;
            height: 44px;
        }
        .form-group {
            margin-bottom: 2em;
        }
        .p-3 {
            padding: 3rem;
        }
    </style>
@endsection
