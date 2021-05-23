<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class CarRentHestory extends Model
{ use SoftDeletes;
    protected $fillable=['matricule','date_rent','date_retour','dure','client_id','user_id'];
}
