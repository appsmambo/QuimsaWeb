<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <link rel="stylesheet" href="{{ asset('scripts/bxslider-4-4.2.12/dist/jquery.bxslider.css') }}" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
        <title>@yield('title')</title>
    </head>
    <body>
        <header>
            <section class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('img/logo.png') }}" class="d-inline-block align-top mt-4" height="88" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto mt-5">
                            <li class="nav-item {{ request()->is('/') ? 'active' : '' }} border-right">
                                <a class="nav-link" href="{{ url('/') }}">Nosotros</a>
                            </li>
                            <li class="nav-item border-right submenu">
                                <a class="nav-link" href="#">Productos</a>
                                <ul class="dropdown">
                                    <li class="{{ request()->is('contactanos') ? 'active' : '' }}"><a href="{{ url('productos/maquinarias') }}">Maquinarias</a></li>
                                    <li><a href="#">Insumos</a></li>
                                    <li><a href="#">Empaques</a></li>
                                </ul>
                            </li>
                            <li class="nav-item border-right">
                                <a class="nav-link" href="#">Servicios</a>
                            </li>
                            <li class="nav-item {{ request()->is('contactanos') ? 'active' : '' }} border-right">
                                <a class="nav-link" href="{{ url('contactanos') }}">Contáctenos</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </section>
        </header>
        @yield('slider')
        @yield('body')
        <footer class="container-fluid py-4">
            Av. Pablo Carriquiry 455. Of. 10, San Isidro.   |   Telf.: (51-1) 224-2906 / (51-1) 224-3205
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
        <script>
            $(document).ready(function(){
                $('.slider').bxSlider({
                    auto:true,
                    pager:false,
                    controls:false,
                    mode:'fade'
                });
                $('[data-fancybox="gallery"]').fancybox({
                    lang: "en",
                    i18n: {
                        en: {
                            CLOSE: "Cerrar",
                            NEXT: "Siguiente",
                            PREV: "Anterior",
                            PLAY_START: "Iniciar presentación",
                            PLAY_STOP: "Pausar",
                            FULL_SCREEN: "Pantalla completa",
                            THUMBS: "Miniaturas",
                            DOWNLOAD: "Descargar",
                            SHARE: "Compartir",
                            ZOOM: "Zoom"
                        }
                    }
                });
                $('a[href*="#"]')
                // Remove links that don't actually link to anything
                .not('[href="#"]')
                .not('[href="#0"]')
                .click(function(event) {
                    // On-page links
                    if (
                    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
                    && 
                    location.hostname == this.hostname
                    ) {
                    // Figure out element to scroll to
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    // Does a scroll target exist?
                    if (target.length) {
                        // Only prevent default if animation is actually gonna happen
                        event.preventDefault();
                        $('html, body').animate({
                        scrollTop: target.offset().top
                        }, 1000, function() {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        };
                        });
                    }
                    }
                });
            });
        </script>
    </body>
</html>