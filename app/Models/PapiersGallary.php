<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PapiersGallary extends Model
{ use SoftDeletes;
    protected $fillable=['papiers_id','path','user_id'];
}
