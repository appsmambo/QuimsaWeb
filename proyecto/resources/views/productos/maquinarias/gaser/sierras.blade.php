@extends('layouts.main')
@section('title', 'Sierras - GASER :: Quimsa - Pasión por la calidad')
@section('body')
<section class="container bg-white contenedor py-4 mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias') }}">Maquinarias</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias/gaser') }}">Gaser</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sierras</li>
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
                <span>Sierra – cinta Ref. S-1750</span>
            </h3>
            <p>
                <strong class="rojo">CARACTERÍSTICAS TÉCNICAS</strong>
            </p>
            <ul>
                <li>Construida en Acero Inoxidable.</li>
                <li>Diámetro de polea 230 mm.</li>
                <li>Longitud cinta 1.750 mm.</li>
                <li>Espesor de corte 200 mm.</li>
                <li>Máquina de sobremesa.</li>
                <li>Corriente monofásica: 230 voltios, 50 / 60 Hz.</li>
                <li>Potencia motor: 1.100 watios.</li>
                <li>Medidas: 530 x 500 x 910 mm.</li>
                <li>Peso: 55 Kg.</li>
            </ul>
        </div>
        <div class="col-md-6">
            <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/31_img1.jpg') }}">
                <img src="{{ asset('img/maquinarias/gaser/31_img1.jpg') }}" alt="Sierra – cinta Ref. S-1750" class="rounded img-fluid">
            </a>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-md-6">
            <a data-fancybox="gallery2" href="{{ asset('img/maquinarias/gaser/32_img1.jpg') }}">
                <img src="{{ asset('img/maquinarias/gaser/32_img1.jpg') }}" alt="Sierra – cinta Ref. S-2120" class="rounded img-fluid">
            </a>
        </div>
        <div class="col-md-6">
            <h3 class="titulo">
                <span>Sierra – cinta Ref. S-2120</span>
            </h3>
            <p>
                <strong class="rojo">CARACTERÍSTICAS TÉCNICAS</strong>
            </p>
            <ul>
                <li>Construida en Acero Inoxidable.</li>
                <li>Diámetro de polea 275 mm.</li>
                <li>Longitud cinta 2.120 mm.</li>
                <li>Espesor de corte 233 mm.</li>
                <li>Máquina de sobremesa.</li>
                <li>Corriente monofásica: 230 voltios, 50 Hz.</li>
                <li>Potencia motor: 1.100 watios.</li>
                <li>Medidas: 600 x 600 x 1.040 mm.</li>
                <li>Peso: 65 Kg.</li>
            </ul>
        </div>
    </div>
</section>
@endsection