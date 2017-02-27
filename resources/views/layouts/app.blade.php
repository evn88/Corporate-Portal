<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Корпоративный портал</title>
    <link rel="stylesheet" href="{{ url('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('/css/app.css') }}">
    <link rel="stylesheet" href="{{ url('/css/fileshare.css') }}">
    <link rel="stylesheet" href="{{ url('/lib/font-awesome-4.7.0/css/font-awesome.min.css') }}">

    <!-- Scripts -->
    <script>
        window.Laravel =<?= json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="{{ url(config('app.logo_white')) }}" height="25px" hspace="10" align="left"> {{ config('app.name', 'Portal') }}</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <ul class="nav navbar-nav">
                <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Главная <span class="sr-only">(current)</span></a></li>
                <li class="{{ Request::is('fileshare') ? 'active' : '' }}"><a href="{{ url('fileshare') }}">Файлообменник</a></li>
                <li class="{{ Request::is('phones') ? 'active' : '' }}"><a href="{{ url('phones') }}">Телефонный справочник</a></li>
                <li><a href="http://otrs.voenet.local/" target="_blank">Техническая поддрежка</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Сервисы <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">

                        <li><a href="{{ url('conferences') }}">Конференции</a></li>
                        <li><a href="{{ url('polls') }}">Опросы и голосования</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('askue') }}">АСКУЭ</a></li>
                        <li><a href="{{ url('wiki') }}">Wiki</a></li>
                    </ul>
                </li>

            </ul>
            <!--
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Поиск">
                </div>
                <button type="submit" class="btn btn-default">Найти</button>
            </form>
            -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Вход</a></li>
                @else

                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
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
        </div>
    </div>
</nav>


@yield('content')


<script src="{{ url('/js/jquery-2.1.1.min.js') }}"></script>
<script src="{{ url('/js/bootstrap.min.js') }}"></script>
<!-- Compiled and minified JavaScript -->

<script src="{{ url('/js/app.js') }}"></script>
</body>
</html>
