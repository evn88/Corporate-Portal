<div class="form-group">
    {{ Form::label('name','Имя пользователя') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'required']) }}

</div>
<div class="form-group">
    {{ Form::label('roles','Роли пользователя') }}
    {!! Form::select('roles[]', $roles,(!empty($userRole))? $userRole : '', array('class' => 'form-control','multiple')) !!}
</div>
<div class="form-group">
    {{ Form::label('email','Email') }}
    {{ Form::text('email', null,['class' => 'form-control', 'required']) }}
</div>
<div class="form-group">
    {{ Form::password('password', ['placeholder' => 'Пароль','class' => 'form-control', (Request::is('admin/users/create'))? 'required':'']) }}
</div>
<div class="form-group">
    {!! Form::password('confirm-password', array('placeholder' => 'Подтверждение пароля','class' => 'form-control')) !!}
</div>

{{ Form::submit('Сохранить', array('class' => 'btn btn-primary')) }}