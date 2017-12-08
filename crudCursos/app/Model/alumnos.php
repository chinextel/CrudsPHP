<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class alumnos extends Model
{
    protected $table = 'alumnos';

    protected $fillable =  ['codigo','nombre','carrera'];
}
