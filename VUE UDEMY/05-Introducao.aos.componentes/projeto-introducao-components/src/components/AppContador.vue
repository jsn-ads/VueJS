<template>
  <div>
    <h3>botão ja foi clicado {{valor}}</h3>
    <button :class="$style.btnclass" @click="contador">Click</button>
  </div>
</template>

<script>
export default {
  data(){
    return {
      valor : 0
    }
  },
  methods: {
    contador(event){
      this.valor++
    }
  },
}
</script>

<style module>
  .btnclass{
    background-color: aqua;
    border: solid 1px black;

  }
</style>
