@extends('backend.layout.master')
@section('title')
Single Category    
@endsection
@section('content')
<x-header>
    {{-- <span>This is Header component</span> --}}
    <x-slot:title>
        <span>Single </span>
    </x-slot:title>
  </x-header>
<p>Name : {{ $category->name }}</p>
<p>Description : {{ $category->description  }}</p>
<a href="{{ route('categories.index') }}">All Post</a>    
@endsection