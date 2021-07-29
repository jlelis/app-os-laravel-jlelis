@extends('layouts.principal')
@section('conteudo')
<header>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper pl-4">
                <a class="brand-logo" href="{{ route('home') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>

                <ul id="nav-mobile" class="right">
                    <li>
                        <a class="dropdown-trigger btn-floating" href="#!" data-target="topnav-dropdown1">
                            <i class="material-icons">menu</i>
                        </a>
                    </li>
                </ul>
                @auth
                    <ul id="topnav-dropdown1" class="dropdown-content">
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </li>
                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <ul id="topnav-dropdown1" class="dropdown-content">
                        <li>
                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    </ul>
                @endauth
            </div>
        </nav>
    </div>
</header>

@endsection
