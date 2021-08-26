import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'

// Rotas

import Contatos from './views/contatos/Contatos.vue'
import Home from './views/Home.vue'

Vue.config.productionTip = false

Vue.use(VueRouter)

const router = new VueRouter({
  routes:[
    {path: '/contatos', component: Contatos},  // Rota de Contatos
    {path: '/', component: Home} // Pagina Raiz
  ]
})

new Vue({
  router,
  render: h => h(App),
}).$mount('#app')
