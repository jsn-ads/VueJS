<template>
    <div id="app3">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Animação de numeros</h1>
            </div>
        </div>

        <div class="container">
            <div class="form-group">
                <input 
                    type="text" 
                    class="form-control" 
                    v-model.number="numero" 
                    step="50"
                >
            </div>

            <div class="form-group">
                <div class="alert alert-info">
                    <h3 class="font-weight-light">
                        <strong>Número : </strong>
                        <span>{{numero}}</span>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</template>


<script>

export default {
    data(){
        return { 
            numero: 0,
        }
    }
}
</script>