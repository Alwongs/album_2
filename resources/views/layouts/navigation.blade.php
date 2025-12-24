<header class="top-panel">
    <nav class="top-panel-navigation">
        <a class="top-panel-link" href="{{ url('/') }}">Home</a>
        @auth        
            <a class="top-panel-link" href="{{ url('/dashboard') }}">Dashboard</a>
            <a class="top-panel-link" href="{{ url('/albums') }}">Albums</a>
        @endauth        
    </nav>

    <div class="top-panel-auth-block">
        @if (Route::has('login'))
            @auth
                <a class="top-panel-link" href="{{ route('profile.edit') }}">{{ Auth::user()->name }}</a>

                <form class="top-panel-link" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link
                        class="top-panel-link"
                        :href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();"
                    >
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>                
            @else
                @if (Route::has('register'))
                    <a class="top-panel-link" href="{{ route('register') }}">Register</a>
                @endif

                <a class="top-panel-link" href="{{ route('login') }}">Log in</a>
            @endauth
        @endif
    </div>
</header>
