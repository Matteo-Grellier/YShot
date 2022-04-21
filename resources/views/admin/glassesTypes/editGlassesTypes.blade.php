@extends('layouts.app')

@section('title')
    <title>Admin Panel</title>
@endsection
@section('content')
<div class="edit-container">
    <a href="{{ route('admin.manage_ingredients')}}">Retour aux ingrédients</a>
    <h3>Modification d'un type de verre</h3>
    <form action="{{ route('admin.update_glasses_types', $glassType->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="name" placeholder="name" value={{ $glassType->name }}>
        <input type="file" name="image" accept=".gif, image/jpg, image/jpeg, image/png">
        <button type="submit">Update Type</button>
    </form>
</div>
@endsection