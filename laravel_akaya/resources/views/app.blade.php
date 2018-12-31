<html lang="{{ app()->getLocale() }}">
<head>
    <title>Kaya</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href=" {{ asset('css/app.css') }}" rel="stylesheet">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.ico') }}"  />
    <!--===============================================================================================-->

    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/dist/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400" rel="stylesheet" media="none" onload="if(media!='all')media='all'">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">

    <!--===============================================================================================-->

    <!--===============================================================================================-->
        <link href="{{ asset('css/_asdasue34b4c874.css') }}" rel="stylesheet">
</head>

<body class="bg-light">
    <div id="app"></div>

    <script src="{{ asset('js/app.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/tilt/tilt.jquery.min.js') }}"></script>
    <!--===============================================================================================-->
     <!-- My Scripts -->
    <script src="{{asset ('js/main.js')}}"></script>
<script>
        $(document).ready(function(){
            // Nav Menu functions
            if($('#nav_boolean').hasClass("_rooms")){
                $('.container').addClass('container-fluid').removeClass('container');
                $('.nav-search-cont').css({
                    display:'block',
                    transition: 'display ease 300ms'});

             }else if($('#nav_boolean').hasClass("_room")){

                $('.container-fluid').addClass('container').removeClass('container-fluid');
                $('.nav-search-cont').css({
                    display:'none',
                    transition: 'display ease 300ms'
                    });

             }else if($('#nav_boolean').hasClass("_kaya")){

                $('.container').addClass('container-fluid').removeClass('container');
                $('.nav-search-cont').css({display:'none'});

             }else{
                alert('else');
             };
        })
    </script>

</body>
</html>
