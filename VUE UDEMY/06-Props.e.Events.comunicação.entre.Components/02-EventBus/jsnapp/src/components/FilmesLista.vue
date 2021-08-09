<template>
  <div class="row">

    <!-- coluna 1 -->
    <div class="col-8">

      <h2>Filmes</h2>

      <ul class="list-group list-group-flush">

        <FilmesListaIten 
          v-for="filme in lista" 
          :key="filme.id" :filme="filme" 
          :class="aplicar(filme)" 
          @selecionado="filmeSelect = $event"
        />
      </ul>

    </div>

    <!-- coluna 2 -->
    <div class="col-4">

      <FilmesListaItenInfo 
        v-if="!edicao"
        :filme="filmeSelect"
        @editarData= "editar"
      />

      <FilmesListaItenEditar
        v-else
        :filme="filmeSelect"
      />
       

    </div>

  </div>
</template>

<script>

import { eventBus } from './../main'

import FilmesListaIten from './FilmesListaIten.vue'
import FilmesListaItenEditar from './FilmesListaItenEditar.vue'
import FilmesListaItenInfo from './FilmesListaItenInfo.vue'



export default {
  components: {
    FilmesListaIten,
    FilmesListaItenInfo,
    FilmesListaItenEditar
  },
  data() {
    return {
      lista:[
        {id:1, titulo:"O Vingadores", ano:2018},
        {id:2, titulo:"O Irlandes", ano:2019},
        {id:3, titulo:"CHELSEA CHAMPIONS", ano:2021},
        {id:4, titulo:"VUE DEIXA LOUCO", ano:2021},
        {id:5, titulo:"BATMAN", ano:2009},
      ],
      filmeSelect: undefined,
      edicao : false
    }
  },
  methods: {
    aplicar(parans){
      return {
        active: this.filmeSelect && this.filmeSelect.id === parans.id
      }
    },
    editar(filme){
      this.edicao = true
      this.filmeSelect = filme
    },
    atualizar(filmeSelecionado){
      const indice = this.lista.findIndex(filme => filme.id === filmeSelecionado.id)
      this.lista.splice(indice , 1, filmeSelecionado)
      this.edicao = false
      this.filmeSelect = false

    }
  },
  created() {
    eventBus.$on('selecionado', (filme)=>{
      this.filmeSelect = filme
    })

    eventBus.$on('atualizado', this.atualizar)

  }
}
</script>
