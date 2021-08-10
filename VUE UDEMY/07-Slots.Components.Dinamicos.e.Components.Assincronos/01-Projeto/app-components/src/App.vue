<template>
    <div id="app" class="container">
        <h2>Projeto Vue</h2>

        <Post :posts="posts"/>

    </div>
</template>

<script>

import Post from './components/Post.vue'

export default {
    components:{
        Post
    },
    data() {
        return {
            posts:[
                {id: 1, titulo: 'Components no VUE', conteudo: 'Components são uma das peças mais importantes', autor: 'jose neto'},
                {id: 2, titulo: 'Distribuiçãp conteudo com Slots', conteudo: 'Slots podem ser usados como ', autor: 'jose alves'}
            ]
        }
    },
}
</script>


<style scoped>
    .container{
        width: 960px;
        margin: auto;
    }
</style>