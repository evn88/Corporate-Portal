@extends('layouts.app')


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-8"><h5><b>{{$room->name}}</b></h5></div>
                        <div class="col-md-4">
                            {!! Form::open(array('url' => 'room/'.$room->id, 'method' => 'DELETE')) !!}

                            <div class="btn-group pull-right" role="group" aria-label="..."> 
                                @if (isset($user) && $user->id === 1)
                                {{ Form::submit('Удалить', array('class' => 'btn btn-default')) }}
                                <a href="{{ url('/room/'.$room->id.'/edit')}}" class="btn btn-default">Редактировать</a>
                                @endif
                                <a href="{{ url('/')}}" class="btn btn-default">Назад</a>
                            </div>
                            
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>

                <div class="panel-body">
                    <div class="col-lg-8">
                        <p>{!!$event->description or 'Описание отсутствует'!!}</p>
                    </div>
                    <div class="col-lg-4">
                        <ul class="list-group text-muted">
                            <li class="list-group-item">Место:  {{$event->room->name}}</li>
                            <li class="list-group-item">Начало:  <b>{{$event->start}}</b></li>
                            <li class="list-group-item">Окончание:  <b>{{$event->stop}}</b></li>
                            <li class="list-group-item">Автор:  {{$event->user->name}}</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
@endsection
