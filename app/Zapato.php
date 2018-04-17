<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zapato extends Model
{
    //Definir tabla de zapatos
    protected $table  = 'zapatos';

    protected $fillable = ['tipo', 'marca', 'medida', 'descripcion'];
}
