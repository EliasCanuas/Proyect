@extends('layout.layout')
@section('content')

    <section class="hero is-link">
        <div class="hero-body">
            <p class="title">
                Formulario para registrar usuario y venta
            </p>
        </div>
    </section>

    <section class="section">
        <form action="{{ route('proveedor.store') }}" method="post">
            @csrf

            <div class="columns">

                <div class="column">

                    <div>
                        <label for="">Nombre: </label>
                        <input class="input is-large" type="text" name="nombre" id="">
                    </div>

                    <div>
                        <label for="">rfc: </label>
                        <input class="input is-large" type="text" name="rfc" id="">
                    </div>

                    <div>
                        <label for="">telefono: </label>
                        <textarea class="input is-large" type="text" name="telefono" id=""></textarea>
                    </div>

                    <div>
                        <label for="">Correo: </label>
                        <textarea class="input is-large" type="text" name="correo" id=""></textarea>
                    </div>

                </div>

                <div class="column">

                    <div>
                        <label for="">Direcion: </label>
                        <input class="input is-large" type="text" name="direccion" id="">
                    </div>

                    <div>
                        <label for="">Observaciones: </label>
                        <textarea class="input is-large" name="Observaciones" id="" cols="30" rows="5"></textarea>
                    </div>

                    <div>
                        <label for="">Mayorista: </label>
                        <select class="input is-large" name="disponible" id="">
                            <option value="1">Sí</option>
                            <option value="0">No</option>
                        </select>
                    </div>

                </div>

            </div>

            <div>
            <div class="is-flex is-justify-content-space-around">
                <a href="{{ url('proveedor/') }}" class="button is-danger is-large">X Cancelar</a>
                <input class="button is-light is-large" type="reset" value="Restablecer">
                <input class="button is-link is-large" type="submit" value="Guardar">
            </div>
            </div>


        </form>
    </section>

@endsection
