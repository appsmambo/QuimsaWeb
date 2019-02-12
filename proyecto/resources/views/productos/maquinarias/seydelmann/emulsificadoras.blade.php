@extends('layouts.main')
@section('title', 'Emulsificadoras - SEYDELMANN :: Quimsa - Pasión por la calidad')
@section('body')
<section class="container bg-white contenedor py-4 mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias') }}">Maquinarias</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias/seydelmann') }}">Seydelmann</a></li>
            <li class="breadcrumb-item active" aria-current="page">Emulsificadoras</li>
        </ol>
    </nav>
    <div class="row mb-4">
        <div class="col-md-8">
            <h1 class="borde mb-4">
                MAQUINARIAS
            </h1>
        </div>
        <div class="col-md-4 text-center">
            <a href="{{ url('/productos/maquinarias/seydelmann') }}">
                <img src="{{ asset('img/marcas/seydelmann.jpg') }}" alt="" class="img-fluid">
            </a>
        </div>
    </div>
    <div class="py-4 border-bottom">
        <h3 class="titulo">
            <span>Emulsificadoras</span>
        </h3>
        <p>
            Los ‘Konti-Kutter’ de Seydelmann son Emulsificadoras con una técnica única en el mercado: A diferencia de las habituales placas perforadas / sistemas de cuchillas, el producto a cortar previamente mezclado es aspirado verticalmente por un sistema de placas perforadas y de corte sobrepuestas. Éstas giran sin contacto con una distancia de separación mínima entre sí. La fricción de metal sobre metal se evita completamente, de forma que se impide una contaminación del material a cortar y se reduce considerablemente el desgaste de las placas.<br>
            El grado de finura de la emulsión se determina mediante el número de placas perforadas / de corte empleadas, así como por el número y tamaño de los agujeros. El sistema permite un grado de finura muy elevado (utilizando hasta siete placas de corte), pero también un granulado basto. El Konti-Kutter es la única máquina capaz de producir en una operación de trabajo una emulsión fina con relleno.
        </p>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-12">
            <p>
                <strong>Konti-Kutter</strong>
            </p>
            <div class="row">
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/KK-140-Emulsificadora.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/KK-140.jpg') }}" alt="" class="rounded img-fluid"><br>KK 140
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/KK-250-Emulsificadora.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/KK-250.jpg') }}" alt="" class="rounded img-fluid"><br>KK 250
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-md-12">
            <p>
                <strong> Konti-Kutter de vacío</strong><br><br>
                La capacidad de tolva de los molinos mezclador para la artesanía es de 70 y 170 l. Su dispositivo de mezclado está equipado con dos potentes brazos u opcionalmente con palas. En el dispositivo de mezclado se pueden mezclar, con el tornillo sin fin desconectado, entre 50 y 100 kg, según modelo. Si el tornillo sin fin se encuentra conectado, el dispositivo de mezclado funciona como alimentador automático. Con la marcha atrás breve del tornillo sin fin de trabajo se pueden añadir siempre que se desee cantidades mínimas de producto, garantizándose así una mezcla absolutamente homogénea.
            </p>
            <div class="row">
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="https://www.seydelmann.com/wp-content/uploads/2016/05/Neuheitenblatt-KK-254-EN.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/KK_254_2.jpg') }}" alt="" class="rounded img-fluid"><br>KK 254
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection