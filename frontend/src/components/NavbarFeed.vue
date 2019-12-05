<template>
  <div class="navBar">
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="/">ConDev</a>
      <form class="form-inline ml-auto"></form>

      <Sidebar :visible.sync="visibleRight" :baseZIndex="1000" position="right" class="bg-dark">
        <h1 style="fontWeight:normal;">Menu</h1>

        <div class="btn-group-vertical">
          <router-link to="#">
            <button
              type="button "
              @click="visibleRight = false"
              class="btn btn-outline-success btn-block mt-2"
            >Perfil</button>
          </router-link>

          <router-link to="#">
            <button
              type="button "
              @click="visibleRight = false"
              class="btn btn-outline-success btn-block mt-2"
            >Eventos</button>
          </router-link>

          <router-link to="#">
            <button
              type="button "
              @click="visibleRight = false"
              class="btn btn-outline-success btn-block mt-2"
            >Empresas</button>
          </router-link>

          <router-link to="#">
            <button
              type="button "
              @click="visibleRight = false"
              class="btn btn-outline-success btn-block mt-2"
            >Sobre nos</button>
          </router-link>
        </div>
      </Sidebar>
      <button class="btn btn-outline-success" type="button" @click="visibleRight = true">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>
  </div>
</template>


<script>
export default {
  data() {
    return {
      visibleRight: false
    };
  }
};
</script>

<style lang="scss">
h1 {
  color: #fff;
}
</style>