@extends('layout.layout')
@section('content')

    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                Agregar articulo
            </p>
            <a href="/" class="button">Regresar</a>
            <a class="button is-info" href="/almacen/create">Agregar</a>
        </div>
    </section>

    <section class="section">

        <div class="table-container">

            <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                </tr>
                </thead>
                
                <tbody>

                @forelse($almacens as $almacen)
                    <tr>
                        <td>{{ $almacen->prodcuto }}</td>
                        <td>{{ $almacen->cantidad }}</td>
                        </td>
                        <td>
                            <form action="{{ route('almacen.destroy', $almacen->id) }}" 
                            method="POST">

                            <a class="button is-info is-small"
                            href="{{ route('almacen.show', $almacen->id)}}">
                            Ver</a>

                            <a class="button is-info is-small"
                            href="{{ route('almacen.edit', $almacen->id)}}">
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
