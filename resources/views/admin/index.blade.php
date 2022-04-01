@extends('layouts.app')

@section('title')
    <title>Admin Panel</title>
@endsection
@section('content')
    <div class="m-auto">   
        @include('admin.softs')
        @include('admin.alcoolsTypes.alcoolsTypes')
        @include('admin.glassesTypes.glassesTypes')
        @include('admin.sirops')
        @include('admin.fruits')
    </div>
    

@endsection
