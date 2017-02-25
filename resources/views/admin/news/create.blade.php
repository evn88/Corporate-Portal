@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6"><h5>Добавить новость</h5></div>
                    <div class="col-md-6 "><a href="{{ url('admin/news')}}" class="btn btn-default pull-right">Отмена</a></div>
                </div>
            </div>

            <div class="panel-body">
                @include('errors.form')

                {!! Form::open(array('url' => 'admin/news')) !!}

                @include('admin.news.__form')

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection