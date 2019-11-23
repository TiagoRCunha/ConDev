<template>
  <div id="app">
    <div id="nav">
      <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="/">ConDev</a>
        <form class="form-inline ml-auto">
          <div>
            <router-link to="/signInTipo">
              <a class="nav-link" >Cadastre-se</a>
            </router-link>
        </div>
          <router-link to="/login">
            <button class="btn btn-outline-success" >Entrar</button>
          </router-link>
        </form>
      </nav>
    </div>
    <router-view />
  </div>
</template>
<script>
import "bootstrap/dist/css/bootstrap.css";
export default{
  name:'app'
}
</script>
<style lang="scss">
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

</style>
