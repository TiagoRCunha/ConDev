<template>
    <div class="navBar">
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid"></div>
            <a class="navbar-brand" href="/">ConDev</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navBarFeed"></div>
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
