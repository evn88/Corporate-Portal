@extends('layouts.admin')
@section('content')
    <div class="container">
        <h2>Новости портала <a href="{{ url('admin/news/create')}}" class="btn btn-primary pull-right">Добавить</a></h2>
        <table class="table table-striped table-hover ">
            <thead>
            <tr>
                <th width="1%">#</th>
                <th width="13%" class="text-center">Дата публикации</th>
                <th width="79%">Заголовок</th>
                <th width="7%">Управление</th>
            </tr>
            </thead>
            <tbody>
            @if($news->count() == 0)
                <tr>
                    <td></td>
                    <td class="text-center"></td>
                    <td><a href="{{url('admin/news/create')}}">Добавить новость</a></td>
                    <td></td>
                </tr>
            @endif
            @foreach($news as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td class="text-center">{{$item->created_at}}</td>
                    <td><a href="{{url('admin/news/'.$item->id.'/edit')}}">{{$item->title}}</a></td>
                    <td>
                        {!! Form::open(array('url' => 'admin/news/'.$item->id, 'method' => 'DELETE')) !!}
                        {{ Form::submit('Удалить', array('class' => 'btn btn-danger')) }}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>
        {!! $news->render() !!}
    </div>
@endsection