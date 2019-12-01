<template>
  <div class="signIn">
    <NavBar />
    <div class="summary text-red" v-if="$v.form.$error">Favor preencher todos os campos</div>
    <div @submit="formulario" class="text-center">
      <form class="contIm bg-dark">
        <div class="px-4" :class="{ 'hasError': $v.form.email.$error }">
          <label style="text-align:left">Nome</label>
          <input type="email" class="form-control bgColor btn-outline-secondary" placeholder="Email" v-model="name"/>
        </div>
        <hr />
        <div class="px-4" :class="{ 'hasError': $v.form.email.$error }">
          <label style="text-align:left">Email</label>
          <input type="email" class="form-control bgColor btn-outline-secondary" placeholder="Email" v-model="email"/>
        </div>
        <hr />
        <div class="px-4" :class="{ 'hasError': $v.form.password.$error }">
          <label style="text-align:left">Senha</label>
          <input type="password" class="form-control bgColor btn-outline-secondary" placeholder="Email" v-model="password"/>
        </div>
        <hr />
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="termos" />
          <label class="form-check-label" for="exampleCheck1">Concordo com os termos de uso</label>
        </div>
        <button type="button " class="btn btn-secondary btn-block mt-2" id="cancelarCadastro">CANCELAR</button>
        <button type="button " class="btn btn-info btn-block mt-2" value="salvarcadastro" id="cadastro">CADASTRAR</button>
        <router-link to="/login">
          <button type="button " class="btn btn-outline-secondary btn-block mt-2">Já possuo uma conta!</button>
        </router-link>
      </form>
    </div>
  </div>
</template>
<script>
import NavBar from "@/components/NavBar";
import { required, email, minLength } from "vuelidate/lib/validators";

export default {
  name: "signInDev",
  data() {
    return {
      email: "",
      password: "",
      name: ""
    };
  },
  components: {
    NavBar
  },
  validations: {
    form: {
      password: { required, min: minLength(10) },
      email: { required, email },
      name: { required, name }
    }
  },

  methods: {
    formulario(e) {
      e.preventDefault();
      this.axios
        .post(" http://localhost:3000/register", {
          email: this.email,
          password: this.password,
          name: this.name
        })
        .then(function() {
          //...
          alert("Registro efetuado com sucesso !");
          this.$router.replace("login");
        })
        .catch(e => {
          console.error(e);
          console.log("Não pode efetuar registro");
        });
      this.$v.form.$touch();
      if (this.$v.form.$error) return;
      alert("Formulario enviado");
    }
  }
};
</script>


<style lang="scss">
.contIm {
  //conteiner para as imagens
  color: #fff;

  margin-left: auto;
  margin-right: auto;
  width: 290px;
  height: auto;
  padding: 1em 1em;
  border-radius: 0.5em;
  box-shadow: 0px 0px 10px 0px #121212;
}
</style>
