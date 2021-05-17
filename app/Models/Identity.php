<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Identity extends Model
{ use SoftDeletes;
    protected $fillable=['passport','pass_expire','cin','cin_expire','permis','permis_expire','client_id','user_id'];
}
