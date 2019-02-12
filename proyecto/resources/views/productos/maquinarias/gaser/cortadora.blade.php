@extends('layouts.main')
@section('title', 'Cortadora - GASER :: Quimsa - Pasión por la calidad')
@section('body')
<section class="container bg-white contenedor py-4 mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias') }}">Maquinarias</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias/gaser') }}">Gaser</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cortadora</li>
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
                <span>Cortadora de porciones de embutido fresco Mod. L-80</span>
            </h3>
            <p>
                <strong class="rojo">CARACTERÍSTICAS TÉCNICAS</strong>
            </p>
            <ul>
                <li>Estrangula y corta salchicha fresca.</li>
                <li>Producción: 100 a 400 piezas / minuto.</li>
                <li>Apta para tripa natural o artificial.</li>
                <li>Longitud de las piezas en la L-80 stándar: 100, 120, 140, 160, 180 mm.</li>
                <li>Longitud de las piezas en la L-80 especial: 160, 180, 200, 240, 280 mm.</li>
                <li>Diámetro del embutido: de 10 a 35 mm.</li>
                <li>Funcionamiento manual (5 piezas por vuelta).</li>
                <li>Máquina de sobremesa.</li>
                <li>Construida en Acero Inoxidable y plásticos no tóxicos (aptos para industria cárnica).</li>
                <li>Fácil mantenimiento y limpieza.</li>
                <li>Peso de la máquina: 10 Kg.</li>
                <li>Medidas de la máquina con embalaje: 570 x 510 x 240 mm.</li>
            </ul>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uK0fw-OcbXE" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-6">
            <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/9_img1.jpg') }}">
                <img src="{{ asset('img/maquinarias/gaser/9_img1.jpg') }}" alt="Cortadora de porciones de embutido fresco Mod. L-80" class="rounded img-fluid">
            </a>
            <div class="row pt-2 mb-2">
                <div class="col">
                    <a data-fancybox="gallery3" href="{{ asset('img/maquinarias/gaser/9_img2.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/9_img2.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery3" href="{{ asset('img/maquinarias/gaser/9_img3.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/9_img3.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery3" href="{{ asset('img/maquinarias/gaser/9_img4.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/9_img4.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection