import Vue from 'vue'
import VueRouter from 'vue-router'

//Components

import Contatos from './views/contatos/Contatos.vue'
import ContadosDetalhes from './views/contatos/ContatosDetalhes'
import ContatoEditar from './views/contatos/ContatoEditar'
import ContatoHome from './views/contatos/ContatoHome'
import Home from './views/Home.vue'
import Error404 from './views/Erro404.vue'

Vue.use(VueRouter)

const rota = new VueRouter({

  //esse metodo permine que deixe selecionando os btn que tiverem router link
  linkExactActiveClass: 'active',                       
  mode:'history',

  //Rotas

  routes:[

    //contatos
    {
      path: '/contatos',                                  //rota : caminho
      component:                                          //rota : componentes 
        Contatos,
      props : (route) => {
        const busca = route.query.busca
        return busca ? {busca} : {}
      },
      //sub rotas de contatos
      children: [           
        {
          path: ':id(\\d+)',                                    //rota : contatosDetalhes
          component:            
            ContadosDetalhes,
          props: route =>({
            id: +route.params.id            
          })        
        },                         
        {
          path: ':id(\\d+)/editar',                              //rota : contatoEditar / contatosDetalhes
          components : {
            default: ContatoEditar,
            'contato-detalhes': ContadosDetalhes
          },
          props:{
            default : route=>({
              id: +route.params.id
            }),
            'contato-detalhes': route=>({
              id: +route.params.id
            })
          }
        },                            
        {
          path: '',                                       //rota  : contatos/home 
          component: 
            ContatoHome               
        }                                
      ]
    },
    //Home
    {
      
      path: '/home',                                          //rota raiz : Home
      component: 
        Home
    },
    //redirect
    {
      path: '/', 
      redirect : '/home'
    },
    //erro 404
    {
      path: '*',
      component:
        Error404
    }
  ]
})

rota.beforeEach((to, from , next) =>{
    console.log('beforeEach')
    next()
})

rota.afterEach((to, from) => {
    console.log('afterEach')
})

export default rota