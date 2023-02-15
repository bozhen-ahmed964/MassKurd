@extends('layouts.app')

@section('content')
    <style>
        body {
            background-image: url('/images/backgrorunds/imageHere');
            background-repeat: no-repeat;
            background-size: cover;

        }
    </style>
    <div class="container py-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <p class="fw-bold text-success mb-2">Login</p>
                        <h2 class="fw-bold">Welcome back</h2>
                    </div>
                    <div class="card-body text-center  align-items-center">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row mb-4">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                <div class="col-md-6">
                                    <input style="border-bottom: solid 2px rgba(0, 0, 0, 0.413);" id="email"
                                        type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input style="border-bottom: solid 2px rgba(0, 0, 0, 0.413);" id="password"
                                        type="password" class="form-control @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-10 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
