@extends('layout.layout')
@section('content')

        <section class="section">
            <div class="column">
                <div class="column is-one-third">
                    <a href="/jefe" class="button is-primary">
                        Regresar
                    </a>
                </div>
                <div class="column">
                    <p class="title">
                        Detalles de {{ $jefe->marca }}
                        {{$jefe->modelo}}
                    </p>
                </div>
            </div>
        </section>

        <section class="section">
            <p class="title">{{ $jefe->usuario }}</p>
            <p class="subtitle">{{ $jefe->contraseña }}</p>
            <p class="has-text-justify">{{ $jefe->articulo }}</p>
        </section>

@endsection