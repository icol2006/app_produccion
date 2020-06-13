@extends('dashboard')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">LISTADO DE PRODUCTOS</h3>
                
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <a href="{{ route('productos.create') }}"  class="btn bg-gradient-primary boton-agregar-listado">Agregar Registro <i class="fa fa-plus"></i></a>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Cod</th>
                            <th>Nombre</th>
                            <th>Material</th>
                            <th>Tipo de Producto</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datos as $dato)
                        <tr class="odd gradeX">

                            <td>{{ $dato->id }}</td>
                            <td>{{ $dato->nombre }}</td>
                            <td>{{ $dato->material->nombre }}</td>
                            <td>{{ $dato->tipoProducto->nombre}}</td>
                            <td>
                                <a href="{{ route('productos.edit',$dato->id)}}"><i class="fa fa-pen icono-editar"></i></a>
                            </td>
                            <td>
                                <form action="{{ route('productos.destroy', $dato->id)}}" method="post">
                                    {{ csrf_field() }}
                                    @method('DELETE')
                                    <button class="fa fa-trash" type="submit"></button>

                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
@endsection