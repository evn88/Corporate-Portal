@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Предложить новость </h1>
        @if(Auth::check())
        <p class="lead">На данной странице вы можете предложить интересную новость которая будет доступна всем сотрудникам.
            Ваша новость должна будет пройти модерацию прежде чем попадет в ленту.</p>
        {!! Form::open(array('url' => 'admin/news')) !!}
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
        {{ Form::submit('Отправить новость', array('class' => 'btn btn-primary')) }}
        {!! Form::close() !!}

        @else
            <div class="alert alert-info">
                <h4>Что-бы предложить свою новость Вы должны быть авторизованы!</h4>
                <div class="form-group">
                    <a href="{{ url('login') }}" class="btn btn-default"> Авторизуйтесь</a> или <a href="{{ url('register') }}" class="btn btn-default"> зарегистрируйтесь</a>
                </div>

                <br />
                <p>После авторизации вернитесь на эту страницу, вам будет доступна форма для отправки новости</p>
            </div>

        @endif
    </div>

    <script src="{{ url('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace('ckeditor', {
            customConfig: '/lib/ckeditor/ckeditor_config.js'
        });
        CKEDITOR.dtd.$removeEmpty['span'] = false;
    </script>
@endsection