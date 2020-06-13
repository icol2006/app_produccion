@extends('dashboard')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-box">
            <div class="card-header">
                <h3 class="card-title">EDITAR ORDEN METAL</h3>
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
                <form method="post" action="{{ route('ordenes_metales.update', $datos->id) }}">
                    @method('PATCH')
                    @csrf
                    <div class="form-group col-6">
                        <label for="id_cliente">Cliente</label>
                        <input type="text" class="form-control" name="id_cliente" placeholder="Cliente" value="{{ $datos->id_cliente }}" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="id_tipo_servicio">Tipo de servicio</label>
                        <input type="text" class="form-control" name="id_tipo_servicio" placeholder="Tipo de servicio" value="{{ $datos->id_tipo_servicio }}" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="id_producto">Producto</label>
                        <input type="text" class="form-control" name="id_producto" placeholder="Producto" value="{{ $datos->id_producto }}" required>
                    </div>
                    <div class="row col-12">
                        <div class="form-group col-4">
                            <label for="descripcion">Descripcion</label>
                            <input type="text" class="form-control" name="descripcion" placeholder="Descripcion" value="{{ $datos->descripcion }}" required>
                        </div>
                        <div class="form-group col-4">
                            <label for="piezas_fabricar">Piezas Fabricar</label>
                            <input type="text" class="form-control" name="piezas_fabricar" placeholder="Piezas Fabricar" value="{{ $datos->piezas_fabricar }}" required>
                        </div>
                        <div class="form-group col-4">
                            <label for="piezas_reales">Piezas Reales</label>
                            <input type="text" class="form-control" name="piezas_reales" placeholder="Piezas Reales" value="{{ $datos->piezas_reales }}" required>
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="form-group col-4">
                            <label for="horas_teoricas">Horas Teoricas</label>
                            <input type="text" class="form-control" name="horas_teoricas" placeholder="Horas Teoricas" value="{{ $datos->horas_teoricas }}" required>
                        </div>
                        <div class="form-group col-4">
                            <label for="fecha_pedido">Fecha pedido</label>
                            <input type="text" class="form-control" name="fecha_pedido" placeholder="Fecha pedido" value="{{ $datos->fecha_pedido }}" required>
                        </div>
                        <div class="form-group col-4">
                            <label for="dias_transcurridos">Dias Transcurridos</label>
                            <input type="text" class="form-control" name="dias_transcurridos" placeholder="Dias Transcurridos" value="{{ $datos->dias_transcurridos }}" required>
                        </div>
                    </div>
                    <div class="row col-12">
   
                    </div>
                    <div class="row col-12">
                        <div class="form-group  col-2">
                            <label for="medidas_1mm">Medidas_1mm</label>
                            <input type="text" class="form-control" name="medidas_1mm" placeholder="Medidas_1mm" value="{{ $datos->medidas_1mm }}" required>
                        </div>
                        <div class="form-group  col-2">
                            <label for="medidas_2mm">Medidas_2mm</label>
                            <input type="text" class="form-control" name="medidas_2mm" placeholder="Medidas_2mm" value="{{ $datos->medidas_2mm }}" required>
                        </div>
                        <div class="form-group  col-2">
                            <label for="medidas_largo">Medidas Largo</label>
                            <input type="text" class="form-control" name="medidas_largo" placeholder="Medidas Largo" value="{{ $datos->medidas_largo }}" required>
                        </div>
                        <div class="form-group  col-2">
                            <label for="medidas_ancho">Medidas Ancho</label>
                            <input type="text" class="form-control" name="medidas_ancho" placeholder="Medidas Ancho" value="{{ $datos->medidas_ancho }}" required>
                        </div>
                        <div class="form-group  col-2">
                            <label for="medidas_espeso">Medidas Espeso</label>
                            <input type="text" class="form-control" name="medidas_espeso" placeholder="Medidas Espeso" value="{{ $datos->medidas_espeso }}" required>
                        </div>
                        <div class="form-group col-2">
                            <label for="estatus">Estatus</label>
                            <input type="text" class="form-control" name="estatus" placeholder="Estatus" value="{{ $datos->estatus }}" required>
                        </div>
                    </div>




                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection