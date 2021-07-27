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

    <hr>

    <ul>
        <li v-for="(obj , key) in computador">{{key}} : {{obj}}</li>
    </ul>

    <hr>

    <input v-model.number="valor">

    <ul>
        <li v-for="v in valor">{{v}}</li>
    </ul>

    <hr>

    <ul>
        <li v-for="(c ) in celulares" :key="c.id">{{c.id}} {{c.celular}} {{c.ram}} RAM</li>
    </ul>

    <button @click="celulares.reverse()">Inverter</button>
    <button @click="Adicionar">Adicionar</button>

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
            ],
            computador:{
                cpu: "AMD Ryzen 5",
                gpu: "AMD",
                memoria: "RAMPAGE",
                ram: 12
            },
            valor: 0,
            celulares:[
                {id: 1, celular: "motorola", ram: 4},
                {id: 2, celular: "samsung", ram: 8},
                {id: 3, celular: "sony", ram: 6},
                {id: 4, celular: "iphone", ram: 3},

            ]
        },
        methods:{
            Adicionar: function (){
                var id = this.celulares.length + 1;
                this.celulares.push({id: id, celular: "tabajara"})
            }
        }
    });

</script>
</body>
</html>