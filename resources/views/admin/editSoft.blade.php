@extends('layouts.app')

@section('title')
    <title>Admin Panel</title>
@endsection
@section('content')
<a href="{{ route('admin.home')}}">Retour au panel ADMIN</a>
<h3>Modification d'un soft</h3>
<form action="{{ route('admin.update_soft', $soft->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="name" value={{ $soft->name }}>
    <button type="submit">Update Soft</button>
</form>
@endsection