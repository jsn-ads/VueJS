<template>

    <div>
        <h3 class="font-weight-light">Contatos</h3>

        <div class="form-group">
            <input 
                type="search" 
                class="form-control" 
                placeholder="Pesquisar Contato" 
                @keyup.enter="buscar"
                :value="busca"
            >
        </div>

        <hr>

        <ul class="list-group" v-if="filtrados.length > 0">
            <ContatosListaItem
                class="list-group-item"
                v-for="contato in filtrados"
                :key="contato.id"
                :contato='contato'
            />
        </ul>

        <p v-else>Nenhum contato cadastrado</p>

        <button class="btn btn-secondary mt-4 mb-4" @click="voltar">Voltar</button>
    </div>

</template>

<script>

import ContatosListaItem from './contatosListaItem.vue'

export default {
    
    components:{
        ContatosListaItem
    },
    props : [
        'busca'
    ]
    ,
    data() {
        return {
            contatos:[
                {id: 1, nome: 'jose neto', email: 'chelsea@brasil.com'},
                {id: 2, nome: 'Igor',      email: 'igor@gail.com'},
                {id: 3, nome: 'Jandimar',  email: 'jadmar@gmail.com'},
            ]
        }
    },
    computed: {
       filtrados(){
           const busca = this.busca
           return !busca ? this.contatos : this.contatos.filter(c => c.nome.toLowerCase().includes(busca.toLowerCase()))
       }
    },
    methods: {
        voltar(){
            this.$router.back()
        },
        buscar(event){
            this.$router.push({
                path: '/contatos',
                query: { busca: event.target.value }
            })
        }
    }
}
</script>