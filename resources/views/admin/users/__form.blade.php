<div class="form-group">
    {{ Form::label('name','Имя пользователя') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'required']) }}

</div>
<div class="form-group">
    {{ Form::label('roles','Роли пользователя') }}
    {{ Form::select('roles', $roles, null, ['class'=>'form-control', 'multiple' => true])}}
</div>
<div class="form-group">
    {{ Form::label('email','Email') }}
    {{ Form::text('email', null,['class' => 'form-control', 'required']) }}
</div>
<div class="form-group">
    {{ Form::label('password','Пароль') }}
    {{ Form::password('password', ['class' => 'form-control', 'required']) }}
</div>
{{ Form::submit('Добавить', array('class' => 'btn btn-primary')) }}