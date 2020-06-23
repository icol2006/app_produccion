@extends('dashboard')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">LISTADO DE ORDENES METAL</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <a href="{{ route('ordenes_metales.create') }}" class="btn bg-gradient-primary boton-agregar-listado">Agregar Registro <i class="fa fa-plus"></i></a>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Cod</th>
                            <th>Cliente</th>
                            <th>Tipo de servicio</th>
                            <th>Material</th>
                            <th>Tipo Producto</th>
                            <th>Descripcion</th>
                            <th>Piezas Fabricar</th>
                            <th>Horas Teoricas</th>
                            <th>Piezas Reales</th>
                            <th>Fecha Pedido</th>
                            <th>Dias Transcurridos</th>
                            <th>Medidas_1mm</th>
                            <th>Medidas_2mm</th>
                            <th>Medidas_largo</th>
                            <th>Medidas_ancho</th>
                            <th>Medidas Espeso</th>
                            <th>Estatus</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datos as $dato)
                        <tr class="odd gradeX">
                            <td>{{ $dato->id }}</td>
                            <td>{{ $dato->cliente->nombre }}</td>
                            <td>{{ $dato->tipoServicio->nombre  }}</td>
                            <td>{{$dato->material->nombre }}</td>
                            <td>{{$dato->tipoProducto->nombre }}</td>
                            <td>{{ $dato->descripcion }}</td>
                            <td>{{ $dato->piezas_fabricar }}</td>
                            <td>{{ $dato->horas_teoricas }}</td>
                            <td>{{ $dato->piezas_reales   }}</td>
                            <td>{{ date("d-m-Y",strtotime($dato->fecha_pedido)) }}</td>                              
                            <td>{{ intval((abs(time() - strtotime($dato->fecha_pedido)))/86400) }}</td>
                            <td>{{ $dato->medidas_1mm }}</td>
                            <td>{{ $dato->medidas_2mm }}</td>
                            <td>{{ $dato->medidas_largo }}</td>
                            <td>{{ $dato->medidas_ancho }}</td>
                            <td>{{ $dato->medidas_espeso }}</td>
                            <td>{{ $dato->estatus }}</td>
                            <td>
                                <a href="{{ route('ordenes_metales.edit',$dato->id)}}"><i
                                        class="fa fa-pen icono-editar"></i></a>
                            </td>
                            <td>
                                <form action="{{ route('ordenes_metales.destroy', $dato->id)}}" method="post">
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