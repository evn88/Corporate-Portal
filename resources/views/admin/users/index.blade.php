@extends('layouts.admin')
@section('content')
    <div class="container">
        <h2>Пользователи портала
            <div class="pull-right">
                <a href="{{ url('admin/users/roles')}}" class="btn btn-primary">Менеджер ролей</a>
                <a href="{{ url('admin/users/create')}}" class="btn btn-primary">Добавить пользователя</a>
            </div>
        </h2>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-striped table-hover ">
            <thead>
            <tr>
                <th width="1%">#</th>
                <th width="13%">Дата</th>
                <th width="56%">Имя</th>
                <th width="23%">Роли</th>
                <th width="7%">Управление</th>
            </tr>
            </thead>
            <tbody>
            @if($users->count() == 0)
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="{{url('admin/users/create')}}">Добавить пользователя</a></td>
                    <td></td>
                </tr>
            @endif
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->created_at}}</td>
                    <td><a href="{{url('admin/users/'.$user->id.'/edit')}}">{{$user->name}}</a></td>
                    <td>@if(!empty($user->roles))
                            @foreach($user->roles as $role)
                                <label class="label label-success" data-toggle="tooltip" data-placement="left"
                                       title="{{$role->description}}">{{$role->display_name}}</label>
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
        {!! $users->render() !!}
    </div>
@endsection