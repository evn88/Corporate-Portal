<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    protected $guarded = [
        'created_at', 'updated_at'
    ];
    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function event()
    {
        return $this->hasMany(Event::class);
    }

}
