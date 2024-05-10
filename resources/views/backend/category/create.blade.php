@extends('backend.layout.master')
@section('title')
Create Category    
@endsection
@section('content')
@include('backend.layout._formValidation')
<x-header>
    {{-- <span>This is Header component</span> --}}
    <x-slot:title>
        <span>Create </span>
    </x-slot:title>
  </x-header>
<form action="{{ route('categories.store') }}" method="post">
    @csrf
    <label for="name">Name : </label>
    <input type="text" name = "name" placeholder="Enter Name "><br><br>
    @error('name')
    <span style = "color:red;">{{ $message }}</span><br><br>
        
    @enderror
    <label for="name">Description : </label>
    <input type="text" name = "description" placeholder="Enter Description "><br><br>
    @error('description')
    <span style = "color:red;">{{ $message }}</span><br><br>
        
    @enderror
    <input type="submit">

</form>
<a href="{{ route('categories.index') }}">All Post</a>   
@endsection