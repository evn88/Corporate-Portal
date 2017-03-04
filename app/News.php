<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title',
        'description',
        'text',
        'img',
        'created_at'
    ];

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d.m.Y H:i');
    }

    public function scopeThreeNews($query, $id)
    {
        /*
         * выводим в блоке "другие новости"
         */
        return $query->where('id','!=',$id)->orderBy('id','desc')->limit('3')->get();
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
