<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    // Solo los campos aquí indicados podrán crear o modificar datos en la tabla.
    protected $fillable = ['name', 'descripcion', 'categoria'];
    // Campos protegidos.
    protected $guarded = [];
}
