@extends('dashboard')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">LISTADO DE ORDENES RODILLO</h3>                
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <a href="{{ route('ordenes_rodillos.create') }}"  class="btn bg-gradient-primary boton-agregar-listado">Agregar Registro <i class="fa fa-plus"></i></a>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Cod</th>
                            <th>Cliente</th>
                            <th>Tipo de servicio</th>
                            <th>Material</th>
                            <th>Tipo Producto</th>
                            <th>Descripcion</th>
                            <th>Piezas fabricar</th>
                            <th>Fecha pedido</th>
                            <th>Fecha comprom</th>
                            <th>Fecha termino produccion</th>
                            <th>Tiempo Respuesta</th>
                            <th>Estatus</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datos as $dato)
                        <tr class="odd gradeX">
                            <td>{{ $dato->id }}</td>
                            <td>{{ $dato->cliente->nombre }}</td>
                            <td>{{ $dato->tipoServicio->nombre }}</td>
                            <td>{{ $dato->material->nombre }}</td>
                            <td>{{ $dato->tipoProducto->nombre }}</td>
                            <td>{{ $dato->descripcion }}</td>
                            <td>{{ $dato->piezas_fabricar }}</td>     
                            <td>{{ date("d-m-Y",strtotime($dato->fecha_pedido)) }}</td>
                            <td>{{ date("d-m-Y",strtotime($dato->fecha_comprom)) }}</td>
                            <td>{{ date("d-m-Y",strtotime($dato->fecha_termino_produccion)) }}</td>
                            <td>{{ intval((abs( strtotime($dato->fecha_termino_produccion) - strtotime($dato->fecha_pedido)))/86400) }}</td>
                            <td>{{ $dato->estatus }}</td>
                            <td>
                                <a href="{{ route('ordenes_rodillos.edit',$dato->id)}}"><i class="fa fa-pen icono-editar"></i></a>
                            </td>
                            <td>
                                <form action="{{ route('ordenes_rodillos.destroy', $dato->id)}}" method="post">
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