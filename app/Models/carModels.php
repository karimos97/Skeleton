<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class carModels extends Model
{
    protected $fillable=['model_name','model_date','brand_id'];
}
