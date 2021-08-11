<template>
    <div>
        <h2>Lista de Posts</h2>
        <!-- imprimi a lista de objetos do component filho -->
        <PostItem
            v-for="post in posts"
            :key="post.id"
            :post="post"
        >
            <slot :meuPost="post"></slot>
        </PostItem>
    </div>
</template>

<script>

// importa o component filho 

import PostItem from './PostItem.vue';

export default {
    components:{
        PostItem
    },
    // cria uma lista para receber os objetos do component filho
    props:{
        posts: Array,
        required: true
    }
}
</script>