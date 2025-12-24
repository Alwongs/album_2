<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="form-container">
        <h1 class="form-title">Login</h1>

        <form class="form" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-input-container">
                <x-text-input
                    class="form-input"
                    id="email"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required
                    autofocus
                    autocomplete="username"
                />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="form-input-container">
                <x-text-input
                    class="form-input"
                    id="password"
                    type="password"
                    name="password"
                    required
                    autocomplete="current-password"
                />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="form-checkbox-container">
                <label for="remember_me" class="form-checkbox-label">
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                    <span class="">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="form-submit-container">
                @if (Route::has('password.request'))
                    <a class="forgot-password-link" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <button
                    class="form-submit"
                    type="submit"
                >Save</button>
            </div>
        </form>
    </div>
</x-guest-layout>
