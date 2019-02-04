@extends('layouts.main')
@section('title', 'Sierra de corte automático SRA - ASTECH :: Quimsa - Pasión por la calidad')
@section('body')
<section class="container bg-white contenedor py-4 mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias') }}">Maquinarias</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias/astech') }}">Astech</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sierra de corte automático SRA</li>
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
            <img src="{{ asset('img/maquinarias/astech/sra-sierra-automatica-astech-04-2.jpg') }}" alt="Sierra de corte automático SRA" class="rounded img-fluid">
        </div>
        <div class="col-md-6">
            <h3 class="titulo">
                <span>Sierra de corte automático SRA</span>
            </h3>
            <p>
                Astech ha diseñado una sierra automática para cortar producto fresco y congelado con o sin hueso, ofreciendo elevada producción por operario, precisión en el grosor de los cortes y ante todo la máxima seguridad durante el uso.
                <br><br>
                <strong class="rojo">DISEÑO 2.0</strong> Astech está constantemente rediseñando la sierra automática SRA para estar en línea con las necesidades de nuestros clientes. El nuevo modelo lanzado en 2018 cuenta con nuevas funcionalidades que marcan la diferencia:
            </p>
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-6">
            <p>
                <strong class="rojo">CORTE DE PRODUCTO FRESCO</strong><br>
                La SRA ya no está limitada al corte de producto congelado - con el que los resultados y producciones están más que consolidados. Ahora, la SRA corta producto en fresco (no congelado) con hueso o espina. La limitación de la temperatura del producto a cortar se reduce, y se amplía el rango de producto a procesar.
            </p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('img/maquinarias/astech/sra-sierra-automatica-astech-09.jpg') }}" alt="" class="rounded img-fluid">
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-6">
            <img src="{{ asset('img/maquinarias/astech/sra-sierra-automatica-astech-10.jpg') }}" alt="" class="rounded img-fluid">
        </div>
        <div class="col-md-6">
            <p>
                <strong class="rojo">EXTRACCIÓN DEL SERRÍN</strong><br>
                La sierra cinta dispone de forma estandarizada una cinta de extracción del serrín acoplada e integrada en el propio diseño de la sierra. La extracción puede hacerse en cajas plásticas, carros cutter o big boxes.
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
            <p>
                <strong class="rojo">CARACTERÍSTICAS TÉCNICAS</strong>
            </p>
            <table class="table table-bordered table-sm">
                <tbody>
                    <tr>
                        <td><strong>Dimensiones máquina</strong></td>
                        <td class="text-center"><strong>SRA1</strong></td>
                        <td class="text-center"><strong>SRA1-F</strong></td>
                    </tr>
                    <tr>
                        <td>Ancho</td>
                        <td class="text-center">3320 mm</td>
                        <td class="text-center">3670 mm</td>
                    </tr>
                    <tr>
                        <td>Altura máx.</td>
                        <td class="text-center" colspan="2">2350 mm</td>
                    </tr>
                    <tr>
                        <td>Longitud estandar</td>
                        <td class="text-center" colspan="2">2530 mm</td>
                    </tr>
                    <tr>
                        <td>+ descartador</td>
                        <td class="text-center" colspan="2">+ 945 mm (= 3475mm)</td>
                    </tr>
                    <tr><td colspan="3">&nbsp;&nbsp;&nbsp;</td></tr>
                    <tr>
                        <td><strong>Dimensiones máx. producto</strong></td>
                        <td class="text-center"><strong>SRA1</strong></td>
                        <td class="text-center"><strong>SRA1-F&nbsp;</strong></td>
                    </tr>
                    <tr>
                        <td>Sección (A x H)</td>
                        <td class="text-center" colspan="2">650 x 280 mm</td>
                    </tr>
                    <tr>
                        <td>Longitud (L)</td>
                        <td class="text-center">1000 mm</td>
                        <td class="text-center">1350 mm</td>
                    </tr>
                    <tr><td colspan="3">&nbsp;&nbsp;&nbsp;</td></tr>
                    <tr>
                        <td><strong>Potencia instalada</strong></td>
                        <td class="text-center" colspan="2">&nbsp; 7,8 kW</td>
                    </tr>
                    <tr>
                        <td>+ cinta serrín</td>
                        <td class="text-center" colspan="2">&nbsp;&nbsp;+ 0,55 kW</td>
                    </tr>
                    <tr><td colspan="3">&nbsp;&nbsp;</td></tr>
                    <tr>
                        <td><strong>Velocidad lineal de corte</strong></td>
                        <td class="text-center" colspan="2">80 m/s</td>
                    </tr>
                </tbody>
            </table>
            <p>
                <strong>SRA1.</strong> Modelo con carro estandar, para productos de longitud hasta 1000mm.<br>
                <strong>SRA1-F.</strong> Modelo con carro extra largo, para productos de longitud hasta 1350mm.
            </p>
        </div>
    </div>
    <div class="row py-4 justify-content-md-center">
        <div class="col-md-10">
            <p>
                <strong class="rojo">VENTAJAS DE NUESTRA SIERRA SRA</strong><br>
                <strong>CALIDAD DE CORTE.</strong> Velocidad de corte constante que asegura una alta calidad de los cortes.
                <br>
                <img src="{{ asset('img/maquinarias/astech/astech-sierra-automatica-sra-cortes.jpg') }}" alt="" class="rounded img-fluid">
                <br><br>
                <strong>ALTA PRODUCCIÓN.</strong> Un solo operario puede manejar 2 máquinas simultáneamente.
                <br>
                <img src="{{ asset('img/maquinarias/astech/sra-sierra-automatica-astech-05.jpg') }}" alt="" class="rounded img-fluid">
                <br><br>
                <strong>VERSATILIDAD DE FUNCIONAMIENTO.</strong> El programa integrado ofrece una gran variedad de opciones de configuración de los cortes. Además, intercambiando las grapas de sujeción, podrá cortar distintos productos.
                <br>
                <img src="{{ asset('img/maquinarias/astech/astech-sierra-automatica-sra-versatil-1.jpg') }}" alt="" class="rounded img-fluid">
                <br><br>
                <strong>SEGURIDAD.</strong> Toda la máquina está rodeada por una valla que no permite el acceso al interior, dejando libre la zona de carga igualmente protegida por una cortina fotoeléctrica de seguridad que detiene el ciclo cada vez que es cruzada.
                <br>
                <img src="{{ asset('img/maquinarias/astech/sra-sierra-automatica-astech-07.jpg') }}" alt="" class="rounded img-fluid">
                <br><br>
                <strong>HIGIENE.</strong> Toda la máquina, tornillería y la valla de seguridad están fabricadas con acero inoxidable y plásticos aptos para la industria alimentaria.
                <br>
                <img src="{{ asset('img/maquinarias/astech/sra-sierra-automatica-astech-06.jpg') }}" alt="" class="rounded img-fluid">
                <br><br>
                <strong>ROBUSTEZ.</strong> El chasis de la máquina está fabricado con tubo y chapas de elevado espesor, soldados y mecanizados en conjunto, para un ajuste exacto y limpieza de movimientos.
                <br>
                <img src="{{ asset('img/maquinarias/astech/astech-sierra-automatica-sra-higiene.jpg') }}" alt="" class="rounded img-fluid">
                <br><br>
                <strong>PRECISIÓN.</strong> Todos los movimientos de corte se realizan mediante servomotores, y todos los cálculos son efectuados por autómata.
            </p>
        </div>
    </div>
</section>
@endsection