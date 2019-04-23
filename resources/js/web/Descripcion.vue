<template>

<div>
    <!-- ______________________________________________________________________-->

    <section class="panel_uno" id="">
        <div class="container">
            <div class="row">
               
                <div v-for="sub in subcategorias" :key="sub.id" class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                    <div class="categoria_productos">
                        <p>{{sub.name}}</p>
                    </div>
                </div>
               
                
                
            </div>
        </div>
    </section>

<!-- ______________________________________________________________________-->

    <section class="panel_dos" id="">
        <div class="container">
            <div class="row">
                
                <div v-for="product in products" :key="product.id" class="product-carousel">
                    <div class="single-product col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="product-f-image">
                            <img src="/img/producto.jpg" width="100%" alt="">
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
    },
    methods:{
        getSubcategoria(){
            axios.get('/api/subcategories/'+1).then(res=>{
                this.subcategorias = res.data;
            });
        },
        getProducts(){
            axios.get('/api/products/'+1).then(res=>{
                this.products = res.data;
            });
        }
    }
    
}
</script>
