<?php

namespace LawyerSoft;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ciudad extends Model
{
    use SoftDeletes;

    protected $table = "ciudads";
    protected $primaryKey = "idCiudad"; //se agrega si el nombre de pk no es id
    protected $fillable = ['descripcion'];
    protected $dates = ['deleted_at'];   //para deshabilitar el registro
    
}
