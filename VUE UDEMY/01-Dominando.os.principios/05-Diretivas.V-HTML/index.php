<!-- Com V-VHTML entre interpreta seu texto como HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diretivas HTML</title>
</head>
<body>

    <div id="app">
        <p>{{nome}}</p>
        <p v-html="nome"></p>
    </div>

    <script src="../../FrameWork/vue.js"></script>
    <script type="text/javascript">
        new Vue({
            el:'#app',
            data: {
                nome : '<span style="color: red">José Alves de Souza Neto</span>'
            }
        });
    </script>
</body>
</html>

