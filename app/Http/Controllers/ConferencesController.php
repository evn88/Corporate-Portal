<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conference;

class ConferencesController extends Controller
{

    public function index()
    {
        $key = env('TRUECONF_KEY');
        $url = "https://10.77.101.19/api/v2/conference";

        $conference = new Conference;
        $trueconf = $conference->getAllConference();
        dd($trueconf);
        return view('conferences.index', compact('trueconf'));
    }

}
