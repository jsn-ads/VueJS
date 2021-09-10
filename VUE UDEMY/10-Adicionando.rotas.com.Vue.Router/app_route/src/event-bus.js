// importa o vue 
import Vue from 'vue'

// cria a instancia vue
export default new Vue({

    // estado da auntenticação
    data: {
        autenticado : false,
        contatos : [
            {id: 1, nome: 'jose neto', email: 'chelsea@brasil.com'},
            {id: 2, nome: 'Igor',      email: 'igor@gail.com'},
            {id: 3, nome: 'Jandimar',  email: 'jadmar@gmail.com'}
        ]
    },
    // esse metodo pode ser utilizado em qualquer parte da aplicação e recebe uma função callback 'autenticado' passando o estato da autenticação
    created(){
        this.$on('autenticar',(autenticado)=>{
            this.autenticado = autenticado
        })
    },
    methods:{
        buscarContato(id){
            //retorna um novo objeto com informaçoes do contato encontrado pelo id
            return Object.assign({}, this.contatos.find(c => c.id === id));
        },
        editarContato(contato){
            const indice = this.contatos.findIndex(c => c.id === contato.id)
            //na lista de contatos , remove o item na posição di indice e adiciona o novo contato
            this.contatos.splice(indice, 1, contato)
        }
    }
})