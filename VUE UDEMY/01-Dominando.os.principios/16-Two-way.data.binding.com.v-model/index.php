<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Two-way Data Binding com v-model</title>
</head>
<body>

<div id="app">
    <input v-model="nome">
    <p>Nome : {{nome}}</p>
</div>

<script src="../../FrameWork/vue.js"></script>
<script type="text/javascript">
    new Vue({
        el: "#app",
        data: {
            nome: "",
        }
    });
</script>
</body>
</html>