@extends('dashboard')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-box">
            <div class="card-header">
                <h3 class="card-title">EDITAR PRODUCTO</h3>
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
                <form method="post" action="{{ route('productos.update', $datos->id) }}">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="{{ $datos->nombre }}" required>
                    </div>
                    <div class="form-group">
                        <label for="id_material">Material</label>
                        <input type="text" class="form-control" name="id_material" placeholder="Material" value="{{ $datos->id_material }}" required>
                    </div>
                    <div class="form-group">
                        <label for="id_tipo_producto">Tipo Producto</label>
                        <input type="text" class="form-control" name="id_tipo_producto" placeholder="Tipo Producto" value="{{ $datos->id_tipo_producto }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection