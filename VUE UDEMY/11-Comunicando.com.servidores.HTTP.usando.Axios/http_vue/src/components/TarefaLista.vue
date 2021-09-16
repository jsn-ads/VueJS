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
                    @click="exibirFormularioCriar"
                >
                    <i :class="btn_plus"></i>
                </button>
            </div>
        </div>   

        <!-- verifica tem objs no array tarrefa  -->
        <ul class="list-group" v-if="tarefaOrdernada.length > 0">
             <!-- esses metodos @editar, deletar, alterarTarefa  são emitidos no componet filho e  tratados no component pai   -->
            <TarefaItem 
                v-for="tarefa in tarefaOrdernada" 
                :key="tarefa.id" 
                :tarefa="tarefa" 
                @editar="selecionaTarefa"
                @deletar="deletarTarefa"
                @atualizar="editarTarefa"
            />
            
        </ul>
        <p v-else-if="!mensagemErro">Nenhuma tarefa criada</p>

        <div v-else class="alert alert-danger">
            {{mensagemErro}}            
        </div>
      
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

import axios from '../axios'

// importando components filhos 

import TarefaItem from './Tarefa.vue'
import TarefaSalvar from './TarefaSalvar.vue'

export default {
    components:{
        TarefaItem,
        TarefaSalvar
    },
    data() {
        return {
            tarefas :[],
            exibirFormulario: false,
            tarefaSelecionada: undefined,
            mensagemErro: undefined
        }
    },
    //recebe a dados da api e preenche a array de tarefas com tratamento de erros
    created() {
        axios.get(`/tarefas`).then(
            (response) => {
                this.tarefas = response.data
        }).catch(error=>{
            console.log('Erro capturado no then: ',error)
            if(error.response){
                this.mensagemErro = `Servidor retornou um erro: ${error.mensage} ${error.response.statusText}`
                console.log('Erro [requisição]:',error.request)
            }else if(error.request){
                this.mensagemErro = `Erro ao fazer requesição ao servidor: ${error.message}`
                console.log('Erro [requisição]:',error.request)
            }else{
                this.mensagemErro = `Erro ao fazer requisição ao servidor: ${error.mensage}`
            }
        }).then((algumParametro)=>{
            console.log('Sempre executado',algumParametro)
        })
    },
    computed:{
        exibirF(){
            return this.exibirFormulario ? 'ocultar' : 'exibir'
        },
        btn_plus(){
            return this.exibirFormulario ? 'fa fa-minus' : 'fa fa-plus'
        },
        tarefaOrdernada(){
            return this.tarefas.slice().sort((t1 , t2)=>{
                if(t1.concluido === t2.concluido){
                    return t1.titulo < t2.titulo 
                        ? -1 
                        : t1.titulo > t2.titulo 
                            ? 1 
                            : 0
                }
                return t1.concluido - t2.concluido
            })
        }
    },
    methods: {
        criarTarefa(tarefa){
            if(tarefa.titulo){
                axios.post(`/tarefas`, tarefa).then(
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
            axios.put(`/tarefas/${tarefa.id}`, tarefa).then(response =>{
                console.log(response)
                // encontra o indice 
                const indice= this.tarefas.findIndex(t => t.id === tarefa.id)
                //subistitui 
                this.tarefas.splice(indice,1, tarefa)
                this.resetar()
            })
        },
        deletarTarefa(tarefa){
            // usa metodo boleano para excluir
            const confirmar = window.confirm(`Deseja deleta a tarefa : ${tarefa.titulo} "?"`)
            if(confirmar){
                //enviar delete pelo id para deletar
                axios.delete(`/tarefas/${tarefa.id}`).then(response =>{
                    console.log(`DELETE/taferas/${tarefa.id}`, response)
                    //apos deletar atualiza lista , encontrando indice
                    const indice = this.tarefas.findIndex(t => t.id === tarefa.id)
                    //removendo da lista
                    this.tarefas.splice(indice, 1)
                })
            }
        },
        exibirFormularioCriar(){
            if(this.tarefaSelecionada){
                this.tarefaSelecionada = undefined
                return
            }
            this.exibirFormulario = !this.exibirFormulario
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