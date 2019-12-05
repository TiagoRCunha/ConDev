<template>
  <div class="signIn">
    <NavBar />
    <div class="text-center">
      <form @submit.prevent="submit" class="contIm bg-dark" novalidate="true">
        <div class="form-group" :class="{ 'form-group--error': $v.name.$error }">
          <label style="text-align:left">Nome comercial:</label>
          <input
            type="text"
            class="form-control bgColor btn-outline-secondary"
            placeholder="Digite o nome comercial"
            v-model="name"
            :class="status($v.name)"
            v-model.trim="$v.name.$model"
          />
        </div>
        <hr />
        <div class="form-group" :class="{ 'form-group--error': $v.cnpj.$error }">
          <label style="text-align:left">CNPJ</label>
          <input
            type="email"
            class="form-control bgColor btn-outline-secondary"
            placeholder="Digite seu CNPJ"
            v-model="cnpj"
            :class="status($v.cnpj)"
            v-model.trim="$v.cnpj.$model"
          />
        </div>
        <hr />
        <div class="form-group" :class="{ 'form-group--error': $v.email.$error }">
          <label style="text-align:left">Email</label>
          <input
            type="email"
            class="form-control bgColor btn-outline-secondary"
            placeholder="Email"
            v-model="email"
            :class="status($v.email)"
            v-model.trim="$v.email.$model"
          />
        </div>
        <hr />
        <div class="form-group" :class="{ 'form-group--error': $v.email.$error }">
          <label style="text-align:left">Número funcionários:</label>
          <select class="form-control" id="tipoUsuario" v-model="tamanhoEmpresa">
            <option>1 - 50 funcionários</option>
            <option>51 - 100 funcionários</option>
            <option>101 - 500 funcionários</option>
            <option>500 + funcionários</option>
          </select>
        </div>
        <hr />
        <div class="form-group" :class="{ 'form-group--error': $v.password.$error }">
          <label style="text-align:left">Senha</label>
          <div>
            <input
              type="password"
              class="form-control bgColor btn-outline-secondary"
              placeholder="password"
              v-model="password"
              :class="status($v.password)"
              v-model.trim="$v.password.$model"
            />
          </div>
          <hr />
          <div class="form-group" :class="{ 'form-group--error': $v.repeatPassword.$error }">
            <label style="text-align:left">Digite a Senha novamente</label>
            <div>
              <input
                type="password"
                class="form-control bgColor btn-outline-secondary"
                placeholder="password"
                v-model="repeatPassword"
                :class="status($v.repeatPassword)"
                v-model.trim="$v.repeatPassword.$model"
              />
            </div>
            <p
              style="color:red"
              class="typo__p"
              v-if="!$v.repeatPassword.sameAsPassword"
            >As senhas devem ser iguais</p>
            <p
              style="color:red"
              class="typo__p"
              v-if="!$v.password.minLength"
            >A senha deve ter no minimo 6 digitos</p>
          </div>
        </div>
        <hr />
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="termos" />
          <label class="form-check-label" for="exampleCheck1">Concordo com os termos de uso</label>
        </div>
        <button
          type="button "
          class="btn btn-secondary btn-block mt-2"
          id="cancelarCadastro"
        >CANCELAR</button>
        <button type="button " class="btn btn-info btn-block mt-2">CADASTRAR</button>
        <p
          style="color:red"
          class="typo__p"
          v-if="submitStatus === 'ERROR'"
        >Por favor preencha todos os campos corretamente</p>
        <p class="typo__p" v-if="submitStatus === 'OK'"></p>
        <router-link to="/login">
          <button
            type="button "
            class="btn btn-outline-secondary btn-block mt-2"
          >Já possuo uma conta!</button>
        </router-link>
      </form>
    </div>
  </div>
</template>

<script>
import NavBar from "@/components/NavBar";
import { required, email, sameAs, minLength } from "vuelidate/lib/validators";

export default {
  name: "signInEmpresa",
  data() {
    return {
      name: "",
      cnpj: "",
      email: "",
      password: "",
      tamanhoEmpresa: "",
      repeatPassword: "",
      submitStatus: null
    };
  },
  validations: {
    name: {
      required,
      minLength: minLength(2)
    },
    cnpj: {
      required,
      minLength: minLength(11)
    },
    email: {
      required,
      email,
      minLength: minLength(1)
    },
    repeatPassword: {
      sameAsPassword: sameAs("password")
    },
    password: {
      required,
      minLength: minLength(6)
    }
  },
  components: {
    NavBar
  },
  methods: {
    submit() {
      this.$v.$touch();
      if (this.$v.email.minLength) {
        this.submitStatus = "OK";
      }
      if (this.$v.$invalid) {
        this.submitStatus = "ERROR";
      } else {
        this.submitStatus = "OK";
        this.axios
          .post(" http://localhost:3000/register", {
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
            alert("Não pode efetuar login");
          });
      }
    },
    status(validation) {
      return {
        error: validation.$error,
        dirty: validation.$dirty
      };
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
  border-color: #5a5;
  background: #efe;
}

.dirty:focus {
  outline-color: #8e8;
}

.error {
  border-color: red;
  background: #fdd;
}

.error:focus {
  outline-color: #f99;
}
</style>
