<template>
    <div id="app2">
        <hr>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Transition de Grupos</h1>
            </div>
        </div>

        <div class="container">

            <div class="form-group">
                <input 
                    type="text" 
                    class="form-control"
                    placeholder="Adicione um novo curso"
                    @keyup.enter="adicionar"
                    ref="inputCurso"
                >
            </div>

            <h3>Lista de Cursos</h3>


            <div class="row">
                <div class="col-sm-2">
                    <button class='btn btn-info' @click="embaralhar" >Embaralhar</button>
                </div>

                <div class="col-sm-10">
                    <div class="form-group">
                        <transition-group tag="ul" class="list-group" name="list">
                            <li
                                v-for="(curso , indice) in cursos"
                                :key="indice"
                                class="list-group-item"
                            >
                                <span>{{curso}}</span>
                                <button class="btn btn-danger btn-sm float-right" @click="excluir(indice)">X</button>
                            </li>
                        </transition-group>
                    </div>
                </div>

            </div>
            
            
        </div>
    </div>
</template>

<script>

import {shuffle} from 'lodash'

export default {
    data(){
        return{
            cursos:[
                'JAVA',
                'PAYTON',
                'PHP',
                'VUE',
                'LARAVEL'
            ]
        }
    },
    methods: {
        adicionar(event){
            const curso = event.target.value
            if(curso){
                this.cursos.unshift(curso)
                this.$refs.inputCurso.value = ""
            }
        },
        excluir(indice){
            this.cursos.splice(indice , 1)
        },
        embaralhar(){
            this.cursos = shuffle(this.cursos)
        }
    },  
}
</script>

<style scoped>
    
    .list-enter, .list-leave-to {
        opacity: 0;
        transform: translateX(-70px);
    }

    .list-enter-active, .list-leave-active , .list-move{
        transition: all 1s;
    }

    .list-leave-active{
        position: absolute;
        width: calc(100% - 100px);
    }

</style>