<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class cursos extends Model
{
    protected $table = 'cursos';

    protected $fillable =  ['codigo','nombre'];
}
