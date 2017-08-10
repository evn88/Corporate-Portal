@extends('layouts.app')
@section('css','phones')
@section('content')

<div class="container">

    <h1>Телефонный справочник</h1>
    <div class="form-group">
    <form class="ng-pristine ng-valid" role="search" >
        <div class="form-group" style="display:inline;">
            <div class="input-group" style="display:table;">
                <span class="input-group-addon" style="width:1%;">
                    <i class="fa fa-search"></i>
                </span>
                <input class="form-control ng-pristine ng-valid ng-empty ng-touched" id="search" role="search" name="search" 
                placeholder="Поиск по фамилии, имени, номеру телефона, филиалу, отделу" autocomplete="off" autofocus="autofocus" type="text" 
                v-model="search"
                >
            </div>
        </div>
    </form>
    </div>
    
    <phones class="flex-container"></phones>

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

@endsection