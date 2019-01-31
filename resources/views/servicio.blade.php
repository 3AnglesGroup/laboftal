@extends('layouts.web')
@section('content')
<!-- ______________________________________________________________________-->

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading" class="prim_tlt">SERVICIO</h1>
                <h1 class="seg_tlt">Técnico</h1>
            </div>
        </div>
    </header>

<!-- ______________________________________________________________________-->

    <section class="panel_uno" id="">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-center panel_uno_izq">
                    <img src="img/icono_lab2.png" alt="" class="icono">
                    <h2 class="section-heading">ESTIMADO CLIENTE</h2>
                    <p class="text-faded prrf_panel_uno">Si tiene alguna duda o inconveniente con su equipo Topcon comuniquese en Bogotá con nosotros al Tel: 750 0343, de lunes a viernes de 8:00am a 5:00pm, o envíenos sus datos a continuación.</p>
                </div>
                <div class="col-lg-8 panel_uno_der">
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
<link href="css/servicio_tecnico.css" rel="stylesheet">
@endpush
