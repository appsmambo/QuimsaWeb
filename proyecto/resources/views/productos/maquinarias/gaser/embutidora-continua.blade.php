@extends('layouts.main')
@section('title', 'Embutidora contínua - GASER :: Quimsa - Pasión por la calidad')
@section('body')
<section class="container bg-white contenedor py-4 mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias') }}">Maquinarias</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias/gaser') }}">Gaser</a></li>
            <li class="breadcrumb-item active" aria-current="page">Embutidora contínua</li>
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
    <div class="row py-4">
        <div class="col-md-6">
            <h3 class="titulo">
                <span>Embutidora continua al vacío Ref. EC-120</span>
            </h3>
            <p>
                <strong class="rojo">CARACTERÍSTICAS TÉCNICAS</strong>
            </p>
            <ul>
                <li>Construida en Acero Inoxidable AISI 304.</li>
                <li>Alimentación de la carne por rotor de 6 paletas.</li>
                <li>Grupo de vacío protegido por filtro condensador.</li>
                <li>Porcionador.</li>
                <li>Rodillera de altura y posición regulable.</li>
                <li>Tolva de 120 litros.</li>
                <li>Fácil de limpiar.</li>
                <li>Conectable a nuestras formadoras de hamburguesas, albóndigas, croquetas, canelones y clipadoras automáticas.</li>
                <li>3 Embudos de 12-20-30 mm.</li>
                <li>Herramientas y manual de instrucciones.</li>
                <li>Corriente trifásica 230 / 400 voltios 50 / 60 Hz.</li>
                <li>Potencia motor: 2,5 kw.</li>
                <li>Bomba vacío: 0,75 kw, 21 m3/h.</li>
                <li>Peso porciones: 0 - 10.000 grm.</li>
                <li>Producción máx: 125 porciones / minuto (+ / - 1 gr.).</li>
                <li>Salida libre: 1.500 Kg. / h.</li>
                <li>Peso: 190 Kg.</li>
            </ul>
        </div>
        <div class="col-md-6">
            <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/29_ec120l.jpg') }}">
                <img src="{{ asset('img/maquinarias/gaser/29_ec120l.jpg') }}" alt="Embutidora continua al vacío Ref. EC-120" class="rounded img-fluid">
            </a>
        </div>
    </div>
</section>
@endsection