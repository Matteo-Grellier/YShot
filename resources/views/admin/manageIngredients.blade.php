@extends('layouts.app')

@section('title')
    <title>Admin Panel</title>
@endsection
@section('content')

    @if(!isset(Auth::user()->email))
    <script>window.location="{{ route('admin.login'); }}";</script>
    @endif

    <div class="ingredients-container">   
        <a href="{{route("admin.home")}}">Retour au panel administrateur</a>
        @include('admin.softs.softs')
        @include('admin.alcoolsTypes.alcoolsTypes')
        @include('admin.glassesTypes.glassesTypes')
        @include('admin.sirops.sirops')
        @include('admin.fruits.fruits')
        @include('admin.alcoolsNames.alcoolsNames')
    </div>
@endsection