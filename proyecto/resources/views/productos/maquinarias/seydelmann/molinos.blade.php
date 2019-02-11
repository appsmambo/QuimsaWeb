@extends('layouts.main')
@section('title', 'Molinos - SEYDELMANN :: Quimsa - Pasión por la calidad')
@section('body')
<section class="container bg-white contenedor py-4 mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias') }}">Maquinarias</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias/seydelmann') }}">Seydelmann</a></li>
            <li class="breadcrumb-item active" aria-current="page">Molinos</li>
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
            <span>Molinos de obrador (diámetro de placa perforada 114 – 130 mm)</span>
        </h3>
        <p>
            Los molinos de obrador Seydelmann garantizan para cada tamaño de placa perforada una imagen de corte clara y limpia. Casi toda la máquina está fabricada con acero inoxidable. Un material especial de la carcasa del tornillo sin fin evita en gran parte el desgaste mecánico del mismo. La rosca trapezoidal en la carcasa del tornillo sin fin resiste a las situaciones más exigentes.<br>
            Gracias a su acabado de alta calidad, las máquinas pueden limpiarse muy fácilmente y satisfacen los estándares higiénicos más elevados.
        </p>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-12">
            <p>
                <strong>Molinos automáticos</strong><br><br>
                Los molinos automáticos para necesidades artesanales de Seydelmann poseen, según modelo, una capacidad de mezclado de 25 – 35 kg.<br>
                Además de un potente tornillo sin fin de trabajo de dos velocidades, están equipadas con un tornillo sin fin alimentador cónico. Para alcanzar la mejor imagen de corte posible con cada material, las velocidades de ambos tornillos sin fin se pueden conectar de forma independiente.<br>
                El tornillo sin fin cónico de alimentación con un diámetro de 230 – 270 mm capta también grandes piezas cárnicas y las transporta de forma segura hasta el tornillo sin fin de trabajo sin formar puentes.<br>
                La rejilla protectora con contacto de desconexión hace imposible tocar la rosca de trabajo durante su funcionamiento.
            </p>
            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/n6u_8vZtBXI?rel=0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/rIKIYKk883o?rel=0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/AD-114-Picadora-autom%C3%A1tica.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/AD-114.jpg') }}" alt="" class="rounded img-fluid"><br>AD 114
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/AE-130-Picadora-autom%C3%A1tica.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/AE-130.jpg') }}" alt="" class="rounded img-fluid"><br>AE 130
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/AE-130-3-Picadora-autom%C3%A1tica.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/AE-130-3.jpg') }}" alt="" class="rounded img-fluid"><br>AE 130-3
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-12">
            <p>
                <strong>Molinos mezclador</strong><br><br>
                La capacidad de tolva de los molinos mezclador para la artesanía es de 70 y 170 l. Su dispositivo de mezclado está equipado con dos potentes brazos u opcionalmente con palas. En el dispositivo de mezclado se pueden mezclar, con el tornillo sin fin desconectado, entre 50 y 100 kg, según modelo. Si el tornillo sin fin se encuentra conectado, el dispositivo de mezclado funciona como alimentador automático. Con la marcha atrás breve del tornillo sin fin de trabajo se pueden añadir siempre que se desee cantidades mínimas de producto, garantizándose así una mezcla absolutamente homogénea.
            </p>
            <div class="row">
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/MD-114-Picadora-mezcladora.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/MD-114.jpg') }}" alt="" class="rounded img-fluid"><br>MD 114
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/ME-130-Picadora-mezcladora.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/ME-130.jpg') }}" alt="" class="rounded img-fluid"><br>ME 1134
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/ME-130-3-Picadora-mezcladora.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/ME-130-3.jpg') }}" alt="" class="rounded img-fluid"><br>ME 130-3
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-md-12">
            <p>
                <strong>Picadoras/Mezcladoras Automáticas</strong><br>
            </p>
            <div class="row">
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="https://www.seydelmann.com/wp-content/uploads/2016/05/AE-130-M-EN.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/AE_130_M.jpg') }}" alt="" class="rounded img-fluid"><br>AE 130 M
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- -->
    <div class="py-4 border-bottom">
        <h3 class="titulo">
            <span>Molinos industriales</span>
        </h3>
        <p>
            Los molinos industriales de Seydelmann convencen a la hora de procesar grandes cantidades por un corte absolutamente claro. Gracias a su confección de alta calidad resultan fáciles de limpiar y satisfacen las máximas exigencias higiénicas.<br>
            La soldadura sin costuras ni fugas, así como la construcción maciza inoxidable del soporte de la máquina y de la tolva, convierten la máquina en un aparato extremadamente robusto, fiable y duradero.<br>
            El dispositivo expulsor de serie del tornillo sin fin garantiza una sustitución rápida del tornillo sin fin de trabajo. Otros detalles inteligentes, como el espejo instalado en la tolva, el escalón de seguridad plegable y los robustos interruptores de presión, giratorios y de cruce en el panel de mando, permiten un manejo práctico y sencillo.
        </p>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-12">
            <p>
                <strong>Molinos universales</strong><br><br>
                Por primera vez, una máquina tritura con el mismo tornillo sin fin de trabajo y el mismo juego de corte diversos materiales, garantizando la mejor imagen de corte posible con rendimientos por hora muy efectivos.<br>
                Los molinos universales de Seydelmann procesan con absoluta facilidad carne fresca, carne cocida hasta 85 °C, cortezas de tocino, bloques de grasa y también bloques de carne congelada hasta -25 °C y otros productos alimenticios, independientemente de la consistencia y temperatura. Las diferentes consistencias, p.ej. producto fresco o congelado, se pueden procesar de forma simultánea o en momentos diferentes.
            </p>
            <div class="row justify-content-md-center mb-2">
                <div class="col-md-8">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/FQ_M0M5Qggo?rel=0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/AD-114-Picadora-autom%C3%A1tica.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/AD-114.jpg') }}" alt="" class="rounded img-fluid"><br>AD 114
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/AE-130-Picadora-autom%C3%A1tica.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/AE-130.jpg') }}" alt="" class="rounded img-fluid"><br>AE 130
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/AE-130-3-Picadora-autom%C3%A1tica.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/AE-130-3.jpg') }}" alt="" class="rounded img-fluid"><br>AE 130-3
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-12">
            <p>
                <strong>Molinos mezclador</strong><br><br>
                La capacidad de tolva de los molinos mezclador para la artesanía es de 70 y 170 l. Su dispositivo de mezclado está equipado con dos potentes brazos u opcionalmente con palas. En el dispositivo de mezclado se pueden mezclar, con el tornillo sin fin desconectado, entre 50 y 100 kg, según modelo. Si el tornillo sin fin se encuentra conectado, el dispositivo de mezclado funciona como alimentador automático. Con la marcha atrás breve del tornillo sin fin de trabajo se pueden añadir siempre que se desee cantidades mínimas de producto, garantizándose así una mezcla absolutamente homogénea.
            </p>
            <div class="row">
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/MD-114-Picadora-mezcladora.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/MD-114.jpg') }}" alt="" class="rounded img-fluid"><br>MD 114
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/ME-130-Picadora-mezcladora.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/ME-130.jpg') }}" alt="" class="rounded img-fluid"><br>ME 1134
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/ME-130-3-Picadora-mezcladora.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/ME-130-3.jpg') }}" alt="" class="rounded img-fluid"><br>ME 130-3
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-md-12">
            <p>
                <strong>Picadoras/Mezcladoras Automáticas</strong><br>
            </p>
            <div class="row">
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="https://www.seydelmann.com/wp-content/uploads/2016/05/AE-130-M-EN.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/AE_130_M.jpg') }}" alt="" class="rounded img-fluid"><br>AE 130 M
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection