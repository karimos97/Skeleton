<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contrats extends Model
{use SoftDeletes;
    protected $fillable=['matricule','duree','date_sorti','date_retourn','locationPlace','current_km','resturn_km','location_return','day_cost','total_cost','avance','rest','client_id','client_2','user_id'];
}
