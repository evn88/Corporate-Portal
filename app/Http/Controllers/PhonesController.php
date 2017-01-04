<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhonesController extends Controller
{
    public function index()
    {
        return view('phones.index');
    }
}
