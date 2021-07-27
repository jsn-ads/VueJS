<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>V-IF V-ELSE</title>
</head>
<body>
    <div id="pagina">
        <p v-if="mostrar">Trabalhando com VUE</p>
        <p v-else>Estudando com LARAVEL</p>
        <button @click="mostrar = !mostrar">TROCA</button>
    </div>

    <script src="../../FrameWork/vue.js"></script>
    <script type="text/javascript">
        new Vue({
            el:'#pagina',
            data:{
                mostrar: true
            }
        });
    </script>
</body>
</html>