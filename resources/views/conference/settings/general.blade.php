@extends('layouts.app')


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-8"><h5>Настройки</h5></div>
                        <div class="col-md-4">

                            <div class="btn-group pull-right" role="group" aria-label="..."> 
                                <a href="{{ url('/')}}" class="btn btn-default">Назад</a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="panel-body">
		    @include('errors.form')

                    {!! Form::open(array('url' => 'settings')) !!}
		    <div class="form-group">
			{{ Form::label('name','ФИО') }}
			{{ Form::text('name', $user->name, array('class' => 'form-control', 'required')) }}
		    </div>
                    <div class="checkbox">
			<label>
                            {{ Form::checkbox('send_messages', $settings['send_messages'], $settings['send_messages']) }}
			    Отправлять всем зарегистрированным пользователям уведомления о созданных вами мероприятиях?
			</label>
		    </div>
                    <div class="checkbox">
			<label>
                            {{ Form::checkbox('get_messages', @$settings['get_messages'], @$settings['get_messages']) }}
			    Получать уведомления на почту?
			</label>
		    </div>
		    <br>
		    {{ Form::submit('Сохранить', array('class' => 'btn btn-primary')) }}
		    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
</div>
</div>
@endsection
