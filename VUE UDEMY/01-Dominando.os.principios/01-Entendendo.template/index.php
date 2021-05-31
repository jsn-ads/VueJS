<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entendendo Template</title>
</head>
<body>
    <div id="app">
        <p>Curso: {{curso}} | {{instrutor()}}</p>
    </div>
    <script src="../../FrameWork/vue.js"></script>
    <script>

        new Vue({
            el: '#app',
            data: {
                curso: 'VueJS',
                nome: 'Jose Alves'
            },methods: {
                instrutor: function(){
                    return this.nome;
                }
            },
        });

    </script>
</body>
</html>