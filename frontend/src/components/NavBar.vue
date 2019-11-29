<template>
  <div class="navBar">
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="/">ConDev</a>
      <form class="form-inline ml-auto">
        <div>
          <router-link to="/signInTipo">
            <a class="nav-link">Cadastre-se</a>
          </router-link>
        </div>
        <router-link to="/login">
          <button class="btn btn-outline-success">Entrar</button>
        </router-link>
      </form>
    </nav>
  </div>
</template>

<script>
</script>

<style>
</style>