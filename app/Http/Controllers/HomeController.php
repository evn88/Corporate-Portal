<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('id','desc')->get();

        return view('welcome', compact('news'));
    }

    public function getNews($id)
    {
        //dd($id);
        $news = News::find($id);
        return view('news/detail', compact('news'));
    }

    public function offerNews()
    {
        $this->middleware('auth');
        return view('news/offer');
    }
    
}
