<div class="form-group">
    {{ Form::label('title','Заголовок новости') }}
    {{ Form::text('title', null, array('class' => 'form-control', 'required')) }}

</div>
<div class="form-group">
    {{ Form::label('description','Краткое описание новости') }}
    {{ Form::textarea('description', null, array('class' => 'form-control','rows'=>'2' ,'required')) }}
</div>
<div class="form-group">
    {{ Form::label('text','Новость') }}
    {{ Form::textarea('text', null, array('id'=>'ckeditor','class' => 'form-control', 'required')) }}
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