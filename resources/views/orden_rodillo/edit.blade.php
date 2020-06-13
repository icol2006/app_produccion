@extends('dashboard')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-box">
            <div class="card-header">
                <h3 class="card-title">EDITAR ORDEN RODILLO</h3>
            </div>
            <div class="card-body " id="bar-parent">

                <div class="row">
                    <div class="col-12 col-sm-12">
                      <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                          <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Orden Rodillo</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Procesos</a>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="tab-content" id="custom-tabs-four-tabContent">
                            <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                <div>
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
                                    <form method="post" action="{{ route('ordenes_rodillos.update', $datos->id) }}">
                                        @method('PATCH')
                                        @csrf
                                        <div class="form-group col-6">
                                            <label for="id_cliente">Cliente</label>
                                            <input type="text" class="form-control" name="id_cliente" placeholder="Cliente"
                                                value="{{ $datos->id_cliente }}" required>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="id_tipo_servicio">Tipo de servicio</label>
                                            <input type="text" class="form-control" name="id_tipo_servicio"
                                                placeholder="Tipo de servicio" value="{{ $datos->id_tipo_servicio }}" required>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="id_producto">Producto</label>
                                            <input type="text" class="form-control" name="id_producto" placeholder="Producto"
                                                value="{{ $datos->id_producto }}" required>
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="descripcion">Descripcion</label>
                                            <input type="text" class="form-control" name="descripcion" placeholder="Descripcion"
                                                value="{{ $datos->descripcion }}" required>
                                        </div>
                                        <div class="row col-12">
                                            <div class="form-group col-2">
                                                <label for="piezas_fabricar">Piezas Fabricar</label>
                                                <input type="text" class="form-control" name="piezas_fabricar"
                                                    placeholder="Piezas Fabricar" value="{{ $datos->piezas_fabricar }}" required>
                                            </div>
                                            <div class="form-group col-2">
                                                <label for="fecha_pedido">Fecha pedido</label>
                                                <input type="text" class="form-control" name="fecha_pedido" placeholder="Fecha pedido"
                                                    value="{{ $datos->fecha_pedido }}" required>
                                            </div>
                                            <div class="form-group col-2">
                                                <label for="fecha_comprom">Fecha Comprom</label>
                                                <input type="text" class="form-control" name="fecha_comprom" placeholder="Fecha Comprom"
                                                    value="{{ $datos->fecha_comprom }}" required>
                                            </div>
                                            <div class="form-group col-2">
                                                <label for="fecha_termino_produccion">Termino Produccion</label>
                                                <input type="text" class="form-control" name="fecha_termino_produccion"
                                                    placeholder="Fecha Termino Produccion"
                                                    value="{{ $datos->fecha_termino_produccion }}" required>
                                            </div>
                                            <div class="form-group col-2">
                                                <label for="tiempo_respuesta">Tiempo Respuesta</label>
                                                <input type="text" class="form-control" name="tiempo_respuesta"
                                                    placeholder="Tiempo Respuesta" value="{{ $datos->tiempo_respuesta }}" required>
                                            </div>
                                            <div class="form-group col-2">
                                                <label for="estatus">Estatus</label>
                                                <input type="text" class="form-control" name="estatus" placeholder="Estatus"
                                                    value="{{ $datos->estatus }}" required>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Aceptar</button>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                               Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam. 
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