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
                        Detalles de {{ $integrador->marca }}
                        {{$integrador->modelo}}
                    </p>
                </div>
            </div>
        </section>

        <section class="section">
            <p class="title">{{ $integrador->modelo }}</p>
            <p class="subtitle">{{ $integrador->marca }}</p>
            <p class="has-text-justify">{{ $integrador->descripcion }}</p>
        </section>

@endsection