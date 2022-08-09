<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //Tabla a conectar a este modelo
    protected $table = "countries";
    //La clave primaria de esaa tbla
    protected $primaryKey = "country_id";
    //Omitir campos de auditoria
    public $timestamps = false;
    
    use HasFactory;
    //relacion de muchos paises a muchos idiomas 
    public function idiomas(){

        //belongsToMany :parametros 
        //1.Modelo a relacionar
        //2.La tabla pibote
        //3.La clave foranea del modelo actual en la tabla del pibote 
        //4.la clave foranea del modelo a relacionar
        return $this->belongsToMany(Idioma::class,
                                            "country_languages",
                                            "country_id",
                                            "language_id")->withPivot('official');
    }
}
