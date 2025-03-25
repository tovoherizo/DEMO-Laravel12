@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100 " id="carousel1" style="background-image: url('{{ asset('img/carousel-1.jpg') }}')">
    <x-guest-layout>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        
        <form method="POST" action="{{ route('login') }}" class="p-4 shadow rounded bg-white w-100" style="max-width: 400px;">
            @csrf
            
            <h1 class="h5 fw-bold text-center mb-3">Login</h1>
            
            <!-- Email Address -->
            <div class="mb-3">
                <x-input-label for="email" :value="__('Email')" class="form-label" />
                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="text-danger mt-1" />
            </div>

            <!-- Password -->
            <div class="mb-3">
                <x-input-label for="password" :value="__('Password')" class="form-label" />
                <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="text-danger mt-1" />
            </div>

            <!-- Remember Me -->
            <div class="form-check mb-3">
                <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                <label for="remember_me" class="form-check-label">{{ __('Remember me') }}</label>
            </div>

            <!-- Actions -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-decoration-none text-primary small">{{ __('Forgot your password?') }}</a>
                @endif
                <a href="/register" class="text-decoration-none text-primary small">{{ __('S\'inscrire') }}</a>
            </div>

            <!-- Submit Button -->
            <div class="d-grid">
                <x-primary-button class="btn btn-success">{{ __('Log in') }}</x-primary-button>
            </div>
        </form>
    </x-guest-layout>
</div>
@endsection



