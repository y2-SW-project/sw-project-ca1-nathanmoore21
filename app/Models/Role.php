<?php

namespace App\Models;

//the model is used to interact with the database

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public function roles()
    {
        return $this->belongsToMany('App\Models\User', 'user_role');
    }

}
