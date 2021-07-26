<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSS</title>
    <style>
        .caixa{
            width: 200px;
            height: 200px;
            display: inline-block;
            margin: 0px;
            background-color: #ee2200;
        }

        .cor{
            background-color: #0000ee;
        }
    </style>
</head>

<body>

<div id="app">
    <div class="caixa" :class="{cor:trocar}" @click="trocar = !trocar"></div>
</div>

<script src="../../FrameWork/vue.js"></script>
<script type="text/javascript">
    new Vue({
        el: "#app",
        data:{
            trocar:false
        }

    });
</script>
</body>
</html>