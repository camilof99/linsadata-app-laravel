<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Insumo extends Model
{
    protected $fillable = ['descripcion','cantidad','foto', 'id_usuario'];
}
