@extends('layouts.app')

@section('title')
    <title>YShot</title>

@section('content')
    <div class="home-page-welcome home-page">
        <div class="welcome-content">
            <div>
                <h1>Bienvenue</h1>
                <p>Bienvenue sur Yshot, le projet de notre module Framework web. 
                    Le but est de pouvoir présenter nos différentes boissons via l'utilisation de Laravel.
                    Vous y retrouverez les cocktails, softs et autres alcools. De plus, il y a un panel administrateur accessible via un compte utilisateur.
                    On vous souhaite une bonne découverte du projet !
                </p>
            </div>
            <img src="img/lemonade-img.jpg" width="400px">
        </div>
    </div>
    <div class="home-page home-page-link-element">
        <h1>Choisis ton type de boisson</h1>
        <div class="underline-block-h1"></div>
        <div class="link-container">
            <div class="link-div" onclick="location.href='{{ route('cocktail') }}'">
                <img src="img/cocktail.png" alt="" width="200px">
                <h2>Cocktails</h2>
                <p>Ici se trouve tous les cocktails disponibles sur la plateforme</p>
            </div>
            <div class="link-div" onclick="location.href='{{ route('alcool') }}'">
                <img src="img/beer.png" alt="" width="200px">
                <h2>Alcools</h2>
                <p>Ici se trouve tous les alcools disponibles sur la plateforme</p>
            </div>
            <div class="link-div" onclick="location.href='{{ route('soft') }}'">
                <img src="img/can.png" alt="" width="200px">
                <h2>Softs</h2>
                <p>Ici se trouve tous les softs disponibles sur la plateforme</p>
            </div>
        </div>

    </div>
@endsection