@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1" >
            <div class="panel panel-default" >
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6"><h5>Места проведения конференций</h5></div>
                        <div class="col-md-6 ">
                            @if (Auth::check())
                            <a href="{{ url('room/create')}}" class="btn btn-primary pull-right">Добавить</a>
                            @endif
                        </div>
                    </div>
                </div> 

                <div class="panel-body">
                    <p class="alert alert-info">Для редактирования/удаления нажмите на необходимый пункт в списке ниже</p>
                    <ul class="list-group">
                        @foreach ($rooms as $room)
                        <a href="{{ url('room/' . $room->id . '/edit' )}}" class="list-group-item">{{ $room->name }}</a>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
