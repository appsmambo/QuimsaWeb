@extends('layouts.main')
@section('title', 'Túneles FRIGOIMPIANTI :: Quimsa - Pasión por la calidad')
@section('body')
<section class="container bg-white contenedor py-4 mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias') }}">Maquinarias</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias/frigoimpianti') }}">Frigoimpianti</a></li>
            <li class="breadcrumb-item active" aria-current="page">Túneles</li>
        </ol>
    </nav>
    <div class="row mb-4">
        <div class="col-md-8">
            <h1 class="borde mb-4">
                MAQUINARIAS
            </h1>
        </div>
        <div class="col-md-4 text-center">
            <a href="{{ url('/productos/maquinarias/frigoimpianti') }}">
                <img src="{{ asset('img/marcas/frigoimpianti.png') }}" alt="" class="img-fluid">
            </a>
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-6">
            <img src="{{ asset('img/maquinarias/frigoimpianti/doppia-spirale-tunnel.jpg') }}" alt="Túneles para la pasteurización, el enfriamiento y la ultracongelación" class="rounded img-fluid">
        </div>
        <div class="col-md-6">
            <h3 class="titulo">
                <span>TÚNELES PARA LA PASTEURIZACIÓN, EL ENFRIAMIENTO Y LA ULTRACONGELACIÓN</span>
            </h3>
            <p>
                Todos nuestros túneles se proyectan y realizan en función de las exigencias del cliente.
                <br><br>
                Gracias a nuestras constantes inversiones en investigación y al apoyo de técnicos con muchos años de experiencia en los diferentes sectores de la industria tecnoalimentaria, estamos capacitados para ofrecer máquinas innovadoras y completamente personalizadas para el cliente.
                <br><br>
                Nuestra gama de modelos ofrece una solución para cualquier tipo de exigencia productiva en la que sea necesario pasteurizar, secar, enfriar o ultracongelar los alimentos a granel o envasados.
                <br><br>
                Los campos de aplicación pueden ser innumerables, desde la pequeña a la mediana y gran producción en línea de hamburguesas y otros productos de carne, platos preparados, pizzas, fruta, verdura, helado, productos de horno, pasta, etc.
            </p>
        </div>
    </div>
    <div id="tuneles" class="row py-4 mb-5 border-bottom">
        <div class="col-md-4">
            <h5>
                <strong class="rojo">ENFRIAMIENTO Y ULTRACONGELACIÓN</strong>
                <br>
                <img src="{{ asset('img/maquinarias/frigoimpianti/salumi-coppe-pancette-2.jpg') }}" alt="" class="rounded img-fluid">
            </h5>
            <ul>
                <li>
                    <a class="ver-mas" href="#tunel1"><strong>Túnel espiral</strong></a>
                </li>
                <li>
                    <a class="ver-mas" href="#tunel2"><strong>Túnel Container</strong></a>
                </li>
                <li>
                    <a class="ver-mas" href="#tunel3"><strong>Túnel en caída</strong></a>
                </li>
                <li>
                    <a class="ver-mas" href="#tunel4"><strong>Túnel biflujo</strong></a>
                </li>
                <li>
                    <a class="ver-mas" href="#tunel5"><strong>Túnel fluctuante</strong></a>
                </li>
                <li>
                    <a class="ver-mas" href="#tunel6"><strong>Túnel con carros</strong></a>
                </li>
            </ul>
        </div>
        <div class="col-md-4">
            <h5>
                <strong class="rojo">PASTEURIZACIÓN Y LEUDADO</strong>
                <br>
                <img src="{{ asset('img/maquinarias/frigoimpianti/impianti-per-caseifici.jpg') }}" alt="" class="rounded img-fluid">
            </h5>
            <ul>
                <li>
                    <a class="ver-mas" href="#tunel1"><strong>Túnel espiral</strong></a>
                </li>
            </ul>
        </div>
        <div class="col-md-4">
            <h5>
                <strong class="rojo">PASTA FRESCA</strong>
                <br>
                <img src="{{ asset('img/maquinarias/frigoimpianti/affumicatura.jpg') }}" alt="" class="rounded img-fluid">
            </h5>
            <ul>
                <li>
                    <a class="ver-mas" href="#tunel7"><strong>Pasteurizador espiral “COMPACT”</strong></a>
                </li>
                <li>
                    <a class="ver-mas" href="#tunel8"><strong>Túnel de secado y enfriamiento “AR”</strong></a>
                </li>
                <li>
                    <a class="ver-mas" href="#tunel3"><strong>Túnel en caída</strong></a>
                </li>
                <li>
                    <a class="ver-mas" href="#tunel4"><strong>Túnel biflujo</strong></a>
                </li>
            </ul>
        </div>
    </div>
    <div id="tunel1" class="row py-4 border-bottom">
        <div class="col-md-6">
            <h3 class="titulo">
                <span>TÚNEL ESPIRAL PARA ENFRIAMIENTO O ULTRACONGELACIÓN</span>
            </h3>
            <p>
                <strong>Descripción general:</strong><br>
                El Túnel espiral Frigo Impianti es una instalación estudiada para utilizarse en líneas de producción de medias y grandes dimensiones, que permite pasteurizar, enfriar o ultracongelar todos aquellos productos, a granel o envasados, que deben permanecer inmóviles en la cinta durante la elaboración, como por ejemplo: hamburguesas, pizzas, cruasanes, platos preparados, etc.<br>
                Todos nuestros túneles en espiral han sido proyectados y realizados en función de las exigencias de cada cliente, para optimizar el rendimiento y adaptarlos a cualquier exigencia productiva.
                <br><br>
                <strong>Características técnicas:</strong><br>
                Una de las particularidades de nuestras espirales concierne el sistema de ventilación que, utilizando un doble evaporador, optimiza el rendimiento de la instalación frigorífica y garantiza una ventilación perfecta en el interior de la habitación.<br>
                El desplazamiento se realiza mediante un tambor central que, girando, arrastra la cinta que ya está en tensión gracias a un motorreductor. Este sistema garantiza:<br>
                - la mínima fricción;<br>
                - la eliminación de cualquier órgano mecánico de tracción (como engranajes metálicos);<br>
                - la eliminación del uso continuado de lubricantes en las inmediatas cercanías del producto a tratar.
                <br><br>
                La cinta empleada es una cinta modular de baja tensión con las siguientes características:<br>
                - realizada de material plástico certificado idóneo para el tipo de tratamiento a efectuar, permite el contacto directo con alimentos a granel y envasados;<br>
                - el bajo coeficiente de fricción, la elevada resistencia al desgaste y a la tracción garantizan la máxima fiabilidad y duración en el tiempo;<br>
                - las superficies de deslizamiento y los demás perfiles en contacto con la cinta están realizados en polietileno de alta densidad molecular;<br>
                - las bisagras de empalme, creadas para el pasaje de detergentes, garantizan niveles superiores de higiene, respecto a los estándar;<br>
                - las superficies de la cinta son antiadherentes para  despegar con facilidad el producto y los residuos durante los lavados;<br>
                - el diseño ha sido estudiado para eliminar/reducir la marca de los productos tratados.
                <br><br>
                La estructura de las espirales está realizada en acero inoxidable, con medidas particulares para la máxima higiene durante los lavados.<br>
                Todos los brazos de sostén de la cinta y los demás tubulares de la estructura están soldados en TIG y girados 45º para evitar superficies planas en las que podrían formarse los depósitos.<br>
                Las cámaras se pueden suministrar con diferentes grados de aislamiento y con medidas técnicas particulares, en función de las temperaturas de ejercicio y de las condiciones de la instalación.<br>
                Los túneles están controlados completamente por una centralita de control equipada con una pantalla gráfica táctil a colores (320×240 píxeles – 256 colores  – con iluminación posterior) y por un software desarrollado internamente en la empresa, que permite regular la velocidad de la cinta, la ventilación, los parámetros de la instalación frigorífica, etc.<br>
                Las máquinas han sido construidas y previamente montadas y probadas en nuestra empresa, antes de expedirlas. Todo esto para estar seguros de su correcto funcionamiento y para preparar lo mejor posible el montaje para el cliente.
            </p>
        </div>
        <div class="col-md-6">
            <a data-fancybox="gallery" href="{{ asset('img/maquinarias/frigoimpianti/sprirale-doppia.jpg') }}">
                <img src="{{ asset('img/maquinarias/frigoimpianti/sprirale-doppia.jpg') }}" alt="" class="rounded img-fluid">
            </a>
            <div class="row pt-2">
                <div class="col-md-4 mb-2">
                    <a data-fancybox="gallery" href="{{ asset('img/maquinarias/frigoimpianti/sprirale-doppia2.jpg') }}">
                        <img src="{{ asset('img/maquinarias/frigoimpianti/sprirale-doppia2.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col-md-4 mb-2">
                    <a data-fancybox="gallery" href="{{ asset('img/maquinarias/frigoimpianti/Tunnel-Villa-dAgri_2.jpg') }}">
                        <img src="{{ asset('img/maquinarias/frigoimpianti/Tunnel-Villa-dAgri_2.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col-md-4 mb-2">
                    <a data-fancybox="gallery" href="{{ asset('img/maquinarias/frigoimpianti/Particolare-container.jpg') }}">
                        <img src="{{ asset('img/maquinarias/frigoimpianti/Particolare-container.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
            </div>
            <h5 class="text-right mt-5">
                <a href="#tuneles" class="ver-mas"><strong>Volver</strong></a>
            </h5>
        </div>
    </div>
    <div id="tunel2" class="row py-4 border-bottom">
        <div class="col-md-6">
            <h3 class="titulo">
                <span>TÚNEL ESPIRAL PARA ENFRIAMIENTO O ULTRACONGELACIÓN – Modelo “Container”</span>
            </h3>
            <p>
                <strong>Descripción general:</strong><br>
                El  Túnel espiral modelo “Container” es una máquina muy compacta (con las dimensiones de un contenedor de 20 pies), estudiada para utilizarse en pequeñas líneas de producción, para enfriar o ultracongelar todos aquellos productos, a granel o envasados, que deben permanecer inmóviles en la cinta durante la elaboración, como por ejemplo: hamburguesas, pizzas, cruasanes, platos preparados, etc.
                <br><br>
                <strong>Características técnicas:</strong><br>
                Una de las particularidades de esta máquina concierne su sistema de ventilación que, utilizando un doble evaporador, optimiza el rendimiento de la instalación frigorífica y garantiza una ventilación perfecta en el interior de la habitación.<br>
                El desplazamiento se realiza mediante un tambor central que, girando, arrastra la cinta que ya está en tensión gracias a un motorreductor. Este sistema garantiza:
                <br><br>
                - la mínima fricción;<br>
                - la eliminación de cualquier órgano mecánico de tracción (como engranajes metálicos);<br>
                - la eliminación del uso continuado de lubricantes en las inmediatas cercanías del producto a tratar.
                <br><br>
                La cinta empleada es una cinta modular de baja tensión con las siguientes características:<br>
                - realizada en material plástico certificado, permite el contacto directo con alimentos a granel y envasados;<br>
                - temperatura de empleo -40°C/+90°C;<br>
                - el bajo coeficiente de fricción, la elevada resistencia al desgaste y a la tracción garantizan la máxima fiabilidad y duración en el tiempo;<br>
                - las superficies de deslizamiento y los demás perfiles en contacto con la cinta están realizados en polietileno de alta densidad molecular;<br>
                - las bisagras de empalme, creadas para el pasaje de detergentes, garantizan niveles superiores de higiene, respecto a los estándar;<br>
                - las superficies de la cinta son antiadherentes para  despegar con facilidad el producto y los residuos durante los lavados;<br>
                - el diseño ha sido estudiado para eliminar/reducir la marca de los productos tratados.
                <br><br>
                La estructura de la espiral está realizada en acero inoxidable, con medidas particulares para la máxima higiene durante los lavados.<br>
                Todos los brazos de sostén de la cinta y los demás tubulares de la estructura están soldados en TIG y girados 45º para evitar superficies planas en las que podrían formarse los depósitos.<br>
                Las cámaras se pueden suministrar con diferentes grados de aislamiento, en función de la temperatura de ejercicio.<br>
                El túnel está controlado completamente por una centralita de control equipada con una pantalla gráfica táctil a colores (320×240 píxeles – 256 colores – con iluminación posterior) y por un software desarrollado internamente en la empresa, que permite regular la velocidad de la cinta, la ventilación, los parámetros de la instalación frigorífica, etc.<br>
                La máquina ha sido construida y previamente montada y probada en nuestra empresa, antes de expedirla. Todo esto para estar seguros de su correcto funcionamiento y para preparar lo mejor posible el montaje para el cliente.
            </p>
        </div>
        <div class="col-md-6">
            <a data-fancybox="gallery2" href="{{ asset('img/maquinarias/frigoimpianti/CONTAINER.jpg') }}">
                <img src="{{ asset('img/maquinarias/frigoimpianti/CONTAINER.jpg') }}" alt="" class="rounded img-fluid">
            </a>
            <div class="row pt-2">
                <div class="col-md-4 mb-2">
                    <a data-fancybox="gallery2" href="{{ asset('img/maquinarias/frigoimpianti/INTERNO-container.jpg') }}">
                        <img src="{{ asset('img/maquinarias/frigoimpianti/INTERNO-container.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col-md-4 mb-2">
                    <a data-fancybox="gallery2" href="{{ asset('img/maquinarias/frigoimpianti/Particolare-container.jpg') }}">
                        <img src="{{ asset('img/maquinarias/frigoimpianti/Particolare-container.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col-md-4 mb-2">
                    <a data-fancybox="gallery2" href="{{ asset('img/maquinarias/frigoimpianti/Interno-con-prodotto-.jpg') }}">
                        <img src="{{ asset('img/maquinarias/frigoimpianti/Interno-con-prodotto-.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
            </div>
            <h5 class="text-right mt-5">
                <a href="#tuneles" class="ver-mas"><strong>Volver</strong></a>
            </h5>
        </div>
    </div>
    <div id="tunel3" class="row py-4 border-bottom">
        <div class="col-md-6">
            <h3 class="titulo">
                <span>TÚNEL EN CAÍDA PARA ENFRIAMIENTO O ULTRACONGELACIÓN</span>
            </h3>
            <p>
                <strong>Descripción general:</strong><br>
                El Túnel en caída es una máquina proyectada y realizada completamente a medida para el cliente, ideal para enfriar o ultracongelar productos a granel de pequeñas dimensiones que deben moverse durante la elaboración, para evitar que lleguen aglomerados a la salida.<br>
                El túnel emplea una estructura de superficies paralelas y contrapuestas para que los productos tratados realicen un recorrido con pequeñas caídas desde arriba hacia abajo, evitando que se peguen, y un evaporador revestido que efectúa una ventilación forzada en las superficies, ventilando los productos de manera homogénea.<br>
                Esta máquina es ideal para raviolis, tortellini, canelones, etc.
                <br><br>
                <strong>Características técnicas:</strong><br>
                El desplazamiento se realiza mediante una serie de superficies que, conectadas entre sí por un sistema con cadena/piñones alimentado por un motorreductor y arrastrado por una cinta, crea un recorrido de sentido alterno superficie por superficie.<br>
                La cinta empleada es una cinta modular de baja tensión con las siguientes características:<br>
                - realizada en material plástico certificado, permite el contacto directo con alimentos a granel;<br>
                - temperatura de empleo -40°C/+90°C;<br>
                - el bajo coeficiente de fricción, la elevada resistencia al desgaste y a la tracción garantizan la máxima fiabilidad y duración en el tiempo;<br>
                - las bisagras de empalme, creadas para el pasaje de detergentes, garantizan niveles superiores de higiene, respecto a los estándar;<br>
                - las superficies de la cinta son antiadherentes para  despegar con facilidad el producto y los residuos durante los lavados;<br>
                - el diseño ha sido estudiado para eliminar/reducir la marca de los productos tratados.
                <br><br>
                Toda la estructura de la máquina está realizada en acero inoxidable, con medidas particulares para la máxima higiene durante los lavados.<br>
                Todos los brazos de sostén de la cinta y los demás tubulares de la estructura están hechos para evitar superficies planas en las que podrían formarse los depósitos.<br>
                Las superficies de deslizamiento y los demás perfiles en contacto con la cinta están realizados en polietileno de alta densidad molecular para evitar el desgaste en el tiempo;<br>
                Las cámaras se pueden suministrar con diferentes grados de aislamiento y con medidas técnicas particulares, en función de las temperaturas de ejercicio y de las condiciones de la instalación.<br>
                El túnel está controlado por una centralita de control equipada con una pantalla gráfica táctil a colores (320×240 píxeles – 256 colores  – con iluminación posterior) y por un software desarrollado internamente en la empresa, que permite regular la velocidad de la cinta, la ventilación, los parámetros de la instalación frigorífica, etc.<br>
                La máquina ha sido construida y previamente montada y probada en nuestra empresa, antes de expedirla. Todo esto para estar seguros de su correcto funcionamiento y para preparar lo mejor posible el montaje para el cliente.
            </p>
        </div>
        <div class="col-md-6">
            <a data-fancybox="gallery3" href="{{ asset('img/maquinarias/frigoimpianti/tunnel-caduta.jpg') }}">
                <img src="{{ asset('img/maquinarias/frigoimpianti/tunnel-caduta.jpg') }}" alt="" class="rounded img-fluid">
            </a>
            <div class="row pt-2">
                <div class="col-md-4 mb-2">
                    <a data-fancybox="gallery3" href="{{ asset('img/maquinarias/frigoimpianti/TUNNEL-IN-CADUTA2.jpg') }}">
                        <img src="{{ asset('img/maquinarias/frigoimpianti/TUNNEL-IN-CADUTA2.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col-md-4 mb-2">
                    <a data-fancybox="gallery3" href="{{ asset('img/maquinarias/frigoimpianti/Tunnel_in_caduta-3.jpg') }}">
                        <img src="{{ asset('img/maquinarias/frigoimpianti/Tunnel_in_caduta-3.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col-md-4 mb-2">
                    <a data-fancybox="gallery3" href="{{ asset('img/maquinarias/frigoimpianti/Tunnel_in_caduta-.jpg') }}">
                        <img src="{{ asset('img/maquinarias/frigoimpianti/Tunnel_in_caduta-.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
            </div>
            <h5 class="text-right mt-5">
                <a href="#tuneles" class="ver-mas"><strong>Volver</strong></a>
            </h5>
        </div>
    </div>
    <div id="tunel4" class="row py-4 border-bottom">
        <div class="col-md-6">
            <h3 class="titulo">
                <span>TÚNEL BIFLUJO PARA ENFRIAMIENTO, ULTRACONGELACIÓN O ENDURECIMIENTO</span>
            </h3>
            <p>
                <strong>Descripción general:</strong><br>
                El Túnel biflujo Frigo Impianti es una máquina muy compacta, estudiada para utilizarse en las producciones en línea, para enfriar o ultracongelar en muy breve tiempo todos aquellos productos “finos y planos” que deben permanecer inmóviles en la cinta durante la elaboración, como por ejemplo las hamburguesas, etc.<br>
                Esta máquina es ideal también para el “endurecimiento superficial” de una vasta categoría de productos que han sufrido un proceso de  jeringado o que se deben rebanar.
                <br><br>
                <strong>Características técnicas:</strong><br>
                La particularidad de esta máquina radica en su sistema de ventilación el cuál, a través de una serie de brazos metálicos perforados con transportadores de aire direccionales, colocados tanto en la parte superior como inferior de la cinta, genera cientos de chorros de aire de alta velocidad, iguales y contrapuestos, que llegan al producto de manera uniforme, enfriándolo rápidamente y manteniéndolo inmóvil durante el trayecto.<br>
                El desplazamiento se realiza mediante una única cinta alimentada por un motorreductor.<br>
                La cinta empleada es una cinta modular de baja tensión con las siguientes características:<br>
                - realizada en material plástico certificado, permite el contacto directo con alimentos a granel;<br>
                - temperatura de empleo -40°C/+90°C;<br>
                - el bajo coeficiente de fricción, la elevada resistencia al desgaste y a la tracción garantizan la máxima fiabilidad y duración en el tiempo;<br>
                - las bisagras de empalme, creadas para el pasaje de detergentes, garantizan niveles superiores de higiene, respecto a los estándar;<br>
                - las superficies de la cinta son antiadherentes para  despegar con facilidad el producto y los residuos durante los lavados;<br>
                - el diseño ha sido estudiado para eliminar/reducir la marca de los productos tratados.
                <br><br>
                La estructura de la máquina está realizada en acero inoxidable, con medidas particulares para la máxima higiene durante los lavados.<br>
                Las superficies de deslizamiento y los demás perfiles en contacto con la cinta están realizados en polietileno de alta densidad molecular para evitar el desgaste en el tiempo;<br>
                Las cámaras se pueden suministrar con diferentes grados de aislamiento y con medidas técnicas particulares, en función de las temperaturas de ejercicio y de las condiciones de la instalación.<br>
                El túnel está completamente controlado por una centralita electrónica de control equipada con una pantalla gráfica táctil a colores (320×240 píxeles – 256 colores  – con iluminación posterior) y por un software desarrollado internamente en la empresa, que permite regular la velocidad de la cinta, la ventilación, los parámetros de la instalación frigorífica, etc.<br>
                La máquina ha sido construida y previamente montada y probada en nuestra empresa, antes de expedirla. Todo esto para estar seguros de su correcto funcionamiento y para preparar lo mejor posible el montaje para el cliente.
            </p>
        </div>
        <div class="col-md-6">
            <a data-fancybox="gallery4" href="{{ asset('img/maquinarias/frigoimpianti/Tunnel_Biflusso.jpg') }}">
                <img src="{{ asset('img/maquinarias/frigoimpianti/Tunnel_Biflusso.jpg') }}" alt="" class="rounded img-fluid">
            </a>
            <div class="row pt-2">
                <div class="col-md-4 mb-2">
                    <a data-fancybox="gallery4" href="{{ asset('img/maquinarias/frigoimpianti/Tunnel-biflusso-nastro.jpg') }}">
                        <img src="{{ asset('img/maquinarias/frigoimpianti/Tunnel-biflusso-nastro.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col-md-4 mb-2">
                    <a data-fancybox="gallery4" href="{{ asset('img/maquinarias/frigoimpianti/tunnel-biflusso-nastro-cibo.jpg') }}">
                        <img src="{{ asset('img/maquinarias/frigoimpianti/tunnel-biflusso-nastro-cibo.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col-md-4 mb-2">
                    <a data-fancybox="gallery4" href="{{ asset('img/maquinarias/frigoimpianti/Biflusso_frontale-.jpg') }}">
                        <img src="{{ asset('img/maquinarias/frigoimpianti/Biflusso_frontale-.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
                <div class="col-md-4 mb-2">
                    <a data-fancybox="gallery4" href="{{ asset('img/maquinarias/frigoimpianti/tunnel-srgelazione.jpg') }}">
                        <img src="{{ asset('img/maquinarias/frigoimpianti/tunnel-srgelazione.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
            </div>
            <h5 class="text-right mt-5">
                <a href="#tuneles" class="ver-mas"><strong>Volver</strong></a>
            </h5>
        </div>
    </div>
    <div id="tunel5" class="row py-4 border-bottom">
        <div class="col-md-6">
            <h3 class="titulo">
                <span>TÚNEL FLUCTUANTE PARA ENFRIAMIENTO O ULTRACONGELACIÓN</span>
            </h3>
            <p>
                <strong>Descripción general:</strong><br>
                El Túnel fluctuante, o de “lecho fluido”,es un sistema estudiado para emplearse en las elaboraciones en línea de todos aquellos productos de tamaño pequeño como: cerezas, guisantes, tortellini, etc. que necesitan congelarse rápidamente y de manera uniforme y precisa para garantizar la completa preservación de sus características organolépticas y una gestión correcta en la fase sucesiva de envasado, evitando el problema de encontrarse con aglomerados de productos helados.
                <br><br>
                <strong>Características técnicas:</strong><br>
                El sistema de ventilación de la máquina está constituido por potentes ventiladores que, dirigiendo el aire por debajo del recorrido rectilíneo por el que pasa el producto, lo levanta congelándolo.<br>
                El túnel está compuesto por dos cintas transportadoras colocadas en serie. En la primera cinta se congela la parte exterior del producto mediante una ventilación muy fuerte que genera una turbulencia que separa cada producto de los demás. En la segunda cinta se realiza el congelamiento final. Con este proceso, los líquidos en el interior del producto se transforman rápidamente en micro cristales de hielo, cuya conformación no genera ningún daño a las paredes celulares. De esta manera, se evita la fuga de líquidos intracelulares del alimento que, en la fase de descongelación vuelve a su aspecto y sustancia originarios, preservando la frescura lo mejor posible.<br>
                El desplazamiento se realiza mediante dos motorreductores que permiten variar las velocidades de las dos cintas de manera completamente independiente, mediante un inversor de 0% a 100%, para poder adaptarse también a diferentes tipos de producto.<br>
                La cinta empleada es una cinta modular de baja tensión con las siguientes características:<br>
                - realizada en material plástico certificado, permite el contacto directo con alimentos a granel;<br>
                - temperaturas de empleo -40°C/+90°C;<br>
                - el bajo coeficiente de fricción y la elevada resistencia al desgaste garantizan una elevada fiabilidad y la máxima duración en el tiempo;<br>
                - las bisagras de empalme, creadas para el pasaje de detergentes, garantizan niveles superiores de higiene, respecto a los estándar.<br>
                - las superficies de la cinta son antiadherentes para  despegar con facilidad el producto y los residuos durante los lavados.<br>
                - el diseño de la cinta ha sido estudiado para eliminar/reducir la marca de los productos tratados.
                <br><br>
                La estructura de la máquina está realizada en acero inoxidable, con medidas particulares para la máxima higiene durante los lavados.<br>
                Las cámaras se pueden suministrar con diferentes grados de aislamiento y con medidas técnicas particulares, en función de las temperaturas de ejercicio y de las condiciones de la instalación.<br>
                El túnel está controlado completamente por una centralita de control equipada con una pantalla gráfica táctil a colores (320×240 píxeles – 256 colores – con iluminación posterior) y por un software desarrollado internamente en la empresa, que permite regular la velocidad de la cinta, la ventilación, los parámetros de la instalación frigorífica, etc.<br>
                La máquina ha sido construida y previamente montada y probada en nuestra empresa, antes de expedirla. Todo esto para estar seguros de su correcto funcionamiento y para preparar lo mejor posible el montaje para el cliente.
            </p>
        </div>
        <div class="col-md-6">
            <a data-fancybox="gallery5" href="{{ asset('img/maquinarias/frigoimpianti/Nastro-interno.jpg') }}">
                <img src="{{ asset('img/maquinarias/frigoimpianti/Nastro-interno.jpg') }}" alt="" class="rounded img-fluid">
            </a>
            <div class="row pt-2">
                <div class="col-md-4 mb-2">
                    <a data-fancybox="gallery5" href="{{ asset('img/maquinarias/frigoimpianti/tortellini-su-nastro.jpg') }}">
                        <img src="{{ asset('img/maquinarias/frigoimpianti/tortellini-su-nastro.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
            </div>
            <h5 class="text-right mt-5">
                <a href="#tuneles" class="ver-mas"><strong>Volver</strong></a>
            </h5>
        </div>
    </div>
    <div id="tunel6" class="row py-4 border-bottom">
        <div class="col-md-6">
            <h3 class="titulo">
                <span>TÚNEL CON CARROS PARA ENFRIAMIENTO O ULTRACONGELACIÓN</span>
            </h3>
            <p>
                <strong>Descripción general:</strong><br>
                El Túnel con carroses una instalación indicada para enfriar o ultracongelar pequeñas cantidades de productos, de forma discontinua.<br>
                Esta instalación se compone de una cámara con suelo, en cuyo interior se pueden alojar uno o varios carros con bandejas, de acero inoxidable.<br>
                Las cámaras se pueden suministrar con diferentes grados de aislamiento, en función de la temperatura de ejercicio.
                <br><br>
                <strong>Control eléctrico:</strong><br>
                El sistema de control está constituido por un cuadro de mando equipado con un termostato de regulación, mediante el que el usuario puede configurar manualmente el funcionamiento de la instalación (punto de regulación, diferenciales, tiempos, relés auxiliares, etc.).<br>
                La máquina ha sido construida y previamente montada y probada en nuestra empresa, antes de expedirla. Todo esto para estar seguros de su correcto funcionamiento y para preparar lo mejor posible el montaje para el cliente.
            </p>
        </div>
        <div class="col-md-6">
            <a data-fancybox="gallery6" href="{{ asset('img/maquinarias/frigoimpianti/Tunnel-a-carrelli.jpg') }}">
                <img src="{{ asset('img/maquinarias/frigoimpianti/Tunnel-a-carrelli.jpg') }}" alt="" class="rounded img-fluid">
            </a>
            <div class="row pt-2">
                <div class="col-md-4 mb-2">
                    <a data-fancybox="gallery6" href="{{ asset('img/maquinarias/frigoimpianti/Tunnel-carrelli.jpg') }}">
                        <img src="{{ asset('img/maquinarias/frigoimpianti/Tunnel-carrelli.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
            </div>
            <h5 class="text-right mt-5">
                <a href="#tuneles" class="ver-mas"><strong>Volver</strong></a>
            </h5>
        </div>
    </div>
    <div id="tunel7" class="row py-4 border-bottom">
        <div class="col-md-6">
            <h3 class="titulo">
                <span>PASTEURIZADOR ESPIRAL PARA PASTA FRESCA – Modelo “COMPACT”</span>
            </h3>
            <p>
                <strong>Descripción general:</strong><br>
                El pasterizador espiral “COMPACT” es una de las últimas novedades de nuestra empresa y representa una nueva generación de pasterizadores para el tratamiento de pasta fresca rellena y sin relleno, que dejan el producto visualmente inalterado.<br>
                Gracias a su sistema de transporte en “espiral”, esta máquina es capaz de tratar grandes cantidades de producto en un espacio muy reducido.<br>
                Al contrario de los comunes pasterizadores en comercio que utilizan el sistema de vapor saturado, COMPACT tiene una tecnología especial que utiliza una “mezcla de calor y vapor ventilada” como fuente de pasterización. La máquina se compone por una instalación de ventilación forzada para un tratamiento perfecto del producto y un sistema especial compuesto por dos baterías de calefacción de vapor y por un circuito de humidificación, independientes entre sí, que permite controlar la temperatura y la humedad en el interior de la habitación de pasterización.<br>
                La velocidad de la cinta, la temperatura y la humedad se pueden regular electrónicamente, mediante una centralita digital de control.<br>
                El resultado final del empleo de COMPACT será un producto de calidad, con una superficie más seca y un aspecto “natural”, como antes de realizar la pasterización.
                <br><br>
                <strong>Características técnicas:</strong><br>
                Estructura maestra de acero inoxidable AISI 304 con soportes regulables en altura, que puede inspeccionarse completamente gracias a una serie de puertas colocadas en todos los lados, para facilitar el lavado y realizar un saneamiento perfecto.<br>
                - Cinta modular de plástico certificado para alimentos, con pivotes y mallas de contención de acero inoxidable AISI 304, que reducen el alargamiento excesivo.  Velocidad regulable mediante inversor.<br>
                - Habitación de pasterización ventilada mediante un ventilador ubicado en la parte superior y regulable mediante inversor. No necesita tramo final de ventilación y secado.<br>
                - Instalación de calefacción con tubos con aletas de acero inoxidable AISI 304 alimentados con vapor y regulables mediante válvula modulante electrónica.<br>
                - Instalación de humidificación formada por toberas de acero inoxidable AISI 304 regulables mediante válvula electrónica.<br>
                - Circuito by-pass para la exclusión de las válvulas electrónicas que permiten el funcionamiento en manual también.<br>
                - Sistema de aspiración del vapor superfluo compuesto por campanas de acero inoxidable AISI 304 con cierres regulables y aspirador centrífugo de acero inoxidable.<br>
                - Motorreductor para el remolque de la cinta con inversor.<br>
                - Sistema motorizado para la separación del producto de la cinta.
                <br><br>
                El pasterizador está controlado completamente por una centralita de control equipada con una pantalla gráfica táctil a colores (320×240 píxeles – 256 colores – con iluminación posterior) y con un software desarrollado en la empresa, que permite regular la velocidad de la cinta, la ventilación y los parámetros de la instalación frigorífica.<br>
                La máquina ha sido construida y previamente montada y probada en nuestra empresa, antes de expedirla. Todo esto para estar seguros de su correcto funcionamiento y para preparar lo mejor posible el montaje para el cliente.
            </p>
        </div>
        <div class="col-md-6">
            <a data-fancybox="gallery7" href="{{ asset('img/maquinarias/frigoimpianti/Pastorizzatore_Spirale_COMPACT.jpg') }}">
                <img src="{{ asset('img/maquinarias/frigoimpianti/Pastorizzatore_Spirale_COMPACT.jpg') }}" alt="" class="rounded img-fluid">
            </a>
            <div class="row pt-2">
                <div class="col-md-4 mb-2">
                    <a data-fancybox="gallery7" href="{{ asset('img/maquinarias/frigoimpianti/Pastorizzatore_CONTAINER_1.jpg') }}">
                        <img src="{{ asset('img/maquinarias/frigoimpianti/Pastorizzatore_CONTAINER_1.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
            </div>
            <h5 class="text-right mt-5">
                <a href="#tuneles" class="ver-mas"><strong>Volver</strong></a>
            </h5>
        </div>
    </div>
    <div id="tunel8" class="row py-4">
        <div class="col-md-6">
            <h3 class="titulo">
                <span>TÚNEL DE SECADO Y ENFRIAMIENTO PARA PASTA FRESCA – Modelo “AR”</span>
            </h3>
            <p>
                <strong>Descripción general:</strong><br>
                El nuevo túnel “AR” es una máquina muy compacta, proyectada y realizada a medida para el cliente, dirigida a todos los productores de pasta fresca rellena y sin relleno.<br>
                Este túnel con superficies en “caída” es capaz de realizar en línea continua, en el interior de una única cámara, tanto el ciclo de secado a baja temperatura +25ºC/+28ºC (contrariamente a los +50ºC/+60ºC de los sistemas tradicionales), como el enfriamiento a +4ºC.<br>
                La particularidad de esta máquina es la de poder secar el producto a través de un sistema de circulación forzada del aire, que utiliza el “frío” producido por una unidad frigorífica dedicada, sin tener que recurrir al uso del aire exterior. De esta manera, se evita la posible contaminación del producto a causa de factores externos, aumentando su “vida útil” y su calidad.<br>
                De hecho, a partir de los múltiples test efectuados en diferentes productos, resulta que la carga bacteriana detectada al final de la pasteurización se mantiene inalterada hasta la fase de envasado, aumentando la vida útil del producto unos 70/80 días, a diferencia de los 20/30 usuales.<br>
                Además de esto, el Túnel “AR” garantiza también un importante ahorro energético, gracias a su “sistema de recuperación del calor” que aprovecha el gas caliente producido por el grupo frigorífico para producir el aire seco, necesario en el primer estadio de “secado”.<br>
                El Túnel está constituido por una única cámara dividida en dos habitaciones separadas y superpuestas, que emplean dos evaporadores ventilados con revestimiento forzado; uno posicionado en la parte superior, dedicada al ciclo de secado con recuperación de calor y otro colocado en la parte inferior, dedicada al ciclo de enfriamiento.
                <br><br>
                <strong>Características técnicas:</strong><br>
                El desplazamiento se realiza mediante una serie de superficies que, conectadas entre sí por un sistema con cadena/piñones alimentado por un motorreductor y arrastrado por una cinta, crea un recorrido de sentido alterno superficie por superficie.<br>
                La cinta empleada es una cinta modular de baja tensión con las siguientes características:<br>
                - realizada en material plástico certificado, permite el contacto directo con alimentos a granel;<br>
                - temperatura de empleo -40°C/+90°C;<br>
                - el bajo coeficiente de fricción, la elevada resistencia al desgaste y a la tracción garantizan la máxima fiabilidad y duración en el tiempo;<br>
                - las bisagras de empalme, creadas para el pasaje de detergentes, garantizan niveles superiores de higiene, respecto a los estándar;<br>
                - las superficies de la cinta son antiadherentes para  despegar con facilidad el producto y los residuos durante los lavados;<br>
                - el diseño ha sido estudiado para eliminar/reducir la marca de los productos tratados.
                <br><br>
                Toda la estructura de la máquina está realizada en acero inoxidable, con medidas particulares para la máxima higiene durante los lavados.<br>
                Todos los brazos de sostén de la cinta y los demás tubulares de la estructura están hechos para evitar superficies planas en las que podrían formarse los depósitos.<br>
                Las superficies de deslizamiento y los demás perfiles en contacto con la cinta están realizados en polietileno de alta densidad molecular para evitar el desgaste en el tiempo;<br>
                El túnel está controlado completamente por una centralita electrónica de control equipada con una pantalla gráfica táctil a colores (320×240 píxeles – 256 colores  – con iluminación posterior) y por un software desarrollado internamente en la empresa, que permite regular la velocidad de la cinta, la ventilación, los parámetros de la instalación frigorífica, etc.<br>
                La máquina ha sido construida y previamente montada y probada en nuestra empresa, antes de expedirla. Todo esto para estar seguros de su correcto funcionamiento y para preparar lo mejor posible el montaje para el cliente.
            </p>
        </div>
        <div class="col-md-6">
            <a data-fancybox="gallery8" href="{{ asset('img/maquinarias/frigoimpianti/Tunnel-AR_frontale-.jpg') }}">
                <img src="{{ asset('img/maquinarias/frigoimpianti/Tunnel-AR_frontale-.jpg') }}" alt="" class="rounded img-fluid">
            </a>
            <div class="row pt-2">
                <div class="col-md-4 mb-2">
                    <a data-fancybox="gallery8" href="{{ asset('img/maquinarias/frigoimpianti/Tunnel_in_caduta-.jpg') }}">
                        <img src="{{ asset('img/maquinarias/frigoimpianti/Tunnel_in_caduta-.jpg') }}" alt="" class="rounded img-fluid">
                    </a>
                </div>
            </div>
            <h5 class="text-right mt-5">
                <a href="#tuneles" class="ver-mas"><strong>Volver</strong></a>
            </h5>
        </div>
    </div>
</section>
@endsection