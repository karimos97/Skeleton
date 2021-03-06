<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserRoles extends Model
{use SoftDeletes;
    protected $fillable=['user_id','role_id'];
}
