<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Eloquent\Model;

class Nivel_de_Agua extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
}