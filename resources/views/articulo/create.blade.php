@extends('layout.layout')
@section('content')

    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                Agregar articulos
            </p>
        </div>
    </section>

    <section class="section">
        <form action="{{ route('articulo.store') }}" method="post">
            @csrf

            <div class="columns">

                <div class="column">


                    <div>
                        <label for="">Articulo: </label>
                        <textarea class="input is-large" type="text" name="producto" id=""></textarea>
                    </div>

                    </div>

                <div class="column">

                    <div>
                        <label for="">Cantidad: </label>
                        <input class="input is-large" type="number" name="cantidad" step="1" min="0" id="">
                    </div>

                    <div>
                        <label for="">Precio: </label>
                        <input class="input is-large" type="number" name="precio" step="0.1" min="0" id="">
                    </div>

                </div>

            </div>

            <div>
            <div class="is-flex is-justify-content-space-around">
                <a href="{{ url('articulo/') }}" class="button is-danger is-large">Cancelar</a>
                <input class="button is-light is-large" type="reset" value="Restablecer">
                <input class="button is-link is-large" type="submit" value="Guardar">
            </div>
            </div>


        </form>
    </section>

@endsection
