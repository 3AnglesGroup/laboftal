@extends('layouts.web')
@section('content')



    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading" class="prim_tlt">PRODUCTOS</h1>
            </div>
        </div>
    </header>

<!-- ______________________________________________________________________-->

    <section class="panel_uno" id="">
        <div class="container">
            <div class="row">
                <div class="logo_marca col-lg-2 col-md-4 col-sm-6 col-xs-6"><img src="" alt=""></div>
                <div class="logo_marca col-lg-2 col-md-4 col-sm-6 col-xs-6"><img src="" alt=""></div>
                <div class="logo_marca col-lg-2 col-md-4 col-sm-6 col-xs-6"><img src="" alt=""></div>
                <div class="logo_marca col-lg-2 col-md-4 col-sm-6 col-xs-6"><img src="" alt=""></div>
                <div class="logo_marca col-lg-2 col-md-4 col-sm-6 col-xs-6"><img src="" alt=""></div>
                <div class="logo_marca col-lg-2 col-md-4 col-sm-6 col-xs-6"><img src="" alt=""></div>
            </div>
        </div>
    </section>

<!-- ______________________________________________________________________-->
    <categories></categories>

@stop
@push('style')
<link href="css/productos.css" rel="stylesheet">
@endpush
