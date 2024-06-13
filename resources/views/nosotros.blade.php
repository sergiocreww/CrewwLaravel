<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>nosotros</title>
</head>
<body>
    @include('partials.nav')
    <div class="container">
        <h1 class="mt-5">Acerca de Nosotros</h1>
        <hr>

        <!-- Detalles de Servicio -->
        <section id="detalles-servicio" class="mt-4">
            <h2>Detalles de Servicio</h2>
            <p>
                Ingreso:

Registro de detalles del equipo.
Inspección y configuración inicial.
Asignación a un usuario o departamento específico.
Período de Uso:

Monitoreo continuo del estado y rendimiento del equipo.
Salida:

Registro detallado de la devolución.
Verificación del estado y eliminación segura de datos si es necesario.
Este servicio garantiza una administración completa y eficiente de los equipos desde su ingreso hasta su salida, contribuyendo a la eficiencia operativa y la seguridad de los activos tecnológicos.
            </p>
        </section>

        <hr>

        <!-- Condiciones de Uso -->
        <section id="condiciones-uso" class="mt-4">
            <h2>Condiciones de Uso</h2>
            <p>
                Uso Adecuado:

Los equipos deben utilizarse únicamente para fines laborales y autorizados.
Cuidado del Equipo:

Los usuarios son responsables de mantener el equipo en buen estado y reportar cualquier daño.
Seguridad de Datos:

Prohibición de instalación de software no autorizado.
Cumplimiento de políticas de seguridad de datos al salir.
Reporte de Incidentes:

Los usuarios deben informar cualquier incidente, pérdida o robo de equipo de inmediato.
            </p>
        </section>

        <hr>

        <!-- Lo Que Hacemos -->
        <section id="lo-que-hacemos" class="mt-4">
            <h2>Lo Que Hacemos</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nullam auctor, velit eget ullamcorper rhoncus, tortor velit
                laoreet felis, nec lacinia libero ex eu velit. In tincidunt
                libero ac risus ullamcorper, a ultricies sapien ultrices.
                Nulla facilisi. Sed tristique nunc in sapien luctus, ac
                euismod turpis laoreet. Fusce sit amet eros nec ante dignissim
                condimentum. Fusce vitae laoreet sapien.
            </p>
        </section>
    </div>
</body>
</html>
