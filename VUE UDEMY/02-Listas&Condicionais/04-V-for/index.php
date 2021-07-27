<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>v-for</title>
</head>
<body>
<div id="app">
    <ul>
        <li v-for="p in produtos"> {{texto}} : {{p}}</li>
    </ul>

    <ul>
        <li v-for="(p , index) in produtos"> {{texto}} {{index}}: {{p}}</li>
    </ul>
</div>
<script src="../../FrameWork/vue.js"></script>
<script type="text/javascript">

    new Vue({
        el:"#app",
        data:{
            texto : 'produto',
            produtos : [
                    'monitor',
                    'teclado',
                    'mouse'
            ]
        }
    });

</script>
</body>
</html>