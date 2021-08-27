<template>

    <div>
        <h3 class="font-weight-light">Contatos</h3>

        <ul class="list-group" v-if="contatos.length > 0">
            <ContatosListaItem
                class="list-group-item"
                v-for="contato in contatos"
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
    data() {
        return {
            contatos:[
                {id: 1, nome: 'jose neto', email: 'chelsea@brasil.com'},
                {id: 2, nome: 'Igor',      email: 'igor@gail.com'},
                {id: 3, nome: 'Jandimar',  email: 'jadmar@gmail.com'},
            ]
        }
    },
    methods: {
        voltar(){
            this.$router.back()
        }
    },
}
</script>