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
        <form>
            <input type="text" name="username" placeholder="username">
            <input type="password" name="password" placeholder="password">
            <button>login</button>
            <p class="message">Not registered? <a href="{{route ('signup')}}">Create an account</a></p>
        </form>
        </div>
    </div>
</body>
</html>