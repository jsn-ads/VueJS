<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicionando Atributos</title>
    <script src="../../FrameWork/vue.js"></script>
</head>
<body>

<div id="app">
    <p>{{cliente}}</p>
</div>


<script type="text/javascript">
    var vm = new Vue({
        el: "#app",
        data: {
            cliente: {}
        },
        computed: {
            adicionarAtributo : setTimeout( function (){
                Vue.set(vm.cliente , "nome", "Jose alves");
                setTimeout( function (){
                    Vue.set(vm.cliente, "email","jsn.ads@gmail.com")
                },3000)
            },3000)
        },
        methods: {

        }
    });


</script>
</body>
</html>