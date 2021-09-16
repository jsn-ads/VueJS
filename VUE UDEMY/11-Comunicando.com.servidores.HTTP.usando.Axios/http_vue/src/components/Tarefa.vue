<template>
    <transition name="slide" mode="out-in">

        <li class="list-group-item d-flex">

            <span>{{tarefa.titulo}}</span>

            <span class="espacar"></span>
            <!-- css e texto dinamicos -->
            <button 
                class="btn btn-sm mr-4" 
                :class="classeCSS" 
                :title="tituloBotao"
                @click="atualizar"
            >
                <i class="fa fa-check"></i>
            </button>
            <!-- css e texto estaticos -->
            <button 
                class="btn btn-primary btn-sm mr-2" 
                title="Editar"
                @click="$emit('editar', tarefa)"
            >
                <i class="fa fa-pencil-alt"></i>
            </button>

            <button 
                class="btn btn-danger btn-sm"
                title="Deletar"
                @click="$emit('deletar', tarefa)"
            >
                <i class="fa fa-trash"></i> 
            </button>
        
        </li>

    </transition>
</template>

<script>
export default {
    props:{
        tarefa:{
            type: Object,
            required: true
        }
    },
    computed:{
        classeCSS(){
            return {
                'btn-secondary': !this.tarefa.concluido,
                'btn-success': this.tarefa.concluido
            }
        },
        tituloBotao(){
            return this.tarefa.concluido ? 'Refazer Tarefa' : 'Concluir Tarefa'
        },
    },
    methods: {
        atualizar(event){
            console.log(event)
            this.$emit('atualizar', Object.assign({}, this.tarefa, {concluido: !this.tarefa.concluido}))
        }
    },
}
</script>

<style scoped>
    .espacar{
        flex: 1 1 auto;
    }

    .slide-enter, .slide-leave-to{
    transform: translateX(-50px);
    opacity: 0;
    }

    .slide-enter-active, .slide-leave-active{
    transition: all 0.3s;
    }
</style>