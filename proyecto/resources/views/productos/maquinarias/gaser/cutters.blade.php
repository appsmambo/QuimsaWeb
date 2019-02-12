@extends('layouts.main')
@section('title', 'Cútters - GASER :: Quimsa - Pasión por la calidad')
@section('body')
<section class="container bg-white contenedor py-4 mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias') }}">Maquinarias</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias/gaser') }}">Gaser</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cútters</li>
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
                <span>Cútter Ref. C-20L</span>
            </h3>
            <p>
                <strong class="rojo">CARACTERÍSTICAS TÉCNICAS</strong>
            </p>
            <ul>
                <li>Construida en Acero Inoxidable.</li>
                <li>Capacidad 21 litros (15 Kg.).</li>
                <li>Corriente trifásica 230-400 voltios, 50 / 60 Hz.</li>
                <li>Velocidad de las cuchillas y artesa combinables.</li>
                <li>Motor cuchillas:1ª velocidad: 1.500 r.p.m., 2.900 watios / 2ª velocidad: 3.000 r.p.m., 3.900 watios</li>
                <li>Motor artesa:1ª velocidad: 10 r.p.m., 150 watios / 2ª velocidad: 20 r.p.m., 200 watios</li>
                <li>Cabeza con 3 o 6 cuchillas.</li>
                <li>Medidas: 1.050 x 750 x 1.100 mm.</li>
                <li>Peso: 170 Kg.</li>
            </ul>
            <p>
                Opcional:<br>
                Kit de 3 cuchillas completo.
            </p>
        </div>
        <div class="col-md-6">
            <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/36_img1.jpg') }}">
                <img src="{{ asset('img/maquinarias/gaser/36_img1.jpg') }}" alt="Cutter Ref. C-20L" class="rounded img-fluid">
            </a>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-md-6">
            <a data-fancybox="gallery2" href="{{ asset('img/maquinarias/gaser/37_img1.jpg') }}">
                <img src="{{ asset('img/maquinarias/gaser/37_img1.jpg') }}" alt="Cutter Ref. C-40L" class="rounded img-fluid">
            </a>
        </div>
        <div class="col-md-6">
            <h3 class="titulo">
                <span>Cútter Ref. C-40L</span>
            </h3>
            <p>
                <strong class="rojo">CARACTERÍSTICAS TÉCNICAS</strong>
            </p>
            <ul>
                <li>Construida en Acero Inoxidable.</li>
                <li>Capacidad 40 litros (25 Kg.).</li>
                <li>Corriente trifásica 230-400 voltios, 50 / 60 Hz.</li>
                <li>Velocidad de las cuchillas y artesa combinables.</li>
                <li>Motor cuchillas:1ª velocidad: 1.500 r.p.m., 6.620 watios / 2ª velocidad: 3.000 r.p.m., 8.100 watios</li>
                <li>Motor artesa:1ª velocidad: 10 r.p.m., 350 watios / 2ª velocidad: 20 r.p.m., 500 watios</li>
                <li>Cabeza con 3 o 6 cuchillas.</li>
                <li>Medidas: 1.400 x 910 x 1.150 mm.</li>
                <li>Peso: 325 Kg.</li>
                <li>Kit de 3 cuchillas completo</li>
            </ul>
        </div>
    </div>
</section>
@endsection