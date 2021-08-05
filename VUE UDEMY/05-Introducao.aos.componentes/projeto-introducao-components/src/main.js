import Vue from 'vue'

const vuecomponent = {
  data: function () {
    return {
      titulo: "Curso de VueJS",
      contador: 0
    }
  },
  methods: {
    contar: function () {
        this.contador++
    }
  },
  template: `<div>
                <h1>{{titulo}}</h1>
                <button @click="contar">clique {{contador}}</button>
             </div>
             `
}

new Vue({
  el: "#app",
  components: {
    'vue-component' : vuecomponent
  }
})
