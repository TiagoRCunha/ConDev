<template>
  <div class="signIn">
    <NavBar/>
    <div class="text-center">
      <form method="POST" class="contIm bg-dark">
          <p style="text-align:left">Nome comercial:
          <input type="text" class="form-control bgColor btn-outline-secondary " name=" nome " id="nome " placeholder="Seu nome ">
          </p>
          <hr>
          <p style="text-align:left">CNPJ:
          <input type="text" class="form-control bgColor btn-outline-secondary " name="cnpj " id="cnpj " placeholder="CNPJ ">
          </p>
          <hr> 
          <p style="text-align:left">E-mail:
          <input type="text" class="form-control bgColor btn-outline-secondary " name=" e-mail " id="e-mail " placeholder="E-mail ">
          </p>
          <hr>
          <div class="form-group" style="text-align:left">
            <label for="tipoDeUsuario">Tamanho da empresa:</label>
            <select class="form-control" id="tipoUsuario">
              <option> 1 - 50 funcionários</option>  <!--ligar o select ao banco de dados -->
              <option>51 - 100 funcionários</option>
              <option>101 - 500 funcionários</option>
              <option>500 + funcionários</option>
            </select>
          </div>
          <hr>
          <p style="text-align:left"> Senha:
          <input type="password" class="form-control bgColor btn-outline-secondary " name="Senha " id="senha " placeholder="Senha ">
          </p>
          <input type="password" class="form-control bgColor btn-outline-secondary " name="senha" id="confirmarSenha" placeholder="Confirmar senha ">
          <hr>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="termos">
            <label class="form-check-label" for="exampleCheck1">Concordo com os termos de uso</label>
          </div>
        <button type="button " class="btn btn-secondary btn-block mt-2" id="cancelarCadastro">CANCELAR</button>
        <button type="button " class="btn btn-info btn-block mt-2 " value="salvarcadastro" id="cadastro">CADASTRAR</button>
        <router-link to="/login">
          <button type="button " class="btn btn-outline-secondary btn-block mt-2 ">Já possuo uma conta!</button>
        </router-link>
      </form>
    </div>
  </div>
</template>

<script>
import NavBar from "@/components/NavBar";

export default {
  name: 'signInEmpresa',
  components: {
    NavBar,
  },
};
</script>

<style lang="scss">

.contIm{ //conteiner para as imagens
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
