<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use Illuminate\Http\Request;

class FileshareController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //dd(Role::lists('display_name','id'));
        //dd(Permission::find(1));
        return view('fileshare.index');
    }
}
