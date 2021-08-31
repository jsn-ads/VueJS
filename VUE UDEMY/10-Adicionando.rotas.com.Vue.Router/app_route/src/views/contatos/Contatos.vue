<template>
    <div>
        <!-- mostra a lista de contatos -->
        <ContatosLista :busca="busca"/>
        <!-- mostra detalhes do contato -->
        <router-view name="contato-detalhes"></router-view>
        <!-- router defaut -->
        <router-view></router-view>
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