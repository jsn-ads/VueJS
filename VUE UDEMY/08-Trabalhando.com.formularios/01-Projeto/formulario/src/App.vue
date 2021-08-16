<template>
  <div id="app">
    
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Formulários no Vue</h1>
        <p class="lead">Treinando a manipulação de formulários</p>
      </div>
    </div>

    <div class="container">

      <div class="row">

        <!-- formulario -->
        <div class="col-sm-6">

          <h3>Preencha abaixo</h3>

          <form @submit.prevent="enviar">

            <div class="form-group">
              <label>Nome:</label>
              <input type="text" 
                     class="form-control" 
                     placeholder="Seu nome"
                     v-model.trim.lazy="pessoa.nome"
              >
            </div>

            <div class="form-group">
              <label>Endereço de email:</label>
              <input type="email" 
                     class="form-control" 
                     placeholder="Seu email"
                     v-model.trim.lazy="pessoa.email"
              >
            </div>

            <div class="form-group">
              <label>Idade:</label>
              <input 
                    type="number" 
                    class="form-control" 
                    placeholder="Sua idade"
                    v-model.number="pessoa.idade"
              >
            </div>

            <div class="form-group">

              <p>Gênero:</p>

              <div class="form-check form-check-inline">
                <input 
                  type="radio" 
                  class="form-check-input" 
                  value="Masculino"
                  v-model="pessoa.genero"
                >

                <label 
                  class="form-check-label">
                  Masculino
                </label>
              </div>

              <div class="form-check form-check-inline">
                <input 
                  type="radio" 
                  class="form-check-input" 
                  value="Feminino"
                  v-model="pessoa.genero"
                >
                <label 
                  class="form-check-label">
                  Feminino
                </label>
              </div>

            </div>

            <div class="form-group">
              <label>Ocupação:</label>
              <select class="form-control" v-model="pessoa.ocupacao">
                <option value="" disabled>Selecione uma opção...</option>
                <option 
                  v-for="(ocupacao, index) in ocupacoes"
                  :key="index"
                  :value="ocupacao"
                  :selected="pessoa.ocupacao"
                >
                  {{ocupacao}}
                </option>
              </select>
            </div>  

            <div class="form-group">

              <p>Tecnologias:</p>

              <div class="form-check form-check-inline">
                <input 
                  type="checkbox" 
                  class="form-check-input" 
                  value="JavaScript"
                  v-model="pessoa.tecnologias"
                >
                <label class="form-check-label">JavaScript</label>
              </div>

              <div class="form-check form-check-inline">
                <input 
                  type="checkbox" 
                  class="form-check-input"
                  value="Vue JS"
                  v-model="pessoa.tecnologias"
                >
                <label class="form-check-label">Vue JS</label>
              </div>

              <div class="form-check form-check-inline">
                <input 
                  type="checkbox" 
                  class="form-check-input" 
                  value="Vuex"
                  v-model="pessoa.tecnologias"
                >
                <label class="form-check-label">Vuex</label>
              </div>

              <div class="form-check form-check-inline">
                <input 
                  type="checkbox" 
                  class="form-check-input" 
                  value="Vue Router"
                  v-model="pessoa.tecnologias"
                >
                <label class="form-check-label">Vue Router</label>
              </div>

            </div>      

            <div class="form-group">
              <label>Resumo de perfil:</label>
              <textarea 
                class="form-control" 
                placeholder="Conte-nos um pouco sobre você..."
                v-model.trim.lazy="pessoa.descricao"
              >
              </textarea>
            </div>

            <div class="form-group">
              <Range
                label="Salario Pretendido"
                v-model.number="pessoa.salario"
                min="1000"
                max="5000"
                step="500"
                :estilo="[{'form-control-range':true}]"
              />
            </div>

            <div class="form-group">

              <div class="form-check form-check-inline">
                <input 
                  type="checkbox" 
                  class="form-check-input" 
                  v-model="pessoa.notificacoes"
                  true-value="sim"
                  false-value="nao"
                >
                <label class="form-check-label">Receber notificações por email</label>
              </div>

            </div>

            <button class="btn btn-secondary" type="button" @click="resetar()">Resetar</button>
            <button class="btn btn-success" type="submit">Enviar</button>

          </form>

        </div>

        <!-- saida -->
        <div class="col-sm-6">

          <h3>Saída</h3>

          <div class="card">

            <div class="card-header">Dados</div>

            <ul class="list-group list-group-flush">
              <li class="list-group-item"><strong>Nome: {{pessoa.nome}}</strong></li>
              <li class="list-group-item"><strong>Email: {{pessoa.email}}</strong> </li>
              <li class="list-group-item"><strong>Idade:  {{pessoa.idade}}</strong></li>
              <li class="list-group-item"><strong>Gênero:</strong> {{pessoa.genero}} </li>
              <li class="list-group-item"><strong>Ocupação: {{pessoa.ocupacao}}</strong> </li>
              <li class="list-group-item"><strong>Tecnologias:</strong>
                  <ul>
                    <li 
                      v-for="(tecnologia , index) in pessoa.tecnologias"
                      :key="index"
                    >
                        {{tecnologia}}
                    </li>
                  </ul>
               </li>
              <li class="list-group-item"><strong>Biografia:</strong> <pre>{{pessoa.descricao}}</pre> </li>
              <li class="list-group-item"><strong>Receber notificações?</strong> {{pessoa.notificacoes ? 'SIM' : 'NÃO'}} </li>
              <li class="list-group-item"><strong>Salario Pretendido : </strong> R${{pessoa.salario}},00 </li>
            </ul>

            <div class="card-header">Model</div>

            <div class="card-body">
              <pre><code>{{ {pessoa} }}</code></pre>
            </div>

          </div>

        </div>

      </div>

    </div>

  </div>
</template>

<script>

import Range from './components/Range.vue'

export default {

  components:{
      Range,
  },
  data(){
    return {

        pessoa : {},
        padrao : {
          nome : '',
          email : '', 
          idade : null,
          descricao : '',
          genero: 'Masculino',
          notificacoes: "nao",
          tecnologias : [],
          ocupacao : "",
          salario : '1000'
        },
        ocupacoes : [
          "Programador FRONT END",
          "Programador BACK END",
          "Programador FULL STACK",
          "Programador MOBILE"
        ]
    }
  },
  methods: {
    enviar(){
      const FormularioPessoa = Object.assign({} , this.pessoa)
      console.log(FormularioPessoa)
    },
    resetar(){
      this.pessoa = Object.assign({}, this.padrao);
    }
  },
  created() {
    this.resetar()
  },
}
</script>


<style scoped>
  .btn {
    margin-right: 5px;
  }
</style>