<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondDriver extends Model
{ 
    use HasFactory;
    protected $fillable=['fname','lname','permis','date_permis','LieuPermis','ncin'];
}
