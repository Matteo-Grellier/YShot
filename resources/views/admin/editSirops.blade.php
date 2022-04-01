@extends('layouts.app')

@section('title')
    <title>Admin Panel</title>
@endsection
@section('content')
<form action="{{route('sirops.update', $sirops->id)}}" method="POST">
    @csrf
    <div class="form-group">
        <input type="text" name="name" placeholder="name" value="{{ $sirops->name }}">
    </div>
    <button type="submit" >Submit</button>
</form>
@endsection