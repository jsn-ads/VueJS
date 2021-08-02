<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Montando Templates</title>
    <script src="../../FrameWork/vue.js"></script>
</head>
<body>

<div id="app"></div>

<script type="text/javascript">
    var vm = new Vue({
        template: "<h2>Usando Template</h2>"
    })

    vm.$mount('#app');

</script>
</body>
</html>