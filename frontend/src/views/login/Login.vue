<template>
  <div class="login">
     <div class="text-center">
        <form method="POST " class="contIm bg-dark ">
            <p style="text-align:left">E-mail:
            <input type="text " class="form-control bgColor btn-outline-secondary " name=" e-mail" id="e-mail " placeholder="E-mail ">
            </p>
            <hr>
            <p style="text-align:left">Senha:
            <input type="password" class="form-control bgColor btn-outline-secondary " name=" senha " id="senha " placeholder="Senha ">
            </p>
            <hr>
            <br>
            <br>espaso para api google
            <br>
            <br>
            <div class="row ">
               <div class="col-md-6 ">
                    <button type="button " class="btn btn-info btn-block mt-2 " id="logar">LOGIN</button>
                </div>
                <div class="col-md-6 ">
                    <button type="button " class="btn btn-secondary btn-block mt-2" id="cancelarLogin">CANCELAR</button>
                </div>
            </div>
            <button type="button " class="btn btn-outline-secondary btn-block mt-2 ">Criar Uma conta</button>
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
