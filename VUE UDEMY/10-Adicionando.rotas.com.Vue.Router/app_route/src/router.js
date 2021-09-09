import Vue from 'vue'
import VueRouter from 'vue-router'

//Components Lazy Loading , esse metodo carrega apenas partes que forem selecionada em vez da aplicaçao toda

const Contatos = ()=> import(/* webpackChunckName: "contatos" */'./views/contatos/Contatos.vue')
const ContadosDetalhes = ()=> import(/* webpackChunckName: "contatos" */'./views/contatos/ContatosDetalhes')
const ContatoEditar = ()=> import(/* webpackChunckName: "contatos" */'./views/contatos/ContatoEditar')
const ContatoHome = ()=> import(/* webpackChunckName: "contatos" */'./views/contatos/ContatoHome')
const Home = ()=> import('./views/Home.vue')
import Error404 from './views/Erro404.vue'
import Login from './views/login/Login.vue'
import EventBus from './event-bus'

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
          path: ':id(\\d+)',                              //rota : contatosDetalhes 
          component:            
            ContadosDetalhes,
          props: route =>({
            id: +route.params.id            
          })        
        },                         
        {
          path: ':id(\\d+)/editar',                       //rota : contatoEditar / contatosDetalhes
          meta : {requerAutenticacao: true},
          beforeEnter(to,from, next){
            console.log('beforeEnter')
            next() 
            // next(true) continuar
            // next(false) bloquear
            // next(path: '/contatos') redirecionar
            // next(new Error(`Permissões insuficientes para acessar o recurso "${to.fullPath}"`)) mostrar erro
          },       
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
      
      path: '/home',                                      //rota raiz : Home
      component: 
        Home
    },
    //Login
    {
      path: '/login',                                      //rota : login
      component:
        Login

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
    console.log('Requer autenticação?', to.meta.requerAutenticacao)
    const estaAutenticado = EventBus.autenticado
    if(to.matched.some(r => r.meta.requerAutenticacao)){
      if(!estaAutenticado){
        next({
          path: '/login',
          query: {redirecionar: to.fullPath}
        })
        return
      }
    }
    
    next()
})

rota.beforeResolve((to, from, next)=>{
  console.log('beforeResolve')
  next()
})

rota.afterEach(() =>{
    console.log('afterEach')
})

export default rota