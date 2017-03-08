@extends('layouts.admin')
@section('content')
    <div class="container">
        <h2>Главная</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body dash_box">
                        <h1>Всего новостей</h1>
                        <p>{{$data['news']}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body dash_box">
                        <h1>Всего пользователей</h1>
                        <p>{{$data['users']}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body dash_box">
                        <h1>Всего новостей</h1>
                        <p>{{$data['news']}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body dash_box">
                        <h1>Всего новостей</h1>
                        <p>{{$data['news']}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body dash_box">
                        <h1>Всего новостей</h1>
                        <p>{{$data['news']}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body dash_box">
                        <h1>Всего новостей</h1>
                        <p>{{$data['news']}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection