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
      </div>

  </div>
  
</template>

<script>

// importando components de tarefas

import TarefaLista from './components/TarefaLista.vue';

export default {
    components:{
       TarefaLista
    }
}
</script>
