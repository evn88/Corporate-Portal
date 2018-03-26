@extends('layouts.app')
@section('css','phones')
@section('content')

<div class="container">

    <div class="form-group" style="display:inline;">
        <form v-on:submit.prevent="">
            <div class="input-group" style="display:table;">
                <span class="input-group-addon" style="width:1%;">
                    <i class="fa fa-search fa-2x"></i>
                </span>
                <input 
                    class="form-control" 
                    placeholder="Поиск по фамилии, имени, номеру телефона, профессии" autocomplete="off" autofocus="autofocus" 
                    type="text" 
                    v-model="searchQuery"
                >
                <span class="input-group-addon" style="width:1%;">
                    <button 
                    type="button"
                    class="btn btn-default pull-right" 
                    @click="toggleSettings()" 
                    data-toggle="tooltip" 
                    data-placement="top" 
                    data-original-title="Параметры поиска"
                    ><i class="fa fa-sliders" aria-hidden="true"></i></button>
                </span>
            </div>
        </form>
    </div>    

    <transition name="fade" v-cloak>
        <div class="panel panel-default" v-show="showSettings">
        <div class="panel-heading">
            Параметры поиска
        </div>
            <div class="panel-body">
                <div class="form-group" >
                    <div class="col-lg-4">
                        <select name="filial" v-model="filialSelected" class="form-control">
                            <option value="">Все филиалы</option>
                            <option value="Волгоград">Волгоград</option>
                            <option value="Пригородные МЭС">Пригородные МЭС</option>
                            <option value="Камышинские МЭС">Камышинские МЭС</option>
                            <option value="Жирновские МЭС">Жирновские МЭС</option>
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <select name="group" v-model="groupSelected" class="form-control">
                            <option value="">Все группы</option>
                            <option value="Отдел информационных технологий">Отдел информационных технологий</option>
                            <option value="Отдел кадров">Отдел кадров</option>
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" v-model="showBirthday"> Показывать дни рождения
                          </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </transition>

    <pre class="alert alert-danger" v-cloak v-if="true" v-for="error in errors">
    Error axios!
        @{{error}}
    </pre>


<ul v-if="false">
    <li v-for="g in groups" v-if="g.pid == null" v-cloak>@{{g.name}}
        <ul>
            <li v-for="gp in filteredGroups" v-if="g.id === gp.pid">@{{gp.name}}
                <ul>
                    <li v-for="i in phones" v-if="i.gid == gp.id">@{{i.lastname}} @{{i.firstname}} </li>
                </ul>
            </li>
        </ul>
    </li>
</ul>   


    <filials 
    :filter-key="searchQuery" 
    :filial-selected="filialSelected"
    :group-selected="groupSelected"
    :phones="phones"
    :filials="groups"
    :groups="groups"
    >
        
        <div class="col-lg-12 text-center" style="padding-top:50px">
            <p class="lead">Загрузка, подождите...</p>
            <i class="fa fa-spinner fa-pulse fa-2x fa-fw"></i>
            <span class="sr-only">Загрузка...</span>
        </div>
    
    </filials>
</div>

@endsection