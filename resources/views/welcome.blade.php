@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-9">
                <!-- page content -->

                <h1>Новости компании
                    <div class="pull-right">
                        <a href="{{ url('news/offer') }}" class="btn btn-default "><i class="fa fa-file-text-o" aria-hidden="true"></i> Предложить свою новость</a>
                        <div class="btn-group">
                            <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Рубрики
                                &nbsp;<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Все новости</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Мероприятия</a></li>
                                <li><a href="#">Филиалы</a></li>
                                <li><a href="#">Оповещения</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Интересное</a></li>
                            </ul>
                        </div>
                    </div>
                </h1>

                <br>
                <div class="row">
                    <div class="col-md-12">
                        @if($news->count() == 0)
                            <div class="well well-lg">
                                <h3>На портале еще нет новостей.</h3>
                                <p>Вы можете предложить <a href="{{ url('news/offer') }}">опубликовать свою новсть</a></p>
                            </div>
                        @endif
                        @foreach($news as $item)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h2>{{$item->title}}</h2>
                                </div>
                                <div class="panel-body">
                                    <!--<img src="http://voel.ru/files/news/news_images/20161017/plaz.jpg"
                                         class="img img-responsive">-->
                                    <p class="lead">{!!$item->description!!}</p>

                                    <small class="pull-left news_date"><i class="fa fa-calendar" aria-hidden="true"></i> {{$item->created_at}}
                                        /
                                        <i class="fa fa-user" aria-hidden="true"></i> <a href="{{url('user/profile').'/'.$item->user->id}}">{{$item->user->name}}</a></small>
                                    <a href="{{ url('news/'. $item->id) }}"
                                       class="btn btn-default pull-right">Подробнее</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <!-- vidgets  -->
                <h3>Дни рождения</h3>
                <div class="alert alert-dismissible alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    В настройках вашей учетной записи можно отключить отображение вашего дня рождения
                </div>
                <ul class="list-group">
                    <a href="" class="list-group-item">
                        <span class="badge">05.10</span>
                        Вершков Егор <img src="{{url('img/85.png')}}" width="25px">
                    </a>
                    <a href="" class="list-group-item happybd">
                        <span class="badge">05.10</span>
                        Попов Николай
                    </a>
                    <a href="" class="list-group-item">
                        <span class="badge">23.10</span>
                        Маргарита Олейникова
                    </a>
                </ul>


                <h3 class="center-align">Конференции</h3>
                <p class="light">Конференции запланированные на сегодня</p>
                <ul class="list-group">
                    <a href="" class="list-group-item">
                        <span class="badge">11:00</span>
                        Большой зал
                    </a>
                    <a href="" class="list-group-item">
                        <span class="badge">13:20</span>
                        Большой зал
                    </a>
                    <a href="" class="list-group-item">
                        <span class="badge">15:10</span>
                        Малый зал
                    </a>
                </ul>

                <h3 class="center-align">Ссылки</h3>
                <div class="list-group">
                    <a href="#!" class="list-group-item">Система заявок</a>
                    <a href="#!" class="list-group-item">voel.ru</a>
                    <a href="#!" class="list-group-item">voes.ru</a>
                    <a href="#!" class="list-group-item">volgogres.ru</a>
                </div>

                <h3 class="center-align">Статистика сервера</h3>
                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                    </li>
                </ul>


            </div>

        </div>
    </div>

@endsection


