<template>
  <div>
    <h2>Sobre</h2>

    <p v-if="autor">Autor : {{ autor }}</p>

    <input v-model="autor" />
  </div>
</template>

<script>
export default {
  data() {
    return {
      autor: "",
    };
  },
  activated() {
    console.log("ativado");
  },
  deactivated() {
    console.log("desativado");
  },
};
</script>