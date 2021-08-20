<template>
  <div id="app">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Animações</h1>
        <p class="lead">Treinando Transição/animação de elementos/components no Vue</p>
      </div>
    </div>

    <div class="container">

        <div class="form-group">
          <select class="form-control" v-model="selecionar">
            <option value="fade">Fade</option>
            <option value="zoom">Zoom</option>
            <option value="slide">Slide</option>
          </select>
        </div>

        <transition :name="selecionar" appear mode="out-in">
          <div class="alert alert-primary" role="alert" v-if="mostrar" key="alerta">
            <strong>primary</strong>
          </div>

          <div class="alert alert-warning" role="alert" v-else key="perigo">
              <strong>Perigo</strong>
          </div>

        </transition>

        <button type="button" class="btn btn-primary" @click="mostrar = !mostrar">elemento</button>

    </div>


  </div>
</template>

<script>
export default {
  data() {
    return {
      mostrar: true,
      selecionar : 'fade'

    }
  },
  methods: {

  },
}
</script>


<style>
  body{
    overflow:hidden;
  }
</style>


<style scoped>

  /* css animation  */

  .slide-enter-active{
    animation: slide 0.7s;
  } 

  .slide-leave-active{
    animation: slide 0.7s reverse;
  }

  @keyframes slide{
    0%{
      transform: translateX(-100px);
      opacity: 0;
    }
    100%{
      transform: translateX(0px);
      opacity: 1;
    }
  }
  

  /* css trasition  */

  .zoom-enter, .zoom-leave-to{
    transform: scale(0);
  }

  .zoom-enter-active, .zoom-leave-active{
    transition: transform 0.5s;
  }


  .fade-enter, .fade-leave-to{
    opacity: 0;
  }

  .fade-enter-active, .fade-leave-active{
    transition: opacity 1s;
  }

</style>