<template>
    <div>
        <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white">
        <div class="container-fluid">
            <router-link  class="navbar-brand" to="/" exact>A Kaya</router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample07">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active rounded">
                        <router-link  class="nav-link" to="/novo/post" exact>Cadastrar Apartamento</router-link>
                    </li>
                    <router-link class="nav-item rounded" tag="li" to="/room/id" exact="">
                        <a href="">Go to Bar</a>
                    </router-link>

                    <div class="nav-search-cont ml-2">
                        <div class="vuew"></div>
                        <div class="nav-search border">
                            <div class="nav-search-icon">
                                 <span data-feather="search"></span>
                            </div>
                            <div class="nav-input-cont">
                                <input class="nav-search-input" type="text" placeholder="Procurar Casas">
                            </div>
                        </div>
                    </div>
                </ul>
                <ul>
                    <li class="nav-item dropdown">
                        <a class="nav-link form-control" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Edilson H. Mucanze</a>
                        <div class="dropdown-menu" style="margin-top: 11px;" aria-labelledby="">
                            <a class="dropdown-item" href="editperfil.html">Editar Perfil</a>
                            <a class="dropdown-item" href="#">Covidar amigos</a>
                            <a class="dropdown-item" href="#">Configuracoes de Conta</a>
                            <a class="dropdown-item" href="#">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <router-view></router-view>
    </div>

</template>
<script>
export default {
    props:['nav_class']
};
</script>
