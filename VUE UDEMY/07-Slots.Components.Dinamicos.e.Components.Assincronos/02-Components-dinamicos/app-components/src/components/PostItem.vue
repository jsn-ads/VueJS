// template do component filho 

<template>
  <div>
    <slot>
      <div class="post-header">
        <h2>{{ post.titulo }}</h2>
      </div>

      <div class="post-container">
        <p>post.conteudo</p>
      </div>

      <div class="post-footer">
        <small>{{ post.autor }}</small>
        <a href="#"><slot name="link">Clique aqui</slot></a>
      </div>
    </slot>
  </div>
</template>

// criação do objeto 

<script>
export default {
  props: {
    post: Object,
    required: true,
  },
};
</script>

// CSS do component filho 

<style scoped>
.post {
  margin: 15px auto;
}

.post-header {
  padding: 5px 12px;
  background-color: #eee;
}

.post-container {
  font-size: 16px;
}

.post-rodape {
  font-style: italic;
}
</style>
