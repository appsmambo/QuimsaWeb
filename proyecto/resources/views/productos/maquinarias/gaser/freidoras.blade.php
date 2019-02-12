@extends('layouts.main')
@section('title', 'Freidoras - GASER :: Quimsa - Pasión por la calidad')
@section('body')
<section class="container bg-white contenedor py-4 mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias') }}">Maquinarias</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias/gaser') }}">Gaser</a></li>
            <li class="breadcrumb-item active" aria-current="page">Freidoras</li>
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
                <span>Freidora continua Mod. FC-3300/600</span>
            </h3>
            <p>
                <strong class="rojo">CARACTERÍSTICAS TÉCNICAS</strong>
            </p>
            <ul>
                <li>Dimensiones: longitud = 3300mm, ancho = 600mm</li>
                <li>Altura carga producto: 1.064 mm</li>
                <li>Altura descarga producto: 926 mm</li>
                <li>Fabricada totalmente en acero inoxidable, incluidos cuadros eléctricos.</li>
                <li>Tren de transporte en acero inoxidable teflonado en toda la parte en contacto con el producto.</li>
                <li>Posibilidad de cargar con dosificador, cinta de alimentación o manualmente.</li>
                <li>Aislada térmicamente.</li>
                <li>Bajo consumo de energía = 40 kw.</li>
                <li>Corriente eléctrica: 380/400 V.</li>
                <li>Capacidad de aceite = 300 Litros.</li>
                <li>Control electrónico de velocidad de cinta y de temperatura del aceite.</li>
                <li>Manejo y limpieza muy sencilla.</li>
                <li>Carro elevador y de transporte incluido.</li>
                <li>Peso Neto (sin aceite): 450 kg.</li>
            </ul>
        </div>
        <div class="col-md-6">
            <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/53_img-20180827-wa0000.jpg') }}">
                <img src="{{ asset('img/maquinarias/gaser/53_img-20180827-wa0000.jpg') }}" alt="Freidora continua Mod. FC-3300/600" class="rounded img-fluid">
            </a>
        </div>
    </div>
</section>
@endsection