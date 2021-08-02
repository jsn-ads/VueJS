<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multiplas Instancias</title>
    <script src="../../FrameWork/vue.js"></script>
</head>
<body>

    <div id="app">
        <h3 v-if="mostrarMessagem">Titulo Alterado</h3>
        <p>Titulo: {{titulo}}</p>
        <p>Titulo Lowe Case : {{tituloLowerCase}}</p>
        <input v-model="novoTitulo">
        <button @click="alterar">AlterarTitulo</button>
    </div>

    <div id="app2">
        <p>Titulo: {{titulo}}</p>
    </div>

    <script type="text/javascript">
        new Vue({
            el:"#app",
            data:{
                titulo: 'CURSO DE VUE',
                novoTitulo: '',
                mostrarMessagem : false
            },
            computed:{
                tituloLowerCase: function (){
                    return this.titulo.toLocaleLowerCase().split(' ').join('-');
                }
            },
            methods:{
                alterar : function (){
                    this.titulo = this.novoTitulo;
                    this.novoTitulo = "";
                }
            },
            watch:{
                titulo: function (){
                    this.mostrarMessagem = true;
                    var self = this;
                    setTimeout(function (){
                        self.mostrarMessagem = false;
                    }, 4000);
                }
            }
        });

        new Vue({
            el:"#app2",
            data:{
                titulo : "Curso de LARAVEL"
            }
        });

    </script>
</body>
</html>