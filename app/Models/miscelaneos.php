<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class miscelaneos extends Model
{
    use HasFactory;
    protected $fillable = ['Nombre', 'Descripcion', 'PrecioCosto', 'PrecioVenta', 'Existencias'];
    protected $table = 'miscelaneos';
    
}
