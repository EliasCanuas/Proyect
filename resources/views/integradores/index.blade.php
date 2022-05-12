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
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Articulo</th>
                    <th>Stock</th>
                    <th>Precio</th>
                    <th>Venta</th>
                    <th>Factura</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Articulo</th>
                    <th>Stock</th>
                    <th>Precio</th>
                    <th>Venta</th>
                    <th>Factura</th>
                </tr>
                </tfoot>
                <tbody>

                @forelse($integradors as $integrador)
                    <tr>
                        <th>{{ $integrador->usuario }}</th>
                        <td>{{ $integrador->contraseña }}</td>
                        <td>{{ $integrador->articulo }}</td>
                        <td>{{ $integrador->stock }}</td>
                        <td>$ {{ $integrador->precio }}</td>
                        <td>$ {{ $integrador->venta }}</td>
                        <td>$ {{ $integrador->factura }}</td>
                            @if ($integrador->disponible == 1 )
                                <p>Disponible</p>
                            @else
                                <p>No disponible</p>
                            @endif
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