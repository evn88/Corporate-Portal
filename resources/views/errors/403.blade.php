@extends((Request::is('admin/*')) ? 'layouts.admin' : 'layouts.app')

@section('content')
    <div class="container">
        <div class="col s10 offset-s2">
            <div class="jumbotron">
                <h1>403 Доступ запрещен</h1>
                <p>Вы не обладаете необходимыми привилегиями для доступа на запрашиваемую страницу</p>
                <p><a class="btn btn-default btn-lg" href="{{ url('/') }}" role="button">на главную</a></p>
            </div>
        </div>
    </div>
@endsection