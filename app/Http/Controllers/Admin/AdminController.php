<?php

namespace App\Http\Controllers\Admin;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        /*if (!Auth::user()->idAdmin){
            redirect(404);
        }*/
    }

    public function index(){
        $data['news'] = News::count();
        return view('admin.dashboard', compact('data'));
    }

    public function test(){
        $user = User::all();
        dd($user);
    }

}
