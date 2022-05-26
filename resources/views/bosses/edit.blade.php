@extends('layout.layout')
@section('content')

    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                Formulario para editar
            </p>
        </div>
    </section>

    <section class="section">
        <form action="{{ route('jefe.update', $jefe->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="columns">

                <div class="column">


                    <div>
                        <label for="">Articulo: </label>
                        <textarea class="input is-large" name="articulo" id="" cols="30" rows="5"></textarea>
                    </div>


                </div>

                <div class="column">

                    <div>
                        <label for="">Precio de venta: </label>
                        <input class="input is-large" type="number" name="precioventa" value="{{ $jefe->precio }}" step="0.1" min="0" id="">
                    </div>

                    <div>
                        <label for="">Proveedor: </label>
                        <textarea class="input is-large" name="proveedor" id="" cols="30" rows="5"></textarea>
                    </div>

                </div>

            </div>

            <div>
            <div class="is-flex is-justify-content-space-around">
                <a href="{{ url('jefe/') }}" class="button is-danger is-large">Cancelar</a>
                <input class="button is-light is-large" type="reset" value="Restablecer">
                <input class="button is-link is-large" type="submit" value="Guardar">
            </div>
            </div>


        </form>
    </section>

@endsection
