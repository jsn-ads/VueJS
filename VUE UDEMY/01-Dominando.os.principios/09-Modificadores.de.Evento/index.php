<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificadores de Evento</title>
</head>
<body>

    <div id="app">
        <form>
            <input type="text">
            <button type="submit" v-on:click="enviar">Enviar sem Modificador</button>
            <button type="submit" v-on:click.prevent="enviar">Enviar com Modificador</button>
        </form>
    </div>

<script src="../../FrameWork/vue.js"></script>
<script type="text/javascript">
    new Vue({
        el: "#app",
        data:{

        },
        methods:{
            enviar: function (alvo , event){
                console.log(event.type, ":", alvo)
            },
            enviar: function (event){
                console.log("Formulario enviado !");
            }
        }
    });
</script>
</body>
</html>
