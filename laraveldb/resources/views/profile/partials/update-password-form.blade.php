<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-4 mb-4">
        @csrf
        @method('put')
        
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Update Password</h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="update_password_current_password" class="form-label">{{ __('Current Password') }}</label>
                    <input id="update_password_current_password" name="current_password" type="password" class="form-control" autocomplete="current-password">
                    @error('current_password', 'updatePassword')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="update_password_password" class="form-label">{{ __('New Password') }}</label>
                    <input id="update_password_password" name="password" type="password" class="form-control" autocomplete="new-password">
                    @error('password', 'updatePassword')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="update_password_password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                    <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password">
                    @error('password_confirmation', 'updatePassword')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="d-flex align-items-center">
                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                    
                    @if (session('status') === 'password-updated')
                        <span class="text-success ms-3" role="alert">{{ __('Saved.') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </form>
</section>
