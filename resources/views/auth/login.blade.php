@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Авторизация</div>
                    <div class="panel-body">

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}

                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="inputEmail" class="col-md-4 control-label">Email</label>

                                <div class="col-md-6">
                                    <input type="text" name="email" class="form-control" id="inputEmail"
                                           placeholder="Email">
                                    @if ($errors->has('email'))
                                        <span class="help-block red-text">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="inputPassword" class="col-md-4 control-label ">Пароль</label>

                                <div class="col-md-6">
                                    <input type="password" name="password" class="form-control" id="inputPassword"
                                           placeholder="Пароль">
                                    @if ($errors->has('password'))
                                        <span class="help-block red-text">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="remember" name="remember"> Запомнить меня
                                        </label>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-6 col-lg-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Вход
                                    </button>
                                    <a class="btn btn-default" href="{{ url('/register') }}">
                                        Регистрация
                                    </a>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-lg-offset-4">
                                    <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                        Забыли пароль?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
