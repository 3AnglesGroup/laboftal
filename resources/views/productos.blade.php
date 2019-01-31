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

    <section class="panel_dos" id="">
        <div class="container">
            <div class="row">

                <div class="product-carousel">
                    <div class="single-product col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="product-f-image">
                            <img src="img/producto.jpg" width="100%" alt="">
                            <div class="product-hover">
                                <a href="/detalle" class="name_product"> DIAGNÓSTICO</a>
                            </div>
                        </div>
                    </div>

                    <div class="single-product col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="product-f-image">
                            <img src="img/producto.jpg" width="100%" alt="">
                            <div class="product-hover">
                                <a href="#" class="name_product">DIAGNÓSTICO</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-product col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="product-f-image">
                            <img src="img/producto.jpg" width="100%" alt="">
                            <div class="product-hover">
                                <a href="#" class="name_product">DIAGNÓSTICO</a>
                            </div>
                        </div>
                    </div>


                    <div class="single-product col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="product-f-image">
                            <img src="img/producto.jpg" width="100%" alt="">
                            <div class="product-hover">
                                <a href="#" class="name_product">DIAGNÓSTICO</a>
                            </div>
                        </div>
                    </div>

                    <div class="single-product col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="product-f-image">
                            <img src="img/producto.jpg" width="100%" alt="">
                            <div class="product-hover">
                                <a href="#" class="name_product">DIAGNÓSTICO</a>
                            </div>
                        </div>
                    </div>

                    <div class="single-product col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="product-f-image">
                            <img src="img/producto.jpg" width="100%" alt="">
                            <div class="product-hover">
                                <a href="#" class="name_product">DIAGNÓSTICO</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- cierre div.product-carousel -->
            </div>
        </div>
    </section>
@stop
@push('style')
<link href="css/productos.css" rel="stylesheet">
@endpush
