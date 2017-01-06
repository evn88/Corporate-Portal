<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width"/>
        <title>{{ $event->title }}</title>
        <link rel="stylesheet" href="{{url('/css/mail_template.css')}}" />
    </head>
    <body>
        <h1><img src="{{url('/img/logo.png')}}" height="35" align="left" hspace="5"> {{ $event->title }}</h1>
        <div class="box">
        <p>Место: {{ $room }}</p>
        <p>
            Начало: {{ $event->start }} <br>
            Окончание: {{ $event->stop }}
        </p>
        </div>
        <p><b>Описание:</b></p>
        <p>{!! $event->description !!}</p>
        
        <p>Новая конференция создана пользователем <b>{{ $name }}</b></p>
        <a href="{{url('/event/' . $event->id )}}">Посмотреть в браузере</a>
    </body>
</html>

