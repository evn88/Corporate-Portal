<div class="form-group">
    {{ Form::label('title','Название конференции') }}
    {{ Form::text('title', null, array('class' => 'form-control', 'required')) }}
</div>
<div class="form-group">
    {{ Form::label('room_id','Место проведения конференции') }}
    {{ Form::select('room_id', $rooms, null, ['class' => 'form-control', 'placeholder'=>' ', 'required']) }}
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('start','Дата/время начала') }}
            {{ Form::datetime('start', null, array('class' => 'form-control', 'required', 'id'=>'start_datetimepicker')) }}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('stop','Дата/время окончания') }}
            {{ Form::datetime('stop', null, array('class' => 'form-control', 'required', 'id'=>'stop_datetimepicker')) }}
        </div>
    </div>
</div>
<div class="form-group">
    {{ Form::label('description','Описание') }}
    {{ Form::textarea('description', null, array('id'=>'ckeditor','class' => 'form-control', 'placeholder'=>'Описание конференции')) }}
</div>
{{ Form::submit('Сохранить', array('class' => 'btn btn-primary')) }}

@section('footer') 
        <script>
CKEDITOR.replace('ckeditor', {
    customConfig: '/lib/ckeditor/ckeditor_config.js'
});
CKEDITOR.dtd.$removeEmpty['span'] = false;
        </script>
@endsection