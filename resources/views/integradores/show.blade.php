@extends('layout.layout')
@section('content')

        <section class="section">
            <div class="column">
                <div class="column is-one-third">
                    <a href="/integrador" class="button is-primary">
                        Regresar
                    </a>
                </div>
                <div class="column">
                    <p class="title">
                        Detalles de {{ $integrador->articulo }}
                        {{$integrador->stock}}
                    </p>
                </div>
            </div>
        </section>

        <section class="section">
            <p class="title">{{ $integrador->usuario }}</p>
            <p class="subtitle">{{ $integrador->contraseña }}</p>
            <p class="has-text-justify">{{ $integrador->articulo }}</p>
        </section>

@endsection