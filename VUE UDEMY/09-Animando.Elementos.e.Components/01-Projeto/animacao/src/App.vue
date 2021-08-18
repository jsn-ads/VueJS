<template>
  <div id="app">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Animações</h1>
        <p class="lead">Treinando Transição/animação de elementos/components no Vue</p>
      </div>
    </div>

    <div class="container">

          
        <!-- (frameword para transition)
        enter-class=""
        enter-active-class="animate__animated animate__zoomInDown"
        enter-to-class=""

        leave-class=""
        leave-active-class="animate__animated animate__bounceOutDown"
        leave-to-class="" -->


        <!-- @before-enter="beforeEnter"
        @enter="enter"
        @after-enter="afterEnter"
        @enter-cancelled="enterCancelled"

        @before-leave="beforeLeave"
        @leave="leave"
        @after-leave="afterLeave"
        @leave-cancelled="leaveCancelled" -->

        <transition
          
          appear
          
          enter-class=""
          enter-active-class="animate__animated animate__zoomInDown"
          enter-to-class=""

          leave-class=""
          leave-active-class="animate__animated animate__bounceOutDown"
          leave-to-class=""

          :css='true'
          
        >
          <div class="alert alert-primary" role="alert" v-if="mostrar">
            <strong>primary</strong>
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
      mostrar: true
    }
  },
  methods: {
    beforeEnter(el){
      console.log('beforeEnter', el)
    },
    enter(el , done){
      console.log('enter')
      done()
    },
    afterEnter(el){
      console.log('afterEnter',el)
    },
    enterCancelled(el){
      console.log('enterCancelled',el)
    },
    beforeLeave(el){
      console.log('beforeLeave', el)
    },
    leave(el , done){
      console.log('leave')
      done()
    },
    afterLeave(el){
      console.log('afterLeave',el)
    },
    leaveCancelled(el){
      console.log('leaveCancelled',el)
    }
  },
}
</script>


<style>
  body{
    overflow:hidden;
  }
</style>


<style scoped>

  /* css animation 

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
  } */
  

  /* css trasition  */

  /* .zoom-enter, .zoom-leave-to{
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
  } */

</style>