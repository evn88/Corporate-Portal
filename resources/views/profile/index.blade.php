@extends('layouts.app')
@section('content')
<div class="container">

    <h1>Настройки профиля пользователя</h1>

    <div class="form-group">
        {{ Form::label('name','Имя пользователя') }}
        {{ Form::text('name', $user->name, ['placeholder' => 'Имя пользователя', 'class' => 'form-control', 'required']) }}

    </div>

    <div class="form-group">
        {{ Form::label('email','Email') }}
        {{ Form::text('email', $user->email,['placeholder' => 'E-mail','class' => 'form-control', 'required']) }}
    </div>
    <h3>Изменить пароль</h3>
    <p class="well well-sm">Если не требуется менять пароль, то просто оставьте поля пустыми</p>
    <div class="form-group">
        {{ Form::password('password', ['placeholder' => 'Пароль','class' => 'form-control', (Request::is('admin/users/create'))? 'required':'']) }}
    </div>
    <div class="form-group">
        {!! Form::password('confirm-password', array('placeholder' => 'Подтверждение пароля','class' => 'form-control')) !!}
    </div>

    {{ Form::submit('Обновить', array('class' => 'btn btn-primary')) }}

</div>
@endsection