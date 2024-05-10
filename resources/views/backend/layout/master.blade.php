<!DOCTYPE html>
<html lang="en">
<head>
    @include('backend.layout._head')
</head>
<body> 
   @include('backend.layout._header')
    <div align="middle">
        @yield('content')
        
    </div>


@include('backend.layout._footer')
</html>