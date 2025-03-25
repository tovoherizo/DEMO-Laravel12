@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card shadow p-4" style="width: 450px; border-radius: 10px; border: none;">
        <x-guest-layout>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h1 class="text-center mb-4">Register</h1>
                
                <!-- Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" 
                           required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />
                </div>
                
                <!-- Email Address -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" 
                           required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                </div>
                
                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" class="form-control" type="password" name="password" 
                           required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                </div>
                
                <!-- Confirm Password -->
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input id="password_confirmation" class="form-control" type="password" 
                           name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />
                </div>
                
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <a class="text-decoration-none" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                </div>
                
                <div class="d-grid">
                    <button type="submit" class="btn btn-success">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </x-guest-layout>
    </div>
</div>
@endsection
