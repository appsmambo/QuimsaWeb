@extends('layouts.main')
@section('title', 'KT Maquinarias :: Quimsa - Pasión por la calidad')
@section('body')
<section class="container bg-white contenedor py-4 mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/productos/maquinarias') }}">Maquinarias</a></li>
            <li class="breadcrumb-item active" aria-current="page">KT</li>
        </ol>
    </nav>
    <div class="row mb-4">
        <div class="col-md-8">
            <h1 class="borde mb-4">
                MAQUINARIAS
            </h1>
        </div>
        <div class="col-md-4 text-center">
            <img src="{{ asset('img/marcas/kt.png') }}" alt="" class="img-fluid">
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-4">
            <div class="card h-100 d-inline-block">
                <img src="{{ asset('img/maquinarias/kt/Fish scaler KT-S.jpg') }}" class="card-img-top" alt="">
                <div class="card-body text-center">
                    <h5 class="card-title">Fish scaler KT-S</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 d-inline-block">
                <img src="{{ asset('img/maquinarias/kt/Slicer-F-19S.jpg') }}" class="card-img-top" alt="">
                <div class="card-body text-center">
                    <h5 class="card-title">Slicer F-19S</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 d-inline-block">
                <img src="{{ asset('img/maquinarias/kt/KT-PK Meat Tenderizer - side.jpg') }}" class="card-img-top" alt="">
                <div class="card-body text-center">
                    <h5 class="card-title">KT-PK Meat Tenderizer - side</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-4 border-bottom">
        <div class="col-md-4">
            <div class="card h-100 d-inline-block">
                <img src="{{ asset('img/maquinarias/kt/LM-5P - Front.jpg') }}" class="card-img-top" alt="">
                <div class="card-body text-center">
                    <h5 class="card-title">LM-5P - Front</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 d-inline-block">
                <img src="{{ asset('img/maquinarias/kt/Meat Press KT-ALP.jpg') }}" class="card-img-top" alt="">
                <div class="card-body text-center">
                    <h5 class="card-title">Meat Press KT-ALP</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 d-inline-block">
                <img src="{{ asset('img/maquinarias/kt/Meat shredder KT-SH-1 left.jpg') }}" class="card-img-top" alt="">
                <div class="card-body text-center">
                    <h5 class="card-title">Meat shredder KT-SH-1, left</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-md-4">
            <div class="card h-100 d-inline-block">
                <img src="{{ asset('img/maquinarias/kt/KT-FJL Cheese cutter.jpg') }}" class="card-img-top" alt="">
                <div class="card-body text-center">
                    <h5 class="card-title">KT-FJL Cheese cutter</h5>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection