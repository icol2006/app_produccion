@extends('dashboard')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-box">
            <div class="card-header">
                <h3 class="card-title">CREAR ORDEN RODILLO</h3>
            </div>
            <div class="card-body " id="bar-parent">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
                @endif
                <form method="post" action="{{ route('ordenes_rodillos.store') }}">
                    @csrf
                    <div class="form-group col-6">
                        <label for="id_cliente">Cliente</label>
                        <input type="text" class="form-control" name="id_cliente" placeholder="Cliente" value="" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="id_tipo_servicio">Tipo de servicio</label>
                        <input type="text" class="form-control" name="id_tipo_servicio" placeholder="Tipo de servicio" value="" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="id_producto">Producto</label>
                        <input type="text" class="form-control" name="id_producto" placeholder="Producto" value="" required>
                    </div>
                    <div class="form-group col-12">
                        <label for="descripcion">Descripcion</label>
                        <input type="text" class="form-control" name="descripcion" placeholder="Descripcion" value="" required>
                    </div>
                    <div class="row col-12">
                        <div class="form-group col-2">
                            <label for="piezas_fabricar">Piezas Fabricar</label>
                            <input type="text" class="form-control" name="piezas_fabricar" placeholder="Piezas Fabricar" value="" required>
                        </div>
                        <div class="form-group col-2">
                            <label for="fecha_pedido">Fecha pedido</label>
                            <input type="text" class="form-control" name="fecha_pedido" placeholder="Fecha pedido" value="" required>
                        </div>
                        <div class="form-group col-2">
                            <label for="fecha_comprom">Fecha Comprom</label>
                            <input type="text" class="form-control" name="fecha_comprom" placeholder="Fecha Comprom" value="" required>
                        </div>
                        <div class="form-group col-2">
                            <label for="fecha_termino_produccion">Termino Produccion</label>
                            <input type="text" class="form-control" name="fecha_termino_produccion" placeholder="Fecha Termino Produccion" value="" required>
                        </div>
                        <div class="form-group col-2">
                            <label for="tiempo_respuesta">Tiempo Respuesta</label>
                            <input type="text" class="form-control" name="tiempo_respuesta" placeholder="Tiempo Respuesta" value="" required>
                        </div>
                        <div class="form-group col-2">
                            <label for="estatus">Estatus</label>
                            <input type="text" class="form-control" name="estatus" placeholder="Estatus" value="" required>
                        </div>       
                    </div>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection