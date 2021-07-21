<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event</title>
</head>
<body>


    <p id="p" v-on:mousemove="coordenadas">Eixo X: {{x}} Eixo Y {{y}}</p>

    <script src="../../FrameWork/vue.js"></script>
    <script type="text/javascript">
        new Vue({
            el: "#p",
            data:{
                x : 0,
                y : 0
            },
            methods:{
                coordenadas: function (event){
                    this.x = event.clientX;
                    this.y = event.clientY;
                }
            }
        });
    </script>
</body>
</html>