// importa o vue 
import Vue from 'vue'

// cria a instancia vue
export default new Vue({

    // estado da auntenticação
    data: {
        autenticado : false
    },
    // esse metodo pode ser utilizado em qualquer parte da aplicação e recebe uma função callback 'autentic' passando o estato da autenticação
    created(){
        this.$on('autenticar',(autenticado)=>{
            this.autenticado = autenticado
        })
    }
})