@extends('plantilla.plantilla')
@section('titulo','Preguntas y Respuestas')
@section('contenido')

<section style="margin-top: 150px">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route('preguntas.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pregunta</label>
                        <input type="text" name="titulo" class="form-control" placeholder="Ingresa la Pregunta" required>
                        <small id="emailHelp" class="form-text text-muted">Debe ser una pregunta corta</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Respuesta</label>
                        <textarea name="contenido"  cols="30" rows="10" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Autor</label>
                        <input type="text" name="autor" class="form-control" placeholder="Ingresa el Autor" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>