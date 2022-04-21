@extends('layouts.app')

@section('title')
    <title>Admin Panel</title>
@endsection
@section('content')
<div class="edit-container">
    <a href="{{ route('admin.manage_ingredients')}}">Retour aux ingrédients</a>
    <h3>Modification d'un sirop</h3>
    <form action="{{route('sirops.update', $sirops->id)}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name" value="{{ $sirops->name }}">
        <button type="submit" >Submit</button>
    </form>
</div>

@endsection