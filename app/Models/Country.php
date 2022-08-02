<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //Tabla a conectar a este modelo
    protected $table = "countries";
    //La clave primaria de esaa tbla
    protected $primaryKey = "contry_id";
    //Omitir campos de auditoria
    public $timestamps = false;
    
    use HasFactory;
}
