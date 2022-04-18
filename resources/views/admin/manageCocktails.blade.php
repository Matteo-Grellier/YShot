@extends('layouts.app')

@section('title')
    <title>Admin Panel</title>
@endsection
@section('content')

    <div class="manage_cocktail_container">
        <div>
            <a href="">< Retour</a>
            <h1>Liste des cocktails
        </div>   
        @include('admin.cocktails.cocktails')
    </div>
@endsection