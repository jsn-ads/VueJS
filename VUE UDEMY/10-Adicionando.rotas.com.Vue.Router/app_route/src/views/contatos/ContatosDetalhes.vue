<template>
    <div>
        <h3 class="font-weight-light">Contato id : {{id}}</h3>
    </div>
</template>

<script>
export default {
    data() {
        return {
            id:this.$route.params.id
        }
    },
    watch:{
        '$route'(to){
            this.id = to.params.id
        }
    }
}
</script>