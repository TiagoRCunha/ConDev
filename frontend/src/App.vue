<template>
  <div id="app">
    
    <router-view />
  

  
      <!-- <NavBar/> -->



  </div>

  
  
</template>
<script>
import "bootstrap/dist/css/bootstrap.css";
// import NavBar from './components/NavBar.vue'


export default {
  name: "app",
};

</script>

<style lang="scss">
#app {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
</style>
