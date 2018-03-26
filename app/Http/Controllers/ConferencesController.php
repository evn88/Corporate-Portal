<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conference;

class ConferencesController extends Controller
{

    public function index()
    {
        
        $conference = new Conference('users');
        $trueconf = $conference->getAll();
        //dd($trueconf);
        return view('conferences.index', compact('trueconf'));
    }

}
