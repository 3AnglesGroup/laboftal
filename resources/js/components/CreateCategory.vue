<template >
  <div class="col-md-5">
    <form @submit.prevent="crearCategoria">
    <!-- Horizontal Form -->
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Crear una categoria</h3>
      </div>
        <div class="box-body">
          <div class="form-group col-md-6">
            <label for="exampleInputPassword1">Nombre</label>
            <input type="text" v-model="category.name" class="form-control" required>
          </div>

          <div class="form-group col-md-6">
            <label>Marca</label>
            <select class="form-control" v-model="category.marca" required>
              <option  value="">Seleccione...</option>
              <option v-for="marca in marcas" v-bind:value="marca.id">{{marca.name}}</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputPassword1">Imagen</label>
            <input type="file" id="file" ref="file" @change="imgCategoria" required class="form-control" >
            <small>Tamaño 689 x 689</small>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-primary" :disabled="enviando" >
            <span v-if="enviando">Creando...</span>
            <span v-else>Crear Categoria</span>
          </button>
        </div>
    </div>
  </form>
    <!-- /.box -->
  </div>

</template>

<script>
import toastr from 'toastr'
toastr.options ={
  "closeButton": true,
  "timeOut": "10000",
  // "progressBar": true,
};
export default {
  data(){
    return{
      enviando:false,
      marcas:[],
      category:{
        marca:'',
        name:''
      }
    }
  },
  created(){
    axios.get('api/marcas').then(res =>{
        this.marcas = res.data;
    });
  },
  methods:{
    imgCategoria (event){
      this.category.image = this.$refs.file.files[0];
    },
    crearCategoria(){
      let fd = new FormData();
      fd.append('image',this.category.image);
      fd.append('name',this.category.name);
      fd.append('marca',this.category.marca);

      axios.post('api/category/create',
          fd,{
            headers: {
              'Content-Type': 'multipart/form-data'
            }
        }).then(res=>{
          this.category ={
            marca:'',
            name:''
          }
        toastr.success('Categoria creada');
      });

    }
  }
}
</script>

<style lang="css">
</style>
