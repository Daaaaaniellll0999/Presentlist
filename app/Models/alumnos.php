<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumnos extends Model
{
    use HasFactory;
    protected $table = "alumnos";
    public $timestamps= false;
    protected $primaryKey="Id";

    protected $fillable=['Matricula','Nombre', 'Apellido1', 'Apellido2', 'Carrera', 
    'Grado','Grupo','Correo', 'Telefono',];
}
