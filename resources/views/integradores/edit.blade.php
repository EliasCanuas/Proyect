@extends('layout.layout')
@section('content')

    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                Formulario para editar articulo
            </p>
        </div>
    </section>

    <section class="section">
        <form action="{{ route('integrador.update', $integrador->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="columns">

                <div class="column">


                    <div>
                        <label for="">Articulo: </label>
                        <textarea class="input is-large" name="articulo" value="{{ $integrador->articulo}}" id=""></textarea>
                    </div>


                </div>

                <div class="column">

                <div>
                        <label for="">Cantidad: </label>
                        <input class="input is-large" type="number" name="cantidad" value="{{ $integrador->cantidad }}" id="">
                    </div>

                    <div>
                        <label for="">Stock: </label>
                        <input class="input is-large" type="number" name="stock"  value="{{ $integrador->stock }}" id="">
                    </div>

                    <div>
                        <label for="">Precio: </label>
                        <input class="input is-large" type="number" name="precio" value="{{ $integrador->precio }}" step="0.1" min="0" id="">
                    </div>

                    <div>
                        <label for="">Número de Venta: </label>
                        <input class="input is-large" type="number" name="venta" value="{{ $integrador->venta }}" id="">
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
