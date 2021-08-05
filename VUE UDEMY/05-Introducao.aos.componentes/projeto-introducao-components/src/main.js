import Vue from 'vue'

import App from './App.vue'

// import AppContador from './AppContador.vue'

// Vue.component('AppContador',AppContador)

new Vue({
  render: h => h(App)
}).$mount('#app')


// const vuecomponent = {
//   data: function () {
//     return {
//       titulo: "Curso de VueJS",
//       contador: 0
//     }
//   },
//   methods: {
//     contar: function () {
//         this.contador++
//     }
//   },
//   template: `<div>
//                 <h1>{{titulo}}</h1>
//                 <button @click="contar">clique {{contador}}</button>
//              </div>
//              `
// }

// new Vue({
//   el: "#app",
//   components: {
//     'vue-component' : vuecomponent
//   }
// })
