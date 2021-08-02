<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>$refs faz o mesmo que document.getElementById</title>
    <script src="../../FrameWork/vue.js"></script>
</head>
<body>

<div id="app">
    <p ref="ecc">Titulo: {{titulo}}</p>
    <button @click="alterar">AlterarTitulo</button>
</div>

<script type="text/javascript">
    var vm = new Vue({
        el: "#app",
        data: {
            titulo: "CURSO DE VUE"
        },
        methods: {
            alterar: function (event) {
                this.$refs.ecc.innerText = "Titulo: Curso Alterado";
                console.log(this.titulo);
            }
        }
    })
</script>
</body>
</html>