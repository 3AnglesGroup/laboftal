<template>

<div>
    <!-- ______________________________________________________________________-->

    <section class="panel_uno" id="">
        <div class="container">
            <div class="row">
               
                <div v-for="sub in subcategorias" :key="sub.id" class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                    <div class="categoria_productos">
                         <a style="text-decoration:none" href="" @click.prevent="getProducts(sub.id)"><p>{{sub.name}}</p></a>
                    </div>
                </div>
               
                
                
            </div>
        </div>
    </section>

<!-- ______________________________________________________________________-->

    <section class="panel_dos" id="">
        <div class="container">
            <div class="row">
                
                <div  class="product-carousel">
                    <div v-for="product in products" :key="product.id" class="single-product col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="product-f-image">
                            <a href="/detalle">
                                <img :src="'/' + product.image" width="100%" alt="">
                            </a>
                            <h3>{{product.name}}</h3>
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
            subcategorias:[],
            products:[]
        }
    },
    created(){
        this.getSubcategoria()
        this.getProducts()
        console.log(this.$route.path);
        
        
    },
    methods:{
        getSubcategoria(){
            axios.get('/api'+this.$route.path).then(res=>{
                this.subcategorias = res.data;
            });
        },
        getProducts(id){
            axios.get('/api/products/'+id).then(res=>{
                this.products = res.data;
            });
        }
    }
    
}
</script>

<style>
a
{ 
 color: #039CA5;
} 
</style>

