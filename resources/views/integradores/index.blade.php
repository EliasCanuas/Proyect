@extends('layout.layout')
@section('content')

    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                Listado
            </p>
            <a href="/" class="button">Regresar</a>
            <a class="button is-info" href="/integrador/create">Agregar</a>
        </div>
    </section>

    <section class="section">

        <div class="table-container">

            <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                <thead>
                <tr>
                    <th>Articulo</th>
                    <th>Cantidad</th>
                    <th>Stock</th>
                    <th>Precio</th>
                    <th>Venta</th>
                    <th>Total de pagar</th>
                </tr>
                </thead>
                <tbody>

                @forelse($integradors as $integrador)
                    <tr>
                        <td>{{ $integrador->articulo }}</td>
                        <td>{{ $integrador->cantidad }}</td>
                        <td>{{ $integrador->stock }}</td>
                        <td>$ {{ $integrador->precio }}</td>
                        <td>{{ $integrador->venta }}</td>
                        <td>$ {{ $integrador->precio * $integrador->cantidad }}</td>
                        </td>
                        <td>
                            <form action="{{ route('integrador.destroy', $integrador->id) }}" 
                            method="POST">
                            <a class="button is-info is-small"
                            href="{{ route('integrador.show', $integrador->id)}}">
                            Ver</a>
                            <a class="button is-info is-small"
                            href="{{ route('integrador.edit', $integrador->id)}}">
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
