import Vue from 'vue'
import VueRouter from 'vue-router'

//Components

import Contatos from './views/contatos/Contatos.vue'
import ContadosDetalhes from './views/contatos/ContatosDetalhes'
import ContatoHome from './views/contatos/ContatoHome'
import Home from './views/Home.vue'

Vue.use(VueRouter)

 export default new VueRouter({
  linkExactActiveClass: 'active',
  mode:'history',
  routes:[
    {
      path: '/contatos',
      component: Contatos,
      children: [
        {path: ':id', component: ContadosDetalhes},
        {path: '', component: ContatoHome}
      ]
    },
    {path: '/', component: Home}                // Pagina Raiz
  ]
})