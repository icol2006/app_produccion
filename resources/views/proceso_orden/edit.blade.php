@extends('dashboard')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-box">
            <div class="card-header">
                <h3 class="card-title">EDITAR PROCESO ORDEN</h3>
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
                <form method="post" action="{{ route('procesos_ordenes.update', $datos->id) }}">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="{{ $datos->nombre }}" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <input type="text" class="form-control" name="descripcion" placeholder="Descripcion" value="{{ $datos->descripcion }}" required>
                    </div>
                    <div class="form-group">
                        <label for="estatus">Estatus</label>
                        <input type="text" class="form-control" name="estatus" placeholder="Estatus" value="{{ $datos->estatus }}" required>
                    </div>
                    <div class="form-group">
                        <label for="operador">Operador</label>
                        <input type="text" class="form-control" name="operador" placeholder="Operador" value="{{ $datos->operador }}" required>
                    </div>
                    <div class="form-group">
                        <label for="piezas_terminadas">Piezas Terminadas</label>
                        <input type="text" class="form-control" name="piezas_terminadas" placeholder="Piezas Terminadas" value="{{ $datos->piezas_terminadas }}" required>
                    </div>
                    <div class="form-group">
                        <label for="id_orden_metal">Orden Metal</label>
                        <input type="text" class="form-control" name="id_orden_metal" placeholder="Orden Metal" value="{{ $datos->id_orden_metal }}" required>
                    </div>
                    <div class="form-group">
                        <label for="id_orden_rodillo">Orden Rodillo</label>
                        <input type="text" class="form-control" name="id_orden_rodillo" placeholder="Orden Rodillo" value="{{ $datos->id_orden_rodillo }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection