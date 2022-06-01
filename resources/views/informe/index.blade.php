@extends('layout.layout')
@section('content')

    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                Informe
            </p>
            <a href="/" class="button">Regresar</a>
            <a class="button is-info" href="/informe/create">Agregar</a>
        </div>
    </section>

    <section class="section">

        <div class="table-container">

            <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                <thead>
                <tr>
                    <th>Prodcuto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Total de ganancia</th>
                </tr>
                </thead>
                <tbody>

                @forelse($informes as $informe)
                    <tr>
                        <td>{{ $informe->producto }}</td>
                        <td>{{ $informe->cantidad }}</td>
                        <td>$ {{ $informe->precio }}</td>
                        <td>$ {{ $informe->precio * $informe->cantidad }}</td>
                        </td>
                        <td>
                            <form action="{{ route('informe.destroy', $informe->id) }}" 
                            method="POST">
                            <a class="button is-info is-small"
                            href="{{ route('informe.show', $informe->id)}}">
                            Ver</a>
                            <a class="button is-info is-small"
                            href="{{ route('informe.edit', $informe->id)}}">
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
