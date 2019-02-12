@extends('layouts.main')
@section('title', 'Rebozadoras - GASER :: Quimsa - Pasión por la calidad')
@section('body')
<section class="container bg-white contenedor py-4 mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias') }}">Maquinarias</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias/gaser') }}">Gaser</a></li>
            <li class="breadcrumb-item active" aria-current="page">Rebozadoras</li>
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
                <span>Rebozadora-empanadora automática Mod. Compact</span>
            </h3>
            <p>
                <strong class="rojo">CARACTERÍSTICAS TÉCNICAS</strong>
            </p>
            <ul>
                <li>Rebozado y empanado automático.</li>
                <li>Ancho útil: 150 mm.</li>
                <li>Velocidad: 10 m / minuto.</li>
                <li>Producción: 2.000 piezas / hora.</li>
                <li>Potencia del motor: 180 watios.</li>
                <li>Funcionamiento eléctrico monofásico (opcional 120-220V, 50-60 Hz).</li>
                <li>Máquina de sobremesa (mesa opcional).</li>
                <li>Totalmente desmontable para facilitar su limpieza.</li>
                <li>Construida en acero inoxidable y plásticos aptos para la industria alimentaria.</li>
                <li>Fácil mantenimiento.</li>
                <li>Precio económico.</li>
                <li>Peso de la máquina: 55 Kg.</li>
                <li>Medidas de la máquina montada: 1.000 x 485 x 400 mm.</li>
            </ul>
        </div>
        <div class="col-md-6">
            <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/12_img1.jpg') }}">
                <img src="{{ asset('img/maquinarias/gaser/12_img1.jpg') }}" alt="Rebozadora-empanadora automática Mod. Compact" class="rounded img-fluid">
            </a>
            <div class="row pt-2">
                <div class="col">
                    <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/12_img2.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/12_img2.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/12_img3.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/12_img3.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/12_img4.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/12_img4.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-6">
            <a data-fancybox="gallery2" href="{{ asset('img/maquinarias/gaser/13_img1.jpg') }}">
                <img src="{{ asset('img/maquinarias/gaser/13_img1.jpg') }}" alt="Rebozadora-empanadora automática Mod. Mini" class="rounded img-fluid">
            </a>
            <div class="row pt-2 mb-2">
                <div class="col">
                    <a data-fancybox="gallery2" href="{{ asset('img/maquinarias/gaser/13_img2.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/13_img2.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery2" href="{{ asset('img/maquinarias/gaser/13_img3.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/13_img3.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery2" href="{{ asset('img/maquinarias/gaser/13_img4.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/13_img4.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a data-fancybox="gallery2" href="{{ asset('img/maquinarias/gaser/13_img5.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/13_img5.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery2" href="{{ asset('img/maquinarias/gaser/13_img6.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/13_img6.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery2" href="{{ asset('img/maquinarias/gaser/13_img7.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/13_img7.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h3 class="titulo">
                <span>Rebozadora-empanadora automática Mod. Mini</span>
            </h3>
            <p>
                <strong class="rojo">CARACTERÍSTICAS TÉCNICAS</strong>
            </p>
            <ul>
                <li>Rebozado y empanado automático.</li>
                <li>Producción: 2000 a 3000 piezas / hora.</li>
                <li>Velocidad variable de 9 a 15 m / minuto.</li>
                <li>Ancho útil: 150 mm.</li>
                <li>Funcionamiento eléctrico (monofásica 220 volt.).</li>
                <li>Potencia del motor: 250 watios.</li>
                <li>Inversor para la descarga del pan.</li>
                <li>Soplador para el exceso de líquido.</li>
                <li>Caída de las piezas sobre la cinta o bajada por rampa para quitar el exceso de pan.</li>
                <li>Soporte para bandejas a la salida.</li>
                <li>Montada sobre 4 patas con ruedas de Acero Inoxidable.</li>
                <li>Totalmente desmontable para facilitar su limpieza.</li>
                <li>Construida en Acero Inoxidable y plásticos no tóxicos (aptos para industria cárnica).</li>
                <li>Máxima robustez y duración.</li>
                <li>Fácil mantenimiento.</li>
                <li>Precio económico.</li>
                <li>Peso de la máquina: 110 Kg.</li>
                <li>Medidas de la máquina montada: 1.440 x 500 x 1.100 mm.</li>
                <li>Medidas de la máquina con embalaje: 1.450 x 700 x 800 mm.</li>
            </ul>
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-6">
            <h3 class="titulo">
                <span>Rebozadora-empanadora automática Mod. Practic-240</span>
            </h3>
            <p>
                <strong class="rojo">CARACTERÍSTICAS TÉCNICAS</strong>
            </p>
            <ul>
                <li>Rebozado y empanado automático.</li>
                <li>Ancho útil: 240 mm.</li>
                <li>Velocidad variable de 9 a 15 m / minuto.</li>
                <li>Producción: 3.000 a 4.000 piezas / hora.</li>
                <li>Potencia del motor: 370 watios.</li>
                <li>Funcionamiento eléctrico (monofásica 220 volt.).</li>
                <li>Alimentación de pan automática.</li>
                <li>Inversor para la descarga del pan.</li>
                <li>Soplador para el exceso de líquido.</li>
                <li>Salida plana a 960 mm. de altura.</li>
                <li>Montada sobre 4 patas con ruedas de Acero Inoxidable.</li>
                <li>Totalmente desmontable para facilitar su limpieza.</li>
                <li>Construida en Acero Inoxidable y plásticos no tóxicos (aptos para industria cárnica).</li>
                <li>Depósito superior de encolante 15 l.</li>
                <li>Agitador para el encolante.</li>
                <li>Depósito superior de pan 30 Kg.</li>
                <li>Máxima robustez y duración.</li>
                <li>Fácil mantenimiento.</li>
                <li>Peso de la máquina: 150 Kg.</li>
                <li>Medidas de la máquina montada: 1.990 x 680 x 1.640 mm.</li>
                <li>Opcionalmente se acopla una turbina para soplar el pan de la cara superior.</li>
            </ul>
        </div>
        <div class="col-md-6">
            <a data-fancybox="gallery3" href="{{ asset('img/maquinarias/gaser/14_img1.jpg') }}">
                <img src="{{ asset('img/maquinarias/gaser/14_img1.jpg') }}" alt="Rebozadora-empanadora automática Mod. Practic-240" class="rounded img-fluid">
            </a>
            <div class="row pt-2 mb-2">
                <div class="col">
                    <a data-fancybox="gallery3" href="{{ asset('img/maquinarias/gaser/14_img2.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/14_img2.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery3" href="{{ asset('img/maquinarias/gaser/14_img3.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/14_img3.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery3" href="{{ asset('img/maquinarias/gaser/13_img4.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/13_img4.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a data-fancybox="gallery3" href="{{ asset('img/maquinarias/gaser/13_img5.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/13_img5.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery3" href="{{ asset('img/maquinarias/gaser/13_img6.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/13_img6.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery3" href="{{ asset('img/maquinarias/gaser/13_img7.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/13_img7.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-md-6">
            <a data-fancybox="gallery4" href="{{ asset('img/maquinarias/gaser/18_img1.jpg') }}">
                <img src="{{ asset('img/maquinarias/gaser/18_img1.jpg') }}" alt="Rebozadora-empanadora automática Mod. Practic 350" class="rounded img-fluid">
            </a>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/k3wtCr3vxbQ" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-6">
            <h3 class="titulo">
                <span>Rebozadora-empanadora automática Mod. Practic 350</span>
            </h3>
            <p>
                <strong class="rojo">CARACTERÍSTICAS TÉCNICAS</strong>
            </p>
            <ul>
                <li>Rebozado y empanado automático.</li>
                <li>Ancho útil: 350 mm. (sobre pedido puede ser de 400 mm.).</li>
                <li>Velocidad variable de 9 a 15 m / minuto.</li>
                <li>Producción: 5.000 a 12.000 piezas / hora.</li>
                <li>Potencia del motor: 550 watios.</li>
                <li>Funcionamiento eléctrico (monofásica 220 volt.).</li>
                <li>Alimentación de pan automática.</li>
                <li>Inversor para la descarga del pan.</li>
                <li>Soplador para el exceso de líquido.</li>
                <li>Salida plana a 960 mm de altura.</li>
                <li>Montada sobre 4 patas con ruedas de Acero Inoxidable.</li>
                <li>Totalmente desmontable para facilitar su limpieza.</li>
                <li>Construida en Acero Inoxidable y plásticos no tóxicos (aptos para industria cárnica).</li>
                <li>Depósito superior de encolante 30 l.</li>
                <li>Agitador para el encolante.</li>
                <li>Depósito superior de pan 50 Kg.</li>
                <li>Máxima robustez y duración.</li>
                <li>Fácil mantenimiento.</li>
                <li>Peso de la máquina: 200 Kg. aprox.</li>
                <li>Medidas de la máquina montada: 1.985 x 880 x 1.640 mm.</li>
                <li>Opcionalmente se acopla una turbina para soplar el pan de la cara superior.</li>
            </ul>
        </div>
    </div>
</section>
@endsection