<template>
    <div>
        <!-- mostra a lista de contatos -->
        <ContatosLista :busca="busca"/>   
    </div>
</template>

<script>

import ContatosLista from '../../components/contatos/contatoLista.vue'

export default {
    components:{
        ContatosLista
    },
    props:[
        'busca'
    ]
}
</script>