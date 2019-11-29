<template>
  <div class="loginRs">
     <NavBar/>
     <div class="text-center">
        <form method="POST " class="contIm bg-dark ">
            <p style="text-align:left">E-mail:
            <input type="text " class="form-control bgColor btn-outline-secondary " name=" e-mail" id="e-mail " placeholder="E-mail ">
            </p>
            <hr>
            <br>
            <br>espaço para api google
            <br>
            <br> 
              <button type="button " class="btn btn-secondary btn-block mt-2" id="cancelarLogin">CANCELAR</button>
              <router-link to="/LoginRsAl" >        
                <button type="button " class="btn btn-info btn-block mt-2 " id="enviar">ENVIAR</button>     
              </router-link>    
        </form>
     </div>
  </div>
</template>
<script>
import NavBar from "@/components/NavBar";

export default {
  name: "loginRs",
  components: {
    NavBar
  }
};

</script>
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
