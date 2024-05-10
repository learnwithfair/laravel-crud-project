@extends('backend.layout.master')
@section('title')
All Category    
@endsection
@section('content')
 {{-- Option -01 --}}
    {{-- @if (session('success'))          
    <div id="alert" style = "background-color:green;color:white;">
        {{ session('success') }}
    </div>
    @endif --}}

    {{-- Option -02 --}}
    {{-- @if (session()->has('success'))          
    <div id="alert" style = "background-color:green;color:white;">
        {{ session()->get('success') }}
    </div>
    @endif --}}

    {{-- Option -03 --}}           
    
       @if (Session::has('success'))
       <div id="alert" style = "background-color:green;color:white;">
       {{ Session::get('success') }}
       @elseif (Session::has('warning'))
       <div id="alert" style = "background-color:yellow;color:black;">
       {{ Session::get('warning') }}
       @else
       <div id="alert" style = "background-color:red;color:white;">
       {{ Session::get('danger') }}
       @endif      
    </div>
  <x-header>
    {{-- <span>This is Header component</span> --}}
    <x-slot:title>
        <span>All </span>
    </x-slot:title>
  </x-header>
<table>
    <thead>
        <th>NAME</th>
        <th>DESCRIPTION</th>
        <th>ACTION</th>
    </thead>
    <tbody>
        @foreach ($categories as $category)                   
        <tr>
            <td>{{ $category->name}}</td>
            <td>{{ $category->description}}</td>
            <td>
                <a href="{{ route('categories.show',$category->id)}}">Show</a>
                <a href="{{ route('categories.edit',$category->id)}}">Edit</a>                        
                 <form action="{{ route('categories.destroy',$category->id) }}" method="post">
                @csrf
                @method('delete')
                <button onclick="return confirm('Do you wate to delete?')">Delete</button>
                </form>
                </td>
        </tr>                 
        @endforeach
    </tbody>
</table>
<a href="{{ route('categories.create') }}">Add Category</a>
    
@endsection
   