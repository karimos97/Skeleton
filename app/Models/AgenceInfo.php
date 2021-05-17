<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class AgenceInfo extends Model
{ use SoftDeletes;
    protected $fillable=['fname','lname','cin','agence','address','ville','zip_code','phone','Email','patant','IF','RC','ICE','CNSS','user_id'];
}
