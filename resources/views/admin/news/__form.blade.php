<div class="form-group">
    {{ Form::label('title','Заголовок новости') }}
    {{ Form::text('title', null, array('class' => 'form-control', 'required')) }}

</div>
<div class="form-group">
    {{ Form::label('description','Текст новости') }}
    {{ Form::textarea('description', null, array('id'=>'ckeditor','class' => 'form-control', 'required')) }}
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