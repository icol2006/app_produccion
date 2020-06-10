@extends('dashboard')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-topline-red">
            <div class="card-head">
                <header>LISTADO TIPOS DE PRODUCTOS</header>
           
            </div>
            <div class="card-body ">
                <div class="row p-b-20">
                    <div class="col-md-6 col-sm-6 col-6">
                        <div class="btn-group">
                            <a href="{{ route('tipos_productos.create') }}" class="btn btn-info">Agregar<i
                                    class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>

                <table class="table table-striped table-bordered table-hover table-checkable order-column full-width"
                    id="example3">
                    <thead>
                        <tr>
                            <th>Cod</th>
                            <th>Nombre</th>
                            <th>descripcion</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datos as $dato)
                        <tr class="odd gradeX">

                            <td>{{ $dato->id }}</td>
                            <td>{{ $dato->nombre }}</td>
                            <td>{{ $dato->descripcion }}</td>
                            <td><a href="{{ route('tipos_productos.edit',$dato->cli_id)}}"><i class="fa fa-pencil"></i></a>
                            </td>
                            <td>
                                <form action="{{ route('tipos_productos.destroy', $dato->cli_id)}}" method="post">
                                    {{ csrf_field() }}
                                    @method('DELETE')
                                    <button class="fa fa-trash-o" type="submit"></button>

                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>



@endsection