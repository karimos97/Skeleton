<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Papiers extends Model
{ use SoftDeletes;
    protected $fillable=['matricul','title','renew_date','expire_date','serie','cost','user_id'];
}
