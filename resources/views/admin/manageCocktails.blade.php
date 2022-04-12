@extends('layouts.app')

@section('title')
    <title>Admin Panel</title>
@endsection
@section('content')

    <div>   
        @include('admin.cocktails.cocktails')
    </div>
@endsection