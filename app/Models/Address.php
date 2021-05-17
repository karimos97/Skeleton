<?php
namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{ use SoftDeletes;
    protected $fillable=['address','ville','country','zip_code','client_id','user_id'];
}
