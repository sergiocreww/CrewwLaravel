<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/css/Bienvenido.css', 'resources/js/Bienvenido.js'])
    <title>equipo</title>
    <style>
        body {
            background-image: url(/chip-de-computadora-wallpapers_33021_2560x1600.jpg);
        }
    </style>
</head>

<body>
    @include('partials.nav')

    @if (Auth::check())
    {{-- El usuario está autenticado --}}
    <h1>Bienvenido, {{ Auth::user()->nombre }}</h1>
@else
    {{-- El usuario no está autenticado --}}
    <p>No has iniciado sesión.</p>
@endif

    <div class="container divPrincipal mt-5">
        <h1>Registro de Computadoras </h1>


        <form action="{{ route('equipof') }}" method="post">
            @csrf
            <div class="form-group">
                <input type="hidden" class="form-control" id="idEquipo"name="equipo">
                <label for="marca">Marca:</label>
                <input type="text" class="form-control" id="marca" placeholder="Ingrese la marca" name="marcaE">
            </div>
            <div class="form-group">
                <label for="modelo">Codigo:</label>
                <input type="text" class="form-control" id="codigo" placeholder="Ingrese el codigo"
                    name="codigoE">
            </div>
            <div class="form-group">
                <label for="serial">Color:</label>
                <input type="text" class="form-control" id="color" placeholder="Ingrese el color" name="colorE"
                    <div class="form-group">
                <label for="serial">Descripcion:</label>
                <input type="text" class="form-control" id="serial"
                    placeholder="Ingrese una descripcion de el equipo" name="despE">
            </div>
            <div class="form-group">
                <label for="serial">Estado:</label>
                <div>
                    <div><input name="estadoE" type="radio" value="1">Prestado</div>
                    <div><input name="estadoE" type="radio"value="0">No prestado</div>



                </div>
            </div>

            <button type="submit" class="btn btn-primary" name="faccion" value="insertar">Registrar</button>
        </form>

        <h3>Lista de Equipos</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>ID equipo</th>
                    <th>marca</th>
                    <th>codigo</th>
                    <th>color</th>
                    <th>descripcion</th>
                    <th>estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($elequipo as $equipos)
                    <tr>
                        <td value="{{ $equipos->idequipo }}">{{ $equipos->idequipo }}</td>
                        <td value="{{ $equipos->marcaE }}">{{ $equipos->marcaE }}</td>
                        <td value="{{ $equipos->codigoE }}">{{ $equipos->codigoE }}</td>
                        <td value="{{ $equipos->colorE }}">{{ $equipos->colorE }} </td>
                        <td value="{{ $equipos->despE }}">{{ $equipos->despE }} </td>
                        <td value="{{ $equipos->estadoE }}">{{ $equipos->estadoE }} </td>
                    </tr>
                @endforeach

                <!-- Puedes agregar más filas aquí -->
            </tbody>
        </table>
    </div>
</body>

</html>
