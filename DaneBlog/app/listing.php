<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class listing extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'foreign_key', 'other_key');
    }
}
