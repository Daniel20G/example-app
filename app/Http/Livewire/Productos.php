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
    public $listado_categorias,$status,$nombre,$precio,$categoria_id;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $listado = Producto::paginate($this->nopagina);

        $this->listado_categorias = Categoria::where('status',1)->orderBy('id')->get();

        return view('livewire.productos',  ['listado' => $listado, ])->extends('layouts.app');
    }

    public function store ()
    {
        $this->validate(
            [
                'nombre' => 'required|min:5',
                'precio' => 'required|numeric|between:0,99.99'
            ],
            [
                'nombre.required' => 'Ingrese un Nombre.',
                'nombre.min' => 'Ingrese minimo 5 caracteres.',
                'precio.required' => 'Ingrese un Precio.',
                'precio.min' => 'Ingrese minimo 1.'
            ]
        );

    }
}
