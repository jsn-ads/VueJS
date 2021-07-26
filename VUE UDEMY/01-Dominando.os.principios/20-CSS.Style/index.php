<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSS Style</title>
</head>

<body>

<div id="app">
    <div :style="estiloCss">
    </div>

    <input v-model="cor" placeholder="digite a cor">
    <input v-model.number="tamanho" placeholder="digite o tamanho">
</div>

<script src="../../FrameWork/vue.js"></script>
<script type="text/javascript">
    new Vue({
        el: "#app",
        data:{
            cor : "blue",
            tamanho : '100'
        },
        computed:{
            estiloCss : function (){
                return {
                    backgroundColor:this.cor,
                    height: this.tamanho + "px",
                    width: '100px'
                };
            }
        }
    });
</script>
</body>
</html>
