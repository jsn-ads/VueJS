<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Computed Properties</title>
</head>
<body>

<div id="app">
    <input @keyup="alterar">
    <p>Nome : {{nomeCompleto}}</p>
</div>

<script src="../../FrameWork/vue.js"></script>
<script type="text/javascript">
    new Vue({
        el: "#app",
        data: {
            nome: "",
            sobreNome: ""
        },
        computed: {
            nomeCompleto: {
                get: function () {
                    return this.nome + " " + this.sobreNome;
                },
                set: function (params) {
                    var n = params.split(' ');
                    this.nome = n[0];
                    this.sobreNome = n[n.length - 1];
                }
            }

        },
        methods: {
            alterar: function (event) {
                this.nomeCompleto = event.target.value;
            }
        }
    });
</script>
</body>
</html>