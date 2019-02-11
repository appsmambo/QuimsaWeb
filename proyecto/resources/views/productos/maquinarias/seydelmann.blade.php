@extends('layouts.main')
@section('title', 'SEYDELMANN Maquinarias :: Quimsa - Pasión por la calidad')
@section('body')
<section class="container bg-white contenedor py-4 mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias') }}">Maquinarias</a></li>
            <li class="breadcrumb-item active" aria-current="page">Seydelmann</li>
        </ol>
    </nav>
    <div class="row mb-4">
        <div class="col-md-8">
            <h1 class="borde mb-4">
                MAQUINARIAS
            </h1>
        </div>
        <div class="col-md-4 text-center">
            <img src="{{ asset('img/marcas/seydelmann.jpg') }}" alt="" class="img-fluid">
        </div>
    </div>
    <div class="row py-4">
        <div class="col-md-4 mb-2">
            <div class="card h-100 d-inline-block">
                <a href="{{ url('/productos/maquinarias/seydelmann/cuteres') }}">
                    <img src="{{ asset('img/maquinarias/seydelmann/cuteres.jpg') }}" alt="Cúteres" class="rounded img-fluid">
                </a>
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ url('/productos/maquinarias/seydelmann/cuteres') }}"><strong class="rojo">CÚTERES</strong></a></h5>
                    <p class="card-text">
                        Cúteres de obrador<br>
                        Cúteres industriales<br>
                        Accesorios
                    </p>
                    <a class="ver-mas" href="{{ url('/productos/maquinarias/seydelmann/cuteres') }}">
                        <strong>Ver más &gt;</strong>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-2">
            <div class="card h-100 d-inline-block">
                <a href="{{ url('/productos/maquinarias/seydelmann/mezcladoras') }}">
                    <img src="{{ asset('img/maquinarias/seydelmann/mezcladoras.jpg') }}" alt="Mezcladoras" class="rounded img-fluid">
                </a>
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ url('/productos/maquinarias/seydelmann/mezcladoras') }}"><strong class="rojo">MEZCLADROAS</strong></a></h5>
                    <p class="card-text">
                        Mezcladoras<br>
                        Mezcladoras al vacío<br>
                        Mezcladoras molino
                    </p>
                    <a class="ver-mas" href="{{ url('/productos/maquinarias/seydelmann/mezcladoras') }}">
                        <strong>Ver más &gt;</strong>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-2">
            <div class="card h-100 d-inline-block">
                <a href="{{ url('/productos/maquinarias/seydelmann/molinos') }}">
                    <img src="{{ asset('img/maquinarias/seydelmann/molinos.jpg') }}" alt="Molinos" class="rounded img-fluid">
                </a>
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ url('/productos/maquinarias/seydelmann/molinos') }}"><strong class="rojo">MOLINOS</strong></a></h5>
                    <p class="card-text">
                        Molinos de obrador<br>
                        Molinos industriales<br>
                        Accesorios
                    </p>
                    <a class="ver-mas" href="{{ url('/productos/maquinarias/seydelmann/molinos') }}">
                        <strong>Ver más &gt;</strong>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-2">
            <div class="card h-100 d-inline-block">
                <a href="{{ url('/productos/maquinarias/seydelmann/emulsificadoras') }}">
                    <img src="{{ asset('img/maquinarias/seydelmann/emulsificadoras.jpg') }}" alt="Emulsificadoras" class="rounded img-fluid">
                </a>
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ url('/productos/maquinarias/seydelmann/emulsificadoras') }}"><strong class="rojo">EMULSIFICADORAS</strong></a></h5>
                    <p class="card-text">Los ‘Konti-Kutter’ de Seydelmann son Emulsificadoras con una técnica única en el mercado ...</p>
                    <a class="ver-mas" href="{{ url('/productos/maquinarias/seydelmann/emulsificadoras') }}">
                        <strong>Ver más &gt;</strong>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-2">
            <div class="card h-100 d-inline-block">
                <a href="{{ url('/productos/maquinarias/seydelmann/lineas-de-produccion') }}">
                    <img src="{{ asset('img/maquinarias/seydelmann/lineas-produccion.jpg') }}" alt="Líneas de producción" class="rounded img-fluid">
                </a>
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ url('/productos/maquinarias/seydelmann/lineas-de-produccion') }}"><strong class="rojo">LÍNEAS DE PRODUCCIÓN</strong></a></h5>
                    <p class="card-text">Líneas de producción para productos de carne picada, hamburguesas y embutido crudo ...</p>
                    <a class="ver-mas" href="{{ url('/productos/maquinarias/seydelmann/lineas-de-produccion') }}">
                        <strong>Ver más &gt;</strong>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection