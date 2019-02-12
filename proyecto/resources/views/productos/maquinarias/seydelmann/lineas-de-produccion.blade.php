@extends('layouts.main')
@section('title', 'Líneas de producción
 - SEYDELMANN :: Quimsa - Pasión por la calidad')
@section('body')
<section class="container bg-white contenedor py-4 mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias') }}">Maquinarias</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias/seydelmann') }}">Seydelmann</a></li>
            <li class="breadcrumb-item active" aria-current="page">Líneas de producción
</li>
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
            <span>Líneas de producción</span>
        </h3>
        <p>
            Las máquinas de Seydelmann pueden integrarse para formar soluciones completas individualizadas (parcialmente) automatizadas o en secuencias de producción actuales. Las líneas de producción de Seydelmann permiten realizar todos los pasos de producción con máxima calidad y eficiencia.<br>
            La producción automatizada permite rendimientos por hora considerablemente superiores y una calidad constante de producto con necesidades mínimas de energía y personal. Otras ventajas son una mejor higiene, menores fuentes de fallos, así como un aseguramiento continuo de la calidad y reproducibilidad gracias al registro de datos.<br>
            Las líneas de producción de Seydelmann se utilizan en todos los campos del procesamiento de alimentos, así p.ej. en la producción de productos cárnicos, de queso y verduras, como sopas, salsas y dulces. Cada línea se planifica, fabrica y desarrolla en base a las necesidades individuales del usuario. Si se desea, los trabajadores de Seydelmann le asistirán durante toda la planificación de la automatización de la producción con un asesoramiento amplio y competente.
        </p>
    </div>
    <div class="py-4 border-bottom">
        <p>
            <strong>Líneas de producción para productos de carne picada, hamburguesas y embutido crudo</strong>
        </p>
        <p class="text-center">
            <img src="{{ asset('img/maquinarias/seydelmann/021.jpg') }}" alt="" class="rounded img-fluid"><br>
            <small>Molino Universal AW 300 U con dispositivo de carga para grandes recipientes, tornillo sin fin de transporte, dos Mezcladoras MR 2500 con cintas transportadoras transversales y dispositivos de pesaje, tornillo sin fin de transporte con salida girable y dos Molinos Finales MU 200</small>
        </p>
    </div>
    <div class="py-4 border-bottom">
        <p>
            <strong>Líneas de producción para salchichas para asar/freír y otras emulsiones</strong>
        </p>
        <p class="text-center">
            <img src="{{ asset('img/maquinarias/seydelmann/MRU-1300-Foto-3.jpg') }}" alt="" class="rounded img-fluid"><br>
            <small>Mezcladora Molino MRU 1300 con refrigeración, Molino para carne congelada GW 300 con cinta transportadora inclinada, tornillo sin fin de transporte y Cúter al vacío K 754 AC-8 con depósito de alimentación</small>
            <br><br>
            <img src="{{ asset('img/maquinarias/seydelmann/AG-160-Foto-2.jpg') }}" alt="" class="rounded img-fluid"><br>
            <small>Molino Automático AG 160, Molino para carne congelada GW 300, tornillo sin fin de transporte, dos Mezcladoras MR 1800, tolva-depósito con bomba y tubería, Emulsificadora ‘Konti-Kutter’ KK 250 AC-6 y Mezcladora al vacío VMR 3500 con dispositivo de carga para grandes recipientes</small>
            <br><br>
            <img src="{{ asset('img/maquinarias/seydelmann/GX-400-Foto-1.jpg') }}" alt="" class="rounded img-fluid"><br>
            <small>Cinta transportadora inclinada con mesa de entrega, Molino para carne congelada GX 400, tornillo sin fin de transporte girable, dos Mezcladoras MR 3500 con mástil de alimentación, cinta transportadora y Emulsificadora’Konti-Kutter’ KK 250 AC-6</small>
        </p>
    </div>
    <div class="py-4 border-bottom">
        <p>
            <strong>Línea de producción para embutido cocido y paté</strong>
        </p>
        <p class="text-center">
            <img src="{{ asset('img/maquinarias/seydelmann/MR-700-Foto-4.jpg') }}" alt="" class="rounded img-fluid"><br>
            <small>Mezcladora de cocción MR 700 con mástil de alimentación, tolva con bomba, depósito de alimentación, cúter de cocción al vacío K 1004 AC-8 y tolva con bomba</small>
        </p>
    </div>
    <div class="py-4">
        <p>
            <strong>Control de líneas de producción: Terminal central de mando</strong><br>
            El terminal central de mando garantiza la óptima interacción de máquinas individuales en la línea de producción. El sistema de control basado en Windows es la interfaz central desde la cual se manejan todas las máquinas y sus funciones adicionales. Todas las informaciones sobre los diferentes pasos de producción se procesan aquí de forma conjunta. Se puede configurar la producción en base a recetas almacenadas o valores predeterminados. Dado que el terminal central de mando permite la supervisión y manejo por parte de una única persona de todas las funciones, como p.ej. velocidad, valores de vacío, gasificación, velocidad de las técnicas de transporte y el análisis de grasa, los costes de personal y las fuentes potenciales de fallo se reducen al mínimo. El terminal se puede conectar a pasos de producción anteriores o siguientes o en la red de la empresa o sistema ERP de la empresa.<br>
            Gracias a la posibilidad de integración de un segundo puesto de trabajo, también se puede supervisar la producción completa fuera de las salas de producción.
        </p>
        <p class="text-center">
            <img src="{{ asset('img/maquinarias/seydelmann/zentrales_bedienterminal.jpg') }}" alt="" class="rounded img-fluid"><br>
            <small>Panel central de mando con Auto-Command 4000</small>
        </p>
    </div>
</section>
@endsection