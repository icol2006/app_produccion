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
                <form method="post" action="{{ route('productos.update', $datos['producto']->id) }}">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="{{ $datos['producto']->nombre }}" required>
                    </div>
                    <div class="form-group">
                        <label for="id_material">Material</label>
                        <select class="form-control" id='id_material' name='id_material'>
                            @foreach($datos['materiales'] as $dato )
                            <option value="{{ $dato->id }}"  {{ $dato->id == $datos['producto']->id_material  ? "selected":"" }}>
                                {{ $dato->nombre }} </option>
                            @endforeach
                        </select> 
                    </div>
                    <div class="form-group">
                        <label for="id_tipo_producto">Tipo Producto</label>
                        <select class="form-control" id='id_tipo_producto' name='id_tipo_producto'>
                            @foreach($datos['tiposProductos'] as $dato )
                            <option value="{{ $dato->id }}"  {{ $dato->id == $datos['producto']->id_tipo_producto  ? "selected":"" }}>
                                {{ $dato->nombre }} </option>
                            @endforeach
                        </select> 
                    </div>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection