import Vue from 'vue'
import App from './App.vue'

Vue.config.productionTip = false

export const eventBus = new Vue({
  methods: {
    selecionar(filmeSelecionado) {
      this.$emit('selecionado', filmeSelecionado)
    },
    atualizar(filmeAtualizado) {
      this.$emit('atualizado',filmeAtualizado)
    }
  }
})

new Vue({
  render: h => h(App),
}).$mount('#app')
