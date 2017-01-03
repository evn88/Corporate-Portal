@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="section">

            <h3>Авторизация</h3>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}


                <div class="row">
                    <div class="input-field col s12 {{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" name="email" type="email" class="validate" value="{{ old('email') }}" required
                               autofocus>
                        <label for="email">Email</label>
                        @if ($errors->has('email'))
                            <span class="help-block red-text">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 {{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" name="password" type="password" class="validate" required>
                        <label for="password">Пароль</label>
                        @if ($errors->has('password'))
                            <span class="help-block red-text">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <p>
                    <input type="checkbox" id="remember" name="remember"/>
                    <label for="remember">Запомнить меня</label>
                </p>


                <button type="submit" class="btn">
                    Вход
                </button>

                <a class="btn" href="{{ url('/password/reset') }}">
                    Забыл пароль?
                </a>
                <a class="btn" href="{{ url('/register') }}">
                    Регистрация
                </a>
            </form>

        </div>
    </div>
@endsection
