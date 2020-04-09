@extends('plantilla.plantilla')
@section('titulo','Test - Detalle')
@section('contenido')

<div class="container" style="margin-top: 150px">
    <div class="row">
        <div class="col-12">
            <h1>REPORTE DE TEST DETALLADO</h1>
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        @foreach ($Tests as $Test)
                            <tr>
                                <th>ID</th>
                                <td>{{ $Test->id }}</td>
                            </tr>
                            <tr>
                                <th>NOMBRE</th>
                                <td>{{ $Test->nombre }}</td>
                            </tr>
                            <tr>
                                <th>FECHA</th>
                                <td>{{ $Test->created_at }}</td>
                            </tr>
                            <tr>
                                <th>EDAD</th>
                                <td>{{ $Test->edad }}</td>
                            </tr>
                            <tr>
                                <th>CI</th>
                                <td>{{ $Test->ci }}</td>
                            </tr>
                            <tr>
                                <th>CORREO</th>
                                <td>{{ $Test->correo }}</td>
                            </tr>
                            <tr>
                                <th>TELEFONO</th>
                                <td>{{ $Test->telefono }}</td>
                            </tr>
                            <tr>
                                <th>DIRECCION</th>
                                <td>{{ $Test->direccion }}</td>
                            </tr>
                            <tr>
                                <th>TEMPERATURA</th>
                                <td>{{ $Test->temperatura }}</td>
                            </tr>
                            <tr>
                                <th>TOS/DOLOR GARGANTA</th>
                                @if ($Test->tos == 'si')
                                <td>{{ $Test->tos}}</td>
                                @else
                                <td>NO</td>
                                @endif
                            </tr>
                            <tr>
                                <th>DIFICULTAD RESPIRAR</th>
                                @if ($Test->respirar == 'si')
                                <td>{{ $Test->respirar}}</td>
                                @else
                                <td>NO</td>
                                @endif
                            </tr>
                            <tr>
                                <th>ENFERMEDAD BASE</th>
                                <td>{{ $Test->salud }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>