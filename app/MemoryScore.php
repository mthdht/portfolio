<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemoryScore extends Model
{
    protected $fillable = ["score", "guesses", "user_id"];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
