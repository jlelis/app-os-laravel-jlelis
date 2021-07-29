<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- Title --}}
    <title>@yield('title')</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- CSS Matarialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            referrerpolicy="no-referrer"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    {{-- @yield('head') --}}
</head>

<header>
    <div class="container-fluid">
        <nav>
            <div class="nav-wrapper   orange darken-2">
              <a href="#" class="brand-logo center disabled">Logo</a>
              <ul id="nav-mobile" class="left hide-on-med-and-down ">
                <li><a href="#"><i class="material-icons left">person_add</i>Cliente</a></li>
                <li><a href="#"><i class="material-icons left">engineering</i>Técnico</a></li>
                <li><a href="#"><i class="material-icons left">construction</i>Serviço</a></li>

              </ul>


            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#"><i class="material-icons left">miscellaneous_services</i>Ordem de Serviço</a></li>
                <li><a href="#"><i class="material-icons left">highlight</i>Encerrar OS</a></li>
                @guest
                <li><a href="{{ route('login') }}"><i class="material-icons left">lock</i>Login</a></li>
                @else
                <li><a href="#" onclick="event.preventDefault();
                    document.querySelector('form.logout').submit(); "><i class="material-icons left">logout</i>Logout</a></li>
                <form action="{{route('logout')}}" class="logout" method="POST" style="display:none;">
                    @csrf
                </form>
                @endguest
              </ul>
            </div>
          </nav>
    </div>
</header>
{{-- <header>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper pl-4">
                <a class="brand-logo" href="{{ route('home') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>

                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    @guest
                        <li>
                            <a href="{{ route('login') }}"><i class="material-icons left">lock</i>{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}"><i class="material-icons left">edit_note</i>
                                    {{ __('Register') }}</a>
                            </li>
                        @endif

                    @else
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="material-icons left">logout</i>{{ __('Logout') }}
                            </a>
                        </li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    @endguest
                </ul>
            </div>
        </nav>
    </div>
</header> --}}

<main class="my-5">
    @yield('content')
</main>
<section>
    @yield('conteudo-principal')
</section>

<footer>

</footer>
<script>
    M.AutoInit();
</script>
</body>

</html>
