@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="section">
            <h3>Конференции</h3>
        </div>
        <table width="100%" class="table table-hover table-condensed table-bordered">
        <thead>
            <tr>
                <th width="10%" style="text-align:center;">id</th>
                <th width="40%" nowrap="">Название</th>
                <th width="10%" style="text-align:center">Online</th>
                <th width="10%" style="text-align:center">Включен?</th>
            </tr>
        </thead>

        <tbody>
            @foreach($trueconf as $item)
            @if($item->is_active == 0)
                <tr style="background-color:#ffe6e6">
            @elseif($item->status == 1)
                <tr style="background-color:#BCF5A9">
            @elseif($item->status == 2)
                <tr style="background-color:#ffff99">
            @elseif($item->status == 5)
                <tr style="background-color:#ccffff">
            @else
                <tr>
            @endif
                    <td valign="top">{{ $item->id }}</td>
                    <td nowrap="">{{ $item->display_name }}</a></td>
                    <td style="text-align:center">{{ $item->status }}</td>
                    <td style="text-align:center">{{($item->is_active == 1)?'вкл':'выкл'}}
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection