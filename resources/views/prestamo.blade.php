<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>prestamo</title>
</head>

<body class="bodyDevolucion" style="background-image: url('/Images/Como-gestionar-las-devoluciones-y-mejorar-la-trazabilidad.png')">
    @include('partials.nav')
    <div class="container divPrincipal">
        <h2>Registro de Salidas</h2>

        <!-- Formulario para ingresar la fecha de salida -->
        <form action="{{ route('salidaf') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="fechaSalida">Fecha de Salida:</label>
                <input type="date" class="form-control" id="fechaSalida" name="fechasalida">
            </div>


            <div class="form-group">
                <label for="idSalida">ID de usuario:</label>

                <select class="form-control" name="fidusuario">
                    <option value="">seleccione</option>
                    @foreach ($unusuario as $losusuarios)
                        <!-- Aquí puedes agregar opciones de ID de salida, por ejemplo: -->
                        <option value="{{$losusuarios->idusuario}}">{{$losusuarios->idusuario}}</option>
                    @endforeach
                    <!-- Agrega más opciones según sea necesario -->
                </select>




            </div>
            <div class="form-group">
                <label for="idEquipo">ID de administrador:</label>
                <select class="form-control" id="idEquipo" name="fidAdministrador">
                    <option value="">seleccione</option>
                    @foreach ($administrador as $losadministradores)
                        <option value="{{$losadministradores->idAdministrador}}">{{$losadministradores->idAdministrador}}</option>
                    @endforeach
                    <!-- Agrega más opciones según sea necesario -->
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="faccion" value="insertar">Guardar</button>
        </form>
        <!-- Tabla para listar las salidas -->
        <h3>Lista de Salidas</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Salida</th>
                    <th>Fecha de Salida</th>
                    <th>ID Usuario</th>
                    <th>ID Administrador</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí puedes agregar filas con datos de salidas utilizando PHP, Python, u otro lenguaje en tu servidor -->
                @foreach ($elprestamo as $losprestamos)
                    <tr>
                        <td value="{{ $losprestamos->idSalida }}">{{ $losprestamos->idSalida }}</td>
                        <td value="{{ $losprestamos->fechaSalida }}">{{ $losprestamos->fechaSalida }}</td>
                        <td value="{{ $losprestamos->idusuario }}">{{ $losprestamos->idusuario }}</td>
                        <td value="{{ $losprestamos->idAdministrador }}">{{ $losprestamos->idAdministrador }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</body>

</html>
