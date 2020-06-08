@extends('master')

@section('content')


<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-box">
            <div class="card-head">
                <header>Crear Cliente</header>
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
                <form method="post" action="{{ route('clientes.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="cli_nombre">Nombre</label>
                        <input type="text" class="form-control" name="cli_nombre" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label for="cli_ciudad">Ciudad</label>
                        <input type="text" class="form-control" name="cli_ciudad" placeholder="Ciudad">
                    </div>
                    <div class="form-group">
                        <label for="cli_direccion">Direccion</label>
                        <input type="text" class="form-control" name="cli_direccion" placeholder="Direccion">
                    </div>
                    <div class="form-group">
                        <label for="cli_telefono">Telefono</label>
                        <input type="number" class="form-control" name="cli_telefono" placeholder="Telefono">
                    </div>

                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection