<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Photo;

class Album extends Model
{
    protected $fillable = array('name', 'description', 'cover_image');

    public function user()
    {
        return $this->belongsTo('App\User', 'foreign_key', 'other_key');
    }

    public function photos()
    {
        return $this->hasMany('App\Photo');
    }
}
