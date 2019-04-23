@extends('layouts.web')
@section('content')
<header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading" class="prim_tlt"><i>DIAGNÓSTICO</i></h1>  
            </div>
        </div>
</header>

<!-- ______________________________________________________________________-->

    <section class="panel_uno" id="">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                    <div class="categoria_productos">
                        <p>LÁMPARAS DE HENDIDURA</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                    <div class="categoria_productos">
                        <p>CÁMARAS DIGITALES</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                    <div class="categoria_productos">
                        <p>OFTALMÓMETRO</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                    <div class="categoria_productos">
                        <p>LENSÓMETRO</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                    <div class="categoria_productos">
                        <p>TONÓMETROS</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                    <div class="categoria_productos">
                        <p>MICROSCOPIO ESPECULAR</p>
                    </div>
                </div>
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
                            <h3>SL-2G</h3>
                        </div>
                    </div>

                    <div class="single-product col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="product-f-image">
                            <img src="img/producto.jpg" width="100%" alt="">
                            <h3>SL-2G</h3>
                        </div>
                    </div>
                    <div class="single-product col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="product-f-image">
                            <img src="img/producto.jpg" width="100%" alt="">
                            <h3>SL-2G</h3>
                        </div>                                
                    </div>
                  
                   
                    <div class="single-product col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="product-f-image">
                            <img src="img/producto.jpg" width="100%" alt="">
                            <h3>SL-2G</h3>
                        </div>                                 
                    </div>

                    <div class="single-product col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="product-f-image">
                            <img src="img/producto.jpg" width="100%" alt="">
                            <h3>SL-2G</h3>
                        </div>                                
                    </div>

                    <div class="single-product col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="product-f-image">
                            <img src="img/producto.jpg" width="100%" alt="">
                            <h3>SL-2G</h3>
                        </div>                                
                    </div>                    
                </div> <!-- cierre div.product-carousel -->
            </div>
        </div>
    </section>    
@stop
@push('style')
<link href="css/categoria_productos.css" rel="stylesheet">
@endpush