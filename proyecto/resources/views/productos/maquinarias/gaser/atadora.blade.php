@extends('layouts.main')
@section('title', 'Atadora - GASER :: Quimsa - Pasión por la calidad')
@section('body')
<section class="container bg-white contenedor py-4 mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias') }}">Maquinarias</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias/gaser') }}">Gaser</a></li>
            <li class="breadcrumb-item active" aria-current="page">Atadora</li>
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
                <span>Atadora semi-automática Mod. T-70</span>
            </h3>
            <p>
                <strong class="rojo">CARACTERÍSTICAS TÉCNICAS</strong>
            </p>
            <ul>
                <li>Tipo de atado: hilo continuo.</li>
                <li>Consume bobinas de hilo (montado sobre cono).</li>
                <li>Funcionamiento neumático (4 Kg / cm2).</li>
                <li>No necesita corriente eléctrica.</li>
                <li>Consumo de aire a velocidad normal (80 litros / minuto).</li>
                <li>Mando de rodillera con fijación para atado automático.</li>
                <li>Boca de entrada 54 mm.</li>
                <li>Estrangulación regulable.</li>
                <li>Velocidad variable de 50 a 140 op. / minuto.</li>
                <li>Atado con 3 vueltas del hilo.</li>
                <li>Máquina montada sobre mesa (mesa de 650 x 500 x 700 mm. con 4 ruedas en Acero Inoxidable).</li>
                <li>Muy fácil de limpiar.</li>
                <li>Medidas 650 x 380 x 420 mm.</li>
                <li>Peso: 42 Kg.</li>
                <li>Construida en Acero Inoxidable.</li>
            </ul>
        </div>
        <div class="col-md-6">
            <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/10_img1.jpg') }}">
                <img src="{{ asset('img/maquinarias/gaser/10_img1.jpg') }}" alt="Atadora semi-automática Mod. T-70" class="rounded img-fluid">
            </a>
            <div class="row pt-2 mb-2">
                <div class="col">
                    <a data-fancybox="gallery3" href="{{ asset('img/maquinarias/gaser/10_img2.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/10_img2.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery3" href="{{ asset('img/maquinarias/gaser/10_img3.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/10_img3.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery3" href="{{ asset('img/maquinarias/gaser/10_img4.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/10_img4.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery3" href="{{ asset('img/maquinarias/gaser/10_t70-2.png') }}">
                        <img src="{{ asset('img/maquinarias/gaser/10_t70-2.png') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection