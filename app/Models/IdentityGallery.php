<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdentityGallery extends Model
{
    use HasFactory;
    protected $fillable=['identityId','type','path'];
}
