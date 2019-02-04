@extends('layouts.main')
@section('title', 'FRIGOIMPIANTI Maquinarias :: Quimsa - Pasión por la calidad')
@section('body')
<section class="container bg-white contenedor py-4 mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias') }}">Maquinarias</a></li>
            <li class="breadcrumb-item active" aria-current="page">Frigoimpianti</li>
        </ol>
    </nav>
    <div class="row mb-4">
        <div class="col-md-8">
            <h1 class="borde mb-4">
                MAQUINARIAS
            </h1>
        </div>
        <div class="col-md-4 text-center">
            <img src="{{ asset('img/marcas/frigoimpianti.png') }}" alt="" class="img-fluid">
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-6">
            <a href="{{ url('/productos/maquinarias/frigoimpianti/minicamaras') }}">
                <img src="{{ asset('img/maquinarias/frigoimpianti/minicelle-MTS400-31.jpg') }}" alt="Minicámaras de secado curado y ahumado" class="rounded img-fluid">
            </a>
        </div>
        <div class="col-md-6">
            <h3 class="titulo">
                <a href="{{ url('/productos/maquinarias/frigoimpianti/minicamaras') }}">
                    <span>MINICÁMARAS DE SECADO, CURADO Y AHUMADO</span>
                </a>
            </h3>
            <p>
                Mini camaras para secar, madurar y ahumar embutidos. Para los que necesitan una pequeña produccion profesional.
                <br><br>
                Estas instalaciones están pensadas para todos aquellos que necesitan secar y curar cantidades pequeñas y medianas de producto, con extrema sencillez y con los mismos resultados de una instalación industrial.
            </p>
            <p class="text-right">
                <a class="ver-mas" href="{{ url('/productos/maquinarias/frigoimpianti/minicamaras') }}">
                    <strong>Ver más &gt;</strong>
                </a>
            </p>
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-6">
            <h3 class="titulo">
                <a href="{{ url('/productos/maquinarias/frigoimpianti/tuneles') }}">
                    <span>TÚNELES PARA LA PASTEURIZACIÓN, EL ENFRIAMIENTO Y LA ULTRACONGELACIÓN</span>
                </a>
            </h3>
            <p>
                Túneles para enfriar, congelar, pasteurizar y fermentar cualquier tipo de producto. Nuestros túneles estan planeados y realizados para las necesidades del clienta final.
                <br><br>
                Todos nuestros túneles se proyectan y realizan en función de las exigencias del cliente.
            </p>
            <p class="text-right">
                <a class="ver-mas" href="{{ url('/productos/maquinarias/frigoimpianti/tuneles') }}">
                    <strong>Ver más &gt;</strong>
                </a>
            </p>
        </div>
        <div class="col-md-6">
            <a href="{{ url('/productos/maquinarias/frigoimpianti/tuneles') }}">
                <img src="{{ asset('img/maquinarias/frigoimpianti/doppia-spirale-tunnel.jpg') }}" alt="Túneles para la pasteurización, el enfriamiento y la ultracongelación" class="rounded img-fluid">
            </a>
        </div>
    </div>
</section>
@endsection