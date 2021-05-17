<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class carGallery extends Model
{ use SoftDeletes;
    protected $fillable=['path','car_id','user_id'];
}
