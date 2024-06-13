<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Devoluciones</title>
</head>

<body class="bodyDevolucion" style="background-image: url('/Images/3d-illustration-advanced-mobile-microprocessor-600nw-2154798885.webp')">
    @include('partials.nav')
    <div class="container divPrincipal">
        <h2>Registro de Entregas</h2>

        <!-- Formulario para ingresar la fecha de entrega, ID de salida y ID de equipo -->
        <form action="{{ route('devolucionf') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="fechaEntrega">Fecha de Entrega:</label>
                <input type="date" class="form-control" id="fechaEntrega" name="fechaEntregaDetalleSalida">
            </div>
            <div class="form-group">
                <label for="idSalida">ID de Salida:</label>
                <select class="form-control" name="fidSalida">
                    <option value="">seleccione</option>
                    @foreach ($elprestamo as $losprestamos)
                        <!-- Aquí puedes agregar opciones de ID de salida, por ejemplo: -->
                        <option value="{{ $losprestamos->idSalida }}">{{ $losprestamos->idSalida }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="idEquipo">ID de Equipo:</label>
                <select class="form-control" name="fidequipo">
                    <option value="">seleccione</option>
                    @foreach ($elequipo as $losequipo)
                        <!-- Aquí puedes agregar opciones de ID de salida, por ejemplo: -->
                        <option value="{{ $losequipo->idequipo }}">{{ $losequipo->idequipo }}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <br>
            <button type="submit" class="btn btn-primary" name="faccion" value="insertar">Guardar</button>

        </form>
        <br>
        <br>
        <!-- Tabla para listar las entregas -->
        <h3>Lista de Entregas</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Entrega</th>
                    <th>Fecha de Entrega</th>
                    <th>ID de Salida</th>
                    <th>ID de Equipo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($devolucion1 as $devoluciones1)
                    <tr>
                        <td value="{{ $devoluciones1->idDetalleSalida }}">{{ $devoluciones1->idDetalleSalida }}</td>
                        <td value="{{ $devoluciones1->fechaEntregaDetalleSalida }}">
                            {{ $devoluciones1->fechaEntregaDetalleSalida }}</td>

                        <td value="{{ $devoluciones1->idSalida }}">{{ $devoluciones1->idSalida }}</td>
                        <td value="{{ $devoluciones1->idequipo }}">{{ $devoluciones1->idequipo }} </td>
                    </tr>
                @endforeach

                <!-- Puedes agregar más filas aquí -->
            </tbody>
        </table>
    </div>
</body>

</html>
