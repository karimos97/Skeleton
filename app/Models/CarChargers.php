<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarChargers extends Model
{ use SoftDeletes;
    protected $fillable=['matricul','cost','date_charg','title','path','user_id','current_km'];
}
