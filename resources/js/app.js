import Vue from  'vue';
import App from './App.vue';
import router  from './router';

// import router from './router';
// import 'bootstrap/dist/css/bootstrap.css';
// import 'bootstrap';
// import ViewUI from 'view-design';
// import 'view-design/dist/styles/iview.css';
// Vue.use(ViewUI);
// import common from './common';
// Vue.mixin(common);

// Vue.component('pagination', require('laravel-vue-pagination'));




const app = new Vue({
    el: '#app',
     router,
    
    render: h=> h(App)
});   