<template>
    <div>

        <div class="row">
            <div class="col-sm-10">
                <h1 class="font-weight-light">Lista de Tarefas</h1>
            </div>

            <div class="col-sm-2">
                <button 
                    class="btn btn-primary float-right"
                    :title="exibirF"
                    @click="exibirFormulario = !exibirFormulario"
                >
                    <i :class="btn_plus"></i>
                </button>
            </div>
        </div>   

        <!-- verifica tem objs no array tarrefa  -->

        <ul class="list-group" v-if="tarefas.length > 0">
            <TarefaItem 
                v-for="tarefa in tarefas" 
                :key="tarefa.id" 
                :tarefa="tarefa"   
                @editar="selecionaTarefa"
            />
        </ul>

        <p v-else>Nenhuma tarefa criada</p>
      
        <transition name="slide" mode="out-in">

            <!-- esse evento @criar e emitido no component tarefaSalvar -->
            
            <!-- :tarefa -> prop tarefa dentro do component  -->
            <TarefaSalvar
                v-if="exibirFormulario"
                :tarefa = tarefaSelecionada
                @criar="criarTarefa"
                @editar="editarTarefa"
            >
            </TarefaSalvar>
        </transition>

    </div>
</template>

<script>

//importando axios

import axios from 'axios'

// importando components filhos 

import TarefaItem from './Tarefa.vue'
import TarefaSalvar from './TarefaSalvar.vue'

//importando api 

import ApiRota from '../config/config';

export default {
    components:{
        TarefaItem,
        TarefaSalvar
    },
    data() {
        return {
            tarefas :[],
            exibirFormulario : false,
            tarefaSelecionada: undefined
        }
    },
    //recebe a dados da api e preenche a array de tarefas
    created() {
        axios.get(`${ApiRota.apiURL}/tarefas`).then(
            (response) => {
                this.tarefas = response.data
            })
    },
    computed:{
        exibirF(){
            return this.exibirFormulario ? 'ocultar' : 'exibir'
        },
        btn_plus(){
            return this.exibirFormulario ? 'fa fa-minus' : 'fa fa-plus'
        }
    },
    methods: {
        criarTarefa(tarefa){
            if(tarefa.titulo){
                axios.post(`${ApiRota.apiURL}/tarefas`, tarefa).then(
                (response) => {
                    this.tarefas.push(response.data)
                    this.exibirFormulario = false
                    this.resetar()
                })
            }else{
                alert('Preencha Campo');
            }
        },
        editarTarefa(tarefa){
            //passa caminho com metodo put , passa id da tarefa e passa o objeto como parametro
            axios.put(`${ApiRota.apiURL}/tarefas/${tarefa.id}`, tarefa).then(response =>{
                console.log(response)
                // encontra o indice 
                const indice= this.tarefas.findIndex(t => t.id === tarefa.id)
                //subistitui 
                this.tarefas.splice(indice,1, tarefa)
                this.resetar()
            })
        },
        resetar(){
            this.tarefaSelecionada = undefined
            this.exibirFormulario = false
        },
        selecionaTarefa(tarefa){
            this.tarefaSelecionada = tarefa
            this.exibirFormulario = true
        }
    }
}
</script>

<style scoped>
    .slide-enter, .slide-leave-to{
    transform: translateX(-50px);
    opacity: 0;
    }

    .slide-enter-active, .slide-leave-active{
    transition: all 0.3s;
    }
</style>