<!DOCTYPE html>
<html>
    <head>
        <link ref="stylesheet" href={{asset("form/style.css")}}>
        <title>Error!!!</title>
        <script src={{asset("https://code.jquery.com/jquery-3.6.4.js")}} integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    </head>
    <body class="bg-purple">
        <div class="stars">
{{--            <div class="custom-navbar">--}}
{{--                <div class="brand-logo">--}}
{{--                   <img src="{{asset("layout/BanGiayStore1.png")}}" width="400px">--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="navbar-links">
                <ul>
                    <li><a href={{asset("page1")}} target="_blank">Home</a></li>
                    <li><a href={{asset("bootstrap-admin/login.html")}} target="_blank">About</a></li>
                    <li><a href={{asset("index-admin")}} target="_blank">Admin</a></li>
                    <li><a href="#" target="_blank">Features</a></li>
                    <li><a href="#" class="btn-request" target="_blank">Request A Project</a></li>
                </ul>
            </div>
            <div class="central-body">
                <img class="object_rocket" src={{asset("https://www.salehriaz.com/404Page/img/rocket.svg")}} width="400px" >
                <div class="earth_moon">
                    <img class="object_earth" src="" width="100px">
                    <img class="object_moon" src="" width="80px">
                </div>
            </div>
        </div>
    </body>
</html>
