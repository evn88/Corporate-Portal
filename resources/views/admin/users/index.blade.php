@extends('layouts.admin')
@section('content')
    <div class="container">
        <h2>Пользователи портала <a href="{{ url('admin/users/create')}}" class="btn btn-primary pull-right">Добавить
                пользователя</a></h2>
        <table class="table table-striped table-hover ">
            <thead>
            <tr>
                <th width="1%">#</th>
                <th width="79%">Имя</th>
                <th width="13%">Роли</th>
                <th width="7%">Управление</th>
            </tr>
            </thead>
            <tbody>
            @if($users->count() == 0)
                <tr>
                    <td></td>
                    <td></td>
                    <td><a href="{{url('admin/users/create')}}">Добавить пользователя</a></td>
                    <td></td>
                </tr>
            @endif
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td><a href="{{url('admin/users/'.$user->id.'/edit')}}">{{$user->name}}</a></td>
                    <td>@if(!empty($user->roles))
                            @foreach($user->roles as $role)
                                <label class="label label-success" data-toggle="tooltip" data-placement="left" title="{{$role->description}}">{{$role->display_name}}</label>
                            @endforeach
                        @endif

                    </td>
                    <td>
                        {!! Form::open(array('url' => 'admin/users/'.$user->id, 'method' => 'DELETE')) !!}
                        {{ Form::submit('Удалить', array('class' => 'btn btn-danger')) }}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection