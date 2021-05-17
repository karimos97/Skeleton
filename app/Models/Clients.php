<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Clients extends Model

{ use HasFactory,SoftDeletes;
    protected $fillable=['fname','lname','sex','company','phone1','phone2','email','date_birth','observation','user_id','listed'];
}
