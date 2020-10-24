<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="{{asset('css/custom_home.css')}}">
</head>
<body>
    <style>
        body{
            background-color: #e6e8e6;
        }
    </style>
    @include('Partials.Navbar')
    @yield('content')
</body>
</html>