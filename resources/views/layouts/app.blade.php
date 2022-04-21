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
    <link rel="icon" href="{{asset("/favicon.ico")}}" />
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
                @if(isset(Auth::user()->email))
                <li class="logout-button"><a href="{{route("admin.login.logout")}}">Se déconnecter</a></li>
                @endif
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
        <div>
            <h2>Réalisé par </h2>
            <h3>Mathéo LEGER</h3>
            <h3>Mattéo GRELLIER</h3>
            <h3>Louis BROCHARD</h3>
        </div>
        <div>
            <h3>Yshot</h3>
            <a href="{{route("home")}}">Accueil</a>
            <a href="{{route("cocktail")}}">Cocktail</a>
            <a href="{{route("alcool")}}">Alcool</a>
            <a href="{{route("soft")}}">Soft</a>
        </div>
        <div class="icon-footer">
            <a target="_blank" href="https://github.com/Matteo-Grellier/YShot"><img src="{{asset("img/github.png")}}" alt="" width="30px" style="filter: brightness(0) invert(1);"></a>
            <a target="_blank" href="https://laravel.com/"><img src="{{asset("img/laravel.png")}}" alt="" width="30px" style="filter: brightness(0) invert(1);"></a>
            <a target="_blank" href=""><img src="{{asset("img/instagram(1).png")}}" alt="" width="30px" style="filter: brightness(0) invert(1);"></a>
            
        </div>
    </footer>
    <script src="{{asset("js/header.js")}}"></script>
</body>
</html>