<template>
  <div id="app">
    
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Projeto de Rotas VUE</h1>
        <p class="lead">Treinamento Vue Rotas</p>
      </div>
    </div>

    <div class="container">
      <router-link to="/" class="btn btn-info mb-4 mr-2">Home</router-link>
      <router-link :to="{path:'/contatos'}" class="btn btn-info mb-4 mr-2">Contatos</router-link>
      
      <transition name="slide" mode="out-in">
        <router-view></router-view>
      </transition>
      
    </div>

  </div>
</template>

<script>
export default {
  
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