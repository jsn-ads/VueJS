<template>
  <div>
    <app-dados></app-dados>
    <app-contador></app-contador>
  </div>
</template>

<script>

import AppContador from './components/AppContador.vue'
import AppDados from './components/AppDados.vue'

export default {
  components:{
    AppDados,
    AppContador
  }
}
</script>
