@extends('layouts.main')
@section('title', 'Mezcladoras - SEYDELMANN :: Quimsa - Pasión por la calidad')
@section('body')
<section class="container bg-white contenedor py-4 mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias') }}">Maquinarias</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias/seydelmann') }}">Seydelmann</a></li>
            <li class="breadcrumb-item active" aria-current="page">Mezcladoras</li>
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
    <div class="row py-4 border-bottom">
        <div class="col-md-6">
            <h3 class="titulo">
                <span>Mezcladoras y molinos mezcladoras</span>
            </h3>
            <p>
                Las mezcladoras garantizan óptimos procesos de trabajo con tiempos de procesamiento mínimos al mezclar materiales, como por ejemplo carne previamente triturada con especias y aditivos para la producción de hamburguesas, embutidos, Kebab, productos vegetales y de queso.<br>
                La innovadora y única geometría de corte de las mezcladoras, mezcladoras del vacío y molinos mezcladoras de Seydelmann permiten un mezclado intenso, rápido y estable y un vaciado sin restos. Todas las mezcladoras, mezcladoras al vacío y molinos mezcladoras se encuentran disponibles con una función de cocción y refrigeración.<br>
                El dispositivo opcional integrable de pesaje que calcula el peso actual de la mezcla, garantiza la adición correcta de los ingredientes. La soldadura sin costuras ni fugas, típica de Seydelmann, así como la construcción maciza inoxidable del soporte de la máquina y de la tolva, convierten la máquina en un aparato robusto, fiable y duradero.
            </p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('img/maquinarias/seydelmann/mezcladoras.jpg') }}" alt="Cúteres" class="rounded img-fluid">
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-12">
            <p>
                <strong>Mezcladoras</strong><br>
            </p>
            <div class="row">
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/MR-600-Mezcladora.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/MR-600-und-700.jpg') }}" alt="" class="rounded img-fluid"><br>MR 600
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/MR-700-Mezcladora.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/MR-600-und-700.jpg') }}" alt="" class="rounded img-fluid"><br>MR 700
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/MR-1000-Mezcladora.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/MR-1000.jpg') }}" alt="" class="rounded img-fluid"><br>MR 1000
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/MR-1300-Mezcladora.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/MR-1300.jpg') }}" alt="" class="rounded img-fluid"><br>MR 1300
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/MR-1800-Mezcladora.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/MR-1800.jpg') }}" alt="" class="rounded img-fluid"><br>MR 1800
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/MR-2500-Mezcladora.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/MR-2500.jpg') }}" alt="" class="rounded img-fluid"><br>MR 2500
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2014/09/MR-3500-Mischer.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/MR-3500.jpg') }}" alt="" class="rounded img-fluid"><br>MR 3500
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/MR-4700-Mezcladora.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/MR-4700.jpg') }}" alt="" class="rounded img-fluid"><br>MR 4700
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-12">
            <p>
                <strong>Mezcladoras al vacío</strong><br><br>
                En las mezcladoras del vacío se extrae el aire durante el proceso de mezclado. Al evitar la entrada de oxígeno se reduce considerablemente la reproducción de microorganismos en el material procesado, reduciéndose asimismo el contenido de gérmenes. El producto resulta más duradero y se mantiene durante más tiempo con un aspecto fresco.<br>
                El mezclado al vacío permite además una mejor absorción de especias, aditivos y sustancias auxiliares, al abrir las células cárnicas. Al reducirse fuertemente la presencia de aire en el producto mezclado, la imagen de corte del producto resulta más densa y clara en el procesamiento posterior.
            </p>
            <div class="row">
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/VMR-600-Mezcladora-de-vac%C3%ADo.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/VMR-600.jpg') }}" alt="" class="rounded img-fluid"><br>VMR 600
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/VMR-1000-Mezcladora-de-vac%C3%ADo.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/VMR-1000.jpg') }}" alt="" class="rounded img-fluid"><br>VMR 1000
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/VMR-1300-Mezcladora-de-vac%C3%ADo.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/VMR-1300-4700.jpg') }}" alt="" class="rounded img-fluid"><br>VMR 1300
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/VMR-1800-Mezcladora-de-vac%C3%ADo.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/VMR-1300-4700.jpg') }}" alt="" class="rounded img-fluid"><br>VMR 1800
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/VMR-2500-Mezcladora-de-vac%C3%ADo.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/VMR-2500_RGB.jpg') }}" alt="" class="rounded img-fluid"><br>VMR 2500
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="https://www.seydelmann.com/wp-content/uploads/2015/04/VMR-3500-ES.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/VMR-3500.jpg') }}" alt="" class="rounded img-fluid"><br>VMR 3500
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="https://www.seydelmann.com/wp-content/uploads/2015/04/VMR-4700-ES.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/MR-47001.jpg') }}" alt="" class="rounded img-fluid"><br>VMR 4700
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-md-12">
            <div class="row">
                <div class="col-sm-6">
                    <p>
                        <strong>Mezcladoras molino</strong><br><br>
                        Las versátiles mezcladoras molino pueden utilizarse tanto como mezcladora racional, como molinos o molinos mezclador. Las diferentes aplicaciones únicamente son posibles con dos máquinas diferentes. Las mezcladoras molino ayudan a ahorrar espacio, electricidad y personal, y se utilizan, por ejemplo, para el mezclado previo, estandarización y picado para la fabricación de productos de hamburguesería, embutido crudo y otro tipo de procesamientos de carne picada.
                    </p>
                </div>
                <div class="col-sm-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jnQVY0SX7Ho?rel=0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/MRG-1300-Mezcladora-picadora.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/MRG-1800-MRG-1300-MRU-1800.jpg') }}" alt="" class="rounded img-fluid"><br>MRG 1300
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/MRG-1800-Mezcladora-picadora.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/MRG-1800-MRG-1300-MRU-1800.jpg') }}" alt="" class="rounded img-fluid"><br>MRG 1800
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/MRU-1300-Mezcladora-picadora.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/MRU-1300.jpg') }}" alt="" class="rounded img-fluid"><br>MRU 1300
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/MRU-1800-Mezcladora-picadora.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/MRG-1800-MRG-1300-MRU-1800.jpg') }}" alt="" class="rounded img-fluid"><br>MRU 1800
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="https://www.seydelmann.com/wp-content/uploads/2016/05/Datenblatt-AMR-1800-EN.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/AMR_1800_2.jpg') }}" alt="" class="rounded img-fluid"><br>AMR 1800
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="https://www.seydelmann.com/wp-content/uploads/2016/07/Datenblatt-AMR-2500-ES.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/MRV-2500.jpg') }}" alt="" class="rounded img-fluid"><br>AMR 2500
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection