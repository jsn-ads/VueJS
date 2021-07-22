<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eventos de Mouse</title>
</head>
<body>
<div id="app">
    <button v-on:click.right.prevent="clicou">click Direito</button>
    <button v-on:click.middle="clicou">click Central</button>
    <button v-on:click.left="clicou">click Esquerdo</button>
</div>
<script src="../../FrameWork/vue.js"></script>
<script type="text/javascript">
    new Vue({
        el:"#app",
        methods:{
            clicou: function (event){
                console.log(event.button + ' pressionado!');
            }
        }
    });
</script>
</body>
</html>