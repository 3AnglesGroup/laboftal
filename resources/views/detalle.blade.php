@extends('layouts.web')
@section('content')
<!-- ______________________________________________________________________-->

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading" class="prim_tlt"><i>SL-2G</i></h1>
            </div>
        </div>
    </header>

<!-- ______________________________________________________________________-->

    <section class="panel_categorias" id="">
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

    <section class="panel_uno" id="">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-5 panel_uno_izq">
                    <img src="img/producto.jpg" width="100%" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 panel_uno_der">
                    <h2 class="section-heading">SL-2G</h2>
                    <p class="text-faded prrf_panel_uno">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore nesciunt cum magnam, iusto quasi sapiente, nostrum harum aspernatur animi sequi in, eum perspiciatis quos recusandae architecto modi laudantium fuga. Consequuntur?</p>
                    <p class="especf_tecnicas"><i>ESPECIFICACIONES TÉCNICAS</i>
                    </p>
                    <button class="btn pull-right">Descargar</button>
                </div>
            </div>
        </div>
    </section>

<!-- ______________________________________________________________________-->

    <section class="panel_dos" id="">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 caja_form">
                    <form role="form" action="email.php" method="POST">
                        <input type="text" class="formulario-control" id="name" name="nombre" placeholder="NOMBRE" required="true" />

                        <input type="email" class="formulario-control" id="email" name="correo" placeholder="TEL FIJO" required="true"/>

                        <input type="email" class="formulario-control" id="email" name="correo" placeholder="CELULAR" required="true"/>

                        <input type="email" class="formulario-control" id="email" name="correo" placeholder="EMAIL" required="true"/>

                        <textarea rows="5" cols="50" class="formulario-control" id="message" name="mensaje" placeholder="ASUNTO" required="true"></textarea>

                        <button type="submit" class="btn btn-primary pull-right">ENVIAR</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

<!-- _________________________________________________________________--> 

@stop
@push('style')
 <link href="css/especf_producto.css" rel="stylesheet">
@endpush
