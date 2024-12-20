<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    //

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
