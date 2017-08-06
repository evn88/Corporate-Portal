@extends('layouts.app')
@section('css','phones')
@section('content')

<div class="container">

    <h1>Телефонный справочник</h1>
    <div class="form-group">
    <form class="ng-pristine ng-valid" role="search">
        <div class="form-group" style="display:inline;">
            <div class="input-group" style="display:table;">
                <span class="input-group-addon" style="width:1%;">
                    <i class="fa fa-search"></i>
                </span>
                <input class="form-control ng-pristine ng-valid ng-empty ng-touched" id="search" role="search" name="search" 
                placeholder="Поиск по фамилии, имени, номеру телефона, филиалу, отделу" autocomplete="off" autofocus="autofocus" type="text" ng-model="query">
            </div>
        </div>
    </form>
    </div>

<div class="flex-container">
    <div class="flex-group">
        <h3>Отдел информационных технологий <small>Код: 8442 | Волгоград, ул.Шопена 13</small></h3>
        <ul class="phones-container">
            <li class="panel panel-default">
                <div class="phones-blue-box">
                    <div class="phones-avatar">
                        <img src="/img/user.png" align="left">
                    </div>
                    <h4>Вершков </h4>
                    <span class="small">Егор Николаевич</span>
                    
                </div>
                <div class="phones-description">
                    <p>Администратор безопасности информационных технологий</p>
                        <i class="fa fa-phone fa-2x"></i> 
                        <span class="strong">1034</span>
                        <i class="fa fa-phone-square fa-2x"></i>
                        <span class="strong">56-20-74</span>
                        <a class=""><i class="fa fa-address-card fa-2x" aria-hidden="true"></i></a>
                </div>
            </li>
            
            <li class="panel">
                <div class="phones-blue-box">
                    <div class="phones-avatar">
                        <img src="/img/user.png" align="left">
                    </div>
                    <h4>Сказкоподателев </h4>
                    <span class="small">Сергей Александрович </span>
                    
                </div>
                <div class="phones-description">
                    <p>Человек с очень длинной профессией которую только можно придумать</p>
                        <i class="fa fa-phone fa-2x"></i> 
                        <span class="strong">1034</span>
                        <i class="fa fa-phone-square fa-2x"></i>
                        <span class="strong">56-20-74</span>
                </div>
            </li>

            <li class="panel">
                <div class="phones-blue-box">
                    <div class="phones-avatar">
                        <img src="/img/user.png" align="left">
                    </div>
                    <h4>Вершков </h4>
                    <span class="small">Егор Николаевич</span>
                    
                </div>
                <div class="phones-description">
                    <p>Администратор безопасности информационных технологий</p>
                        <i class="fa fa-phone fa-2x"></i> 
                        <span class="strong">1034</span>

                </div>
            </li>

            <li class="panel">
                <div class="phones-blue-box">
                    <div class="phones-avatar">
                        <img src="/img/user.png" align="left">
                    </div>
                    <h4>Вершков </h4>
                    <span class="small">Егор Николаевич</span>
                    
                </div>
                <div class="phones-description">
                    <p>Администратор безопасности информационных технологий</p>
                        <i class="fa fa-phone fa-2x"></i> 
                        <span class="strong">1034</span>
                        <i class="fa fa-phone-square fa-2x"></i>
                        <span class="strong">56-20-74</span>
                </div>
            </li>

            <li class="panel">
                <div class="phones-blue-box">
                    <div class="phones-avatar">
                        <img src="/img/user.png" align="left">
                    </div>
                    <h4>Вершков </h4>
                    <span class="small">Егор Николаевич</span>
                    
                </div>
                <div class="phones-description">
                    <p>Администратор безопасности информационных технологий</p>
                        <i class="fa fa-phone fa-2x"></i> 
                        <span class="strong">1034</span>
                        <i class="fa fa-phone-square fa-2x"></i>
                        <span class="strong">56-20-74</span>
                </div>
            </li>

            <li class="panel">
                <div class="phones-blue-box">
                    <div class="phones-avatar">
                        <img src="/img/user.png" align="left">
                    </div>
                    <h4>Вершков </h4>
                    <span class="small">Егор Николаевич</span>
                    
                </div>
                <div class="phones-description">
                    <p>Администратор безопасности информационных технологий</p>
                        <i class="fa fa-phone fa-2x"></i> 
                        <span class="strong">1034</span>
                        <i class="fa fa-phone-square fa-2x"></i>
                        <span class="strong">56-20-74</span>
                </div>
            </li>

            <li class="panel">
                <div class="phones-blue-box">
                    <div class="phones-avatar">
                        <img src="/img/user.png" align="left">
                    </div>
                    <h4>Вершков </h4>
                    <span class="small">Егор Николаевич</span>
                    
                </div>
                <div class="phones-description">
                    <p>Администратор безопасности информационных технологий</p>
                        <i class="fa fa-phone fa-2x"></i> 
                        <span class="strong">1034</span>
                        <i class="fa fa-phone-square fa-2x"></i>
                        <span class="strong">56-20-74</span>
                </div>
            </li>
        </ul>
    </div>

    <div class="flex-group">
        <h3>Название группы</h3>
        <ul class="phones-container">
            <li class="panel">1</li>
            <li class="panel">2</li>
            <li class="panel">3</li>
            <li class="panel">4</li>
        </ul>
    </div>
</div>


<!--
    <div id="phone-box">
        <div class="phone-group">
            <h2>Отдел информационных технологий</h2>
            <div class="phone-card">
                <img class="phone-avatar">
                <h3>Вершков Егор <br> Николаевич</h3>
                <p>Ведущий инженер-программист</p>
                <p class="phone-number-int">1083</p>
            </div>
        </div>
    </div>
 -->   

</div>
@endsection