<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li> {{-- route is a function that accepts a param called name that'll be inside () --}}
        <li><a href="{{ route('contact') }}">Contact</a></li>
        {{-- <li><a href="{{ route('blog-post', ['id' => 1]) }}">Blog Post 1</a></li> --}}
    </ul>
    @yield('content')
    {{-- It's used to render a section 
    since it's a content section, we'll call it content--}}
</body>
</html>