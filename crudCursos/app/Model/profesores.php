<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class profesores extends Model
{
      protected $table = 'profesores';

     protected $fillable =  ['codigo','nombre','notaEncuesta'];


}
