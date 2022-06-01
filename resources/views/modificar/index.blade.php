@extends('layout.layout')
@section('content')

    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                Modificar articulos
            </p>
            <a href="/" class="button">Regresar</a>
            <a class="button is-info" href="/modificar/create">Agregar</a>
        </div>
    </section>

    <section class="section">

        <div class="table-container">

            <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                </tr>
                </thead>
                
                <tbody>

                @forelse($modificars as $modificar)
                    <tr>
                        <td>{{ $modificar->producto }}</td>
                        <td>{{ $modificar->cantidad }}</td>
                        <td>{{ $modificar->precio }}</td>
                        </td>
                        <td>
                            <form action="{{ route('modificar.destroy', $modificar->id) }}" 
                            method="POST">

                            <a class="button is-info is-small"
                            href="{{ route('modificar.show', $modificar->id)}}">
                            Ver</a>

                            <a class="button is-info is-small"
                            href="{{ route('modificar.edit', $modificar->id)}}">
                            Restaurar</a>

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
