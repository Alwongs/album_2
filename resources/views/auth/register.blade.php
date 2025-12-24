<x-guest-layout>
    <div class="form-container">
        <h1 class="form-title">Register</h1>

        <form class="form" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-input-container">
                <x-text-input
                    class="form-input"
                    id="name"
                    type="text"
                    name="name"
                    :value="old('name')"
                    placeholder="name"
                    autocomplete="name"
                    required autofocus autocomplete="name"
                />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div class="form-input-container">
                <x-text-input
                    class="form-input"
                    id="email"
                    type="email"
                    name="email"
                    :value="old('email')"
                    placeholder="email"
                    autocomplete="username"
                    required 
                />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="form-input-container">
                <x-text-input
                    class="form-input"
                    id="password"
                    type="password"
                    name="password"
                    placeholder="password"
                    autocomplete="new-password"
                    required
                />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="form-input-container">
                <x-text-input
                    class="form-input"
                    id="password_confirmation"
                    type="password"
                    name="password_confirmation"
                    placeholder="password confirmation"
                    autocomplete="new-password"
                    required
                />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="form-submit-container">
                <a class="forgot-password-link" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="form-submit">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>    
</x-guest-layout>
