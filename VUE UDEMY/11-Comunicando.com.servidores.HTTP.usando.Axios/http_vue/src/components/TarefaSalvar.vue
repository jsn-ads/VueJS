<template>
    <div class="mt-4">
        <hr>
        <h2 class="font-weight-light">Salvar Tarefa</h2>
        <form @submit.prevent="salvar">
            <div class="row">
                
                <div :class="classeColuna">
                    <div class="form-group">
                        <label>Título</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            placeholder="Título da tarefa"
                            v-model="tarefaLocal.titulo"
                        >
                    </div>    
                </div>
                
                <div class="col-sm-2" v-if="tarefa">
                    <div class="form-group">
                        <label>Tarefa concluida</label>
                        <button 
                            type="button"
                            :class="btn_tarefa"
                            @click="tarefaLocal.concluido = !tarefaLocal.concluido"
                        >
                            <i class="fa fa-check"></i>
                        </button>
                    </div>
                </div>

            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>

        </form>
    </div>
</template>

<script>
export default {
    props:{
        tarefa:{
            type: Object,
            default: undefined
        }
    },
    // cria um novo objeto para recebe novas informaçoes e evita de causa mutaçoes 
    data(){
        return{
            tarefaLocal: Object.assign(
                {}, {titulo: '', concluido: false},
                this.tarefa
            )
        }
    },
    // verifica se componet ja possui um objeto preenchido
    computed:{
        classeColuna(){
            return this.tarefa ? 'col-sm-10' : 'col-sm-12'
        },
        btn_tarefa(){
            return this.tarefa && this.tarefaLocal.concluido ? 'btn btn-sm btn-success ml-2' : 'btn btn-sm btn-secondary ml-2'
        }
    },
    //escuta e aplica alterações feita na props tarefa e aleterando tarefa local
    watch:{
        tarefa(){
            this.tarefaLocal = Object.assign({}, this.tarefa)
        }
    },
    methods: {
        salvar(){

            const operacao = !this.tarefa ? 'criar' : 'editar'
            //para não causa mutação no component filho , iremos emitir o event salvar no componet pai
            this.$emit(operacao , this.tarefaLocal)

            //limpando campos dos formularios
            this.tarefaLocal = {titulo: '', concluido: false}
        }
    },
}
</script>