<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V-ON</title>
</head>
<body>

    <div id="app">
        <button v-on:click="ff">Clique</button>
        <br><br>
        <p> qtd cliques : {{c}}</p>
    </div>

    <script src="../../FrameWork/vue.js"></script>

    <script type="text/javascript">
        
        new Vue({
            el:'#app',
            data: {
                c: 0
            }, 
            methods: {
                ff : function(){
                    this.c++;
                }   
            }
        });

    </script>
</body>
</html>