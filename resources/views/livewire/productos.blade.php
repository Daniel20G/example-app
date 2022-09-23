<div>
    <div class="pt-3 pb-2 mb-3">
        <h2>Productos</h2>
        <hr />
    </div>

    <div class="row">
        <div class="col-sm-3"> {{--Panel izquierdo--}}
            <p>izquierdo</p>
        </div>
        <div class="col-sm-9"> {{--Panel derecho--}}
            @include('productos.tabla')
        </div>
    </div>
</div>
