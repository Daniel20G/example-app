<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //use HasFactory;
    protected $fillable = [ 
        'id',
        'nombre',
        'descripcion',
        'status'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

}
