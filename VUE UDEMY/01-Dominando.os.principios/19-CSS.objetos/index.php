<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSS nomes</title>
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

        .cor2{
            background-color: #00b44e;
        }

        .cor3{
            background-color: #feb734;
        }

        .circulo{
            border-radius: 100%;
        }

    </style>
</head>

<body>

<div id="app">
    <div class="caixa"
         :class="trocar"
         @click="novacor = !novacor">
    </div>
</div>

<script src="../../FrameWork/vue.js"></script>
<script type="text/javascript">
    new Vue({
        el: "#app",
        data:{
            novacor:false
        },
        computed:{
            trocar:function (){
                return {
                    cor2: this.novacor,
                    cor3: !this.novacor,
                    circulo: this.novacor
                }
            }
        }
    });
</script>
</body>
</html>
