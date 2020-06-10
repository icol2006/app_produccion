@extends('master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-topline-red">
            <div class="card-head">
                <header>LISTADO CLIENTES</header>
           
            </div>
            <div class="card-body ">
                <div class="row p-b-20">
                    <div class="col-md-6 col-sm-6 col-6">
                        <div class="btn-group">
                            <a href="{{ route('clientes.create') }}" class="btn btn-info">Agregar<i
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
                            <th>Ciudad</th>
                            <th>Telefono</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datos as $dato)
                        <tr class="odd gradeX">

                            <td>{{ $dato->cli_id }}</td>
                            <td>{{ $dato->cli_nombre }}</td>
                            <td>{{ $dato->cli_ciudad }}</td>
                            <td>{{ $dato->cli_telefono }}</td>
                            <td><a href="{{ route('clientes.edit',$dato->cli_id)}}"><i class="fa fa-pencil"></i></a>
                            </td>
                            <td>
                                <form action="{{ route('clientes.destroy', $dato->cli_id)}}" method="post">
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