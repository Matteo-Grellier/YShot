@extends('layouts.app')

@section('title')
    <title>Admin Panel</title>
@endsection
@section('content')
    <form action="{{ route('admin.update_fruits', $fruits->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <input type="text" name="name" placeholder="name" value="{{ $fruits->name }}">
        <input type="file" name="image" accept=".gif, image/jpg, image/jpeg, image/png">
        <button type="submit">Envoyer</button>
    </form>
@endsection