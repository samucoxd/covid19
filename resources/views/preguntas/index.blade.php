@extends('plantilla.plantilla')
@section('titulo','Preguntas y Respuestas')
@section('contenido')
@php
$i = 'true'
@endphp
<section style="margin-top: 150px; margin-bottom: 20px;">
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="accordion" id="accordionExample">
                @foreach ($Preguntas as $Pregunta)

                @if ($i == 'true')

                <div class="card">
                    <div class="card-header" id="heading{{ $Pregunta->id }}">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{ $Pregunta->id }}" aria-expanded="{{ $i }}" aria-controls="collapse{{ $Pregunta->id }}">
                                {{ $Pregunta->titulo }}
                            </button>
                        </h2>
                    </div>
                        <div id="collapse{{ $Pregunta->id }}" class="collapse show" aria-labelledby="heading{{ $Pregunta->id }}" data-parent="#accordionExample">
                            <div class="card-body">
                            {{ $Pregunta->contenido }}
                            </div>
                            <footer class="blockquote-footer">Autor: {{ $Pregunta->autor }} <cite title="Source Title">- Fecha: {{ $Pregunta->updated_at }}</cite></footer>
                        </div>
                    @else
                    <div class="card">
                    <div class="card-header" id="heading{{ $Pregunta->id }}">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse{{ $Pregunta->id }}" aria-expanded="{{ $i }}" aria-controls="collapse{{ $Pregunta->id }}">
                                {{ $Pregunta->titulo }}
                            </button>
                        </h2>
                    </div>
                        <div id="collapse{{ $Pregunta->id }}" class="collapse" aria-labelledby="heading{{ $Pregunta->id }}" data-parent="#accordionExample">
                            <div class="card-body">
                            {{ $Pregunta->contenido }}
                            </div>
                            <footer class="blockquote-footer">Autor: {{ $Pregunta->autor }} <cite title="Source Title">- Fecha: {{ $Pregunta->updated_at }}</cite></footer>
                        </div>
                    @endif
                    
                </div>
                    @php
                    $i = 'false'
                    @endphp
                @endforeach
            </div>
        </div>
    </div>
</div>
</section>


@endsection