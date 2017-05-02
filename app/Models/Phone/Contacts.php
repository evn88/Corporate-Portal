<?php

namespace App\Models\Phone;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
     public function groups()
    {
        return $this->hasMany(Groups::class);
    }
    
    public function professions()
    {
        return $this->hasMany(Professions::class);
    }
    
    
}
