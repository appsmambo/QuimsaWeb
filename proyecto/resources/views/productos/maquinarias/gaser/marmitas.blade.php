@extends('layouts.main')
@section('title', 'Marmitas - GASER :: Quimsa - Pasión por la calidad')
@section('body')
<section class="container bg-white contenedor py-4 mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias') }}">Maquinarias</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias/gaser') }}">Gaser</a></li>
            <li class="breadcrumb-item active" aria-current="page">Marmitas</li>
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
                <span>Marmita de cocción Mod. MCA-30 / MCA-60 / MCA-100 / MCA-150 / MCA-200</span>
            </h3>
            <p>
                <strong class="rojo">CARACTERÍSTICAS TÉCNICAS</strong>
            </p>
            <ul>
                <li>Marmita de cocción diseñado para preparación en caliente de todo tipo de cremas, salsas, bechamel, etc.</li>
                <li>Dispone de cámara térmica para transmitir el calor de manera uniforme al preparado a modo similar al “baño maría”, evitando de esta forma el contacto directo de las cremas con las resistencias térmicas.</li>
                <li>La cuba está realizada en acero inoxidable de alta calidad 316 en espesores de 3 y 5 mm, para garantizar un perfecto funcionamiento durante toda la vida útil de la máquina. El resto de la construcción es íntegramente en acero inoxidable tipo 304.</li>
                <li>Para la preparación de la crema la cuba dispone de removedor-rompedor que evita la formación de grumos, así como rascadores laterales y de fondo para impedir que se adhiera el producto.</li>
                <li>Para facilitar la limpieza, la cuba no tiene elementos internos que obstaculicen este proceso.</li>
                <li>Opcional cuba con válvula de salida para productos no pastosos. Basculamiento motorizado para productos más densos.</li>
                <li>Máquina de gran potencia y alto rendimiento debido a la cámara de aislamiento térmico que evita la pérdida de calor.</li>
                <li>Tensión de alimentación 380/400 V trifásico</li>
                <li>Temperatura de funcionamiento hasta 200ºC Control electrónico</li>
                <li>Programador de tiempo y temperatura de cocción.</li>
                <li>Inversor de giro del agitador y variador de velocidad.</li>
                <li>Basculamiento motorizado de cuba.</li>
                <li>Potencia 21 Kw.</li>
            </ul>
        </div>
        <div class="col-md-6">
            <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/54_marmita_.jpg') }}">
                <img src="{{ asset('img/maquinarias/gaser/54_marmita_.jpg') }}" alt="Marmita de cocción Mod. MCA-30 / MCA-60 / MCA-100 / MCA-150 / MCA-200" class="rounded img-fluid">
            </a>
        </div>
    </div>
</section>
@endsection