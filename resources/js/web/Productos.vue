<template>
<div>
<!-- ______________________________________________________________________-->
    <section class="panel_uno" id="">
        <div class="container">
            <div class="row">
                <div class="logo_marca col-lg-2 col-md-4 col-sm-6 col-xs-6">
                    <a href="">
                    <img class="topcon" src="img/logos_productos/logo_topcon.png" alt="">
                    </a>
                </div>
                <div class="logo_marca col-lg-2 col-md-4 col-sm-6 col-xs-6"><img class="elektron" src="img/logos_productos/logo_elektron.png" alt=""></div>
                <div class="logo_marca col-lg-2 col-md-4 col-sm-6 col-xs-6"><img class="keeler" src="img/logos_productos/logo_keeler.png" alt=""></div>
                <div class="logo_marca col-lg-2 col-md-4 col-sm-6 col-xs-6"><img class="lightned" src="img/logos_productos/logo_lightmed.png" alt=""></div>
                <div class="logo_marca col-lg-2 col-md-4 col-sm-6 col-xs-6"><img class="ocular" src="img/logos_productos/logo_ocular.png" alt=""></div>
                <div class="logo_marca col-lg-2 col-md-4 col-sm-6 col-xs-6"><img class="cima" src="img/logos_productos/logo_cima.png" alt=""></div>
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
              </div> <!-- cierre div.product-carousel -->
          </div>
      </div>
  </section>
</div>
</template>
<script>
    export default {
        data(){
            return{
                marcas:[]
            }
        }
    }
</script>



