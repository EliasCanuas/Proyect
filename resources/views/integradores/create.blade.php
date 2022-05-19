@extends('layout.layout')
@section('content')

    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                Formulario para registrar venta
            </p>
        </div>
    </section>

    <section class="section">
        <form action="{{ route('integrador.store') }}" method="post">
            @csrf

            <div class="columns">

                <div class="column">


                    <div>
                        <label for="">Articulo: </label>
                        <textarea class="input is-large" type="text" name="articulo" id=""></textarea>
                    </div>

                    <div>
                        <label for="">Cantidad: </label>
                        <input class="input is-large" type="number" name="cantidad" step="1" min="0" id="">
                    </div>

                    <div>
                        <label for="">Stock: </label>
                        <input class="input is-large" type="number" name="stock" step="0.1" min="0" id="">
                    </div>

                </div>

                <div class="column">

                    <div>
                        <label for="">Precio:</label>
                        <input class="input is-large" type="number" name="precio" step="0.1" min="0" id="">
                    </div>

                    <div>
                        <label for="">Venta:</label>
                        <input class="input is-large" type="number" name="venta" id="">
                    </div>


                </div>

            </div>

            <div>
            <div class="is-flex is-justify-content-space-around">
                <a href="{{ url('integrador/') }}" class="button is-danger is-large">Cancelar</a>
                <input class="button is-light is-large" type="reset" value="Restablecer">
                <input class="button is-link is-large" type="submit" value="Guardar">
            </div>
            </div>


        </form>
    </section>

@endsection
