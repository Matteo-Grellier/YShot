@extends('layouts.app')

@section('title')
    <title>Admin Panel</title>
@endsection
@section('content')
    <div class="manager-link-container">
        <div class="manager-link-element" onclick="location.href='{{ route('admin.manage_ingredients') }}'">
            <img src="./img/fruits.png" width="150px" height="100%"/>
            <h2>Gérer les ingrédients</h2>
            <p>Vous pourrez gérer vos listes d'ingrédients comme les softs, les alcools, les fruits etc...</p>
        </div>
        <div class="manager-link-element" onclick="location.href='{{ route('admin.manage_cocktails') }}'">
            <img src="./img/cocktail.png" width="150px" height="100%"/>
            <h2>Gérer les cocktails</h2>
            <p>Vous pourrez gérer les cocktails en modifiant leur composition et en créant des nouveaux</p>
        </div>
    </div>

    
@endsection
