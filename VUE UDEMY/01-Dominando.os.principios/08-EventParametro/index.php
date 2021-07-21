<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>EventParametro</title>
</head>
<body>

<div id="app">
    <input v-on:blur="exibirNome(' meu nome e :', $event)">
    <p>{{nome}}</p>
</div>

<script src="../../FrameWork/vue.js"></script>
<script type="text/javascript">
    new Vue({
        el:"#app",
        data:{
            nome: ''
        },
        methods:{
            exibirNome: function (texto, event){
                this.nome = texto +  event.target.value;
            }
        }
    });
</script>
</body>
</html>