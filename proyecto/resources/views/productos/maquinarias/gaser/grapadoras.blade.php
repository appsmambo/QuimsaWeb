@extends('layouts.main')
@section('title', 'Grapadoras - GASER :: Quimsa - Pasión por la calidad')
@section('body')
<section class="container bg-white contenedor py-4 mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias') }}">Maquinarias</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias/gaser') }}">Gaser</a></li>
            <li class="breadcrumb-item active" aria-current="page">Grapadoras</li>
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
                <span>Grapadora Ref. TDC</span>
            </h3>
            <p>
                <strong class="rojo">CARACTERÍSTICAS TÉCNICAS</strong>
            </p>
            <ul>
                <li>Construida en Acero Inoxidable.</li>
                <li>Máquina de sobremesa.</li>
                <li>Funcionamiento neumático.</li>
                <li>Doble grapa y corte al centro.</li>
                <li>Regulador para ajustar el cierre y presión.</li>
                <li>Adecuada para atado tipo sarta (hilo entre las 2 puntas).</li>
                <li>Utiliza grapas TX-10, 12, 14.</li>
                <li>Capacidad de los cargadores: 440 grapas.</li>
                <li>Presión de aire: 6 Kg / cm2.</li>
                <li>Consumo de aire por operación: 3,6 litros.</li>
                <li>Medidas: 250 x 500 x 700 mm.</li>
                <li>Peso: 26 Kg.</li>
            </ul>
        </div>
        <div class="col-md-6">
            <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/26_img1.jpg') }}">
                <img src="{{ asset('img/maquinarias/gaser/26_img1.jpg') }}" alt="Grapadora Ref. TDC" class="rounded img-fluid">
            </a>
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-6">
            <a data-fancybox="gallery2" href="{{ asset('img/maquinarias/gaser/27_img1.jpg') }}">
                <img src="{{ asset('img/maquinarias/gaser/27_img1.jpg') }}" alt="Grapadora Ref. TX" class="rounded img-fluid">
            </a>
        </div>
        <div class="col-md-6">
            <h3 class="titulo">
                <span>Grapadora Ref. TX</span>
            </h3>
            <p>
                <strong class="rojo">CARACTERÍSTICAS TÉCNICAS</strong>
            </p>
            <ul>
                <li>Construida en Acero Inoxidable.</li>
                <li>Máquina de sobremesa.</li>
                <li>Funcionamiento neumático.</li>
                <li>Apta para cualquier calibre de tripa.</li>
                <li>Regulador para ajustar el cierre y presión.</li>
                <li>Utiliza grapas TX-10, 12, 14, 16.</li>
                <li>Capacidad del cargador: 220 grapas.</li>
                <li>Presión de aire: 6 Kg / cm2.</li>
                <li>Consumo de aire por operación: 3,3 litros.</li>
                <li>Medidas: 250 x 370 x 700 mm.</li>
                <li>Peso: 25 Kg</li>
            </ul>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-md-6">
            <h3 class="titulo">
                <span>Grapadora Ref. TXM</span>
            </h3>
            <p>
                <strong class="rojo">CARACTERÍSTICAS TÉCNICAS</strong>
            </p>
            <ul>
                <li>Construida en Acero Inoxidable.</li>
                <li>Funcionamiento manual.</li>
                <li>Máquina de sobremesa.</li>
                <li>Apta para cualquier calibre de tripa.</li>
                <li>Regulador para ajustar el cierre y presión.</li>
                <li>Utiliza grapas TX-10, 12, 14, 16.</li>
                <li>Capacidad del cargador: 220 grapas.</li>
                <li>Medidas: 370 x 250 x 700 mm.</li>
                <li>Peso: 20 Kg.</li>
            </ul>
        </div>
        <div class="col-md-6">
            <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/28_img1.jpg') }}">
                <img src="{{ asset('img/maquinarias/gaser/28_img1.jpg') }}" alt="Grapadora Ref. TXM" class="rounded img-fluid">
            </a>
        </div>
    </div>
</section>
@endsection