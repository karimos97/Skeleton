<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Parking extends Model
{ use SoftDeletes;
    protected $fillable=['car_id','dispo','user_id'];
}
