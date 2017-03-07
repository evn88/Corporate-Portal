<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\User;

class SettingsController extends Controller
{
    public function index() {
	$user = User::findOrFail(Auth::user()->id);
        $settings = unserialize($user->settings);

	return view('settings.general', compact('user', 'settings'));
    }
    public function store(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);
        $user->name = $request->name;

        $user->settings = serialize([
            'send_messages' => $request->send_messages,
            'get_messages' => $request->get_messages
                ]);
        $user->save();
        
        return redirect('/');
    }
}
