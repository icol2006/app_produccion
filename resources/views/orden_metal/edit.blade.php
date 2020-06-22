@extends('dashboard')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-box">
            <div class="card-header">
                <h3 class="card-title">EDITAR ORDEN METAL - CODIGO {{ $datos['orden']->id }}</h3>
            </div>
            <div class="card-body" id="bar-parent">
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="card card-primary card-outline card-outline-tabs">
                            <div class="card-header p-0 border-bottom-0">
                                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-four-orden-tab" data-toggle="pill"
                                            href="#custom-tabs-four-orden" role="tab"
                                            aria-controls="custom-tabs-four-orden" aria-selected="true">Orden Rodillo</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-four-procesos-tab" data-toggle="pill"
                                            href="#custom-tabs-four-procesos" role="tab"
                                            aria-controls="custom-tabs-four-procesos" aria-selected="false">Procesos</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content" id="custom-tabs-four-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-four-orden" role="tabpanel"
                                    aria-labelledby="custom-tabs-four-orden-tab">
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
                                        <form method="post" action="{{ route('ordenes_metales.update', $datos['orden']->id) }}">
                                            @method('PATCH')
                                            @csrf
                                            <div class="form-group col-6">
                                                <label for="id_cliente">Cliente</label>
                                                <select class="form-control" id='id_cliente' name='id_cliente'>
                                                    @foreach($datos['clientes'] as $dato )
                                                    <option value="{{ $dato->id }}"
                                                        {{ $dato->id == $datos['orden']->id_cliente  ? "selected":"" }}>
                                                        {{ $dato->nombre }} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="id_tipo_servicio">Tipo de servicio</label>
                                                <select class="form-control" id='id_tipo_servicio' name='id_tipo_servicio'>
                                                    @foreach($datos['tiposServicios'] as $dato )
                                                    <option value="{{ $dato->id }}"
                                                        {{ $dato->id == $datos['orden']->id_tipo_servicio  ? "selected":"" }}>
                                                        {{ $dato->nombre }} </option>
                                                    @endforeach
                                                </select>   
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="id_producto">Producto</label>
                                                <select class="form-control" id='id_producto' name='id_producto'>
                                                    @foreach($datos['productos'] as $dato )
                                                    <option value="{{ $dato->id }}"
                                                        {{ $dato->id == $datos['orden']->id_producto  ? "selected":"" }}>
                                                        {{ $dato->nombre }} </option>
                                                    @endforeach
                                                </select>  
                                            </div>
                                            <div class="row col-12">
                                                <div class="form-group col-4">
                                                    <label for="descripcion">Descripcion</label>
                                                    <input type="text" class="form-control" name="descripcion" placeholder="Descripcion"
                                                        value="{{ $datos['orden']->descripcion }}" required>
                                                </div>
                                                <div class="form-group col-4">
                                                    <label for="piezas_fabricar">Piezas Fabricar</label>
                                                    <input type="text" class="form-control" id="piezas_fabricar" name="piezas_fabricar" placeholder="Piezas Fabricar"
                                                        value="{{ $datos['orden']->piezas_fabricar }}" required>
                                                </div>
                                                <div class="form-group col-4">
                                                    <label for="piezas_reales">Piezas Reales</label>
                                                    <input type="text" class="form-control" id="piezas_reales" name="piezas_reales" placeholder="Piezas Reales"
                                                        value="{{ $datos['orden']->piezas_reales }}" required>
                                                </div>
                                            </div>
                                            <div class="row col-12">
                                                <div class="form-group col-4">
                                                    <label for="horas_teoricas">Horas Teoricas</label>
                                                    <input type="text" class="form-control" name="horas_teoricas" placeholder="Horas Teoricas"
                                                        value="{{ $datos['orden']->horas_teoricas }}" required>
                                                </div>
                                                <div class="form-group col-4">
                                                    <label for="fecha_pedido">Fecha pedido</label>
                                           
                                                    <input type="text" class="form-control" name="fecha_pedido" placeholder="Fecha pedido"
                                                        value="{{ date('d/m/Y', strtotime($datos['orden']->fecha_pedido))    }}" required data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false">
                                                </div>
                                                <div class="form-group col-4">
                                                    <label for="dias_transcurridos">Dias Transcurridos</label>
                                                    <input type="text" class="form-control" name="dias_transcurridos"
                                                        placeholder="Dias Transcurridos" value="{{ $datos['orden']->dias_transcurridos }}" required>
                                                </div>
                                            </div>
                                            <div class="row col-12">
                        
                                            </div>
                                            <div class="row col-12">
                                                <div class="form-group  col-2">
                                                    <label for="medidas_1mm">Medidas_1mm</label>
                                                    <input type="text" class="form-control" name="medidas_1mm" placeholder="Medidas_1mm"
                                                        value="{{ $datos['orden']->medidas_1mm }}" required>
                                                </div>
                                                <div class="form-group  col-2">
                                                    <label for="medidas_2mm">Medidas_2mm</label>
                                                    <input type="text" class="form-control" name="medidas_2mm" placeholder="Medidas_2mm"
                                                        value="{{ $datos['orden']->medidas_2mm }}" required>
                                                </div>
                                                <div class="form-group  col-2">
                                                    <label for="medidas_largo">Medidas Largo</label>
                                                    <input type="text" class="form-control" name="medidas_largo" placeholder="Medidas Largo"
                                                        value="{{ $datos['orden']->medidas_largo }}" required>
                                                </div>
                                                <div class="form-group  col-2">
                                                    <label for="medidas_ancho">Medidas Ancho</label>
                                                    <input type="text" class="form-control" name="medidas_ancho" placeholder="Medidas Ancho"
                                                        value="{{ $datos['orden']->medidas_ancho }}" required>
                                                </div>
                                                <div class="form-group  col-2">
                                                    <label for="medidas_espeso">Medidas Espeso</label>
                                                    <input type="text" class="form-control" name="medidas_espeso" placeholder="Medidas Espeso"
                                                        value="{{ $datos['orden']->medidas_espeso }}" required>
                                                </div>
                                                <div class="form-group col-2">
                                                    <label for="estatus">Estatus</label>
                                                        <select class="form-control" id="estatus" name="estatus"
                                                        required>
                                                        <option value="TRABAJANDO"
                                                            {{ "TRABAJANDO" == $datos['orden']->estatus  ? "selected":"" }}>
                                                            TRABAJANDO </option>
                                                        <option value="TERMINADO"
                                                            {{ "TERMINADO" == $datos['orden']->estatus  ? "selected":"" }}>
                                                            TERMINADO </option>
                                                    </select>
                                                </div>
                                            </div>         
                                            <button type="submit" class="btn btn-primary">Aceptar</button>
                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="custom-tabs-four-procesos" role="tabpanel"
                                    aria-labelledby="custom-tabs-four-procesos-tab">
                                    <div id="app" style="margin-top: 20px">
                                        <proceso-orden pid_orden_metal="{{  $datos['orden']->id }}">
                                        </proceso-orden>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
</div>


@endsection