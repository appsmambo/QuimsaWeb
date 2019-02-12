@extends('layouts.main')
@section('title', 'Fileteadora - GASER :: Quimsa - Pasión por la calidad')
@section('body')
<section class="container bg-white contenedor py-4 mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias') }}">Maquinarias</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias/gaser') }}">Gaser</a></li>
            <li class="breadcrumb-item active" aria-current="page">Fileteadora</li>
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
                <span>Máquina fileteadora de pechugas Mod. TF-300</span>
            </h3>
            <p>
                <strong class="rojo">CARACTERÍSTICAS TÉCNICAS</strong>
            </p>
            <ul>
                <li>Máquina compacta de sobremesa</li>
                <li>Producción hasta 300 quilos / hora</li>
                <li>Carga y recogida frontal</li>
                <li>4 o 5 filetes por pechuga</li>
                <li>Sistemas de seguridad activos</li>
                <li>Corriente eléctrica 230V, 50/60Hz, 80W</li>
                <li>Medidas: 530 x 430x 340mm</li>
                <li>Peso: 60kg</li>
                <li>Construida en Acero Inoxidable</li>
                <li>Ruido: nivel de presión acústica: menor de 70dB (A)</li>
            </ul>
            <p>
                Máquina compacta de sobremesa para cortar pechugas de todo tipo con una producción de hasta 300 kg / hora. Carga y recogida de la pechuga por el mismo lado.
            </p>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/xT5__1w_zUY" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-6">
            <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/56_700-x-500-1.jpg') }}">
                <img src="{{ asset('img/maquinarias/gaser/56_700-x-500-1.jpg') }}" alt="Máquina fileteadora de pechugas Mod. TF-300" class="rounded img-fluid">
            </a>
            <div class="row pt-2 mb-2">
                <div class="col">
                    <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/56_700-x-500-2.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/56_700-x-500-2.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/56_tf-300_ii.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/56_tf-300_ii.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection