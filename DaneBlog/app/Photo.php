<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Album;

class Photo extends Model
{
    protected $fillable = array('album_id', 'description', 'photo', 'title', 'size');

    public function albums()
    {
        return $this->belongsTo('App\Album');
    }
}
