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
          <h3>Efeitos</h3>
          <select class="form-control" v-model="selecionar">
            <option value="fade">Fade</option>
            <option value="zoom">Zoom</option>
            <option value="slide">Slide</option>
          </select>
        </div>

        <div class="form-group">
          <h3>Alertas</h3>
          <select class="form-control" v-model="classes">
            <option value="success">Sucesso</option>
            <option value="warning">Alerta</option>
            <option value="danger">Perigo</option>
          </select>
        </div>

        <div class="form-group">
          <h3>Components Dinamicos</h3>
          <select class="form-control" v-model="dinamicos">
            <option value="AppHome">Home</option>
            <option value="AppSobre">Sobre</option>
          </select>
        </div>

        <transition :name="selecionar" appear mode="out-in">
          <div :class="alertas" :key="classes"><strong>Mensagens</strong></div>
        </transition>

        <transition :name="selecionar" appear mode="out-in">
          <component :is="dinamicos"></component>
        </transition>

    </div>


  </div>
</template>

<script>
export default {

  components:{
    AppHome: ()=> import('./components/home.vue'),
    AppSobre: ()=> import('./components/sobre.vue')
  },
  data() {
    return {
      selecionar : 'fade',
      classes : 'success',
      dinamicos: 'AppHome'
    }
  },
  computed:{
    alertas(){
      return {
        alert : true,
        [`alert-${this.classes}`]:true
      }
    }
  }
}
</script>

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