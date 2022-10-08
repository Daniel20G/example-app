<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;
use Livewire\WithPagination;

class Productos extends Component
{
    use WithPagination;
    public $nopagina = 10;
    //public $list;

    public function render()
    {
        $listado = Producto::paginate($this->nopagina);

        return view('livewire.productos',  ['listado' => $listado, ])->extends('layouts.app');
    }
}
