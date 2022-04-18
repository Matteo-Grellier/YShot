@extends('layouts.app')

@section('title')
    <title>Admin Panel</title>
@endsection
@section('content')
<a href="{{ route('admin.home')}}">Retour au panel ADMIN</a>
<h3>Modification d'un nom d'alcool</h3>
<form action="{{ route('admin.update_alcool_name', $alcoolName->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="name" value={{ $alcoolName->name }}>
    <input type="text" name="degree" placeholder="degree" value={{ $alcoolName->degree }}>
    <select name="alcools_types_id">
        @foreach($alcoolsTypes as $alcoolType) 
            <option value={{ $alcoolType->id }}>{{ $alcoolType->name }}</option>
        @endforeach
    </select>
    <button type="submit">Update Type</button>
</form>
@endsection