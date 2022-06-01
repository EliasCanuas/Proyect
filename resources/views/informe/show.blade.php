@extends('layout.layout')
@section('content')

        <section class="section">
            <div class="column">
                <div class="column is-one-third">
                    <a href="/informe" class="button is-primary">
                        Regresar
                    </a>
                </div>
                <div class="column">
                    <p class="title">
                        Detalles de {{ $informe->producto }}
                    </p>
                </div>
            </div>
        </section>

        <section class="section">
            <p class="subtitle">Precio unitario: {{ $informe->precio }} pesos</p>
        </section>

@endsection