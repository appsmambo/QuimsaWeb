@extends('layouts.main')
@section('title', 'ASTECH Maquinarias :: Quimsa - Pasión por la calidad')
@section('body')
<section class="container bg-white contenedor py-4 mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias') }}">Maquinarias</a></li>
            <li class="breadcrumb-item active" aria-current="page">Astech</li>
        </ol>
    </nav>
    <div class="row mb-4">
        <div class="col-md-8">
            <h1 class="borde mb-4">
                MAQUINARIAS
            </h1>
        </div>
        <div class="col-md-4 text-center">
            <img src="{{ asset('img/marcas/astech.png') }}" alt="" class="img-fluid">
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-6">
            <a href="{{ url('/productos/maquinarias/astech/sierra-corte-automatico-sra') }}">
                <img src="{{ asset('img/maquinarias/astech/sra-sierra-automatica-astech-04-2.jpg') }}" alt="Sierra de corte automático SRA" class="rounded img-fluid">
            </a>
        </div>
        <div class="col-md-6">
            <h3 class="titulo">
                <a href="{{ url('/productos/maquinarias/astech/sierra-corte-automatico-sra') }}">
                    <span>Sierra de corte automático SRA</span>
                </a>
            </h3>
            <p>
                Astech ha diseñado una sierra automática para cortar producto fresco y congelado con o sin hueso, ofreciendo elevada producción por operario, precisión en el grosor de los cortes y ante todo la máxima seguridad durante el uso.
                <br><br>
                <strong class="rojo">DISEÑO 2.0</strong> Astech está constantemente rediseñando la sierra automática SRA para estar en línea con las necesidades de nuestros clientes. El nuevo modelo lanzado en 2018 cuenta con nuevas funcionalidades que marcan la diferencia:
            </p>
            <p class="text-right">
                <a class="ver-mas" href="{{ url('/productos/maquinarias/astech/sierra-corte-automatico-sra') }}">
                    <strong>Ver más &gt;</strong>
                </a>
            </p>
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-6">
            <h3 class="titulo">
                <a href="{{ url('/productos/maquinarias/astech/sierra-corte-grados-sra-d') }}">
                    <span>Sierra de corte a grados SRA-D</span>
                </a>
            </h3>
            <p>
                La sierra automática de corte a grados presenta todas las ventajas del modelo SRA pero con la nueva función que permite inclinar la hoja de sierra y obtener cortes de mayor sección a partir del mismo producto inicial.
                <br><br>
                Los modelos SRA-D i SRA-FD mantienen el cumplimiento de todos los requisitos de <strong>calidad en el corte y en el proceso</strong>, además de ofrecer la <strong>máxima seguridad</strong> durante el uso.
            </p>
            <p class="text-right">
                <a class="ver-mas" href="{{ url('/productos/maquinarias/astech/sierra-corte-grados-sra-d') }}">
                    <strong>Ver más &gt;</strong>
                </a>
            </p>
        </div>
        <div class="col-md-6">
            <a class="ver-mas" href="{{ url('/productos/maquinarias/astech/sierra-corte-grados-sra-d') }}">
                <img src="{{ asset('img/maquinarias/astech/srag-sierra-de-corte-a-grados-0.jpg') }}" alt="Sierra de corte a grados SRA-D" class="rounded img-fluid">
            </a>
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-6">
            <a href="{{ url('/productos/maquinarias/astech/cortadora-continuo-cc-2') }}">
                <img src="{{ asset('img/maquinarias/astech/cc2-cortadora-en-continuo-astech-09.jpg') }}" alt="Cortadora en continuo CC-2" class="rounded img-fluid">
            </a>
        </div>
        <div class="col-md-6">
            <h3 class="titulo">
                <a href="{{ url('/productos/maquinarias/astech/cortadora-continuo-cc-2') }}">
                    <span>Cortadora en continuo CC-2</span>
                </a>
            </h3>
            <p>
                Para el corte longitudinal de productos, Astech ha diseñado la cortadora en continuo CC2. Esta máquina realiza un corte longitudinal (centrado o descentrado) a lo largo de un producto, como p.ej. pies de cerdo, patas de vacuno, codillos, bloques, etc.
                <br><br>
                La máquina se carga manualmente y el corte se realiza en continuo mediante una sierra cinta, de forma totalmente segura.
            </p>
            <p class="text-right">
                <a class="ver-mas" href="{{ url('/productos/maquinarias/astech/cortadora-continuo-cc-2') }}">
                    <strong>Ver más &gt;</strong>
                </a>
            </p>
        </div>
    </div>
</section>
@endsection