<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //Tabla a conectar a este modelo
    protected $table = "regions";
    //La clave primaria de esaa tbla
    protected $primaryKey = "region_id";
    //Omitir campos de auditoria
    public $timestamps = false;

    use HasFactory;

    public function continente(){

        //Parametros de Belongsto
        //1.El modelo a relacionar 
        //2.La llave foranea a relacionar en el modelo actual
        return $this->belongsTo(Continent::class,
                            'Continent_id');
    }

    //Relacion entre region 1 a Muchos paises 

    public function paises(){
        return $this->hasMany(Country::class,
                                        "region_id");
    }
}
