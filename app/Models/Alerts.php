<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Alerts extends Model
{ use SoftDeletes;
    protected $fillable=['matricul','message','user_id'];
}
