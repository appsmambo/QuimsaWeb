@extends('layouts.main')
@section('title', 'Amasadoras - GASER :: Quimsa - Pasión por la calidad')
@section('body')
<section class="container bg-white contenedor py-4 mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias') }}">Maquinarias</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias/gaser') }}">Gaser</a></li>
            <li class="breadcrumb-item active" aria-current="page">Amasadoras</li>
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
                <span>Amasadora Ref. A-40L</span>
            </h3>
            <p>
                <strong class="rojo">CARACTERÍSTICAS TÉCNICAS</strong>
            </p>
            <ul>
                <li>Construida en Acero Inoxidable.</li>
                <li>Capacidad 40 litros (25 Kg.).</li>
                <li>Potencia motor 450 watios.</li>
                <li>Corriente monofásica 230 voltios, 50 Hz.</li>
                <li>Máquina de sobremesa.</li>
                <li>Medidas 800 x 420 x 620 mm.</li>
                <li>Peso: 74 Kg.</li>
            </ul>
            <p>
                Opcional:<br>
                Motor trifásico 230 / 400 voltios 50 / 60 Hz.
            </p>
        </div>
        <div class="col-md-6">
            <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/33_img1.jpg') }}">
                <img src="{{ asset('img/maquinarias/gaser/33_img1.jpg') }}" alt="Amasadora Ref. A-40L" class="rounded img-fluid">
            </a>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-md-6">
            <a data-fancybox="gallery2" href="{{ asset('img/maquinarias/gaser/34_img1.jpg') }}">
                <img src="{{ asset('img/maquinarias/gaser/34_img1.jpg') }}" alt="Amasadora Ref. A-100L" class="rounded img-fluid">
            </a>
        </div>
        <div class="col-md-6">
            <h3 class="titulo">
                <span>Amasadora Ref. A-100L</span>
            </h3>
            <p>
                <strong class="rojo">CARACTERÍSTICAS TÉCNICAS</strong>
            </p>
            <ul>
                <li>Construida en Acero Inoxidable.</li>
                <li>Capacidad 95 litros (65 Kg.).</li>
                <li>Potencia motor 740 watios.</li>
                <li>Corriente monofásica 230 voltios, 50 Hz.</li>
                <li>Máquina de sobremesa.</li>
                <li>Medidas 1.000 x 470 x 1.400 mm.</li>
                <li>Peso: 122 Kg.</li>
            </ul>
            <p>
                Opcional:<br>
                Motor trifásico 230 / 400 voltios 50 / 60 Hz.
            </p>
        </div>
    </div>
</section>
@endsection