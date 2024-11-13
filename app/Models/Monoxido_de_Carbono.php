<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Eloquent\Model;

class Monoxido_de_Carbono extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
}