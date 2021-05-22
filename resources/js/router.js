import Vue from 'vue';
import Router from 'vue-router';
import index from './frontend/index.vue';
import about   from './frontend/about.vue';
import service from './frontend/service.vue';
import  project from './frontend/project.vue';
import advisor from './frontend/advisor.vue';
import contact from './frontend/contact.vue';
import serv_details from './frontend/serv_details';
Vue.use(Router);

const routes = [
    {
      path: '/',
      name:'index',
      component: index  
    },
    {
      path:'/about',
      name: 'about',
      component: about,
    },
    {
       path : '/service',
       name:'service',
       component:service,
    },
    {
      path:'/project',
      component:project,
      name:project
    },
    {
      path:'/advisors',
      component:advisor,
    
    },
    {
      path:'/contact',
      component:contact,
    
    },
    {
      path:'/serv_details/:id',
      component:serv_details,
    
    },

  
];
const  router = new Router({
    routes: routes
});

export default router;