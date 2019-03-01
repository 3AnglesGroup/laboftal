
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('product-create', require('./components/CreateProduct.vue').default);
Vue.component('category-create', require('./components/CreateCategory.vue').default);
Vue.component('subcategory-create', require('./components/CreateSubcategory.vue').default);
Vue.component('categories', require('./web/Categories.vue').default);
Vue.component('productos', require('./web/Productos.vue').default);

import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)
let router = new Router({
      routes:[
        {
          path:'/product-create',
          component: require ('./components/CreateProduct.vue').default
        }

      ]
});

const app = new Vue({
    el: '#app',
    router
});
