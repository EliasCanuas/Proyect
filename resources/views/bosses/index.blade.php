@extends('layout.layout')
@section('content')

    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                Listado
            </p>
            <a href="/" class="button">Regresar</a>
            <a class="button is-info" href="/jefe/create">Agregar</a>
        </div>
    </section>

    <section class="section">

        <div class="table-container">

            <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                <thead>
                <tr>
                    <th>Articulo</th>
                    <th>Precio de venta</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Articulo</th>
                    <th>Precio de venta</th>
                </tr>
                </tfoot>
                <tbody>

                @forelse($integradors as $integrador)
                    <tr>
                        <td>{{ $jefe->articulo }}</td>
                        <td>$ {{ $jefe->precioventa }}</td>
                        </td>
                        <td>
                            <form action="{{ route('jefe.destroy', $jefe->id) }}" 
                            method="POST">

                            <a class="button is-info is-small"
                            href="{{ route('jefe.show', $jefe->id)}}">
                            Ver</a>

                            <a class="button is-info is-small"
                            href="{{ route('jefe.edit', $jefe->id)}}">
                            Editar</a>

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button is-danger is-small">
                                Eliminar</button>
                        </form>
                        </td>

                    </tr>
                </tbody>

                @empty
                    <h3>No hay datos en la base de datos</h3>
                @endforelse
            </table>
        </div>
    </section>

@endsection
