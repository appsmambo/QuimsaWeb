@extends('layouts.main')
@section('title', 'Quimsa - Pasión por la calidad')
@section('slider')
<div class="slider">
    <div><img src="{{ asset('img/slider-1.jpg') }}" class="img-fluid" alt=""></div>
    <div><img src="{{ asset('img/slider-2.jpg') }}" class="img-fluid" alt=""></div>
</div>
@endsection
@section('body')
<section class="container">
    <div class="row nosotros">
        <div class="col-md">
            &nbsp;
        </div>
        <div class="col-md bg-white text-center">
            <h1 class="titulo">
                <span>NOSOTROS</span>
            </h1>
            <p class="titulo">
                Somos una empresa peruana, que tiene como propósito brindar soluciones para la industria alimentaria, buscando la satisfacción total de nuestros clientes.
                <br><br>
                A travez de la innovación, tecnología, calidad y servicio; buscamos ser la mejor alternativa del mercado.
            </p>
        </div>
    </div>
</section>
<section class="container contenedor productos-home py-5 mb-4">
    <div class="row">
        <div class="col-md text-center">
            <img src="{{ asset('img/tripas.jpg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-md text-center">
            <img src="{{ asset('img/carrageninas.jpg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-md text-center">
            <img src="{{ asset('img/fundas.jpg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-md text-center">
            <img src="{{ asset('img/proteinas.jpg') }}" class="img-fluid" alt="">
        </div>
    </div>
</section>
@endsection