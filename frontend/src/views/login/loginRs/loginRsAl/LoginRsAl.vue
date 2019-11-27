<template>
  <div class="loginRsAl">
     <div class="text-center">
        <form method="POST " class="contIm bg-dark ">
          <p style="text-align:left"> Redefinir Senha:
            <input type="password" class="form-control bgColor btn-outline-secondary " name="Senha " id="senha " placeholder="Senha ">
          </p>
          <input type="password" class="form-control bgColor btn-outline-secondary " name="senha" id="confirmarSenha" placeholder="Confirmar senha ">
          <hr>
          <hr>
          <br>
          <br>espaso para api google
          <br>
          <br> 
            <button type="button " class="btn btn-secondary btn-block mt-2" id="cancelarLogin">CANCELAR</button>
            <router-link to="/Login">         
              <button type="button " class="btn btn-info btn-block mt-2 " id="enviar">SALVAR</button>   
            </router-link>      
        </form>
     </div>
  </div>
</template>

<style lang="scss">

.contIm{ //conteiner para as imagens
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
