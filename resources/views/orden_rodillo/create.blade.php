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
                        <select class="form-control" id='id_cliente' name='id_cliente'>
                            @foreach($datos['clientes'] as $dato )
                            <option value="{{ $dato->id }}">
                                {{ $dato->nombre }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="id_tipo_servicio">Tipo de servicio</label>
                        <select class="form-control" id='id_tipo_servicio' name='id_tipo_servicio'>
                            @foreach($datos['tiposServicios'] as $dato )
                            <option value="{{ $dato->id }}">
                                {{ $dato->nombre }} </option>
                            @endforeach
                        </select>  
                    </div>
                    <div class="form-group col-6">
                        <label for="id_material">Material</label>
                        <select class="form-control" id='id_material' name='id_material'>
                            @foreach($datos['materiales'] as $dato )
                            <option value="{{ $dato->id }}">
                                {{ $dato->nombre }} </option>
                            @endforeach
                        </select>  
                    </div>
                    <div class="form-group col-6">
                        <label for="id_tipo_producto">Tipo Producto</label>
                        <select class="form-control" id='id_tipo_producto' name='id_tipo_producto'>
                            @foreach($datos['tiposProductos'] as $dato )
                            <option value="{{ $dato->id }}">
                                {{ $dato->nombre }} </option>
                            @endforeach
                        </select>  
                    </div>
                    <div class="form-group col-12">
                        <label for="descripcion">Descripcion</label>
                        <input type="text" class="form-control" name="descripcion" placeholder="Descripcion" value=""
                            required>
                    </div>
                    <div class="row col-12">
                        <div class="form-group col-2">
                            <label for="piezas_fabricar">Piezas Fabricar</label>
                            <input type="text" class="form-control" name="piezas_fabricar" placeholder="Piezas Fabricar"
                                value="" required>
                        </div>
                        <div class="form-group col-2">
                            <label for="fecha_pedido">Fecha pedido</label>
                            <input type="text" class="form-control" name="fecha_pedido" placeholder=""
                                value="" required data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask="" im-insert="false">
                        </div>
                        <div class="form-group col-2">
                            <label for="fecha_comprom">Fecha Comprom</label>
                            <input type="text" class="form-control" name="fecha_comprom" placeholder=""
                                value="" required data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask="" im-insert="false">
                        </div>
                        <div class="form-group col-2">
                            <label for="fecha_termino_produccion">Termino Produccion</label>
                            <input type="text" class="form-control"  name="fecha_termino_produccion"
                                placeholder="" value="" required data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask="" im-insert="false">
                        </div>
                        <div class="form-group col-2">
                            <label for="tiempo_respuesta">Tiempo Respuesta</label>
                            <input type="text" class="form-control" name="tiempo_respuesta"
                                placeholder="Tiempo Respuesta" value="" required>
                        </div>
                        <div class="form-group col-2">
                            <input type="hidden" class="form-control" name="estatus" placeholder="Estatus" value="EN PROGRAMACION"
                                required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection