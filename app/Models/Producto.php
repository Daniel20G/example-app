<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function scopefiltro($query,$termino){
        if($termino===''){
            return;
        }

        return $query->where('nombre', 'ilike', "%{$termino}%")
            ->orwhere('precio', 'like', "%{$termino}%");

    }
}
