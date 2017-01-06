<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConferencesController extends Controller
{
    public function index()
    {
        return view('conferences.index');
    }
}
