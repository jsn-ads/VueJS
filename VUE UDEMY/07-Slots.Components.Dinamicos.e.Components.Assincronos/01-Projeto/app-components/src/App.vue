<template>
  <div id="app">
      <h1>Curso de Vue</h1>
      <Post :titulo="'Bem Vindo'"/>
  </div>
</template>

<script>

import Post from './components/Post.vue'

export default {
    components:{
        Post
    }
}
</script>