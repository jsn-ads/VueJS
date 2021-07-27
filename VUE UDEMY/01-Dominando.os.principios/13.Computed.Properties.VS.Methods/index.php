<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Properties VS Methods</title>
</head>
<body>
<div id="app">
    <p>Curso: {{curso}}</p>
    <p>Curso: reservese Computed : {{cursoReverseComputed}}</p>
    <p>Curso: reservese Methods : {{cursoReverseMethod()}}</p>
    <p>Autor: {{autor ? 'José Neto' : 'José'}}</p>
    <button @:click="autor = !autor">Alterar autor</button>
</div>


<script src="../../FrameWork/vue.js"></script>
<script type="text/javascript">
    new Vue({
        el: "#app",
        data: {
            curso: "Curso PHP",
            autor: false
        },
        computed: {
            cursoReverseComputed: function () {
                console.log('Computed');
                return this.curso.split('').reverse().join('');
            }
        },
        methods: {
            cursoReverseMethod: function () {
                console.log("method");
                return this.curso.split('').reverse().join('');
            }
        }
    });
</script>

</body>
</html>