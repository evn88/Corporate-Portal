<div class="form-group">
    {{ Form::label('name','Место проведения конференции') }}
    {{ Form::text('name', null, array('class' => 'form-control', 'required')) }}
</div>
{{ Form::submit('Сохранить', array('class' => 'btn btn-primary')) }}
