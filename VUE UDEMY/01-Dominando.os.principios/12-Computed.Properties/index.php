<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Computed Properties</title>
</head>
<body>
<<<<<<< HEAD
<div id="app">
    <p>{{curso}} => {{invertido}}</p>
    <input @keyup.enter="alterar">
</div>
=======
    <div id="app">
        <p>{{curso}} => {{invertido}}</p>
        <input @keyup.enter="alterar">
    </div>
>>>>>>> c479b8c8eb5ad87af934c2fa2b03eaeb154b607e

<script src="../../FrameWork/vue.js"></script>

<<<<<<< HEAD
<script type="text/javascript">
    new Vue({
        el:"#app",
        data:{
            curso:"curso de Vue"
        },
        computed:{
            invertido : function () {
                return this.curso.split("").reverse().join();
            }
        },
        methods:{
            alterar : function (event) {
                this.curso = event.target.value;
            }
        }
    });
</script>
=======
    <script type="text/javascript">
        new Vue({
            el:"#app",
            data:{
                curso:"curso de Vue"
            },
            computed:{
                invertido : function () {
                    return this.curso.split("").reverse().join();
                }
            },
            methods:{
                alterar : function (event) {
                    this.curso = event.target.value;
                }
            }
        });
    </script>

</body>
</html>