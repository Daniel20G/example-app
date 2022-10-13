<div class="card">
    <div class="card-header bg-light">
        <h4 class="mb-0">Nuevo producto</h4>
    </div>
    <div class="card-body bg-light">
        <form>
            <div class="mb-3">
                <label for="nombre">Nombre</label>
                <input class="form-control" type="text" placeholder="Nombre">
            </div>
            <div class="mb-3">
                <label for="precio">Precio</label>
                <input class="form-control" type="text" placeholder="Precio">
            </div>
            <div class="mb-3">
                <label for="nombre">Categoria</label>
                <select class="form-select" aria-label="Default select example">
                    @foreach($listado_categorias as $row)
                        <option value="{{$row->id}}">{{$row->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="Status">Status</label>
                <input class="form-check-input" type="checkbox" id="flexCheckDefault">
            </div>
            <div>
                <div>
                    <button wire:click="store" class="btn btn-primary mb-2">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>
