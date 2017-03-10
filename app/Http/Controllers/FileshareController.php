<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use Illuminate\Http\Request;
use Log;
use Auth;
use App\Console\Commands\SendEmail;
use Carbon\Carbon;
use Queue;

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
        
        /*$this->dispatch(
                    Log::info('Проверка работы: '.Auth::user())
                );
        */
        $date = Carbon::now()->addSecond(10);

        Queue::later($date, new SendEmail());
        //$this->dispatch(new SendEmail())->delay(60);
        return view('fileshare.index');
    }
}
