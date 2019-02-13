<nav class="navbar-laravel">
    <div class="container">
        <div class="row">
            <div class="column">
                <a href="{{ route('entry') }}">Tarfifly</a>
            </div>
            <div class="auth-items column column-25 column-offset-25">
                 <!-- Authentication Links -->
                @guest
                    <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                    <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                    <a class="" href="{{ route('entry-admin') }}" role="button">{{ Auth::user()->name }}</a>
                    <a class="" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endguest
            </div>
        </div>
    </div>
</nav>