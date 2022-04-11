@extends('layouts.app')

@section('title')
    <title>Admin Panel</title>
@endsection
@section('content')
    <div class="admin">   
        @include('admin.softs')
        @include('admin.alcoolsTypes.alcoolsTypes')
        @include('admin.glassesTypes.glassesTypes')
        @include('admin.sirops')
        @include('admin.fruits')
        @include('admin.alcoolsNames.alcoolsNames')
    </div>
    
@endsection
