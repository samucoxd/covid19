@extends('plantilla.plantilla')
@section('titulo','Test')
@section('contenido')
<div class="container" style="margin-top: 200px">


@if ( session('mensaje') )

<div class="container">
    <div class="alert alert-success alert-dissmissible fade show" role="alert">
        {{ session('mensaje') }}
        <button class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>

@endif

    <div class="row">
        <div class="col-6 mx-auto">
            <form action="{{ route('test.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label>¿Cual es tu Temperatura Corporal?</label>
                    <input class="form-control" type="number" value="36" name="temperatura">      
                </div>
                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1" name="tos" value="si">
                        <label class="custom-control-label" for="customSwitch1">¿Tenes Tos o Dolor de Garganta?</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch2" name="respirar" value="si">
                        <label class="custom-control-label" for="customSwitch2">¿Tenes Dificultad Respiratoria o Falta de Aire?</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Situacion de Salud</label>
                    <select class="custom-select custom-select-lg mb-3" name="salud">
                        <option selected>Seleccione una Opcion</option>
                        <option value="mayor">Mayor de 60 Años</option>
                        <option value="embarazada">Estoy Embarazada</option>
                        <option value="cancer">Cancer</option>
                        <option value="diabetes">Diabetes</option>
                        <option value="epatica">Enfermedad Epatica</option>
                        <option value="renal">Enfermedad Renal Cronica</option>
                        <option value="respiratoria">Enfermedad Respiratoria</option>
                        <option value="cardiologica">Enfermedad Cardiologica</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Edad</label>
                    <input type="text" class="form-control" placeholder="Edad" name="edad">           
                </div>
                <div class="form-group">
                        <label for="inputAddress">CI</label>
                    <input type="text" class="form-control" placeholder="Carnet" name="ci">    
                </div>
                <div class="form-group">
                    <label for="inputAddress">Correo</label>
                    <input type="email" class="form-control" placeholder="Email" name="correo">    
                </div>
                <div class="form-group">
                    <label for="inputAddress">Telefono</label>
                    <input type="text" class="form-control" placeholder="Telefono" name="telefono">
                </div>
                <div class="form-group">
                    <label for="inputAddress">Direccion</label>
                    <input type="text" class="form-control" placeholder="Direccion" name="direccion">
                </div>
                <button class="btn btn-success btn-block">Grabar</button>
            </form>
        </div>
    </div>
</div>
