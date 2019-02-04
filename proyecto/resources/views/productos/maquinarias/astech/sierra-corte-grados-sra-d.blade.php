@extends('layouts.main')
@section('title', 'Sierra de corte a grados SRA-D - ASTECH :: Quimsa - Pasión por la calidad')
@section('body')
<section class="container bg-white contenedor py-4 mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias') }}">Maquinarias</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias/astech') }}">Astech</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sierra de corte a grados SRA-D</li>
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
            <img src="{{ asset('img/maquinarias/astech/srag-sierra-de-corte-a-grados-0.jpg') }}" alt="Sierra de corte a grados SRA-D" class="rounded img-fluid">
        </div>
        <div class="col-md-6">
            <h3 class="titulo">
                <span>Sierra de corte a grados SRA-D</span>
            </h3>
            <p>
                La sierra automática de corte a grados presenta todas las ventajas del modelo SRA pero con la nueva función que permite inclinar la hoja de sierra y obtener cortes de mayor sección a partir del mismo producto inicial.
                <br><br>
                Los modelos SRA-D i SRA-FD mantienen el cumplimiento de todos los requisitos de <strong>calidad en el corte y en el proceso</strong>, además de ofrecer la <strong>máxima seguridad</strong> durante el uso.
            </p>
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-5">
            <p>
                <strong class="rojo">POSIBLES PRODUCTOS A CORTAR</strong>
                <br><br>
                <strong>AVES</strong><br>(pavo, pollo,...)<br>
                <strong>CORDERO</strong><br>(patas, costillar, falda, jarrete,...)<br>
                <strong>CERDO</strong><br>(codillo, jamón, lomo, tira de costillas,...)<br>
                <strong>PRODUCTO VACUNO</strong><br>(lomo, chuletas, costillar,... )<br>
                <strong>PESCADO</strong><br>(atún, caella, tintorera, merluza, salmón,...)<br>
                <strong>QUESOS</strong><br>(quesos en barra y redondos)
            </p>
        </div>
        <div class="col-md-7">
            <img src="{{ asset('img/maquinarias/astech/srag-sierra-automatica-astech-corte-a-grados-08.jpg') }}" alt="" class="rounded img-fluid">
        </div>
    </div>
    <div class="row py-4 justify-content-md-center border-bottom">
        <div class="col-md-10">
            <p>
                <strong class="rojo">CARACTERÍSTICAS FUNCIONALES</strong><br>
                <strong>CORTE A GRADOS</strong>. Con la rotación de la sierra cinta se consigue inclinar la hoja de sierra respecto la base de apoyo del producto a cortar. Como resultado, <strong>los cortes obtenidos disponen de una mayor sección que con el corte recto</strong>, manteniendo el grosor especificado por el cliente, así como el resto de configuraciones que se pueden controlar por programa.
                <br>
                <img src="{{ asset('img/maquinarias/astech/srag-sierra-automatica-astech-corte-a-grados-06.jpg') }}" alt="" class="rounded img-fluid">
                <br><br>
                <strong>SELECCIÓN DEL ÁNGULO DE CORTE</strong>. Un sistema automático controla la inclinación de la sierra cinta, que <strong>puede graduarse de 0º a 50º</strong>. El movimiento se realiza de forma suave mediante motorreductor controlado por un autómata, que asegura una máxima precisión y una merma mínima debida a la inclinación.
                <br>
                <img src="{{ asset('img/maquinarias/astech/srag-sierra-automatica-astech-corte-a-grados-09.jpg') }}" alt="" class="rounded img-fluid">
            </p>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-md-5">
            <p>
                <strong class="rojo">VENTAJAS DE NUESTRA SIERRA SRA / SRA-D</strong>
                <br><br>
                <strong>CALIDAD DE CORTE.</strong> Sierra cinta hasta 3600rpm. Velocidad de avance del producto constante.<br><br>
                <strong>ALTA PRODUCCIÓN.</strong> 1 operario para 2 máquinas.<br><br>
                <strong>VERSATILIDAD DE FUNCIONAMIENTO.</strong> Software configurable. Grapas de sujeción intercambiables.<br><br>
                <strong>SEGURIDAD.</strong> Valla de protección alrededor de la máquina y cortina fotoeléctrica en la zona de carga.<br><br>
                <strong>HIGIENE.</strong> Fabricada en acero inoxidable y plásticos aptos.<br><br>
                <strong>ROBUSTEZ.</strong> Conjuntos soldados y mecanizados con precisión para conseguir limpieza total en los movimientos.<br><br>
                <strong>PRECISION.</strong> Movimientos mediante servomotores, cálculos por autómata.
            </p>
        </div>
        <div class="col-md-7">
            <p>
                <strong class="rojo">CARACTERÍSTICAS TÉCNICAS</strong>
            </p>
            <table class="table table-bordered table-sm">
                <tbody>
                    <tr>
                        <td><strong>Dimensiones máx. producto</strong></td>
                        <td class="text-center"><strong>SRA-D</strong></td>
                        <td class="text-center"><strong>SRA1-FD</strong></td>
                    </tr>
                    <tr>
                        <td>Sección (A x H)	</td>
                        <td class="text-center" colspan="2">650 x 280 mm</td>
                    </tr>
                    <tr>
                        <td>Longitud (L)</td>
                        <td class="text-center">1000 mm</td>
                        <td class="text-center">1350 mm</td>
                    </tr>
                    <tr><td colspan="3">&nbsp;&nbsp;&nbsp;</td></tr>
                    <tr>
                        <td><strong>Potencia total instalada</strong></td>
                        <td class="text-center" colspan="2">7-10 kW</td>
                    </tr>
                    <tr>
                        <td>+ cinta serrín</td>
                        <td class="text-center" colspan="2">+ 0,55 kW</td>
                    </tr>
                    <tr><td colspan="3">&nbsp;&nbsp;&nbsp;</td></tr>
                    <tr>
                        <td><strong>Velocidad lineal de corte	</strong></td>
                        <td class="text-center" colspan="2">80 m/s</td>
                    </tr>
                </tbody>
            </table>
            <p>
                <strong>SRA-D.</strong> Modelo con carro estandar, para productos de longitud hasta 1000mm.<br>
                <strong>SRA-FD.</strong> Modelo con carro extra largo, para productos de longitud hasta 1350mm.
            </p>
        </div>
    </div>
</section>
@endsection