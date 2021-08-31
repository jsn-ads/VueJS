<template>
    <div>
        <h3 class="font-weight-light">Contato id : {{id}}</h3>
        <router-link :to="`/contatos/${id}/editar`" class="btn btn-info">Editar</router-link>
    </div>
</template>

<script>
export default {
    props: {
        id: {
            type: Number,
            required : true
        }
    }
}
</script>