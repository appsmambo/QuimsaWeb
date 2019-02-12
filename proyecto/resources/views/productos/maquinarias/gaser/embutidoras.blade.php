@extends('layouts.main')
@section('title', 'Embutidoras - GASER :: Quimsa - Pasión por la calidad')
@section('body')
<section class="container bg-white contenedor py-4 mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias') }}">Maquinarias</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias/gaser') }}">Gaser</a></li>
            <li class="breadcrumb-item active" aria-current="page">Embutidoras</li>
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
    <div class="row py-4 border-bottom">
        <div class="col-md-6">
            <h3 class="titulo">
                <span>Embutidora eléctrica Mod. EL-12</span>
            </h3>
            <p>
                <strong class="rojo">CARACTERÍSTICAS TÉCNICAS</strong>
            </p>
            <ul>
                <li>Construida en Acero Inoxidable.</li>
                <li>Tapa y pistón de plástico (apto para alimentación).</li>
                <li>Capacidad: 12 litros.</li>
                <li>Potencia motor 375 watios.</li>
                <li>Velocidad regulable.</li>
                <li>Descompresión automática del cilindro.</li>
                <li>Corriente monofásica 230 voltios, 50 Hz.</li>
                <li>Funciona sin aceite.</li>
                <li>Cilindro y pistón desmontable.</li>
                <li>Altura de salida 1.090 mm.</li>
                <li>Embudos de Ø15, Ø20 y Ø30 mm.</li>
                <li>Medidas: 488 x 370 x 1.128 mm.</li>
                <li>Peso: 54 Kg.</li>
            </ul>
        </div>
        <div class="col-md-6">
            <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/19_img1.jpg') }}">
                <img src="{{ asset('img/maquinarias/gaser/19_img1.jpg') }}" alt="Embutidora eléctrica Mod. EL-12" class="rounded img-fluid">
            </a>
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-6">
            <a data-fancybox="gallery2" href="{{ asset('img/maquinarias/gaser/38_img1.jpg') }}">
                <img src="{{ asset('img/maquinarias/gaser/38_img1.jpg') }}" alt="Embutidoras hidráulicas de pistón Mod. Económica 20L 30L 50L" class="rounded img-fluid">
            </a>
        </div>
        <div class="col-md-6">
            <h3 class="titulo">
                <span>Embutidoras hidráulicas de pistón Mod. Económica 20L 30L 50L</span>
            </h3>
            <p>
                <strong class="rojo">CARACTERÍSTICAS TÉCNICAS</strong>
            </p>
            <ul>
                <li>Construidas en Acero Inoxidable.</li>
                <li>Cilindro desmontable para su limpieza.</li>
                <li>Pistón interior en Acero Inoxidable y plástico.</li>
                <li>Tapa de plástico fijada por cuatro columnas.</li>
                <li>Regulador de presión con manómetro.</li>
                <li>Regulador de caudal para tener velocidad constante.</li>
                <li>Rodillera con fijación.</li>
                <li>Depósito de aceite independiente y refrigerado, con indicador de nivel.</li>
                <li>Se pueden colocar en posición horizontal, apoyadas por su cara trasera.</li>
                <li>Parte superior desmontable para guardarla debajo de una mesa.</li>
                <li>Mandos a 24 voltios.</li>
                <li>Equipo potente para asegurar su buen funcionamiento con cualquier producto.</li>
                <li>Apoyo sobre dos ruedas y dos patas fijas.</li>
                <li>Instalación hidráulica con mangueras flexibles de alta presión.</li>
                <li>Descompresión automática del cilindro.</li>
                <li>Cilindro hidráulico con vástago y tuerca en Acero Inoxidable.</li>
                <li>Embudos de Ø15, Ø20 y Ø30 mm.</li>
                <li>Aceite incorporado.</li>
                <li>Manejo muy sencillo.</li>
                <li>Mínimo mantenimiento.</li>
            </ul>
            <p>
                Mod. ECONÓMICA 20L (Motor 750 watios, medidas máquina: 501 x 371 x 1.200 mm, peso neto: 97 Kgs.)<br>
                Mod. ECONÓMICA 30L (Motor 1.000 watios, medidas máquina: 541 x 406 x 1.207 mm, peso neto: 133 Kgs.)<br>
                Mod. ECONÓMICA 50L (Motor 1.470 watios, medidas máquina: 591 x 476 x 1.220 mm, peso neto: 205 Kgs.)<br>
                CALIDAD AL MÍNIMO PRECIO
            </p>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-md-6">
            <h3 class="titulo">
                <span>Embutidoras hidráulicas de pistón Mod. E-30L</span>
            </h3>
            <p>
                <strong class="rojo">CARACTERÍSTICAS TÉCNICAS</strong>
            </p>
            <ul>
                <li>Construidas en Acero Inoxidable, incluida la tapa.</li>
                <li>Cilindro torneado y rectificado.</li>
                <li>Pistón interior desmontable para limpiarlo con facilidad.</li>
                <li>Desagüe del cilindro, para su limpieza.</li>
                <li>Regulador de presión con manómetro.</li>
                <li>Regulador de caudal para tener velocidad constante.</li>
                <li>Depósito de aceite independiente y refrigerado con indicador de nivel.</li>
                <li>Se pueden colocar en posición horizontal, apoyadas por su cara trasera.</li>
                <li>Mandos a 24 voltios.</li>
                <li>Motor potente para asegurar su buen funcionamiento.</li>
                <li>Apoyo sobre dos ruedas y dos patas fijas.</li>
                <li>Opcionalmente pueden llevar otras 2 ruedas giratorias exteriores.</li>
                <li>Instalación hidráulica con mangueras flexibles de alta presión.</li>
                <li>Embudos de Ø15, Ø20 y Ø30 mm.</li>
                <li>Descompresión automática del cilindro.</li>
                <li>Cilindro hidráulico con vástago y tuerca de Acero Inoxidable.</li>
                <li>Aceite incorporado.</li>
            </ul>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/FPJyt-pWmGA" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-6">
            <a data-fancybox="gallery3" href="{{ asset('img/maquinarias/gaser/11_img1.jpg') }}">
                <img src="{{ asset('img/maquinarias/gaser/11_img1.jpg') }}" alt="Embutidoras hidráulicas de pistón Mod. E-30L" class="rounded img-fluid">
            </a>
            <div class="row pt-2 mb-2">
                <div class="col">
                    <a data-fancybox="gallery3" href="{{ asset('img/maquinarias/gaser/11_img2.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/11_img2.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery3" href="{{ asset('img/maquinarias/gaser/11_img3.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/11_img3.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery3" href="{{ asset('img/maquinarias/gaser/11_img4.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/11_img4.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection