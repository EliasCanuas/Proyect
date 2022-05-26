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
                        Detalles de {{ $jefe->articulo }}
                    </p>
                </div>
            </div>
        </section>

        <section class="section">
            <p class="title">Proveedor: {{ $jefe->proveedor }}</p>
            <p class="has-text-justify">Articulo: {{ $jefe->articulo }}</p>
            <p class="has-text-justify">Precio: {{ $jefe->precioventa }} pesos</p>
        </section>

@endsection