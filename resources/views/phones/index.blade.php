@extends('layouts.app')
@section('css','phones')
@section('content')

<div class="container">

    <h1>Телефонный справочник</h1>
    <div class="form-group">
        <form v-on:submit.prevent="">
            <div class="form-group" style="display:inline;">
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
                </div>
            </div>    
        </form>
    </div>
    
 
    <phones class="flex-container" :filter-key="searchQuery"></phones>

    <phones class="flex-container" :filter-key="searchQuery"></phones>

</div>

@endsection