<?php

namespace LawyerSoft;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Implicado extends Model
{
    use SoftDeletes;

    protected $table = "implicados";
    protected $primaryKey = "idImplicado"; //se agrega si el nombre de pk no es id
    protected $fillable = ['empresa','idPersona'];
    protected $dates = ['deleted_at'];   //para deshabilitar el registro
}
