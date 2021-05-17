<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaritsPayment extends Model
{ use SoftDeletes;
    protected $fillable=['matricul','montant','mensuel','nbr_months','permier_tarit','user_id'];
}
