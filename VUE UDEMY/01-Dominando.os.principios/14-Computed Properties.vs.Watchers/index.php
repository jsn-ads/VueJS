<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Computed Properties vs Watchers</title>
</head>
<body>

<div id="app">
    <p>Nome : {{nome}}</p>
    <button @click="alterar">Alterar Nome</button>
</div>


<script src="../../FrameWork/vue.js"></script>
<script type="text/javascript">
    new Vue({
        el: "#app",
        data: {
            nome: "José Alves"
        },
        watch: {
            nome: function (){
                var vm = this;
                setTimeout(function (){
                    vm.nome = "Nome alterado";
                },3000);
            }
        },
        methods: {
            alterar: function (event) {
                this.nome = "Alves Neto";
            }
        }
    });
</script>
</body>
</html>