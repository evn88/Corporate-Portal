@extends('layouts.app')


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1" >
            <div class="panel panel-default" >
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6"><h5>Редактировать место</h5></div>
                        <div class="col-md-6 ">
                            {!! Form::open(array('url' => 'room/'.$room->id, 'method' => 'DELETE')) !!}

                            <div class="btn-group pull-right" role="group" aria-label="..."> 
                            {{ Form::submit('Удалить', array('class' => 'btn btn-danger')) }}

                            {!! Form::close() !!}
                            <a href="{{ url('/room')}}" class="btn btn-default pull-right">Назад</a> 
                            </div>
                        </div>
                    </div>
                </div> 

                <div class="panel-body">
                    @include('errors.form')

                    {!! Form::model($room, ['method' => 'PATCH', 'action' => ['RoomController@update', $room->id]]) !!}

                    @include('room.__form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.scripts')

@endsection