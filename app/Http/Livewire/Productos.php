<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;
use App\Models\Categoria;
use Livewire\WithPagination;

class Productos extends Component
{
    use WithPagination;
    public $nopagina = 10;
    public $listado_categorias;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $listado = Producto::paginate($this->nopagina);

        $this->listado_categorias = Categoria::where('status',1)->orderBy('id')->get();

        return view('livewire.productos',  ['listado' => $listado, ])->extends('layouts.app');
    }

    public function store ()
    {

    }
}
