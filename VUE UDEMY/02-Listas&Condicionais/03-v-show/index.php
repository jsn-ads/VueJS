<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>v-show</title>
</head>
<body>
    <div id="app">
        <p v-show="params">Oculando com V-show</p>
        <button @click="params = !params">V-show</button>
    </div>
    <script src="../../FrameWork/vue.js"></script>
    <script type="text/javascript">

        new Vue({
           el:"#app",
           data:{
                params : true
           }
        });

    </script>
</body>
</html>