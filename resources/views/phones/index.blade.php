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
        <h3>Отдел информационных технологий</h3>
        <ul class="phones-container">
            <li>
                <div class="avatar">
                    <img src="/img/user.png" align="left">
                </div>
                <h4>Вершков Е.Н.</h4>
                <p>Администратор безопасности</p>
                <p>
                    <i class="fa fa-phone" aria-hidden="true"></i> 
                    <strong>1034</strong>
                </p>
            </li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
            <li>7</li>
            <li>8</li>
            <li>9</li>
            <li>10</li>
            <li>11</li>
        </ul>
    </div>

    <div class="flex-group">
        <h3>Название группы</h3>
        <ul class="phones-container">
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
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