@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="news_head">{{$news->title}}</h1>
        <p class="news_date"><i class="fa fa-calendar" aria-hidden="true"></i>
            {{$news->created_at}}
            /
             <i class="fa fa-tag" aria-hidden="true"></i> <a href="{{url('news/').'/'}}">Рубрика</a>
            /
            <i class="fa fa-user" aria-hidden="true"></i> <a href="{{url('user/profile').'/'.$news->user->id}}">{{$news->user->name}}</a></p>
        <div class="panel panel-body">
            {!! $news->text !!}
        </div>
        @if($news->ThreeNews($news->id)->count() > 0)
            <h2>Другие новости</h2>

            <div class="row">
                @foreach($news->ThreeNews($news->id) as $n)
                    <div class="col-lg-4">
                        <a href="{{ url('news/'.$n->id) }}" class="btn-link">
                            <div class="panel">
                                <div class="panel-body">
                                    <h3>{{$n->title}}</h3>
                                    <img src="" class="img-responsive">
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection