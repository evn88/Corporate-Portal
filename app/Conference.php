<?php

namespace App;

use Ixudra\Curl\Facades\Curl;
use Carbon\Carbon;

class Conference extends Curl
{
    public function __construct($section){
        $this->section = ($section) ? $section: 'users';
        $this->data = Curl::to('https://'.env('TRUECONF_HOST').':'.env('TRUECONF_PORT').'/api/v3/'.$this->section)
        ->withHeader('content-type: application/json')
        ->withData( array( 'access_token' => env('TRUECONF_KEY') ) )
        ->returnResponseObject()
        ->asJson()
        ->get();
    }
    public function getAll()
    {
        if(isset($this->data->error)){
            dd($this->error);
        }else {
            return collect($this->data->content->{$this->section})->sortByDesc(['status']);
        }
    }
}
