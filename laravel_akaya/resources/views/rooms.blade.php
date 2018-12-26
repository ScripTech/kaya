<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>Kaya</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/dist/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400" rel="stylesheet" media="none" onload="if(media!='all')media='all'">

    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.html">A Kaya</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample07">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active rounded">
                        <a class="nav-link" href="#">Cadastrar Apartamento
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
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

    <style>
        .post-card-img{
            position: relative;
        }

        .post-card-img .room-price{
            position: absolute;
            bottom: 20px;
            left: 20px;
            line-height: 1;
            border-radius: 60px;
            background: white;
            padding: 10px 12px;
            font-weight: 500;
            cursor: pointer;
        }

        .post-card-img .room-like{
            position: absolute;
            bottom: 20px;
            left: 20px;
            line-height: 1;
            border-radius: 60px;
            background: white;
            padding: 10px 14px;
            font-weight: 500;
            cursor: pointer;
        }

        .room-post-owner{
            position: absolute;
            top: 15px;
            left: 15px;
            right: 15px;
            color:white !important;
            transition: opacity ease 300ms;
            opacity: 0;
        }

        .post-card-img .room-like, .post-card-img .room-like *, .post-card-img .room-like:before {
            transition: opacity ease 300ms;
            opacity: 0;
        }

        .img-box:hover .room-price, .post-card-img .room-price *,.post-card-img:hover .room-price:before{
             transition: opacity ease 300ms;
            opacity:0;
        }

        .post-card-img:hover .room-like, .post-card-img .room-like *,.post-card-img:hover .room-like:before{
            transition: opacity ease 300ms;
            opacity:1;
        }

        .post-card-img:hover .room-post-owner, .post-card-img .room-post-owner *,.post-card-img:hover .room-post-owner:before{
            transition: opacity ease 300ms;
            opacity:1;
        }

        .post-card-img .img-box{
            width: 100%;
            overflow: hidden;
            cursor: pointer;
        }

        .img-box .like-bt{
            width: 32px !important;
            height: 32px !important;
        }

        .img-box-container{
            margin: auto;
            display: block;
            overflow: hidden;
        }
        .responsive-img {
            display: block;
            width: 100%;
            max-width: 100%;
            height: auto;
            border-radius: 12px;
        }

        .post-f{
            position: relative;
            height: 55px;
            max-height: 55px;
        }
        .post-f .post-f-l{
            float: left;
        }
        .post-f .post-f-r{
            float: right;
        }
        .post-img-info{
            margin: 0;
            font-size: 16px;
            display: block;
            line-height: 20px;
            color: #2d2d2d;
        }
        .elepises{
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
        }

        .rooms_container{
            margin: 0 auto;
            padding: 15px 0;
            width: 1160px;
            max-width: 95%;
        }

    </style>
    <style>

        @media (max-width: 1159px){
            .col-sm-12 {
                width: 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }

        }

        @media (max-width: 1159px) and (min-width: 768px)
        {
            .hidden-sm {
                display: none !important;
            }
        }
        @media (min-width: 768px){
            .col-sm-4 {
                width: 33.33333%;
            }
        }

        @media (min-width: 1160px){
            .col-md-4 {
                width: 33.33333%;
                flex: 0 0 33.33333%;
            }
        }

        @media (max-width: 767px){
            .hidden-xs {
                display: none !important;
            }
        }

    </style>

    <div id="app">
        <room :title="'{{$title}}'" :author="{{$author}}"></room>
    </div>
    <script type="text/javascript" src="js/app.js"></script>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script src="css/icons/feather.min.js"></script>
    <script>
        feather.replace()
    </script>
</body>
</html>

