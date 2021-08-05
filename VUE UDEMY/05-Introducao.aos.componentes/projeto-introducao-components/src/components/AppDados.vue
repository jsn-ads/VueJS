<template>
  <div :class="$style.box">
    <p>{{nome}}</p>
    <p>{{email}}</p>
    <input v-model="nome" placeholder="Digite seu Nome">
    <br/><br/>
    <input v-model="email" placeholder="Digite seu Email">
  </div>
</template>

<script>
export default {
  data() {
    return {
      nome : "",
      email : ""
    }
  }
}
</script>

<style module>
    .box{
      background-color: chartreuse;
    }
</style>
