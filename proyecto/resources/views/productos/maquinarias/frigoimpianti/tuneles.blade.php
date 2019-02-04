@extends('layouts.main')
@section('title', 'Minicámaras FRIGOIMPIANTI :: Quimsa - Pasión por la calidad')
@section('body')
<section class="container bg-white contenedor py-4 mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias') }}">Maquinarias</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias/frigoimpianti') }}">Frigoimpianti</a></li>
            <li class="breadcrumb-item active" aria-current="page">Minicámaras</li>
        </ol>
    </nav>
    <div class="row mb-4">
        <div class="col-md-8">
            <h1 class="borde mb-4">
                MAQUINARIAS
            </h1>
        </div>
        <div class="col-md-4 text-center">
            <a href="{{ url('/productos/maquinarias/frigoimpianti') }}">
                <img src="{{ asset('img/marcas/frigoimpianti.png') }}" alt="" class="img-fluid">
            </a>
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-6">
            <img src="{{ asset('img/maquinarias/frigoimpianti/minicelle-MTS400-31.jpg') }}" alt="Minicámaras de secado curado y ahumado" class="rounded img-fluid">
        </div>
        <div class="col-md-6">
            <h3 class="titulo">
                <span>MINICÁMARAS DE SECADO, CURADO Y AHUMADO</span>
            </h3>
            <p>
                Estas instalaciones están pensadas para todos aquellos que necesitan secar y curar cantidades pequeñas y medianas de producto, con extrema sencillez y con los mismos resultados de una instalación industrial.
                <br><br>
                Gracias a su tecnología innovadora (la misma que se emplea en las instalaciones industriales más grandes), se garantiza una perfecta fiabilidad a lo largo del tiempo y un ahorro energético importante, realizando una óptima inversión para el futuro.
            </p>
        </div>
    </div>
    <div id="camaras" class="row py-4 mb-5 border-bottom">
        <div class="col-md-4">
            <h5>
                <strong class="rojo">EMBUTIDOS</strong>
                <br>
                <img src="{{ asset('img/maquinarias/frigoimpianti/salumi-coppe-pancette.jpg') }}" alt="" class="rounded img-fluid">
            </h5>
            <ul>
                <li>
                    <a class="ver-mas" href="#minicamara1"><strong>Minicámaras ARC-SRC</strong></a>
                </li>
                <li>
                    <a class="ver-mas" href="#minicamara2"><strong>Minicámaras MTA-MTS</strong></a>
                </li>
            </ul>
        </div>
        <div class="col-md-4">
            <h5>
                <strong class="rojo">QUESOS</strong>
                <br>
                <img src="{{ asset('img/maquinarias/frigoimpianti/impianti-per-caseifici.jpg') }}" alt="" class="rounded img-fluid">
            </h5>
            <ul>
                <li>
                    <a class="ver-mas" href="#minicamara3"><strong>Minicámaras ASF 2/4</strong></a>
                </li>
            </ul>
        </div>
        <div class="col-md-4">
            <h5>
                <strong class="rojo">AHUMADO</strong>
                <br>
                <img src="{{ asset('img/maquinarias/frigoimpianti/affumicatura.jpg') }}" alt="" class="rounded img-fluid">
            </h5>
            <ul>
                <li>
                    <a class="ver-mas" href="#minicamara4"><strong>Minicámaras SMOKE</strong></a>
                </li>
            </ul>
        </div>
    </div>
    <div id="minicamara1" class="row py-4 border-bottom">
        <div class="col-md-6">
            <h3 class="titulo">
                <span>MINICÁMARAS PARA EMBUTIDOS – Modelos ARC y SRC</span>
            </h3>
            <p>
                <strong>Descripción general:</strong><br>
                Creadas para secar y curar cantidades pequeñas y medianas de embutidos (salchichón, cabeza de lomo, panceta, etc.), son idóneas para todos aquellos que quieren empezar “a lo grande” o que ya tienen una discreta capacidad productiva.<br>
                Gracias a su tecnología, la misma que se utiliza en las instalaciones industriales más grandes, se garantizan óptimos resultados finales con extrema facilidad.<br>
                Estas minicámaras trabajan con carros que tienen estas dimensiones: 85x100x182 h.<br>
                La capacidad del modelo con un único carro (ARC 180) es de unos 180 kg, mientras que para dos carros (ARC 300) es de unos 360 kg.<br>
                Para aumentar la capacidad productiva y/o diversificar la producción, es posible combinar con cada modelo, un módulo dedicado únicamente al curado, con tres o seis carros (SRC 180 – SRC 300).<br>
                Todas nuestras minicámaras están equipadas con el sistema de recuperación del calor: un sistema que permite recuperar el calor de condensación durante el funcionamiento del compresor frigorífico, evitando tener que recurrir a fuentes de calor externas y permitiendo de esta manera, un considerable ahorro energético en el tiempo.
                <br><br>
                <strong>Sistema de ventilación:</strong><br>
                La ventilación en el interior de las minicámaras se realiza mediante dos canalizaciones laterales colocadas en altura, que dirigen el flujo de aire “tratado” hacia abajo a lo largo de las paredes.<br>
                Sucesivamente, los deflectores ubicados a pocos centímetros del suelo, envían el flujo descendente hacia el centro de la habitación, donde lo intercepta el “sistema de toma del aire” ubicado en el techo de la cámara, que lo obliga a ventilar el producto uniformemente.<br>
                Todas las fases de recambio del aire se pueden programar mediante una centralita de control ubicada en el panel frontal de la minicámara.
                <br><br>
                <strong>Control electrónico:</strong><br>
                El sistema de control está constituido por un cuadro de potencia controlado por un terminal usuario, constituido por una pantalla LCD 4×20 caracteres y un teclado de 15 botones.<br>
                Siguiendo las sencillas instrucciones del software desarrollado ad hoc para el terminal de nuestra empresa, el usuario puede controlar la instalación, configurar los parámetros de tres modos diferentes de producción (manual, semiautomático y automático) y de todas las otras funciones avanzadas (recambios de aire, pausas de trabajo, etc).
            </p>
        </div>
        <div class="col-md-6">
            <a data-fancybox="gallery" href="{{ asset('img/maquinarias/frigoimpianti/minicella-ARC-180-2.jpg') }}">
                <img src="{{ asset('img/maquinarias/frigoimpianti/minicella-ARC-180-2.jpg') }}" alt="" class="rounded img-fluid">
            </a>
            <div class="row pt-2">
                <div class="col">
                    <a data-fancybox="gallery" href="{{ asset('img/maquinarias/frigoimpianti/minicella.jpg') }}">
                        <img src="{{ asset('img/maquinarias/frigoimpianti/minicella.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery" href="{{ asset('img/maquinarias/frigoimpianti/minicella-SRC_Low-31.jpg') }}">
                        <img src="{{ asset('img/maquinarias/frigoimpianti/minicella-SRC_Low-31.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery" href="{{ asset('img/maquinarias/frigoimpianti/centralina-controllo.jpg') }}">
                        <img src="{{ asset('img/maquinarias/frigoimpianti/centralina-controllo.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
            </div>
            <h5 class="text-right mt-5">
                <a href="#camaras" class="ver-mas"><strong>Volver</a>
            </h5>
        </div>
    </div>
    <div id="minicamara2" class="row py-4 border-bottom">
        <div class="col-md-6">
            <h3 class="titulo">
                <span>MINICÁMARAS PARA EMBUTIDOS – Modelos MTA y MTS</span>
            </h3>
            <p>
                <strong>Descripción general:</strong><br>
                Creadas para secar y curar cantidades pequeñas y medianas de embutidos (salchichón, cabeza de lomo, panceta, etc.), son idóneas para todos aquellos que quieren empezar “a lo grande” o que ya tienen una discreta capacidad productiva.<br>
                Gracias a su tecnología, la misma que se utiliza en las instalaciones industriales más grandes, se garantizan óptimos resultados finales con extrema facilidad.<br>
                Estas minicámaras trabajan con carros que tienen estas dimensiones: 100x100x200 h.<br>
                La capacidad del modelo con un único carro (MTA 200) es de unos 200 kg, mientras que para dos carros (MTA 400) es de unos 400 kg.<br>
                Para aumentar la capacidad productiva y/o diversificar la producción, es posible combinar con cada modelo, un módulo dedicado únicamente al curado, con tres o seis carros (MTS 200 – MTS 400).<br>
                Todas nuestras minicámaras están equipadas con el sistema de recuperación del calor: un sistema que permite recuperar el calor de condensación durante el funcionamiento del compresor frigorífico, evitando tener que recurrir a fuentes de calor externas y permitiendo de esta manera, un considerable ahorro energético en el tiempo.
                <br><br>
                <strong>Sistema de ventilación:</strong><br>
                La ventilación en el interior de las minicámaras se realiza mediante dos canalizaciones laterales colocadas en altura, que dirigen el flujo de aire “tratado” hacia abajo a lo largo de las paredes.<br>
                Sucesivamente, los deflectores ubicados a pocos centímetros del suelo, envían el flujo descendente hacia el centro de la habitación, donde lo intercepta el “sistema de toma del aire” ubicado en el techo de la cámara, que lo obliga a ventilar el producto uniformemente.<br>
                Todas las fases de recambio del aire se pueden programar mediante una centralita de control ubicada en el panel frontal de la minicámara.
                <br><br>
                <strong>Control electrónico:</strong><br>
                El sistema de control está constituido por un cuadro de potencia controlado por un terminal usuario, constituido por una pantalla LCD 4×20 caracteres y un teclado de 15 botones.<br>
                Siguiendo las sencillas instrucciones del software desarrollado ad hoc para el terminal de nuestra empresa, el usuario puede controlar la instalación, configurar los parámetros de tres modos diferentes de producción (manual, semiautomático y automático) y de todas las otras funciones avanzadas (recambios de aire, pausas de trabajo, etc).
            </p>
        </div>
        <div class="col-md-6">
            <a data-fancybox="gallery" href="{{ asset('img/maquinarias/frigoimpianti/minicelle-MTS400-4.jpg') }}">
                <img src="{{ asset('img/maquinarias/frigoimpianti/minicelle-MTS400-4.jpg') }}" alt="" class="rounded img-fluid">
            </a>
            <div class="row pt-2">
                <div class="col">
                    <a data-fancybox="gallery" href="{{ asset('img/maquinarias/frigoimpianti/minicelle-MTA400-in-serie-2-2.jpg') }}">
                        <img src="{{ asset('img/maquinarias/frigoimpianti/minicelle-MTA400-in-serie-2-2.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery" href="{{ asset('img/maquinarias/frigoimpianti/centralina-controllo.jpg') }}">
                        <img src="{{ asset('img/maquinarias/frigoimpianti/centralina-controllo.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
            </div>
            <h5 class="text-right mt-5">
                <a href="#camaras" class="ver-mas"><strong>Volver</a>
            </h5>
        </div>
    </div>
</section>
@endsection