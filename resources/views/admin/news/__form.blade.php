<div class="raw">
    <div class="col-lg-8">
        <div class="form-group">
            {{ Form::label('title','Заголовок новости') }}
            {{ Form::text('title', null, array('class' => 'form-control', 'required')) }}

        </div>
        <div class="form-group">
            {{ Form::label('description','Краткое описание новости') }}
            {{ Form::textarea('description', null, array('class' => 'form-control','rows'=>'2' ,'required')) }}
        </div>
    </div>
    <div class="col-lg-4">
        {{ Form::label('status','Статус новости') }}
        {{ Form::select('status',
        [
            'Draft'=>'Черновик',
            'Review'=>'На рассмотрении',
            'Published'=>'Опубликован'
        ],
        (!empty($news->status)) ? $news->status : NULL,
        ['class'=>'form-control'])
        }}

    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            {{ Form::label('text','Новость') }}
            {{ Form::textarea('text', null, array('id'=>'ckeditor','class' => 'form-control', 'required')) }}
        </div>
    </div>
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