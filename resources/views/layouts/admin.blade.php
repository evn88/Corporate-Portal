<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Админка</title>
    <link rel="stylesheet" href="{{ url('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('/css/app.css') }}">
    <link rel="stylesheet" href="{{ url('/css/fileshare.css') }}">
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
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="{{ url(config('app.logo_white')) }}" height="25px" hspace="10"
                                                  align="left"> Админка</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <ul class="nav navbar-nav">
                <li class="{{ Request::is('admin') ? 'active' : '' }}"><a href="{{ url('admin') }}">Главная</a></li>
                <li class="{{ Request::is('admin/news') ? 'active' : '' }}"><a href="{{ url('admin/news') }}">Новости</a></li>
                <li class="{{ Request::is('admin/users') ? 'active' : '' }}"><a href="{{ url('admin/users') }}">Пользователи</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Сервисы
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('fileshare') }}">Файлообменник</a></li>
                        <li><a href="{{ url('phones') }}">Телефонный справочник</a></li>
                        <li><a href="{{ url('conferences') }}">Конференции</a></li>
                        <li><a href="{{ url('polls') }}">Опросы и голосования</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('askue') }}">АСКУЭ</a></li>
                        <li><a href="{{ url('wiki') }}">Wiki</a></li>
                    </ul>
                </li>

            </ul>
            <!------->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('/') }}" class="white-text">На сайт</a></li>
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Вход</a></li>
                @else

                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/admin/profile') }}" class="white-text">Настройки профиля</a></li>

                            <li>
                                <a href="{{ url('/logout') }}" class="white-text"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Выход
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                      style="display: none;">
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
<script src="{{ url('/js/app.js') }}"></script>
<script src="{{ url('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
@yield('footer')
</body>
</html>
