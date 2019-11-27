<template>
  <div class="signInTipo">
    <div class="text-center">

      <form method="POST" class="contIm bg-dark">
        <Titulo msg="Tipo de Cadastro"/>
        <hr>
        <router-link to="/signInDev">
            <button type="button " class="btn btn-outline-primary btn-block mt-2 " value="signInDev" id="signInEmpresa">Desenvolvedor</button>
        </router-link>
        <router-link to="/signInEmpresa">
            <button type="button " class="btn btn-outline-success btn-block mt-2" value="signInEmpresa" id="signInEmpresa">Empresa</button>
        </router-link>
      </form>
    </div>
  </div>
</template>

<script>
// @ is an alias to /src
import Titulo from '@/components/Titulo.vue';

export default {
  name: 'home',
  components: {
    Titulo,
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
