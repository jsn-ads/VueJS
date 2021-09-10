<template>
    <div>
        <h1 class="font-weight-light">Lista de Tarefas</h1>
        <!-- verifica tem objs no array tarrefa  -->
        <ul class="list-group" v-if="tarefas.length > 0">
            <tarefaItem v-for="tarefa in tarefas" :key="tarefa.id" :tarefa="tarefa"   />
        </ul>

        <p v-else>Nenhuma tarefa criada</p>

    </div>
</template>

<script>

// importando components filhos 

import TarefaSalvar from './TarefaSalvar.vue'
import TarefaItem from './Tarefa.vue'

export default {
    components:{
        TarefaSalvar,
        TarefaItem
    },
    data() {
        return {
            tarefas :[
                {id:1, titulo: 'Desenlvover FRONT END', concluido: true},
                {id:2, titulo: 'Desenvolver BACK END', concluido: true},
                {id:3, titulo: 'Desenvolver DB', concluido: false}
            ]
        }
    },

}
</script>