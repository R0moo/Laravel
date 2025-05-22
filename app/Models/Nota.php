<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nota extends Model
{   
    use SoftDeletes;
    
    //Listagem de Campos para inserção no banco;
    protected $fillable = ['titulo','texto'];
}
