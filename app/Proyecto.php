<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    //
    protected $table = 'proyecto';
    /* campos que seran  traidos de la base de datos para generar la interaccion */
    protected $fillable = ['proy_nombre','proy_codigo','proy_fechainicio','proy_fechafinal'];
}
