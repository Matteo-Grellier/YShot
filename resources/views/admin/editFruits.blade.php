@extends('layouts.app')

@section('title')
    <title>Admin Panel</title>
@endsection
@section('content')
    <form action="{{ route('admin.update_fruits', $fruits->id) }}" method="POST">
        @csrf
        @method("PUT")
        <input type="text" name="name" placeholder="name" value="{{ $fruits->name }}">
        <button type="submit">Envoyer</button>
    </form>
@endsection