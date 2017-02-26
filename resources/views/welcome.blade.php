@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="section">
            <div class="row">

                <div class="col-md-9">
                    <!-- page content -->
                    <h1>Новости</h1>
                    @foreach($news as $item)
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h2>{{$item->title}}</h2>
                                </div>
                                <div class="panel-body">
                                    <!--<img src="http://voel.ru/files/news/news_images/20161017/plaz.jpg"
                                         class="img img-responsive">-->
                                    <p>{!!$item->description!!}</p>
                                    <hr>
                                    <small class="pull-left news_date">{{$item->created_at}}</small>
                                    <a href="#" class="btn btn-default pull-right">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
    </div>
@endsection


