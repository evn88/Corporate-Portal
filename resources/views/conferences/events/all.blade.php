@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1" >
            <div class="panel panel-default" >
                <div class="panel-heading">
		    <div class="row">
			<div class="col-md-6"><h5>Календарь конференций</h5></div>
			<div class="col-md-6 ">
			    @if (Auth::check())
			    <a href="{{ url('event/create')}}" class="btn btn-primary pull-right">Добавить</a>
			    @endif
			</div>
		    </div>
		</div> 
                
                <div class="panel-body">
                    {!! $calendar->calendar() !!}
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
{!! @$calendar->script() !!}
@endsection