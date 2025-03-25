<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-4 mb-4">
        @csrf
        @method('patch')
        
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Profile Information</h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label">{{ __('Name') }}</label>
                    <input id="name" name="name" type="text" class="form-control" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
                    @error('name')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="last_name" class="form-label">{{ __('Last Name') }}</label>
                    <input id="last_name" name="last_name" type="text" class="form-control" value="{{ old('last_name', $user->last_name) }}" required autofocus autocomplete="last_name">
                    @error('last_name')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="location" class="form-label">{{ __('Location') }}</label>
                    <input id="location" name="location" type="text" class="form-control" value="{{ old('location', $user->location) }}" required autofocus autocomplete="location">
                    @error('location')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="bio" class="form-label">{{ __('Bio') }}</label>
                    <textarea id="bio" name="bio" class="form-control" rows="4" required autofocus autocomplete="bio">{{ old('bio', $user->bio) }}</textarea>
                    @error('bio')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('Email') }}</label>
                    <input id="email" name="email" type="email" class="form-control" value="{{ old('email', $user->email) }}" required autocomplete="username">
                    @error('email')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                    
                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                        <div class="mt-2">
                            <p class="text-muted small">
                                {{ __('Your email address is unverified.') }}
                                
                                <button form="send-verification" class="btn btn-link p-0 m-0 align-baseline text-primary">
                                    {{ __('Click here to re-send the verification email.') }}
                                </button>
                            </p>
                            
                            @if (session('status') === 'verification-link-sent')
                                <p class="text-success small mt-1">
                                    {{ __('A new verification link has been sent to your email address.') }}
                                </p>
                            @endif
                        </div>
                    @endif
                </div>
                
                <div class="d-flex align-items-center">
                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                    
                    @if (session('status') === 'profile-updated')
                        <span class="text-success ms-3" role="alert">{{ __('Saved.') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </form>
</section>
