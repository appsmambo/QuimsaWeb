@extends('layouts.main')
@section('title', 'GIL Maquinarias :: Quimsa - Pasión por la calidad')
@section('body')
<section class="container bg-white contenedor py-4 mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias') }}">Maquinarias</a></li>
            <li class="breadcrumb-item active" aria-current="page">GIL</li>
        </ol>
    </nav>
    <div class="row mb-4">
        <div class="col-md-8">
            <h1 class="borde mb-4">
                MAQUINARIAS
            </h1>
        </div>
        <div class="col-md-4 text-center">
            <img src="{{ asset('img/marcas/gil.jpg') }}" alt="" class="img-fluid">
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-6">
            <h3 class="titulo">
                <span>Insensibilizador Pneumático MJO 1201E</span>
            </h3>
            <p>
                <strong>FUNCIÓN:</strong><br>Insensibilizar Bovinos, Equinos y/o Bufalinos;<br><br>
                <strong>CAPACIDAD DE PRODUCCIÓN:</strong><br>hasta 200 animales/h.;<br><br>
                <strong>FUNCIONAMIENTO:</strong><br>Método percursivo con inyección de aire. Por accionamiento neumático, disparando un penetrador contra el córtex del animal causando injuria en el sistema nervioso.
            </p>
        </div>
        <div class="col-md-6">
            <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gil/MJO-1201E.jpg') }}">
                <img src="{{ asset('img/maquinarias/gil/MJO-1201E.jpg') }}" alt="" class="rounded img-fluid">
            </a>
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-6">
            <h3 class="titulo">
                <span>Insensibilizador Pneumático MGO 1301E LH</span>
            </h3>
            <p>
                <strong>FUNCIÓN:</strong><br>Insensibilizar Bovinos, Equinos y/o Bufalinos<br><br>
                <strong>CAPACIDAD DE PRODUCCIÓN:</strong><br>200 animales/h.;<br><br>
                <strong>FUNCIONAMIENTO:</strong><br>Método percursivo con inyección de aire. Por accionamiento neumático, disparando un penetrador contra el córtex del animal causando injuria en el sistema nervioso.
            </p>
        </div>
        <div class="col-md-6">
            <a data-fancybox="gallery2" href="{{ asset('img/maquinarias/gil/MGO-1301E-LH.jpg') }}">
                <img src="{{ asset('img/maquinarias/gil/MGO-1301E-LH.jpg') }}" alt="" class="rounded img-fluid">
            </a>
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-6">
            <h3 class="titulo">
                <span>Insensibilizador HS600 HOGSTUNNER</span>
            </h3>
            <p>
                <strong>FUNCIÓN:</strong><br>Insensibilizar cerdos, ovinos, caprinos, avestruz y/o animales silvestres criados en cautiverio;<br><br>
                <strong>CAPACIDAD DE PRODUCCIÓN:</strong><br>Hasta 140 animales/h.;<br><br>
                <strong>FUNCIONAMIENTO:</strong><br>Método por electro-narcosis. Por contacto eléctrico, efectuando una descarga ajustable es compatible con la estructura del animal. Aplicado detrás de las orejas que causan interrupción en el sitema nervioso.
            </p>
        </div>
        <div class="col-md-6">
            <a data-fancybox="gallery3" href="{{ asset('img/maquinarias/gil/HS600-HOGSTUNNER.jpg') }}">
                <img src="{{ asset('img/maquinarias/gil/HS600-HOGSTUNNER.jpg') }}" alt="" class="rounded img-fluid">
            </a>
            <div class="row pt-2">
                <div class="col-sm-4">
                    <a data-fancybox="gallery3" href="{{ asset('img/maquinarias/gil/HS600-HOGSTUNNER-2.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gil/HS600-HOGSTUNNER-2.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a data-fancybox="gallery3" href="{{ asset('img/maquinarias/gil/HS600-HOGSTUNNER-3.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gil/HS600-HOGSTUNNER-3.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a data-fancybox="gallery3" href="{{ asset('img/maquinarias/gil/HS600-HOGSTUNNER-4.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gil/HS600-HOGSTUNNER-4.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
            </div>
            <h5 class="text-right mt-5">
                <a href="#camaras" class="ver-mas"><strong>Volver</strong></a>
            </h5>
        </div>
    </div>
</section>
@endsection