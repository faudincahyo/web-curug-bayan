@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3 justify-content-center align-items-center">

                            <div class="col-md-8">
                                <label for="text" class="col-form-label">{{ __('Nama') }}</label>
                                <input id="nama" type="text"
                                    class="form-control @error('Nama') is-invalid @enderror border-0 border-bottom border-dark rounded-0"
                                    name="name" value="{{ old('nama') }}" required autofocus>

                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center align-items-center">
                            <div class="col-md-8">
                                <label for="email" class="col-form-label">{{ __('Email') }}</label>
                                <input id="email" type="email"
                                    class="form-control @error('Email') is-invalid @enderror border-0 border-bottom border-dark rounded-0"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4 justify-content-center align-items-center">
                            <div class="col-md-8 mb-3">
                                <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror border-0 border-bottom border-dark rounded-0"
                                    name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4 justify-content-center align-items-center">
                            <div class="col-md-8 mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control border-0 border-bottom border-dark rounded-0" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-8 mb-4">
                                <button type="submit" class="btn btn-primary" style="width: 98%">
                                    {{ __('Daftar') }}
                                </button>
                            </div>
                        </div>

                        <div class="row justify-content-center align-items-center">
                        <div class="col-md-8 mb-4">
                            <h4 class="text-center me-3 text-success">Atau</h4>
                        </div>
                        </div>

                    </form>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-8 mb-4">
                            <a href="..."><button type="submit" class="btn btn-outline-success" style="width: 98%">
                                {{ __('Continue with Google') }}
                                <img width="20" height="20" style="margin-bottom:2px; margin-left:3px;" src="https://img.icons8.com/fluency/20/google-logo.png" alt="google-logo"/>
                            </button>   
                            </a> 
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
