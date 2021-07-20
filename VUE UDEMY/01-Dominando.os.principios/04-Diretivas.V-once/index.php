<!-- O V-ONCE ele pega o valor do objeto pela primeira vez e mantem aquele valor estatico , mesmo que esse objeto tenha alguma alteração -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div id="app">
        <p v-once> nome : {{nome}}</p>
        <p>nome: {{getNome()}}</p>
    </div>

    <script src="../../FrameWork/vue.js"></script>
    <script type="text/javascript">
        new Vue({
            el:'#app',
            data: {
                nome : "José Alves de Souza Neto"
            },
            methods: {
                getNome: function(){
                    this.nome = "Apenas Neto";
                    return this.nome;
                }   
            }
        });
    </script>
</body>
</html>