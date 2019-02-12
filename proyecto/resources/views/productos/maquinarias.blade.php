@extends('layouts.main')
@section('title', 'Maquinarias :: Quimsa - Pasión por la calidad')
@section('slider')
<div class="slider">
    <div><img src="{{ asset('img/productos-1.jpg') }}" class="img-fluid" alt=""></div>
    <div><img src="{{ asset('img/productos-2.jpg') }}" class="img-fluid" alt=""></div>
    <div><img src="{{ asset('img/productos-3.jpg') }}" class="img-fluid" alt=""></div>
</div>
@endsection
@section('body')
<section class="container contenedor py-5 mb-4">
    <h1 class="text-center mb-4">
        MAQUINARIAS
    </h1>
    <div class="row justify-content-md-center">
        <div class="col-md-5 text-center">
            <div class="shadow bg-white pt-4 mb-4">
                <a href="{{ url('productos/maquinarias/astech') }}">
                    <h2>ASTECH</h2>
                    <img src="{{ asset('img/maquinarias/astech.jpg') }}" class="img-fluid" alt="">
                </a>
            </div>
        </div>
        <div class="col-md-5 text-center">
            <div class="shadow bg-white pt-4 mb-4">
                <a href="{{ url('productos/maquinarias/frigoimpianti') }}">
                    <h2>FRIGOIMPIANTI</h2>
                    <img src="{{ asset('img/maquinarias/frigoimpianti.jpg') }}" class="img-fluid" alt="">
                </a>
            </div>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-md-5 text-center">
            <div class="shadow bg-white pt-4 mb-4">
                <a href="{{ url('productos/maquinarias/gil') }}">
                    <h2>GIL</h2>
                    <img src="{{ asset('img/maquinarias/gil.jpg') }}" class="img-fluid" alt="">
                </a>
            </div>
        </div>
        <div class="col-md-5 text-center">
            <div class="shadow bg-white pt-4 mb-4">
                <a href="{{ url('productos/maquinarias/seydelmann') }}">
                    <h2>SEYDELMANN</h2>
                    <img src="{{ asset('img/maquinarias/seydelmann.jpg') }}" class="img-fluid" alt="">
                </a>
            </div>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-md-5 text-center">
            <div class="shadow bg-white pt-4 mb-4">
                <a href="{{ url('productos/maquinarias/gaser') }}">
                    <h2>GASER</h2>
                    <img src="{{ asset('img/maquinarias/gaser.jpg') }}" class="img-fluid" alt="">
                </a>
            </div>
        </div>
        <div class="col-md-5 text-center">
            <div class="shadow bg-white pt-4 mb-4">
                <a href="{{ url('productos/maquinarias/kt') }}">
                    <h2>KT</h2>
                    <img src="{{ asset('img/maquinarias/kt.jpg') }}" class="img-fluid" alt="">
                </a>
            </div>
        </div>
    </div>
</section>
@endsection