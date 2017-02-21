<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Корпоративный портал</title>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="/css/materialize.min.css">
    <link rel="stylesheet" href="{{ url('/css/fileshare.css') }}">
    <!-- Scripts -->
    <script>
        window.Laravel =<?= json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
    <li><a href="">АСКУЭ</a></li>
    <li><a href="">Опросы и голосования</a></li>
</ul>

<ul id="dropdown2" class="dropdown-content">
    <li><a href="{{ url('/fileshare') }}">Файлообменник</a></li>
    <li><a href="{{ url('/phones') }}">Телефонный справочник</a></li>
    <li><a href="{{ url('/conferences') }}">Конференции</a></li>
    <li><a href="{{ url('/wiki') }}">Wiki</a></li>
</ul>

<nav class="blue darken-2">
    <div class="nav-wrapper container">
        <a href="/" class="brand-logo hide-on-small-and-down"><img src="{{ config('app.logo') }}" height="48px" vspace="7px" hspace="5px" align="left"> {{ config('app.name', 'Portal') }}</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{ url('/') }}">Главная</a></li>


            <li><a class="dropdown-button" href="#!" data-activates="dropdown2" data-beloworigin="true">Сервисы<i class="material-icons right">arrow_drop_down</i></a>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1" data-beloworigin="true">Прочее<i class="material-icons right">arrow_drop_down</i></a>
            </li>
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Вход</a></li>
            @else

                <li>
                    <a href="#" class="dropdown-button" data-activates="auth" data-beloworigin="true" role="button">
                        {{ Auth::user()->name }} <i class="material-icons right">arrow_drop_down</i>
                    </a>

                    <ul id="auth" class="dropdown-content blue" role="menu">
                        @if (Auth::user()->isAdmin)
                            <li><a href="{{ url('/admin') }}" class="white-text">Админка</a></li>
                        @endif
                        <li>
                            <a href="{{ url('/logout') }}" class="white-text"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Выход
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="/">Главная</a></li>
            <li><a href="{{ url('/fileshare') }}">Файлообменник</a></li>
            <li><a href="{{ url('/phones') }}">Телефонный справочник</a></li>
            <li><a href="{{ url('/conferences') }}">Конференции</a></li>
            <li><a href="">Опросы и голосования</a></li>
            <li><a href="{{ url('/wiki') }}">Wiki</a></li>

        </ul>
    </div>
</nav>

@yield('content')
<!--
<div class="fixed-action-btn horizontal click-to-toggle">
    <a class="btn-floating btn-large red">
        <i class="material-icons">menu</i>
    </a>
    <ul>
        <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
        <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
        <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
        <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
</div>
-->
<script src="/js/jquery-2.1.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="/js/materialize.min.js"></script>
<script src="/js/app.js"></script>
</body>
</html>
