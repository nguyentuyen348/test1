import Vue from 'vue'
import Router from 'vue-router'
import Login from "../components/Login.vue"
import Create from "../components/Create.vue";

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Login',
      component: Login
    },
      {
          path: '/create',
          name: 'Create',
          component: Create
      },
  ]
})
