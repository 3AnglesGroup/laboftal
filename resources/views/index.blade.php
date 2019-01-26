@extends('layouts.web')
@section('content')

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <hr class="hr_header">
                <p>Equipos de alta calidad con</p>
                <h1 id="homeHeading"><i>TECNOLOGÍA</i></h1>
                <h1 class="seg_tlt">Avanzada</h1>
            </div>
        </div>
    </header>

<!-- ______________________________________________________________________-->

    <section class="panel_uno" id="">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading"><i>NOSOTROS</i></h2>
                    <hr class="light">
                    <p class="text-faded prrf_panel_uno">LABORATORIOS OFTÁLMICOS S.A.S. es una organización dedicada a ofrecer a la comunidad oftalmológica desde hace más de 20 años de experiencia en la industria, productos de diagnóstico y alta tecnología, siendo su mayor objetivo brindar una atención personalizada con una marcada orientación a la excelencia en el servicio y la capacitación.</p>
                </div>
            </div>
        </div>
    </section>
<!-- ______________________________________________________________________-->

    <section class="panel_dos" id="productos">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-center pull-right txt_panel_dos">
                    <h2 class="h2_uno"><i>NUESTROS<i></h2>
                    <h2 class="h2_dos">Productos</h2>
                    <div class="btn_text_panel_dos"><a href="{{url('productos')}}" style="color: white; text-decoration: none;">ENTRAR</a></div>
                    <div class="btn_fondo_panel_dos"></div>
                </div>
            </div>
        </div>
    </section>

<!-- _____________________________________________________________________-->
    <section id="" class="panel_tres">
        <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <h2 class="section-heading"><i>CONTÁCTANOS</i></h2>
                        <hr class="light">
                    </div>
                </div> <!-- cierre div.(row) -->
        </div> <!-- cierre div.(contenedor_grafica) -->
    </section>
<!-- ____________________________________________________________________-->

   <section class="panel_cuatro" id="contact">
       <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 text-center">
                    <form role="form" action="email.php" method="POST">
                        <input type="text" class="formulario-control" id="name" name="nombre" placeholder="NOMBRE" required="true" />

                        <input type="email" class="formulario-control" id="email" name="correo" placeholder="TEL FIJO" required="true"/>

                        <input type="email" class="formulario-control" id="email" name="correo" placeholder="CELULAR" required="true"/>

                        <input type="email" class="formulario-control" id="email" name="correo" placeholder="EMAIL" required="true"/>

                        <textarea rows="5" cols="50" class="formulario-control" id="message" name="mensaje" placeholder="ASUNTO" required="true"></textarea>

                        <button type="submit" class="btn btn-primary pull-right">ENVIAR</button>
                    </form>
                </div><!-- cierre div.(Col-lg-4)-->
            </div><!-- cierre div.row -->
       </div> <!-- cierre div.cintainer -->
    </section>
<!-- _________________________________________________________________-->

    <section class="bloque_separador">

    </section>
@stop


@push('style')
<link href="css/main.css" rel="stylesheet">
@endpush
