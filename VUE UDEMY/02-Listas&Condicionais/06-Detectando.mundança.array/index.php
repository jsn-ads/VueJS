<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mudança de Array e Objetos</title>
</head>
<body>

<div id="app">
    <div v-for="refrigerantes in lista">{{refrigerantes.refrigerante}}</div>
    <button @click="adicionar">Adicionar</button>
    <button @click="lista = lista.slice(0,4)">Remover item da lista</button>
    <button @click="substituirLista">Subistituir Lista</button>
    <button @click="cortaLista">Corta</button>


    <hr>
    <h3>Trabalhando com Objetos</h3>

    <div v-for="(p, key) in produto">{{key}}: {{p}}</div>
    <button @click="addAtributo">Adicionar Atributo</button>
    <button @click="subistirObjeto">New Object</button>


</div>

<script src="../../FrameWork/vue.js"></script>
<script type="text/javascript">
    new Vue({
        el: "#app",
        data: {
            lista: [
                {refrigerante: 'coca cola'},
                {refrigerante: 'guarana'},
                {refrigerante: 'laranja'},
                {refrigerante: 'uva'}
            ],
            produto:{
                id: 2,
                nome: "controle",
                marca: "samsung"
            }
        },
        methods: {
            adicionar: function (event) {
                var id = this.lista.length + 1;
                this.lista.push({id: id, refrigerante: "desconhecido" + id});
            },
            substituirLista: function (event) {
                var tamanho = this.lista.length;
                var indice = Math.round(tamanho / 2);
                var novoRefri = {refrigerante: "New Refri" + (tamanho + 1)};
                Vue.set(this.lista, indice, novoRefri);
            },
            cortaLista: function (event) {
                this.lista.splice(2);
            },
            addAtributo: function(event){
                Vue.set(this.produto, 'preço', 100);
            },
            subistirObjeto : function(event){
                this.produto = Object.assign({}, this.produto,{
                    preço:50,
                    cor: 'preta'
                });
            }
        }
    });
</script>
</body>
</html>