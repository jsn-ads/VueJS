<template>
    <div>
        <h3 class="font-weight-light">
            Editar contato com id:{{id}}
        </h3>
        <button 
            class="btn btn-secondary mt-4 mb-4"
            @click="$router.back()"
        >
            Voltar
        </button>
    </div>
</template>

<script>
export default {
    props : {
        id:{
            type : Number,
            required : true
        }
    },
    data() {
        return {
            curso: 'curso de JS'
        }
    },
    beforeRouteEnter (to, from, next) {
        //verifica se usuario esta logado 'autenticado e utilizando event-bus.js'
        if(to.query.autenticado === 'true'){
            return next( (vm) =>{
                console.log('Curso : ', vm.curso)
            })
        }

        next('/contatos')
    },
    beforeRouteLeave (to, from, next) {
        const confirmar = window.confirm('Deseja realmente sair ?')
        next(confirmar)
    }
}
</script>