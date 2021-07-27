<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controlando reutilização de elementos com key</title>
</head>
<body>

<div id="tela">
    <template v-if="condicao">
        <label for="">Login</label>
        <input placeholder="Login" key="login">
    </template>

    <template v-else>
        <label for="">E-Mail</label>
        <input placeholder="E-Mail" key="email">
    </template>

    <button @click="condicao = !condicao">Alterar Login</button>
</div>

<script src="../../FrameWork/vue.js"></script>
<script type="text/javascript">
    new Vue({
        el:"#tela",
        data:{
            condicao: true
        }
    });
</script>
</body>
</html>