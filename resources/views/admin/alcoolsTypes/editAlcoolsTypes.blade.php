@extends('layouts.app')

@section('title')
    <title>Admin Panel</title>
@endsection
@section('content')
<a href="{{ route('admin.home')}}">Retour au panel ADMIN</a>
<h3>Modification d'un type d'alcool</h3>
<form action="{{ route('admin.update_alcools_types', $alcoolType->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="name" value={{ $alcoolType->name }}>
    <button type="submit">Update Type</button>
</form>
@endsection