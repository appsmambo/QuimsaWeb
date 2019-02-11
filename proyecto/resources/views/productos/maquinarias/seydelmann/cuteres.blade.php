@extends('layouts.main')
@section('title', 'Cúteres de obrador - SEYDELMANN :: Quimsa - Pasión por la calidad')
@section('body')
<section class="container bg-white contenedor py-4 mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias') }}">Maquinarias</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias/seydelmann') }}">Seydelmann</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cúteres</li>
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
            <span>Cúteres de obrador (capacidad de cuba 20-120 l)</span>
        </h3>
        <p>
            Seydelmann fábrica los cúteres de obrador con cubas con una capacidad de entre 20 y 120 l. Las máquinas de alta velocidad garantizan una trituración de material de primera clase y un mezclado homogéneo. La construcción de acero inoxidable compacta, sin fugas y en su mayor parte maciza con bordes redondos y superficies inclinadas pulidas, convierte los cúteres de Seydelmann en robustos y duraderos productos de calidad superior.
        </p>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-5">
            <p>
                <strong>Cúteres de alto rendimiento</strong><br>
                Película K 60 AC-8 (con AD 114)
            </p>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/rIKIYKk883o?rel=0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-7">
            <div class="row">
                <div class="col-md-4 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/K-40-C%C3%BAter-de-alto-rendimiento.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/k40.jpg') }}" alt="" class="rounded img-fluid"><br>K 40
                    </a>
                </div>
                <div class="col-md-4 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/K-60-C%C3%BAter-de-alto-rendimiento.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/k60.jpg') }}" alt="" class="rounded img-fluid"><br>K 60
                    </a>
                </div>
                <div class="col-md-4 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/K-75-C%C3%BAter-de-alto-rendimiento.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/k75.jpg') }}" alt="" class="rounded img-fluid"><br>K 75
                    </a>
                </div>
                <div class="col-md-4 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/K-90-C%C3%BAter-de-alto-rendimiento.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/k90.jpg') }}" alt="" class="rounded img-fluid"><br>K 90
                    </a>
                </div>
                <div class="col-md-4 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/K-96-C%C3%BAter-de-alto-rendimiento.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/k96.jpg') }}" alt="" class="rounded img-fluid"><br>K 96
                    </a>
                </div>
                <div class="col-md-4 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/K-120-C%C3%BAter-de-alto-rendimiento.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/k120.jpg') }}" alt="" class="rounded img-fluid"><br>K 120
                    </a>
                </div>
                <div class="col-md-4 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/K-126-C%C3%BAter-de-alto-rendimiento.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/k126.jpg') }}" alt="" class="rounded img-fluid"><br>K 126
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-6">
            <p>
                <strong>Cúteres de vacío</strong><br>
                En los cúteres de vacío se extrae el aire durante el proceso de corte. La falta de oxígeno impide la reproducción de microorganismos en la emulsión y reduce el nivel de gérmenes. El producto resulta así más duradero. La falta de oxígeno también evita la oxidación de la grasa. Así se optimiza la conservación del color del producto cárnico, manteniendo su aspecto apetitoso durante más tiempo.<br>
                Al incrementarse la densidad de la masa cortada al vacío, las cuchillas pueden cortar así también las estructuras celulares más pequeñas. De esta forma, la emulsión de carne resulta aún más fina, homogénea y completamente libre de espuma, produciéndose además una liberación de proteínas considerablemente mayor.<br>
                La mayor liberación de proteínas supone asimismo una mayor liberación de sustancias portadoras de sabor y un mejor ligamento y estabilidad de la emulsión. Se puede añadir una mayor cantidad de agua. El embutido terminado tiene un sabor más intensivo, es más denso y permite mayores vertidos.<br>
                El principio de construcción especial de los cúteres de Seydelmann con pequeña cámara de aire entre la emulsión y la parte inferior de la tapa permite generar un vacío en tiempo mínimo y requiere un volumen de gas muy pequeño en la regasificación.
            </p>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/K-64-C%C3%BAter-de-vac%C3%ADo.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/K64.jpg') }}" alt="" class="rounded img-fluid"><br>K 64
                    </a>
                </div>
                <div class="col-md-4 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/K-124-C%C3%BAter-de-vac%C3%ADo.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/K124.jpg') }}" alt="" class="rounded img-fluid"><br>K 124
                    </a>
                </div>
                <div class="col-md-4 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/K-124-H-C%C3%BAter-de-vac%C3%ADo.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/K124H.jpg') }}" alt="" class="rounded img-fluid"><br>K 124H
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-6">
            <p>
                <strong>Cúteres de cocción</strong><br>
                La función de cocción ahorra tiempo de producción, al cocer y cortar en un mismo paso de trabajo. Dispositivos adicionales, como el calentamiento de la tapa del cúter o la inyección directa de vapor ayudan a acortar el proceso de trabajo.<br>
                Las sustancias aromáticas y proteínas que se pierden durante la cocción en agua de cocción se conservan íntegramente en el cúter de cocción. Asimismo se evita una pérdida de sustancia al cocinar en el cúter. Además, al evitar diferentes pasos de trabajo y realizar la cocción sin aire se reducen considerablemente los gérmenes en la emulsión. El producto final conserva su sabor natural auténtico y es mucho más duradero.
            </p>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/K-64-C%C3%BAter-de-cocci%C3%B3n.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/K64.jpg') }}" alt="" class="rounded img-fluid"><br>K 64
                    </a>
                </div>
                <div class="col-md-4 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/K-124-C%C3%BAter-de-cocci%C3%B3n.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/K124.jpg') }}" alt="" class="rounded img-fluid"><br>K 124
                    </a>
                </div>
                <div class="col-md-4 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/K-124-H-C%C3%BAter-de-cocci%C3%B3n.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/K124H.jpg') }}" alt="" class="rounded img-fluid"><br>K 124H
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-6">
            <p>
                <strong>Cúteres de vacío y cocción</strong><br>
                Cúteres de alta capacidad, equipados con una función de vacío (vease cúteres de vacío) y una función de cocción (vease cúteres de cocción).
            </p>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/K-64-C%C3%BAter-de-cocci%C3%B3n-y-vac%C3%ADo.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/K64.jpg') }}" alt="" class="rounded img-fluid"><br>K 64
                    </a>
                </div>
                <div class="col-md-4 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/K-124-C%C3%BAter-de-cocci%C3%B3n-y-vac%C3%ADo.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/K124.jpg') }}" alt="" class="rounded img-fluid"><br>K 124
                    </a>
                </div>
                <div class="col-md-4 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/K-124-H-C%C3%BAter-de-cocci%C3%B3n-y-vac%C3%ADo.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/K124H.jpg') }}" alt="" class="rounded img-fluid"><br>K 124H
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-md-6">
            <p>
                <strong>Cúter de sobremesa</strong>
            </p>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4 mb-2 text-center">
                    <a class="ver-mas" href="https://www.seydelmann.com/wp-content/uploads/2015/04/Seydelmann-Table-Cutter-K-20.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/K20.jpg') }}" alt="" class="rounded img-fluid"><br>K 124H
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection