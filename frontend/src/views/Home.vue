<template>
  <div class="home">
    <NavBar />
    <div class="text-center">
      <div class="conDev bg-dark">
        <Titulo msg="<ConDev/>" />
      </div>
      <div class="contIm">
        <div id="demo" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>

          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../assets/temporario/la.jpg" alt="img 0" />
            </div>
            <div class="carousel-item">
              <img src="../assets/temporario/lb.jpg" alt="img 1" />
            </div>
            <div class="carousel-item">
              <img src="../assets/temporario/lc.jpg" alt="img 2" />
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
// @ is an alias to /src
import Titulo from "@/components/Titulo.vue";
import NavBar from "@/components/NavBar";

export default {
  name: "home",
  components: {
    Titulo,
    NavBar
  }
};
</script>
<style lang="scss">
//tenporario backgrond
body {
  background-image: url("../assets/temporario/bgv.jpg");
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
/* Make the image fully responsive */
.carousel-inner img {
  width: 100%;
  height: 100%;
}

.conDev {
  //conteiner do <ConDev/>
  color: #fff;
  margin-top: 5em;
  margin-left: auto;
  margin-right: auto;
  width: 272px;
  height: 50px;
  padding: 0.4em;
  border-radius: 0.5em;
  box-shadow: 0px 0px 10px 0px #121212;
}
.contIm {
  //conteiner para as imagens
  margin: 4em 2em 4em 2em;
  width: auto;
  height: auto;
  box-shadow: 0px 0px 10px 0px #121212;
}
</style>
