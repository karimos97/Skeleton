<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vidange extends Model
{use SoftDeletes;
    protected $fillable=['matricul','date_vidange','current_km','change_km','cost','oil_range','path','user_id'];
}
