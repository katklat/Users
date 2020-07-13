<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    //
    protected $fillable = [
        'user_id', 'registered_at', 'unregistered_at', 'time_registered'
    ];
}
