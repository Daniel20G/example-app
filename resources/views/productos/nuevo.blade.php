<div class="card">
    <div class="card-header bg-light">
        <h4 class="mb-0">Nuevo producto</h4>
    </div>
    <div class="card-body bg-light">
        <form>
            <div class="mb-3">
                <label for="nombre">Nombre</label>
                <input class="form-control" type="text" placeholder="Nombre" wire:model="nombre" />
                @error('nombre') <br /> <div class="alert alert-danger">{{$message}}</div> @enderror
            </div>
            <div class="mb-3">
                <label for="precio">Precio</label>
                <input class="form-control" type="number" placeholder="Precio" wire:model="precio" />
                @error('precio') <br /> <div class="alert alert-danger">{{$message}}</div> @enderror
            </div>
            <div class="mb-3">
                <label for="nombre">Categoria</label>
                <select class="form-select" wire:model="categoria_id" />
                    @foreach($listado_categorias as $row)
                        <option value="{{$row->id}}">{{$row->nombre}}</option>
                    @endforeach
                </select>
                    @error('categoria_id') <br /> <div class="alert alert-danger">{{$message}}</div> @enderror
            </div>
            <div class="mb-3">
                <label for="Status">Status</label>
                <input class="form-check-input" type="checkbox" id="flexCheckDefault" wire:model="status" />
            </div>



        </form>

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Error!</h4>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <button wire:click="store" class="btn btn-primary mb-2">Guardar</button>

    </div>
</div>
