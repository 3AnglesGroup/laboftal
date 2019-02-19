<template>
  <div class="col-md-5">
    <form @submit.prevent="createSubcategory">
    <!-- Horizontal Form -->
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Crear  subcategoria</h3>
      </div>
        <div class="box-body">
          <div class="form-group col-md-6">
            <label for="exampleInputPassword1">Nombre</label>
            <input type="text" v-model="subcategory.name" class="form-control" >
          </div>
          <div class="form-group col-md-6">
            <label>Marca</label>
            <select class="form-control" @change="getCategories"  v-model="marca">
              <option  value="">Seleccione...</option>
              <option v-for="marca in marcas"  v-bind:value="marca.id">{{marca.name}}</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Categoria</label>
            <select class="form-control" v-model="subcategory.category">
              <option  value="">Seleccione...</option>
              <option  v-for="category in categories"  v-bind:value="category.id">{{category.name}}</option>
            </select>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-primary" :disabled="enviando" >
            <span v-if="enviando">Enviando...</span>
            <span v-else>Crear subcategoria</span>
          </button>
        </div>
    </div>
    </form>
    <!-- /.box -->
  </div>

</template>

<script>
export default {
  data(){
    return{
      subcategory:{
        name:'',
        category:''
      },
      categories:[],
      marcas:[],
      marca:'',
      enviando:false,


    }
  },
  created(){
    axios.get('api/marcas').then(res =>{
        this.marcas = res.data;
    });
  },
  methods:{
    createSubcategory(){
      axios.post('api/subcategory/create',this.subcategory).then(res=>{
        console.log(res.data);
      });
    },
    getCategories(){
      axios.get('api/categories/'+this.marca).then(res =>{
          this.categories = res.data;
      });

    }

  }
}
</script>

<style lang="css">
</style>
