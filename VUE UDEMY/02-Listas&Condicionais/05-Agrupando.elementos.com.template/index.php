<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agrupando elementos com template</title>
</head>
<style>
    .separador {
        list-style: none;
        border-bottom: 1px solid black;
    }
</style>

<body>

<div id="app">
    <ul>
        <template v-for="item in itens">
            <li>{{item}}</li>
            <li class="separador"></li>
        </template>
    </ul>

    <hr>

    <h3>Tarefas para concluir</h3>
    <ul>
        <li v-for="tarefa in tarefasIncompletas">{{tarefa.tarefa}}</li>
    </ul>
</div>

<script src="../../FrameWork/vue.js"></script>
<script type="text/javascript">
    new Vue({
        el: "#app",
        data: {
            itens: [
                {id: 1, item: "mesa"},
                {id: 2, item: "tv"},
                {id: 3, item: "pc"},
                {id: 4, item: "carro"}
            ],
            tarefas: [
                {id: 1, tarefa: 'tela ab', conclusao: true},
                {id: 2, tarefa: 'cadastro', conclusao: false},
                {id: 3, tarefa: 'enfermagem', conclusao: false},
                {id: 4, tarefa: 'pep', conclusao: false}
            ]
        },
        computed: {
            tarefasIncompletas: function () {
                return this.tarefas.filter(function (tarefa){
                   return !tarefa.conclusao
                });
            }
        }
    });
</script>
</body>
</html>