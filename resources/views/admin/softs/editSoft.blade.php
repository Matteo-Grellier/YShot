@extends('layouts.app')

@section('title')
    <title>Admin Panel</title>
@endsection
@section('content')
<div class="edit-container">
    <a href="{{ route('admin.manage_ingredients')}}">Retour aux ingrédients</a>
    <h3>Modification d'un soft</h3>
    <form action="{{ route('admin.update_soft', $soft->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" placeholder="name" value={{ $soft->name }}>
        <button type="submit">Update Soft</button>
    </form>
</div>
@endsection