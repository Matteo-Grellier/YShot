@extends('layouts.app')

@section('title')
    <title>YShot</title>

@section('content')
    <h1>YShot</h1>

    <div>
        <a href="{{ route('admin.login') }}">login</a>
        <a href="{{ route('admin.home') }}">admin</a>
    </div>

@endsection
