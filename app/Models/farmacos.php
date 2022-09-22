<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class farmacos extends Model
{
    use HasFactory;
    protected $fillable = ['Nombre', 'Laboratorio', 'Formula', 'Descripcion', 'PrecioCosto', 'PrecioVenta', 'Existencias'];
    protected $table = 'farmacos';
}
