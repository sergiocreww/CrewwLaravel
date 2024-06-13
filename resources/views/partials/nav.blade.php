<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">ALMACEN SENA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown"
            aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link " href="{{ route('equipo') }}" role="button" aria-expanded="false">
                        REGISTRO DE EQUIPOS
                    </a>

                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        PRESTAMOS Y DEVOLUCIONES
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('prestamo') }}">prestamo</a></li>
                        <li><a class="dropdown-item" href="{{ route('devolucion') }}">devolucion</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        ACERCA DE NOSOTROS
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('nosotros') }}">detalles de servicio</a></li>
                        <li><a class="dropdown-item" href="{{ route('nosotros') }}">condiciones de uso</a></li>
                        <li><a class="dropdown-item" href="{{ route('nosotros') }}">lo que hacemos</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        CONTACTENOS
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="https://twitter.com/?lang=es"><img width="25"
                                    src="/Images/icono-twitter-iconos-redes-sociales-estilo-corte-papel_505135-257.avif"
                                    alt="Twitter Logo"> Twitter</a></li>
                        <li><a class="dropdown-item" href="https://www.instagram.com"><img width="25"
                                    src="/Images/icono-instagram-logotipo-insignia-moderna_578229-124.avif"
                                    alt=""> instragram</a></li>
                        <li><a class="dropdown-item" href="https://www.facebook.com"><img width="25"
                                    src="/Images/footagecrate-facebook-icon-fun-animation@3X.png" alt="">
                                facebook</a></li>
                        <li><a class="dropdown-item" href="https://www.youtube.com"><img width="25"
                                    src="/Images/images.png" alt=""> youtube</a></li>
                        <li><a class="dropdown-item" href="https://www.tiktok.com/en/"><img width="25"
                                    src="/Images/tik-tok-para-empresas.jpg" alt=""> tiktok</a></li>
                        <li><a class="dropdown-item"
                                href="https://oferta.senasofiaplus.edu.co/sofia-oferta/inicio-sofia-plus.html">otros</a>
                        </li>
                    </ul>
                </li>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-primary">CERRAR SESION</button>
                </form>
            </ul>
        </div>
    </div>
</nav>
