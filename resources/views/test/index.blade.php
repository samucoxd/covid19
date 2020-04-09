@extends('plantilla.plantilla')
@section('titulo','Test')
@section('contenido')

<div class="container" style="margin-top: 150px">
    <div class="row">
        <div class="col-12">
            <h1>REPORTE DE TEST</h1>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Fecha</th>
                            <th>Ver</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($Tests as $test)
                            <tr>
                                <td>{{ $test->id }}</td>
                                <td>{{ $test->nombre }}</td>
                                <td>{{ $test->created_at }}</td>
                                <td><a href="{{ route('test.show', $test->id) }}" class="btn btn-success">Ver</a></td>
                            </tr>

                            @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Fecha</th>
                            <th>Ver</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>