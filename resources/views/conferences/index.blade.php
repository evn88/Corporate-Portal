@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="section">
            <h3>Конференции</h3>
        </div>
        <table width="100%" class="table table-hover table-condensed table-bordered">
        <thead>
            <tr>
                <th width="50px" style="text-align:center;">id</th>
                <th width="40%" nowrap="">Название конференции</th>
                <th width="27%" style="text-align:center">Дата/Время начала</th>
                <!--<th width="10%" style="text-align:center">Кол-во участников сейчас</th>-->
                <th width="10%" style="text-align:center">MAX участников</th>
                <th width="10%" style="text-align:center">Статус</th>
            </tr>
        </thead>

        <tbody>
            @foreach($trueconf as $item)

                <tr>
                    <td valign="top">{{ $item->id }}</td>
                    <td nowrap=""><a href="{{ $item->url }}" target="_blank">{{ $item->topic }}</a></td>
                    <td>{{ (isset($item->invitation_timestamp))? $item->invitation_timestamp : "" }}</td>
                    <!--<td style="text-align:center">{{ $item->size_participants }}</td>-->
                    <td style="text-align:center">{{ $item->max_participants }}</td>
                    <td style="text-align:center">{{ $item->state }}</td>
                </tr>

            @endforeach
        </tbody>
    </table>
    </div>
@endsection