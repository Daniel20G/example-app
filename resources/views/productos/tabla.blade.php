<div class="card">
    <div class="card-header bg-light">
        <div class="row">
            <div class="pull-left col-sm-9">
                <h5 class="mb-0">Lista de Productos</h5>
            </div>
            <div class="pull-right col-sm-3">
                <input class="form-control" type="text" placeholder="Busqueda" wire:model="search">
            </div>
        </div>
    </div> <!-- fin encabezado -->

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-sm table-bordered ">
                <thead class="thead-dark">
                <tr>
                    <th>Opciones</th>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Categoria</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($listado as $row)
                    <tr>
                        <td></td>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->nombre }}</td>
                        <td>{{ $row->precio }}</td>
                        <td>{{ $row->Categoria->nombre }}</td>
                        <td>
                            @if($row->status)
                                <span class="badge bg-success">Activo</span>
                            @else
                                <span class="badge bg-danger">Inactivo</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            @if($listado->count())
                {{ $listado->links() }}
            @else
                <div class="alert alert-warning" role="alert">
                    No hay ningun registro
                </div>
            @endif

        </div>
    </div>

</div>
