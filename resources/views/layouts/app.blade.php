<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("/css/app.css")}}">
    <link rel="stylesheet" href="{{asset("/css/admin.css")}}">
    <link rel="stylesheet" href="{{asset("/css/manage_cocktail.css")}}">
    <link rel="stylesheet" href="{{asset("/css/header-footer.css")}}">
    <link rel="stylesheet" href="{{asset("/css/main.css")}}">
    @yield('title')
</head>
<body>
    <header>
        <img src="{{asset("/img/yshot.png")}}" alt="logo" width="130px">
        <div class="menu-button">
            <div class="menu-button-burger"></div>
        </div>
        <div class="navbar_wrapper">
            <nav>
                <ul>
                    <li><a href="{{route("home")}}">Accueil</a></li>
                    <li><a href="{{route("cocktail")}}">Cocktail</a></li>
                    <li><a href="{{route("alcool")}}">Alcool</a></li>
                    <li><a href="{{route("soft")}}">Soft</a></li>         
                </ul>
                <li class="admin-li"><span>Vous êtes administrateur ? Accéder au </span><a href="{{route("admin.home")}}">panel administrateur</a></li>
            </nav>
        </div>
    </header>
    <main class="main-content">
        @yield('content')
    </main>
    <footer>

    </footer>
    <script src="{{asset("js/header.js")}}"></script>
</body>
</html>