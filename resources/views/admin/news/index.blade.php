@extends('layouts.admin')
@section('content')
    <div class="container">
        <h2>Новости портала <a href="{{ url('admin/news/create')}}" class="btn btn-primary pull-right">Добавить</a></h2>
        <table class="table table-striped table-hover ">
            <thead>
            <tr>
                <th width="1%">#</th>
                <th width="13%" class="text-center">Дата публикации</th>
                <th width="63%">Заголовок</th>
                <th width="23%">Управление</th>
            </tr>
            </thead>
            <tbody>
            @foreach($news as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td class="text-center">{{$item->created_at}}</td>
                    <td>{{$item->title}}</td>
                    <td>
                        <a href="{{url('admin/news/'.$item->id.'/edit')}}" class="btn btn-default">редактировать</a>
                        <a href="{{url('admin/news/delete/'.$item->id)}}" class="btn btn-danger">удалить</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection