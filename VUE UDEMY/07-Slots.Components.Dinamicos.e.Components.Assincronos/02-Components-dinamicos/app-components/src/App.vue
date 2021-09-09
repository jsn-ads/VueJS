<template>
  <div id="app" class="container">
      <h1>Components Dinamicos</h1>
      <button @click="selectComponent='Home'">Home</button>
      <button @click="selectComponent='Post'">Post</button>
      <button @click="selectComponent='Sobre'">Sobre</button>
      <button @click="selectComponent='Assincrono'">Assincrono</button>

      <keep-alive :exclude="/Home|Post/">
          <component :is="selectComponent" v-bind="selectProps"></component>
      </keep-alive>
  </div>
</template>

<script>

import Post from "./components/Post.vue";
import Home from './components/Home.vue';
import Sobre from './components/Sobre.vue'

export default {
  components: {
    Assincrono : ()=>({
      component: new Promise((resolve, reject) =>{
        setTimeout( ()=>{
            resolve(import('./components/Assincrono.vue'))
        }, 2000)
      }),
      loading:{template: '<p>Carregando...</p>'},
      error:{template: '<p>Erro no Carregamento</p>'},
      delay:200,
      timeout:3000
    }),
    Post,
    Home,
    Sobre
  },
  data() {
    return {
      selectComponent: 'Home',
      posts: [
        {
          id: 1,
          titulo: "Components no VUE",
          conteudo: "Components são uma das peças mais importantes",
          autor: "jose neto",
        },
        {
          id: 2,
          titulo: "Distribuição conteudo com Slots",
          conteudo: "Slots podem ser usados como ",
          autor: "jose alves",
        },
      ],
    }
  },
  computed:{
    selectProps(){
      return this.selectComponent === 'Post' ? {posts: this.posts} : {}
    }
  }
};
</script>

<style scoped>
.container {
  width: 960px;
  margin: auto;
}
</style>

