@extends('layouts.main')
@section('title', 'GASER Maquinarias :: Quimsa - Pasión por la calidad')
@section('body')
<section class="container bg-white contenedor py-4 mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias') }}">Maquinarias</a></li>
            <li class="breadcrumb-item active" aria-current="page">Gaser</li>
        </ol>
    </nav>
    <div class="row mb-4">
        <div class="col-md-8">
            <h1 class="borde mb-4">
                MAQUINARIAS
            </h1>
        </div>
        <div class="col-md-4 text-center">
            <img src="{{ asset('img/marcas/gaser.png') }}" alt="" class="img-fluid">
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-3">
            <div class="card h-100 d-inline-block">
                <a href="{{ url('/productos/maquinarias/gaser/rebozadoras') }}">
                    <img src="{{ asset('img/maquinarias/gaser/arrebossadores-2-22.jpg') }}" class="card-img-top" alt="">
                </a>
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ url('/productos/maquinarias/gaser/rebozadoras') }}"><strong class="rojo">REBOZADORAS</strong></a></h5>
                    <p class="card-text">Toda una gama de máquinas rebozadoras que van desde el modelo de sobremesa hasta el modelo superior ...</p>
                    <a class="ver-mas" href="{{ url('/productos/maquinarias/gaser/rebozadoras') }}">
                        <strong>Ver más &gt;</strong>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100 d-inline-block">
                <img src="{{ asset('img/maquinarias/gaser/embutidores-2-32.jpg') }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><strong class="rojo">EMBUTIDORAS</strong></h5>
                    <p class="card-text">Varios modelos de embutidoras hidráulicas: 12, 20, 30 y 50 litros. Con cilindro desmontable para facilitar la ...</p>
                    <a class="ver-mas" href="{{ url('/productos/maquinarias/gaser/embutidoras') }}">
                        <strong>Ver más &gt;</strong>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100 d-inline-block">
                <img src="{{ asset('img/maquinarias/gaser/lligadora-42.jpg') }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><strong class="rojo">ATADORA</strong></h5>
                    <p class="card-text">Atadora semi-automática para cualquier tipo de tripa, de hilo continuo, con velocidad regulable, que no necesita corriente ...</p>
                    <a class="ver-mas" href="{{ url('/productos/maquinarias/gaser/atadora') }}">
                        <strong>Ver más &gt;</strong>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100 d-inline-block">
                <img src="{{ asset('img/maquinarias/gaser/talladora-52.jpg') }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><strong class="rojo">CORTADORA</strong></h5>
                    <p class="card-text">Cortadora manual de porciones de embutido fresco con excéntricas intercambiables para obtener diferentes largos de salchicha hasta ...</p>
                    <a class="ver-mas" href="{{ url('/productos/maquinarias/gaser/cortadora') }}">
                        <strong>Ver más &gt;</strong>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-3">
            <div class="card h-100 d-inline-block">
                <img src="{{ asset('img/maquinarias/gaser/porcionadores-2-62.jpg') }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><strong class="rojo">PORCIONADORES</strong></h5>
                    <p class="card-text">Dos modelos de porcionadores de carne picada: semi-automático y automático. Muy versátiles, para funcionar a través de ...</p>
                    <a class="ver-mas" href="{{ url('/productos/maquinarias/gaser/porcionadores') }}">
                        <strong>Ver más &gt;</strong>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100 d-inline-block">
                <img src="{{ asset('img/maquinarias/gaser/marmita-72-72.jpg') }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><strong class="rojo">MARMITAS</strong></h5>
                    <p class="card-text">Diferentes modelos de marmitas de cocción y amasado desde 30 litros hasta 200 litros. Con variador de ...</p>
                    <a class="ver-mas" href="{{ url('/productos/maquinarias/gaser/marmitas') }}">
                        <strong>Ver más &gt;</strong>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100 d-inline-block">
                <img src="{{ asset('img/maquinarias/gaser/img-20180827-wa0000-copia-82.jpg') }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><strong class="rojo">FREIDORAS</strong></h5>
                    <p class="card-text">Freidoras continuas fabricada íntegramente en acero inoxidable con un nuevo sistema de palas en el tren de ...</p>
                    <a class="ver-mas" href="{{ url('/productos/maquinarias/gaser/freidoras') }}">
                        <strong>Ver más &gt;</strong>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100 d-inline-block">
                <img src="{{ asset('img/maquinarias/gaser/grapadores-102.jpg') }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><strong class="rojo">GRAPADORAS</strong></h5>
                    <p class="card-text">Grapadoras neumáticas de doble y triple clipado a baja presión para todo tipo de tripa.</p>
                    <a class="ver-mas" href="{{ url('/productos/maquinarias/gaser/grapadoras') }}">
                        <strong>Ver más &gt;</strong>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-3">
            <div class="card h-100 d-inline-block">
                <img src="{{ asset('img/maquinarias/gaser/picadores-92.jpg') }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><strong class="rojo">PICADORAS</strong></h5>
                    <p class="card-text">Construidas totalmente en acero inoxidable con sistemas de simple, doble y triple corte para picar todo tipo ...</p>
                    <a class="ver-mas" href="{{ url('/productos/maquinarias/gaser/picadoras') }}">
                        <strong>Ver más &gt;</strong>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100 d-inline-block">
                <img src="{{ asset('img/maquinarias/gaser/serres-112.jpg') }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><strong class="rojo">SIERRAS</strong></h5>
                    <p class="card-text">Construidas totalmente en acero inoxidable con diferentes gruesos y alturas de corte. Ideal para todo tipo de ...</p>
                    <a class="ver-mas" href="{{ url('/productos/maquinarias/gaser/sierras') }}">
                        <strong>Ver más &gt;</strong>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100 d-inline-block">
                <img src="{{ asset('img/maquinarias/gaser/amassadores-122.jpg') }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><strong class="rojo">AMASADORAS</strong></h5>
                    <p class="card-text">Construidas totalmente en acero inoxidable. Pueden amasar y mezclar. Según modelo puede incluir programador digital de ciclos.</p>
                    <a class="ver-mas" href="{{ url('/productos/maquinarias/gaser/amasadoras') }}">
                        <strong>Ver más &gt;</strong>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100 d-inline-block">
                <img src="{{ asset('img/maquinarias/gaser/cutters-132.jpg') }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><strong class="rojo">CÚTTERS</strong></h5>
                    <p class="card-text">Máquinas construidas totalmente en acero inoxidable para procesos de picar y mezclar tanto de productos congelados como ...</p>
                    <a class="ver-mas" href="{{ url('/productos/maquinarias/gaser/cutters') }}">
                        <strong>Ver más &gt;</strong>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-3">
            <div class="card h-100 d-inline-block">
                <img src="{{ asset('img/maquinarias/gaser/ec120l-portada-142.jpg') }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><strong class="rojo">EMBUTIDORA CONTINUA</strong></h5>
                    <p class="card-text">Máquina embutidora continua al vacío con retorcedor, mano automática y porcionador incluidos. Es una máquina compacta de ...</p>
                    <a class="ver-mas" href="{{ url('/productos/maquinarias/gaser/embutidora-continua') }}">
                        <strong>Ver más &gt;</strong>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100 d-inline-block">
                <img src="{{ asset('img/maquinarias/gaser/251-x-251-2-162.jpg') }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><strong class="rojo">FILETEADORA</strong></h5>
                    <p class="card-text">Máquina compacta de sobremesa para cortar pechugas de todo tipo con una producción de hasta 300 kg ...</p>
                    <a class="ver-mas" href="{{ url('/productos/maquinarias/gaser/fileteadora') }}">
                        <strong>Ver más &gt;</strong>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection