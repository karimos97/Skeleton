<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class carInfo extends Model
{ use SoftDeletes;
    protected $fillable=['matricul','body_number','color','date_buy','maisson_achat','rate_credit','car_price','credit_date','date_vente','prix_vente','transmission','carrburant','puissance','band_id','model_id','category','observation','user_id'];
}
