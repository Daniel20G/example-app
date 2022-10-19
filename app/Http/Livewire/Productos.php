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
    public $search='';

    public function mount()
    {
        $this->status = 1;
    }

    public function render()
    {
        $listado = Producto::filtro($this->search)->paginate($this->nopagina);

        $this->listado_categorias = Categoria::where('status',1)->orderBy('id')->get();

        return view('livewire.productos',  ['listado' => $listado, ])->extends('layouts.app');
    }

    public function resetInput () {
        $this->nombre = null;
        $this->precio = null;
        $this->categoria_id = null;
        $this->status = null;
    }

    public function store ()
    {
        $this->validate(
            [
                'nombre' => 'required|min:3',
                'precio' => 'required|numeric|between:0,99.99',
                'categoria_id' => 'required'
            ],
            [
                'nombre.required' => 'Ingrese un Nombre.',
                'nombre.min' => 'Ingrese minimo 3 caracteres.',
                'precio.required' => 'Ingrese un Precio.',
                'precio.min' => 'Ingrese minimo 1.',
                'categoria_id.required' => 'Ingrese nombre de categoria'
            ]
        );


        $producto = new Producto();
        $producto->nombre = $this->nombre;
        $producto->precio = $this->precio;
        $producto->categoria_id = $this->categoria_id;
        $producto->status = $this->status;

        $producto->save();
        $this->resetInput();
    }

}
