<?php

namespace App;

use Ixudra\Curl\Facades\Curl;
use Carbon\Carbon;

class Conference extends Curl
{
    public function getAllConference()
    {
        $trueconf = Curl::to('https://10.77.101.19/api/v2/conference')
        ->withData( array( 'access_token' => env('TRUECONF_KEY') ) )
        ->asJson()
        ->get();
        
        foreach ($trueconf as $item){
            foreach ($item as $key => $i){
                //dd((isset($item->$key->invitation_timestamp)? $item->$key->invitation_timestamp : null));
                //return Carbon::parse(isset($item->$key->invitation_timestamp)? $item->$key->invitation_timestamp : null)->format('d.m.Y H:i');
                //dd($i);
            }
            return $item; 
        }
        
        //return $trueconf;
    }
}
