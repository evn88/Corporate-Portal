<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Auth;
use Calendar;
use DateTime;

class Event extends Model
{

    protected $guarded = ['created_at', 'updated_at'];
    protected $dates = ['created_at', 'updated_at', 'start', 'stop'];

    /*
     * Формируем дату и время в нужном нам формате
     */

    public function getStartAttribute($value)
    {
        return Carbon::parse($value)->format('d.m.Y H:i');
    }

    public function getStopAttribute($value)
    {
        return Carbon::parse($value)->format('d.m.Y H:i');
    }

    /*
     * Формируем пригодную дату и время для записи в БД
     */

    public function setStartAttribute($value)
    {
        $this->attributes['start'] = Carbon::parse($value);
    }

    public function setStopAttribute($value)
    {
        $this->attributes['stop'] = Carbon::parse($value);
    }

    /*
     * Готовим данные для Fullcalendar который на главной
     */

    public function scopeEventsForFullcalendar()
    {
        $ev = Event::with('user')->get();
        
        foreach ($ev as $key => $value)
        {
            //посвечиваем созданые события зеленым если они "свои" 
            //и серым если "чужие"
            (Auth::user() === null) ? $color = '#136D27' : ($ev[$key]->user->id === Auth::user()->id) ? $color = '#136D27' : $color = 'grey';

            $events[] = Calendar::event(
                            $ev[$key]->title, //. ' | Место проведения: ' . $ev[$key]->room->name . ' | Автор: ' . $ev[$key]->user->name, //event title
                            false, //full day event?
                            new DateTime($ev[$key]->start), //start time (you can also use Carbon instead of DateTime)
                            new DateTime($ev[$key]->stop), //end time (you can also use Carbon instead of DateTime)
                            $ev[$key]->id, //optionally, you can specify an event ID
                            ['color' => $color, 'url' => '/event/' . $ev[$key]->id,]
            );
        }
        return $events;
    }

    /*
     * Связи таблиц
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

}
