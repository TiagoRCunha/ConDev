<template>
  <div class="login">
    <NavBar />
    <div class="text-center">
      <form @submit.prevent="submit" class="contIm bg-dark" novalidate="true">
        <div class="form-group" :class="{ 'form-group--error': $v.email.$error }">
          <label style="text-align:left">Email</label>
          <input type="email" class="form-control bgColor btn-outline-secondary" placeholder="Email" v-model="email" :class="status($v.email)" v-model.trim="$v.email.$model" />
        </div>
        <div style="color:red" v-if="!$v.email.minLength">* Email é obrigatório.</div>
        <hr />
        <div class="form-group" :class="{ 'form-group--error': $v.password.$error }">
          <label style="text-align:left">Senha</label>
          <div>
            <input type="password" class="form-control bgColor btn-outline-secondary" placeholder="password" v-model="password" :class="status($v.password)" v-model.trim="$v.password.$model" />
          </div>
        </div>
        <hr />
        <br />
        <br />espaço para api google
        <br />
        <br />
        <router-link to="/home">
        <button type="button " class="btn btn-secondary btn-block mt-2" id="cancelarLogin">CANCELAR</button>
        </router-link>
        <button type="button " class="btn btn-info btn-block mt-2">LOGIN</button>
        <p style="color:red" class="typo__p" v-if="submitStatus === 'ERROR'">Por favor preencha todos os campos corretamente</p>
        <p class="typo__p" v-if="submitStatus === 'OK'"></p>
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
import router from '../../router';
import { required, email , minLength } from 'vuelidate/lib/validators'

export default {
  data() {
    return {
      email: "",
      password: "",
      submitStatus: null
    };
  },

  validations: {
    email: {
      required,
      email,
      minLength: minLength(1)
    },
    password: {
      required,
      minLength: minLength(1)
    }

  },

  components: {
    NavBar
  },
  methods: {

    submit() {
      this.$v.$touch()
      if (this.$v.email.minLength) {
        this.submitStatus = 'OK'
      }
      if (this.$v.$invalid) {
        this.submitStatus = 'ERROR'
      }
      else {
        this.submitStatus = 'OK'
        this.axios
          .post(" http://localhost:3000/login", {
            email: this.email,
            password: this.password
          })
          .then(function() {
            //...
            alert("Login efetuado com sucesso !");
            router.replace("Feed");
          })
          .catch(e => {
            console.error(e);
            alert("Não pode efetuar login");
          });
      }
    },
    status(validation) {
      return {
        error: validation.$error,
        dirty: validation.$dirty
      }
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

input {
  border: 1px solid silver;
  border-radius: 4px;
  background: white;
  padding: 5px 10px;
}


.dirty {
  border-color: #5A5;
  background: #EFE;
}

.dirty:focus {
  outline-color: #8E8;
}

.error {
  border-color: red;
  background: #FDD;
}

.error:focus {
  outline-color: #F99;
}
</style>
