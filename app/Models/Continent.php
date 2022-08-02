<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    //Tabla a conectar a este modelo
    protected $table = "continents";
    //La clave primaria de esaa tbla
    protected $primaryKey = "continent_id";
    //Omitir campos de auditoria
    public $timestamps = false;
    
    use HasFactory;
}
