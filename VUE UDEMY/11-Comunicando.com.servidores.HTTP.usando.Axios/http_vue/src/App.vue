<template>

  <!-- component carregado no index.html -->
  <div id="app">
    
      <div class="jumbotron jumbotron-fluid">
          <div class="container">
              <h1 class="display-4">API VUE</h1>
              <p class="lead">CRUD consumindo API utilizando VUE</p>
          </div>
      </div>
    
      <div class="container">
          <TarefaLista></TarefaLista>

          <button
            class="btn btn-primary mt-4 mb-2"
            @click="download" 
          >
            Baixar Imagem    
          </button>
        
            <div class="progress">
                <div
                    class="progress-bar"
                    role="progressbar"
                    :style="{width: progresso + '%'}"
                    :aria-valuenow="progresso"
                    aria-valuemin="0"
                    aria-valuemax="100"
                >
                    {{progresso}}    
                </div>
            </div>

            <div v-if="imagem">
                <img :src="imagem" style="max-width: 100%">
            </div>
      </div>

  </div>
  
</template>

<script>

// importando components de tarefas

import TarefaLista from './components/TarefaLista.vue';

//importando axios e configuraçoes
import axios from 'axios'

export default {
    components:{
       TarefaLista
    },
    data(){
        return{
            progresso: 0,
            imagem: undefined
        }
    },
    methods: {
        download(){
            axios.get('https://images.unsplash.com/photo-1631523407536-c545fc12b068?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80',{
                responseType:'blob',
                onDownloadProgess : (ProgressEvent) =>{
                    this.progresso = (ProgressEvent.loaded / ProgressEvent.total * 100 ).toFixed(0)
                }
            }).then( response=>{
                const reader = new window.FileReader()
                reader.readAsDataURL(response.data)
                reader.onload = () =>{
                    this.imagem = reader.result
                }
            })
        }
    },
}
</script>
