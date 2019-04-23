<template>
<div>
<!-- ______________________________________________________________________-->
    <section class="panel_uno" id="">
        <div class="container">
            <div class="row">
                <div class="logo_marca col-lg-2 col-md-4 col-sm-6 col-xs-6">
                    <a style="cursor:pointer;" v-on:click.prevent="getCategorias(1)">
                    <img class="topcon" src="img/logos_productos/logo_topcon.png" alt="">
                    </a>
                </div>
                <div class="logo_marca col-lg-2 col-md-4 col-sm-6 col-xs-6">
                    <a style="cursor:pointer;" v-on:click.prevent="getCategorias(2)">
                    <img class="elektron" src="img/logos_productos/logo_elektron.png" alt="">
                    </a>
                </div>
                <div class="logo_marca col-lg-2 col-md-4 col-sm-6 col-xs-6">
                    <a style="cursor:pointer;" v-on:click.prevent="getCategorias(3)">
                    <img class="keeler" src="img/logos_productos/logo_keeler.png" alt="">
                    </a>
                </div>
                <div class="logo_marca col-lg-2 col-md-4 col-sm-6 col-xs-6">
                    <a style="cursor:pointer;" v-on:click.prevent="getCategorias(4)">
                    <img class="lightned" src="img/logos_productos/logo_lightmed.png" alt="">
                    </a>
                </div>
                <div class="logo_marca col-lg-2 col-md-4 col-sm-6 col-xs-6">
                     <a style="cursor:pointer;" v-on:click.prevent="getCategorias(5)">
                    <img class="ocular" src="img/logos_productos/logo_ocular.png" alt="">
                     </a>
                    </div>
                <div class="logo_marca col-lg-2 col-md-4 col-sm-6 col-xs-6">
                    <a style="cursor:pointer;" v-on:click.prevent="getCategorias(6)">
                    <img class="cima" src="img/logos_productos/logo_cima.png" alt="">
                    </a>
                    </div>
            </div>
        </div>
    </section>
<!-- ______________________________________________________________________-->
<section class="panel_dos" id="">
      <div class="container">
          <div class="row">

              <div class="product-carousel">
                  <div v-for="categoria in categorias " :key="categoria.id" class="single-product col-lg-4 col-md-4 col-sm-4 col-xs-6">
                      <div class="product-f-image">
                          <img :src="categoria.image" width="100%" alt="">
                          <div class="product-hover">
                              <a :href="'/descripcion/' + categoria.id" class="name_product"> {{categoria.name}}</a>
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
                marcas:[],
                categorias:[]
            }
        },
        created(){
            this.getCategorias(1)
        },
        methods:{
            getCategorias(id){
                axios.get('api/categories/'+id).then(res=>{
                this.categorias = res.data

            })
            }
            
        }
    }
</script>



