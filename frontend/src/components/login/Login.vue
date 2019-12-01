<template>
  <div class="login">
    <NavBar />
    <div class="text-center">
      <div class="summary text-red" v-if="$v.form.$error">Favor preencher todos os campos</div>
      <form @submit="formulario" class="contIm bg-dark" novalidate="true">
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
        <br />
        <br />espaço para api google
        <br />
        <br />
        <button type="button " class="btn btn-secondary btn-block mt-2" id="cancelarLogin">CANCELAR</button>
        <button type="button " class="btn btn-info btn-block mt-2" id="logar">LOGIN</button>
        <router-link to="/LoginRs">
          <button type="button " class="btn btn-outline-success btn-block mt-2">Esqueci a Senha</button>
        </router-link>
        <button type="button " class="btn btn-outline-secondary btn-block mt-2">Criar nova conta</button>
      </form>
    </div>
  </div>
</template>

<script>
import NavBar from "@/components/NavBar";
import { required, email, minLength } from "vuelidate/lib/validators";

export default {
  data() {
    return {
      email: "",
      password: ""
    };
  },

  components: {
    NavBar
  },

  validations: {
    form: {
      password: { required, min: minLength(10) },
      email: { required, email },
    }
  },
  methods: {
    formulario(e) {
      e.preventDefault();
      this.axios
        .post(" http://localhost:3000/login", {
          email: this.email,
          password: this.password
        })
        .then(function() {
          //...
          alert("Login efetuado com sucesso !");
          this.$router.replace("feed");
        })
        .catch(e => {
          console.error(e);
          console.log("Não pode efetuar login");
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
  margin-top: 3em;
  margin-left: auto;
  margin-right: auto;
  width: 290px;
  height: auto;
  padding: 1em 1em;
  border-radius: 0.5em;
  box-shadow: 0px 0px 10px 0px #121212;
}
</style>
