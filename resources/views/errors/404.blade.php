@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="col s10 offset-s2">
                <div class="jumbotron">
                    <img src="{{ url('img/404.png') }}" class="img img-responsive">
                    <h1>404 Страница не найдена</h1>
                    <p>Страница, на которую вы пытаетесь попасть, вероятно не существует</p>
                    <p><a class="btn btn-default btn-lg" href="{{ url('/') }}" role="button">на главную</a></p>
                </div>
            </div>
        </div>
@endsection