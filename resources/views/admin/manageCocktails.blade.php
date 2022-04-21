@extends('layouts.app')

@section('title')
    <title>Admin Panel</title>
@endsection
@section('content')

    @if(!isset(Auth::user()->email))
    <script>window.location="{{ route('admin.login'); }}";</script>
    @endif

    <div class="manage_cocktail_container">
        <a href="{{route("admin.home")}}">< Retour au panel administrateur</a>
        <div>
            <h1>Liste des cocktails</h1>
        </div>   
        @include('admin.cocktails.cocktails')
    </div>
@endsection