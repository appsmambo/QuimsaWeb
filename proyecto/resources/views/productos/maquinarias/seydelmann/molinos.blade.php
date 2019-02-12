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
            <div class="row mb-2">
                <div class="col-sm-6">
                    <p>
                        <strong>Molinos universales</strong><br><br>
                        Por primera vez, una máquina tritura con el mismo tornillo sin fin de trabajo y el mismo juego de corte diversos materiales, garantizando la mejor imagen de corte posible con rendimientos por hora muy efectivos.<br>
                        Los molinos universales de Seydelmann procesan con absoluta facilidad carne fresca, carne cocida hasta 85 °C, cortezas de tocino, bloques de grasa y también bloques de carne congelada hasta -25 °C y otros productos alimenticios, independientemente de la consistencia y temperatura. Las diferentes consistencias, p.ej. producto fresco o congelado, se pueden procesar de forma simultánea o en momentos diferentes.
                    </p>
                </div>
                <div class="col-sm-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/FQ_M0M5Qggo?rel=0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="https://www.seydelmann.com/wp-content/uploads/2016/05/Datenblatt-AU-200-U-EN.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/AU-200-U.jpg') }}" alt="" class="rounded img-fluid"><br>AU 200 U
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="https://www.seydelmann.com/wp-content/uploads/2016/05/Datenblatt-AV-250-U-EN.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/AU-200-U.jpg') }}" alt="" class="rounded img-fluid"><br>AV 250 U
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/AW-300-U-Picadora-autom%C3%A1tica.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/AW-300-U.jpg') }}" alt="" class="rounded img-fluid"><br>AW 300 U
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-12">
            <p>
                <strong>Molinos automáticos</strong><br><br>
                El tornillo sin fin de trabajo y el tornillo sin fin de alimentación de los molinos automáticos disponen, cada uno de ellas, de un potente accionamiento de dos o tres velocidades. Para alcanzar la mejor imagen de corte posible con cada material, las velocidades de los tornillos sin fin se pueden conectar de forma independiente. El tornillo sin fin cónico de alimentación capta también grandes piezas cárnicas y las transporta de forma segura hasta el tornillo sin fin de trabajo sin puentes.
            </p>
            <div class="row">
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/AE-130-3-Picadora-autom%C3%A1tica1.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/AE-130-31.jpg') }}" alt="" class="rounded img-fluid"><br>AE 130-3
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/AG-160-Picadora-autom%C3%A1tica.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/AG-160.jpg') }}" alt="" class="rounded img-fluid"><br>AG 160
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="https://www.seydelmann.com/wp-content/uploads/2015/04/AU-200-Molino-Autom%C3%A1tico.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/AV-250.jpg') }}" alt="" class="rounded img-fluid"><br>AU 200
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/AV-250-Picadora-autom%C3%A1tica.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/AV-250.jpg') }}" alt="" class="rounded img-fluid"><br>AV 250
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/AW-300-Picadora-autom%C3%A1tica.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/AW-300.jpg') }}" alt="" class="rounded img-fluid"><br>AW 300
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-12">
            <p>
                <strong>Molinos automáticos K</strong><br><br>
                Los molinos automáticos han sido especialmente diseñadas para las necesidades de la industria del queso y la mantequilla. Disponen de un tornillo sin fin de alimentación especial, equipado con dientes trituradores, para captar mejor el producto. En la marcha atrás, el tornillo sin fin de alimentación puede corregir fácilmente posiciones desfavorables del material en la tolva, sobre todo en bloques no homogéneos o muy grandes. Tanto la geometría de la tolva como la tuerca de cierre han sido especialmente diseñados para este campo de aplicación.
            </p>
            <div class="row">
                <div class="col-md-3 mb-2 text-center">
                    <a data-fancybox="gallery" class="ver-mas" href="{{ asset('img/maquinarias/seydelmann/automatenwolf-k.jpg') }}" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/automatenwolf-k.jpg') }}" alt="" class="rounded img-fluid"><br>AE 130-3 K
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a data-fancybox="gallery" class="ver-mas" href="{{ asset('img/maquinarias/seydelmann/automatenwolf-k.jpg') }}" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/automatenwolf-k.jpg') }}" alt="" class="rounded img-fluid"><br>AG 160 K
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a data-fancybox="gallery" class="ver-mas" href="{{ asset('img/maquinarias/seydelmann/automatenwolf-k.jpg') }}" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/automatenwolf-k.jpg') }}" alt="" class="rounded img-fluid"><br>AU 200 K
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a data-fancybox="gallery" class="ver-mas" href="{{ asset('img/maquinarias/seydelmann/automatenwolf-k.jpg') }}" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/automatenwolf-k.jpg') }}" alt="" class="rounded img-fluid"><br>AV 250 K
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-12">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <p>
                        <strong>Molinos mezclador automáticos</strong><br><br>
                        Adicionalmente a la función picadora, esta variante de los molinos automáticos Seydelmann dispone de un dispositivo de mezclado, bien con una espiral de mezclado o con palas de mezclado, con dos velocidades de avance y dos velocidades de marcha atrás. Si antes de picar se mezcla previamente y estandariza con frecuencia el material, los molinos mezclador automáticos que combinan ambas funciones en una máquina suponen la solución ideal.
                    </p>
                </div>
                <div class="col-sm-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/R-pVBrtO1TQ?rel=0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/AE-130-3-M-Picadora-autom%C3%A1tica-con-mezcla.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/AE-130-3M1.jpg') }}" alt="" class="rounded img-fluid"><br>AE 130-3M
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/AG-160-M-Picadora-autom%C3%A1tica-con-mezcla.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/AG-160M.jpg') }}" alt="" class="rounded img-fluid"><br>AG 160 M
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/AU-200-M-Picadora-autom%C3%A1tica-con-mezcla.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/AU-200-M.jpg') }}" alt="" class="rounded img-fluid"><br>AU 200 M
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/AV-250-M-Picadora-autom%C3%A1tica-con-mezcla.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/AU-250-M.jpg') }}" alt="" class="rounded img-fluid"><br>AV 250 M
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row py-4 border-bottom">
        <div class="col-md-12">
            <p>
                <strong>Molinos mezclador</strong><br><br>
                Adicionalmente a la función de picado, el molino mezclador está equipado con un dispositivo de mezclado, bien con potentes brazos mezcladores o palas mezcladoras. Antes del picado se puede mezclar el material con ingredientes y especias. El tornillo sin fin de trabajo de dos velocidades, equipado con una marcha atrás breve, garantiza el correcto mezclado, incluso de cantidades mínimas. Los molinos mezclador se utilizan a menudo como molinos para material previamente picado para un picado/mezclado posterior. Simultáneamente son capaces de mezclar y estandarizar también el material antes del primer picado.
            </p>
            <div class="row">
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/ME-130-3-Picadora-mezcladora1.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/ME-130-31.jpg') }}" alt="" class="rounded img-fluid"><br>ME 130-3
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/MG-160-Picadora-mezcladora.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/MG-160.jpg') }}" alt="" class="rounded img-fluid"><br>MG 160
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/MU-200-Picadora-mezcladora.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/MU-200.jpg') }}" alt="" class="rounded img-fluid"><br>MU 200
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-md-12">
            <p>
                <strong>Molinos de carne congelada</strong><br><br>
                Para picar bloques completos de carne congelada se requiere un accionamiento de mayor potencia, un tornillo sin fin de trabajo más resistente y un robusto juego de corte. Los molinos de carne congelada de Seydelmann con motor extra potente garantizan una perfecta imagen de corte a la hora de picar bloques enteros hasta -25 °C. La primera trituración en el molino de carne congelada se realiza en la tolva con el tornillo sin fin de trabajo. Este posee una enroscadura longitudinal afilada, la cual monda aprox. 8 cm del bloque congelado antes de transportar el material al juego de cuchillas.
            </p>
            <div class="row">
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/GW-300-Picadora-de-carne-congelada.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/GW-300.jpg') }}" alt="" class="rounded img-fluid"><br>GW 300
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a class="ver-mas" href="http://www.seydelmann.de/wp-content/uploads/2015/03/GX-400-Picadora-de-carne-congelada.pdf" target="_blank">
                        <img src="{{ asset('img/maquinarias/seydelmann/GX-400.jpg') }}" alt="" class="rounded img-fluid"><br>GX 400
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="py-4 border-bottom">
        <h3 class="titulo">
            <span>Accesorios</span>
        </h3>
        <p>
            <strong>Juegos de corte en molinos</strong><br>
            Seydelmann ofrece el juego de corte óptimo para cada material de partida y aplicación. Con los robustos juegos de corte de bajo desgaste de los molinos Seydelmann se alcanza una perfecta imagen de corte constante, tanto con materiales duros, congelados y viscosos, como con carne fresca y carne cocida. Para ello pueden utilizarse, según la capacidad y el resultado deseado, para un picado fino o grueso, numerosos juegos de cuchillas diferentes y placas perforadas, así como diferentes diámetros de perforación.<br>
            Los juegos de corte estándar para carne picada están formados por tres o cinco piezas. Constan de un cortador previo, así como de una o dos cuchillas y una o dos placas perforadas. Las cuchillas y placas perforadas (con tamaños de agujero decrecientes en dirección a la salida del molino) están dispuestas entre sí alternativamente. Según el material de partida se puede prescindir del cortador previo (p.ej. para determinados tipos de embutido cocido, para el procesamiento de queso o la producción de hamburguesas) o montar adicionalmente anillos distanciadores (p.ej. para carne congelada) y cuchillas adicionales.
        </p>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-6">
            <p>
                <strong>Cuchilla de corte posterior</strong><br><br>
                La cuchilla de corte posterior disponible opcionalmente, colocada directamente tras su última placa perforada en la salida del molino, ayuda a mejorar la calidad de, p.ej., embutido crudo, carne magra y salchichas para asar/freír. Corta de nuevo trozos de carne unidos o con fibras expulsados del juego de corte al picar, garantizándose un tamaño unitario de la granulación.
            </p>
        </div>
        <div class="col-md-6 text-center">
            <img src="{{ asset('img/maquinarias/seydelmann/03-Nachschneidemesser-2.jpg') }}" alt="" class="rounded img-fluid"><br><small>Cuchilla de corte posterior</small>
        </div>
    </div>
    <div class="py-4">
        <p>
            <strong>Juego de separación</strong><br><br>
            El juego de separación mejora la calidad de la carne picada en uno o dos niveles de calidad, expulsando durante el picado un alto grado de partes duras y tendones contenidos en la carne. Además se incrementa significativamente la eficiencia de la producción, al prescindir del deshuesado manual, al desechar y evacuar las partes duras por separado. Esto ahorra tiempo e incrementa el rendimiento general de la máquina.<br>
            El dispositivo neumático de separación al utilizar el juego de separación garantiza un control más exacto y preciso de la separación y expulsión de tendones y cartílagos. A través de una válvula esférica se controla de forma precisa el flujo deseado, lo que mejora aún más el resultado de separación. El tubo de expulsión transparente permite un control continuo de la calidad del material expulsado.
        </p>
        <p class="text-center">
            <img src="{{ asset('img/maquinarias/seydelmann/handwerk.jpg') }}" alt="" class="rounded img-fluid"><br><small>Juego de corte-separación para molinos artesanales</small>
            <br><br>
            <img src="{{ asset('img/maquinarias/seydelmann/industrie.jpg') }}" alt="" class="rounded img-fluid"><br><small>Juego de corte-separación para molinos industriales</small>
        </p>
    </div>
</section>
@endsection