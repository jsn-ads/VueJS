<template>
    <div>
        <!-- mostra a lista de contatos -->
        <ContatosLista :busca="busca"/>
        <!-- mostra detalhes do contato -->
        <router-view name="contato-detalhes"></router-view>
        <!-- router defaut -->

        <transition name="slide" mode="out-in">
            <router-view></router-view>
        </transition>
        
    </div>
</template>

<style scoped>
  
  .slide-enter, .slide-leave-to{
    transform: translateX(-50px);
    opacity: 0;
  }

  .slide-enter-active, .slide-leave-active{
    transition: all 0.3s;
  }


</style>