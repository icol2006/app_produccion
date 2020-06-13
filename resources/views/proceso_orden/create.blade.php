@extends('dashboard')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-box">
            <div class="card-header">
                <h3 class="card-title">CREAR PROCESO ORDEN</h3>
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
                <form method="post" action="{{ route('procesos_ordenes.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <input type="text" class="form-control" name="descripcion" placeholder="Descripcion" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="estatus">Estatus</label>
                        <input type="text" class="form-control" name="estatus" placeholder="Estatus" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="operador">Operador</label>
                        <input type="text" class="form-control" name="operador" placeholder="Operador" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="piezas_terminadas">Piezas Terminadas</label>
                        <input type="text" class="form-control" name="piezas_terminadas" placeholder="Piezas Terminadas" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="id_orden_metal">Orden Metal</label>
                        <input type="text" class="form-control" name="id_orden_metal" placeholder="Orden Metal" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="id_orden_rodillo">Orden Rodillo</label>
                        <input type="text" class="form-control" name="id_orden_rodillo" placeholder="Orden Rodillo" value="" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection