@extends('layouts.admin')
@section('content')
    <div class="container">
        <h2>Главная</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        Всего новостей: {{$data['news']}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection