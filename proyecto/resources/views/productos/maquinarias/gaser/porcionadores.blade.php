@extends('layouts.main')
@section('title', 'Porcionadores - GASER :: Quimsa - Pasión por la calidad')
@section('body')
<section class="container bg-white contenedor py-4 mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias') }}">Maquinarias</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias/gaser') }}">Gaser</a></li>
            <li class="breadcrumb-item active" aria-current="page">Porcionadores</li>
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
                <span>Porcionador semi-automático para carne picada Mod. PMT</span>
            </h3>
            <p>
                <strong class="rojo">CARACTERÍSTICAS TÉCNICAS</strong>
            </p>
            <ul>
                <li>Construido en Acero Inoxidable.</li>
                <li>Con cinta interior traccionada con inclinación y velocidad regulable.</li>
                <li>Las porciones son regulables, variando la longitud o cambiando la boquilla.</li>
                <li>Consume papel en bobinas.</li>
                <li>Perfecta presentación del producto.</li>
                <li>Corte del papel y porción de carne con sistema manual.</li>
                <li>Potencia eléctrica: máxima 370 watios.</li>
                <li>Corriente eléctrica monofásica 230 V, 50 / 60 Hz.</li>
                <li>Medidas: 470 x 360 x 500 mm.</li>
                <li>Peso: 50 Kg.</li>
            </ul>
            <p>
                PUEDE FORMAR PORCIONES DE HILOS, PASTILLAS O CILINDROS DE CARNE PICADA (Con soporte de papel)
                <br><br>
                ACOPLAMIENTOS POSIBLES A EMBUTIDORA O PICADORA 98:<br>
                - En cualquier acoplamiento el largo máximo es de 220 mm y el grueso máximo para pastillas o cilindros es de 30 mm.<br>
                - Para porciones de hilos el grueso depende del caudal de salida de la picadora.
                <br><br>
                ACOPLADO A EMBUTIDORA:<br>
                - Puede formar pastillas o cilindros de 100 a 115 mm de ancho según pedido.
                <br><br>
                ACOPLADO A PICADORA 98:<br>
                - Con salida para hilos el ancho de la porción es de 115 mm.<br>
                - Con boca formadora simple para pastilla (ancho 80 mm).<br>
                - Con boca formadora especial para pastilla o cilindros (ancho de 100 a 115 mm según pedido).
                <br><br>
                <strong>CONSUMIBLES</strong>
            </p>
            <table class="table table-striped">
                <tr>
                    <td colspan="2"><strong>Bobinas para porcionador PMT y PNT-120</strong></td>
                </tr>
                <tr>
                    <td>PBL108</td>
                    <td>Bobina papel blanco Ref. 108</td>
                </tr>
                <tr>
                    <td>PBL120</td>
                    <td>Bobina papel blanco Ref. 120</td>
                </tr>
            </table>
        </div>
        <div class="col-md-6">
            <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/21_img1.jpg') }}">
                <img src="{{ asset('img/maquinarias/gaser/21_img1.jpg') }}" alt="Porcionador semi-automático para carne picada Mod. PMT" class="rounded img-fluid">
            </a>
            <div class="row pt-2 mb-2">
                <div class="col">
                    <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/21_img2.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/21_img2.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/21_img3.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/21_img3.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/21_img4.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/21_img4.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/21_img5.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/21_img5.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/21_img6.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/21_img6.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/21_img7.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/21_img7.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/21_img8.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/21_img8.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/21_img9.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/21_img9.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/21_pmt-pnt.png') }}">
                        <img src="{{ asset('img/maquinarias/gaser/21_pmt-pnt.png') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-md-6">
            <a data-fancybox="gallery2" href="{{ asset('img/maquinarias/gaser/22_img1.jpg') }}">
                <img src="{{ asset('img/maquinarias/gaser/22_img1.jpg') }}" alt="Porcionador automático para carne picada con pie y cinta de salida Mod. PNT-120" class="rounded img-fluid">
            </a>
            <div class="row pt-2 mb-2">
                <div class="col">
                    <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/22_img2.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/22_img2.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/22_img3.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/22_img3.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/22_img4.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/22_img4.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/22_img5.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/22_img5.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/22_img6.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/22_img6.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/22_img7.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/22_img7.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/22_img8.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/22_img8.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/22_img9.jpg') }}">
                        <img src="{{ asset('img/maquinarias/gaser/22_img9.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col">
                    <a data-fancybox="gallery" href="{{ asset('img/maquinarias/gaser/22_pmt-pnt.png') }}">
                        <img src="{{ asset('img/maquinarias/gaser/22_pmt-pnt.png') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
            </div>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/oDK-STnUV3g" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-6">
            <h3 class="titulo">
                <span>Porcionador automático para carne picada con pie y cinta de salida Mod. PNT-120</span>
            </h3>
            <p>
                <strong class="rojo">CARACTERÍSTICAS TÉCNICAS</strong>
            </p>
            <ul>
                <li>Construido en Acero Inoxidable.</li>
                <li>Con cinta interior traccionada con inclinación y velocidad regulable.</li>
                <li>Cinta de salida de un metro de larga y regulable en altura.</li>
                <li>Las porciones son regulables, variando la longitud o cambiando la boquilla.</li>
                <li>Consume papel en bobinas.</li>
                <li>Perfecta presentación del producto.</li>
                <li>Corte del papel y porción de carne automático.</li>
                <li>Funcionamiento neumático (6 Kg. / cm2).</li>
                <li>Consumo de aire 100 litros / minuto.</li>
                <li>Potencia eléctrica: máxima 370 watios.</li>
                <li>Corriente eléctrica monofásica 230 V, 50 / 60 Hz.</li>
                <li>Medidas: 470 x 360 x 600 mm.</li>
                <li>Peso: 69 Kg.</li>
            </ul>
            <p>
                PUEDE FORMAR PORCIONES DE HILOS, PASTILLAS O CILINDROS DE CARNE PICADA (Con soporte de papel)
                <br><br>
                ACOPLAMIENTOS POSIBLES A EMBUTIDORA O PICADORA 98:<br>
                - En cualquier acoplamiento el largo máximo es de 220 mm y el grueso máximo para pastillas o cilindros es de 30 mm.<br>
                - Para porciones de hilos el grueso depende del caudal de salida de la picadora.
                <br><br>
                ACOPLADO A EMBUTIDORA:<br>
                - Puede formar pastillas o cilindros de 100 a 115 mm de ancho según pedido.
                <br><br>
                ACOPLADO A PICADORA 98:<br>
                - Con salida para hilos el ancho de la porción es de 115 mm.<br>
                - Con boca formadora simple para pastilla (ancho 80 mm).<br>
                - Con boca formadora especial para pastilla o cilindros (ancho de 100 a 115 mm según pedido).
                <br><br>
                <strong>CONSUMIBLES</strong>
            </p>
            <table class="table table-striped">
                <tr>
                    <td colspan="2"><strong>Bobinas para porcionador PMT y PNT-120</strong></td>
                </tr>
                <tr>
                    <td>PBL108</td>
                    <td>Bobina papel blanco Ref. 108</td>
                </tr>
                <tr>
                    <td>PBL120</td>
                    <td>Bobina papel blanco Ref. 120</td>
                </tr>
            </table>
        </div>
    </div>
</section>
@endsection