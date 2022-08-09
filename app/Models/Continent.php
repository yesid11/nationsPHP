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

    public function regiones(){
            //Parametros de has many
            //1.El modelo a relacionar 
            //2. La llave foranea actual en el modelo a relacionar

            return $this->hasMany(Region::class,
                                        "continent_id");
    }

    //relaicon entre continentes y paises 
    //Donde el abuelo es el continente y el papa es la region, el nieto vendria siendo los paises

    public function paises(){

        //Parametros con hasManyTrough 
        //1.modelo nieto
        //2.Modelo papá
        //3. claves foraneas en orden padre e hijo
        return $this->hasManyThrough(Country::class , 
                                     region::class, 
                                     "continent_id",
                                     "region_id");
    } 
}
