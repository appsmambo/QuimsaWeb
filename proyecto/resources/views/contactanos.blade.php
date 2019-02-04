@extends('layouts.main')
@section('title', 'Contáctanos :: Quimsa - Pasión por la calidad')
@section('body')
<section class="container text-center bg-white mt-4">
    <h1 class="titulo">
        <span>CONTÁCTENOS</span>
    </h1>
    <p class="titulo">
        Av. Pablo Carriquiry 455 Of. 10. San Isidro
        <br>
        Lima - Perú
        <br>
        Tel. (51-1) 224 2906 / (51-1) 224 3205
        <br>
        <a href="mailto:oficina@quimsaperu.com">oficina@quimsaperu.com</a>
    </p>
</section>
<section class="container contenedor py-5 mb-4">
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