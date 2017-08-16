@extends('layouts.app')
@section('css','phones')
@section('content')

<div class="container">

    <div class="form-group" style="display:inline;">
        <form v-on:submit.prevent="">
            <div class="input-group" style="display:table;">
                <span class="input-group-addon" style="width:1%;">
                    <i class="fa fa-search"></i>
                </span>
                <input 
                    class="form-control" 
                    placeholder="Поиск по фамилии, имени, номеру телефона, филиалу, отделу" autocomplete="off" autofocus="autofocus" 
                    type="text" 
                    v-model="searchQuery"
                >
                <span class="input-group-addon" style="width:1%;">
                    <button class="btn btn-default pull-right" @click="changeShowSettings()"><i class="fa fa-sliders" aria-hidden="true"></i></button>
                </span>
            </div>
        </form>
    </div>    

    <transition name="fade">
        <div class="panel panel-default" v-show="showSettings">
        <div class="panel-heading">
            Параметры поиска
        </div>
            <div class="panel-body">
                <div class="form-group" >
                    <div class="col-lg-3">
                        <label for="filial">Показывать: </label>
                        <select name="filial" id="">
                            <option value="ВСЕ">Все филиалы</option>
                            <option value="Волгоград">Волгоград</option>
                            <option value="Пригородные МЭС">Пригородные МЭС</option>
                            <option value="Камышинские МЭС">Камышинские МЭС</option>
                            <option value="Жирновские МЭС">Жирновские МЭС</option>
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <input type="text" name="param1" id="">
                    </div>
                    <div class="col-lg-3">
                        <input type="text" name="param2" id="">
                    </div>
                    <div class="col-lg-3">  
                        <input type="text" name="param3" id="">
                    </div>
                </div>
            </div>
        </div>
    </transition>
    
    
    <h2>Волгоград <small>Код: (8442) | Адресс: 400075, г. Волгоград, ул. Шопена, 13 </small></h2> 
    <phones class="flex-container" :filter-key="searchQuery">загрузка...</phones>

    <h2>Пригородные МЭС <small>Код: (84468) | Адресс: 403001, р.п. Городище, ул. 8-го Гвардейского Танкового корпуса, 22Б </small></h2>
    <phones class="flex-container" :filter-key="searchQuery">загрузка...</phones>

</div>

@endsection