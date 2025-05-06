<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    //Listagem de Campos para inserção no banco;
    protected $fillable = ['texto'];
}
