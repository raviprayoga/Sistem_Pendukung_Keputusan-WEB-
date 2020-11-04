<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/custom_login.css')}}">
</head>
<body>
    <div class="background1">
        <div class="form">
        <p class="paraf1">Login</p>
        @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
            @endif
        <form action="/loginPost" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="text" name="email" placeholder="email" id="email">
            <input type="password" name="password" placeholder="password">
            <button type="submit">login</button>
            <p class="message">Not registered? <a href="{{route ('signup')}}">Create an account</a></p>
        </form>
        </div>
    </div>
</body>
</html>