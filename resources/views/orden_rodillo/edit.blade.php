@extends('dashboard')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-box">
            <div class="card-header">
                <h3 class="card-title">EDITAR ORDEN RODILLO - CODIGO {{ $datos['orden']->id }}</h3>
            </div>
            <div class="card-body " id="bar-parent">
                <div class="row">

                    <div class="col-12 col-sm-12">
                        <div class="card card-primary card-outline card-outline-tabs">
                            <div class="card-header p-0 border-bottom-0">
                                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill"
                                            href="#custom-tabs-four-home" role="tab"
                                            aria-controls="custom-tabs-four-home" aria-selected="true">Orden Rodillo</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill"
                                            href="#custom-tabs-four-profile" role="tab"
                                            aria-controls="custom-tabs-four-profile" aria-selected="false">Procesos</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-four-tabContent">
                                    <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel"
                                        aria-labelledby="custom-tabs-four-home-tab">
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
                                            <form method="post"
                                                action="{{ route('ordenes_rodillos.update', $datos['orden']->id) }}">
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
                                                    <select class="form-control" id='id_tipo_servicio'
                                                        name='id_tipo_servicio'>
                                                        @foreach($datos['tiposServicios'] as $dato )
                                                        <option value="{{ $dato->id }}"
                                                            {{ $dato->id == $datos['orden']->id_tipo_servicio  ? "selected":"" }}>
                                                            {{ $dato->nombre }} </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-6">
                                                    <label for="id_material">Material</label>
                                                    <select class="form-control" id='id_material' name='id_material'>
                                                        @foreach($datos['materiales'] as $dato )
                                                        <option value="{{ $dato->id }}"
                                                            {{ $dato->id == $datos['orden']->id_material  ? "selected":"" }}>
                                                            {{ $dato->nombre }} </option>
                                                        @endforeach
                                                    </select> 
                                                </div>
                                                <div class="form-group col-6">
                                                    <label for="id_tipo_producto">Tipo producto</label>
                                                    <select class="form-control" id='id_tipo_producto' name='id_tipo_producto'>
                                                        @foreach($datos['tiposProductos'] as $dato )
                                                        <option value="{{ $dato->id }}"
                                                            {{ $dato->id == $datos['orden']->id_tipo_producto  ? "selected":"" }}>
                                                            {{ $dato->nombre }} </option>
                                                        @endforeach
                                                    </select> 
                                                </div>
                                                <div class="form-group col-12">
                                                    <label for="descripcion">Descripcion</label>
                                                    <input type="text" class="form-control" name="descripcion"
                                                        placeholder="Descripcion"
                                                        value="{{ $datos['orden']->descripcion }}" required>
                                                </div>
                                                <div class="row col-12">
                                                    <div class="form-group col-2">
                                                        <label for="piezas_fabricar">Piezas Fabricar</label>
                                                        <input type="text" class="form-control" name="piezas_fabricar"
                                                            placeholder="Piezas Fabricar"
                                                            value="{{ $datos['orden']->piezas_fabricar }}" required>
                                                    </div>
                                                    <div class="form-group col-2">
                                                        <label for="fecha_pedido">Fecha pedido</label>
                                                        <input type="text" class="form-control" name="fecha_pedido"
                                                            placeholder="Fecha pedido"
                                                            value="{{ date('d/m/Y', strtotime($datos['orden']->fecha_pedido))  }}"
                                                            required data-inputmask-alias="datetime"
                                                            data-inputmask-inputformat="dd/mm/yyyy" data-mask=""
                                                            im-insert="false">
                                                    </div>
                                                    <div class="form-group col-2">
                                                        <label for="fecha_comprom">Fecha Comprom</label>
                                                        <input type="text" class="form-control" name="fecha_comprom"
                                                            placeholder="Fecha Comprom"
                                                            value="{{ date('d/m/Y', strtotime($datos['orden']->fecha_comprom))  }}"
                                                            required data-inputmask-alias="datetime"
                                                            data-inputmask-inputformat="dd/mm/yyyy" data-mask=""
                                                            im-insert="false">
                                                    </div>
                                                    <div class="form-group col-2">
                                                        <label for="fecha_termino_produccion">Termino Produccion</label>
                                                        <input type="text" class="form-control"
                                                            name="fecha_termino_produccion"
                                                            placeholder="Fecha Termino Produccion"
                                                            value="{{ date('d/m/Y', strtotime($datos['orden']->fecha_termino_produccion))  }}"
                                                            required data-inputmask-alias="datetime"
                                                            data-inputmask-inputformat="dd/mm/yyyy" data-mask=""
                                                            im-insert="false">
                                                    </div>
                                                    <div class="form-group col-2">
                                                        <label for="tiempo_respuesta">Tiempo Respuesta</label>
                                                        <input type="text" class="form-control" name="tiempo_respuesta"
                                                            placeholder="Tiempo Respuesta"
                                                            value="{{ $datos['orden']->tiempo_respuesta }}" required>
                                                    </div>
                                                    <div class="form-group col-3">
                                                        <label for="estatus">Estatus</label>
                                                        <select class="form-control" id="estatus" name="estatus"
                                                            required>                                                            
                                                            <option value="EN PROGRAMACION"
                                                            {{ "EN PROGRAMACION" == $datos['orden']->estatus  ? "selected":"" }}>
                                                            EN PROGRAMACION </option>
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
                                    <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel"
                                        aria-labelledby="custom-tabs-four-profile-tab">
                                        <div id="app">
                                            <proceso-orden pid_orden_rodillo="{{  $datos['orden']->id }}">
                                            </proceso-orden>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>





            </div>
        </div>
    </div>
</div>


@endsection