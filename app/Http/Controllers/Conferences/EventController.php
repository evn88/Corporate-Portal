<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Mail;
use Calendar;
use App\Event;
use App\Room;
use App\User;

class EventController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $calendar = Calendar::addEvents(Event::eventsForFullcalendar());

        return view('event.all', compact('calendar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rooms = Room::lists('name','id');
      
        return view('event.create', compact('rooms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\CreateEventRequest $request)
    {
        $event = new Event;
        $event->title = $request->title;
        $event->start = $request->start;
        $event->stop = $request->stop;
        $event->description = $request->description;
        $event->user_id = $request->user()->id;
        $event->room_id = $request->room_id;
        $event->save();
        
        /*
         * Отправка почты
         * Если в настройках стоит флажок то отправить всем сообщения
         */

        if ($request->user()->sendMessages())
        {
            $data = array(
                'name' => $request->user()->name,
                'room' => Room::find($request->room_id)->name,
                'event' => $event,
            );
            Mail::queue('emails.newconference', $data, function($message) {
                $message->from('noreply@voel.ru', 'Conference Scheduler');
                $message->to(User::emailsList())->subject('Новая конференция');
            });
        }
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::FindOrFail($id);
        $user = Auth::user();
        return view('event.show', compact(['event', 'user']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        $rooms = Room::lists('name','id');
        return view('event.edit', compact(['event', 'rooms']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\CreateEventRequest $request, Event $event)
    {
        $event->update($request->all());
        return redirect('/event/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect('/');
    }

}
