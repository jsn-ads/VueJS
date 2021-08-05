<template>
  <div class="row">

    <!-- coluna 1 -->
    <div class="col-8">

      <h2>Filmes</h2>

      <ul class="list-group list-group-flush">

        <FilmesListaIten v-for="filme in lista" :key="filme.id" v-bind="filme"/>
       

      </ul>
    </div>

    <!-- coluna 2 -->
    <div class="col-4">

      <FilmesListaItenInfo/>

    </div>

  </div>
</template>

<script>

import FilmesListaIten from './FilmesListaIten.vue'
import FilmesListaItenInfo from './FilmesListaItenInfo.vue'

export default {
  components: {
    FilmesListaIten,
    FilmesListaItenInfo
  },
  data() {
    return {
      lista:[
        {id:1, titulo:"O Vingadores", ano:2018},
        {id:2, titulo:"O Irlandes", ano:2019},
        {id:3, titulo:"CHELSEA CHAMPIONS", ano:2021},
        {id:4, titulo:"VUE DEIXA LOUCO", ano:2021},
        {id:5, titulo:"BATMAN", ano:2009},
      ]
    }
  },
}
</script>
