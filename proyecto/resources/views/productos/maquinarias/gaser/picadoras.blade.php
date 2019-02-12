@extends('layouts.main')
@section('title', 'Picadoras - GASER :: Quimsa - Pasión por la calidad')
@section('body')
<section class="container bg-white contenedor py-4 mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias') }}">Maquinarias</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias/gaser') }}">Gaser</a></li>
            <li class="breadcrumb-item active" aria-current="page">Picadoras</li>
        </ol>
    </nav>
    <div class="row mb-4">
        <div class="col-md-8">
            <h1 class="borde mb-4">
                MAQUINARIAS
            </h1>
        </div>
        <div class="col-md-4 text-center">
            <a href="{{ url('/productos/maquinarias/gaser') }}">
                <img src="{{ asset('img/marcas/gaser.png') }}" alt="" class="img-fluid">
            </a>
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-6">
            <h3 class="titulo">
                <span>Picadora de carne Ref. P-98 / 114</span>
            </h3>
            <p>
                <strong class="rojo">CARACTERÍSTICAS TÉCNICAS</strong>
            </p>
            <ul>
                <li>Construida en Acero Inoxidable.</li>
                <li>Máquina de sobremesa.</li>
                <li>Boca de salida 98 mm. / 114 mm.</li>
                <li>Sistema de corte: Unger (simple, doble, triple corte).</li>
                <li>Potencia motor 1.850 watios.</li>
                <li>Corriente monofásica 230 voltios, 50 Hz.</li>
                <li>Producción hasta 700 / 1.000 Kg / hora.</li>
                <li>Medidas: 410 x 700 x 580 mm.</li>
                <li>Peso: 60 / 70 Kg.</li>
            </ul>
        </div>
        <div class="col-md-6">
            <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/30_img1.jpg') }}">
                <img src="{{ asset('img/maquinarias/gaser/30_img1.jpg') }}" alt="Picadora de carne Ref. P-98 / 114" class="rounded img-fluid">
            </a>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-md-6">
            <a data-fancybox="gallery2" href="{{ asset('img/maquinarias/gaser/35_img1.jpg') }}">
                <img src="{{ asset('img/maquinarias/gaser/35_img1.jpg') }}" alt="Picadora-mezcladora Mod. 95L" class="rounded img-fluid">
            </a>
            <div class="row pt-2 mb-2">
                <div class="col">
                    <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/35_img2.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/35_img2.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/35_img3.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/35_img3.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h3 class="titulo">
                <span>Picadora-mezcladora Mod. 95L</span>
            </h3>
            <p>
                <strong class="rojo">CARACTERÍSTICAS TÉCNICAS</strong>
            </p>
            <ul>
                <li>Construida en Acero Inoxidable.</li>
                <li>Sistema de corte: Enterprise 32 (simple corte) / Unger 98 (simple, doble y triple corte).</li>
                <li>Potencia motor picadora: 4 HP (3,00 Kw).</li>
                <li>Potencia motor mezcladora: 1,75 HP (1,30 Kw).</li>
                <li>Motor: trifásico 230/400V 50/60 Hz.</li>
                <li>Transmisión: engranajes en aceite.</li>
                <li>Incluye programador digital con ciclos de mezclado y amasado y protector boca con micro.</li>
                <li>Producción: primer picado 1.500 kg/h aprox.</li>
                <li>Capacidad en litros: 95 L.</li>
                <li>Capacidad en Kgs: 65 Kg. aprox.</li>
                <li>Peso: 230 Kg.</li>
                <li>Dimensiones base: 82 x 54 cm.</li>
                <li>Dimensiones totales: 112 x 63 x 156 cm.</li>
            </ul>
        </div>
    </div>
</section>
@endsection