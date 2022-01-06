<?php

namespace App\Models;

//the model is used to interact with the database

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


//the model represnets one job - therefore its Job not Jobs
class Job extends Model
{
    use HasFactory;
}
