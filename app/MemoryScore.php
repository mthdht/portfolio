<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemoryScore extends Model
{
    protected $fillable = ["score", "guesses", "difficulty", "user_id"];

    protected $casts = [
        'created_at' => 'datetime:d-m-Y à H:i',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
