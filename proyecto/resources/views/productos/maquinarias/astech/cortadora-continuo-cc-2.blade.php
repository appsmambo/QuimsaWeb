@extends('layouts.main')
@section('title', 'Cortadora en continuo CC-2 - ASTECH :: Quimsa - Pasión por la calidad')
@section('body')
<section class="container bg-white contenedor py-4 mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias') }}">Maquinarias</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias/astech') }}">Astech</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cortadora en continuo CC-2</li>
        </ol>
    </nav>
    <div class="row mb-4">
        <div class="col-md-6">
            <h1 class="borde mb-4">
                MAQUINARIAS
            </h1>
        </div>
        <div class="col-md-6 text-center">
            <a href="{{ url('/productos/maquinarias/astech') }}">
                <img src="{{ asset('img/marcas/astech.png') }}" alt="" class="img-fluid">
            </a>
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-6">
            <img src="{{ asset('img/maquinarias/astech/cc2-cortadora-en-continuo-astech-09.jpg') }}" alt="Cortadora en continuo CC-2" class="rounded img-fluid">
        </div>
        <div class="col-md-6">
            <h3 class="titulo">
                <span>Cortadora en continuo CC-2</span>
            </h3>
            <p>
                Para el corte longitudinal de productos, Astech ha diseñado la cortadora en continuo CC2. Esta máquina realiza un corte longitudinal (centrado o descentrado) a lo largo de un producto, como p.ej. pies de cerdo, patas de vacuno, codillos, bloques, etc.
                <br><br>
                La máquina se carga manualmente y el corte se realiza en continuo mediante una sierra cinta, de forma totalmente segura.
            </p>
        </div>
    </div>
    <div class="row py-4 justify-content-md-center border-bottom">
        <div class="col-md-9">
            <p>
                <strong class="rojo">VENTAJAS DE LA CORTADORA CC2</strong><br>
                <strong>CALIDAD DE CORTE.</strong> Productos guiados lateralmente durante todo el recorrido y velocidad de corte constante.
                <br><br>
                <strong>SEGURIDAD.</strong> Guiado automático de los productos hasta la zona de corte que queda totalmente protegida e inaccesible para el usuario durante el funcionamiento.
                <br><br>
                <strong>ROBUSTEZ.</strong> Chasis fabricado con tubo y chapas de elevado espesor que evita las vibraciones y ayuda a obtener un corte limpio.
                <br><br>
                <img src="{{ asset('img/maquinarias/astech/cc2-cortadora-en-continuo-astech-01.jpg') }}" alt="" class="rounded img-fluid">
            </p>
        </div>
    </div>
    <div class="row py-4 justify-content-md-center">
        <div class="col-md-6">
            <p>
                <strong class="rojo">CARACTERÍSTICAS TÉCNICAS</strong>
            </p>
            <table class="table table-bordered table-sm">
                <tbody>
                    <tr>
                        <td colspan="2"><strong>CC2</strong></td>
                    </tr>
                    <tr>
                        <td>Dimensiones exteriores</td>
                        <td class="text-center">2210 x 950 x h=1900 mm</td>
                    </tr>
                    <tr>
                        <td>Altura con la tapa abierta</td>
                        <td class="text-center">2700 mm</td>
                    </tr>
                    <tr>
                        <td>Altura descarga producto</td>
                        <td class="text-center">725 ± 40 mm</td>
                    </tr>
                    <tr>
                        <td>Potencia</td>
                        <td class="text-center">3,6 kW</td>
                    </tr>
                    <tr>
                        <td>Tensión</td>
                        <td class="text-center">400V III 50 Hz</td>
                    </tr>
                    <tr><td colspan="2">&nbsp;&nbsp;&nbsp;</td></tr>
                    <tr>
                        <td colspan="2"><strong>Producto</strong></td>
                    </tr>
                    <tr>
                        <td>Altura máxima</td>
                        <td class="text-center">300 mm</td>
                    </tr>
                    <tr>
                        <td>Rango de anchura</td>
                        <td class="text-center">30-200 mm</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection