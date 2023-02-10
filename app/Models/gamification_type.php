<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gamification_type extends Model
{
    use HasFactory;

    protected $table = "gamification_types";
    public $primaryKey = 'id';
    public $timestamps = true;


    
}
