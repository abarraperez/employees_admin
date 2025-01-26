@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-6">
            <img src="{{ asset('img/login-photo.png') }}" alt="Imagen" class="img-fluid" style="width: 100%; height: auto;">
        </div>
        <div class="col-md-6">
    <div class="card">
        <div class="card-header" style="text-align:center">
            <img src="https://sinstress.cl/wp-content/uploads/2022/03/cropped-cropped-logo-022_ajustado2.png" alt="Logo" style="height: 80px;">
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Input -->
                <div class="form-group row">
                    <label for="email" class="col-md-12 col-form-label text-md-left">{{ __('E-Mail') }}</label>
                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <!-- Password Input -->
                <div class="form-group row">
                    <label for="password" class="col-md-12 col-form-label text-md-left">{{ __('Password') }}</label>
                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <!-- Remember Me Checkbox -->
                <div class="form-group row">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Recuerdame') }}
                            </label>
                        </div>
                    </div>

                    <!-- Login Button (Right aligned) -->
                    <div class="col-md-6 text-right">
                        <button type="submit" class="btn btn-primary" style="background-color:#c7832b">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>

                <!-- Forgot Password Link (Below Login Button) -->
                <div class="form-group row mb-0">
                    <div class="col-md-12 text-center">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Olvidaste Tu Password?') }}
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
